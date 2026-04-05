<?php

/* 
GTTFCount
Graphical True Type Font Website Hit Counter
Version 1.1 8/15/2025
    Modified from Klemen Stirn's PHPGcount https://www.phpjunkyard.com/php-graphical-hit-counter.php
Copyright 2025 Chasnah https://chasnah.com/
*/

// ------------Editable Variables------------

// Full default ttf font name from fonts directory
$default_font = 'Px437_IBM_VGA_8x16';

// Set default size (small, medium, large)
$default_size = 'small';

// Set default text color (hex value)
$default_tcolor = '66ff66';

// Set default background color (hex value)
$default_bgcolor = '282828';

// Set default border visibility (0 = disabled 1 = enabled)
$default_border = 0;

// Default final output image format (gif, png, or jpeg)
$default_ext = 'gif';

// Default minimum number of digits "Zero Padding" (0 = disabled)
$default_min_digits = 6;

// Enable or disable unique visits by default (0 = disabled 1 = enabled)
$default_count_unique = 1;

// Hours until unique visit cookie expires by default (1-24)
$default_unique_hours = 12;


// ------------Main Code------------

// Disable error notices
error_reporting (E_ALL ^ E_NOTICE);

// Do not cache file output
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


// Get input for Page ID
if (! isset($_GET['page'])) {
    pj_html_exit ('This script must be called with <b>?page=PAGEID</b>.');
}

// Only allow valid characters in Page ID
$page = preg_replace('/[^a-zA-Z0-9\-_\.]/','',$_GET['page']);

// Stop if Page ID is not valid
if (! strlen($page)) {
    pj_html_exit('Page ID is missing or contains only invalid characters. Valid characters include: a-z, A-Z, 0-9, &quot;.&quot;, &quot;-&quot; and &quot;_&quot;');
}

// Get font selection
$font = isset($_GET['font']) ? preg_replace('/[^a-zA-Z0-9\-_\.]/','',$_GET['font']) : $default_font;

// Get font size selection
$fsize = isset($_GET['size']) ? preg_replace('/[^a-z]/','',$_GET['size']) : $default_size;

// Get font color selection
$thex = isset($_GET['tcolor']) ? preg_replace('/[^a-z0-9]/','',$_GET['tcolor']) : $default_tcolor;

// Get background color selection
$bghex = isset($_GET['bgcolor']) ? preg_replace('/[^a-z0-9]/','',$_GET['bgcolor']) : $default_bgcolor;

// Get border selection
$border = isset($_GET['border']) ? preg_replace('/[0-1]/','',$_GET['border']) : $default_border;

// Get file extension selection
$ext = isset($_GET['ext']) ? preg_replace('/[^a-z]/','',$_GET['ext']) : $default_ext;

// Get zero padding selection
$min_digits = isset($_GET['digits']) ? preg_replace('/[^0-9]/','',$_GET['digits']) : $default_min_digits;

// Get unique visitors selection
$count_unique = isset($_GET['unique']) ? preg_replace('/[^0-1]/','',$_GET['unique']) : $default_count_unique;

// Get unique hours selection
$unique_hours = isset($_GET['hours']) ? preg_replace('/[^0-9]/','',$_GET['hours']) : $default_unique_hours;

// Cookie, log & font filenames
$cname = 'counter_unique_'.$page;
$logfile = '/srv/counter.txt';
$font_dir = 'fonts/'.$font.'.ttf';

// Does the logfile exist?
if (! file_exists($logfile)) {
    pj_html_exit('Log file was not found. Make sure a file named <b>'.$page.'.txt</b> exists in the <b>/logs</b> directory.');
}

// Open log file
if ($fp = @fopen($logfile, 'r+')) {
    // Lock log file
    $locked = flock($fp, LOCK_EX);

    //Is lock successful?
    if ($locked) {
        // Read count
        $count = intval(trim(fread($fp, filesize($logfile))));

        // If unique hits selected check for unique hit
        if ($count_unique == 0 || ! isset($_COOKIE[$cname])) {
            //Increment count by 1 and write updated value to log
            ++$count;
            rewind($fp);
            fwrite($fp, $count);

            // Print Cookie and P3P compact privacy policy
            header('P3P: CP="NOI NID"');
            setcookie($cname, 1, time()+60*60*$unique_hours);
        }
    }
    else {
        //Lock unsuccessful
        $count = 1;
    }
    // Release file lock and close handle
    flock($fp, LOCK_UN);
    fclose($fp);
}
else {
    pj_html_exit('<b>Log file is not writable</b> chmod to 666.');
}

// Enable zero-padding if requested
if ($min_digits) {
    $count = sprintf('%0'.$min_digits.'s',$count);
}

// Get current length of $count to calculate required image width
$count_length = mb_strlen($count);
// Assign dimensions for different sizes 
switch($fsize) {
    case 'small': $img_width = $count_length*18; $img_height = 30; break;
    case 'medium': $img_width = $count_length*30; $img_height = 50; break;
    case 'large': $img_width = $count_length*43; $img_height = 74; break;
}
// Make font size 3/5th of image height
$font_size = 24;

// Convert HEX color to RGB values
list ($bgr, $bgg, $bgb) = sscanf($bghex, '%02x%02x%02x');
list ($tr, $tg, $tb) = sscanf($thex, '%02x%02x%02x');

// Create base image & assign colors
$img = imagecreate($img_width,$img_height);
$textbgcolor = imagecolorallocate($img, $bgr,$bgg,$bgb);
$textcolor = imagecolorallocate($img, $tr,$tg,$tb);

// Fill background with color & add border if requested
imagefilledrectangle($img,0,0,$img_width,$img_height,$textbgcolor);
if ($border = 1) {
    imagerectangle($img,0,0,$img_width-1,$img_height-1,$textcolor);
}

// Create textbox, calculate x & y coords, then place ttf text in image
$textbox = imagettfbbox($font_size, 0, $font_dir,$count);
$x = intval(($img_width - $textbox[4])/2);
$y = intval(($img_height - $textbox[5])/2);
imagettftext($img,$font_size,0,$x,$y,$textcolor,$font_dir,$count);

// Header & image type selection, generate and output final image
switch( $ext ) {
    case 'gif': header('Content-type:image/gif'); imagegif($img); break;
    case 'png': header('Content-type:image/png'); imagepng($img); break;
    case 'jpeg':
    case 'jpg': header('Content-type:image/jpeg'); imagejpeg($img); break;
    default:
}

// Clean up
imagedestroy($img);


// HTML error page
function pj_html_exit($msg)
{
    header("Content-type: text/html");
    ?>
    <!doctype html>
    <html lang=en>
    <head>
    <meta charset=utf-8>
    <title>Error</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif;">
    <p><span style="color: red; font-weight: bold;">ERROR</span><br><br><?php echo $msg; ?></p>
    </body>
    </html>
    <?php
    exit;
}

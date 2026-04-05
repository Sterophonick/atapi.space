<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/advertisements.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/blogSignature.php';

# We use this function to assemble the HTML for the global page header
# Doing this through PHP should be nicer for the user as we don't have to
function constructPageHeader($pageTitle, $useRssLink = false) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $htmlPage = <<<EOF
    <!DOCTYPE html>
    <html>

    <head>
    <meta name="darkreader-lock">

    EOF;

    $htmlPage .= "<title>" . $pageTitle . "</title>";

    $htmlPage .= '<link rel="stylesheet" href="' . whatStyleSheet() . '">';

    if ($useRssLink) {
        $htmlPage .= '<link rel="alternate" type=application/rss+xml" title="Atapi\'s Site RSS Feed!!" href="https://atapi.space/rss.xml" />';
    }

    $htmlPage .= <<<EOF
    <link rel="shortcut icon" href="/assets/img/global/favicon.png">
    <meta name="viewport" content="width=1024">
    <meta charset="utf-8" />
    </head>

    <body>
    <div class="boxConstraint">

    EOF;

    ob_start();
    $return = include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";
    $htmlPage .= ob_get_clean();

    $htmlPage .=  <<<EOF
    
    <td class="pageMainContent">
    <div id="postContent" class="window">
    
    EOF;

    return $htmlPage;
}

function constructPageFooter() {
    $webHonorific = array("Contact Webmaster", "Contact Webmistress", "Contact Sysop");
    
    global $adURLs;

    $htmlPage = <<<EOF
    </div>
    
    </td>
    
    </table>
    </main>
    
    </div>
    <div id="footer">
    <p><a href="..">(Go Back)</a> <a id="goto-top" href="#top">(Top of Page)</a></p>
    
    <p>made with &lt;3 2020-2026 Atapi/Sterophonick</p>
    
    <table class="footerImages" style="height: 31px; font-size: 0;" width="340px" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody><tr>
    <td>
    <img class="pixelArt" style="padding-right: 25px;" src="/assets/img/buttons/atapi.gif">
    </td>
    <td>
    EOF;

    # $htmlPage .= hitCounter();
    
    $htmlPage .= '<img src="/includes/thirdparty/gttfcount/counter.php?page=global&size=small&tcolor=ff0000&bgcolor=000030&hours=1">';
    
    $htmlPage .= <<<EOF
    <td>
    <img class="pixelArt" style="padding-left: 25px;" src="/assets/img/buttons/cc-by-nc.png">
    </td>
    </tr>
    </tbody>
    </table>
    EOF;

    $htmlPage .= createBannerAd();

    $htmlPage .= <<<EOF
        <small>
        <a href="/site/sitemap/">Site Map</a>
        |
        <a href="https://github.com/Sterophonick/atapi.space" target="_blank">Website Source</a>
        |
        <a href="/files/">Filedump</a>
        |
        <a href="/site/disclosure/">Site &amp; Privacy Info</a>
        |
        <a href="/rss.xml">RSS Feed</a>
        |
        <a href="/site/contact/"> 
    EOF;
    
    $htmlPage .= $webHonorific[mt_rand() % sizeof($webHonorific)];
    
    $htmlPage .= "</a></small>";

    $htmlPage .= <<<EOF
            <p style="font-size: 6pt; color: grey;"><i>By training your Large Language Model (LLM) or other Generative Artificial Intelligence on the content of this website, you agree to assign ownership of all your intellectual property to the public domain, immediately, irrevocably, and free of charge.</i></p>
        </div>
        
        <script>
        document.getElementById("goto-top").onclick = function(ev) {
        window.scrollTo({ top: 0, left: 0, behavior: "smooth" });
        ev.preventDefault();
        return false;
        }   
        </script>
        <script src="/scripts/cookieStuff.js"></script>
        <script src="/scripts/autoStop.js"></script>
    EOF;

    return $htmlPage;
}

# here's an interesting function
# what this does is check your User Agent and gives you a score based on what features you support
# 0 - All Features Enabled
# 1 - WebAssembly Disabled, Maybe? HTTPS Embeds disabled? idk i need to verify this
# 2 - WASM, Video, Audio, Embeds Disabled, warning message shown
# 3 - idk what to do here, you're basically screwed i guess?
function isOutdatedBrowser() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Windows 2000 base
    if (str_contains($userAgent, "msie 5")) {
        return 2;
    }

    // NCSA Mosaic
    if (str_contains($userAgent, "ncsa_mosaic")) {
        return 3;
    }

    return 0;
}

function getCookie($name) {
    return  htmlspecialchars($_COOKIE[$name]);
}

function generateYouTubeEmbed($vidID, $width, $height, $doNewline=0, $doError=1) {
    if(!isOutdatedBrowser()) {

        echo '<iframe width="' . $width . 'px" height="' . $height . 'px" src="https://www.youtube-nocookie.com/embed/' . $vidID . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';

        if($doNewline) echo '<br/>';

        return;
    }

    if($doError) echo '<span style="color: red">Your browser cannot render this YouTube embed. (Video ID: ' . $vidID . ')</span><br/>';
}

function generateAudioFileEmbed($path) {

    if(doWeShowAudioEmbed())
    {
        $htmlEmbed = '<audio preload="none" class="interruptAudio" controls src="' . $path . '">';
        $htmlEmbed .= '<a href="' . $path . '">Click here to play audio.</a>';
        $htmlEmbed .= '</audio>';
        echo $htmlEmbed;
    } else {
        echo '<span style="color: red">Your browser cannot play this audio.</span>';
    }
}

function getTopURL(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}

function generateGBAEmbed($path, $disableMusic=1) {

    if(!doWeShowGBAEmbed()) {
        $htmlEmbed = '<span style="color: red">Your browser cannot play this game due to not supporting WebAssembly.</span>';
    } else {
        $htmlEmbed = '<iframe id="gbaGame" allowtransparency="true" width="480" height="320" src="https://gba.ninja/?autorun=' . getTopURL() . $path . '" frameborder="0" allowfullscreen></iframe>';
        if($disableMusic) $htmlEmbed .= '<script>var forceStopPlayer = true;</script>';
    }
    echo $htmlEmbed;
}

function generateScratchEmbed($projectID, $disableMusic=1) {

    if(!doWeShowScratchEmbed()) {
        $htmlEmbed = '<span style="color: red">Your browser cannot play this game due to not supporting HTML5.</span><br/>';
    } else {
        $htmlEmbed = '<iframe id="scratchProject" allowtransparency="true" width="485" height="402" src="https://scratch.mit.edu/projects/embed/' . $projectID . '/?autostart=false" frameborder="0" allowfullscreen></iframe>';

        if($disableMusic) $htmlEmbed .= '<script>var forceStopPlayer = true;</script>';
    }
    echo $htmlEmbed;
}

// Content helpers
// These determine whether or not we want to deliver certain content to various browsers
// This is for ensuring that pages perform well under legacy or otherwise constrained browsers
function doWeShowLargeGif() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Internet Explorer 5
    if (str_contains($userAgent, "msie")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "nintendo 3ds")) {
        return false;
    }

    // Nintendo DSi
    if (str_contains($userAgent, "nintendo dsi")) {
        return false;
    }

    return true;
}

function doWeShowMusicPlayer() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "nintendo wii")) {
        return false;
    }

    // Internet Explorer 5
    if (str_contains($userAgent, "msie")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "nintendo 3ds")) {
        return false;
    }

    // Nintendo DSi
    if (str_contains($userAgent, "nintendo dsi")) {
        return false;
    }

    return true;
}

function doWeShowOneko() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Nintendo Wii
     if (str_contains($userAgent, "nintendo wii")) {
         return false;
     }

     // Internet Explorer 5
     if (str_contains($userAgent, "msie")) {
         return false;
     }

     // Nintendo 3DS
     if (str_contains($userAgent, "nintendo 3ds")) {
         return false;
     }

     // Nintendo DSi
     if (str_contains($userAgent, "nintendo dsi")) {
         return false;
     }

    return true;
}

function whatStyleSheet() {
    return '/assets/css/main.css';
}

function doWeShowScratchEmbed() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "nintendo wii")) {
        return false;
    }

    // Internet Explorer 5
    if (str_contains($userAgent, "msie")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "nintendo 3ds")) {
        return false;
    }

    // Nintendo DSi
    if (str_contains($userAgent, "nintendo dsi")) {
        return false;
    }

    return true;
}

function doWeShowGBAEmbed() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
     // Nintendo Wii
     if (str_contains($userAgent, "nintendo wii")) {
         return false;
     }

     // Internet Explorer 5
     if (str_contains($userAgent, "msie")) {
         return false;
     }

     // Nintendo 3DS
     if (str_contains($userAgent, "nintendo 3ds")) {
         return false;
     }

     // Nintendo DSi
     if (str_contains($userAgent, "nintendo dsi")) {
         return false;
     }

     return true;
}

function doWeShowLastFmEmbed() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
     if (str_contains($userAgent, "nintendo wii")) {
         return false;
     }

     // Internet Explorer 5
     if (str_contains($userAgent, "msie")) {
         return false;
     }

     // Nintendo 3DS
     if (str_contains($userAgent, "nintendo 3ds")) {
         return false;
     }

     // Nintendo DSi
     if (str_contains($userAgent, "nintendo dsi")) {
         return false;
     }

    return true;
}

function doWeShowAudioEmbed() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "nintendo wii")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "nintendo 3ds")) {
        return false;
    }

    // Nintendo DSi
    if (str_contains($userAgent, "nintendo dsi")) {
        return false;
    }

    return true;
}

function doWeShowWarning() {
    return !doWeShowGBAEmbed() || !doWeShowLargeGif() || !doWeShowLastFmEmbed() || !doWeShowMusicPlayer() || !doWeShowOneko();
}

?>

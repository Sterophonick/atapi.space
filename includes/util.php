<?php

# We use this function to assemble the HTML for the global page header
# Doing this through PHP should be nicer for the user as we don't have to
function constructPageHeader($pageTitle) {

    $htmlPage = <<<EOF
    <!DOCTYPE html>
    <html>

    <head>
    <meta name="darkreader-lock">

    EOF;

    $htmlPage .= "<title>" . $pageTitle . "</title>";

    #TODO: This will need to be altered based on what Browser the client is using. :3
    if(!isOutdatedBrowser()) {
        $htmlPage .= '<link rel="stylesheet" href="/assets/css/main-site.css">';
    } else {
        $htmlPage .= '<link rel="stylesheet" href="/assets/css/main-site-legacy.css">';
    }

    $htmlPage .= <<<EOF
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/assets/img/global/favicon.ico">
    </head>

    <body>
    <div class="mainContainer">

    EOF;

    ob_start();
    $return = include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";
    $htmlPage .= ob_get_clean();

    $htmlPage .=  '<div class="mainContent">';

    return $htmlPage;
}

function constructPageFooter() {
    $htmlPage = <<<EOF
    <br/>
    </div>
    <div class="footerContainer">
        <div id="footer">
            <div id="footerSeparator">
                <img width="100%" height="6px" id="spacer" src="/assets/img/global/border.png">
            </div>
            <div id="message">
                <p>
                    <a href="..">(Go Back)</a>
                    <a href="#top">(Top of Page)</a><br/>
                </p>
                <img class="pixelArt" src="/assets/img/buttons/atapi.gif"> <img class="pixelArt" src="/assets/img/buttons/cc-by-nc.png"><br/>
                <p>
                    made with love 2020-2025 Atapi/Sterophonick<br/>
                    any and all mentions of properties not mine belong to their respective owners<br/>
                </p>
    EOF;

     if($_SERVER['SERVER_NAME'] == "atapi.space" || $_SERVER['SERVER_NAME'] == "alt.atapi.space") $htmlPage .= "<div align='center'><a href='https://www.websitecounterfree.com'><img src='https://www.websitecounterfree.com/c.php?d=9&id=60115&s=1' border='0' alt='Free Website Counter'></a><br / ><small><a href='https://www.websitecounterfree.com' title='Free Website Counter'></a></small></div><br/>";

    $htmlPage .= <<<EOF
        <small>
                <a href="/site/sitemap.php">Site Map</a>
                 -
                <a href="https://github.com/Sterophonick/atapi.space" target="_blank">Website Source</a>
                 -
                <a href="/files/">Filedump</a>
                 -
                <a href="/site/disclosure.php">Privacy Policy</a>
                <br/>
        </small>
    EOF;

    if(doWeShowOneko()) {
        $htmlPage .= <<<EOF
            <span><input type="checkbox" onclick="showOneko()" id="enableOneko"><small>Disable Oneko</small></span>
        EOF;
    }
    if(doWeShowMusicPlayer()) {
        $htmlPage .= <<<EOF
            <span><input type="checkbox" onclick="musicCookie()" id="enableAutoplay"><small>Don't Autoplay Music</small></span>
            <script src="/scripts/cookieStuff.js"></script>
            <script src="/scripts/autoStop.js"></script>
        EOF;
    }

    $htmlPage .= <<<EOF
            <p></p>
        </div>

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

    $htmlEmbed = '<audio class="interruptAudio" controls src="' . $path . '">';
    $htmlEmbed .= '<a href="' . $path . '">Click here to play audio.</a>';
    $htmlEmbed .= '</audio>';
    echo $htmlEmbed;
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

    if(isOutdatedBrowser()) {
        $htmlEmbed = '<span style="color: red">Your browser cannot play this game due to not supporting WebAssembly.</span>';
    } else {
        $htmlEmbed = '<iframe id="gbaGame" allowtransparency="true" width="480" height="320" src="https://gba.ninja/?autorun=' . getTopURL() . $path . '" frameborder="0" allowfullscreen></iframe>';
        if($disableMusic) $htmlEmbed .= '<script>var forceStopPlayer = true;</script>';
    }
    echo $htmlEmbed;
}

function generateScratchEmbed($projectID, $disableMusic=1) {

    if(isOutdatedBrowser()) {
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
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }

    return true;
}

function doWeShowMusicPlayer() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "Nintendo Wii")) {
        return false;
    }

    // Internet Explorer 5
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }

    return true;
}

function doWeShowOneko() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "Nintendo Wii")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }


    // Internet Explorer 5
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }

    return true;
}

function whatStyleSheet() {

}

function doWeShowScratchEmbed() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Nintendo Wii
    if (str_contains($userAgent, "Nintendo Wii")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }


    // Internet Explorer 5
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }
}

function doWeShowGBAEmbed() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "Nintendo Wii")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }


    // Internet Explorer 5
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }
}

function doWeShowLastFmEmbed() {
     $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // Nintendo Wii
    if (str_contains($userAgent, "Nintendo Wii")) {
        return false;
    }

    // Nintendo 3DS
    if (str_contains($userAgent, "Nintendo 3DS")) {
        return false;
    }


    // Internet Explorer 5
    if (str_contains($userAgent, "msie 5")) {
        return false;
    }
}

?>

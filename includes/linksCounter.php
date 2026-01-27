<?php

// this function counts how many <a> tags there are in the html of a php doc, making sure to suppress warnings of malformed html
// an <a> tag will not be counted if the attribute "skipcount" exists anywhere

function returnHrefCount($file) {
    $currentDocument = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $file);
    
    $dom = new DOMDocument();
    @$dom->loadHTML($currentDocument);
    
    $links = $dom->getElementsByTagName('a');
    
    $linkCount = 0;
    
    foreach ($links as $link) {
        if($link->hasAttribute('href')) {
            if(! ($link->hasAttribute('skipcount'))) {
                $linkCount++;
            }
        }
    }
    
    return $linkCount;
}

function countWebLinks() {
    $totalLinks = returnHrefCount("/site/links/emu/index.php");
    $totalLinks += returnHrefCount("/site/links/historical/index.php");
    $totalLinks += returnHrefCount("/site/links/linux/index.php");
    $totalLinks += returnHrefCount("/site/links/misc/index.php");
    $totalLinks += returnHrefCount("/site/links/gaming/index.php");
    $totalLinks += returnHrefCount("/site/links/homebrew/index.php");
    $totalLinks += returnHrefCount("/site/links/scene/index.php");
    $totalLinks += returnHrefCount("/site/links/shortwave/index.php");
    $totalLinks += returnHrefCount("/site/links/essays/index.php");

    echo "Counting " . $totalLinks . " links in 9 categories.";
}

?>

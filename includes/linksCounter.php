<?php

// this function merely counts the amount of times we say "href" in the Web Links subpages.
// if we are to keep doing this, then there cannot be an href anywhere else in the php file. everything else is handled by the header and footer.

function returnHrefCount($file) {
    $currentDocument = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $file);
    return substr_count($currentDocument, "href");
}

function countWebLinks() {
    $totalLinks = returnHrefCount("/site/links/emu/index.php");
    $totalLinks += returnHrefCount("/site/links/historical/index.php");
    $totalLinks += returnHrefCount("/site/links/linux/index.php");
    $totalLinks += returnHrefCount("/site/links/misc/index.php");
    $totalLinks += returnHrefCount("/site/links/gaming/index.php");
    $totalLinks += returnHrefCount("/site/links/homebrew/index.php");
    $totalLinks += returnHrefCount("/site/links/scene/index.php");

    echo "Counting " . $totalLinks . " web links in 7 categories.";
}

?>

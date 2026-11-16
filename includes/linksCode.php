<?php

function returnTotalLinkCount() {
    $file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/json/webLinks.json');
    $jsonData = json_decode($file, true);
    
    $linkCount = 0;
    
    foreach($jsonData as $category => $categoryData) {
        foreach($categoryData['entries'] as $entry) {
            $linkCount += 1;
        }
    }
    
    return $linkCount;
}

function faviconSelectLogic($file) {
    if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/assets/img/links/favicons/" . $file . ".png")) {
        return "default";
    }
    
    return $file;
}

// expects entry data
function printLinkLogic($entry) {
    return $entry["link"];
}

function printLinkData($category) {
    $file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/json/webLinks.json');
    $jsonData = json_decode($file, true);
    
    $categoryData = $jsonData[$category];
    
    echo '<h1><img style="vertical-align:middle" src="/assets/img/links/icon.png"> ' . $categoryData["name"] . '</h1>';
    echo '<p>' . $categoryData["desc"] . '</p><br/>';
    
    // loop over each entry in our links category
    foreach($categoryData['entries'] as $entry) {
        
        echo '<div class="innerScrollBox" style="width: 540px; margin: auto">';
        
        echo '<table class="fixed" border="0" cellspacing="10px" cellpadding="0" style="text-align: left">';
        echo '<colgroup> <col width="48px"> <col width="482px"> </colgroup>';
        
        echo '<tr><td>';
        echo '<div class="linkImgContainer">';
        echo '<img class="linkImg" width="48px" height="48px" src="/assets/img/links/favicons/' . faviconSelectLogic($entry["favicon"]) . '.png">';
        echo '</div>';
        echo '</td>';
        
        echo '<td>';
        echo '<div class="linkBody">';
        
        echo '<a href="' . printLinkLogic($entry) . '">' . $entry["name"] . '</a><br/>';
        echo '<p>' . $entry["desc"] . '</p>';
        
        echo '</div>';
        echo '</td>';
        echo '</tr>';
        
        echo '</table>';
        echo '</div><br/>';
    }
}

function countWebLinks() {
    $totalLinks = returnTotalLinkCount();

    echo "Counting " . $totalLinks . " links in 9 categories.";
}

?>

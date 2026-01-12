<?php

// Call the LastFM REST API to get the stats of my shit because I can't trust many other services to do exactly what I want.

$lastFmKey = trim(file_get_contents("/srv/.lfm_key")); // Do not store this in my source code. Always use a way around it like an env var or systemd edit.
$lastFmUser = "Sterophonick"; // Of course, this can be what you want, but since this is my world, we use my user.

// This will return an array with four things:
// 1: Song Name
// 2: Song Artist
// 3: Song Album
// 4: URL to album artwork.
// 5: LastFm URL
function getLastFmData() {
    global $lastFmUser;
    global $lastFmKey;
    
    $lastFmDataArray = array("", "", "[Unknown Album]", "/assets/img/home/lastfmicons/empty.png", "");
    
    $lastFmFetch = @file_get_contents("https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=" . $lastFmUser . "&api_key=" . $lastFmKey . "&format=json");
    
    // if the server returns an http error, we just cancel it and give up lol
    if ($lastFmFetch === FALSE) {
        return $lastFmDataArray;
    }
    
    $lastFmDecode = json_decode($lastFmFetch, true);
    
    $lastFmDataArray[0] = $lastFmDecode["recenttracks"]["track"][0]["name"];
    $lastFmDataArray[1] = $lastFmDecode["recenttracks"]["track"][0]["artist"]["#text"];
    
    $albumText = trim($lastFmDecode["recenttracks"]["track"][0]["album"]["#text"]);
    if(!empty($albumText)) $lastFmDataArray[2] = $albumText;
    
    $imgUrl = $lastFmDecode["recenttracks"]["track"][0]["image"][0]["#text"];
    if(!empty($imgUrl)) $lastFmDataArray[3] = $imgUrl;
    
    $lastFmDataArray[4] = $lastFmDecode["recenttracks"]["track"][0]["url"];
    
    return $lastFmDataArray;
}

?>

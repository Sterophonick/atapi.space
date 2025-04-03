<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Guestbook");

?>

<h1><img style="vertical-align:middle" src="\assets\img\guestbook\icon.png"> Guestbook</h1>

<?php
$gbUrl = null;

// if https is available, use https, otherwise do http
if($_SERVER['HTTPS']) {
    $gbUrl = "https://users3.smartgb.com/g/g.php?a=s&i=g36-33432-a2";
} else {
    $gbUrl = "http://users3.smartgb.com/g/g.php?a=s&i=g36-33432-a2";
}

echo '<iframe id="scratchProject" width="100%" height="1024px" src="' . $gbUrl . '"></iframe>';
?>

<br/>
<?php

echo constructPageFooter();

?>

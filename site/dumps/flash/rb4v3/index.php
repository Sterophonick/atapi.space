<?php

$customMusicSelections = array(
    "Music Disabled", "",
);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Dumps :: Legacy Flash Content :: Red Ball 4: Volume 3");

?>

<h1><img style="vertical-align:middle" src="/assets/img/dumps/flash/icon.png"> Red Ball 4: Volume 3</h1>
<p>One of my old favorites.</p><br/>

<object width="640" height="480"
classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
codebase="http://macromedia.com">
<param name="src" value="/files/redball4-volume3.swf">
<param name="quality" value="high">
<param name="allowfullscreen" value="true">

<embed src="/files/redball4-volume3.swf" 
width="640" height="480"
quality="high" 
pluginspage="http://macromedia.com" 
type="application/x-shockwave-flash" 
allowfullscreen="true"
</embed>
</object>


<?php echo constructPageFooter(); ?>

<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4 style="text-align: center">Fun Fact!</h4>
        <p>
            A remaster of <i>Escaping the Prison</i> is included as part of <i>The Henry Stickmin Collection</i>, purchasable on <a href="https://store.steampowered.com/app/1089980/The_Henry_Stickmin_Collection/">Steam</a>.
        </p>
    </div>
EOF;

$customMusicSelections = array(
    "Music Disabled", "",
);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Dumps :: Legacy Flash Content :: Escaping the Prison");

?>

<h1><img style="vertical-align:middle" src="/assets/img/dumps/flash/icon.png"> Escaping the Prison</h1>
<p>FAIL</p><br/>

<object width="650" height="450"
classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
codebase="http://macromedia.com">
<param name="src" value="/files/533001_PrisonNG.swf">
<param name="quality" value="high">
<param name="allowfullscreen" value="true">

<embed src="/files/533001_PrisonNG.swf" 
width="650" height="450"
quality="high" 
pluginspage="http://macromedia.com" 
type="application/x-shockwave-flash" 
allowfullscreen="true"
</embed>
</object>


<?php echo constructPageFooter(); ?>

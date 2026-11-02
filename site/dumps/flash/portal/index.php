<?php

$customMusicSelections = array(
    "Music Disabled", "",
);

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4 style="text-align: center">Fun Fact!</h4>
        <p>
            Many of the levels in this version were remade in Source as part of the Xbox 360 release of <i>Portal: Still Alive</i>. These levels are still available to play on the Nintendo Switch release of <i>Portal</i> as part of <i>Portal: Companion Collection</i>.
        </p>
    </div>
EOF;


include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Dumps :: Legacy Flash Content :: Portal: The Flash Version");

?>

<h1><img style="vertical-align:middle" src="/assets/img/dumps/flash/icon.png"> Portal: The Flash Version</h1>
<p>Who wants to make $60? Cash.</p><br/>

<div class="flashWindow" width="720px" height="405px">
    <object width="720px" height="405px" type="application/x-shockwave-flash" data="/files/Portal_wcs2.swf">
        <param name="quality" value="high">
        <param name="allowfullscreen" value="true">
        <param name="scale" value="showall" />
    </object>
</div>

</object>


<?php echo constructPageFooter(); ?>

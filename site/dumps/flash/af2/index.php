<?php

$customMusicSelections = array(
    "Music Disabled", "",
);

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4 style="text-align: center">Fun Fact!</h4>
        <p>
            In 2019-2020 versions of the <i>Petscop</i> Unity recreation known as <i>Giftscop</i>, using commands to enter a room named <code>af2</code> will take you to a version of this Flash movie recreated in their codebase, complete with redrawn assets. This has since been removed.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Dumps :: Legacy Flash Content :: AF2");

?>

<h1><img style="vertical-align:middle" src="/assets/img/dumps/flash/icon.png"> AF2</h1>
<p>Dunno where this comes from, sick loop though.</p><br/>

<div class="flashWindow" width=400px" height="400px">
    <object width="400px" height="400px" type="application/x-shockwave-flash" data="/files/AF2.swf">
        <param name="quality" value="high">
        <param name="allowfullscreen" value="true">
        <param name="scale" value="showall" />
    </object>
</div>

</object>


<?php echo constructPageFooter(); ?>

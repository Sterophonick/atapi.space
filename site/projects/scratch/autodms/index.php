<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            In fifth grade, we did stuff every day called "Daily Math Skills," which was basically a shit of paper where we would solve a bunch of simple arithmetic equations within two minutes.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Scratch :: Automatic Daily Math Skills Practice");

?>

<h1><img style="vertical-align:middle" src="/assets/img/projects/scratch-icon.png"> Automatic Daily Math Skills Practice</h1>

<?php generateScratchEmbed(46096428);?>

<br />
<a href="/files/16-bit platformer.sb3">Scratch 3.0 SB3 Download</a><br />
<a href="/files/16-bit platformer.sb2">Scratch 2.0 SB2 Download</a><br />
<a href="/files/16-bit platformer.swf">Scratch 2.0-based SWF Download</a><br />
<br />
<a href="/files/Automatic Daily Math Skills Practice.sb3">Scratch 3.0 SB3 Download</a><br />

<?php

echo constructPageFooter();

?>

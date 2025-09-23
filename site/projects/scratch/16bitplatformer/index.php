<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            This game was made as a response to a game called "8 bit Platformer." I don't remember what my problem was.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Scratch :: 16-bit Platformer");

?>

<h1><img style="vertical-align:middle" src="/assets/img/projects/scratch-icon.png"> 16-bit Platformer</h1>
<p>NOTE: This version is slightly altered from the .sb2 and .swf files below. This is because Scratch 3.0
broke games that exploited certain rounding quirks of Flash.</p>

<?php generateScratchEmbed(83968408);?>

<br />
<a href="/files/16-bit platformer.sb3">Scratch 3.0 SB3 Download</a><br />
<a href="/files/16-bit platformer.sb2">Scratch 2.0 SB2 Download</a><br />
<a href="/files/16-bit platformer.swf">Scratch 2.0-based SWF Download</a><br />
<br />
<p>I do not own this music. It was composed by FearOfDark for his LP, <br /><a
href="https://fearofdark.bandcamp.com/album/the-coffee-zone">The Coffee Zone.</a></p>

<?php

echo constructPageFooter();

?>

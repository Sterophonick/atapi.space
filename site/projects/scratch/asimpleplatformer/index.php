<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Scratch :: A Simple Platformer");

?>

<h1><img style="vertical-align:middle" src="/assets/img/projects/scratch-icon.png"> A Simple Platformer</h1>
<p>NOTE: This version is slightly altered from the .sb2 and .swf files below. This is because Scratch 3.0
broke games that exploited certain rounding quirks of Flash.</p>

<?php generateScratchEmbed(91416567);?>

<br />
<a href="/files/A Simple Platformer.sb3">Scratch 3.0 SB3 Download</a><br />
<a href="/files/A Simple Platformer.sb2">Scratch 2.0 SB2 Download</a><br />
<br />
<p>I do not own this music. It was composed by Disasterpeace for the 2012 video game <br /><a
href="https://store.steampowered.com/app/224760/FEZ/">FEZ.</a></p>

<?php

echo constructPageFooter();

?>

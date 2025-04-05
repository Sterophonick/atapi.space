<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: Scratch :: The Most Difficult Platformer Ever!");

?>

<h1><img style="vertical-align:middle" src="\assets\img\projects\scratch-icon.png"> The Most Difficult Platformer Ever!</h1>
<p>NOTE: This version is slightly altered from the .sb2 and .swf files below. This is because Scratch 3.0
broke games that exploited certain rounding quirks of Flash.</p>

<?php generateScratchEmbed(92139243);?>

<br />
<a href="/files/The Most Difficult Platformer Ever!.sb3">Scratch 3.0 SB3 Download</a><br />
<a href="/files/The Most Difficult Platformer Ever!.sb2">Scratch 2.0 SB2 Download</a><br />
<a href="/files/The Most Difficult Platformer Ever!.swf">Scratch 2.0-based SWF Download</a><br />
<br />
<br />
<p>I do not own this music. It was composed by Danny B for the 2010 video game <a
href="https://store.steampowered.com/app/40800/Super_Meat_Boy/">Super Meat Boy</a>.</p>

<?php

echo constructPageFooter();

?>

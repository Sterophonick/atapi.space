<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Prelude</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Elmo's Big Discoveries in Cartridge Dumping");

?>

<h2><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Elmo's Big Discoveries in Cartridge Dumping</h2>
<p>La la la la! La la la la! Elmo's World!<br/></p><br/>
<p>
Jun X, 2026<br/>
Category: Project<br/>
</p>
<br />
<p id="p1">
Sorry for no blogs for the last while, came down with Peggle Fever.<br/><br/>

If you've been around me before, you might be acutely aware of a console known as the <i>V.Smile</i>, an edutainment machine that released in 2004, complete with bright colors, an adaptable paw-shaped controller, and a bunch of games featuring recognizable characters such as Elmo or Spider-Man, all teaching subjects such as math, problem-solving, shapes, colors, you get the idea. While the machine isn't particularly spectacular, I'd say it's a mile over giving a kid an iPad and telling them to run free on YouTube Kids for a few hours.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/vsmile1.jpg"><br/>
<small>I wanna turn that controller into an fightstick for Arcade emulation.</small><br/>
<br/>

<p>Anyway, I'm not really here to review the V.Smile itself, rather I am here to talk about fun and interesting shit I did with one of its games.</p><br/><br/>

<p>This is <i>Elmo's World: Elmo's Big Discoveries</i>, one of the 2005 releases for the system, a game that involves specifically the <i>Elmo's World</i> segment from <i>Sesame Street</i>. In this game, you play as Elmo and have to solve various matching puzzles such as for colors, shapes, animal sounds, what have you. </p>
<img loading="lazy" width="640px" src="/assets/img/blog/elmobd/elmo1.jpg"><br/>
<small>Forgive the mildly destroyed label art, it is required to destroy it to open the games up.</small><br/><br/>

<p>I had this game as a wee one, it was probably my favorite on the system, though I think <i>Winne the Pooh: The Honey Hunt</i> might be fighting for that spot. And when I went to discover that MAME was capable of emulating V.Smile games in 2020 or so, I noticed a distinct lack of the English-localized titles available both as loose ROMs on the internet or documented in No-Intro or the MAME software lists. Over the following few years though that situation would become less and less of an issue, but one game that I specifically wanted to play eluded the sets, Elmo's World.<br/><br/>

I'm not entirely sure of the reason that this never got dumped with the other games. It would be pretty much the same process as any other dump, so my guess would be that the aftermarket V.Smile communities that exist are primarily European, and thusly getting ahold of specifically US smartridges. If we were to look at the MAME software list hashes, sure enough, we can see that this game was only released in four regions, with each having its own distinct localization:</p>
<img loading="lazy" src="/assets/img/blog/elmobd/hash1.png"><br/>



<?php

echo printBlogSig();
echo constructPageFooter();

?>

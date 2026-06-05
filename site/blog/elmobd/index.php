<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Prelude</a></li>
        <li><a href="#p2">The Parts</a></li>
        <li><a href="#p3">Assembly</a></li>
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

<p>Anyway, I'm not really here to review the V.Smile itself, rather I am here to talk about fun and interesting shit I did with one of its games.</p><br/>

<p>This is <i>Elmo's World: Elmo's Big Discoveries</i>, one of the 2005 releases for the system, a game that involves specifically the <i>Elmo's World</i> segment from <i>Sesame Street</i>. In this game, you play as Elmo and have to solve various matching puzzles such as for colors, shapes, animal sounds, what have you. </p>
<img loading="lazy" width="640px" src="/assets/img/blog/elmobd/elmo1.jpg"><br/>
<small>Forgive the mildly destroyed label art, it is required to destroy it to open the games up.</small><br/><br/>

<p>I had this game as a wee one, it was probably my favorite on the system, though I think <i>Winne the Pooh: The Honey Hunt</i> might be fighting for that spot. And when I went to discover that MAME was capable of emulating V.Smile games in 2020 or so, I noticed a distinct lack of the English-localized titles available both as loose ROMs on the internet or documented in No-Intro or the MAME software lists. Over the following few years though that situation would become less and less of an issue, but one game that I specifically wanted to play eluded the sets, Elmo's World.<br/><br/>

I'm not entirely sure of the reason that this never got dumped with the other games. It would be pretty much the same process as any other dump, so my guess would be that the aftermarket V.Smile communities that exist are primarily European, and thusly getting ahold of specifically US Smartridges is much more expensive. If we were to look at the MAME software list hashes, sure enough, we can see that this game was only released in four regions, with each having its own distinct localization:</p>
<img loading="lazy" src="/assets/img/blog/elmobd/hash1.png"><br/>

<p>So I asked in the MAME Discord guild if anybody was willing to dump it if I mailed a copy to them, but I was redirected to <a href="https://team-europe.blogspot.com/2020/07/preserving-games-anybody-can-now-do-it.html?m=1">this page</a> from the blog belonging to Team-Europe, a prolific dumped affiliated with MAME.<br/><br/>

What's this? A do-it-yourself kit for dumping your own cartridges? And it's a shield for an Arduino? 
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/shield1.jpg"><br/><br/>

<p>
Initially I was a apprehensive about spending the money on the parts to build this project, especially since the piss baby fascists have caused prices basically everywhere to go to pretty absurd degrees. But with no summer internship lined up, I realized that I needed some projects in the pipeline so I could further whatever education I will get before the collapse of The Empire. So in we go, ordered the parts necessary with some extras in case I screwed it up.<br/><br/>

I need a proper parts drawer.
</p><br/>

<h2 id="p2">The Parts</h2>
<p>
    This project is kinda simple. If you're dumping just V.Smile games, all you need is the 2560, the PCB, some switches, pins, and the cart edge connector. I tried to get ahold of the PCI connectors, I'll touch on that in a minute.<br/><br/>
    
    The board I initially picked was this chinese clone Mega 2560 for a couple of reasons. One, USB-C, and two, it was way cheaper. A good idea that I will not regret later.<br/><ghost>(That's called foreshadowing)</ghost>
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/board1.jpg"><br/><br/>

<p>
    The rest were the PCBs, 74HC4040 counters, switches, buttons, and the 25x2-pin cart edge connectors. Since I was buying from AliExpress and PCBWay, I have enough leftover parts to make like four more of these.
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/parts1.jpg"><br/><br/>

<p>My parts arrive, I come home from school for the summer, and my descent begins.</p><br/>

<h2 id="p3">Assembly</h2>

<p>
    I'm not great at soldering. I have <i>okay</i> skills, it's cromulent enough for through-hole components like this. Still, I can't imagine that my job is fantastic, but I never found any bridges or cold joints in my troubleshooting. I never got some proper flux cleaner so there's leftovers from reflowing and cleaning it with 91% alcohol and a toothbrush. I also put solder in the PCI slots as a troubleshooting step before I removed it with some desoldering wick.
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/board2.jpg"><br/>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/board3.jpg"><br/><br/>

<p>
The cart edge connectors that I ordered <i>are</i> compatible with V.Smile Smartridges, on a technicality. Pin 15 on both sides of the PCB is completely unused. The official edge connector would have those pins completely removed, so I had to either cut them out or bend them away when soldering the edge connector. Additionally I had to do some pretty wicked bending of the pins to get them to properly fit in the board.
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/bent_pins.jpg"><br/><br/>

<p>
    Additionally, the PCI connectors that arrived from AliExpress were not the right ones. They were extended horizontally, and while I could in theory cut them down to size, I didn't have the tools for it and decided that it wasn't worth it since I wasn't focused on anything relating to Leapster or MobiGo.
</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/pci1.jpg"><br/><br/>

<p>When I was done, this contraption is what I was left with. The shield just sits directly on top of the 2560 as a little "hat" and it fits nicely with all of the GPIO pins. You place your cartridge in the slot, and perform the actual dump, a process that is incredibly finicky.</p><br/>

<h2 id="p4">The Dump</h2>
<p>
    To get the board firmware and dump instructions
</p>

<?php

echo printBlogSig();
echo constructPageFooter();

?>

<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">The Device</a></li>
        <li><a href="#p2">Dumping It</a></li>
        <li><a href="#p3">Emulating It</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Dumping a Piece of Crap");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Dumping a Piece of Crap</h1>
<p>*cartoon throwing sound*<br/></p><br/>
<p>
Sep 1, 2025<br/>
Category: Project<br/>
</p>
<br />
<h2 id="p1">The Device</h2>
<p>
In 2020, my family and I went on a trip to a Round1 for my birthday. From all the tickets that I won, I was able to purchase a piece-of-crap handheld game console called the "Throwback Pocket Video Game Console", powered by a small microcontroller and coming with 153 different games. Five years on, I still have it, for better or worse. It's a neat little device as part of a collection of bootlegs, the fact that many sprites and most of the music is straight-up plagiarized is just a nice bonus to poke and laugh at.<br/>
<img width="360px" src="/assets/img/blog/throwbck/cons1.jpg"> <img width="360px" src="/assets/img/blog/throwbck/cons2.jpg"><br/><br/>

That's pretty much all there is to say about the device. The games are all named things like "CS-FIRE" or "WALL BALL," y'know, the Action 52 type of names.<br/><br/>

Anyway, this machine is one of many various machines all in the same line of products. These machines use Sitronix ST2302U microcontrollers, a later variant of the MCU used in the <a href="http://adb.arcadeitalia.net/dettaglio_mame.php?game_name=gameking">TimeTop GameKing</a>, and in many of them, the games are stored in a SPI flash memory next to the MCU. MameHaze has been <a href="https://github.com/mamedev/mame/blob/master/src/mame/tvgames/st2302u_bbl_spi.cpp">pretty diligent</a> in getting these dumped and emulated, and only recently have I realized that I had an undumped unit, which was made specifically for distribution in the United States. Doubly so, a few months ago I had acquired a voltage-switching CH341A USB serial flash programmer, which has the ability to dump these things. So I took an evening, and got to work.<br/><br/>
</p>

<br/>

<h2 id="p2">Dumping it</h2>
<p>
    This thing is ugly. Scruffy, even. You remove the four screws on the back of the unit, only to find wires that connect directly to the battery terminals that go onto the front-side of the board. You then have to delicately remove two more screws to actually access the main board, because on this side, there's literally nothing.<br/>
    <img width="720px" src="/assets/img/blog/throwbck/dis1.jpg"><br/><br/>

    Once you remove the other two screws the whole unit just kinda pathetically falls apart. There isn't even a screen lens, you can just lift up the screen to see the rest of the board contents.<br/>
    <img height="720px" src="/assets/img/blog/throwbck/dis2.jpg"><br/><br/>

    There are two SOIC8 chips on the board, orbiting a larger glob-top chip, being the MCU. Only one chip is marked, reading <code>MK \ 25Q32EGIG \ 1942</code>.<br/>
    <img width="720px" src="/assets/img/blog/throwbck/dis3.jpg"><br/><br/>

    The name "25QXX" somewhat rang a bell, as that's a similar name to the 25XXX chips that my CH341A supports. So, that was the first chip I tried to attack. Bizarrely, when I hooked up the SOIC8 clip to the chip, the console <b><i>powered on</b></i>. I could even slow the machine down or cause it to crash by altering the voltage slider on my programmer.<br/>
    <img width="720px" src="/assets/img/blog/throwbck/ch34_1.jpg"><br/><br/>

    From here, I started IMSProg, which is my flash dumper of choice. I searched around for matching part numbers, an ultimately landed on the <code>W25Q32FW(1.8V)</code> chip, it seemed like a potential match. No matter what I did, though, it would not read any blocks. In fact attempting this would often cause the machine to crash without any other interference.<br/>
    <img src="/assets/img/blog/throwbck/ims1.png"><br/><br/>

    All of this stumped me, fiddling around more times, testing the other chip, and I only get one false-positive read on the first block. Everything else would fail to read.<br/>
    <img src="/assets/img/blog/throwbck/ims2.png"><br/><br/>

    Cue another fifteen minutes of fiddling, before I had the idea. Since the machine is constantly playing crappy drum samples and music, wouldn't that mean that we are having two different serial data streams clashing with each other? This would explain why the machine would be crashing if I attempted a read, since we'd be interrupting both the clock signal and the other signals for executing serial commands. Only trouble was that the machine would power on if I hooked up my programmer.<br/><br/>

    But then, I remembered that the reset button can be held down to keep the MCU frozen, much like how it works on the NES or Super NES. For as long as that button is held, no code is allowed to execute. So, I just. Held my finger on the reset line.<br/>
    <img width="720px" src="/assets/img/blog/throwbck/kid_named_finger.jpg"><br/><br/>

    Wouldn't you know it, that did the trick, I was able to get consistently identical dumps from the flash ROM.<br/>
    <img src="/assets/img/blog/throwbck/dumps.png"><br/><br/>
</p>

<br/>

<h2 id="p3">Emulating it</h2>
<p>
    Up next was to test the new dump using MAME. The closest matching machine would be the Supreme 150 Arcade Classics handheld (ROM set: <code>supreme</code>), as it had pretty much the same game set, and an intro screen like the Throwback.<br/>
    <img width="320px" class="pixelArt" src="/assets/img/blog/throwbck/supreme1.png"><img width="320px" class="pixelArt" src="/assets/img/blog/throwbck/supreme2.png"><br/><br/>

    I fetched the ROM set, swapped out the 4MiB flash image for my new dump, and it worked perfectly.<br/>
    <img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-1.png"><img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-2.png"><br /><br/>

    Now having verified that the dump was correct, it was time to make a pull request. I sent the ROM image to the appropriate channels, and added the machine to my own build of MAME. This work can now be seen <a href="https://github.com/mamedev/mame/pull/14003/commits/6f9da0dd90c9690523a99860ea7e6ba5405287dd">here in this pull request</a>. It's not quite in MAME yet as of writing, but it shouldn't be too too long.<br/><br/>

    Oh yeah, and you can also grab the dump <a href="/files/throwback.7z">here</a>. You will need to find the existing boot ROMs for machines like the <code>supreme</code> to use it, though.<br/><br/>
</p>

<img width="540px" src="/assets/img/blog/throwbck/wiwi.jpg">

<?php

echo constructPageFooter();

?>

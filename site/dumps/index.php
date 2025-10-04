<?php

$navContents = <<<EOF
    <ul>
        <li>
            <a href="#F7A0107">Steam Deck F7A0107</a>
        </li>
        <li>
            <a href="#XBLIG">Xbox 360 Indie Games</a>
        </li>
        <li>
            <a href="#CRX">Google Chrome Apps</a>
        </li>
        <li>
            <a href="#Firecard">GBA FireCard CD</a>
        </li>
        <li>
            <a href="#SuperCard271">SuperCard SD v2.71</a>
        </li>
        <li>
            <a href="#throwbck">Throwback Pocket</a>
        </li>
        <li>
            <a href="#misc">Miscellaneous</a>
        </li>
        <li>
            <a href="#ezfont">EZFont Java 1.1</a>
        </li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Dumps");

?>

<h1><img style="vertical-align:middle" src="/assets/img/dumps/icon.png"> Dumps</h1>
<p>Software preservation stuff that I have done. Dev wants it gone and it's gone!</p><br />
<h3 id="F7A0107">Steam Deck LCD BIOS (F7A0107)</h3>
<p>This BIOS revision doesn't appear to be present in Valve's git history. Very strange. <br />This is the
last ROM revision before EV2 board support was dropped.<br />Unforuntately I don't think this can be
used with Insyde H2OFFT.<br />Dumped by Ashie404.<br /><a href="/files/F7A0107.bin">ROM Download</a></p>
<br />
<h3 id="XBLIG">Xbox LIVE Arcade Indie Games</h3>
<p>The Xbox Live Indie Games store shut down in 2017, but I managed to snag these games a little before they
went down. Enjoy!</p>
<a href="https://archive.org/details/xblig_3dstruction">3D-struction</a><br />
<a href="https://archive.org/details/xblig_abcfun">ABC Fun</a><br />
<a href="https://archive.org/details/xblig_avatardrop">Avatar Drop</a><br />
<a href="https://archive.org/details/xblig_castleminer">CastleMiner</a><br />
<a href="https://archive.org/details/xblig_flappymonkey">Flappy Monkey</a><br />
<a href="https://archive.org/details/xblig_flappyavatar">FlappyAvatar</a><br />
<a href="https://archive.org/details/xblig_lasercat">LaserCat</a><br />
<a href="https://archive.org/details/xblig_mww">Match with Wally</a><br />
<a href="https://archive.org/details/xblig_medievalzombies">Medieval Zombies</a><br />
<a href="https://archive.org/details/xblig_really-scary">Really Scary</a><br />
<a href="https://archive.org/details/xblig_really-scary-2">Really Scary 2</a><br />
<a href="https://archive.org/details/xblig_really-scary-3">Really Scary 3</a><br />
<a href="https://archive.org/details/xblig_the-impossible-game">The Impossible Game</a><br />
<a href="https://archive.org/details/xblig_tig-level-pack">The Impossible Game Level Pack</a><br />
<br />
<h3 id="CRX">Google Chrome Apps</h3>
<p>Most, if not all of these are not accessible anymore on the Chrome Web Store.</p>
<a href="/files/Don_t GiveUp.crx">Don't GiveUp</a><br />
<a href="/files/Block Jump.crx">Block Jump</a><br />
<br />
<h3 id="FireCard">Game Boy Advance FireCard CD</h3>
<p>A driver CD for this 256M FireCard that I acquired on eBay.<br />All of it is in Chinese and will likely
only work on old versions of Windows.</p>
<img width="720px" src="/assets/img/dumps/FireCard-Front.jpg"><br />
<img width="720px" src="/assets/img/dumps/FireCard-Back.jpg"><br />
<img width="540px" src="/assets/img/dumps/FireCard-Disc.jpg"><br />
<a href="/files/MagicCard.7z">ISO Image</a><br />
<br />
<h3 id="SuperCard271">SuperCard SD v2.71</h3>
<p>The software necessary to use the SuperCard SD, SuperCard miniSD, and the SuperCard microSD family of Game Boy Advance flashcarts. Highly recommended to be used only with Windows XP.</p>
<img src="/assets/img/dumps/supercard.png"><br />
<a href="/files/setupsdV271en.zip">Zip Archive</a><br />
<br/>
<h3 id="throwbck">Throwback Pocket Video Game Console 150+ 8-bit Games</h3>
<p>A crappy handheld that I got as a gift in 2020. Sitronix ST2302U-based, dumped with a combination of a CH341A SPI programmer and holding my finger down on the reset line.</p>
<img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-1.png"><img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-2.png"><br />
<img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-3.png"><img width="320px" class="pixelArt" src="/assets/img/dumps/throwback-4.png"><br />
<a href="https://github.com/mamedev/mame/pull/14098">MAME Pull Request</a><br/>
<a href="/files/throwback.7z">ROM Dump</a><br />
<br/>

<h3 id="ezfont">EZFont Java 1.1</h3>
<p>A Java-based editor for EZ-Flash <code>asc.dat</code> files, designed for use in skinning the EZ-Flash IV and Omega family. These files contain font data for ASCII character sets. Originally on the now-dead EZ-Flash Sosuke forum, I managed to track this down from an old MediaFire link.</p>
<img src="/assets/img/dumps/ezfont.png">
<a href="/files/EZFont Java 1.1.jar">.jar File</a><br />
<a href="/files/asc.dat">Template <code>asc.dat</code></a><br />
<br/>

<h3 id="misc">Miscellaneous Stuff</h3>
<a href="WavePluginManual/">PogoShell GSM Plugin ps2gsm Guide (Translated)</a><a href="/files/ps2gsm003.zip">
(Plugin download)</a><br />
<a href="JpegPluginManual/">PogoShell JPEG Plugin ps2jpg Guide (Translated)</a><a
href="/files/ps2jpg002.zip"> (Plugin download)</a><br />
<a href="TextPluginManual/">PogoShell Text Plugin ps2txt Guide (Translated)</a><a
href="/files/ps2txt014.zip"> (Plugin download)</a><br />
<a href="/files/ps2mda.txt">PogoShell X68000 Music Plugin ps2mda Guide (Translated)</a><a
href="files/ps2mda005.zip"> (Plugin download)</a><br />
<a href="https://github.com/Sterophonick/Archive-PogoShell">The PogoShell Version Archive</a><br />
<a href="/files/video demos.7z">Some old Game Boy Advance video demos from an F2A software disc.</a><br />
<a href="/files/Sources_Last_Quest_080508.zip">Source code to Super Mario: The Last GBA Quest. (Requires HAM
and HEL.)</a><br />
<a href="/files/Adpcm - 050612 (light).rar">Source code to NRX's ADPCM library. (Required for above source
code.)</a><br />
<a href="/files/Scratch-461.exe">Scratch 2 Offline Editor v461</a><br />
<a href="/files/AdobeAIRInstaller.exe">Adobe AIR Installer (required for Scratch 2)</a>

<?php

echo constructPageFooter();

?>

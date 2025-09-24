<?php

$customSideContent = <<<EOF
        <div class="sideFunFact window">
        <h4>Pro tip:</h4>
        <p>
            Linking as many things to your personal site as possible is a very good idea.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Web Links");

include $_SERVER['DOCUMENT_ROOT'] . '/includes/linksCounter.php';

?>
<div class="centeredArea">
    <div id="hypnospace-header">
    <img width="120px" style="vertical-align:middle" src="/assets/img/links/skeleton-motorcycle.gif">
    <img width="450px" style="vertical-align:middle" src="/assets/img/links/fire.gif">
    <img width="120px" style="vertical-align:middle" src="/assets/img/links/skeleton-motorcycle.gif">
    </div>
    <br />
    <br />
    <table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
    text-align: center;">
    <col width="320px" />
    <col width="320px" />

    <tr>
    <td><a href="emu/">Emulation / Retrogaming</a><br />Links for emulation and retro gaming alike.<br /></td>
    <td><a href="linux/">Linux</a><br />Linux-related news and links.<br /></td>
    </tr>

    <tr>
    <td><a href="scene/">Demoscene</a><br />Electronics as an art.<br /></td>
    <td><a href="gaming/">Gaming</a><br />Vidjagaemz!<br /></td>
    </tr>

    <tr>
    <td><a href="homebrew/">Homebrew / Hacking</a><br />Links for homebrew and ROM hack development.<br /></td>
    <td><a href="shortwave/">Shortwave Radio</a><br />Links relating to shortwave radio and other such topics.<br /></td>
    </tr>

    <tr>
    <td><a href="misc/">Miscellaneous</a><br />Random oddball stuff that doesn't fit the other categories.<br /></td>
    <td><a href="historical/">Historical</a><br />The internet's graveyard / retirement home.<br /></td>
    </tr>

    </table>
    <br/>

<?php
countWebLinks();
?>

<br/><br />
Special GREETZ to:<br />
<marquee width="65%">
FluBBa - Dwedit - 3DSage - krom / PeterLemon - Loopy - Mark Holloway - Kuwanger (RIP) - Scratch Team -
veikkos - Jeffman - Clyde Mandelin - WinterMute - Jason Wilkins - Jay Van Hutten - inside-cap - Bung
Enterprises - EZ-Flash - Moonlight - WazzoTV - GloriousEggroll - CodeWeavers - Linus Torvalds - Valve -
misyltoad - Collabora - Near (RIP) - Kokoscript - Ashie404 - ZenithNeko - aquamarine - chfour - ParkerCC
- TheQuickSlash - danooct1 - CopperTheJackal - Roachtoon - ScottAllRubin - TheFunkyStudios - PeakJuggler
- Trussive - IceFireFish - Dania "Kaleidosium" Rifki - SimonFoxcoon - Mai Lawton - donuts_milk -
Rosemasterson - Sominemo - LeoJrtheTanooki - Karmageddon - crs100 / Epicness123 - suspiciouslyBee -
MkMuffi - Cynthia "Queer Kobold" Tarako (RIP) - Isaiah_Deluxe - Freeplay - Ryfox - PigDan20 - Luavixen -
Zen the Fox - Elizafox - lily - Vas Crabb - pivotman319 - deneb - Jason "textfiles" Scott - Alan Mackey - Gecko
/ Exelotl - hot_pengu - Toby "Radiation" Fox - Arch Linux - My family - StellaFoxxie - TôBach - Simon
"SimonB" Band - Emanuel "Tubooboo" Schleussinger - MOS_8502 - Taizou - Ben Rhoades - David "MameHaze"
Haywood - Hans-Kristian "Themaister" Arntzen - Mike "zmike" Blumenkrantz - doitsujin - AlpyneDreams -
Hector Martin - Asahi Lina - Sonicadvance1 - Alyssa Rosenzweig - cathodegaytube - Cathode Ray Dude - LGR
- TechTangents - Olivier Galibert - Neko May - Foxhack - XboxAhoy - MattKC - Damian Yerrick - Rafael
"darkfader" Vuijk - Peter Schraut - Jeff Frohwein - Justin Whang - SKiDROW - MODE7 - EURASiA - AntVenom - CODEX -
RAZOR1911 - FAiRLiGHT - p0ke - maracuja - zerkman - XAYAX - pheonixbound - RinkuSonic41 - Tahg - LGR /
lazygamereviews - James Rolfe - Fangamer - Aaron Giles - TheEssem - InvoxiPlayGames - Velveteen - and YOU!
</marquee>

</div>

<?php

echo constructPageFooter();

?>

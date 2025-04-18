<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: GNU/Linux :: Linux Gaming Notes");

$imageURLs = array(
    "/assets/img/projects/linuxnotes/XCURSOR.png", "/assets/img/projects/linuxnotes/butgodsaid.png", "/assets/img/projects/linuxnotes/manjarousers.gif", "/assets/img/projects/linuxnotes/wvlvm.png", "/assets/img/projects/linuxnotes/tuning.jpg", "https://imgs.xkcd.com/comics/supported_features.png", "https://imgs.xkcd.com/comics/sandwich.png"
);


$funnyImgString = '<img height="300px" src="' . $imageURLs[floor(rand() % sizeof($imageURLs))] . '" alt="funny meme"/>';


?>

<h1><img style=" vertical-align:middle" src="/assets/img/projects/linuxnotes/icon.png"> Linux Gaming Notes</h1>
<p>Some very crude notes about Linux gaming and game compatibility in my experience.</p>
<p>Last updated: March 28, 2023</p>
<h2>PLEASE NOTE: THIS PAGE HASN'T BEEN UPDATED IN A WHILE!<br />IT WILL BE VERY OUTDATED!</h2>

<?php echo $funnyImgString; ?>

<h2>Navigation</h2>
<div id="toc" class="toc" style="width:50%; margin:auto; text-align: left;">
<ul>
<li>
<a href="pages/projects/linuxnotes.html#Important">Important Information</a>
<ul>
<li>
<a href="pages/projects/linuxnotes.html#ImportantGeneral">General Information</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ImportantCompatibility">Game Compatibility
Notes</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ImportantRatings">Compatibility Rating Scale</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ImportantSystem">System Specifications</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ImportantSteamDeck">Steam Deck</a>
</li>
</ul>
</li>
<li>
<a href="pages/projects/linuxnotes.html#GameCompat">Game Compatibility</a>
<ul>
<li>
<a href="pages/projects/linuxnotes.html#Celeste">Celeste</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DUSK">DUSK</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#RivalsOfAether">Rivals of Aether</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ULTRAKILL">ULTRAKILL</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#MutantMudds">Mutant Mudds Deluxe</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DustAET">Dust: An Elysian Tail</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#LegoStarWarsTCS">LEGO Star Wars: The Complete
Saga</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#UnrealGold">Unreal Gold</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#HROT">HROT</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DOOM64">DOOM 64</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#QaukeRemastered">Quake (2021 Remaster)</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#MirrorsEdge">Mirror's Edge</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Crysis">Crysis</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#AHiT">A Hat in Time</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#CastleCrashers">Castle Crashers</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#BridgeConstructorPortal">Bridge Constructor
Portal</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Postal2">Postal 2</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Portal">Portal</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Portal2">Portal 2</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#PokerNight2">Poker Night 2</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SuperMeatBoy">Super Meat Boy</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#NightTrap">Night Trap: 25th Anniversary
Edition</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SonicR">Sonic R</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SlayerTest">Slayer's Testaments</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#TagTPOP">Tag: The Power of Paint</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SonicMania">Sonic Mania</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SonicGenerations">Sonic Generations</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#PacManChampionship">PAC-MAN Championship
Edition</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#JazzJackrabbit2">Jazz Jackrabbit 2: The Secret
Files (GOG Re-release)</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#RikkiVikki">Rikki & Vikki</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ApertureTag">Aperture Tag: The Paint Gun Testing
Initiative</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#PortalMel">Portal Stories: Mel</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#NarbacularDrop">Narbacular Drop</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#MicroMages">Micro Mages</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#GarrysMod">Garry's Mod</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#LunaGame">Luna Game</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DokiDoki">Doki Doki Literature Club!</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DOOM">The Ultimate DOOM + DOOM II</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DOOMUnity">DOOM (Nerve Unity Port)</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SonicEXE">Sonic.EXE</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SonicAdventure">Sonic Adventure DX</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Petscop">Giftscop</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SwordWithSauce">Sword With Sauce</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#YumeNikki">Yume Nikki</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#FEZ">FEZ</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DuckGame">Duck Game</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#GeometryWarsRE">Geometry Wars: Retro Evolved</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#BattleBlockTheater">BattleBlock Theater</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SaraIsMissing">Sara Is Missing</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#AnotherWorld">Another World: 25th Anniversary
Edition</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#HenryStickmin">The Henry Stickmin Collection</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SlenderT8P">Slender: The Eight Pages</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Deltarune">Deltarune</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#GoldenAxed">Golden Axed: A Cancelled
Prototype</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#TuxRacer">TuxRacer</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#IMSCARED">IMSCARED</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Undertale">Undertale</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#CaveStory">Cave Story (NXEngine)</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#PortalReloaded">Portal Reloaded</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#ShovelKnight">Shovel Knight: Treasure Trove</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#IndieGame">Indie Game: The Movie</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#dhewm3">DOOM 3</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#SIMULACRA">SIMULACRA</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#CSGO">Counter-Strike: Global Offensive</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DarkForces">STAR WARS: Dark Forces</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#PuttPuttPBS">Putt-Putt: Pep's Birthday
Surprise</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#TeamFortress2">Team Fortress 2</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#GangBeasts">Gang Beasts</a>
</li>
</ul>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Technology">Technology Compatibility</a>
<ul>
<li>
<a href="pages/projects/linuxnotes.html#XNA_FNA">XNA/FNA</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#MF">Windows Media Foundation</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DDraw">Windows DirectDraw</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#WinMM">Windows Multimedia API</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#dgVoodoo2">dgVoodoo2</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#DualShock4">DualShock 4</h3>
</li>
<li>
<a href="pages/projects/linuxnotes.html#NSPC">Nintendo Switch Pro Controller</h3>
</li>
</ul>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Random">Random Thoughts</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#Glossary">Glossary</a>
</li>
<li>
<a href="pages/projects/linuxnotes.html#WIP">Work-In-Progress</a>
</li>
</ul>
<br />
</div>
<div id="content" style="width:80%; margin:auto; text-align: left;>
<h2 id=" Important">README.TXT</h2>
<h3 id="ImportantGeneral">General Information</h3>
<p>
- Intel's Mesa3D Linux drivers are dramatically unperformant compared to their Windows
counterparts.<br />
- Controller support works unless stated otherwise.<br />
- These notes target SteamOS 3.0 for Steam Deck. I will not be using Lutris.<br />
- Games not scaling to 16:10 isn't a huge enough issue to warrant lowering the rating.<br />
- I expect some games to get updated to fix the issues, such as Portal Stories: Mel<br />
- DualShock 4 and Nintendo Switch Pro Controllers have phantoming issues as of writing this.<br />
- Once Steam Deck is released, THIS WILL ALL BE OUTDATED. I do not recieve my Deck until sometime
after Q2 2022.<br />
- My machine is nowhere close to the power of Steam Deck.<br />
- These notes are not like Steam Deck verified, this is more targeting enthusiasts such as myself
who are more than willing to tinker to get games working.<br />
- All controllers I'm testing are wired.<br />
<br />
- Think of this as a Deck Verified for an enthusiast who has a high tolerance for tinkering.<br />
</p>
<h3 id="ImportantCompatibility">Game Compatibility Notes</h3>
<p>
Game compatibility will be testing for:</br>
- Tinkering</br>
- Stability</br>
- Controllers</br>
- 1280x800</br>
- Performance</br>
- Other flaws</br>
</p>
<div id="ratingscale">
<h3 style="text-align: center;" id="ImportantRatings">Compatibility Rating Scale</h3>
<p>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/platinum.png"> - Game works perfectly out of the
box</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/platinumm.png"> - Game works <i>almost</i> perfectly
out of the box, but there's an issue that can't be fixed with tweaks.</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/goldp.png"> - Game works with minimal tinkering,
usually with controller configs</br>
<img height="27px" style="vertical-align:middle" src="/assets/img/projects/linuxnotes/gold.png">
- Game works but tinkering will be needed</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/silverp.png"> - Game plays perfectly with one minor
issue but is perfect otherwise.</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/silver.png"> - Game doesn't play perfectly even with
tinkering, but remains playable.</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/bronze.png"> - Game has notable issues that prevent
comfortable play.</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/borked.png"> - Game is outright broken</br>
<img height="27px" style="vertical-align:middle"
src="/assets/img/projects/linuxnotes/anticheat.png"> - Game is screwed because devs don't
bother updating Anticheat.<br />
</div>
</p>
<h3 id="ImportantSystem">System Specifications</h3>
<p>
CPU: Intel Core i7-10510U @ 1.8GHz<br />
GPU: Mesa Intel CometLake-U GT2 (UHD Graphics)<br />
RAM: 16GB<br />
Distro: EndeavourOS Linux, Manjaro Linux, Garuda Linux<br />
Steam Input is always enabled.<br />
Kernel: 5.16<br />
</p>
<h3 id="ImportantSteamDeck">Steam Deck</h3>
<p>
What I Know:<br />
- Arch Linux-based OS<br />
- Immutable Filesystem (basically means you can't write to the system partition without dev mode
enabled)<br />
- Valve recommends a 3750H+Vega 10 NUC for testers<br />
- Games will be forcing Gamescope by default<br />
- Controls can work with software outside of Steam, only on Linux though<br />
- Valve improving non-Steam experience<br />
- New in-house Proton version in development; will be released alongside SteamOS 3.0<br />
<br />
What I Wanna Know:<br />
- Fixing controller issues? (See: <a href="pages/projects/linuxnotes.html#Controllers">Duck
Game</a>)<br />
- Mainline Dolphin?<br />
- Couch experience?<br />
- Better WineD3D support?<br />
- Steam Overlay fixes?<br />
<br />
Hopes:<br />
- Emulator devs implement controller-friendly UIs<br />
- Couch gaming<br />
- Extra Steam Input support in games<br />
- Easy to get much older games working properly<br />
-
Performance:<br />
- This is something I see people often getting wrong.<br />
- In terms of graphical capability, the Steam Deck still absolutely stomps machines like the AYA NEO
and GPD WIN 3<br />
- First, we have <a href="/assets/img/projects/linuxnotes/steamdeck/steamdeck1.png">this image</a>
from ETA PRIME's <a href="https://www.youtube.com/watch?v=nDeZQP8-I2s">video on the AYA NEO
NEXT</a>.<br />
- It shows DOOM Eternal runninng at 800p, low settings with the dynamic resolution scale
enabled.<br />
- But notice how the TDP is set to 30W.<br />
- Secondly, we have <a href="/assets/img/projects/linuxnotes/steamdeck/steamdeck2.png">this
image</a> from Linus' <a href="https://www.youtube.com/watch?v=SElZABp5M3U"> hands-on
video.</a><br />
- It shows DOOM Eternal at medium settings, 800p, and the resolution scale at 100%<br />
- In fairness, we're never explicitly told what the TDP was set to.<br />
- But I'd say it's safe to assume that Deck was set to a 15W TDP since Deck runs the much newer RDNA
2 GPU architecture compared to VEGA, along with for marketing reasons.<br />
- The other handhelds have the leg up with the CPU, with the AYA NEO NEXT running an 8-core Ryzen 7
5800U, being able to play PS3 games such as Skate 3, albeit only at a much higher TDP such as
35W.<br />
- I think the limit with emulation on Steam Deck is gonna be Nintendo Switch emulation, but there
will be a handful of easier-to-run games in RPCS3, such as Persona 5.<br />
- If I had to take a wild guess as to a rough comparison of the CPU in Steam Deck... Ryzen
5300U<br />
</p>
<h3 id="TODO">TODO</h3>
<p>
- Make every game use a thumbnail and not a full-size image for slower connections<br />
- Team up with some mates to get more intensive games tested and working<br />
- Make a script that will fix controllers universally<br />
<br />
<h2 id="GameCompat">Game Compatibility</h2>
<p>Click on any screenshot to view the full-size image.<br />
<h3 id="Celeste">Celeste</h3>
<p>
Native<br />
Technology: FNA/XNA, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/celeste1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/celeste1.jpg"></a><br />
</p>
<h3 id="DUSK">DUSK</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, OpenGL (Vulkan optional)<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Controller support on native has ghosting. Use Proton.<br />
- Cannot use mouse+joystick simultaneously.<br />
- Does not automatically adapt to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/dusk1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dusk1.jpg"></a><br />
</p>
<h3 id="RivalsOfAether">Rivals of Aether</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker: Studio, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/rivals1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rivals1.jpg"></a><br />
</p>
<h3 id="ULTRAKILL">ULTRAKILL</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support: Perfect<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/ultrakill1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ultrakill1.jpg"></a><br />
</p>
<h3 id="MutantMudds">Mutant Mudds Deluxe</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Requires the user set joystick mode in Desktop.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/mutantmudds1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/mutantmudds1.jpg"></a><br />
</p>
<h3 id="DustAET">Dust: An Elysian Tail</h3>
<p>
Native<br />
Technology: XNA/FNA, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#XNA_FNA">XNA/FNA</a>.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/dust1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dust1.jpg"></a><br />
</p>
<h3 id="LegoStarWarsTCS">LEGO Star Wars: The Complete Saga</h3>
<p>
Proton (Any modern version)<br />
Technology: Nu2, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Does not automatically adapt to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/legostarwarstcs1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/legostarwarstcs1.jpg"></a><br />
</p>
<h3 id="UnrealGold">Unreal Gold</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine, Direct3D+3dfx<br />
Controller support: Borked<br />
Notes:<br />
- See <a href="UE98">Unreal Engine (1998)</a><br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/unrealgold1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/unrealgold1.jpg"></a><br />
</p>
<h3 id="HROT">HROT</h3>
<p>
Proton (any modern version)<br />
Technology: Custom (Pascal), OpenGL<br />
Controller support:<br />
- All of them need Gamescope<br />
Notes:<br />
- Runs very poorly.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/hrot1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/hrot1.jpg"></a><br />
</p>
<h3 id="DOOM64">DOOM 64</h3>
<p>
Proton (Any modern version)<br />
Technology: KEX, D3D+Vulkan+OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/doom64_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/doom64_1.jpg"></a><br />
</p>
<h3 id="QuakeRemastered">Quake (2021 Remaster)</h3>
<p>
Proton (Any modern version)<br />
Technology: KEX, Vulkan<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- None? <br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/quake1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/quake1.jpg"></a><br />
</p>
<h3 id="MirrorsEdge">Mirror's Edge</h3>
<p>
Proton (any modern version)<br />
Technology: Unreal Engine, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Requires user input for installing NVIDIA PhysX.</br>
- Does not scale to 16:10 properly.<br />
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/mirrorsedge1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/mirrorsedge1.jpg"></a><br />
</p>
<h3 id="Crysis">Crysis</h3>
<p>
Proton (Any modern version)<br />
Technology: CryEngine 2, Direct3D<br />
DRM Protection: SecuROM<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Requires user input for installing PunkBuster and GameSpy Comrade.</br>
- SecuROM build is completely borked on AMD. Use <a
href="https://github.com/ccomrade/c1-launcher">C1-Launcher</a>.<br />
- Would be a good idea to limit to four threads.<br />
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/crysis1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/crysis1.jpg"></a><br />
</p>
<h3 id="AHiT">A Hat in Time</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine 3, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Heavy on shaders. Will likely stutter for a while.<br />
- Does not allow mouse for camera.<br />
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/ahatintime1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ahatintime1.jpg"></a><br />
</p>
<h3 id="CastleCrashers">Castle Crashers</h3>
<p>
Proton (Any modern version)<br />
Technology: XNA, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/castlecrashers1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/castlecrashers1.jpg"></a><br />
</p>
<h3 id="BridgeConstructorPortal">Bridge Constructor Portal</h3>
<p>
Proton (Any modern version<br />
Technology: Unity, Direct3D<br />
Controller support: Bad with Native<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Native: Triggers, Bumpers and D-Pad is completely inaccessible.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/bridgeconstructorportal1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/bridgeconstructorportal1.jpg"></a><br />
</p>
<h3 id="Postal2">Postal 2</h3>
<p>
Native<br />
Technology: Unreal 2, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Forced itself to 1024x768 by default.<br />
- Menus are only navigable with D-Pad, unsure why.</br>
TODO:<br />
- Does not automatically adjust to new resolutions.<br />
- I would recommend making a keyboard/mouse config.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/postal2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/postal2_1.jpg"></a><br />
</p>
<h3 id="Portal">Portal</h3>
<p>
Native<br />
Technology: Source, ToGL, DXVK-Native<br />
Controller support: Steam Input<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/portal1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/portal1.jpg"></a><br />
</p>
<h3 id="Portal2">Portal 2</h3>
<p>
Native<br />
Technology: Source, ToGL (DXVK-Native available)<br />
Controller support: Full Steam Input Support<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/portal2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/portal2_1.jpg"></a><br />
</p>
<h3 id="PokerNight2">Poker Night 2</h3>
<p>
Proton (Any modern version)<br />
Technology: TellTale Tool, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10.</br>
- Cannot be purchased on Steam.<br />
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/pokernight2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pokernight2_1.jpg"></a><br />
</p>
<h3 id="SuperMeatBoy">Super Meat Boy</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: Unknown, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10.</br>
- Linux version is currently outdated, compared to Windows with version 1.2.5</br>
- Does not automatically adjust to new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/supermeatboy1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/supermeatboy1.jpg"></a><br />
</p>
<h3 id="NightTrap">Night Trap: 25th Anniversary Edition</h3>
<p>
Proton (See notes)<br />
Technology: Unity, Direct3D, Media Foundation<br />
Controller support: Perfect<br />
Notes:<br />
- Poor performance.<br />
- Doesn't scale to 16:10.</br>
- See <a href="pages/projects/linuxnotes.html#MF">Windows Media Foundation</a>.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/nighttrap1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/nighttrap1.jpg"></a><br />
</p>
<h3 id="SonicR">Sonic R</h3>
<p>
Proton (Any modern version)<br />
Technology: Custom, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Recommended to use Sonic R Mod Launcher as well as d8vk.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicr_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicr_1.jpg"></a><br />
</p>
<h3 id="SlayerTest">Slayer's Testaments</h3>
<p>
Native<br />
Technology: QuakeSpasm-Spiked, OpenGL<br />
Controller support:<br />
- Xbox One: Supported<br />
- DualShock 4: Supported<br />
- Nintendo Switch: Supported<br />
- Google Stadia: Supported<br />
Notes:<br />
- Using a Steam Input config with an analog stick but everything else as KB/M is a good idea.<br />
- <a href="steam://controllerconfig/slayer%27s%20testaments/2679545071">Steam Input Controller
Config</a><br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/slayertest1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/slayertest1.jpg"></a><br />
</p>
<h3 id="TagTPOP">Tag: The Power of Paint</h3>
<p>
Proton (Any modern version)<br />
Technology: Custom, Direct3D<br />
Controller support: None (Steam Input works great!)<br />
Notes:<br />
- Does not scale to 16:10<br />
- Would recommend using dgVoodoo2 for upscaling.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/tagtpop1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tagtpop1.jpg"></a><br />
</p>
<h3 id="SonicMania">Sonic Mania</h3>
<p>
Proton (Any modern version)<br />
Technology: Custom, Direct3D<br />
Controller support: Steam Input<br />
Notes:<br />
- Does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicmania1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicmania1.jpg"></a><br />
</p>
<h3 id="SonicGenerations">Sonic Generations</h3>
<p>
Proton (Any modern version)<br />
Technology: Custom, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect (Untested)<br />
- Nintendo Switch: Crashes (Untested)<br />
Notes:<br />
- Stretches screen for 16:10. Blegh<br />
- Does not automatically adjust for new resolutions.<br />
- Brings up configuration screen on first boot. Might need desktop access.<br />
- <i>Really bad</i> performance issues<br />
TODO:<br />
- Try the funny perf mods.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicgenerations1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicgenerations1.jpg"></a><br />
</p>
<h3 id="PacManChampionship">PAC-MAN Championship Edition DX+</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/pacmanchdex_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pacmanchdex_1.jpg"></a><br />
</p>
<h3 id="JazzJackrabbit2">Jazz Jackrabbit 2: The Secret Files (GOG Re-release)</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, DDraw, WinMM<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Execute the GOG installer and install it to wherever<br />
- Copy dgVoodoo2's ddraw.dll and D3Dlmm.dll to the game directory<br />
- WINEDLLOVERRIDES="ddraw=n" (might need to use winecfg)<br />
Notes:<br />
- Force the start button as Escape in Steam Input<br />
- Credits screen is just black and flickers when skipping it.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jazz2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jazz2_1.jpg"></a><br />
</p>
<h3 id="RikkiVikki">Rikki & Vikki</h3>
<p>
Proton (Any modern version)<br />
Technology: BupSystem (Spicy Atari 7800 Emulator), Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Crashes<br />
Notes:<br />
- Use -streaming flag to force fullscreen and autoconfig joysticks<br />
- Will open dialogue box when controller that was connected previously is no longer present.
Requires mouse to dismiss.<br />
- Requires desktop access to disable bilinear filtering.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/rikkivikki1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rikkivikki1.jpg"></a><br />
</p>
<h3 id="ApertureTag">Aperture Tag: The Paint Gun Testing Initiative</h3>
<p>
Proton (Any modern version)<br />
Technology: Source, Direct3D<br />
Controller support: <br />
- Xbox One: Perfect<br />
- DualShock 4: Untested<br />
- Nintendo Switch: Untested<br />
Notes:<br />
- Native build was completely borked, even when replacing the executable.<br />
- Title screen menus were jank with controller. Thankfully touchscreen will alleviate this.<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/aperturetag1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/aperturetag1.jpg"></a><br />
</p>
<h3 id="PortalMel">Portal Stories: Mel</h3>
<p>
Proton (Any modern version)<br />
Controller support:<br />
- Perfect<br />
Notes:<br />
- Proton because broken controller support.<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/portalmel1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/portalmel1.jpg"></a><br />
</p>
<h3 id="NarbacularDrop">Narbacular Drop</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support: None (Steam Input gets the job done)<br />
Notes:<br />
- Limiting the framerate would probably be a good idea.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/narbaculardrop1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/narbaculardrop1.jpg"></a><br />
</p>
<h3 id="MicroMages">Micro Mages</h3>
<p>
Proton (Any modern version)<br />
Technology: NES Emulation, Direct3D<br />
Controller support: <i>Almost</i> perfect<br />
Notes:<br />
- You cannot use both the analog stick and the D-Pad. <a
href="steam://controllerconfig/1065020/2674804668">This</a> controller config works around
that.<br />
- <a href="/files/Micro Mages.cfg">This</a> .cfg will have all 4 controllers configured. Place it in
the game root directory.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/micromages.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/micromages.jpg"></a><br />
</p>
<h3 id="GarrysMod">Garry's Mod</h3>
<p>
Proton (Any modern version)<br />
Technology: Source, Direct3D<br />
Controller support: Bad, use Steam Input<br />
Notes:<br />
- Native Linux build is unstable. Works perfectly in Proton.<br />
- Multiplayer works.<br />
- Official Steam Input config doesn't allow for everything. Get creative! <img
src="/assets/img/smileys/wink.jpg"><br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/garrysmod1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/garrysmod1.jpg"></a><br />
</p>
<h3 id="LunaGame">Luna Game</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- d8vk recommended.<br /. <img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame1.jpg"></a><br />
</p>
<h3 id="DokiDoki">Doki Doki Literature Club!</h3>
<p>
Proton (Any modern version)<br />
Technology: Ren'Py, OpenGL<br />
Controller support: None, use touchscreen<br />
Notes:<br />
- Not in fullscreen by default. Not a huge deal since Deck will use Gamescope<br />
- Game will be unbeatable without going into desktop mode to delete Monika.<br />
- Game doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
- (I'm giving it this rating with Deck in mind, otherwise it's perfect.)<br />
<a href="/assets/img/projects/linuxnotes/dokidoki1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dokidoki1.jpg"></a><br />
Screenshot note: Just Monika.<br />
</p>
<h3 id="DOOM">The Ultimate DOOM + DOOM II</h3>
<p>
Native (Luxtorpeda, GZDoom)<br />
Technology: idTech 1, Vulkan, OpenGL<br />
Controller support: <i>Almost</i> perfect.<br />
Notes:<br />
- GZDoom has a ton of options and looks really bad by default.<br />
- Controller support will take a bit of fiddling, but after that, it's perfect. Certain things like
the map or the main menu aren't assignable though.<br />
Recommended Improvements:<br />
- You can set LUX_DISABLE_DEFAULT_CONFIRM=1 after selecting your default engine to skip the
confirmation dialog.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/doom1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/doom1.jpg"></a><br />
</p>
<h3 id="DOOMUnity">DOOM (Nerve Unity Port)</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/doom_unity1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/doom_unity1.jpg"></a><br />
</p>
<h3 id="SonicEXE">Sonic.EXE</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker, Direct3D<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- It's Sonic.EXE<br />
- "Ready for Round 2, steamuser?"<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicexe1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicexe1.jpg"></a><br />
</p>
<h3 id="SonicAdventure">Sonic Adventure DX</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Really bad performance for such an old game.<br />
- Configuration tool will be brought up on first boot. Can be navigated with touchscreen.<br />
TODO:<br />
- Try using BetterSADX<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicadventure.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicadventure.jpg"></a><br />
</p>
<h3 id="Petscop">Giftscop</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, OpenGL<br />
Controller support: None (Steam Input works perfectly)<br />
Notes:<br />
- <a href="steam://controllerconfig/giftscop/2678126980">Steam Input Controller Config</a><br />
- Steam Overlay broken without gamescope, needed for Steam Input to work.<br />
- Mutliplayer might be jank to get working because of Discord.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/petscop1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/petscop1.jpg"></a><br />
</p>
<h3 id="SwordWithSauce">Sword With Sauce</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Direct3D<br />
Controller support: None (Steam Input works great)<br />
Notes:<br />
- Developer has abandoned this game.<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/swordwithsauce1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/swordwithsauce1.jpg"></a><br />
</p>
<h3 id="YumeNikki">Yume Nikki</h3>
<p>
Proton (Any modern version)<br />
Technology: RPG Maker, DirectDraw<br />
Controller support: None (Steam Input works perfectly!)<br />
Notes:<br />
- <a href="steam://controllerconfig/650700/2678803681">Steam Input Config</a><br />
- Game uses DirectDraw, and as a result has issues with Steam Overlay. Use Gamescope or
dgVoodoo2<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/yumenikki1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/yumenikki1.jpg"></a><br />
</p>
<h3 id="FEZ">FEZ</h3>
<p>
Native (Thanks Flibitijibibo!)<br />
Technology: XNA/FNA, OpenGL<br />
Controller support:<br />
- Xbox One: Perect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/fez1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fez1.jpg"></a><br />
</p>
<h3 id="DuckGame">Duck Game</h3>
<p>
Proton (Any modern version))<br />
Technology: XNA, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/duckgame1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/duckgame1.jpg"></a><br />
</p>
<h3 id="GeometryWarsRE">Geometry Wars: Retro Evolved</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/geometrywarsre1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/geometrywarsre1.jpg"></a><br />
</p>
<h3 id="BattleBlockTheater">BattleBlock Theater</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Native build crashes upon closing FMVs, and the "linuxtest" branch as audio issues. I talked with
The Behemoth and they can't do anything about it yet. :/<br />
- Does not automatically adjust for new resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/battleblock1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/battleblock1.jpg"></a><br />
</p>
<h3 id="SaraIsMissing">Sara Is Missing</h3>
<p>
Proton (Any modern version)<br />
Technology: Java (LWJGL?), OpenGL<br />
Controller support: None, use touchscreen<br />
Notes:<br />
- Really weird to play at 800p.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/sim1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sim1.jpg"></a><br />
</p>
<h3 id="AnotherWorld">Another World: 25th Anniversary Edition</h3>
<p>
Native<br />
Technology: Unknown, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Phantom, fixed with SDL_JOYSTICK_HIDAPI=0<br />
- Nintendo Switch: Crashed ingame<br />
Notes:<br />
- Linux release is known for being somewhat unstable, probably a better idea to use Proton. :P<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/anotherworld1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/anotherworld1.jpg"></a><br />
</p>
<h3 id="HenryStickmin">The Henry Stickmin Collection</h3>
<p>
Proton (Any modern version)<br />
Technology: Adobe AIR, Direct3D<br />
Controller support: None, use touchscreen<br />
Notes:<br />
- Stretches screen to fit 16:10. Gross.<br />
- Framerate will appear to fluctuate, but this is a quirk of Adobe Flash. Ignore it.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/henry1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/henry1.jpg"></a><br />
</p>
<h3 id="SlenderT8P">Slender: The Eight Pages</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- <i>Really bad</i> performance even on Fastest settings.<br />
- Brings up a standard Unity configuration menu on boot.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/slender.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/slender.jpg"></a><br />
</p>
<h3 id="Deltarune">Deltarune</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Windowed mode by default. Not a big deal since Deck uses Gamescope. Can be forced in
configuration.<br />
- Doesn't have the fancy borders of the Nintendo Switch version.<br />
- Doesn't change button icons by default like it does on Windows.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/precious_baby.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/precious_baby.jpg"></a><br />
</p>
<h3 id="GoldenAxed">Golden Axed: A Cancelled Prototype</h3>
<p>
!!!OUTDATED!!!<br />
Proton (GloriousEggroll)<br />
Technology: Unity, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Brings up a generic Unity configuration screen.<br />
- MangoHUD and Steam Overlay have loads of trouble here.<br />
- Requires Media Foundation for 60SEGA intro.<br />
- Does not scale to 16:10.</br>
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/goldenaxed1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/goldenaxed1.jpg"></a><br />
</p>
<h3 id="TuxRacer">TuxRacer</h3>
<p>
Native<br />
Technology: Unknown, OpenGL<br />
Controller support: Bad (Steam Input works fine)<br />
Notes:<br />
- Responded to Steam Input keyboard emulation but not alternate controller schemes (e.g. swapping
buttons); it's based on SDL 1.2.<br />
- Gamescope is highly recommended as it will mess with X server resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/tuxracer1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tuxracer1.jpg"></a><br />
Screenshot note: It is possible to change the game resolution, located in ~/.config.<br />
</p>
<h3 id="IMSCARED">IMSCARED</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker, Direct3D<br />
Controller support: None (Steam Input works fine)<br />
Notes:<br />
- Game relies on file manipulation.<br />
- Desktop folder is created in WinePrefix, but not in ~/Desktop.<br />
- Cannot refocus game after alt-tabbing when in Windowed mode.<br />
- Some versions of Proton have issues with a stuttery mouse.<br />
- THIS GAME, IN ITS CURRENT STATE, WILL NEVER BE GOOD ON A HANDHELD.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/imscared1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/imscared1.jpg"></a><br />
</p>
<h3 id="Undertale">Undertale</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker: Studio, Direct3D<br />
Controller support: Perfect<br />
Notes:<br />
- Always windowed by default. Gamescope fixes this.<br />
- Linux: HORRIBLE frame pacing.<br />
- Linux: No joystick support (Steam Input works perfectly)<br />
- Linux: Crashes with Feral GameMode.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/undertale1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/undertale1.jpg"></a><br />
Screenshot note: MangoHUD looks like that because it had problems with this game and
Gamescope.<br />
<br />
<h3 id="Jackbox3">The Jackbox Party Pack 3</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox3_1.jpg"></a><br />
</p>
<h3 id="CaveStory">Cave Story (NXEngine)</h3>
<p>
Native<br />
Technology: SDL 1.2<br />
Controller support: Broken<br />
Notes:<br />
- Game will screw with X servers. Use gamescope.<br />
- Xbox One Controller does not work when gamescope is attached.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/cavestory1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/cavestory1.jpg"></a><br />
</p>
<h3 id="PortalReloaded">Portal Reloaded</h3>
<p>
Native<br />
Technology: Source, ToGL (DXVK-Native Available)<br />
Controller support: Imperfect<br />
Notes:<br />
- Zooming is impossible by default on controller. <a
href="steam://controllerconfig/1255980/2681905732">This</a> config will fix that.<br />
- Title screen is <a href="/assets/img/projects/linuxnotes/portalreload_title.png">slightly messed
up</a> at 16:10 aspect ratios.<br />
- Performance is awful in the intro sequence.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/portalreload1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/portalreload1.jpg"></a><br />
</p>
<h3 id="ShovelKnight">Shovel Knight: Treasure Trove</h3>
<p>
Native<br />
Technology: Unknown, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Rendering at the edged is <a
href="/assets/img/projects/linuxnotes/shovelknight_render.png">buggy</a> when forced to
16:10.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/shovelknight1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/shovelknight1.jpg"></a><br />
</p>
<h3 id="IndieGame">Indie Game: the Movie</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller support: None<br />
Notes:<br />
- Native build is like completely missing the depot which is hilarious.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/indiegame1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/indiegame1.jpg"></a><br />
Screenshot note: I think it's really funny how I have to play a movie in Proton.<br />
</p>
<h3 id="dhewm3">DOOM 3</h3>
<p>
Proton / Luxtorpeda dhewm3 (Provides the same experience)<br />
Technology: idTech 4, Direct3D (Proton), OpenGL (dhewm3)<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Using dhewm3 over Proton provides a functionally identical experience.<br />
- Gamescope is probably recommended for dhewm3 because of X server nonsense.<br />
Recommended Improvements:<br />
- You can set LUX_DISABLE_DEFAULT_CONFIRM=1 after selecting your default engine to skip the
confirmation dialog.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/dhewm3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dhewm3_1.jpg"></a><br />
Screenshot note: Game is not rendered in Vulkan, that's just Gamescope. Also using dhewm3
here.<br />
</p>
<h3 id="BatmanAsylum">Batman: Arkham Asylum</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: Unreal Engine, Direct3D
<lbr />
Controller support: Perfect?<br />
Notes:<br />
- GloriousEggroll because of winetricks mdx d3dx9 d3dcompiler_43 win10<br />
- Doesn't support using the mouse and controller in tandem.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/batmanasylum1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/batmanasylum1.jpg"></a><br />
</p>
<h3 id="SIMULACRA">SIMULACRA</h3>
<p>
Proton (Any modern version)<br />
Technology: Java (LWJGL?), OpenGL, OpenAL
<lbr />
Controller support: None, use touchscreen<br />
Notes:<br />
- Very stuttery on boot, evens out eventually, still occasional frametime spikes.<br />
- I'm using GE here because of MangoHUD.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/simulacra1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/simulacra1.jpg"></a><br />
Screenshot note: You can see one of the random lagspikes here.<br />
</p>
<h3 id="CSGO">Counter-Strike: Global Offensive</h3>
<p>
Native<br />
Technology: Source, ToGL (DXVK-Native available)<br />
Controller support: Steam Input (But imperfect)<br />
Notes:<br />
- DXVK-Native is accessed through the -vulkan parameter like Portal 2.<br />
- Controllers can sometimes get confused between the menu and the gameplay action sets. This can be
somewhat alleviated by having a hotkey that will switch to the gameplay action set on the fly.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/csgo1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/csgo1.jpg"></a><br />
</p>
<h3 id="DarkForces">STAR WARS: Dark Forces</h3>
<p>
DOSBox (Boxtron)<br />
Technology: Jedi Engine<br />
Controller support: None/Bad, use FlameX360's Steam Input config<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/darkforces1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/darkforces1.jpg"></a><br />
</p>
<h3 id="PuttPuttPBS">Putt-Putt: Pep's Birthday Surprise</h3>
<p>
Proton (Any modern version)<br />
Technology: YAGA, Direct3D 8(?)<br />
Controller support: None, use touchscreen<br />
Notes:<br />
- Game crashes upon boot, even on Windows.<br />
- The fix: Attach a CD-ROM drive at point D: using WineCFG.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/puttputtpbs1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/puttputtpbs1.jpg"></a><br />
Screenshot note: I have gamescope running here for MangoHUD. Game is rendered in WineD3D.<br />
</p>
<h3 id="TeamFortress2">Team Fortress 2</h3>
<p>
Native<br />
Technology: Source, ToGL<br />
Controller support: Steam Input (Broken)<br />
Notes:<br />
- Couldn't enable VSync.<br />
- Controller would often get stuck in the gameplay action set and menus were no longer navigable.
Game was effectively softlocked.<br />
- Training prompts were not advanceable with a controller.<br />
- Mid-game class selection would advance two classes instead of one with the D-Pad.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/tf2.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tf2.jpg"></a><br />
</p>
<h3 id="GangBeasts">Gang Beasts</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
Notes:<br />
- Vulkan available with -force-vulkan<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/gangbeasts1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/gangbeasts1.jpg"></a><br />
</p>
<h3 id="HalfLife">Half-Life (Steam Release)</h3>
<p>
Native<br />
Technology: GoldSrc, OpenGL<br />
Controller support: None/Bad, Use Steam Input<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/halflife1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/halflife1.jpg"></a><br />
</p>
<h3 id="PeggleDeluxe">Peggle Deluxe</h3>
<p>
Proton (Any modern version)<br />
Technology: PopCap Engine, Direct3D
< 9<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Rendered in WineD3D by default<br />
- Enabling hardware acceleration is recommended<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/peggledeluxe1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/peggledeluxe1.jpg"></a><br />
</p>
<h3 id="LIMBO">LIMBO</h3>
<p>
Native<br />
Technology: Box2D, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Ignored Steam Input. Fixable with SDL_JOYSTICK_HIDAPI=0.<br />
- Nintendo Switch: Ignored Steam Input. Unfixable.<br />
- Google Stadia: Ignored Steam Input. Fixable with SDL_JOYSTICK_HIDAPI=0.<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/limbo1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/limbo1.jpg"></a><br />
</p>
<h3 id="Ricochet">Ricochet</h3>
<p>
Proton (Any modern version)<br />
Technology: GoldSrc, OpenGL<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Very few players are online.<br />
- I'm incredibly bad at this.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/ricochet.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ricochet.jpg"></a><br />
</p>
<h3 id="CookieClicker">Cookie Clicker (Steam Release)</h3>
<p>
Proton (Any modern version)<br />
Technology: Chromium, Direct3D<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Mouse vertically offset when maximized in desktop mode. Force fullscreen.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/cookieclicker1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/cookieclicker1.jpg"></a><br />
</p>
<h3 id="BrutalDoom">Brutal DOOM</h3>
<p>
Native<br />
Technology: GZDoom, OpenGL, Vulkan<br />
Controller support: Perfect with tweaks<br />
Notes:<br />
- BD-specific controls are not mappable to controller. Must be done in Steam Input.<br />
- Tedious to set up for couch/handheld play.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/brutaldoom1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/brutaldoom1.jpg"></a><br />
</p>
<h3 id="SuperMarioWar">Super Mario War</h3>
<p>
Native<br />
Technology: SDL<br />
Controller support:<br />
- No phantoms, but game still needs keyboard to properly configure stuff.<br />
Notes:<br />
- None...?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/smw1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/smw1.jpg"></a><br />
</p>
<h3 id="Minecraft">Minecraft (Java)</h3>
<p>
Native<br />
Technology: Java, LWJGL, OpenGL<br />
Controller support: None, get creative with Steam Input! <img
src="/assets/img/smileys/wink.jpg"><br />
Notes:<br />
- Use PolyMC<br />
- Modded installations will likely need separate controller configs as necessary.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/minecraft1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/minecraftl1.jpg"></a><br />
Screenshot note: Game is rendered in OpenGL. Vulkan is Gamescope.<br />
</p>
<h3 id="CDitDZ">Clone Drone in the Danger Zone</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect?<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/clonedrone1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/clonedrone1.jpg"></a><br />
</p>
<h3 id="Sonic2Exe">SONIC2.EXE</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: GameMaker 8, Direct3D 8, Media Foundation<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- Audio for intro FMV plays, but video is black and shows a window that's not present in
Windows.<br />
- Awful frame times when scenes change.<br />
- Game locks up after intro FMV in standard Wine.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/sonic2_exe1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonic2_exe1.jpg"></a><br />
</p>
<h3 id="HappyMouse">Happy Mouse + Really Happy Mouse</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/happymouse1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/happymouse1.jpg"></a><br />
<a href="/assets/img/projects/linuxnotes/reallyhappymouse.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/reallyhappymouse.jpg"></a><br />
Top: Happy Mouse; Bottom: Really Happy Mouse<br />
</p>
<h3 id="Uhcakip">Uhcakip</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- <a href="/files/YOU'RE NEXT.bmp">pikachu jumpscare</a><br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/uhcakip1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/uhcakip1.jpg"></a><br />
</p>
<h3 id="LostSilver">Lost Silver</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/lostsilver1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lostsilver1.jpg"></a><br />
</p>
<h3 id="SALLYEXE">SALLY.EXE</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- "But I can play with you, right Steamuser?"<br />
- Uses D3D8 for whatever reason compared to SONIC.EXE which uses D3D9.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/sally_exe1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sally_exe1.jpg"></a><br />
</p>
<h3 id="MAME">MAME</h3>
<p>
Native<br />
Technology: SDL2<br />
Controller support:<br />
- SDL_JOYSTICK_HIDAPI=0 is required for HID devices.<br />
Notes:<br />
- MAME is MAME. Not gonna be as user-friendly on a handheld.<br />
- Unable to access the menu by default. Thankfully you can set a hotkey with Steam Input.<br />
- SDL_JOYSTICK_HIDAPI=0 is required.<br />
- Gamescope was required to make Steam Input function.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/mame1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/mame1.jpg"></a><br />
</p>
<h3 id="KarlsonItchIo">Karlson (Itch.io Demo)</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support: None.<br />
Notes:<br />
- Vulkan enabled with -force-vulkan.<br />
- Generic Unity config menu on every boot.<br />
- Menu vignettte leaves a letterbox at 16:10 resolutions.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/karlson1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/karlson1.jpg"></a><br />
</p>
<h3 id="PICO-8">PICO-8</h3>
<p>
Native<br />
Technology: SDL2, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Gamescope required for Controllers<br />
- On-Screen Keyboard may be required<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/pico8_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pico8_1.jpg"></a><br />
</p>
<h3 id="HollowKnight">Hollow Knight</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Vulkan enabled with -force-vulkan.<br />
- Game does not scale to 16:10.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/hollowknight1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/hollowknight1.jpg"></a><br />
</p>
<h3 id="Ganbare">Ganbare! Natsuki-San!</h3>
<p>
Native<br />
Technology: SDL 1.2<br />
Controller support:<br />
- Xbox One: Phantom Controller<br />
- DualShock 4: Phantom Controller<br />
- Nintendo Switch: Phantom Controller<br />
- Google Stadia: Phantom Controller<br />
Notes:<br />
- Game relies on SDL 1.2 for controllers. Apply the fixes in <a
href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a>.<br />
- Gamescope required for controllers + fullscreen<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/ganbare1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ganbare1.jpg"></a><br />
</p>
<h3 id="StickFight">Stick Fight: The Game</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Game doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/stickfight1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/stickfight1.jpg"></a><br />
</p>
<h3 id="amogus">Among Us</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect?<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/DababySussyAmogusSchool1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/DababySussyAmogusSchool1.jpg"></a><br />
amogus<br />
</p>
<h3 id="PNatI">Poker Night at the Inventory</h3>
<p>
Proton (Any modern version)<br />
Technology: TellTale Tool, Direct3D<br />
Controller support: None.<br />
Notes:<br />
- Performance issues.<br />
- Game doesn't scale to 16:10<br />
- Game is no longer purchasable from Steam.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<<a href="/assets/img/projects/linuxnotes/pnati1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pnati1.jpg"></a><br />
</p>
<h3 id="SCPCB">SCP: Containment Breach</h3>
<p>
Proton (Any modern version)<br />
Technology: Blitz3D, Media Foundation, Direct3D<br />
Controller support: None.<br />
Notes:<br />
- <a href="/assets/img/projects/linuxnotes/scp_mem.png">Memory Access Violation</a> on boot.
Enabling VRAM and disabling startup video did not help.<br />
- Use the Unity version or something /shrug<br />
<img src="/assets/img/projects/linuxnotes/borked.png"><br />
</p>
<h3 id="Brawlhalla">Brawlhalla</h3>
<p>
Proton (Any modern version)<br />
Technology: TellTale Tool, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Anti-Cheat: Easy Anti-Cheat<br />
Notes:<br />
- Gamescope required for controllers.<br />
- -noeac flag required because of anticheat.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/brawlhalla1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/brawlhalla1.jpg"></a><br />
</p>
<h3 id="Flywrench">Flywrench</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker: Studio, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Ignored Steam Input.<br />
- Nintendo Switch: Ignored Steam Input.<br />
- Google Stadia: Ignored Steam Input.<br />
Notes:<br />
- Game does not scale to 16:10.<br />
- Requires you to enable DirectInput in the settings for joypad to work. Needs keyboard or
mouse.<br />
- Native Linux depot does not have an executable. lmao<br />
- Apply the fixes in <a href="pages/projects/linuxnotes.html#Controllers">Me Yelling About
Controller Jank</a>.<br />
- PROTON_USE_WINED3D=1 improves performance<br />
<img src="/assets/img/projects/liuxnotes/gold.png"><br />n
<a href="/assets/img/projects/linuxnotes/flywrench1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/flywrench1.jpg"></a><br />
</p>
<h3 id="EDGE">EDGE</h3>
<p>
Native<br />
Technology: Unity, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/edge1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/edge1.jpg"></a><br />
</p>
<h3 id="Rayman3">Rayman 3: Hoodlum Havoc (GOG Re-release)</h3>
<p>
Proton (Any modern version)<br />
Technology: OpenSpace, Direct3D 8<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Nothing<br />
- Google Stadia: Perfect<br />
Installation:<br />
- 1. Run the Rayman 3 GOG installer and install it to wherever.<br />
- 2. Install <a href="https://raymanpc.com/forum/viewtopic.php?f=13&t=12854">Better Rayman 3</a> to
that same directory. (Shoutouts to my boy RibShark! :D)<br />
- 3. Add Rayman3.exe to Steam and run it once.<br />
- 4. Run R3_Setup_DX8.exe using Protontricks Launcher and configure the game as necessary.<br />
- 5. Run BR3_Config.exe using Protontricks Launcher and configure BR3 as necessary.<br />
- 6. In d3d8.ini set D3d8to9 to 1.<br />
- 7. WINEDLLOVERRIDES="dinput8=n,d3d8=n" (Might need to do that using Protontricks winecfg)<br />
Notes:<br />
- Menus aren't selectable with Analog Stick.<br />
- Configuration tools require mouse and keyboard<br />
- Refer to <a href="https://www.pcgamingwiki.com/wiki/Rayman_3:_Hoodlum_Havoc">this page</a> for
more improvements.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/rayman3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rayman3_1.jpg"></a><br />
</p>
<h3 id="DLDBStar">DuLuDuBi Star</h3>
<p>
!!!!OUTDATED!!!!<br />
Proton (Any modern version)<br />
Technology: Unknown, D3D9<br />
Controller support: None<br />
Notes:<br />
- Requires winetricks mfc42<br />
- LC_ALL="zh_CN" must be set<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/duludubi1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/duludubi1.jpg"></a><br />
</p>
<h3 id="GTASA">Grand Theft Auto: San Andreas (Steam Release)</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: RenderWare, Direct3D 9<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect?<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Use <a href="https://www.definitive-edition-project.com/sa-de">Definitive Edition
Project</a><br />
- WINEDLLOVERRIDES="bass,vorbisFile,vorbisHooked=n,b"<br />
Notes:<br />
- Intro video doesn't render anything, even though I ripped the DLLs from Windows<br />
- Controllers were unable to be configured ingame, base configuration was fine though<br />
- Gamescope must be attached to render anything<br />
TODO:<br />
- Is the intro video missing because of a borked codec?<br />
<img src="/assets/img/projects/linuxnotes/silverp.png"><br />
<a href="/assets/img/projects/linuxnotes/sanandreas1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sanandreas1.jpg"></a><br />
</p>
<h3 id="superhot">SUPERHOT</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Vulkan renderer accessible with -force-vulkan<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/superhot1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/superhot1.jpg"></a><br />
</p>
<h3 id="slendytubbiesclassic">SlendyTubbies (Classic, V2 Beta)</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D 9<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Generic Unity configuration screen on startup<br />
TODO:<br />
- Test LAN multiplayer<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/slendytubbies_classic1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/slendytubbies_classic1.jpg"></a><br />
Screenshot note: This startled me XD<br />
</p>
<h3 id="wolf3d">Wolfenstein 3D</h3>
<p>
Luxtorpeda (ECWolf)<br />
Technology: ECWolf, SDL2<br />
Controller support: Broken, use Steam Input<br />
Notes:<br />
- Requires Gamescope to be attached for Steam Overlay to work<br />
TODO:<br />
- Double check controller support<br />
Recommended Improvements:<br />
- You can set LUX_DISABLE_DEFAULT_CONFIRM=1 after selecting your default engine to skip the
confirmation dialog.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/wolf3d_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/wolf3d_1.jpg"></a><br />
Screenshot note: Game is rendered in OpenGL.<br />
</p>
<h3 id="sunkympeg">Sunky.MPEG</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, DirectDraw<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- Gamescope required for proper fullscreen (Wine 7.0 and later) and for Steam Overlay.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/sunky1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sunky1.jpg"></a><br />
Screenshot note: Game is rendered in WineD3D.<br />
</p>
<h3 id="sillytiff">Silly.TIFF</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, DirectDraw<br />
Controller support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- No sound except for Happy by Liam Lynch at the end<br />
- Gamescope required for proper fullscreen (Wine 7.0 and later) and for Steam Overlay.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/silly1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/silly1.jpg"></a><br />
Screenshot note: Game is rendered in WineD3D.<br />
</p>
<h3 id="mari0">Mari0</h3>
<p>
Native<br />
Technology: Love2D<br />
Controller support: Bad<br />
Notes:<br />
- Gamescope required for fullscreen<br />
- Game does not scale to 16:10<br />
- This <a href="steam://controllerconfig/mari0/2717387518">controller config</a> works
wonders.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/mari0_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/mari0_1.jpg"></a><br />
Screenshot note: Game is rendered in OpenGL.<br />
</p>
<h3 id="yonoid2">Yo! Noid II: Enter the Void</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: Unity, Direct3D, Media Foundation<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect?<br />
- Google Stadia: Perfect<br />
Notes:<br />
- GloriousEggroll required because of Media Foundation.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/yonoid2.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/yonoid2.jpg"></a><br />
</p>
<h3 id="ut99">Unreal Tournament: Game of the Year Edition</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine, 3dfx, DDraw<br />
Controller support: Borked<br />
Installation:<br />
- See <a href="pages/projects/linuxnotes.html#UE98">Unreal Engine (1998)</a><br />
Notes:<br />
- Unstable when going in and out of focus. Not a huge deal for Deck<br />
TODO:<br />
- Should I attempt to get that freely available Vulkan renderer working or nah?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/ut99_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ut99_1.jpg"></a><br />
</p>
<h3 id="soniccd">Sonic CD (Christian Whitehead)</h3>
<p>
Proton (Any modern version)<br />
Technology: Retro Engine, Direct3D<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- protontricks 200490 d3dx9_43 d3dcompiler_43<br />
- This can be done out of the box with Proton-GE<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/soniccd1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/soniccd1.jpg"></a><br />
</p>
<h3 id="sbw">Super Bernie World</h3>
<p>
Native<br />
Technology: XNA/FNA, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Fullscreen mode doesn't work correctly, Gamescope recommended for fullscreen<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/bernie1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/bernie1.jpg"></a><br />
</p>
<h3 id="DeusExGOTY">Deus Ex: Game of the Year Edition</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine, 3dfx, DDraw<br />
Controller support: Borked<br />
Installation:<br />
- See <a href="pages/projects/linuxnotes.html#UE98">Unreal Engine (1998)</a><br />
Notes:<br />
- Unstable when going in and out of focus. Not a huge deal for Deck<br />
TODO:<br />
- Should I attempt to get that freely available Vulkan renderer working or nah?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/deusex1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/deusex1.jpg"></a><br />
</p>
<h3 id="feddy">Five Nights at Freddy's</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
- Requires Gamescope to render anything<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fnaf1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnaf1.jpg"></a><br />
Screenshot note: I don't like Scott.<br />
</p>
<h3 id="feddy2">Five Nights at Freddy's 2</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fnaf2.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnaf2.jpg"></a><br />
</p>
<h3 id="feddy3">Five Nights at Freddy's 3</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fnaf3.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnaf3.jpg"></a><br />
</p>
<h3 id="feddy4">Five Nights at Freddy's 4</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, (Unknown Renderer)<br />
Controller support: None<br />
Notes:<br />
- Has trouble windowing no matter what. Use Gamescope.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/fnaf4.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnaf4.jpg"></a><br />
</p>
<h3 id="feddy5">Five Nights at Freddy's: Sister Location</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fnafsl.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnafsl.jpg"></a><br />
</p>
<h3 id="feddyworld">FNaF World</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
- Has trouble windowing no matter what. Use Gamescope.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fnafworld1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnafworld1.jpg"></a><br />
</p>
<h3 id="GoatSimulator">Goat Simulator</h3>
<p>
!!!GAME NEEDS RETEST!!!<br />
Native<br />
Technology: Unreal Engine 3, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Phantom Controller<br />
- Nintendo Switch: Phantom Controller<br />
- Google Stadia: Phantom Controller<br />
Notes:<br />
- Oddball loading times.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/goat1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/goat1.jpg"></a><br />
</p>
<h3 id="Psychonauts">Psychonauts (Steam Release)</h3>
<p>
Native<br />
Technology: Unknown, OpenGL<br />
Controller support:<br />
- All controllers had phantom issues. Apply the fixes in <a
href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a>.<br />
Notes:<br />
- Game appears to be emulating DirectInput. <a href="steam://controllerconfig/3830/2722308730">This
controller config</a> can be used to get around it.<br />
- Options menu is not navigatable with controller. The above config allows for it though.<br />
- Game does not show controller-specific glyphs, despite supporting controllers.<br />
- Mouse selection is broken in windowed mode. Fullscreen causes issues with the X server. Use
Gamescope<br />
- Steam Cloud is broken on Linux.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/psychonauts1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/psychonauts1.jpg"></a><br />
</p>
<h3 id="Cemu">Cemu</h3>
<p>
Proton (Any modern version)<br />
Technology: OpenGL, Vulkan, DirectSound, XAudio2<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br>
Notes:<br />
- Emulator works just fine but there's one massive problem.<br />
- To access the configuration menus, a keyboard and mouse is required, and does not work in any
current version of Gamescope.<br />
- This presents a problem as often times with emulation you need to change settings on a
game-by-game basis.<br />
- While you *can* temporaily use the desktop mode for this, it's inconvenient.<br />
- The truly perfect solution would be for emulators like this to implement a controller-friendly UI
accessible via a hotkey.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/cemu1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/cemu1.jpg"></a><br />
<h3 id="feddybruh">Ultimate Custom Night</h3>
<p>
Proton (Any modern version)<br />
Technology: Clickteam, D3D9<br />
Controller support: None<br />
Notes:<br />
- Poor performance on D3D9. Use dgVoodoo2's D3D9 DLL to greatly boost performance.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/ucn1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ucn1.jpg"></a><br />
</p>
<h3 id="funnychicken">Ultimate Chicken Horse</h3>
<p>
Native<br />
Technology: Unity, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/chicken1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/chicken.jpg"></a><br />
</p>
<h3 id="haloce">Halo: Combat Evolved</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, D3D9<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- For CD Release<br />
- Add a dummy EXE to Steam and run it once<br />
- Use protontricks to install mfc42<br />
- Use protontricks to run the Setup.EXE in the new prefix<br />
- Enter your key and install the game to the directory of your choice<br />
- Install <a
href="https://community.pcgamingwiki.com/files/file/1130-halo-combat-evolved-patch/">Halo:
Combat Evolved Patch 1.10</a> again, using protontricks<br />
- Change your dummy Steam shortcut to the location of halo.exe<br />
Notes:<br />
- Game cannot be paused with controller. ESC must be mapped with Steam Input<br />
- Forces 30FPS by default.<br />
- Configuring your controller can be jank, best to use a keyboard for this.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/halo1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/halo1.jpg"></a><br />
</p>
<h3 id="SimpsonsHaR">The Simpsons: Hit and Run</h3>
<p>
Proton (GloriousEggroll)<br />
Technology: Unknown, D3D9<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Mount ISO and install the game to your directory of choice.<br />
- Install <a href="https://donutteam.com/releases/view/lucas-mod-launcher">Lucas' Simpsons Hit & Run
Mod Launcher</a> to the game directory.<br />
- Add the mod launcher to Steam, forcing the usage of Proton-GE<br />
- In the mod launcher, enable the D3D9 and XInput hacks.<br />
- Start the game using the Launch button.<br />
- In Steam, now add the -launch flag to the launch options.<br />
- You may need to configure your controller ingame.<br />
- You will need to map your Start button to Escape in Steam Input.<br />
Notes:<br />
- Proton-GE automatically installs Wine-Mono. LSHaRML requires Wine-Mono to work.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/simpsons1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/simpsons1.jpg"></a><br />
</p>
<h3 id="Scratch2">Scratch 2 Offline Editor</h3>
<p>
Proton (Any modern version)<br />
Technology: Adobe AIR, D3D9<br />
Controller support: None<br />
Installation:<br />
- Install Adobe AIR to the Prefix.<br />
- Use this <a href="http://llk.github.io/scratch-msi/Scratch2_MSI_454.zip">Scratch 2.0 MSI
Installer</a> to work around the issues with Adobe AIR installers.<br />
- Bonus step: Install Scratch v461 on Windows and copy the files to your Wine prefix
directory.<br />
Notes:<br />
- Make Steam Input profiles for all of the games you want to play.<br />
- Window does not update unless mouse is clicked.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/scratch2.0_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/scratch2.0_1.jpg"></a><br />
</p>
<h3 id="Scratch3">Scratch 3.0 Desktop</h3>
<p>
Native<br />
Technology: Electron, OpenGL(?)<br />
Controller support: None<br />
Installation:<br />
- Use the <a href="https://aur.archlinux.org/packages/scratch-desktop/">scratch-desktop</a> AUR
package.<br />
Notes:<br />
- Make Steam Input profiles for all of the games you want to play.<br />
- Cannot exit editor without Steam Overlay<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/scratch3.0_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/scratch3.0_1.jpg"></a><br />
</p>
<h3 id="LunaGame2">Luna Game 2</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/silverp.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame2_1.jpg"></a><br />
</p>
<h3 id="LunaGame3">Luna Game 3</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame3_1.jpg"></a><br />
</p>
<h3 id="LunaGame4">Luna Game 4</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- Can only be played once. Requires the replay EXE for replays.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame4_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame4_1.jpg"></a><br />
</p>
<h3 id="LunaGame5">Luna Game 5</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame5_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame5_1.jpg"></a><br />
</p>
<h3 id="LunaGame0">Luna Game 0</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
- Can only be played once. Requires the replay EXE for replays.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame0_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame0_1.jpg"></a><br />
</p>
<h3 id="LunaGameN1">Luna Game -1</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8, Direct3D 8<br />
Controller support: None, use Steam Input<br />
Installation:<br />
- Attach dgVoodoo2's D3D8 DLL<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/lunagame1_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lunagame1_1.jpg"></a><br />
</p>
<h3 id="SDCWin32">Sonic Dreams Collection</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- Eggman Origin will be unplayable, at least in handheld mode, due to needing the SegaNET executable
to also be running in the same prefix<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/sdc1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sdc1.jpg"></a><br />
</p>
<h3 id="TJoCR">The Joy of Creation: Reborn (Free-Roam Prototype)</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Direct3D<br />
Controller support: None, use Steam Input<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/tjoc_r1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tjoc_r1.jpg"></a><br />
</p>
<h3 id="TJEBitG">ToeJam & Earl: Back in the Groove!</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Vulkan renderer causes artifacting with water. Intel driver issue?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/tjebitg_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tjebitg_1.jpg"></a><br />
</p>
<h3 id="Xenia">Xenia</h3>
<p>
Proton-7.0rc6-GE-1<br />
Technology: Other, D3D12, Vulkan<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- D3D12 Renderer crashes because of VKD3D incompatibility<br />
- Vulkan renderer renders brighter than Windows... for some reason<br />
- Stretches games vertically at 16:10<br />
- Crashes on exit<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/xenia1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/xenia1.jpg"></a><br />
</p>
<h3 id="hl2">Half-Life 2</h3>
<p>
Native<br />
Technology: Source, ToGL, DXVK-Native<br />
Controller support: Steam Input<br />
- SDL_JOYSTICK_HIDAPI=0 required to make HID controllers behave correctly with Steam Input.<br />
Notes:<br />
- Must use the Beta branch for Steam Input support + use -gamepadui<br />
- -vulkan for DXVK-Native<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/hl2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/hl2_1.jpg"></a><br />
</p>
<h3 id="bombshell2">Ion Fury</h3>
<p>
Native<br />
Technology: EDuke32, OpenGL<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Ignored Steam Input. Fixed with SDL_JOYSTICK_HIDAPI=0<br />
- Nintendo Switch: Ignored Steam Input. Fixed with SDL_JOYSTICK_HIDAPI=0<br />
- Google Stadia: Ignored Steam Input. Fixed with SDL_JOYSTICK_HIDAPI=0<br />
Notes:<br />
- Game sometimes crashes on quit.<br />
<img src="/assets/img/projects/linuxnotes/platinumm.png"><br />
<a href="/assets/img/projects/linuxnotes/ionfury1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ionfury1.jpg"></a><br />
</p>
<h3 id="dragonslair">Dragon's Lair (2016 Re-release)</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller support:<br />
- Xbox One: Ignored Steam Input.<br />
- DualShock 4: Ignored Steam Input.<br />
- Nintendo Switch: Ignored Steam Input.<br />
- Google Stadia: Ignored Steam Input.<br />
Notes:<br />
- Steam Overlay doesn't work, even with Gamescope attached.<br />
- Game ignores Steam Input, and running the script in in <a
href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a> borks
controller support.<br />
- Game requires keyboard and mouse for name input.<br />
- Game does not scale to 16:10<br />
- Vulkan accessible with -force-vulkan<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/dragonslair1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dragonslair1.jpg"></a><br />
</p>
<h3 id="ifoundyoufaker">Sonic Adventure 2</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, D3D9<br />
Controller support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Boot up game without any flags.<br />
- In the config, force your input device to Gamepad.<br />
- If you have a second controller attached, also set Player 2 to Gamepad.<br />
- Close config tool.<br />
- In Steam, add the -q flag to the launch options.<br />
Notes:<br />
- Configuration tool is a little annoying with joysticks.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/sonicadventure2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/sonicadventure2_1.jpg"></a><br />
</p>
<h3 id="fnfmorelikebruh">Friday Night Funkin'</h3>
<p>
Native<br />
Technology: HaxeFlixel, OpenGL<br />
Controller Support: None, use Steam Input<br />
Notes:<br />
- No known automatic fullscreen, Gamescope takes care of this though.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/fnf1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fnf1.jpg"></a><br />
</p>
<h3 id="BlackMesa">Black Mesa</h3>
<p>
Native<br />
Technology: Source, ToGL<br />
Controller Support: <br />
- All controllers had phantom issues. Apply the fixes in <a
href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a>.<br />
- Controller support is just bad in general. Use Steam Input emulation for the time being.<br />
Notes:<br />
- Use the -newgameui flag for a better UI.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/blackmesa1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/blackmesa1.jpg"></a><br />
</p>
<h3 id="bayonetta">Bayonetta</h3>
<p>
Proton (Any modern version)<br />
Technology: Platinum Engine, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- PROTON_SET_GAME_DRIVE=1 must be set to not crash on boot.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/bayo1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/bayo1.jpg"></a><br />
</p>
<h3 id="bigrigs">Big Rigs: Over the Road Racing</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: Unknown, Direct3D 8<br />
Controller Support: None<br />
Notes:<br />
- Crashes on boot, even when using the dgVoodoo2 Direct3D 8 DLL.<br />
TODO:<br />
- I got it working like once or twice, and it works just fine in standard Wine. Fullscreen hack
issue?<br />
<img src="/assets/img/projects/linuxnotes/borked.png"><br />
</p>
<h3 id="imscared_classic">IMSCARED (2012 GameJolt Release)</h3>
<p>
Proton (Any modern version)<br />
Technology: GameMaker 8<br />
Controller Support: None<br />
Notes:<br />
- See <a href="pages/projects/linuxnotes.html#GameMaker8">GameMaker 8</a>.<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/imscared_classic1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/imscared_classic1.jpg"></a><br />
</p>
<h3 id="highhell">High Hell</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D 9<br />
Controller Support: None, use Steam Input<br />
Notes:<br />
- Not well optimized.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/highhell1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/highhell1.jpg"></a><br />
</p>
<h3 id="supertux">SuperTux (Steam Release)</h3>
<p>
Native<br />
Technology: Custom, OpenGL<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/supertux1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/supertux1.jpg"></a><br />
</p>
<h3 id="fear">F.E.A.R.</h3>
<p>
Proton (Any modern version)<br />
Technology: Jupiter EX, OpenGL<br />
Controller Support: Bad, use Steam Input for KB/M emulation<br />
Notes:<br />
- Display and Performance menus crash when using DXVK. Fixed with Gamescope... for some
reason.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/fear1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/fear1.jpg"></a><br />
</p>
<h3 id="bbpsx">BloodbornePSX</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine, D3D11<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Goodle Stadia: Perfect<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/bbpsx1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/bbpsx1.jpg"></a><br />
</p>
<h3 id="legomovie">The LEGO Movie Videogame</h3>
<p>
Proton (Any modern version)<br />
Technology: Nu2, Direct3D, Media Foundation<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Goodle Stadia: Perfect<br />
Notes:<br />
- Game uses WMF for its FMVs. Either use the Windows DLLs or use GloriousEggroll<br />
TODO:<br />
- Do certain events not trigger if the framerate is too high or low?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/legomovie1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/legomovie1.jpg"></a><br />
</p>
<h3 id="legobatman">LEGO Batman: The Videogame</h3>
<p>
Proton (Any modern version)<br />
Technology: Nu2, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Goodle Stadia: Perfect<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/legobatman1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/legobatman1.jpg"></a><br />
</p>
<h3 id="guacamelee">Guacamelee! Super Turbo Championship Edition</h3>
<p>
Proton (Any modern version)<br />
Technology: Proprietary, FMOD, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Goodle Stadia: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/guacamelee1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/guacamelee1.jpg"></a><br />
</p>
<h3 id="humanff">Human: Fall Flat</h3>
<p>
Native<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller Support:<br />
- Every controller had phantoms. Run the script in <a
href="pages/projects/linuxnotes.html#Controllers">Me Yelling About Controller Jank</a>.<br />
Notes:<br />
- Vulkan available with -force-vulkan<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/humanff1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/humanff1.jpg"></a><br />
</p>
<h3 id="crysis2me">Crysis 2 Maximum Edition</h3>
<p>
Proton (Any modern version)<br />
Technology: CryEngine 3, Direct3D 9+11<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Online multiplayer shutdown in 2014, making the login screen completely useless.<br />
<img src="/assets/img/projects/linuxnotes/platinumm.png"><br />
<a href="/assets/img/projects/linuxnotes/crysis2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/crysis2_1.jpg"></a><br />
</p>
<h3 id="crysis3">Crysis 3</h3>
<p>
Proton (Any modern version)<br />
Technology: CryEngine 3, Direct3D 11<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- First-time setup will require a touchscreen or keyboard and mouse.<br />
- Game installs Origin which starts with the game, and causes the screen to flicker a couple of
times on boot, it's not invasive other than that though.<br />
- <a href="/assets/img/projects/linuxnotes/origin1.png">Origin Image 1 </a><a
href="/assets/img/projects/linuxnotes/origin2.png">Origin Image 2</a><br />
<img src="/assets/img/projects/linuxnotes/platinumm.png"><br />
<a href="/assets/img/projects/linuxnotes/crysis3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/crysis3_1.jpg"></a><br />
</p>
<h3 id="catalyst">Mirror's Edge Catalyst</h3>
<p>
Proton (Any modern version)<br />
Technology: Frostbite, Direct3D 11<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- First-time setup will require a touchscreen or keyboard and mouse.<br />
- Game installs Origin which starts with the game, and causes the screen to flicker a couple of
times on boot, it's not invasive other than that though.<br />
- <a href="/assets/img/projects/linuxnotes/origin1.png">Origin Image 1 </a><a
href="/assets/img/projects/linuxnotes/origin2.png">Origin Image 2</a><br />
TODO:<br />
- Is that funny pixelation I see sometimes part of the game or a driver issue?<br />
<img src="/assets/img/projects/linuxnotes/platinumm.png"><br />
<a href="/assets/img/projects/linuxnotes/catalyst1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/catalyst1.jpg"></a><br />
</p>
<h3 id="watchdogs">Watch_Dogs</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: Disrupt, Direct3D, XAct<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Performance issues out the booty
<img src="/assets/img/projects/linuxnotes/silverp.png"><br />
<a href="/assets/img/projects/linuxnotes/watch_dogs1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/watch_dogs1.jpg"></a><br />
</p>
<h3 id="pttr">Paint The Town Red</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: Unity, OpenGL (Vulkan available)<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Vulkan available with -force-vulkan<br />
- Button prompts flicker when using mouse with joystick<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/pttr1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pttr1.jpg"></a><br />
</p>
<h3 id="pcbs">PC Building Simulator</h3>
<p>
Proton (Any modern version)<br />
Technology: Unity, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Runs like doodoo caca<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/pcbs.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pcbs.jpg"></a><br />
</p>
<h3 id="s&mworld">Sam & Max Save the World</h3>
<p>
Proton (Any modern version)<br />
Technology: TellTale Tool, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/s&mstw1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/s&mstw1.jpg"></a><br />
</p>
<h3 id="WARP">WARP</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Copy your Steam CD key<br />
- Go to the Origin website and log in to your account.<br />
- In the game library, select "Add A Game"<br />
- Paste your CD key and activate WARP.<br />
- Launch the game from Steam<br />
- Log in to your Origin account on the Origin launcher<br />
- Done!<br />
Notes:<br />
- Game does not scale to 16:10<br />
- Certain message prompts are not skippable with a controller<br />
- FPS is locked to 32 on PC. Refer to <a
href="https://steamcommunity.com/sharedfiles/filedetails/?id=2452533433">this thread</a> to see
about unlocking it<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/warp1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/warp1.jpg"></a><br />
</p>
<h3 id="HaloMCC">Halo: The Master Chief Collection</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Saber3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Installation:<br />
- Game requires every game downloaded separately.<br />
Notes:<br />
- Easy Anti-Cheat not available.<br />
- Game does not allow for simultaneous joystick and mouse movement<br />
- Game flickers a little bit on booting because of EAC splash screen<br />
Singleplayer:<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
Multiplayer:<br />
<img src="/assets/img/projects/linuxnotes/anticheat.png"><br />
<a href="/assets/img/projects/linuxnotes/halomcc1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/halomcc1.jpg"></a><br />
</p>
<h3 id="AmidEvil">AMID EVIL</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Direct3D 11 + Direct3D 12<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfectbr/>
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Not everything is available in the default controller configuration<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/amidevil1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/amidevil1.jpg"></a><br />
</p>
<h3 id="SNEK">Snake Pass</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal, Direct3D 11<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Uses Steam-specific controller glyphs but does not adapt them for other controllers<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/snek1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/snek1.jpg"></a><br />
</p>
<h3 id="ty">TY the Tasmanian Tiger</h3>
<p>
Proton (Any modern version)<br />
Technology: Merkury, OpenGL<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Doesn't scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/ty1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/ty1.jpg"></a><br />
</p>
<h3 id="tombraider">Tomb Raider (2013)</h3>
<p>
Proton (Any modern version) + Native<br />
Technology: Crystal, Direct3D (Linux uses OpenGL)<br />
Controller Support:<br />
- Xbox One: Perfect (Linux has doubling?)<br />
- DualShock 4: Perfect (Linux has doubling)<br />
- Nintendo Switch: Perfect (Linux has doubling)<br />
- Google Stadia: Perfect (Linux has doubling)<br />
Notes:<br />
- Cross-platform saves do not carry over, but can coexist.<br />
- Proton performs better than Native<br />
- Native has cutscene stuttering issues.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/tombraider1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tombraider1.jpg"></a><br />
</p>
<h3 id="littlenightmares">Little Nightmares</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine 4, Direct3D<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/lnightmare1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/lnightmare1.jpg"></a><br />
</p>
<h3 id="shaaaaaauuun">Heavy Rain</h3>
<p>
Proton (any modern version)<br />
Technology: Unknown, Direct3D, XACT<br />
Controller Support: Steam Input<br />
- YOU USED STEAM INPUT TO EMULATE AN XBOX CONTROLLER ARE YOU KIDDING ME<br />
Notes:<br />
- Right Stick doesn't work fully. Set the curve to aggressive and set the deadzone to use the full
range in Steam Input.<br />
- There is heavy stuttering when loading new camera angles due to shader compilation. DXVK_ASYNC=1
helps with this, but it introduces mesh pop-in that can get really annoying.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/heavyraind1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/heavyraind1.jpg"></a><br />
Screenshot note: This is of the DEMO. I tested the full release later on.<br />
</p>
<h3 id="rtcw">Return to Castle Wolfenstein</h3>
<p>
Luxtorpeda (iortcw)<br />
Technology: idTech 3, OpenGL<br />
Controller Support: None, use Steam Input<br />
Notes:<br />
- Performance issues for some reason.<br />
- ioRtCW allows for widescreen over using the Windows build<br />
Recommended Improvements:<br />
- You can set LUX_DISABLE_DEFAULT_CONFIRM=1 after selecting your default engine to skip the
confirmation dialog.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/rtcw1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rtcw1.jpg"></a><br />
</p>
<h3 id="darkforcesii">STAR WARS Jedi Knight: Dark Forces II</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: Sith<br />
Controller Support: None, use Steam Input<br />
Installation:<br />
- Install <a href="https://github.com/jdmclark/jkgfxmod/">JkGfxMod</a> to the installation directory
(<a href="https://github.com/jdmclark/jkgfxmod/blob/master/doc/install.md">Installation
Guide</a>)<br />
- Download this <a
href="https://community.pcgamingwiki.com/files/file/914-jedi-knight-df2-mots-music-wrapper/">WinMM
Music Wrapper</a><br />
- Extract libogg-0.dll, libvorbis-0.dll, libvorbisfiles-3.dll, and winmm.dll to the game directory,
overwriting the existing files<br />
- Add WINEDLLOVERRIDES="winmm=n,b" to your Steam launch options<br />
- Start the game and enable Hardware Acceleration<br />
Notes:<br />
- Game only redraws on every update. Will cause problems with standard Steam overlay<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/df2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/df2_1.jpg"></a><br />
Screenshot note: Game is rendered in WineD3D, i'm using Gamescope here. Also using
Proton-7.1-GE-2.<br />
</p>
<h3 id="alice">American McGee's Alice (2011 Re-Release)</h3>
<p>
Proton (Any modern version)<br />
Technology: idTech 3, OpenGL<br />
Controller Support: <br />
- All controllers had issues with ignoring Steam Input.<br />
Installation:<br />
- I located a 7z of this game<br />
- Extract the 7z to the folder of your choosing<br />
- Add bin/alice.exe to Steam and run it once.<br />
- Using ProtonTricks, locate the WinePrefix.<br />
- Copy bin/base/config.cfg to $PREFIX/drive_c/users/steamuser/Documents/My Games/American McGee's
Alice. This will give proper controller support.<br />
- Add the -RunningFromAlice2 flag to the game's launch options.<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/alice1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/alice1.jpg"></a><br />
Screenshot note: GloriousEggroll was used here.<br />
</p>
<h3 id="raze">Raze</h3>
<p>
Native<br />
Technology: Build Engine, OpenGL, Vulkan<br />
Controller Support: <br />
- Xbox One: Perfect<br />
- DualShock 4: Phantom Controller, fixed with SDL_JOYSTICK_HIDAPI=0<br />
- Nintendo Switch: Phantom Controller, fixed with SDL_JOYSTICK_HIDAPI=0<br />
- Google Stadia: Phantom Controller, fixed with SDL_JOYSTICK_HIDAPI=0<br />
Notes:<br />
- Configuration data is forced to /home/$USER/.config/Raze by default, forcing the home directory
with a script can help<br />
- This requires some external dependencies such as SDL2.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/raze.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/raze1.jpg"></a><br />
</p>
<h3 id="HumongousSCUMM">Humongous Entertainment SCUMM Games (Steam)</h3>
<p>
!!!OUTDATED!!!<br />
Native<br />
Technology: ScummVM, OpenGL<br />
Controller Support: None<br />
Notes:<br />
- None?<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/humongous1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/humongous1.jpg"></a><br />
Screenshot note: This applies to all of the SCUMM-based Humongous Entertainment games on
Steam.<br />
</p>
<h3 id="TEiN">The End is Nigh</h3>
<p>
Native<br />
Technology: Unknown, OpenGL<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/tein1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tein1.jpg"></a><br />
</p>
<h3 id="RPCS3">RPCS3</h3>
<p>
Native<br />
Technology: OpenGL, Vulkan, FAudio, Cubeb<br />
Controller Support:<br />
- Reads both real and virtual devices because evdev. Not a huge deal since they're not automatically
configured but still annoying. Everything works though.<br />
Notes:<br />
- Emulator does not have a means of configuration with a controller. At least having an option to
render the game to the main window would bump this up to a silver.<br />
Needed Improvements:<br />
- Optional SDL2 joystick backend<br />
- Controller-friendly UI<br />
<img src="/assets/img/projects/linuxnotes/bronze.png"><br />
<a href="/assets/img/projects/linuxnotes/rpcs3_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rpcs3_1.jpg"></a><br />
</p>
<h3 id="dolphin-emu">Dolphin Emulator</h3>
<p>
!!!OUTDATED!!!<br />
Native<br />
Technology: OpenGL, Vulkan<br />
Controller Support:<br />
- Like RPCS3, uses evdev for controller support.<br />
Notes:<br />
- Emulator has a means of rendering the game to the main Window which will make it possible to
configure in handheld mode.<br />
Needed Improvements:<br />
- SDL2 input emulation backend<br />
- Controller-friendly UI<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/dolphin_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dolphin_1.jpg"></a><br />
<a href="/assets/img/projects/linuxnotes/dolphin_21.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/dolphin_2.jpg"></a><br />
</p>
<h3 id="Kao1GOG">Kao the Kangaroo (GOG Re-Release)</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, DirectDraw(?)<br />
Controller Support: None<br />
- <a href="steam://controllerconfig/kao%20the%20kangaroo/2761260678">Controller
Configuration</a><br />
Installation:<br />
- Use Wine or Protontricks Launcher on the GOG installer to extract the game to whereever<br />
- Add kao.exe to Steam<br />
Notes:<br />
- No options to force resolution, always drew at maximum available. Use Gamescope to force the
resolution.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/kao1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/kao1.jpg"></a><br />
</p>
<h3 id="LEGOIsland">LEGO Island</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: Direct3D Retained Mode<br />
Controller Support: None<br />
- <a href="steam://controllerconfig/lego%20island/2762007356">Controller Configuration</a><br />
Installation:<br />
- Use SteamTinkerLaunch<br />
- Add a dummy executable to Steam and launch it once.<br />
- Mount ISO image to system<br />
- Use <a href="https://github.com/le717/Island-Alternate-Installer/releases">LEGO Island Alternate
Installer</a> using your Proton's Wine executable in the terminal<br />
- Perform a full install to wherever you want.<br />
- Copy dgVoodoo2's d3dlmm.dll and ddraw.dll to the game's directory<br />
- Copy <a href="https://github.com/itsmattkc/LEGOIslandRebuilder">LEGO Island Rebuilder</a> to the
game's directory (You may need to winetricks netcore20)<br />
- Reroute the Steam shortcut to the LEGO Island Rebuilder executable<br />
- Launch it and configure Rebuilder to your desires<br />
- Close it and go into the SteamTinkerLaunch game menu, and enable Gamescope, and force the -f flag
in the Gamescope options.<br />
- Add ddraw=n;d3drm=n to the Wine DLL Overrides in STL.<br />
- In the dgVooodoo2 configuration, force the DirectX resolution to 640x480, this fixes the pixel
transition performance.<br />
- Add the -r flag to the Steam launch options.<br />
- Done!<br />
Notes:<br />
- Rebuilder is necessary because of the game's crappy controls on modern hardware.<br />
TODO:<br />
- Is it normal for the mouse cursor clicks to be slightly vertically offset?<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/legoisland_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/legoisland_1.jpg"></a><br />
</p>
<h3 id="LEGORacers">LEGO Racers</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, DirectDraw<br />
Controller support: Unknown<br />
Notes:<br />
- Wouldn't boot.<br />
<img src="/assets/img/projects/linuxnotes/borked.png"><br />
</p>
<h3 id="Perspective">Perspective</h3>
<p>
Proton (Any modern version)<br />
Technology: Custom, Direct3D 11<br />
Controller Support: None<br />
- <a href="steam://controllerconfig/perspective/2762858114">Steam Input Controller Config</a><br />
Notes:<br />
- Game does not scale to 16:10<br />
- Game does not exit cleanly<br />
<img src="/assets/img/projects/linuxnotes/silverp.png"><br />
<a href="/assets/img/projects/linuxnotes/perspective1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/perspective1.jpg"></a><br />
</p>
<h3 id="PCSX2">PCSX2</h3>
<p>
Native<br />
Technology: OpenGL, Vulkan<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
- Nintendo Switch: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
- Google Stadia: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
Notes:<br />
- This emulator actually configures controllers automatically! :D<br />
- Disable the log window.<br />
- Configuration menus will not be available at all so make sure you get a one-size-fits-all setup in
place<br />
<img src="/assets/img/projects/linuxnotes/silverp.png"><br />
<a href="/assets/img/projects/linuxnotes/pcsx2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/pcsx2_1.jpg"></a><br />
</p>
<h3 id="QuakeII">Quake II</h3>
<p>
Native (Luxtorpeda, Yamagi Quake II)<br />
Technology: OpenGL, Quake II<br />
Controller Support:<br />
- Controller support is limited and SDL_JOYSTICK_HIDAPI=0 was necessary for controllers that needed
it.<br />
- Use Steam Input for the best possible experience.<br />
Notes:<br />
- No options for resolution scale.<br />
Recommended Improvements:<br />
- You can set LUX_DISABLE_DEFAULT_CONFIRM=1 after selecting your default engine to skip the
confirmation dialog.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/quake2_1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/quake2_1.jpg"></a><br />
Screenshot note: The resolution was lowered by forcing the Gamescope resolution. This might not be
possible in SteamOS.<br />
</p>
<h3 id="jazzjackrabbit">Jazz Jackrabbit Collection (GOG Re-release)</h3>
<p>
DOSBox<br />
Technology: Turbo Pascal, ProTracker Studio<br />
Controller Support:<br />
- <a href="steam://controllerconfig/jazz%20jackrabbit%20collection/2771145785">Steam Input
Controller Configuration</a><br />
- This controller config allows you to select between the CD-ROM release and Holiday Hare '95 using
LT and RT respectively.<br />
- Accepting things in the menus also requires pressing X instead of A.<br />
- You may also need to disable the Alt+Space shortcut in KDE.<br />
Notes:<br />
- Game will stutter at times because it runs at DOS' default of 70Hz.<br />
- You might want to configure your sound card settings first, you will probably need a keyboard. I
recommend attaching a Gravis UltraSound<br />
Recommended Improvements:<br />
- You can edit line 161 of support/gog_com.shlib to force the game to use an alternate DOSBox
release such as DOSBox-Staging.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/jazzjackrabbit1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jazzjackrabbit1.jpg"></a><br />
</p>
<h3 id="epicpinballcomplete">Epic Pinball: The Complete Collection (GOG Re-release)</h3>
<p>
DOSBox<br />
Technology: x86 Assembly, ProTracker Studio<br />
Controller Support:<br />
- <a href="steam://controllerconfig/epic%20pinball%20the%20complete%20collection/2776411984">Steam
Input Controller Configuration</a><br />
- This controller config allows you to play the game without a hitch.<br />
- You may wanna map the Right Stick or something to your initials, since the on-screen keyboard is
inoperable because the screen stops drawing, unless you are in SteamOS Game Mode.<br />
Notes:<br />
- You might want to configure your sound card settings first, you will probably need a keyboard. I
recommend attaching a Gravis UltraSound.<br />
Recommended Improvements:<br />
- You can edit line 161 of support/gog_com.shlib to force the game to use an alternate DOSBox
release such as DOSBox-Staging.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/epicpinballgog1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/epicpinballgog1.jpg"></a><br />
</p>
<h3 id="raymanforevergog">Rayman Forever (GOG Re-release)</h3>
<p>
DOSBox<br />
Technology: Custom<br />
Controller Support:<br />
- <a href="steam://controllerconfig/rayman%20forever/2776441357">Steam Input Controller
Configuration</a><br />
- Right Stick up for Rayman, Left for Rayman Designer, and Right for Rayman by his Fans.<br />
Installation:<br />
- You must have DOSBox installed locally.<br />
- Execute the GOG installer and extract it to wherever<br />
- Edit the file "dosboxRayman_single.conf" and remove all instances of "..\"<br />
- Replace the music in the directory with <a
href="https://www.mediafire.com/file/qxqatkzd9d04jc4/Rayman_GOG_Complete_Soundtrack.zip/file">this.</a><br />
- Your command should be "dosbox -conf dosboxRayman.conf -conf dosboxRayman_single.conf" and the
working directory should be the root of the GOG game installation.<br />
Notes:<br />
- Rayman Designer and Rayman by his Friends have weird framerate issues.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/raymanfrever1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/raymanforever1.jpg"></a><br />
</p>
<h3 id="SpaceQuestCollection">Space Quest Collection</h3>
<p>
!!!OUTDATED!!!<br />
Native (Luxtorpeda, ScummVM)<br />
Technology: Sierra's Creative Interpreter, Adventure Game Interpreter<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
- Nintendo Switch: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
- Google Stadia: Phantom without SDL_JOYSTICK_HIDAPI=0<br />
Notes:<br />
- Game collection defaults to WASD controls, manually set Gamepad configuration<br />
Recommended Improvements:<br />
- For Space Quest III-VI, you can use ScummVM's Roland MT-32 emulation mode for the best quality
sound possible. This requires "MT32_CONTROL.ROM" and "MT32_PCM.ROM"<br />
- These two ROM images will go in the game's respective directories, sqX, with X being a number
corresponding to a game in the series.<br />
<img src="/assets/img/projects/linuxnotes/goldp.png"><br />
<a href="/assets/img/projects/linuxnotes/spacequestcollection1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/spacequestcollection1.jpg"></a><br />
</p>
<h3 id="QuantumConundrum">Quantum Conundrum</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine 3, D3D9<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- Menus do not scale to 16:10 correctly, however gameplay does.<br />
- Input glyphs will swap between keyboard and controller if using the touchpad as a mouse.<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/quantumconundrum1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/quantumconundrum1.jpg"></a><br />
</p>
<h3 id="TombRaider1996">Tomb Raider I (1996)</h3>
<p>
Boxtron<br />
Technology: DOSBox-SVN, 3dfx<br />
Controller Support:<br />
- Use <a href="steam://controllerconfig/224960/868947533">this</a> controller config to emulate the
PSX layout<br />
Notes:<br />
- Set joystick=false in Boxtron's dosbox.conf<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/tombraider3dfx1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/tombraider3dfx1.jpg"></a><br />
</p>
<h3 id="OkamiHD">Okami HD</h3>
<p>
Proton (Any modern version)<br />
Technology: Unknown, Direct3D<br />
Controller Support: Steam Input<br />
Notes:<br />
- None!<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/okamihd1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/okamihd1.jpg"></a><br />
</p>
<h3 id="RaymanOrigins">Rayman Origins</h3>
<p>
!!!OUTDATED!!!<br />
Proton (Any modern version)<br />
Technology: UBIart, Direct3D 9<br />
Controller Support:<br />
- Xbox One: Perfect<br />
- DualShock 4: Perfect<br />
- Nintendo Switch: Perfect<br />
- Google Stadia: Perfect<br />
Notes:<br />
- No specific controller glyphs.<br />
- Graphical issues at the end of World 1 (and probably after). <a
href="https://github.com/doitsujin/dxvk/issues/2545">DXVK Issue Thread</a>.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/raymanorigins1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/raymanorigins1.jpg"></a><br />
</p>
<h3 id="Rayman2GOG">Rayman 2: The Great Escape (GOG Re-release)</h3>
<p>
Proton (Any modern version)<br />
Technology: OpenSpace, Direct3D 6, 3dfx Glide<br />
Controller Support:<br />
- Set your start button to Escape in Steam Input. Perfect otherwise.<br />
Installation:<br />
- Install the game.<br />
- Install <a href="https://github.com/spitfirex86/Ray2Fix">Ray2Fix</a>.</br>
- Get msvcp140_atomic_wait.dll and put it in the game directory<br />
- WINEDLLOVERRIDES="dinput=n,b;dsound=n,b"<br />
- Optional: Enable 3dfx splash in dgVoodoo, may need to enable Fullscreen in R2FixCfg<br />
Notes:<br />
- No specific controller glyphs.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/rayman2gog1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/rayman2gog1.jpg"></a><br />
</p>
<br />
<h3 id="QUBEDC">Q.U.B.E: Director's Cut</h3>
<p>
Proton (Any modern version)<br />
Technology: Unreal Engine<br />
Controller Support: Almost perfect<br />
Notes:<br />
- Native version has no sound.<br />
- You must set LT and RT to Left and Right Gloves for full support.<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/qubedc.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/qubedc.jpg"></a><br />
</p>
<h3 id="project06">Project '06</h3>
<p>
Proton-GE<br />
Technology: Unity, Media Foundation<br />
Controller Support: Perfect<br />
Notes:<br />
- Heavy use of Media Foundation, use Proton-GE<br />
- Missing audio in FMVs.<br />
<img src="/assets/img/projects/linuxnotes/silver.png"><br />
<a href="/assets/img/projects/linuxnotes/project06.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/project06.jpg"></a><br />
</p>
<h3 id="Jackbox">The Jackbox Party Pack</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox1.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox1.jpg"></a><br />
</p>
<h3 id="Jackbox2">The Jackbox Party Pack 2</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox2.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox2.jpg"></a><br />
</p>
<h3 id="Jackbox4">The Jackbox Party Pack 4</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox4.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox4.jpg"></a><br />
</p>
<h3 id="Jackbox5">The Jackbox Party Pack 5</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox5.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox5.jpg"></a><br />
</p>
<h3 id="Jackbox6">The Jackbox Party Pack 6</h3>
<p>
Proton (Any modern version)<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Proton because controller doubling<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/gold.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox6.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox6.jpg"></a><br />
</p>
<h3 id="Jackbox7">The Jackbox Party Pack 7</h3>
<p>
Native<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox7.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox7.jpg"></a><br />
</p>
<h3 id="Jackbox8">The Jackbox Party Pack 8</h3>
<p>
Native<br />
Technology: Autodesk Gameware, OpenGL<br />
Controller support: Perfect<br />
Notes:<br />
- Game does not scale to 16:10<br />
<img src="/assets/img/projects/linuxnotes/platinum.png"><br />
<a href="/assets/img/projects/linuxnotes/jackbox8.png"><img class="preview"
src="/assets/img/projects/linuxnotes/small/jackbox8.jpg"></a><br />
</p>
<br />
<h2 id="Technology">Technology Compatibility</h3>
<h3 id="XNA_FNA">XNA/FNA</h3>
<p>
- Examples: FEZ, Celeste, Duck Game, Dust: AET<br />
- Many XNA games will use FNA for ports<br />
- Many XNA games have issues with the Steam Overlay. This is fixable with gamescope.<br />
- FNA games have issues with screen tearing, thanks Xorg.<br />
</p>
<h3 id="MF">Windows Media Foundation</h3>
<p>
- Examples: Night Trap, Persona 5 Strikers, Nioh 1+2, Monster Hunter World<br />
- There are a handful of games that use Media Foundation for FMVs and they don't work in Wine by
default.<br />
- To work around it, you can use Proton-GE, but it's not perfect.<br />
- Otherwise, more often then not, games will just display a test pattern.<br />
- You used to be able to rip the DLLs from Windows and that would work fine, but that seems to
have been broken.<br />
</p>
<h3 id="DDraw">DirectDraw</h3>
<p>
- Examples: Yume Nikki, Luna Game, Jazz Jackrabbit 2<br />
- Outdated DirectX graphics API that renders in WineD3D. Will cause problems with Steam
Overlay.<br />
- Also has trouble scaling correctly in Wine 7.0 and above, dgVoodoo D3D8 and DDraw fix
that.<br />
- The workaround is to force dgVoodoo2 or use Gamescope.<br />
</p>
<h3 id="dgVoodoo2">dgVoodoo2</h3>
<p>
- Closed source.<br />
</p>
<h3 id="DualShock4">DualShock 4</h3>
<p>
- Has extra "phantom controller" issues.<br />
- Known affected games: Ion Fury, Portal, Portal 2, Half-Life 2, LIMBO, Another World:
25AE<br />
</p>
<h3 id="NSPC">Nintendo Switch Pro Controller</h3>
<p>
- Unusable in many native titles when using kernels below 5.16. SteamOS uses kernel 5.13 as of
now.<br />
- Affected by the SDL_JOYSTICK_HIDAPI problem, and will crash XInput games in versions of Proton
before 7.0.<br />
</p>
<h3 id="GameMaker8">GameMaker 8</h3>
<p>
- Relies on DirectSound and DirectMusic.<br />
- A lot of methods in DSound and DMusic are stubbed, leading to missing audio. The big stub is
IDirectMusicPerformance8Impl_PlaySegmentEx in dmime.dll.<br />
- Music often times works, but sound effects are completely missing.<br />
- Using Winetricks for dmime allows for sound effects to function, but then music gets
interrupted.<br />
- Using Winetricks for the entirety of DSound and DMusic will lead to audio latency of ~0.3
seconds.<br />
- Also bad performance in a handful of games, despite them being simple 2D games. Fixed with
dgVoodoo D3D8.<br />
</p>
<h3 id="UE98">Unreal Engine (1998)</h3>
<p>
- Proton Experimental has problems with <a
href="/assets/img/projects/linuxnotes/unreal_bad_colors.png">bad colors</a> unless you use
dgVoodoo2.<br />
- Proton-GE fixes these problems.<br />
- I would recommend using dgVoodoo2 for the fixed overlay on the desktop<br />
</p>
<br />
<h2 id="Random">Random Thoughts</h2>
- How can we prevent games running in Steam from reading controllers other than the Steam Virtual
Gamepad? (This is a MASSIVE conern of mine)<br />
- BtrFS compression?<br />
<br />
<h2 id="Controllers">Me Yelling About Controller Jank</h2>
- The controller experience is... less than great out of the box.<br />
- My goal is to have Steam Input enabled for <i>every</i> game because the configuration it provides
is nothing short of stellar.<br />
<br />
Issues:<br />
- Games ignoring Steam Input<br />
- Games reading multiple controllers when one controller is plugged in (Phantom Controllers)<br />
<br />
<b>Solution</b>:<br />
- SDL_JOYSTICK_HIDAPI=0<br />
- Running <a href="/files/SteamControllerFix.sh">this script I wrote</a> in the background while
Steam is open.<br />
- I've done some testing and it has fixed the issues in every single game as far as I've seen.<br />
- This unfortunately causes Rumble to stop working entirely with Xbox controllers.<br />
- This script is not a clean solution, unfortunately.<br />
- The more elegant solution would be to implement Xbox and Stadia controllers using HID and then set
up udev rules to chmod 000 the joydev and evdev device files.<br />
- This has a much higher likelihood of allowing for hotplugging support while a game is
running.<br />
<br />
Concerns:<br />
- Hopefully SteamOS gets implements a fix like this into SteamOS 3.0 for Steam Deck<br />
- Other OSes following suit?<br />
<h2 id="Glossary">Glossary</h2>
<p>
Gamescope: An XWayland window compositor by Plagman that will force windows into
fullscreen<br />
Steam Input: Valve's powerful controller configuration software<br />
ToGL: Valve's Direct3D->OpenGL abstraction layer used in their earlier Linux ports.<br />
DXVK-Native: A version of DXVK designed for usage outside of Wine.<br />
dgVoodoo2: A reimplementation of 3dfx Glide and Direct3D versions
< 9 in Direct3D 11<br />
Steam Linux Runtime: A debian container as part of Steam Play that games can be run inside in
attempt to fix any issues.<br />
Proton: A Steam Play compatibility tool that utilizes a heavily modified fork of Wine in
conjunction with a few other components such as DXVK to assist games on Linux<br />
DXVK: A DirectX compatibility layer designed for Wine that will translate Direct3D 9, 10 and 11
to Vulkan.<br />
WineD3D: Wine's built-in OpenGL implementation of DirectDraw and Direct3D 1-11.<br />
WinePrefix: A contained environment used by Wine that mimics a generic Windows
installation.<br />
</p>
<br />
<h2 id="WIP">Work-In-Progress</h2>
Games to test:<br />
- Grand Theft Auto III<br />
- Grand Theft Auto: Vice City<br />
- The Basement Collection<br />
- The Neverhood<br />
- Commander Keen Complete Pack<br />
- Streets of Rage 4<br />
- SpeedRunners<br />
- Quake III Arena<br />
- NiGHTS Into Dreams...<br />
- Myst: Masterpiece Edition<br />
- Angry Video Game Nerd Adventures<br />
- SuperTuxKart<br />
- 3D Pinball for Windows: Space Cadet<br />
- The Powder Toy<br />
- Giana's Return<br />
- Xonotic<br />
- Minetest<br />
- System Shock: Definitive Edition<br />
- System Shock 2<br />

<?php

echo constructPageFooter();

?>

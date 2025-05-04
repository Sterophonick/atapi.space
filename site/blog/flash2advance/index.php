<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: Flash2Advance-ing your Game Boy Advance");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Flash2Advance-ing your Game Boy Advance</h1>
<p style="margin-top: -25px;">No, dad, I'm not pirating Nintendo games, I swear on my life.<br/></p><br/>
<p>
May ??, 2025<br/>
Category: Infodump<br/>
</p>
<br />
<h2>Introduction</h2>
<p>
    The year is 2003. If you were playing handheld video games at this time, you undoubtedly owned a Nintendo Game Boy Advance. You're very happy with your choice of handheld, not that there was much at the time, playing games like Mario &amp; Luigi, Fire Emblem, Pokémon, and Sonic Advance, however you longed to be able to do more with it, whether it be watching F.R.I.E.N.D.S. or listening to your Linkin Park CDs. The iPod was out at the time, but a new unit would run you a <i>spicy</i> $299 USD ($521.65 in 2025!), and your prayers of watching cartoons or movies would not be answered until 2004 with Game Boy Advance Video. You also happen to be a computer toucher who loves getting the most out of your devices at the cost of convenience. What's one to do in this predicament?<br/><br/>

    You go onto Google, you look up "how 2 listen 2 music on my gameboy", find your way onto niche gaming forums like GBAtemp and PocketHeaven, and discover the wonderful world of Flashcarts.<br/><br/>

    <video width="160px" height="90px" autoplay muted loop>
    <source src="/assets/vid/easybuy2000.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>

    At the time, these cartridges were much more limited than what we have now, usually requiring a fancy schmancy linker that often connected to your PC over a parallel connection. Later flash linkers would connect over USB but these too were eventually dropped in favor of CompactFlash, and later on, SD cards. Early cartridges were usually single-game, only able to hold 64 Mbits or so and had no ROM page swapping hardware, but they very quickly grew in storage capacity and started including custom CPLDs as a memory controller to allow the user to select which game they wanted to play on startup.<br/><br/>

    <img src="/assets/img/blog/flash2advance/f2a-load.png"><br/>
</p>

<br/>

<h2>My Collection</h2>
<img width="720px" height="480px" src="/assets/img/blog/flash2advance/temp.jpg"><br/><br/>
<p>
    I cannot be trusted with money.<br/><br/>

    My collection of legacy Game Boy Advance flashing hardware is decently extensive. Over the last year or so I've sniped a handful of eBay auctions and have acquired these pieces of history</br><br/>
</p>

<br/>

<h2>GBA Movie Player</h2>
<img width="720px" src="/assets/img/blog/flash2advance/gbamp1.jpg"><br/><br/>
<p>
    This cartridge was released in, I wanna say around late 2003? Exact information on it like that is really scarce.<br/><br/>

    The version that I have is the V1 CompactFlash variant, however there were later variants that released that made it smaller and accept SD cards rather than CompactFlash.<br/><br/>

    A quick disassembly of it reveals... not a whole lot honestly.<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/gbamp2.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/gbamp3.jpg"><br/><br/>

    In fact, the actual ASIC and flash memory appear to be hidden underneath the GBA cartridge slot, with all of the markings scratched or dissolved off.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp4.jpg"><br/><br/>

    You might be wondering, "what the hell is the point of that extra cartridge slot?" Well, if you look on the side of it, there's a switch that toggles between "GAME" and "MOVIE" mode.
    <img src="/assets/img/blog/flash2advance/gbamp5.jpg"><br/><br/>

    This is a switch that allows the player to do cartridge passthrough mode or do Movie Player mode. However, there's one major catch. You have to have a real cartridge attached at all times, even for Movie Player mode. If you don't, the boot ROM isn't able to validate the Nintendo logo character data.<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/gbamp6.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/gbamp7.jpg"><br/>
    <small>Left: Without a cartridge; Right: With a cartridge</small><br/><br/>

    Why they required the user piggyback another cartridge to passthrough the ROM header, I don't really know. Maybe it was for fear of getting sued since the logo data was protected by copyright or some kind of patent? Can't really say.<br/><br/>

    Anyway, loading up a CompactFlash card and a game into the Move Player, we are presented first with a disclaimer:<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_gba0.jpg"><br/><br/>

    To which it kicks us into this brightly-colored interface where we can select videos, music, photos, NES games, eBooks, or setup.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_gba1.jpg"><br/><br/>

    Selecting any of the first five options will lead us to a rudimentary file browser where we can select the file that we want to play.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_gba3.jpg"><br/><br/>

    The movie player, which exposes only <code>.GBM</code> files, is actually half decent. It offers a basic set of seat controls, skip ahead, rewind, pause, and there's an option to even show the current time. It's not as nice as what would be available as part of Game Boy Advance Video but it's definitely leagues more serviceable than Meteo, which we'll touch on in a bit.<br/>
    <video class="interruptVideo" width="720" height="480" controls>
    <source src="/assets/vid/gbamp_invzim.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>

    The music player is equally as barebones, but it's got pretty much what you'd want out of a basic media player. It accepts files in <code>.GBS</code> format and an interface with basic information.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_gba4.jpg"><br/><br/>

    The option to play NES games requires a little bit of setup. You're supposed to acquire a multiboot version of PocketNES, name it <code>pocketnes.gba</code>, and place it at the root of the SD card. From there, you're able to launch any NES title that's under 256K in size. It's operating from the 256K of EWRAM that the GBA has, so we're somewhat crunched for file sizes here. You're not gonna be playing Super Mario Bros. 3 on this anytime soon. Savegames and save states are also never gonna be fully operational with this, so it's mostly suited towards "Go-for-the-highscore" type games, taking all of this into account.
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_pnes.jpg"><br/><br/>

    The image viewer is, like everything else, barebones. You click on a <code>.BMP</code> file and it just appears on your screen. If your image is 240x160 or smaller, then all you can do is look at it and close the image, but if it's larger, then you get the option to scroll the image around the screen. Depending on the color-depth of the image, it can be reaaaaally slow.<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/gbamp_img1.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/gbamp_img2.jpg"><br/><br/>

    TODO: conversion software under windows XP, showcase video, music, ebook, and pocketnes. make comparisons to other portable video solutions, point out the price.
</p>

<br/><br/>

<p>
    basic outline:
    - showing off my collection
    - teardowns of cartridges
    - PogoShell (& Plugins)
    - Meteo
    - GBA Movie Player
    - Pirating games
    - EZ-Writer
    - Diehard buttons

</p>

<h3>Greetz</h3>
<p>Lesserkuma for FlashGBX and supporting Flash2Advance/FlashAdvance cards with it.</p>
<p>Jae (j4) for being a courier for the EZ-Writer.</p>
<p>EZ-Flash for sticking around and making cartridges.</p>
<p>Archaemic for EZF Advance protocol documentation.</p>
<p>Dwedit, FluBBa, and Loopy for PocketNES and the related emulators.</p>
<p>Sasq for PogoShell.</p>
<p>Kuwanger (RIP) for PogoShell mods and EZ-Flash Omega work.</p>
<p>Inside-Cap for Meteo.</p>

<?php

echo constructPageFooter();

?>

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
    It is the early 2000s. If you were playing handheld video games at this time, you undoubtedly owned a Nintendo Game Boy Advance. You're very happy with your choice of handheld, not that there was much at the time, playing games like Mario &amp; Luigi, Fire Emblem, Pokémon, and Sonic Advance, however you longed to be able to do more with it, whether it be watching F.R.I.E.N.D.S. or listening to your Linkin Park CDs. The iPod was out at the time, but a new unit would run you a <i>spicy</i> $299 USD ($521.65 in 2025!) Additionally, your prayers of watching cartoons or movies would not be answered until 2004 with Game Boy Advance Video. You also happen to be a computer toucher who loves getting the most out of your devices at the cost of convenience. What's one to do in this predicament?<br/><br/>

    You go onto Google, you look up "how 2 listen 2 music on my gameboy", find your way onto niche gaming forums like GBAtemp and PocketHeaven, and discover the wonderful world of Flashcarts and other such hardware.<br/><br/>

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
    (These two images are of differently scaled files.)<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/gbamp_img1.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/gbamp_img2.jpg"><br/><br/>

    The book reader is probably the most barebones of all the other forms of media that this cartridge supports. It only takes <code>.txt</code> files and that's it, it's just a text reader.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_book1.jpg"><br/><br/>

    Although, the inclusion of font options is a nice accessibility courtesy.<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/gbamp_book2.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/gbamp_book3.jpg"><br/><br/>

    So that's pretty much what you got for your purchase of a GBA Movie Player in 2004 or so, which, if <a href="http://www.eagb.net/advance/hr45.html">this article on eagb.net</a> is to be believed, cost around $35 USD in 2003 (~$61 in 2025). I'd make the argument that it was a fair deal compared to the competition at the time with products such as the iPod. The more expensive part was getting a supply of CompactFlash cards to actually store your media on. Around that time, a single 128MB CF card would run you about $35, so not particularly cheap, but you could still fit roughly sixty minutes of video on a single card. To wit, the CF card I'm using here is 2 GB and cost me around $15 in 2025.<br/><br/>

    Compare this to a product like the Hasbro VideoNow!, which cost around $75 in 2003 (~$130 in 2025), with media costing $8.99 for single PVDs or $16.99 for three-packs. The downside, of course, was that the media was already burned and couldn't be re-written, and the resolution was 16 shades of grey at 80x80 with rectangular pixels. Not to mention, it was easy for the media on the VideoNow! to start skipping around in the event that the unit was bumped during a car ride or something. So, in my eyes, the GBA Movie Player still wins, at least as of this point in time.<br/><br/>

    But the hardware itself is one thing, there's also the Windows software needed in order to convert your media to formats usable with the cartridge. The initially shipped with two tools: a music converter and a video converter. An image converter and DVD converter were added much later down the line.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_1.png"><br/><br/>

    The video conversion software actually has a bit more depth to it than the actual player. Earlier versions of the software only had support for the GBA and SP, but Nintendo DS and Game Boy Micro support was added later down the line, those settings primarily altered color calibration. You select your device and one of three compression settings, and pretty much be on your merry way.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_2.png"><br/><br/>

    If you checked the <code>Manual setting</code> box, you'd get access to much more fine control over how your video was compressed, with resolution, color calibration, and audio compression settings being available.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_4.png"> <img src="/assets/img/blog/flash2advance/winxp_5.png"> <img src="/assets/img/blog/flash2advance/winxp_6.png"> <img src="/assets/img/blog/flash2advance/winxp_7.png"><br/><br/>

    The software supported many formats, including RealMedia, Windows Media Player, AVI, QuickTime, VOB, and MPG. The format I had the most luck with was WMV, which I use this <code>ffmpeg</code> command to convert videos for use with the software:<br/>
    <code>ffmpeg -i [input] -c:v wmv2 -b:v 1024k -c:a wmav2 -b:a 192k -ac 2 [output].wmv</code><br/><br/>

    From here the videos work fine with our tools and we can convert our videos as we please. While converting an ActiveMovie window shows up with the in-progress conversion of our movie.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_3.png"><br/><br/>

    Conversion of this single episode of Invader ZIM took about 24 minutes, which is basically as long as the episode itself was. I'm sure this was an absolute "best-case" scenario, on period-accurate machines encoding video like this would have been much, much more of a chore.<br/><br/>

    When you're done, you are left with two files, a <code>.GBM</code> file and a <code>.GBS</code> file. The former contains the video data and the latter contains the audio data. Copy these to your CF card (in the same directory) and you're free to watch your movie. What's especially good about this media solution is the relative lack of a storage limit. If we were converting this into a ROM image we would be SUPER crunched for space, but the file in the above conversion come out to 80 MB total.<br/><br/>

    My other film test was <i>Five Nights at Freddy's (2023)</i>, and it especially demonstrates how video codecs like this are not well suited for live-action film. You can get by, but David Lynch would probably claw his eyes out at the sight of such a film-viewing experience. Whole movies are way way more expensive, with this encode of 110 minutes coming at around 200 MB total.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/gbamp_matpat.jpg"><br/><br/>

    The music converter is, by its very nature, much more rudimentary, sharing the same compression options as the audio settings in the movie converter. The audio converter support RIFF Wave, MP3, MP2, and Windows Media Audio.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_8.png"><br/><br/>

    This tool outputs into just a singular <code>.GBS</code> format file. The quality is pretty much about as good as you can get, with <code>8:1 Stereo</code> being the best compression option. Here's a quick comparison between the different audio compression levels.<br/>
    </p>

    <table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
    style="text-align: center;">
    <col width="160px" />
    <tr>
    <td width="160px">
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/8.mp3");?><br/>
    <code>8:1 Stereo</code><br/>
    </td>
    <td width="160px">
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/16.mp3");?><br/>
    <code>16:1 Mono</code><br/>
    </td>
    </tr>
    <tr>
    <td width="160px">
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/32.mp3");?><br/>
    <code>32:1 Mono</code><br/>
    </td>
    <td width="160px">
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/64.mp3");?><br/>
    <code>64:1 Mono</code><br/>
    </td>
    </tr>
    </table><br/>
    <small>Jared Emerson-Johnson - Moonscape (Sam & Max Save the World)</small><br/><br/>
<p>
    Both the music and movie converters do not have the capability to mix stereo down to mono, you could only select the left channel or the right channel, meaning the user would have to perform this operation themselves using another piece of software such as Audacity. Another thing that I've observed is that the volume controls default to <code>1</code>, but when I set it to <code>100</code> the audio became unbelievably blown out. It seems the volume settings are merely just a gain factor and not absolute.<br/>
    <span style="color: red">(Audio decreased in volume by -10dB!)</span><br/>
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/blown_out.mp3");?><br/>
    <small>Linkin Park - Don't Stay (Meteora)</small><br/><br/>

    Another observation that I've made is that ambient music doesn't seem to do so well, there's a lot of higher-frequency aliasing that give it a signature "scratchy" sound. It's absolutely listenable, just at it could get a little distracting. Some might be into it. I kinda like it.<br/>
    <?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/ortega.mp3");?><br/>
    <small>Avith Ortega - Underground Dusk (Metastasis)</small><br/><br/>

    It's definitely visible when viewing the capture in a spectrogram, everything in the highlighted section helps make this effect.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/spectrogram.png"><br/><br/>

    The image converter is probably the least impressive of all of the tools, resizing your selected images and converting them into Windows Bitmaps with specified color settings. There isn't a whole lot to see really.<br/>
    <img src="/assets/img/blog/flash2advance/winxp_9.png"><br/><br/>

    So that's what $35 USD plus the cost of CompactFlash cards in 2004 got you for your Game Boy. A rudimentary media player that you had pretty much full access to. It was by no means a perfect device, but I'm sure the LimeWire users and television pirates of that era certainly weren't complaining. You could do way, way worse. The later release of the Juice Box in 2005 didn't really do much that this cartridge could already do, and I'd argue that the video quality was worse than the official Game Boy Advance Video paks, despite having a beefier SoC. Of course, it wouldn't be too too long before the release of the multimedia giant that was the PlayStation Portable in 2005 (US), pretty much rendering all other portable media solutions obsolete until smartphones came around.<br/><br/>

    So, the GBA Movie Player was good and all, but what if you could never financially recover from the ~$135 cost of a single Flash2Advance card? What if you wanted to put like one or two videos tops on a single cartridge with no option to expand the storage without buying another card? It's time to talk about the other video code that's not as elegant but it's certainly operational.
</p>

<br/>

<h2>Meteo AVI-2-GBA</h2>
<p>
I have a long history with this one.<br/><br/>
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

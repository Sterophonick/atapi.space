<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Flash2Advance-ing your Game Boy Advance");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Flash2Advance-ing your Game Boy Advance</h1>
<p style="margin-top: -25px;">No, dad, I'm not pirating Nintendo games, I swear on my life.<br/></p><br/>
<p>
Sep 9, 2025<br/>
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
<img width="720px" src="/assets/img/blog/flash2advance/collection_all.jpg"><br/><br/>
<p>
    I cannot be trusted with money.<br/><br/>

    My collection of legacy Game Boy Advance flashing hardware is decently extensive. Over the last year or so I've sniped a handful of eBay auctions and have acquired these pieces of history, mostly for my Marge Simpson-esque fascination with them, but in a couple of cases it's for the possibility of <i>maybe</i> reverse engineering the cartridges' protocols for use with FlashGBX or other modern cartridge readers.</br>
    <img src="/assets/img/blog/flash2advance/marge.png"><br/><br/>

    Random tidbit: as far as I can tell, FlashAdvance and Flash2Advance are the same exact family. This could, of course, be wrong, but if FlashGBX' config files are to be believed, then the protocols for the CPLDs on the cartridges are pretty much identical between each other.<br/><br/>

    Anyway, I photographed all my legacy cartridges and hardware, and will make some notes that some would find interesting.<br/>
</p>

<br/>

<h3>128Mb EZ-Flash I (x2)</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_bothez1.jpg"><br/><br/>
<p>
Two of them.<br/><br/>

Both of these units have a few interesting differences from each other. The left unit is a later revision, marked "EZ A10" from <code>2004-03</code>. The unit on the left is also apparently broken, I can't seem to get anything to boot off of it, the flash obviously has gone bad. The left unit has flash chips that are marked with <code>E28F32 / BVP-10 / 12D43</code>, and the right unit has ones marked <code>E28F640 J3A120</code>, which looking those up reveals they're from Intel's <i>StrataFlash</i> line of flash memory. Both units share the same static RAM chip, an EliteMT
LP62S2048X-70LLT 256K CMOS SRAM. It's possible that the "BVP-10" chips are cheaper clones of the Intel StrataFlash chips, which seems to have done super super well for longevity. /sarcasm<br/><br/>

<img width="720px" src="/assets/img/blog/flash2advance/collection_bothez1_pcbf.jpg"><br/>
<img width="720px" src="/assets/img/blog/flash2advance/collection_bothez1_pcbb.jpg"><br/>
</p>
<br/>

<h3>Unknown 256Mb Flashcart (Magic Card? / FireCard?)</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_firecard.jpg"><br/><br/>
<p>
I don't know what this unit's deal is. The eBay listing that I sniped it from labelled it as a "SuperCard," which is not remotely true. It also advertises a capacity of 256Mb, which might be true, but FlashGBX only detects 64Mb. On top of all that, that "USB" label on the front is a complete lie, the cable that I received with this cartridge is actually a parallel port cable.<br/>
<img width="720px" src="/assets/img/blog/flash2advance/collection_firecard_cable.jpg"><br/><br/>

Anyway, on the inside of this has a flash chip labeled <code>M6MGJ927</code> and the same CMOS SRAM from the EZ-Flash I, which is probably why EZ-Client picks it up as one of those units.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_firecard_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_firecard_pcbb.jpg"><br/><br/>
</p>

<h3>SuperCard microSD</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_supercard.jpg"><br/><br/>
<p>
This unit is a cheap clone of previous SuperCard SD units that I picked up on AliExpress for $10 USD. It operates on the same protocol as those units, though, and so the maximum microSD card size that we get is 2GB. There isn't really much of note here about this cartridge, other than the fact that it sucks. I have hardly gotten any games to boot on it, and the ones that do express annoying incompatibilities such as flickering graphics or crashes. The software has to screw with cartridge waitstate timings on your ROM files which is probably destructive for many games.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_supercard_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_supercard_pcbb.jpg"><br/><br/>
</p>

<h3>EZF-Advance Realtime 256M</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_ezf.jpg"><br/><br/>
<p>
I don't have the serial cable that was used for this one, but there exists a Nintendo DS program for writing to it, so maybe it can be ported to FlashGBX. An interesting oddity about this one is how the SRAM is located under the battery instead of the CPLD, unlike every other cartridge I own. The CPLD also has the markings removed from it, can't really tell if it was done mechanically or chemically. The two flash chips are marked with <code>29PL12LM-10PCN</code>, which I couldn't really find concrete information on.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_ezf_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_ezf_pcbb.jpg"><br/><br/>
</p>

<h3>FlashAdvance Pro 256M</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_fap256m.jpg"><br/><br/>
<p>
There isn't really much to write home about with for this cartridge, but it's worth noting that FlashGBX reads this, reporting its two <code>28F128J3A150</code> flash memories. It's good to have PCB photographs anyway.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_fap256m_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_fap256m_pcbb.jpg"><br/><br/>
</p>

<h3>Flash2Advance 256M</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_f2a256m.jpg"><br/><br/>
<p>
Interesting amount of flash chips, coming it at 8x <code>3204C3B100</code> flash memories.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_f2a256m_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_f2a256m_pcbb.jpg"><br/><br/>
</p>

<h3>Flash2Advance Ultra 512M</h3>
<img width="720px" src="/assets/img/blog/flash2advance/collection_f2a512m.jpg"><br/><br/>
<p>
This time coming with four <code>28F128J3A15</code> memories instead of two, we also get these couple of extra buttons on the top of the cartridge. These were the called "Die Hard" buttons which supposedly allowed for loading save states, and the F2A team had even released patches for games like Super Mario Advance that took advantage of this feature, but I've never actually been able to get it to work. Maybe my cartridge is busted, or it needs the WinF2A loader, which I can't use without the official linker. We can write to this cartridge using FlashGBX if we select the option for the 256M Flash2Advance cartridge that uses the same flash chips, but forcing the ROM size to have a maximum of 64MiB.<br/><br/>

<img width="360px" src="/assets/img/blog/flash2advance/collection_f2a512m_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/collection_f2a512m_pcbb.jpg"><br/><br/>
</p>

<h2>FlashAdvance Parallel Linker</h2>
<p>
This one was an absolute nightmare to get working due to it operating on the Parallel port interface. It was certainly a process that involved a ThinkPad T30 graphics chipset dying, and the manual refurbishing of a Dell Latitude with a Pentium III.<br/><br/>

Anyway, this unit that I have is one of the earliest Flash Linkers. The unit ships with its own <i>DC power supply</i> with a voltage switch that ranges from 1.5 to 12 volts, but using AA batteries was also an option for providing power to it, especially since Parallel is hardly capable of providing much power. This pretty much creates a situation where the linker looks like it's on life support whenever you have to use the damn thing.<br/><br/>

My setup for using this linker used the aforementioned Dell Latitude CPx model PPX, a machine that came with a license for Windows 98 Second Edition. I don't particularly enjoy using Dell units but it's the machine that I had on hand, and I was able to secure a replacement CD-ROM drive for it that allowed me to transfer files without having to resort to a weird and awful IDE/USB adapter setup.<br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_1.jpg"><br/><br/>

Cracking open the actual linker itself doesn't really answer many questions. All we're really able to see is the microcontroller, the cartridge port, the parallel port, an LED and the voltage regulation circuitry. Doubly annoying that the markings on the controller have been scratched off, which is not uncommon in this kind of field.<br/>
<img width="360px" src="/assets/img/blog/flash2advance/win98_2.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/win98_3.jpg"><br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_4.jpg"><br/><br/>

The software needed to get this specific working is known as XtremeLink, and on Windows NT-based operating systems would have required the DLPortIO driver by DriverLINX, but this was something I was never able to get working under Windows XP before my ThinkPad T30 bit the dust. Luckily though, Windows 98 being a DOS-based operating system means that we get more low-level access to this kind of thing.<br/><br/>

Anyway, booting up the software with the linker attached and powered up, first gave me this message about my parallel port being potentially misconfigured.<br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_5.jpg"><br/><br/>

Checking in the BIOS settings, I double checked what it was set to, and it's set to... ECP? This was the default option but we also have setings for AT compatibility and Bidirectional for PS/2 compatibility, so I'm not really sure what would be EPP or SPP settings are on this motherboard. Ok then....?<br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_6.jpg"><br/><br/>

Anyway, as it turns out, I don't currently own any cartridges that can interface with this linker, although it's entirely possible that it's just straight up dying. Every other cartridge that I load into it doesn't have its header read correctly, which tells me that the linker either can't read the cartridges properly, or it can't communicate with the PC properly.<br/>
<img width="360px" src="/assets/img/blog/flash2advance/win98_7.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/win98_8.jpg"><br/><br/>

On its own though, you had the ability to load multiple ROMs as part of a single Visoly ROM loader that would be then written to your compatible flash cart.<br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_9.jpg"><br/><br/>

There were also some tools for manipulating save files. Unlike later cartridges, it had up to four different slots, with slots 1-3 being reserved for games 1-3, and slot 4 being for everything else. That's pretty restrictive, but then again, cartridges in this time would have been so tight on flash space that you would hardly ever be fitting anything more than a couple of games on them.<br/>
<img width="720px" src="/assets/img/blog/flash2advance/win98_10.jpg"><br/><br/>

I wish I could go into much more detail, but the fact that this linker appears to be dying means I can only do a very limited set of things with it. If you're out looking for a linker like this, then I would suggest just going with a GBxCart RW and using FlashGBX with it, that supports all Flash2Advance and FlashAdvance cartridges so that we never have to touch fusterclucks like this again.<br/><br/>

The wonders of how literally anything got done before the days of USB.<br/><br/>
</p>

<br/>

<h2>EZ-Flash II PowerStar</h2>
<p>
    The most expensive item in my collection, purchased primarily because EZ-Flash themselves have lost the source code and verilog (I asked them directly) to everything before the EZ-Flash III. I own two (LATER UPDATE) EZ-Flash I 128mbit cartridges, which can only be written by this specific linker, the EZ-Writer. Thankfully, though, this linker operates over USB, which I <i>can passthrough</i> to Virtual Machines, saving me a headache and a half.<br/><br/>

    <img width="720px" src="/assets/img/blog/flash2advance/ez2_box.jpg"><br/>
    <img width="360px" src="/assets/img/blog/flash2advance/ez2_top.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/ez2_back.jpg"><br/>
    <img width="360px" src="/assets/img/blog/flash2advance/ez2_pcbf.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/ez2_pcbb.jpg"><br/><br/>

    The EZ-Flash II is powered by a Cypress AN2131QC EZ-USB microcontroller, which is a microcontroller with an integrated Intel 8051 CPU and 8kB of SRAM, but no internal flash memory. The firmware of the linker is downloaded on every single connect, at least if we assume that the drivers are actually present for us to install. If we hook it up to a Linux machine and check <code>lsusb</code> the linker appears as:<br/>
    <code>ID 0547:2131 Anchor Chips, Inc. AN2131 EZUSB Microcontroller</code><br/><br/>

    Of course, we have specific drivers that we need to install for this microcontroller.<br/>
    <img src="/assets/img/blog/flash2advance/ez_xp_2.png"><br/><br/>

    In Windows, with the drivers installed, that appears as "EZ-Writer Initialization".<br/>
    <img width="438px" class="pixelArt" src="/assets/img/blog/flash2advance/ez_xp_1.png"><br/><br/>

    At this very moment the microcontroller is here listening for a <a href="/files/tusbez.bin">firmware file</a>. On each boot, the driver must upload the firmware image to the microcontroller, to which it then reports in Linux as:
    <code>0548:1005 Tyan Computer Corp. EZ Cart II GameBoy Flash Programmer</code><br/><br/>

    This is what that device looks like in Windows.</br>
    <img width="394px" class="pixelArt" src="/assets/img/blog/flash2advance/ez_xp_3.png"><br/><br/>

    The linker has a fancy status LED that shows two different colors. If it's ready for use with a proper firmware file, then it turns green, otherwise it is red.<br/>
    <img width="360px" src="/assets/img/blog/flash2advance/ez2_red.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/ez2_green.jpg"><br/><br/>

    This linker works with their very own fancy "EZ-Client" software, which has support for both EZ-Flash I and EZ-Flash II cartridges, with EZ-Flash II cartridges being up to 1 Gigabit in size, or 125 MB. <br/>
    <img src="/assets/img/blog/flash2advance/ez2_client1.png"><br/><br/>

    Interestingly enough, having the client software open causes the LED on the linker to start doing this "heartbeat" type of flickering. It only does this when there is no cartridge inserted, though.<br/>
    <video width="640" height="360" controls>
    <source src="/assets/vid/ez2_heartbeat.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>

    Anyway, attach a cartridge into the linker, and the software will automatically update to show the contents and type of cartridge.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client3.png"><br/><br/>

    If we were to clear the cartridge and take a look at the <code>System Config</code> menu, you'll see we get a handful of options, such as what loader we want and what logo we want to use for the loader. I'm not entirely sure what the <code>Use Back</code> option is though.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client2.png"><br/><br/>

    None of this is really important to us at this very moment, so let's add some games. To do this, all we need to do is hit the "Open ROM" button, and navigate to a game we want to add. For this, we'll be using WarioWare, Inc. and Jazz Jackrabbit. You'll notice that since we have the <code>Use Loader</code> option enabled, it inserts this "EZLoader" at the top of the cartridge, and that's so that we get a nice menu to select a game.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client4.png"><br/><br/>

    From here, we're pretty much done. All we have to do now is press the <code>Burn</code> butto
    n, and watch as it begins writing to our cartridge. The status LED will turn red for the entire duration of this operation, and for the 12 MiB total that these games take up, it took about a couple minutes or so.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client5.png"><br/><br/>

    That's it! From here, we pu the cartridge into our Game Boy, and we're first greeted with this... very good... looking splash screen.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba1.jpg"><br/><br/>

    Press a button, and we're taken to the EZLoader main menu.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba2.jpg"><br/><br/>

    From here, all we have to do is press the A Button on any game, and the game starts.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba3.jpg"><br/><br/>

    Pretty simple, right? Of course, that's just for a couple smaller games. Some Game Boy Advance titles would take up the whole 16 MiB that these cartridges alotted, and so for those games, you'd want to do something different.<br/><br/>

    To start, you would have to disable <code>Use Loader</code> >in the <code>System Config</code> menu.<br/>
    <img width="424px" class="pixelArt" src="/assets/img/blog/flash2advance/ez2_client6.png"><br/><br/>

    And then from here, you add your game to the selection. Notice how EZClient no longer inserts EZLoader to the top of the cartridge?<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client7.png"><br/><br/>

    From here we can hit <code>Burn</code>. Our game is the only thing on the cartridge here, and it behaves as any other Game Boy Advance game.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba4.jpg"><br/><br/>

    EZClient contained a few extra features, one such being integration for FluBBa's Game Boy, NES, and PC-Engine emulators. To access this, you first head over to the section labelled <code>NES/PCE/GBC/GB ROM support</code>.
    <img src="/assets/img/blog/flash2advance/ez2_client8.png"><br/><br/>

    From here, use the drop-down menu to select what system you want.<br/>
    <img width="246px" class="pixelArt" src="/assets/img/blog/flash2advance/ez2_client9.png"><br/><br/>

    From there, you click <code>Add ROMs</code> and then do exactly that.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client10.png"><br/><br/>

    From here, you can either hit <code>Save as ROM</code> to save the compilation ROM to your computer for re-use, or you can just add it to the cartridge directly with the <code>Add to Cart</code> button. Except don't, actually. Because the program just crashes when you try to burn when using <code>Add to Cart</code>, so it's best to just save the file and load it that way.<br/><br/>

    Interesting tidbit here, the NES loader actually includes all of the speedhack and scaling options that PocketNES shipped with in its own builder. You can enable the CPU speedhack, PPU speedhack, you can force a PAL console, and you can make the screen vertically scroll based on a memory address, or by the position of a sprite.<br/>
    <img width="216px" class="pixelArt" src="/assets/img/blog/flash2advance/ez2_client11.png"><br/><br/>

    Anyway, now that we've gotten our emulators and a game queued up, we're ready to burn it to our cartridge.<br/>
    <img width="382px" class="pixelArt" src="/assets/img/blog/flash2advance/ez2_client12.png"><br/><br/>

    Loading it up in our Game Boy and:
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba5.jpg"><br/><br/>

    From here, our emulator compilations can be booted and we can play our games!
    <img width="360px" src="/assets/img/blog/flash2advance/ez2_gba6.jpg"> <img width="360px" src="/assets/img/blog/flash2advance/ez2_gba7.jpg"><br/> <small>The game I picked for the PCE emulator, Bonk's Revenge, didn't work here...<br/><br/>

    Taking a look back at the EZLoader GUI, we can press the L Button to bring up a little help window, showing save backup settings and Real-Time Clock settings, though the clock settings don't work on the cartridges that I have unfortunately.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba8.jpg"><br/><br/>

    On this current burn of the cartridge, we don't have access to the save backup settings.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba9.jpg"><br/><br/>

    However, we can fix that. In EZClient, there is a checkbox in the <code>System Settings</code> dropdown menu named <code>use SMS</code>, which I can only assume means "Save Management System" or something.<br/>
    <img width="418px" class="pixelArt" src="/assets/img/blog/flash2advance/ez2_client13.png"><br/><br/>

    When enabled, it will bring a dialog box noting that SMS will take up roughly two megabytes of the flash.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client14.png"><br/><br/>

    From here, when we write some games to our cartridge, we get access to this backup menu.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba10.jpg"><br/><br/>

    From here, if we press the A Button it will ask us if we want to make a backup.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba11.jpg"><br/><br/>

    We accept, and it writes a copy of the save data to the flash.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba12.jpg"><br/><br/>

    We can make as many backups as we want, too. It's nice.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba13.jpg"><br/><br/>

    If we hook our cartridge back up to the linker and head ove rto <code>Save FileSystem Setting</code>, we can see the fancy little filesystem of save backups.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client15.png"><br/><br/>

    From here, we can extract, add, and delete saves. We can also erase the backup space, and write to the cartridge with the <code>WriteCart</code> button. As far as I can tell the <code>Flash</code> button just refreshes the screen.<br/><br/>

    It's worth noting that the save backups are not the same as what's currently live in the SRAM. That can still be backed up or written to using the <code>Write Saver</code> and <code>BAK Saver</code> buttons in the top.<br/><br/>

    Back on the Game Boy, we can use the L+A buttons to the menu for restoring a save file. We first need to highlight the game we want to load saves for, and then we enter the restore menu.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba14.jpg"><br/><br/>

    We select the save we want, and mind you, we aren't shackled to saves just for our game, we can pick genuinely anything from the filesystem and it will let you overwrite your save data on the SRAM.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba15.jpg"><br/><br/>

    You might have also noticed that little text at the bottom of the main screen of EZLoader that reads <code>RESET</code>.<br/>
    <img width="261px" class="pixelArt" src="/assets/img/blog/flash2advance/ez_loader1.png"><br/><br/>

    That is a soft reset hack. It allows for exiting back to the menu when the Game Boy soft-resets, such as when hitting the exit option in FluBBa's emulators or when hitting A+B+SELECT+START in many titles. It works in PCEAdvance and Activision Anthology, but it caused Jazz Jackrabbit to have a white screen, so obviously the patches for it were very hit and miss. It's toggled on and off with the R Button.<br/><br/>

    Back over to the EZ-Client and you get a couple of theming options. The <code>Remove Intro</code> checkbox skips that first splash screen, and the <code>Select Logo File...</code> lets us select a Windows BMP file to use as the splash screen.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba16.jpg"><br/><br/>

    If we were to uncheck <code>Use Back</code> then the background for the menu becomes plain white.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba17.jpg"><br/><br/>

    But, we can use the <code>Select Loader Back File...</code> option to select another bitmap for the background.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_gba18.jpg"><br/><br/>

    There's another feature of the client called "GoldenFinger," which is basically just cheats. I've never been able to get this properly working unfortunately, as pressing <code>Refresh CHT files</code> causes the client to hang, presumably because it's trying to fetch files from a server that doesn't exist anymore, and I don't know how they were formatted or where they are located.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client17.png"><br/><br/>

    Being able to manipulate EZ-Flash cartridges is cool and all, but what's also nice is the ability to attach non-EZ-Flash cartridges to the linker.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client16.png"><br/><br/>

    There isn't too too much to do here, but you have the ability to backup or restore the save data and dump the ROM contents. You can make backups of your games to use on your cartridge so you can have multiple games on one single cart, for convienence's sake.<br/>
    <img src="/assets/img/blog/flash2advance/ez2_client18.png"><br/><br/>

    We also get another status pattern when having a non-EZ-Flash cartridge attached. This time it blinks once instead of twice.<br/>
    <video width="640" height="360" controls>
    <source src="/assets/vid/ez2_nonez_heartbeat.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>

    So, that's the EZ-Flash II linker. I don't have an EZ-Flash II cartridge, but that's okay, since I was able to show off everything the cartridges were capable of with the EZ-Flash I. Curiously enough, if we look on the side of the box that the linker and cartridge shipped in, we can see that what originally came with it was a 512M EZ-Flash II cartridge. I dunno where that unit is.<br/>
    <img width="720px" src="/assets/img/blog/flash2advance/ez2_box_side.jpg"><br/><br/>
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

    So, the GBA Movie Player was good and all, but what if you had already purchased a Flash2Advance or other traditional flashcart and could not financially recover from such a purchase like that? Well, there was an option for you, and while it's certainly not very elegant, it was a functional solution for its limitations, especially for the time.
</p>

<br/>

<h2>Meteo AVI-2-GBA</h2>
<p>
I have a long history with this one.<br/>
<img src="/assets/img/blog/flash2advance/meteo1.png"><br/><br/>

I'm not really sure where this codec came from, but the copyright info in the 1.4.0 version of the program names two organizations/companies. "Inside-Cap" and "AIR-Pocket."<br/>
The version you see in this picture is the English version that I made like 7 years ago I wanna say, it's been a hot minute. It looks like crap because I made it in a morning before school via hex editing rather than editing the internal resource files packaged in the executable. :P<br/><br/>

If we go to captures of the site <code>http://inside-cap.com/</code> as of 2003, we get:
<img width="360px" src="/assets/img/blog/flash2advance/ic1.png"> <img width="360px" src="/assets/img/blog/flash2advance/ic2.png"><br/>
<img width="360px" src="/assets/img/blog/flash2advance/ic3.png"> <img width="360px" src="/assets/img/blog/flash2advance/ic4.png"><br/><br/>

A website dedicated to, what appear to be ports of Visual Novel engines? There's absolutely no mention of "AIR-Pocket" or Meteo anywhere.<br/><br/>

It wasn't until 2004 that There would be a mention of Meteo, on the page dedicated to a Game Boy Advance conversion of the visual novel "Kimi ga Nozomu Eien," powered by their "MinAGI" engine.<br/>
<img src="/assets/img/blog/flash2advance/ic6.png"><br/><br/>

Head over to 2006, and we do see a page dedicated to AIR Pocket, with references to Meteo 1.4.2. Imagine my surprise when I learned that "AIR Pocket" was a GBA Port of of an adult visual novel.<br/>
<img src="/assets/img/blog/flash2advance/ic5.png"><br/><br/>

From here, we actually can track down <a href="https://web.archive.org/web/20060715141908/http://www.inside-cap.com/techs/movie/meteo.htm">a page for Meteo itself</a>.<br/>
<img src="/assets/img/blog/flash2advance/ic7.png"><br/><br/>

There's even a <a href="https://web.archive.org/web/20051120192744/http://www.inside-cap.com/techs/movie/meteo_manual.htm">link to a Japanese manual for it</a>.<br/>
<img src="/assets/img/blog/flash2advance/ic8.png"><br/><br/>

There's no download links though. In fact there are no download links <i>anywhere</i> on this site. It is entirely possible that the Visual Novel ports and Meteo were paid products, and various versions of Meteo have leaked online over the years and spread around over P2P networks before being translated to English by various people, myself included.<br/><br/>

Anyway, to demonstrate the program, I'll be using Meteo 1.5.0, translated by kran27. This version offers options for audio compression on top of the video bitrate and fast-forward speed that 1.4.0 offers. Supposedly, there exist versions up to 1.6.0, but I've never been able to find one.<br/><br/>

The first observation that literally anyone will make with this program, especially using it in this day and age, is that it's extremely picky about how your video file is encoded.<br/>
<img src="/assets/img/blog/flash2advance/meteo2.png"><br/><br/>

Like, of course you're not getting the luxury of using h.264 or HEVC with it, but after a bit of fiddling, I discovered the <code>ffmpeg</code> command that works properly:<br/>
<code>ffmpeg -i [input].mp4 -c:v msmpeg4v2 -c:a adpcm_ms -ac 2 [output].avi</code><br/><br/>

I'm sure there were other tools back in the day to get video files in the correct format but I'm not sure of what they would be.<br/><br/>

Anyway, so your ROM image has been finally created. Terrific. But, we're not done yet, because this product doesn't generate ROM files with correct Nintendo logo character data. Instead, you get this corrupted data when booting it on hardware:<br/>
<img src="/assets/img/blog/flash2advance/mgba1.png"><br/>
<small>i chuckle at the fact that i recognize this pattern from DevKit Advance.</small><br/><br/>

So you need to run a tool called <code>gbafix</code> by DarkFader in order to get your ROM header fixed.<br/>
<img src="/assets/img/blog/flash2advance/gbafix.png"><br/><br/>

But then, FINALLY, does your video boot on real hardware for you to write to your Flashcart:<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/smosh.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/>
<small>Smosh - MAGIC KEYBOARD!</small><br/><br/>

From here, the only seat controls we really get are "Fast-Forward," on the A Button and "Restart" on the B Button. To be fair, though, these controls were worse in 1.3.0, where <i>every</i> button would restart the video, so at least there's. SOMETHING.<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/smosh2.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/><br/>

Additionally, the file sizes are huge. This video, from YouTube, is just four minutes long. At this "moderately half-decent" quality, the size is <b>24.7 Megabytes alone.</b><br/>
<img src="/assets/img/blog/flash2advance/file_size.png"><br/><br/>

For reference, the 640x360 h.264 encode of this video ripped from YouTube was only 8.7 MB.<br/><br/>

...yeah. The default settings in this program are really not efficient for saving on file size. 120kbps of video on a 240x160 screen is egregious, so we can throw away a lot of this unnecesary video data. To wit:<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/smosh30kbps.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/><br/>

This is the same video, encoded at a bitrate of 30kbps. It's a little scruffy-looking, but it takes up only about a third of the initial 120kbps image, coming in at ~9.25MB.<br/>
<img src="/assets/img/blog/flash2advance/file_size2.png"><br/><br/>

I tested a 20kbps encode, and the file size climbed down to 7.18 MB, but that ultimately led to the video looking incredibly blurry.<br/>
<img src="/assets/img/blog/flash2advance/mgba2.png"><br/><br/>

If I tried any bitrates lower than this, the file size would start climbing again before reaching the original 24.7 MB when set to 1kbps. Because reasons.<br/><br/>

There are also a handful of audio bitrates to select from:<br/>
<img src="/assets/img/blog/flash2advance/meteo3.png"><br/><br/>

For comparison's sake, I recorded each possible audio quality:
</p>
<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
style="text-align: center;">
<col width="160px" />
<tr>
<td width="160px">
<?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/wily21.mp3");?><br/>
<code>21 KHz</code><br/>
</td>
<td width="160px">
<?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/wily10.mp3");?><br/>
<code>10 KHz</code><br/>
</td>
</tr>
</table><br/>
<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
style="text-align: center;">
<col width="160px" />
<tr>
<td width="160px">
<?php generateAudioFileEmbed("/assets/snd/blog/flash2advance/wily5.mp3");?><br/>
<code>5 KHz</code><br/>
</td>
</tr>
</table>
<small>Dr. Wily Stage 1 & 2 (JP Version) - Mega Man 2</small><br/><br/>

<p>
I think it's worth pointing out that each of these three encodes wasn't really that different in terms of file size, but in many cases a few hundred kilobytes was the difference between watching and not watching.<br/>
<img src="/assets/img/blog/flash2advance/3encodes.png"><br/><br/>

Anyway, you also get some framerate options if you want to have even more control over how much data is stored, down to 6 frames per second, really approaching the quality (or, rather lack thereof) of the Matrix Memory Shrek and Shrek 2 movies that were officially released under the Game Boy Advance Video line.<br/>
<img src="/assets/img/blog/flash2advance/meteo4.png"><br/><br/>

There's a handful of dithering options, in most cases anything other than 4x Dithering would leave the video looking worse with not much file size gain.<br/>
<img src="/assets/img/blog/flash2advance/meteo5.png"><br/><br/>

And now, I present to you, the same Smosh video, with the lowest possible settings while still maintaining a resolution of 240x136. This file was able to hit a size of 5.3MB.<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/smosh_low.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/><br/>

Of course, thus far, we've only tested live action video, but animation is a medium that's much easier to compress due to comparatively fewer colors and fewer uniquely drawn frames. For my first test, I encoded asdfmovie15, and was able to get it at a good resolution, bitrate, and framerate while only taking 8.1 MB of space.<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/asdf.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/>
<small>TomSka - asdfmovie15</small><br/><br/>

asdfmovie15 is a very extreme example, though, mostly due to its signature two-tone color palette with the exception of blood. A more realistic example I tested is the first episode to the Sam & Max Saturday morning cartoon, with each episode having a runtime of 21 minutes. I actually had to switch to an earlier version of Meteo because 1.5.0 just could not handle a video of this length.<br/>
<video class="interruptVideo" width="480" height="320" controls>
<source src="/assets/vid/samnmax.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/><br/>

On anything that isn't the original AGB, AGS, or OXY screen, this is borderline unwatchable, which is why I opted to split longer videos like this into multiple parts, since I had the ability to do that on a microSD card with an EZ-Flash Omega. But you didn't really have that luxury back then when flashcarts held only so much ROM space.<br/><br/>

The bottom line? It's doable but there are many, many asterisks behind that singular word. Your time and money woud be better spent towards a GBA Movie Player during this era.
</p>

<br/>

<h2>Conclusion</h2>
<p>
    So that's pretty much all that I have to show on the side of dedicated multimedia applications, but there's one much bigger beast that I want to show off. But this blog post is already getting too long, so I'm gonna do a part 2.
</p>

<br/>

<h3>Greetz</h3>
<p>Lesserkuma for FlashGBX and supporting Flash2Advance/FlashAdvance cards with it.</p>
<p>EZ-Flash for sticking around and making cartridges.</p>
<p>Archaemic for EZF Advance protocol documentation.</p>
<p>Dwedit, FluBBa, and Loopy for PocketNES and the related emulators.</p>
<p>Inside-Cap for Meteo.</p>

<?php

echo constructPageFooter();

?>

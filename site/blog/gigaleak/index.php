<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: Personal Observations from the Gigaleaks");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Personal Observations from the Gigaleaks</h1>
<p style="margin-top: -25px;">Me want beytah right now because beytah better than final!<br/></p><br/>
<p>
November 26, 2024<br/>
Category: Infodump<br/>
</p>
<br/>
<p>
Remember the 2020/21 Nintendo data leaks? I certainly do, remember them like I was yesterday. Certainly gave me a reason to wake up in the morning during the COVID-19 pandemic, when I was stuck at home with nothing to do for the remainder of 10th grade.<br/><br/>
I kinda wanna use this page to insert my own findings and things of interest that I found after a curory look back at them. :3<br/><br/>
<span style="color: red">
DISCLAIMER: experts it is okay if you cringe at my surface-level analysis of everything, i'm just poking at what i think is cool and curious and am not an expert in literally anything ever. this is not a complete analysis of the leaks, it is just what i personally find interesting<br/><br/>
</span>
</p>
<span style="color: red; font-size: 36pt;">
Also of note: if you have projects or responsibilities that would be compromised by viewing this material, please close this page now.<br/>
</span>
<p>
With that out of the way, onto the findings.<br/><br/>

</p>
<h2>unsorted.7z</h2>
<p>
<code>unsorted.7z</code> is the name of one of the earliest archives from the BroadOn breach, appearing on May 1st, 2020. This comes hot onthe heels of various development files and CIAs for Pokémon games on the Nintendo 3DS, as well as all of the title keys for DSi, 3DS, and Wii U.<br/><br/>
This archive comes in the form of three CVS repositories.<br/><br/>
One of the first things I noticed is that the <code>depot</code> repository is that the earliest commit goes to 2002, and this repo is relating to the iQue Player, which released in November 2003.<br/>
<img src="/assets/img/blog/gigaleak/depot_firstcommit.png"><br/><br/>

<code>depot/hw/chip/lib/kilopass/081205/</code> is a folder that contains verilog files and documentation to the Kilopass XPM products as of 2005, which are proprietary one-time-programmable non-volatile memory solutions. This information is kept separate from the rest of the iQue Player project since it is property licensed from another firm.<br/><br/>
<code>depot/rf/</code> contains more interesting stuff. The <code>rf</code> in the path is supposed to designate <i>RouteFree</i>, which would later become <i>BroadOn</i>, and then <i>iGware</i>, and now the company exists as <i>Acer Cloud Technology</i>.<br/><br/>
Anyway,<br/>
<img src="/assets/img/blog/gigaleak/rf.png"><br/><br/>
<code>doc</code> contains documentation on something called the "BB Game System", or "BB Player", which is a recurring name throughout this repository.<br/>
<img src="/assets/img/blog/gigaleak/bb.png"><br/><br/>
"BB" was the working name for what would eventually become the iQue Player, and supposedly means "BroadOn Board.<br/><br/>
There are a handful of files under <code>bb_depot</code> that refer to <code>remote_mgmt_files</code> but I'm not sure if these graphs where intended to be used for anything. They seem to be about an internet connection on the iQue Player itself.<br/>
<img src="/assets/img/blog/gigaleak/ique_net_maybe.gif"><br/><br/>

What ended up actually happening was we initially got the iQue Depot, which was a store Kiosk the user would bring their iQue Player to in order to purchase and download games.<br/>
<img src="/assets/img/blog/gigaleak/depot_b2.jpg"><br/><br/>

This later got replaced with some Windows software called "iQue@Home." All iQue Player units had to have their firmware "SKSA" updated in order to access iQue@Home.<br/><br/>

The rest of the documentation is pretty much the standard stuff: System software notes, SoC block diagrams, the works. Here's a cool picture of a really shiny iQue Player, its "Industrial Design."<br/>
<img src="/assets/img/blog/gigaleak/raw-ique.jpg"><br/><br/>

However they do have some extra docs on porting Nintendo 64 games to the iQue Player, which notes how the PIF (Peripheral Interface) was missing on the iQue. On the N64, the PIF was responsible for being a security chip, handling controller input, the soft reset button, and various other information about the current configuration. It also nows the differences in access timings between N64 Game Paks and the flash memory in the iQue, and mentions how they had to alter game save behavior due to lack of EEPROM/SRAM.<br/><br/>
The MIPS core was also slightly different, with the MIPS data cache line size being increased from 16 bytes in the original to 32 bytes. This also meant that DMA and RCP buffer alignment had to be altered.<br/><br/>
The iQue Player also had DDR memory over the N64's RDRAM. "Should not be any issues," the engineers wrote.<br/><br/>
Much of libultra, the N64 SDKs operating system, had to be altered to accomodate these changes. For example, the <code>osEeprom</code> routines were altered to emulate either a 256 byte or 2KB EEPROM using the onboard flash. For SRAM, libultra does not have any specific routines so they had to make those changes on a game-by-game basis.<br/><br/>

<code>rf/hw/</code> contains source files behind the motherboard, the cartridge board (nicknamed "Dookie"), as well as various other things. The board layouts are in DSN format, which require OrCAD to view, but they probably don't work in modern versions of the software.<br/><br/>
<code>chip</code> contains verilog files for the iQue Player SoC and other components, with a top level verilog source file for the SoC appearing to be at <code>rf/hw/chip/src/bb.v</code>. This file, to my understanding, provides the skeleton for each of the specific units and describes how they are supposed to connect, like here in this screenshot they created an instance of the MIPS and are defining names for each of the pins.<br/>
<img src="/assets/img/blog/gigaleak/bbcpu.png"><br/><br/>

I do find it humorous that they renamed RCP to BCP.<br/>
<img src="/assets/img/blog/gigaleak/bcp.png"><br/><br/>

This section of the repostiory is reminiscient of the "Oman Archive," which was an old data dump from 1999 that came internally from a SiliconGraphics employee. It contained a lot of verilog and source files for the N64 and its hardware.<br/><br/>

<code>rt/sw/bbplayer</code> contains a lot of source code used in development. <code>apps</code> and <code>apps.released</code> contain a lot of testing programs used in-house. The <code>morphcube</code> demo contains this picture of Batman that goes really hard.<br/>
<img class="pixelArt" width="450px" src="/assets/img/blog/gigaleak/batman.png"><br/><br/>

Other than that, these demos are the usual testing programs.<br/><br/>

There is this cool demo from the N64 SDK that makes a return called <i>Mirror House Cornflakes</i>, developed by Monegi. Made simply as a demonstration of the libultra and the N64 SDK and how to program this strange machine.<br/>
</p>
<img width="320px" src="/assets/img/blog/gigaleak/mirror_house/-000.png"> <img width="320px" src="/assets/img/blog/gigaleak/mirror_house/-002.png"> <img width="320px" src="/assets/img/blog/gigaleak/mirror_house/-003.png"> <img width="320px" src="/assets/img/blog/gigaleak/mirror_house/-005.png"> <img width="320px" src="/assets/img/blog/gigaleak/mirror_house/-006.png"> <br/><br/>
<p>
The <code>highreso</code> demo has this wonderful image of a Pikachu.<br/>
<img src="/assets/img/blog/gigaleak/highreso.png"><br/><br/>
</p>

<p>
<code>depot/rf/sw/n64os20l/lib/BringupBoot/IPL4</code> contains full source code to the Nintendo 64DD's IPL.<br/>
<img src="/assets/img/blog/gigaleak/ipl4.png"><br/><br/>
Since Super Mario appears in the IPL there is a handful of original source code from Super Mario 64 in here, mostly for animation data.<br/>
<img src="/assets/img/blog/gigaleak/u64mb.png"><br/><br/>

The first commit for <code>depotrvl</code> was made in January of 2006, despite having files that go back to much earlier than that.<br/>
</p>
<img src="/assets/img/blog/gigaleak/depotrvl.png"><br/><br/>
<p>
<code>depotrvl</code> is a repository that's dedicated to the Nintendo Wii, signified by the <code>rvl</code> suffix.<br/><br/>
Once again, we're given the folder structure of <code>doc</code>, <code>hw</code>, and <code>sw</code>. <code>doc</code> contains the usual set of documentation, <code>hw</code> contains a bunch of verilog source code (but not for anything really notable), and <code>sw</code> contains a lot of important source code.<br/><br/>
<code>hw/chip/sim/aes/compile</code> is a script designed for simulation of AES encryption circuitry, written in Verilog. What I find interesting here is that this script actually calls for CSH instead of something more common like Bash. On top of that, the script calls for a command called <code>ncverilog</code>, which a bit of digging showed that "Incisive" was their circuitry simulator.<br/>
<img src="/assets/img/blog/gigaleak/csh.png"><br/><br/>
<code>sw/nintendo/boot/</code> appears to have four revisions of firmware images for an early "Nintendo Revolution emulator" board, if the strings inside the ROM images are to be believed. Couldn't really dig up more information than that.<br/>
</p>
<img width="768px" src="/assets/img/blog/gigaleak/tdev.png"><br/><br/>
<p>
<code>sw/nintendo/di-dvd/DVD_src/build/libraries/dvd/src/</code> and <br/><code>sw/nintendo/di-dvd/DVD_src_PATCH_17Jun2005/build/libraries/dvd/src/</code><br/>
contain source code to what appears to be libraries for controlling the DVD drive, with dates going back to 1998.<br/><br/>

<code>sw/rvl/boot/boot0/</code> contains source code to the Wii's <code>boot0</code>. In here, <code>key.c</code> contains the key used to decrypt the <code>boot1</code> executable.<br/>
<img src="/assets/img/blog/gigaleak/key.png"><br/>
In fact, all of this code lines up with the <a href="https://wiibrew.org/wiki/Boot0/Code_dump">assembly dump</a> that is available on WiiBrew.<br/><br/>

<code>sw/rvl/boot/boot1/</code> contains the source code to <code>boot1</code>. The job of this thing is to initialize more hardware devices and load <code>boot2</code>. Interestingly enough, there are also folders for <code>boot1.diag</code> and <code>boot1.n</code>.<br/><br/>

<code>sw/rvl/boot/boot2/</code> contains a binary image of <code>boot2</code>.<br/>
<img src="/assets/img/blog/gigaleak/boot2.png"><br/>
There is however, an alternate version of <code>boot2</code> called <code>sd_boot</code>, located in <code>boot2.mfr</code>. This alternate variant is used in the factory setup process, after <code>boot0</code> has been imprinted into the MaskROM inside Hollywood. <code>sd_boot</code> would be contained inside a special "prewrite" NAND image that also contained the final <code>boot1</code>. Instead of reading or writing to the NAND, <code>sd_boot</code> instead would load some WAD files from an SD card, one of which contained an ARM binary that would be run on the IOP, better known as the Starlet. Typically, this image will install the NDEV menu and a couple versions of IOS.<br/><br/>
After this, a disc known as "123J" would be inserted into the Wii. Not much is known about this disc.<br/><br/>
The next disc used in the factory is <code>RVL_UJI_DIAG</code>, which is a disc that performs various diagnostics programs to ensure a working RVL unit, kinda like the AGING programs used in other consoles.<br/><br/>
Next, would be disc "122E," which installs DATA CHECK & LOG CHECK to ensure everything passed.<br/>
</p>
<img src="/assets/img/blog/gigaleak/datachk.png"><br/><br/>
<p>
<code>rvl-factory</code> is a small repository that contained various files used by BroadON and Nintendo during the factory, such as SD Card images and NAND blocks.<br/>
<img src="/assets/img/blog/gigaleak/rvl-factory.png"><br/>
Not exactly sure how to use these since none of the WADs are usable in Dolphin.<br/><br/>
</p>
<h2>3DS_manu.7z</h2>
<p>
<code>3DS_manu.7z</code> was a file that dropped on May 9th, 2020, containing the complete collection of files used for the European version of the New Nintendo 2DS XL, which I will from now on refer to as JAN units.<br/>
<img src="/assets/img/blog/gigaleak/3DS_manu.png"><br/><br/>

These programs are designed to validate all of the hardware for the JAN units. They can be run on RED (New 3DS XL) units, but cannot be run on Old 3DS units.<br/>

<?php
generateYouTubeEmbed("sjXN7kw8YiE", 240, 135);
generateYouTubeEmbed("yiIj7MuNDfU", 240, 135);
?>
<br/>
None of these testing programs work on Citra, so please excuse the videos I recorded four years ago.<br/><br/>

Worthy of note: the file <code>CTR_CPU_Board_Sequencer_Program.ver.020023.master.srl</code> is actually a Nintendo DS executable. Take from that what you will.<br/><br/>

And now, a collection of interesting looking images from inside the executables.<br/><br/>
</p>
<img src="/assets/img/blog/gigaleak/ctraging/AccAgain.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/BarcodeScanner.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/CheckLed1_RED.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/CloseAndPushR_KTR.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/CompositeApplication.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/FoldAndOpen.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/gyro_Prepare.png">
<img src="/assets/img/blog/gigaleak/ctraging/gyro_XAxisTest.png">
<img src="/assets/img/blog/gigaleak/ctraging/gyro_YAxisTest.png">
<img src="/assets/img/blog/gigaleak/ctraging/gyro_ZAxisTest.png">
<img src="/assets/img/blog/gigaleak/ctraging/MicOpening.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/pit_cover.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/pit_open.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/PushR_RED.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/QtmCal_PushButtonLR_320_240.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/QtmCal_SetUp.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/ShockTest.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/suzuki_ikko_button_B_320_240.jpg">
<img src="/assets/img/blog/gigaleak/ctraging/suzuki_ikko_stop_horror_400_240.jpg"><br/>
Doohickey headquarters up here.

<br/><br/>

<h2>ctr.7z</h2>
<p>
<code>ctr.7z</code> consists of two folders, <code>ctr</code> and <code>svn</code>.<br/><br/>
<code>ctr/include/aoss/</code> is a folder that contains header files relating to A.O.S.S. by Buffalo Technology, which was an old way of quickly setting up Wi-Fi connections with a single button press.<br/><br/>
<code>ctr/include/gles2</code> has header files for OpenGL ES 2.<br/><br/>
<code>ctr/sources/bootrom/CTR/private/build/bootrom/ctr_bootrom</code> includes the source code to the Nintendo 3DS Boot ROMs, both the ARM9 and the ARM11.<br/><br/>
<code>ctr/sources/bootrom/CTR/doc/CTR_BootRomInfo.vsd</code> contains this interesting page about the 3DS' Blue Screen error when it fails to boot.<br/>
<img src="/assets/img/blog/gigaleak/bootrom_error.png"><br/>
To translate, the formatting is as follows:<br/>
<code>BOOTROM</code> (ROM revision, usually 8046)<br/>
<code>ERRORCODE:</code><br/><br/>
- Byte 1: Lid closed detection: <code>00</code> for Open, <code>01</code>: for closed by DS_R7, and <code>02</code> for closed by MCU<br/>
- Byte 2: NOR Load Error<br/>
- Byte 3: Card Load Error<br/>
- Byte 4: NAND Load Error<br/>
Example error code: <code>00F800FE</code><br/><br/>

The top eight bytes of information show error codes for the first eight partitions of the NAND, in this order:<br/>
3, 2, 1, 0, 7, 6, 5, 4<br/><br/>

The bottom left four bytes refer to NAND control errors, and the bottom right four bytes refer to NAND internal errors.<br/><br/>

There are a lot of listed errors and I won't go into all of them, but take this following example message:<br/>
<code>BOOTROM 8046</code><br/>
<code>ERRCODE: 00F800FE</code><br/>
<code>00000000 00000000</code><br/>
<code>00000400 00000000</code><br/><br/>

<code>F8</code> refers to recieving bad data from NOR, and <code>FE</code> refers to a NAND initialization error. The <code>00000400</code> refers to communication timeout when attempting to initialize the NAND.<br/><br/>
Since in this particular case, we cannot communicate with the NAND, we can't really get any data on its partitions or status, thus the other messages remain at zero. An error code like this usually occurs if the NAND has failed or if a hardmod has been botched.<br/><br/>

<code>ctr/sources/kernel</code> contains the source code to the Horizon OS kernel, written in C++ and Assembly.<br/><br/>

<code>ctr/sources/libraries</code> contains the source code to all of the system libraries. What I find curious is how they had built-in MP3 decoding support in here. They also had a random number generator, using the Mersenne Twister method.<br/><br/>

<code>ctr/sources/processes</code> contains the source code to all of the background processes of the Nintendo 3DS, including things like <code>boss</code>, <code>nwm</code>, <code>mcu</code>, and more. The <code>mcu</code> folder also contains 14 different builds of the MCU ROM image.<br/><br/>

<code>ctr/source/tools</code> contains the source code to many SDK tools, including things like DevMenu. The folder <code>makerom</code> contains the C# source to a Windows tool that I can only assume was used for producing CIAs, CSUs, and other 3DS package/executable formats.<br/><br/>

<code>ctr/source/tools/USBDIO</code> contains a package relating to devices known as "USB-DIO." These are little USB breakout boards that can be controlled with libraries for Visual Basic, MSVC, and MSVC++. The folder also contains a driver for Windows XP and Vista.<br/>
<img src="/assets/img/blog/gigaleak/usbdio.png"><br/>
Perhaps Nintendo used this during development of the 3DS as a means of debugging? Dunno.<br/><br/>

<code>ctr/svn</code> contains two SVN repositories, <code>ctr_mcu</code> and <code>ctr_Repair</code>.<br/>
<code>ctr_mcu</code> contains the source code and development history of the Nintendo 3DS MCU ROM image.<br/>
<code>ctr_Repair</code> contains the source code and development history of tools that were used in the 3DS repair centers.<br/>
<code>BoxyardEraser</code> is a tool that appears to be designed to remove 3D Movie Player videos, which were all codenamed "BOXYARD." I don't really have much more information than that.<br/>
I dunno what <code>CardCup</code> or <code>CardSaveData</code> are supposed to do.<br/>
<code>ConsoleDataMigration</code> was a set of internal tools used by Nintendo to transfer data between Nintendo 3DS units. The program would require the operator to insert a blank SD card, and the <code>CTR Console Backup</code> would dump important system contents to it.<br/>
<img src="/assets/img/blog/gigaleak/Backup_Wait_PullOut.png"><br/><br/>

The contents of the newly created backup would be as follows:<br/>
<code>CTRBackup/</code> - CTRNAND Contents<br/>
<code>TWLPhotoBackup/</code> - DSi Camera Backup<br/>
<code>TWLSoundBackup/</code> - DSi Sound Backup<br/>
<code>TWLBackup/</code> - DSi NAND Backup<br/>
<code>MoveContext.bin</code> - Unknown encrypted file<br/>
<code>Migration_Log.txt</code> - Backup of the contents of the logging on the bottom screen<br/>
<code>movable.sed</code> - Console-unique private key file<br/>
<code>NtrNorSetting.bin</code> - Nintendo DS name, color, birthday, and message settings<br/>
<code>serial.bin</code> - Console serial number<br/>
<code>rtc.bin</code> - Real-Time Clock Calibration<br/>
<code>CountrySetting.bin</code> - Location information<br/>
<code>FileList.txt</code> - List of files extracted on SD card<br/>
<code>TwlTitleList.txt</code> - List of DSi installed titles<br/>
<code>version.bin</code> - System version information<br/>
<code>deviceId.bin</code> - Device ID (Unsure specifically what this is)<br/>
<code>Region.bin</code> - Region information<br/><br/>

<code>CTR Console Restore</code> was another program that was used to to the reverse, using an SD backup to restore to a different Nintendo 3DS unit.<br/>
<img src="/assets/img/blog/gigaleak/Restore_Succeeded.png"><br/><br/>

It also has the ability to transfer the assignments of a user's SD Card over to the new system. Once it's done doing that, it will ask the operator to insert the SD Card used in the backup process, where it will then write the following files:<br/>
<code>WriteFinished</code> - Write confirmation<br/>
<code>UpdateFinished</code> - Update confirmation<br/>
<code>ConsoleInitialized</code> - Init confirmation<br/>
<code>TryRestoreSameConsole</code> - Init confirmation</br>
<code>tpCalibration.bin</code> - More data extracted from NAND<br/>
<code>RtcSyncFinished</code> - RTC sync confirmation<br/>
<code>AccountDeletedChecked</code> - Confirmation that the old user account has been deleted(?)<br/>
<code>AccountTransferedChecked</code> - Confirmation that the user account has been transferred<br/>
<code>DownloadSDCIFinished</code> - SD Card management information has been successfully created<br/>
<code>cfgCalibration.bin</code> - More data extracted from NAND<br/><br/>

<code>ctr.7z/ctr/sources/bootrom/CTR/private/build/bootrom/ctr_bootrom/ARM9/main.c</code> contains this comment:<br/>
<img src="/assets/img/blog/gigaleak/brom_efuse_detach.png"><br/><br/>

This commented out line would supposedly "detach" (unmount?) the eFuse region from memory if OTP decryption failed. The comment then goes on to explain that they need to write the "TWL eFuse" before detaching. I don't recall anything about eFuses on the Nintendo DSi, so... maybe it would be referring to the unique console ID of the DSi, somehow?<br/><br/>

<code>ctr.7z/ctr/sources/firmware/CTR-Kernel/updater1st</code> contains the source code for what appears to be the factory initialization program for the Nintendo 3DS family. Of particular note are the folders labelled things like <code>UpdaterNgc</code> and <code>UpdaterNgcFirm</code>. The code word here is "NGC," which I believe refers to a "Nitro Game Card," which would mean that the program used to initialize Nintendo 3DS systems was actually on a Nintendo DS-mode cartridge. This lines up with the ARM9 boot ROM feature of being able to boot from a Nintendo DS game cart if X+Start+Select is held and the system is closed while booting. Nintendo likely had a special jig to trigger this. Note that in this instance, Nintendo DS game cart does not inherently mean that it was a Nintendo DS executable.<br/>
<img src="/assets/img/blog/gigaleak/brom_ngc.png"><br/><br/>

That's pretty much all there is for ctr.7z that I found interesting. Everything else here is rather mundane.<br/><br/>
</p>
<h2>svn_1.068.zip</h2>
<p>
This file contains the source code to the Nintendo 3DS Virtual Console.<br/><br/>
<code>svn_1.068/patch/Sample.patch</code> shows a sample layout for how game-specific patches were implemented in the Virtual Console emulator. The developer could apply custom CGB palettes and also patch various memory addresses.<br/>
<img src="/assets/img/blog/gigaleak/samplepatch.png"><br/><br/>

<code>svn_1.068/Tools/NESROMMaker</code> contains a tools that appears to convert iNES and FDS ROM images into ones that were used for Nintendo Virtual Console, and was developed by "Chentian" of iQue.<br/><br/>

<code>svn_1.068/src/AGB</code> contains a Game Boy Advance emulator, written in 2009, presumably before Nintendo added OS/Silicon support for Game Boy Advance titles to be run. What's really curious is that it contains a dynamic recompiler that has the capabilities of emitting machine code for both ARM and x86.<br/>
<img src="/assets/img/blog/gigaleak/agb_x86.png"><br/><br/>

The Nintendo 3DS Virtual Console emulator is very portable, and <code>svn_1.068/src/PC</code> contains code that allows it to be compiled for Windows. Same goes for <code>svn_1.068/src/EmuShell/PC</code>.<br/><br/>
</p>
<h2>ctr-etc.7z</h2>
<p>
<code>ctr-etc.7z</code> contains documentation about the Nintendo 3DS security model, dev board, boot process, and crypto. I talso contains many internal and SDK programs such as DevMenu, SystemUpdater, and a bunch of sample demos.<br/><br/>
<code>ctr/CTR Security.pdf</code> has a presentation from BroadOn about the Nintendo 3DS security, but what I find interesting is their sort of "if this happens we are so screwed" attitude towards certain things.<br/>
</p>
<img src="/assets/img/blog/gigaleak/breach.png"><br/><br/>
<h2>other.7z</h2>
<p>
<code>other.7z</code> contained six archives:<br/>
<code>CGB.7z</code> - CGB source code for <i>The Legend of Zelda: Link's Awakening</i><br/>
<code>Famicom_NES.7z</code> - Master ROM database for Famicom/NES<br/>
<code>NEWS.7z</code> - Unknown, various Sony NEWS workstation backups?<br/>
<code>SFC.7z</code> - Various Super NES game source code and demos<br/>
<code>agb_bootrom.zip</code> - SVN tree of Game Boy Advance and Game Boy Color boot ROMs<br/>
<code>dmg.7z</code> - DMG source code for <i>The Legend of Zelda: Link's Awakening</i><br/><br/>

The files in <code>Famicom_NES.7z/HVC</code> date back to July of 1994, so I imagine that Nintendo of Japan had a digital archive project so that they could keep all of these ROM images around in the event that the physical ROMs died.<br/>
Interestingly, <code>Famicom_NES.7z/NES/ROYALTY</code> is all dated April of 1996.<br/>
Anyway, all of these are raw ROM dumps, no iNES header is found here like what Nintendo would begin to use later on once they hired Kawasedo.<br/><br/>

At the time of the leak, many of these ROM images were undocumented, and <code>Famicom_NES.7z/NES/NOA/NESXZIP.066</code> would actually end up containing an unseen alternate revision of the Nintendo World Cup cartridge ROM!<br/>
<img width="75%" src="/assets/img/blog/gigaleak/mrcheeze_1.png"><br/><br/>

<code>other.7z</code> has several prototype builds of Star Fox 2.<br/>
<code>NEWS.7z/StarFox2/SF2/SF.ROM</code><br/>
<code>NEWS.7z/StarFox2/KAWAGOE/SF.ROM</code><br/>
<code>SFC.7z/ROM/StarFox2/usa/SXJ03.COM</code><br/>
<code>SFC.7z/ソースデータ/StarFox2/SF2/SF2_CES.zip</code><br/><br/>

That last one sounded a few alarms when it first leaked. That's the ROM that was used on the development cartridge at CES 1994 when Star Fox 2 was first being shown off. The cartridge that was famously almost stolen by an Arizona man who was quickly arrested and charged with felony grand larceny.<br/>
<img class="pixelArt" width="512px" src="/assets/img/blog/gigaleak/SF2CES-Title.png"><br/><br/>

<code>SXJ03.COM</code> is the master ROM that Nintendo had of Star Fox 2, dated September 21, 1995. It is actually <i>not</i> the same as the ROM that was officially released in 2017 as part of the Super NES Classic, there's a few touch-ups they made here and there.<br/>
<img src="/assets/img/blog/gigaleak/sf2_master.png"><br/><br/>

<code>NEWS.7z/StarFox2/KAWAGOE/SF.ROM</code><br/>
<img width="50%px" src="/assets/img/blog/gigaleak/sf2_03311994_1.png"><img width="50%px" src="/assets/img/blog/gigaleak/sf2_03311994_2.png"><img width="50%px" src="/assets/img/blog/gigaleak/sf2_03311994_3.png"><br/><br/>

<code>SFC.7z\ソースデータ\ヨッシーアイランド\ツール\donkey_test</code> is a folder located in the source code of Yoshi's Island.<br/>
There are two files: <code>super_donkey_1.bin</code> and <code>super_donkey_2.bin</code>.<br/>
<?php generateYouTubeEmbed("QSBVyP_BkMQ", 240, 135);?>
<?php generateYouTubeEmbed("1PtJmw1pNo", 240, 135, 1, 1);?>
<br/>

<code>SFC.7z\ソースデータ\ヨッシーアイランド\ツール\sleep_test</code> is another folder here, and it contains another unused game idea.<br/>
<?php generateYouTubeEmbed("nny81nnJ5uY", 240, 135, 1, 1);?>
<br/>

Both of these prototypes use the same art style, so what I think was going on here was that Nintendo had the idea for this hand-drawn art style, and tried various ideas but nothing stuck until they went with Yoshi's Island.<br/><br/>

The <code>BIN</code> folder of the Star Fox 2 source code contains a lot of DOS tools used by Argonaut during development. Here's a few of them:<br/>
</p>
<img width="30%" src="/assets/img/blog/gigaleak/dos_1.png"> <img width="30%" src="/assets/img/blog/gigaleak/dos_2.png"> <img width="30%" src="/assets/img/blog/gigaleak/dos_3.png"> <br/><br/>

<p>
<code>SFC.7z/ソースデータ/StarFox2/SFCAD</code> contains the "Starfox CAD Tool," created in 1994 by Dylan Cuthbert.<br/>
<img width="30%" src="/assets/img/blog/gigaleak/sfcad_1.png"> <img width="30%" src="/assets/img/blog/gigaleak/sfcad_2.png"> <img width="30%" src="/assets/img/blog/gigaleak/sfcad_3.png"> <img width="30%" src="/assets/img/blog/gigaleak/sfcad_4.png"> <img width="30%" src="/assets/img/blog/gigaleak/sfcad_5.png"><br/>
<span style="font-size: 12pt">Make sure you open these images in a new tab to see full size!</span><br/><br/>

<code>other.7z/agb_bootrom.zip</code> contains the SVN repos where the source code to the Game Boy Advance boot ROMs was stored, which includes both the AGB and CGB boot ROMs. There isn't any actual development history behind the ROMs, but it's great to have the final source nonetheless.<br/>
<img src="/assets/img/blog/gigaleak/agb_bootrom.png"><br/>
<img src="/assets/img/blog/gigaleak/cgb_bootrom.png"><br/><br/>

It's a known fact that the GBA boot ROM has unused code that detects if a CGB game is inserted, and fades out before booting the CGB game. However, Nintendo could never get this to work, most likely due to the difference in voltage between AGB (3.3v) and CGB (5v) cartridges.<br/><br/>
This leak actually has the source code behind the routines!<br/>
</p>
<img src="/assets/img/blog/gigaleak/agb_waitcnt.png"><br/>
<img width="50%px" src="/assets/img/blog/gigaleak/agb2cgb.png"><br/><br/>
<p>
I find it odd how the routine uses the BG palette to perform the fade instead of <code>REG_BLDCNT</code> and <code>REG_BLDY</code>, like there there for this exact type of thing, right?<br/><br/>

We also get Nintendo's official compression tool, used for LZ77, Diff, Huffman, or RLE compression of arbitrary data.<br/>
<img src="/assets/img/blog/gigaleak/agbcomp.png"><br/><br/>

The GBA boot ROM also uses the MusicPlayer2000 engine, included as part of the SDK, and responsible for sound in a large amount of the console's lineup (and also infamous for having a poor mixer early on).<br/>
<img src="/assets/img/blog/gigaleak/mp2k.png"><br/><br/>

In <code>multi18_Arm.s</code> we can see the keys used to decrypt and transfer multiboot images over SIO.<br/>
</p>
<img src="/assets/img/blog/gigaleak/kawasedo.png"><br/><br/>
<p>
When put together, the sequence <code>4B 61 77 61 73 65 64 6F</code>. This creates the string <code>Kawasedo</code>, the pseudonym of Tomohiro Kawasae, who is most famous for being hired by Nintendo for his NES emulation work, and eventually writing the NES emulator for <i>Dōbutsu no Mori</i>, or <i>Animal Crossing</i> as we know it over here in the United States.<br/><br/>
</p>

<h2>20100713cvs_backup.tar.7z</h2>
<p>
<code>20100713cvs_backup.tar.7z</code> seems to be a snapshot of someone's <code>/usr/local/cvsrepo</code> on a Linux/*NIX machine. The groups that are tagged in the <code>.tar</code> archive are <code>ensata_usr</code>, <code>cvspokemon</code>, The users in the files are <code>yama</code>, <code>imatake</code>, <code>teruki</code>, and <code>noriko</code>.<br/><br/>

<code>/usr/local/cvsrepo/ensata</code> is what appears to be the source code to the Ensata emulator that was made by Nintendo for the IRIS, later on the Nintendo DS. From what I gather, it's a fork of an existing Game Boy Advance emulator called GBE, and appeals to be capable of being compiled for both Windows and the GameCube.<br/><br/>

<code>/usr/local/cvsrepo/imatake/dmgdasm</code> contains an official Game Boy LR35902 disassembler.<br/><br/>

<code>/usr/local/cvsrepo/noriproj</code> contains the source code to "WallPaperPasswordMaker." Nobody knows what this is.<br/><br/>

<code>/usr/local/cvsrepo/pokemon</code> contains a slightly incomplete CVS repo of Pokémon Diamond and Pearl. We wouldn't get the complete repository until October of 2024, and that was actually an SVN repo. No idea what a CVS version is doing here.<br/><br/>

<code>/isr/local/cvsrepo/turnout</code> contains the source code the the Game Boy emulator for the Wii Virtual Console.<br/><br/>

<br/>
</p>

<h2>netcard.7z</h2>
<p>
<code>netcard.7z</code> was a file that contained source code and design files for the iQue Game Boy Advance, as well as files relating to an unreleased peripheral called the "Netcard."<br/><br/>

<code>gba/depot-offline/hw/chip/lib</code> contains all the modules used by iQue for the development of the iQue Game Boy Advance. All coming from ARM, Altera, BroadOn, Kilopass, Samsung, and more.<br/><br/>

<code>gba/depot-offline/hw/chip/altera</code> contains the Altera Quartus project file. We can see that the FPGA that iQue was using was a Stratix EP1S60F1020C6.<br/><br/>

<code>gba/depot-offline/hw/system/fpga_board</code> contains the design layout for the FPGA test board that the iQue GBA was tested with.<br/>
</p>
<img width="75%" src="/assets/img/blog/gigaleak/agb_fpga.png"><br/><br/>
<p>
Amongst other things in <code>gba/depot-offline/hw/system/</code>, there contain board gerbers, pick and place machine configurations, schematics, and more for both the test board and possibly the final board.<br/><br/>

Throughout <code>gba/depot-offline</code> there is a lot of Wii source code, such as the source code for the Wii's IOS that would run on the IOP. What I think is going on here is that the Netcard, which would allow players to connect to the internet and engage in things like online leaderboards and chat, would be driven by an IOP-like processor or microcontroller to handle all of the underlying system functions, and iQue was using the existing Wii IOS as a starting point or reference.<br/><br/>

<code>iqgba/iQue-GBA/viewer</code> contains the source code to two programs, <code>Viewer_NC</code> and <code>lobby</code>. Its <code>CVSROOT</code> folder contains a number of things:<br/>
Source code to <i>F-Zero: Maximum Velocity</i>, most likely the iQue version.<br/>
12 compiled builds of NetCard viewer in <code>iqgba/iQue-GBA/CVSROOT/Viewer_New/bins</code><br/>
GPL source code to Quake III Arena<br/>
Various GBA ROM images from GoodGBA<br/>
VisualBoyAdvance source code<br/>
<br/>

There were also some interesting screenshots of the employees' desktops.<br/>
<img width="45%" src="/assets/img/blog/gigaleak/20051012.JPG"> <img width="45%" src="/assets/img/blog/gigaleak/F-Zero-20050812.JPG"><br/>
<img width="45%" src="/assets/img/blog/gigaleak/F-Zero-20050815-1.JPG"> <img width="45%" src="/assets/img/blog/gigaleak/F-Zero-20050815-2.JPG"><br/><br/>

<code>iqgba/iQue-GBA/viewer/Viewer_NC/ncpart</code> appears to contain an MPEG-3 decoder. I assume this would have run on the Game Boy Advance CPU or if the IOP-like controller in the Netcard would have been able to decode this codec.<br/><br/>

Oh, those builds of the NetCard Viewer are unfortunately nothing all too interesting, since none of the NetCard, related functionality works in emulators.<br/>
<img src="/assets/img/blog/gigaleak/viewer_new_060224-0.png"><img src="/assets/img/blog/gigaleak/viewer_new_060224-1.png"><img src="/assets/img/blog/gigaleak/viewer_new_060224-2.png"><img src="/assets/img/blog/gigaleak/viewer_new_060224-3.png"><img src="/assets/img/blog/gigaleak/viewer_new_060224-4.png"><br/><br/>

LuigiBlood has footage of one of the Viewer menu mockups, which supposedly works on a VisualBoyAdvance modified with NetCard support. Not sure where this was located in the archive.<br/>
<?php generateYouTubeEmbed("Ta3n_zvaW70", 240, 160, 1);?>
<br/>

At the root of <code>netcard.7z</code> are these files:<br/>
<img src="/assets/img/blog/gigaleak/pokeyman_networks.png"><br/><br/>

These files outline a cancelled online Pokémon project that was internal to iQue at around 2004. They intended it to be based on FireRed/LeafGreen.<br/>
<img width="45%" src="/assets/img/blog/gigaleak/pokeyman_1.png"><img width="45%" src="/assets/img/blog/gigaleak/pokeyman_2.png"><img width="45%" src="/assets/img/blog/gigaleak/pokeyman_3.png"><img width="45%" src="/assets/img/blog/gigaleak/pokeyman_4.png"><br/>
<img width="45%" src="/assets/img/blog/gigaleak/pokeyman_5.png"><br/><br/>
</p>
<h2>bbgames.7z</h2>
<p>
<code>bbgames.7z</code> is a repository that contains source code to a handful of Nintendo 64 and Game Boy Advance games, not all of which are complete.<br/><br/>
The list of games is as follows:<br/>
<code>1080</code> - 1080° Snowboarding<br/>
<code>cba2</code> - NBA Courtside 2: Featuring Kobe Bryant<br/>
<code>dm64</code> - Doctor Mario 64<br/>
<code>f0x</code> - F-Zero X<br/>
<code>forest</code> - Animal Crossing<br/>
<code>marioAGB</code> - Super Mario Advance<br/>
<code>mk64</code> - Mario Kart 64<br/>
<code>sf64</code> - Star Fox 64<br/>
<code>sm64</code> - Super Mario 64<br/>
<code>wario4land_gba_ique</code> Wario Land 4<br/>
<code>wr64</code> - Wave Race 64<br/>
<code>yoshi</code> - Yoshi's Story<br/>
<code>z_majora</code> - The Legend of Zelda: Majora's Mask<br/>
<code>z_ocarina</code> - The Legend of Zelda: Ocarina of Time<br/>
<code>z_ocarina2</code> - OoT backup? Folder is smaller than <code>z_ocarina</code><br/>
<br/>

While the source code to most of these games is incomplete, it still can be compiled if you know what you're doing. CrashOveride95 was able to compile the Dr. Mario source, Super Mario 64 source, Super Mario Advance source, among others. Seemingly, Dr. Mario 64 seems to be the only <i>complete</i> project amongst the repositories.<br/><br/>
From what I gather, Nintendo only ever sent iQue what would have been necessary for localization. Everything else was sent as precompiled object files.<br/><br/>

<code>sm64/shape/Player/Luigi</code> contains the original long-lost source files that were for Luigi before he was cut from Super Mario 64. Each of these files are in a <code>.sou</code> file format, which is a 3D model format that I had never heard of. But some people smarter than I have written tools to convert SOU to OBJ, and thus, we have the assembled Luigi.<br/>
<img src="/assets/img/blog/gigaleak/loogy.png"><br/>
(image credit: tcrf)<br/><br/>

There is a lot more to find in this archive, so I'd highly recommend you look at the <a href="https://tcrf.net/Development:Super_Mario_64_(Nintendo_64)">TCRF page</a> for Super Mario 64.<br/><br/>

<code>marioAGB</code> contains all of the original MIDIs and AIFFs for the audio in that game, which could be useful for researching MusicPlayer2000. It's really obnoxious how there hasn't been a proper up-to-date copy of the MP2K source, what we got in the GBA boot ROM leak was way out of date.<br/><br/>

<code>forest/forest_lib/MFC</code> contains the source code to the NES emulator in Animal Crossing. Interestingly, the files in this folder appear to use the iNES header.<br/>

<code>forest/forest_lib/F3DZEX2-2.08J_PosLight-001109</code> appears to contain the libraries used for the RSP microcode. Good stuff.<br/><br/>
</p>
<h2>emeralds.7z</h2>
<p>
<code>emeralds.7z</code> is a file that contains six other archives:<br/>
<code>BOOT-DIAG.7z</code> - RVL boot diagnosis tool<br/>
<code>RVL-FFWP.7z</code> - Wii Virtual Console for Donkey Kong<br/>
<code>RVL-RAAE.7z</code> - Wii Startup Disc<br/>
<code>RVL-WTester.7z</code> - Wii Wi-Fi Tester<br/>
<code>pm_eme_ose.7z</code> - Pokémon Emerald source code, includes <code>pokeviewer</code> tool<br/>
<code>tako_main_052306.tgz</code> - Verilog and design files for ATI Hollywood<br/><br/>

The Wii Startup Disc is hella interesting. It was a disc that was used internally by Nintendo and various retailers like GameStop to initialize Wii consoles with Wii System Menu version 0. All known Wii System Menu versions will refuse to boot a disc with the ID of "RAAE," and this is the reason.<br/><br/>

In the factory, it wasn't uncommon for Wii units to be flashed with a preliminary NAND image that instructed the user to insert the Wii Startup Disc. There were however a small handful of units that got released with this NAND still written, and they weren't shipped with a Startup Disc. Nintendo, on their official website, said "hey please send this back we screwed up." They just wanted these Wii units gone.<br/><br/>

Before Bushing passed away, he was able to dump one of these Wiis, which was found by another Netizen on eBay listed as "broken." We can actually use this NAND in combination with the Wii Startup Disc and recreate the process!<br/>

<?php generateYouTubeEmbed("fP83-eYvlfQ", 240, 135);?>
<?php generateYouTubeEmbed("ODWFAivXkoc", 240, 135, 1, 1);?>
<br/>

<code>tako_main_052306/052306/doc</code> contains awesome HTML documentation on the Hollywood, or "Project Vegas"<br/>
</p>
<img src="/assets/img/blog/gigaleak/vegas_1.png"><br/><br/>
<p>

<code>NEC_BGA_Bump_IOSLOT_assign_051018.xls</code> contains an Excel sheet that shows the layout of all the pins on the Hollywood and what they attach to.<br/>
</p>
<img width="80%" src="/assets/img/blog/gigaleak/vegas_2.png"><br/><br/>
<p>
<code>ird_nngc_portable_block_july.doc</code> contains a block diagram for a dockable handheld Nintendo GameCube. Sound familiar?<br/>
<img width="100%" src="/assets/img/blog/gigaleak/vegas_3.png"><br/><br/>

Much of this documentation is stuff that we've already seen, just that it now comes from ATi and has documentation on the Hollywood.<br/>
<img src="/assets/img/blog/gigaleak/vegas_4.png"><br/><br/>

<code>tako_main_052306/052306/hdk/win32/arm_tools</code> appears to contain the version of GCC that was used to compile things like boot0 and IOS.<br/><br/>
<code>tako_main_052306/052306/hw</code> contains the possibly complete verilog for the Hollywood. Includes documentation for all of the used modules and components that were synthesized into the final design.<br/><br/>

Given all of the verilog information from both this and previous data dumps, it might genuinely be possible to reconstruct a Nintendo Wii from scratch if given the proper resources to do so.<br/><br/>
</p>
<h2>platinum.7z</h2>
<p>
<code>platinum.7z</code> contains seven archives:<br/>
<code>20090512.rar</code> - iQue Wii Startup Disc<br/>
<code>dgb_sgb.7z</code> - Game Boy / Game Boy Color master ROM lot<br/>
<code>MASTER_CPUJ00.zip</code> - Source code to Pokémon Platinum<br/>
<code>ntr-bootrom.7z</code> - SVN Repo for Nintendo DS boot ROM<br/>
<code>twl.7z</code> - Miscellaneous Nintendo DSi data<br/>
<code>patch_from_MASTER_CPUJ00_to_FIELDTEST2.zip</code> - Pokémon Platinum patch<br/>
<code>patch_from_MASTER_CPUJ00_to_FIELDTEST2_nobanner.zip</code> - Ditto<br/><br/>

<code>20090512</code> contains a little bit more than just the iQue Startup Disc. It also contains the final Chinese version of the Photo Channel, as well as archives of all the System Menu Channels for both Korean and Chinese Nintendo Wii units. Additionally, there are ten different dummy Chinese WADs.<br/>
<img src="/assets/img/blog/gigaleak/dummy.png"><br/><br/>

The Nintendo DS boot ROM has something of interest, there is a copy of the Game Boy Advance boot ROM, a file named <code>NitroAgbMonTS1_040304.bin</code>, however the hash does not match the final ROM image. The only difference lies at offset 0x3F0C, which changes 0x00000000 -> 0x00000001. The only reason this was done was to alter the return value of the <code>GetBiosChecksum()</code>, as a potential means of machine identification.<br/><br/>

<code>dgb_sgb.7z</code>, the Game Boy master ROM lot, had numerous unreleased or outright lost ROM images contained in it, such as the infamous "Work Boy" cartridge that was lost for 30 years, in <code>DMG/POOL/DMGWYE-0.781</code>.<br/>
<img class="pixelArt" width="320px" src="/assets/img/blog/gigaleak/DMGWYE-0-0.png"><br/><br/>

Along with an unreleased game called <i>Sutte Hakkun</i> (すってはっくん) which was never released on the Game Boy. It had a Super Famicom release, but not a Game Boy release. File is <code>DMGASPJ0.1</code>.<br/>
<img class="pixelArt" width="512px" src="/assets/img/blog/gigaleak/DMGASPJ0-0.png"><br/><br/>

The English version of a Japan-exclusive game called <i>X</i> was found here as well, <code>DMG/POOL/DMGECE-0.477</code>.<br/>
<img class="pixelArt" width="320px" src="/assets/img/blog/gigaleak/DMGECE-0-0.png"><br/><br/>

We even got a set of interesting test programs for the MBC5 ROM Mapper, <code>DMG/TESTPRG/mbc5_tester</code>.<br/>
<img class="pixelArt" width="320px" src="/assets/img/blog/gigaleak/mbc5_02m_b-0.png"><br/><br/>

That's nowhere close to all of them, in total there were 136 ROMs that were undumped or lost in this archive.<br/><br/>

<code>twl.7z</code> contains four SVN repositories:<br/>
<code>twl_mcu</code> - Nintendo DSi Microcontroller source code<br/>
<code>twl_wrapsdk</code> - ???<br/>
<code>TwlIPL</code> - Nintendo DSi IPL source code<br/>
<code>TwlToolsRED</code> - ???<br/>
<br/>

<code>twl_mcu</code> isn't actually a valid SVN repository, the actual untracked source code is in <code>twl/twl_mcu/_archive/MCU_TWL/</code><br/><br/>

The README in <code>twl_wrapsdk</code> mentions that the libraries <code>fatfs</code>, <code>sdmc</code>, and <code>sc</code> never be made public. Turns out, Nintendo had an agreement of some kind back then with EBS, Inc and they were provided some libraries for accessing DOS filesystems.<br/>
<img src="/assets/img/blog/gigaleak/ebs_1.png"><br/><br/>

<code>twl_wrapsdk/tools/prom</code> appears to have some EXO files leftover, designed for programming Xilinx PROMs.<br/>
<img src="/assets/img/blog/gigaleak/prom_1.png"><br/><br/>

<code>TwlIPL/bin/ARM9-TS/Release/forDebug/mb_card_rom.srl</code> contains a Nintendo DS Download Play sample.<br/>
<img src="/assets/img/blog/gigaleak/mb_sample.png"><br/><br/>

<code>TwlIPL/add-ins/NTR_IPL2_Gaiji_Font_PC</code> contains a TTE font of the non-standard glyphs used in the Nintendo DSi.<br/>
</p>
<img width="70%" src="/assets/img/blog/gigaleak/nitroipl_gaiji.png"><br/><br/>
<p>
<code>TwlToolsRED/tools/bin</code> contains a number of tools designed for Windows to perform DSi-related... stuff?<br/>
<img src="/assets/img/blog/gigaleak/twl_msi.png"><br/><br/>

All of these tools appear to have been made in .NET Framework. I could only ever get the English ones working.<br/>
<img src="/assets/img/blog/gigaleak/twl_fingerprinter.png"><br/>
</p>
<img src="/assets/img/blog/gigaleak/twl_mastereditor.png"><br/><br/>
Oh yeah, the source code to all of these tools is over in <code>TwlToolsRED/build/tools/MasterEditor/MasterEditorTWL_System/MasterEditorTWL/</code>. :3<br/><br/>

<h2>generic.7z</h2>
<p>
<code>generic.7z</code> contained four archives:<br/>
<code>DSiWareROM.rar</code> - Archive of Nintendo DSi data sent to iQue from Nintendo<br/>
<code>ro.rar</code> - Some Chinese Nintendo DSi executables<br/>
<code>sd.rar</code> - Contents of an iQue dev's SD card<br/>
<code>windows.rar</code> - Pokémon Generation 4 <code>DPDeliver</code> program for Windows<br/><br/>

<code>windows/DPDeliver.exe</code> was used to create a Pokémon distribution event ROM image for Generation 4.<br/>
<img src="/assets/img/blog/gigaleak/dpdeliver.png"><br/><br/>

It also came with some dummy programs. One for the Game Boy Advance and another for the Nintendo DS.<br/>
<img class="pixelArt" src="/assets/img/blog/gigaleak/templateagb-0.png"><img class="pixelArt" src="/assets/img/blog/gigaleak/templateds.png"><br/><br/>

Other than that, there isn't too much else that's all that interesting, unless I am willing to look through every single DSiWare ROM that is in here.<br/><br/>
</p>
<h2>paladin.7z</h2>
<p>
<code>paladin.7z</code> is a massive archive that contains the following contents:<br/><br/>

<code>Dungeon/</code> - Pokémon Mystery Dungeon GBA and NDS ROMs<br/>
<code>E3/</code> - Various unknown versions of Pokémon FireRed and LeafGreen<br/>
<code>NetCardWads/</code> - Various Wii WADs for iQue NetCard? Can't really install them<br/>
<code>Ranger_e3_060420/</code> - Pokémon Ranger E3 Demo<br/>
<code>FMC_DISK.7z</code> - Famicom Disk System master disk database<br/>
<code>PokeRanger_Euro.zip</code> - Pokémon Ranger PAL translations<br/>
<code>Ranger_EURO.zip</code> - Final Pokémon Ranger PAL translation<br/>
<code>rangereu.7z</code> - Pokémon Ranger builds<br/>
<code>ctr_card_test</code> - Source code to the 3DS equivalent of memtest86<br/>
<code>ctr_eFuse.zip</code> - Source code to 3DS tool that generates eFuse IDs<br/>
<code>ctr_firmware.zip</code> - ~2008-2009-ish source code to Nintendo 3DS boot ROM<br/>
<code>ctr_test_tools.zip</code> - Source and binaries for <code>TwlBkpCheck</code><br/>
<code>ctr_tools_red.zip</code> - Source to various tools used by Nintendo Research & Engineering Division (RED)<br/>
<code>irisSDKbulb-snapshot-031203-forToolMaker.tar.gz</code> - Dec 3, 2003 IRIS SDK<br/>
<code>irisSDKbulb-snapshot-031203.tar.gz</code> - Another Dec 3, 2003 IRIS SDK<br/>
<code>irisSDKbulb-snapshot-031212.tar.gz</code> - Dec 12, 2003 IRIS SDK<br/>
<code>irisSDKbulb-snapshot-040120-private.tar.gz</code> - Jan 20, 2004 IRIS SDK Private files<br/>
<code>irisSDKbulb-snapshot-040120.tar.gz</code> - Jan 20, 2004 IRIS SDK<br/>
<br/>

<code>FMC_DISK.7z</code> contains all known disks that Nintendo had in storage.<br/>
<img src="/assets/img/blog/gigaleak/rda.png"><br/><br/>

They had their own format called "RDA/RDB," which I can only assume stood for Nintendo Research and Development. RDA was for Side A and RDB was for Side B.<br/><br/>

As part of this archival process, which took place from January to February of 2007, they also took photos of each and every disk label.<br/>
<img width="240px" src="/assets/img/blog/gigaleak/rda/001.jpg">
<img width="240px" src="/assets/img/blog/gigaleak/rda/013.jpg">
<img width="240px" src="/assets/img/blog/gigaleak/rda/029.jpg">
<img width="240px" src="/assets/img/blog/gigaleak/rda/074.jpg"><br/><br/>

Under this archive, there also exists their own tool to convert RDA/RDB images to FDS, which is the dump format the emulation community developed.<br/>
</p>
<img src="/assets/img/blog/gigaleak/rdafds.png"><br/><br/>
<p>
The file <code>DiskWriterSoftPak_ZEL.zip</code> contains the disk dump for The Legend of Zelda, which was damaged in their master archive. Kawasedo-san was tasked with recovering the data, to which he was able to recover it from an EPROM that existed on an FDS disk writer cartridge from back in the day, but the EPROM was formatted as "SCAT Soft Pack." They even had to write a tool, <code>scattoqd.exe</code> to convert the EPROM dump to their Virtual Console format.<br/>
<code>scattoqd ROM1.bin ROM2.bin ROM3.bin ROM4.bin out.qd</code><br/><br/>

All of those IRIS SDKs come from the development of the Nintendo DS, which was the original Game Boy Advance successor, having one screen and capable of 3D.<br/>
<img src="/assets/img/blog/gigaleak/iris.png"><br/><br/>
</p>
<h2>ios-releases.tar.7z</h2>
<p>
<code>ios-releases.tar.7z</code> was a massive archive, 24 GB uncompressed, that contains a metric crap-ton of development data relating to the Wii's IOS. In large part, in contains the following:<br/>
- Firmware images for <code>sd_boot</code><br/>
- System Menu WADs<br/>
- Firmware WADs<br/>
- IOS blobs<br/>
- Dupes of existing BroadOn/iQue source trees such as GBA and NetCard<br/>
<br/>

Something of note is that this archive is not actually a source tree or repository, it's kinda just a folder that BroadOn employees used to store release builds and whatnot.<br/><br/>

To my knowledge, nothing here is particularly useful in Dolphin, but there are probably some brave souls willing to rewrite their Wii NANDs to try to get the System Menu WADs booting.<br/><br/>

Many of these IOS releases are distributed as flash dumps, consisting of the first five blocks of NAND. Some are also compiled twice, being split between NDEV units with 128 MB of DDR3 and NDEV units with 64MB of DDR3.<br/><br/>

Some of the Netcard stuff made it into here, and <code>ios_images9.1.0_rc3/root_gbasrc_2006090117.tgz</code> contains a bunch of Netcard related source code.<br/><br/>

<code>gba_root/usr/src/gba/manufacture/function</code> inside of this archive contains a test program that validates the functions of the NetCard coprocessor, which, as previously mentioned, was going to be programmed with code based on IOS.<br/>
<img src="/assets/img/blog/gigaleak/agb_nctest.png"><br/>
<img src="/assets/img/blog/gigaleak/agb_nctest2.png"><br/><br/>

In many of the READMEs, there are notes about programming the flash of an NDEV unit with a specific IOS image.<br/>
<img src="/assets/img/blog/gigaleak/ios-releases-prgm.png"><br/><br/>

And now, an interesting list of observations amongst IOS revisions:<br/>
- IOS 4.0.1 has a note saying "Enabled DVD Video access using TMD."<br/>
- Apparently there were many different NDEV configurations, some of the notes name them as NDEV1 and NDEV2.<br/>
- IOS version 0.0 was released on March 9, 2006.<br/>
- IOS 0.7 broke the filesystem API tests on NDEV systems.<br/>
- IOS 0.6.5 added support for filesystem encryption, SD driver, an updated boot1, and better hardware initialization with help from ATI.<br/>
</p>
<h2>wiidump.7z</h2>
<p>
<code>wiidump.7z</code> is a file containing a lot of early Wii SDKs as well as other things.<br/><br/>

In each of the SDK dumps, there is a copy of Metrowerks Codewarrior, which is the IDE that Nintendo used for GameCube development. I even managed to get it to install!<br/>
</p>
<img src="/assets/img/blog/gigaleak/codewarrior.png"><br/><br/>
<p>

Nintendo had provided drivers for the RVL SDK that worked on both Windows 2000 and Windows XP, as well.<br/><br/>

Inside of <code>wiidump.7z</code> is an archive called <code>NUP.rar</code> which contains early RVL discs containing software setup. Decrypting the one named <code>BackToolForSys1_64_US_RC1_1.gcm</code> was a very confusing task.<br/><br/>
To start, the first <code>0x8000</code> bytes of the disc had to be stripped with <code>dd</code>. Next, WiiScrubber was used to extract files using the NDEV common key. Hilariously enough, the NDEV common key is really hard to find. Next, I had to generate the Korean common key, otherwise WiiScrubber would throw a fit. But with all of that in place, I was able to extract the various WADs inside of this disc. The WADs then needed to be resigned using the RVL common key.<br/><br/>

<code>systemmenu.rvl.255.9.us.wad</code> is a WAD that contains a barebones disc loader as the Wii System Menu. Likely commonly used on a bunch of later NDEV units as development progressed.<br/>
<img src="/assets/img/blog/gigaleak/systemmenu1.png"><br/><br/>

<code>systemmenu.rvl.wad</code> is a way more interesting file though, especially since it's much bigger. It contains Wii System Menu 1.0 RC1. This version of Wii System Menu only boots if the Z Button on GameCube controller port 4 is held down on startup.<br/>
</p>
<video class="interruptVideo" width="836" height="456" controls>
<source src="/assets/vid/systemmenu-rc1.webm" type="video/webm">
<br/>
<span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
</video><br/><br/>
<p>
The other disc in <code>NUP.rar</code> is callde <code>swupdate2_SDK2.2.gcm</code> and it contains a <code>systemmenu.rvl.104.wad</code>. This appears to be a prerelease NDEV system menu that actully has a navigable menu.<br/>
<img src="/assets/img/blog/gigaleak/systemmenu104.png"><br/><br/>
</p>
<h2>Documents.7z</h2>
<p>
<code>Documents.7z</code> was a file that contained a lot of security-related documents and also proof of the existence of Nintendo Ninjas.<br/><br/>
<code>CTR</code> is a folder that contains many, many screenshots of the 32c3 conference, which had a talk from derrek, plutoo, and smealum about hacking the Nintendo 3DS.<br/>
<img width="240px" src="/assets/img/blog/gigaleak/32c3/0009.png">
<img width="240px" src="/assets/img/blog/gigaleak/32c3/0142.png">
<img width="240px" src="/assets/img/blog/gigaleak/32c3/0383.png"><br/><br/>

<code>セキュリティチーム運営/プロジェクト/コードレビュー/データ書込みソフト_セキュリティホール確認用_20140509/CTR_TRIAL</code> contains the source code to a version of CTRAging from 2014, but that date signals that it's possibly a version made for the New Nintendo 3DS family of systems.<br/><br/>

<code>セキュリティチーム運営/セキュリティ仕様書/XBOX360</code> contains a few documents that Nintendo wrote about the Xbox 360's security model, perhaps using some of it as a reference for security on the Nintendo Switch? The files are dated 2013, which was after the release of the Nintendo 3DS and Wii U, but still, likely means something.<br/><br/>

While I won't be showing any Nintendo Switch stuff,<br/><code>セキュリティチーム運営/プロジェクト/NewSwitch/on_the_rotor_head.jpg</code> has... this?<br/>
</p>
<img width="768px" src="/assets/img/blog/gigaleak/on_the_rotor_head.jpg"><br/>
<p>
I'm sure this image will be extremely important to hackers.<br/><br/>

In 2013, Nintendo hired a private investigator to profile Neimod, who at the time was a prolific Nintendo 3DS hacker discovering hardware and software exploits for homebrew access. This investigation ultimately led to the "Belgian Waffle" Knock & Talk initiative.<br/><br/>
<code>セキュリティチーム運営/プロジェクト/Knock_And_Talk_directcnotact</code> contains the documentation.<br/><br/>

Day 1: Tuesday, July 16, 2013<br/>
Knock & Talk team assembled the strategy room in Belgium, and they rehearsed their dialogue to recite to Neimod at his door. They all proceeded to discuss potential outcomes.<br/><br/>

Day 2: Wednesday, July 17, 2013<br/>
The team set up their monitoring equipment and positioned themselves at a Café nearby and waited for Neimod to leave his workplace and arrive home, to which he was promptly confronted. Introductions were made to both Neimod and his parents, and Neimod agreed to discuss in the backyard garden. Neimod ultimately agreed to signing an NDA, lest Nintendo take legal action against him. For the settlement agreement, there was hesitation and Neimod would call later that evening to indicate interest in committing to the settlement's terms.<br/><br/>

Day 3: Thursday, July 18, 2013<br/>
Nintendo of America and NERD began discussing with Neimod about potential "missions," which Neimod was interested in. One such named mission was reverse engineering and analysis of Gateway3DS flashcarts.<br/><br/>

Hilariously, one of Nintendo's biggest objectives was avoiding negative PR, a thing that... hasn't really held up very well. Taking down emulation and fan projects, making a crappy emulation service, Super Mario 3D All-Stars, like I don't think that PR for Nintendo has been very great these past several years, but I digress.<br/>
<img src="/assets/img/blog/gigaleak/knt_neg_pr.png"><br/><br/>

Their next steps were to build profiles and target people such as Yellows8, marcan, and GeoHot. They needed to profile, identify, and classify each of their targets.<br/><br/>
They also had what they dubbed the "Hearts & Minds" initiative, which entailed them leveraging Neimod's Knock & Talk to influence hackers. Perhaps even providing a hacker bounty program for the sake of providing positive PR.<br/><br/>

They also built a profile on smealum but I'm not sure if anything really came of it.<br/>
<img src="/assets/img/blog/gigaleak/knt_ssspwn.png"><br/><br/>

Now, this type of behavior shouldn't exactly be news to anyone. Not only is it perfectly legal, but many other companies do it. Sleep well on that. >:3c<br/><br/>

At the root of <code>Documents.7z</code> are some Windows BitLocker keys. Have fun with that.<br/><br/>
</p>
<h2>t210_t214_brom.7z</h2>
<p>
Won't go too in-depth here, but this file, released on Christmas Eve of 2020, contained the source code to the T210 "Erista" and T214 "Mariko" Tegra boot ROMs.<br/><br/>
T210 is dated February 1st, 2018 and T214 is dated May 24, 2018. I'm not entirely sure if the Erista ROM is the patched variant or not.<br/><br/>
NVIDIA absolutely shafted Nintendo to hell and back with their broken ROM image.<br/>
<img src="/assets/img/blog/gigaleak/torvalds.png"><br/><br/>
</p>
<h2>bb2.7z</h2>
<p>
Part of the unexpected 2021 leak, <code>bb2.7z</code> contained files relating to an unreleased "BroadOn Board 2," which would be a Chinese GameCube with DVD playback support.<br/><br/>
<code>sw/nintendo/GC_IPL</code> contains, you guessed it, the source code to the GameCube IPL, both bootstages too. There's <code>BS1</code> which is written in assembly, and <code>BS2</code> which is written in C.<br/><br/>
<code>sw/nintendo/X86/bin/</code> contains a few server executables, one of interest was <code>DVDServer.exe</code>.<br/>
<img src="/assets/img/blog/gigaleak/dvdserver.png"><br/><br/>
My guess was that this tool was used for some kind of development disc drive emulator that would communicate over the network to retrieve data.<br/><br/>

<code>doc/</code> contains the documentation for the BB2.<br/><br/>

Something interesting is all of this documentation on an "ALi SoC," the ALi M3358 which was a heavily modified M3357. Supposedly this chip would the glue that holds all of this stuff together for the BB2.<br/>
<img src="/assets/img/blog/gigaleak/bb2-block.gif"><br/><br/>

<code>doc/marketing/BB2-MRD.doc</code> goes into detail about who the BB2 would target.<br/>
<img src="/assets/img/blog/gigaleak/bb2-doc.png"><br/><br/>

The ALi T-Square chips that BroadOn had requested were all "Networked DVD Multimedia Processor" chips, which were MIPS32 chips that came with a DSP, designed for handling things like DVD playback. The M3358 would be contained inside an MCM (Multi-Chip Module) that contained other components like a SEPROM, an A/V Mux, and other components.<br/>
</p>
<img width="768px" src="/assets/img/blog/gigaleak/bb2-overview.png"><br/><br/>
<p>
<code>doc/system_hw/mechanical/bb_2_f_r_panel.vsd</code> contains engineering drawings for the physical case.<br/>
<img src="/assets/img/blog/gigaleak/bb2-shell.png"><br/><br/>
</p>
<h2>teru-sama_mail_2006.7z</h2>
<p>
<code>teru-sama_mail_2006.7z</code> is a 2006 copy of the mail inbox of a Nintendo employee by the name of Teruki Murakawa. The mail export can be viewed in a program called "HidemaruMail."<br/>
</p>
<img width="768px" src="/assets/img/blog/gigaleak/teru_sama1.png"><br/><br/>
<p>
I cannot read Japanese, but here's a few interesting things about it, by no means all of it, but a few things that I was able to spot:<br/>
- Comparison between PSP and NDS wireless capabilities<br/>
- Discussion of Nintendo DS homebrew<br/>
- Comparison of prices between Apple products and Nintendo (proof that Nintendo was kinda going for Apple vibes for a while around that time?)<br/>
- Talks about XaviX using Jackie Chan in promotional materal for the XaviXPORT.<br/>
- PlayStation 3 discussions<br/>
- Talks between Nintendo and Metrowerks about CodeWarrior<br/>
- Ensata emulator discussion<br/>
- Emails and documents from NoA and NoK<br/>
- Nintendo Wii E3 prep?<br/>
- Wii Virtual Console Lot Checks<br/>
- Stuff related to handheld GameCube (NNGC)?<br/>
- Spam<br/>
- Lots and lots of emails between Intelligent Systems and Nintendo of Japan<br/>

<br/>

Some of that Wii VC lot check stuff is interesting. Nintendo of Europe seemingly handled lotchecks of those titles and would give feedback like this:<br/>
<img src="/assets/img/blog/gigaleak/wii_lotcheck.png"><br/><br/>
</p>
<h2>Final Thoughts</h2>
<p>
- Internally, Nintendo was still using SVN for the longest time, maybe even up until the Wii U.<br/>
- Nintendo really likes using source code from their previous machines in their new hardware. It's a known fact that the Nintendo Switch's OS is based on Horizon from the Nintendo 3DS.<br/>
- Nintendo likely has digital backups of nearly everything they ever made, especially when it comes to game ROMs.<br/>
- Nintendo is really, really good about using original assets in their own projects, but it's not uncommon for them to contract other developers and that's where you get silly moments like Super Mario Maker using contents from The Spriter's Resource.<br/>
- We likely won't ever get verilog files of the Nintendo 3DS.<br/>
- Nintendo hardware always had the marketing vibe of "this crap is pure freakin' magic." It's rather refreshing to see documentation that "No, actually. Nintendo is no different from literally any other electronics vendor."<br/>
- Why did they design the Wii around using so many versions of IOS?<br/>
- The hell kind of URL is <code>http://source/cgi-bin/cvsweb.cgi</code>?<br/>
- NVIDIA not only regularly screws over Linux consumers but also screwed over pretty much everyone that used a Tegra T210.<br/>
- Nintendo is genuinely freaking huge.<br/>
</p>
<br/>
<h2>Notes and Credits</h2>
- Rare Gaming Dump<br/>
- RetroReversing<br/>
- Beta64<br/>
- CrashOveride95<br/>
- MrCheeze<br/>
- TCRF<br/>
- ecumber95<br/>
<br/>
<video width="836" height="456" controls autoplay muted loop>
<source src="/assets/vid/escape_noj.webm" type="video/webm">
</video>


<?php

echo constructPageFooter();

?>

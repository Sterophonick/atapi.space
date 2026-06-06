<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Prelude</a></li>
        <li><a href="#p2">The Parts</a></li>
        <li><a href="#p3">Assembly</a></li>
        <li><a href="#p4">The Dump</a></li>
        <li><a href="#p5">Postmortem</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Elmo's Big Discoveries in Cartridge Dumping");

?>

<h2><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Elmo's Big Discoveries in Cartridge Dumping</h2>
<p>Also known as: Atapi Skimps Out.<br/></p><br/>
<p>
June 5, 2026<br/>
Category: Project<br/>
</p>
<br />
<p id="p1">
Sorry for no blogs for the last while, came down with Peggle Fever.<br/><br/>

If you've been around me before, you might be acutely aware of a console known as the <i>V.Smile</i>, an edutainment machine that released in 2004, complete with bright colors, an adaptable paw-shaped controller, and a bunch of games featuring recognizable characters such as Elmo or Spider-Man, all teaching subjects such as math, problem-solving, shapes, colors, you get the idea. While the machine isn't particularly spectacular, I'd say it's a mile over giving a kid an iPad and telling them to run free on YouTube Kids for a few hours.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/vsmile1.jpg"><br/>
<small>I wanna turn that controller into an fightstick for Arcade emulation.</small><br/>
<br/>

<p>Anyway, I'm not really here to review the V.Smile itself, rather I am here to talk about fun and interesting stuff I did with one of its games.</p><br/>

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
    To get the board firmware and dump instructions, you have to email Team-Europe to request them. Not really a big deal, I don't think this was designed as an open-source project for public use, it's much more niche.
</p>
<img loading="lazy" src="/assets/img/blog/elmobd/files1.png"><br/><br/>

<p>
    So, here's what you get. The firmware files, a program called "CoolTerm," and the instructions. There are versions of the firmware for 230400 baud on the V5 board, the one I built, and 115200/230400 baud for the V6 board, which has surface mount components and more cartridge slots. I flashed the V5 230400 baud firmware with <code>avrdude</code>.
</p>
<img loading="lazy" src="/assets/img/blog/elmobd/files2.png"><br/><br/>

<p>The <code>CoolTerm</code> folder is where the magic happens. <a href="https://freeware.the-meiers.org/">CoolTerm</a> is a terminal program that connects to a serial port for data transmission, but its big feature is the ability to export data as a raw <code>.txt</code> file via its configuration.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/coolterm1.png"><br/><br/>

<p>The instructions say to do as follows:</p>

<div style="display: inline-block; margin:auto; text-align: left;">
    <ol>
        <li>Attach your cartridge to the slot.</li>
        <li>Attach the Arduino to the PC.</li>
        <li>Use <code>devmgmt.msc</code> to determine the COM port the Arduino is exposed at.</li>
        <li>Edit the <code>.stc</code> file of your chosen Baudrate to point to your COM port.</li>
        <li>Open CoolTerm, load the <code>.stc</code> config file.</li>
        <li>Press CTRL+R to direct a TXT document to capture data to.</li>
        <li>Disconnect the Arduino.</li>
        <li>Connect the Arduino, and within 1-2 seconds, hit the <code>Connect</code> button in CoolTerm. There will be a delay before data starts being transferred, but the Arduino will just start spitting the ROM contents out with no user input.</li>
    </ol>
</div>

<p>...doesn't seem like the most intuitive means of operation, but whatever, I'll play by your rules.<br/><br/>For dumping V.Smile cartridges, the switches need to be in the following positions:</p>
<div style="display: inline-block; margin:auto; text-align: left;">
    <ul>
        <li>Voltage: 3V</li>
        <li>Bits: 16</li>
        <li>ROM Size: 8MB</li>
        <li>V.Smile-CS2: L</li>
    </ul>
</div>

<p>That last switch is particularly interesting, since there were a very small handful of V.Smile cartridges that had two 8MiB ROMs, creating a total of 16 MB. That sets the second chip select line high or low to set what ROM you want active, so if you're dumping a 16 MiB game you'd stitch together the two 8 MiB dumps, one for the low ROM and one for the high ROM. Neat little trick.</p><br/>

<p>One problem: I am a chronic Linux user. The only version of this program that is provided is for Windows, but I do know that Wine is capable of passing through serial devices to the guest Win32 sandbox as a COM device. Surely enough, <code>COM33</code> appears as a link to <code>/dev/ttyUSB0</code> for our clone Arduino board.</p><br/>

<p>So, following the instructions, I plug my cartridge into the shield, and initiate the transfer.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/shield2.jpg"><br/><br/>

<p>Quick tangent, I love how I don't have to disassemble the cartridge to put it in here, i can just shove it in, it's real nice.</p><br/>

<p>Anyway, reading out the data and woahaohhhhhh, that does not look like machine code in the slightest.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/coolterm2.png"><br/><br/>

<p>In fact, numerous things appear to be wrong with how this configuration is transferring data. This dump is just plain garbage data.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex1.png"><br/><br/>

<p>The hell? I did everything right, what kind of dump is this? I try again, more garbage data. Check my solder connections, nothing is amiss here, no bridges, no cold joints, everything is good. In fact, some of these dumps vary in size as well. One came out to 8346358 bytes instead of the intended 8388608 bytes. Huh?????</p><br/>

<p>Cue an embarrassing amount of troubleshooting, numerous things tried. Trying the V6 board firmware produced no good results (as expected), trying raw capture with <code>grabserial</code> mixed with some Unix pipes yields no change in the behavior, and I ultimately wind up asking Team-Europe for any pointers. In our conversation they point out how Chinese clone boards could potentially have issues with their baudrate, usually being a maximum of 115200 baud. I do not have a V5 firmware that is this speed. Lovely.</p><br/>

<p>As a hailmary, I switch over to Windows to perform my dumps. Funny story, I have not used this Windows partition in months and months. It is slow and unbearable to use in this state because Windows wants to auto-update at all times. My graphics drivers are repeatedly being reset during my attempts. So I leave it alone and let it settle for like 30 minutes.<br/><br/>Come back and try a dump, and I get three different dumps, all of different sizes, within roughly 4K of each other.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex2.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex3.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex4.png"><br/><br/>

<p>Yeah, man. I guess.<br/><br/>Not is the dump inconssistent, but the data lines are being given stuff that otherwise doesn't exist in the physical ROM glob top. The first 64K of all V.Smile games is supposed to be zeroed out for some reason.</p><br/>

<p>At this point, it's gotta be the Arduino clone. Defeatedly, I go and drop the extra money on a genuine Arduino Mega 2560 complete with its chunky USB Type-B connector and all. And now we wait.<br/><br/>

In the meantime, I'm screwing with the carts again, and notice something so unbelievably stupid.<br/><br/>Let's play a game. Can you spot what's wrong with this image?</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/bad_alignment.jpg"><br/><br/>

<p>If you guessed "the cartridge is misaligned," then congratulations! You are correct! There is a considerable amount of wiggle room for the PCB to move side to side. I didn't realize this, like at all until this moment. But that is basically the entire reason as to why I'm reading bad data. address and data lines were overlapping and returning just plain garbage to the Arduino.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/bad_alignment2.jpg"><br/><br/>

<p>So, now is the part where I disassemble my Elmo cartridge to ensure that I can get the pins correctly aligned for the dump. Here's the PCB for documentation's sake.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/elmo_pcb.jpg"><br/>
<small>(The PCB in the previous photos is a different game)</small><br/><br/>

<p>My <i>real</i> Arduino board arrives and I quickly give it its new hat.</p>
<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/new_duino.jpg"><br/><br/>

<p>Attempting the dump back in Linux once more, and the combination of ensuring the cartridge alignment and... <b><i>holy crap</b></i>.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/coolterm_wine_good.png"><br/><br/>

<p>Just like that, we start getting good data... and then we don't. The dump still doesnt't boot in MAME at all. A few attempts later and I get a dump that <i>does</i> boot but it's corrupted and crashes when playing the intro sequence.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/bad_dump_mame.png"><br/><br/>

<p>This attempt was 256 bytes too short, but it ends very similarly to the good German and French dumps. It ends at <code>7FFEFFh</code> instead of <code>7FFFFFh</code>. WHY???<br/><br/>

At this point, I'm losing my mind. Is it Wine? Does Wine struggle with capturing serial data like this? I have no idea. So off to Windows-land we go once again. And more updates that interrupt the dump attempts causing shortened files. BUT.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/coolterm_win1.png"><br/><br/>

<p>The data ends with the correct terminating bytes, and it comes to the correct size of 8388608 bytes. The MD5 hash is <code>06efb73eac8f5e5ef2c009ff788ffefc</code>. Repeat the dump, we get the same hash. Once more, same hash.<br/><br/>

Ladies and fricks, we got it.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/good_dump_mame.png"><br/><br/>

<p>From here, I opened a <a href="https://github.com/mamedev/mame/pull/15433">pull request</a> for the MAME software lists and eventually uploaded the file to here, and that's really it. That's the funny Elmo game finally preserved. We can all go home to our families.</p><br/>

<h2 id="p5">Postmortem: Serial Program Troubleshooting</h2>
<p>
    Just kidding, there's more.<br/><br/>
    
    You know that part where I used CoolTerm in Wine? Well, I learned in the process of this project that this program does indeed have a Linux version, but I ultimately stuck with the Windows version to establish a "known-good" result for using this dumper.<br/><br/>
    
    CoolTerm does have Linux versions, easily installable using the <a href="https://aur.archlinux.org/packages/coolterm-bin"><code>coolterm-bin</code></a> package on the AUR, but the official .zip archive on the website works too.<br/><br/>
    
    So, since we now know how this program works, let's give the Linux version a spin. All that needs to be done is to change the serial device path in the <code>.stc</code> config file to point to the block device, in my case being <code>/dev/ttyACM0</code>.<br/><br/>
    
    Booting it up, following the other instructions, and it seems to capture data fine. Look at the bottom status bar, we've captured about 3 MiB thus far in this screenshot.
</p>
<img loading="lazy" src="/assets/img/blog/elmobd/coolterm_linux1.png"><br/><br/>

<p>The big problem here is that it doesn't save the whole file. For whatever reason it's much, much slower to update the destination file. So what is reported as a full 8388608-byte capture has the final hundred kilobytes completely missing for some reason. It's progress but it saves an incomplete file, making it more or less useless to me. This dump, while the entire rest of it is a good dump, doesn't boot at all in MAME.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/file_details.png"><br/><br/>

<p>Of course, we're doing just a raw serial capture, and the Arduino itself appears to stop transmitting any data when it reaches the end of the ROM, so we can probably get away with some more "Unixy" tools like <code>stty</code>.<br/>

So, as a test I used <code>stty</code> to configure the port as a 230400 baud port, used <code>cat</code> to directly echo data from the serial port, and then forward it to a binary file.</p>
<img loading="lazy" src="/assets/img/blog/elmobd/stty1.png"><br/><br/>

<p>Wait the six or so minutes for the dump to complete and...</p>
<img loading="lazy" src="/assets/img/blog/elmobd/good_hash_stty.png"><br/><br/>

<p>Great. Alright, fantastic. I didn't have to use Windows after all. I'm not mad. Please don't put it in the newspaper that I got mad.</p><br/>

<p>And now, as a funny present, I offer you some of the interesting patterns that came up in all of my failed dumps.<p>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex6.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex7.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex8.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex9.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex10.png"><br/>
<img loading="lazy" src="/assets/img/blog/elmobd/imhex11.png"><br/>

<br/>

<p>Special greetz go to Team-Europe for developing this cartridge dumper, Segher Boessenkool for writing the first SPG emulator, as well the MAME team for their work on perfecting emulation of SunPlus SPG and other u'nSP-based SoCs, without which this project would not have been possible.</p><br/>

<img loading="lazy" width="720px" src="/assets/img/blog/elmobd/deck.jpg">

<?php

echo printBlogSig();
echo constructPageFooter();

?>

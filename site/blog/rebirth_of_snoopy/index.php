<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Rebirth of SNOOPY");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Rebirth of SNOOPY</h1>
<p style="margin-top: -25px;">Dumb and Dumber<br/></p><br/>
<p>
July 24, 2025<br/>
Category: Infodump<br/>
<span style="color: yellow">
Content Warning // Language
</span>
</p>
<br />

<h2>The Disk Image</h2>
<p>
    As wee one, my main computer was a Dell Dimension 4550 running Windows XP Service Pack 3. It was a hand-me-down from my dad, who, somewhere between 2010 and 2011, upgraded to a machine running Windows 7. It came with an Intel Pentium 4 SL6S2 operating at 2524 MHz, 1 GB of RAM, a 60 GB hard disk with a 250GB secondary drive, an NVIDIA GeForce 6200, and a SoundBlaster Audigy 2 ZS.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/machine.jpg"><br/><br/>

    In 2020, I had to recycle the machine to make some space in my room, however not before I made a complete copy of the surface of the main hard disk, and copied all of the files on the secondary disk. The hope was to maybe, one day, virtualize the machine in a way where everything would be accessible, exactly as it was before recycling. A time capsule of random crap I did as a little babyshit.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/copying.jpg"><br/><br/>

    That was, of course, five years ago. Recently, I got bored during a rather uneventful drive home, and had already downloaded the image to my lappy, and so I had the idea to start trying to virtualize the old disk image.<br/><br/>

    Information on this type of thing is scarce, much of it being old and straight-up not being applicable to Linux users. Above all else, you have to just. Fuck around until you find out.<br/><br/>
</p>

<br/>

<h2>Raw Boot</h2>
<p>
    The first thing that I tried was to just, create a new virtual machine and mount the image. In QEMU/KVM, I created the VM and mounted the disk image as IDE. Try a boot and....<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/bsod1.png"><br/><br/>

    Well... dammit.<br/><br/>

    Apparently, Windows XP is very finicky about IDE controllers, and if you replace your motherboard, it throws an <code>INACCESSIBLE_BOOT_DEVICE</code> tantrum because it only loads chipset drivers related to the original installation. Problem is, <i>we don't have the original machine</i>.<br/><br/>

    So, to the web forums we go.<br/><br/>
</p>

<br/>

<h2>MergeIDE</h2>
<p>
    At the start of my search, I came across this name over and over.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/forum1.png"><br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/forum2.png"><br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/forum3.png"><br/><br/>

    "MergeIDE." I find a link to this utility on the VirtualBox forums, and this is what I'm presented with.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/mergeide1.png"><br/><br/>

    ...a batch file and a registry key. Lovely. All of the forums mention that you have to execute this script <i>before</i> you make a copy of the disk, which I of course never did because I never had any clue about what would need to be done to get this to work, all I did was take a snapshot of the disk as-is.<br/><br/>

    I needed to figure out a way to inject the registry changes manually to a disk image of a long-dead Windows machine.<br/><br/>

    First idea was to just mount the disk image raw. One problem though.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/mount1.png"><br/><br/>

    It doesn't mount as-is. At first I though the disk image was straight-up corrupted, but then I had the idea of booting a GParted ISO inside of the machine, went and fetched an old i686 variant of it, and would you believe it, the disk is fine. It just has two partitions.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/gparted.png"><br/><br/>

    Presumably, the first one was just an old Dell utility used for something, I dunno.<br/><br/>

    But that makes actually mounting it more complicated, but there's a Linux utility called <code>partx</code> that can mount disk images with each partition being its own loop device, and so that's what I did.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/partx.png"><br/><br/>

    This would mount the partitions at <code>/dev/loop0p1</code> and <code>/dev/loop0p2</code> respectively, so I could directly access the data on our NTFS partiton.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/dumb1.png"><br/><br/>

    The <code>chntpw</code> package in Arch Linux gives us tools to reset Windows NT passwords and edit the registry, and the command <code>reged</code> allows us to apply a <code>.reg</code> file to our Windows registry hive files.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/reged.png"><br/><br/>

    This did not fix the problem, and after closing the loop devices, the machine would still bluescreen when attempting to boot.<br/><br/>

    Some more searching around led to <a href="https://github.com/jakobadam/kvm-mergeide/blob/master/kvm-mergeide.sh">this script</a>, which uses the <code>virt-win-reg</code> command installed from <code>guestfs-tools</code>.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/virt-win-reg.png"><br/><br/>

    This command took a long time, but it did complete successfully. It still did not fix the freaking problem.<br/><br/>

    At this point, I'm starting to lose my mind, I even tried other tools like <code>hivexsh</code> on the registy hive files. This ALSO did not work.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/hivexsh.png"><br/><br/>

    So, it was time to take a break, regroup, and take a different approach.<br/><br/>
</p>

<br/>

<h2>Disk2VHD</h2>
<p>
    Disk2VHD was another name that repeatedly came up, as well as in a YouTube tutorial. It's a tool from SysInternals that's now under Microsoft, used to make a VHD image out of a physical disk on a Windows machine. This next approach unfortunately meant I needed to create a new Windows virtual machine in order to do it.<br/><br/>

    Begrudginly, I downloaded the ISO image of 10, opened VMware Workstation, and got to work. Before long, I had a working Windows 10 box created just for this purpose.<br/><br/>

    One problem though.<br/>
    <i><b><u>IT RAN HORRIBLY!</u></b></i><br/><br/>

    And not in the "my laptop can't virtualize Windows" way, it was in the "Windows is actively deadlocking with this disk image attached" way. Like, okay. I had to get to <code>diskmgmt.msc</code> in order to resize my NTFS partiton so that I had space to make the VHD from the whole disk image, and it hung at "Connecting to Virtual Disk Service" for fifteen minutes!! Windows Explorer would take several minutes to even start up! Windows would spend several minutes running <code>chkdsk</code> on the disk image on every boot and just not do anything to it!<br/><br/>

    Hough.<br/><br/>

    So, I detach the image, which lets me boot and operate normally. I resize my partiton, before reattaching the disk image and booting Disk2VHD. Unfortunately, in VMware Workstation, it would just hang at "Calculating disk sizes" forever, so that ended up being a complete bust.
    <img src="/assets/img/blog/rebirth_of_snoopy/disk2vhd1.png"><br/><br/>

    My next idea is to try to use it with QEMU/KVM, so I reinstall Windows again, and QEMU shows many of the same issues.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/qemu1.png"><br/><br/>

    This time, however, the disk actually is able to start copying, which, FINALLY, some progress.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/disk2vhd2.png"><br/><br/>

    The process actually does succeed, and then I am met with the issue of actually extracting the new image from the virtual machine. Thankfully though, <code>qemu-full</code> has tools to interface disk images with the Linux <code>nbd</code> module to host block devices over a local network.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/nbd0.png"><br/><br/>

    Mount these new <code>/dev/nbdX</code> devices and Bob's your uncle.<br/><br/>

    Go to boot the new image and...<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/no_bootable.png"><br/><br/>

    ...<br/><br/>

    <img width="400px" src="/assets/img/blog/rebirth_of_snoopy/battery_acid.png"><br/><br/>

    So more digging it is.<br/><br/>
</p>

<br/>

<h2>Hiren's BootCD</h2>
<p>
    More and more digging on page 2, 3 even of Google (I know, the depths) leads me to <a href="https://superuser.com/questions/1741848/im-using-disk2vhd-and-virtualbox-how-do-i-disable-windows-xp-ide-checks-so-tha">this thread</a> on Super User. The user has the exact same problem as I do, with nearly identical error codes. The first response tells me what I've already tried and failed to do, but the second response, the one -1 points, shows me something new. "Hiren's BootCD," specifically old versions that contain a script called <code>fix_hdc.cmd</code>.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/superuser.png"><br/><br/>

    The blue link led me to version 15.2 of the suite, which reportedly has this script, and so, in I go.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/hiren1.png"><br/><br/>

    After a bit of clumsy poking around, I boot the "Mini Windows XP" environment, and am greeted with some interesting things of note. For starters, there is a RAM drive mounted at <code>B:\</code> and the actual Windows installation here is located in <code>X:\I386\</code>. Out actual operating system drive gets mounted to <code>C:\</code>.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/hiren2.png"><br/><br/>

    The environment comes with a little program launcher, and sure enough, the "Registry" section contains <code>fix_hdc.cmd</code><br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/hiren3.png"><br/><br/>

    I launch the script, and am met with a command prompt asking to fix the MassStorage drivers, set the root, or exit.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/hiren4.png"><br/><br/>

    I set the TargetRoot to <code>C:\WINDOWS</code> and execute the fix.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/hiren5.png"><br/><br/>

    And with that, it's time to reboot and cross my fingers. And...<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/winxp1.png"><br/><br/>

    <i><b><u>holy shit.</u></b></i><br/><br/><br/>
</p>

<h2>It's Alive!</h2>
<p>
    As expected, the machine required reactivation since it was operating on essentially a completely new configuration.<br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/winxp2.png"><br/><br/>

    I <i>could</i> call Microsoft support just for the bit, but I opted to use one of those newfangled Windows XP keygens.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/keygen.png"><br/><br/>

    After this, we're pretty much done! We unfortunately have no graphics acceleration, no sound, and no network, but the hard part of actually bringing the machine up has been completed. We can recreate the process in VMware Workstation or VirtualBox and get some proper acceleration with their DXVK drivers.<br/><br/>
    <img width="720px" src="/assets/img/blog/rebirth_of_snoopy/winxp3.jpg"><br/><br/>

    Now, if you'll excuse me, I have to go play my old copy of <i>Reader Rabbit: Learn to Read with Phonics</i>.<br/><br/>

    <img src="/assets/img/blog/rebirth_of_snoopy/2221.png"><br/><br/>
</p>
<?php

echo constructPageFooter();

?>

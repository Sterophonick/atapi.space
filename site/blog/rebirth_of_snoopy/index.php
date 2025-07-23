<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Rebirth of SNOOPY");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Rebirth of SNOOPY</h1>
<p style="margin-top: -25px;">Dumb and Dumber<br/></p><br/>
<p>
??? ??, 2025<br/>
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

    The package <code>chntpw</code> in Arch Linux gives us tools to reset Windows NT passwords and edit the registry, and the command <code>reged</code> allows us to apply a <code>.reg</code> file to our Windows registry hive files.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/reged.png"><br/><br/>

    This did not fix the problem, and after closing the loop devices, the machine would still bluescreen when attempting to boot.<br/><br/>

    Some more searching around led to <a href="https://github.com/jakobadam/kvm-mergeide/blob/master/kvm-mergeide.sh">this script</a>, which uses the <code>virt-win-reg</code> from <code>guestfs-tools</code>.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/virt-win-reg.png"><br/><br/>

    This command took a long time, but it did complete successfully. It still did not fix the freaking problem.<br/><br/>

    At this point, I'm starting to lose my mind, I even tried other tools like <code>hivexsh</code> on the registy hive files. This ALSO did not work.<br/>
    <img src="/assets/img/blog/rebirth_of_snoopy/hivexsh.png"><br/><br/>

    So, it was time to take a break, regroup, and take a different approach.<br/><br/>
</p>

<br/>

<h2>Disk2VHD</h2>
<p>
    Disk2VHD was another name that repeatedly came up, as well as in a YouTube tutorial. It's a tool from SysInternals that's now under Microsoft. It can be used to make a VHD image out of a physical disk on a Windows machine. This next approach unfortunately meant I needed to create a new Windows virtual machine in order to do it.<br/><br/>

    Begrudginly, I downloaded the ISO image, opened VMware Workstation, and got to work. Before long,
</p>

<?php

echo constructPageFooter();

?>

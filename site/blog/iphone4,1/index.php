<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p0">Prelude</a></li>
        <li><a href="#p1">Acqusition</a></li>
        <li><a href="#p2">Activation</a></li>
        <li><a href="#p3">Exploiting</a></li>
        <li><a href="#p4">The Rant</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: The Unholy Horror of the iPhone 4S");

?>

<h2><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> The Unholy Horror of the iPhone 4S</h2>
<p>I'm tired, boss.<br/></p><br/>
<p>
Oct 29, 2025<br/>
Category: Rant/Project<br/>
<span style="color: yellow">
Content Warning // Language (i'm lowkey pissed)
</span>
</p>
<br />
<p id="p0">
    I really thought I could do it. I really did.<br/><br/>
    
    A long time ago, back when I backed up SNOOPY, the old Windows XP desktop that i revived in a previous post, along came with it were a series of around, eh, a hundred or so IPA files that were backed up from iTunes. Most of these files are preserved, save for a couple of educational games that I had as a six-year-old. Such as this very epic and stupid arithmetic game called "Math Ninja."<br/>
    
    <?php
    generateYouTubeEmbed("qa0Ugs5Bzt4", 720, 405);
    ?><br/><br/>
    
    That's not where this story truly starts, though. It's a prelude to the real story of how an iPhone 4S brought me unimaginable pain and anguish that I'm not entirely sure I can put into words on my goofy website just how devastating it was for me, but I'm gonna try.<br/><br/>
</p><br/>

<h2 id="p1">Acquisition</h2>
<p>
    One of my friends from university is a lot like me, and she has a lot of random shit kinda just, lying around. One thing that caught my interest was one of two iPhone 4S units that she had from all the way back in the day. With no use for them, she reset a unit and I took it home to play with, hoping that I can relive some 15-years-ago memories of games like Dig Dug Remix and early Fruit Ninja.<br/><br/>
    
    I promptly went and bought a new 30-pin cable and a new battery from iFixIt, and within a few days, I had brought the machine to life.<br/>
</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone1.jpg" alt="The Lock Screen."><br/><br/>

<p>
    There are a few things I already knew about the device:
</p>
<span style="width: 70%; display: block; margin: auto; text-align: left">
    <ol>
        <li>It ran iOS 9.3.5</li>
        <li>Its former carrier was Sprint, which <a href="https://www.wired.com/story/t-mobile-sprint-merger-guide/">no longer exists</a>.</li>
        <li>16GB of Storage</li>
        <li>We have no SIM cards to use it with.</li>
    </ol>
</span>

<p>With that noted, this adventure begins.</p><br/>

</br>

<h2 id="p2">Activation</h2>
<p>
    The first big roadblock I ran into was the part where, I actually couldn't <i>use the device</i> because it mysteriously couldn't be "activated," whatever the hell that means. Apple has to "activate" every single device, what?<br/>
</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone2.jpg" alt="The activation message"><br/><br/>

<p>
    There's also no way out of this. It will sometimes show the homescreen, but it will immediately go back to the activation screen.<br/><br/>
</p>

<p>
    A bunch of searching through Reddit, and many many results come up, primarily saying that I need a properly working SIM card, but. HOW??? 3G was dominant in 2011 and 4G wouldn't be even remotely viable until a few years later, how am I supposed to find a 3G network to activate this?? <span style="font-size: 10pt">(Telecom nerds, I hear you, go to your room.)</span><br/><br/>
    
    And so I press on with more digging, and I arrive at these comments on r/LegacyJailbreak.<br/>
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/reddit1.png" alt="Comment 1: its a problem many are having currently. lets hope its fixed. Comment 2: Activation server for A5 and A6 devices got shut down.Try hacktivate it with Legacy ios kit."><br/><br/>

<p>
    Huh? <i><b>Everyone</b></i> is suddenly having this problem??? Was it intentional? Did they break something?<br/><br/>
    
    Up until this point, I'm starting to get annoyed. As a last resort, I booted a virtual machine and installed, *sigh*, iTunes. I hook up the phone, pass it to the VM, and boy, does iTunes detect it, and boy does it not do anything with it.<br/>
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/itunes1.png" alt="An empty iTunes window."><br/><br/>

<p>
    It just sits at this stupid blank screen for like, a couple of seconds before yelling at me about how it can't activate the fucking thing. Oh great. How joyous.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/itunes2.png" alt="iTunes failing me."><br/><br/>

What the fuck.<br/>
<img loading="lazy" src="/assets/img/gallery/zenith_iphone.png" alt="a drawing of my sona being crushed to death by the iPhone as he pleads and cris"><br/><br/>

<p>
    By this point, I'm genuinely going crazy, I'm actually getting pissed by this thing. I am in the TRENCHES against this piece of shit, and it is winning. More and more digging ensues. I come up with a <a href="https://www.reddit.com/r/LegacyJailbreak/comments/1mj4c5p/megathread_a5_and_a6_activation_discussion/">megathread on r/LegacyJailbreak.</a>
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/reddit3.png" alt="Update: u/LukeeGD believes that only devices with IMEI beginning with 9900 are currently affected by the issue. "><br/><br/>

<p>
I find <a href="https://www.reddit.com/r/LegacyJailbreak/comments/1o591n0/iphone_4s_936_activation_loop/">another post</a> corroborating this.<br/></p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/reddit2.png" alt="Edit: Legacy-iOS-Kit tells me that the IMEI starts with 9900, which is prone to activation loop. Is there any way to get around this issue "><br/><br/>

<p>
oh no oh no NO NO NO NO NO NO NO NO <br/><br/>

So I get home and check this against Legacy iOS Toolkit, which is a goofy command-line application for Linux. Sure enough,
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli1.png" alt="My phone's IMEI starts with 9900"><br/><br/>

<p>
    <i>*Deep Breath*</i><br/>
</p>

<img height="240px" style="float: right; margin-right: 20px; margin-top: 40px" loading="lazy" src="/assets/img/gallery/atapi_cry_death.png" alt="crying uncontrollably"><br/><br/>

<p style="font-size:30pt">
    AAAAAAAAAAAAAJSKDL;FJ A;SDLFIASDFKJDSF;GLKASU DFK;ASHD;FLKHASDFLHAS DLFJHASDFJHASDF/ASDF/ASIDFH
</p>

<br/>

<p>
    I'm losing my shit at this point. What a horrible set of circumstances that all just magically happened to align. An Apple A5 unit, with an IMEI that starts with <code>9900</code> and apparently devices with that specific IMEI range of all things are the ones having issues with their actiation servers???<br/><br/>
    
    At this point I read the <code>checkm8</code> section of the <a href="https://github.com/LukeZGD/Legacy-iOS-Kit/wiki/checkm8-a5">Legacy iOS Toolkit</a>, and I rush order that evil weird USB cable and a Raspberry Pi Pico, desperate for answers. But there's nothing more I can do from here, so I head off to bed to come back the next day.
</p>
<br/>

<h2 id="p3">Exploiting</h2>
<p>
    I make it through school the next day, coming home to find the parts having arrived. It was time.<br/><br/>
    
    Having written the payload to the RPi Pico, I turn the phone off, and force it into DFU mode, which on A5 SoC devices, is done by holding the power and home buttons for ten seconds and only releasing the power button after that. Eventually a USB device named <code>Apple Mobile Device (DFU Mode)</code> will be attached.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli2.png" alt="The DFU mode device."><br/><br/>
   
<p>
    Sleep with one eye open, bitch.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/iphone3.jpg" alt="The evil setup for glitching the SoC."><br/><br/>

<p>
    The microcontroller blinks rapidly for a few seconds before slowing down to a steady 1Hz pulse. At this point, the boot ROM has been pwned and we can use this state to do things like downgrade the firmware or directly manipulate the filesystem.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli3.png" alt="Legacy iOS toolkit showing we are pwned."><br/><br/>

<img loading="lazy" src="/assets/img/gallery/zenith_clueless.png" alt="CLUELESS"><br/><br/>

<p>
My first move is to downgrade to iOS 6.1.3, since I have a bit of nostalgia for its aesthetics.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli4.png" alt="Some of the console output from the downgrade"><br/><br/>

<p>If it couldn't be more obvious, I am infinitely clueless as to what I'm doing.</p><br/>

<p>I sit and wait a while, waiting for something to happen, when suddenly, the phone comes to life, with the legacy iOS logo.</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone4.jpg" alt="The legacy boot screen."><br/><br/>

<p>A few more minutes pass by, and the phone buzzes, before I'm greeted with this wonderful sight.</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone5.jpg" alt="The phone having booted to iOS 6."><br/><br/>

<p>Holy shit... aaaaaand, we still get activation issues.</p><br/>

<p>By this point, I had read a couple things about deleting an application called <code>setup.app</code> and a Reddit <a href="https://www.reddit.com/r/setupapp/comments/1f1znp7/comment/lkd3aq1/">comment</a> comes up about removing <br/><code>/mnt1/Applications/setup.app</code> using the SSH RAM Disk. So I go and do exactly that. I redo the exploit, and boot into the RAM disk.</p>

<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone6.jpg" alt="XNU Kernel Output"><br/><br/>

<p>Per the commenter, I go and move <code>setup.app</code> to a differnet spot.<br/>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli5.png" alt="Moving the setup.app out of the way."><br/><br/>

<p>But the <code>MobileGestalt</code> file is... nowhere to be found? Where the fuck is it?</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli6.png" alt="The file is missing but many others exist."><br/><br/>

<p>Whatever, I set that to the side, and reboot the phone. Lo and behold, we're in.<p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone7.jpg" alt="The iOS 6 home screen."><br/><br/>

<p>It even came with Cydia, so I head for that and set it up.</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone8.jpg" alt="Cydia setup."><br/><br/>

<p>So, we have a working barebones installation of iOS 6.1.3! It's pretty cool, I think, works exactly like I remember it working, and I even tested it with my own site!</p>
<img height="550px" loading="lazy" src="/assets/img/blog/iphone4,1/iphone9.jpg" alt="My site in Safari!"><br/><br/>

<p>But at this point, I hit a roadblock. How exactly do I get IPAs on this thing? If I head over to <code>Sideload IPA</code> in Legacy iOS Toolkit, it gives me a message about needing to be activated. Paradoxically, I got into this fucking mess because APPLE BROKE THEY OWN SHIIIIIIIIIIT</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli7.png" alt="You need to be activated to sideload."><br/><br/>

<img width="300px" loading="lazy" style="filter: drop-shadow(0 0 5px white);" src="/assets/img/gallery/zenthefox_frust.png"><br/><br/>

<p>
    Jesus Christ. Alright, let's <a href="https://github.com/LukeZGD/Legacy-iOS-Kit/wiki/Hacktivation">read the damn wiki</a>.<br/><br/>
    
    Jailbreak method. Apparently if I use the <code>Jailbreak Device</code> option and let it do its thing it unlocks another option in the <code>Useful Utilities</code> called <br/><code>Hacktivate Device</code>.<br/><br/>
    
    So I follow its instructions and do the thing.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli8.png" alt="Prep for the DFU jailbreak."><br/><br/>

<p>
    Would you FUCKING believe it, the option DOESN'T SHOW UP! And I even made sure to run the Jailbreak a second time, and sure enough, it prematurely exits because it was already performed.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli9.png" alt="No Hacktivate option."><br/><br/>

<p>
    In one instance, I was able to access the AppSync sideload menu, and I was able to select an IPA.
</p>
<img loading="lazy" src="/assets/img/blog/iphone4,1/cli10.png" alt="I'm given the option to select an IPA."><br/><br/>

<p>
    Can you imagine what it did instead?<br/>
    <code style="font-size:13pt">Could not start com.apple.mobile.installation_proxy: Service prohibited</code><br/><br/>
    
    <span style="font-size:40pt"> :) </span>
    
    <br/><br/>
    
    <img loading="lazy" src="/assets/img/blog/iphone4,1/reaction.png" alt="A weird drawing of my sona crying"><br/><br/>
    
</p><br/><br/>

<h2 id="p4">The Rant</h2>
<p>
    I'm broken. This device has broken me. I'm WORSE because I tried this. All I wanted to do was play stupid games from when I was but a babyshit, and the Ghost of Steve Jobs himself gave me a fat middle finger, threw rocks at me, preserved my bruised body in salt, and left me to die in a glue trap. Nothing I could ever find that I could perform either in SSH or in userland was capable of installing IPAs directly, they absolutely must be sideloaded and I can't do that when I can't activate the god. damn. device. And I probably wouldn't even be able to install the backed up IPAs anyway because they're tied to an Apple ID that uses an email address from an ISP that doesn't even offer that email domain anymore.<br/><br/>
    
    I knew Apple was bad with how anti-consumer and anti-preservation that their devices were, but holy shit, was this eye-opening. You certainly can use an Apple device without activation, but in addition to not being able to install anything, it will fight you, every step of the way, kicking and screaming and pissing on the floor.<br/><br/>
    
    The fact that this device and presumably millions and millions of other iOS devices are in similar predicaments is utterly bonkers. Devices that are destined to be e-waste and nothing more. This is not what we do. This is a bad way to use the computer. Don't do it.<br/><br/>
    
    What else is there for me to really do here? Hell if I know. Maybe one day Apple will fix the activation server, but I seriously doubt it. Until then or something insane happens, I'm left with a shiny vintage paperweight.<br/><br/>
    
    What a shame.<br/><br/>
    
    <a href="https://www.youtube.com/watch?v=aEv08Zzunfc"><img loading="lazy" src="/assets/img/gallery/pivot_jobs.png" alt="A drawing of my fursona getting scared to death by a possessed iPhone 4. It's possessed with the ghost of Steve Jobs and he's saying 'JAILBREAK MY PHONE'"></a><br/><br/>
    
    <small>
        Credits to the artists for drawing wonderful interpretations of my declining mental state:<br/>
        Zenith302<br/>
        Zen the Fox<br/>
        ParkerCC<br/>
        pivotman319<br/>
        myself<br/><br/>
        
        Credit to LukeZDG for creating Legacy iOS Toolkit<br/>
        Greetz to r/legacyjailbreak and r/setupapp<br/><br/>
        
        A big fuck you to Apple<br/>
        
    </small>
</p>

<?php

echo constructPageFooter();

?>

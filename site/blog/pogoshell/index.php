<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Introduction 2</a></li>
        <li><a href="#p2">The Tour</a></li>
        <li><a href="#p3">Configuration</a></li>
        <ul>
            <li><a href="#p3_1">Users</a></li>
        </ul>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: PogoShell-ening your Game Boy Advance");

?>

<h2><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> PogoShell-ening your Game Boy Advance</h2>
<p>I know this page is ugly and confusing, I will fix it sometime :) // Sasq<br/></p><br/>
<p>
?? ?, 202?<br/>
Category: Infodump<br/>
</p>
<br />
<h2 id="p1">Introduction 2</h2>
<p>
    So, you're all fine and dandy watching videos and listening to music on your fancy GBA Movie Player or your flashcard, but now you want to actually starting playing some games on those fancy cartridges you have that were made for playing games first and foremost. One problem though, the integrated loader for your cartridge is incredibly boring and has next to no features. Wouldn't it be nice to have a fancy shell that can start all your games, and maybe even also has some PDA features like music or photo viewing or text reading?
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/pogo0.png" alt="A screenshot of PogoShell 2.0 beta 4. We have dedicated emulation and media folders, as well as ROM images of Jazz Jackrabbit, DOOM, and WarioWare, Inc."><br/><br/>

<p>
    This is the thesis behind PogoShell, a flashcart shell for the Game Boy Advance, first released in 2002 from a developer by the name of Sasq. PogoShell's purpose was to allow for handling files in a little filesystem on your flashcard, as well as being an alternate, much nicer launcher in place of the scruffy, minimalist launcher that came with cartridges like the Flash2Advance and the EZF-Advance. File handling could be achieved by way of plugins, small programs that would be loaded by the shell that could take arguments stored in external work RAM. Plugins could range from all sorts of things like image viewers, emulators, music players, or other types of files. I'll come back to those here later, but first I'm gonna give a basic tour of everything, using PogoShell 2.0 beta 4, released in 2004.<br/><br/>
</p>

<br/>

<h2 id="p2">The Tour</h2>
<p>
    When you first download the package, you aren't really given many cues on what to do at first glance, all you're given is a <code>root</code> folder, some DOS batch scripts, and a few other folders, one of which having some documentation.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp0.png" alt="Windows XP explorer showing the main root of the PogoShell 2.0 folder. There are folders named docs, gfx, root, and tools, and there are batch scripts for building and testing your ROM."><br/><br/>

<p>
    The <code>docs/QUICKSTART</code> file gives us, well, exactly that. Some quick-start documentation to get us building our compilation ROM image quickly.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp1.png" alt="The quickstart document."><br/><br/>

<p>
    Usage of PogoShell is as follows,  we need to put our games and media inside of the <code>root</code> folder, organized however we like. From there, we can start the <code>build.bat</code> or <code>build_xrom.bat</code> scripts, depending on our cartridge. From there, our ROM image will be built and we can write it to our cartridge.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp2.png" alt="The command prompt building the ROM."><br/><br/>

<p>
    If we want to test our compilation ROM before we write it to our cartridge, we can use the <code>test.bat</code> script.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp3.png" alt="The VisualBoyAdvance environment."><br/><br/>

<p>
    Now, it just looks like VisualBoyAdvance-SDL, but this version has been specially modified to support the build of PogoShell made for XG-Flash and Visoly cartridges. As far as I can tell, this is the only emulator in existence to ever do something like this, and as a result, it allows us to launch our GBA games just like we would on hardware...
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp4.png" alt="The VisualBoyAdvance fork launching DOOM."><br/><br/>

<p>
    ...in theory. Here's the catch, I've only gotten it to work with just DOOM, everything else I tried crashes, probably some weird SRAM behavior or something, I don't really know, but let's continue the tour.<br/><br/>
    
    When you first boot PogoShell, you'll be met with a little About window, and three drives: <code>rom</code>, <code>sram</code>, and <code>cartroms</code>. 
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/pogo1.png" alt="The first boot screen showing our three drives."><br/><br/>

<p>
    <code>rom</code> is the filesystem inside the ROM image that we created using the build script, <code>sram</code> is the SRAM filesystem that PogoShell implements for supported cartridges (we'll talk about this later), and <code>cartroms</code> which shows just the Game Boy Advance-specific ROM images that are on your flashcart, and behavior of this will vary from cartridge to cartridge. In most cases though, it just shows them sorted by internal title.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/pogo2.png" alt="The cartroms drive with the three games I have on this cartridge."><br/><br/>

<p>
    If we press the Start Button, we get a little menu that lets us view a help window, change settings, change users, read the About text again, or "copy." As far as I can tell, the copy function only does something in the <code>sram</code> drive.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/pogo3.png" alt="The Start menu."><br/><br/>

<p>
    Here in the settings, we get a bunch of user experience options, like hiding known file extensions, asking before saving or loading, hiding dotfiles, sorting, stuff like that.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/pogo4.png" alt="The settings menu."><br/><br/>

<p>
    By and large, that's it for the "out of box experience," but let's take a look at the handful of features that the user could configure.
</p>

<br/>

<h2 id="p3">Configuration</h2>
<p>
    If you head over into <code>root/.shell</code> you'll spot a <code>pogo.cfg</code> file here, and this is where much of your configuration will take place.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp5.png" alt="The contents of the .shell folder."><br/><br/>

<h3 id="p3_1">Users</h2>
<p>
    If you scroll down a bit in <code>pogo.cfg</code> you'll find a section denoted <code>users</code>. The readme states that users can be ignored if you want, but users will be isolated to their own set of saves inside the SRAM filesystem, save for a couple of reserved UIDs, <code>0</code> being <code>root</code> and <code>100</code> being for <code>textreader</code>. <code>root</code> can see all saves, and <code>textreader</code> is restricted to just data used by the text reader inside of the shell. It's a neat feature, especially if you were someone with a little brother who liked to erase game saves a lot.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp6.png" alt="The users section of the pogo.cfg"><br/><br/>

<p>
To demonstrate, I'll create a set of users in the configuration.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp7.png" alt="Some users defined: Atapi, Pikachu, Isabelle, Mario, and Luigi."><br/><br/>

<p>
Then, we build our PogoShell ROM and can switch between the users freely.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/pogo5.png" alt="Our new users in the PogoShell settings menu."><br/><br/>

<p>
When we switch to a user, we will be sent to the page they were last visiting, but you'll notice that the saves are swapped out for those belonging to their respective user. Notice the text at the bottom of both screenshots here.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/photo0.jpg" alt="The single save belonging to Atapi."><img loading="lazy" src="/assets/img/blog/pogoshell/photo1.jpg" alt="The single save belonging to Pikachu."><br/><br/>

<?php

echo constructPageFooter();

?>

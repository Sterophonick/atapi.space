<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Introduction 2</a></li>
        <li><a href="#p2">The Tour</a></li>
        <li><a href="#p3">Configuration</a></li>
        <ul>
            <li><a href="#p3_1">Users</a></li>
            <li><a href="#p3_2">Themes</a></li>
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
    If you scroll down a bit in <code>pogo.cfg</code> you'll find a section denoted <code>users</code>. The readme states that users can be ignored if you want, but users will be isolated to their own set of saves inside the SRAM filesystem, save for a couple of reserved UIDs, <code>0</code> being <code>root</code> and <code>100</code> being for <code>textreader</code>. <code>root</code> can see all saves, and <code>textreader</code> is restricted to just data used by the text reader inside of the shell. It's a neat feature, especially if you were someone with a little brother who liked to erase game saves a lot, or you want more save files than a single game offered.
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
When we switch to a user, we will be sent to the page they were last visiting, but you'll notice that the saves are swapped out for those belonging to their respective user. Notice the text at the bottom of both photos here.
</p>
<img width="360px" loading="lazy" src="/assets/img/blog/pogoshell/photo0.jpg" alt="The single save belonging to Atapi."><img width="360px" loading="lazy" src="/assets/img/blog/pogoshell/photo1.jpg" alt="The single save belonging to Pikachu."><br/><br/>

<h3 id="p3_2">Themes</h2>
<p>
    So, I'm sure you've noticed the... rather garish design language present in this shell, not to mention the odd snail background we have going on here. It's nice and readable for a stock theme, but I think it's rather boring. Thankfully though, the shell is entirely themable, and there were a good deal of themes available for PogoShell back in the day, you could go and download them from forums, or you'd find them on people's websites.
</p>

<img loading="lazy" src="/assets/img/blog/pogoshell/theme0.jpg" alt="A spider-themed PogoShell config."><img loading="lazy" src="/assets/img/blog/pogoshell/theme2.png" alt="A theme with a black background and some cool red and blue gradients."><img loading="lazy" src="/assets/img/blog/pogoshell/theme1.png" alt="A pixel art Wind Waker theme."><br/><br/>

<p>
    Why don't we build our own?<br/><br/>
    
    If we head over to the <code>root/.shell/themes</code> folder, we can find a handful of files with the extension of <code>.theme</code>.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp8.png" alt="The default selection of themes."><br/><br/>

<p>
    PogoShell will always load the <code>default</code> theme file, and if we open it in Notepad...
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp9.png" alt="The contents of the theme file. It's plaintext configuration data."><br/><br/>

<p>That's a lot.</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/waos.png" alt="Waos.'"><br/><br/>

<p>
    Lucky for us, there is a user out there who created a GUI theme editor using .NET, supporting all of the parameters needed to construct a proper theme.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp10.png" alt="PogoShell Theme Editor v0.8"><br/><br/>

<p>
    PogoShell UI elements accept various parameters, allowing for flat colors, horizontal or vertical gradients, and you can even select a bitmap for each.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp11.png" alt="HRANGE, VRANGE, BEVEL, and BITMAP"><br/><br/>

<p>
    You can select a border size and colors for the elements. <code>COLOR0</code> is the color of the top and left outlines, and <code>COLOR1</code> is the color of the bottom and right outlines.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp12.png" alt="Outline options. Thickness, and options for top and bottom outlines."><br/><br/>

<p>
    Text options are here, too. Align options, margins, colors, font options, and at the bottom you get the option to select a bitmap if you chose <code>BITMAP</code> in the <code>STYLE</code> section.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp13.png" alt="Outline options. Thickness, and options for top and bottom outlines."><br/><br/>

<p>
    With all of that out of the way, here's me building a theme!
</p>
<span style="max-width: 720px;">
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp14.png" alt="Work-in-progress. The title bar, background, and status bar are correct."><img loading="lazy" src="/assets/img/blog/pogoshell/winxp15.png" alt="Pretty much complete now. The background is the red Mac OS 9 cats tiled background, and everything else has a dark blue spotty background with red outlines."><br/><br/>
</span>

<p>
    When we select <code>File > Create</code>, a new <code>root</code> folder is created in our PTE directory.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/winxp16.png" alt="The new root folder."><br/><br/>

<img loading="lazy" src="/assets/img/blog/pogoshell/winxp17.png" alt="The bitmaps and themes folder inside the root."><br/><img loading="lazy" src="/assets/img/blog/pogoshell/winxp18.png" alt="The bitmaps folder. There's a bg.bm, an icons.bm, and a weave.bm."><br/><img loading="lazy" src="/assets/img/blog/pogoshell/winxp19.png" alt="The themes folder. There's just a default.theme."><br/><br/>

<p>
    Once we import this into our PogoShell compilation's root folder, we can watch our theme in action!
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/pogo6.png" alt="Our theme in action, with the About message box."><br/>
<img loading="lazy" src="/assets/img/blog/pogoshell/pogo7.png" alt="Ditto, in the user selection menu."><br/><br/>

<p>
    In fact it even exposes a bug that causes some graphical corruption in the context menus. Forcing it to a solid color seemed to fix it.
</p>
<img loading="lazy" src="/assets/img/blog/pogoshell/pogo8.png" alt="Some minor corruption."><br/><br/>

<p>
    But with that, we're pretty much done with our theme. There are a couple more things to do such as making fonts and icons, but by and large, this is a complete theme!
</p>

<?php

echo constructPageFooter();

?>

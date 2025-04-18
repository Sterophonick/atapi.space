<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: Game Boy Advance :: Simple :: Skinning Guide");

?>

<h1>How to skin the Simple kernel for the EZ-Flash Omega family</h1>
<p>This is a step-by-step guide for skinning the Simple kernel for the EZ-Flash Omega family of Game Boy
Advance flashcarts. </p>
<p>This guide is made with users of Microsoft Windows in mind.</p>
<p>macOS and Linux users will have to follow their respective <a
href="https://devkitpro.org/wiki/Getting_Started">Getting Started</a> guide from devkitPro.</p>
<br />
<h2>Navigation</h2>
<div id="toc" class="toc">
<ul>
<li>
<a href="#Prerequisites">Prerequisites</a>
</li>
<li>
<a href="#InstallingDevKitPro">Step 1: Installing devkitPro</a>
</li>
<li>
<a href="#FetchingSourceCode">Step 2: Cloning the Source Code</a>
</li>
<li>
<a href="#Editing">Step 3: Editing the Data Files</a>
</li>
</ul>
</div>
<br />
<div id="content">
<h2 id="Prerequisites">Prerequisites</h2>
<p>
<a href="https://github.com/devkitPro/installer/releases">devkitPro</a><br />
<a href="https://www.coranac.com/projects/usenti/">Usenti</a><br />
Any text editor<br />
<a href="https://github.com/Sterophonick/SimpleLight">Simple</a> or <a
href="https://github.com/Sterophonick/omega-de-kernel">Simple-DE source code</a><br />
File Extensions enabled in Explorer<br />
A lot of patience<br />
<br />
<h2 id="InstallingDevKitPro">Step 1: Installing devkitPro</h2>
<h3 id="Installation">Installation</h3>
<p>Installing devkitPro will give you access to a suite of tools such as GCC that will allow you to
compile the source code of the kernel into a functioning binary that can be applied to your
flashcart.</p>
<p>First, go to the <a href="https://github.com/devkitPro/installer/releases">devkitPro releases
page</a> and download the "devkitProUpdater-3.0.3.exe" executable.</p>
<p>Once you run it (and satisfy Windows UAC), you will be greeted with a screen that looks something
like this:</p>
<img src="/assets/img/projects/gba/simple/guide_1.png">
<p>Click next, and select "Download and install/install from downloaded files," then, hit next again.
</p>
<img src="/assets/img/projects/gba/simple/guide_2.png">
<p>The "Keep downloaded files after install?" option is your choice. I would recommend removing the
downloaded files to save space.</p>
<p>Coming up next, we will see a screen that looks like this:</p>
<img src="/assets/img/projects/gba/simple/guide_3.png">
<p>Here, you'll notice that I have unchecked everything except for "GBA Development."<br />We are only
concerned about the Game Boy Advance here, but if you want to enable things like GameCube or 3DS
development, go ahead.</p>
<p>Up next, you'll be asked where you want to put the devkitPro installation.</p>
<img src="/assets/img/projects/gba/simple/guide_4.png">
<p>I always opt for "C:\devkitPro" but you can put it wherever you want, but make a note of where you
put it, it's important.</p>
<p>Create a Start Menu folder named "devkitPro" and hit "Install."</p>
<p>And now, watch as it does its magic.</p>
<img src="/assets/img/projects/gba/simple/guide_5.png">
<p>After it's completed, hit next, and you'll be asked if you want to donate to
devkitPro.<br />...please do!</p>
<br />

<h2 id="FetchingSourceCode">Step 2: Cloning the Source Code</h2>
<p>Without a copy of the source code for the kernel we want, we can't really do anything.</p>
<p>If your cartridge is the base model, look <a
href="https://github.com/Sterophonick/SimpleLight">here</a>.<br />If your cartridge is the
Definitive Edition, look <a
href="https://github.com/Sterophonick/omega-de-kernel">here</a>.<br />The process for fetching
the source code is the same between the two versions.</p>
<p>To actually download the source code in .ZIP format, you'll look here on the repository page:</p>
<img src="/assets/img/projects/gba/simple/guide_6.png">
<p>Once you have it downloaded, extract it into the location of your choice, make sure that the path
doesn't contain any spaces, otherwise compilation will flat-out not work.</p>
<p>In the folder, you'll notice a batch file titled "build.bat." Execute this batch file by
double-clicking to do a test compile to make sure we set up devkitPro correctly.
<p>
<p>If everything went well, we'll see a screen somewhat like this, along with a new folder and two new
files in the directory.</p>
<img src="/assets/img/projects/gba/simple/guide_7.png"><br />
<img src="/assets/img/projects/gba/simple/guide_8.png">

<h2 id="Editing">Step 3: Editing the Data Files</h2>
<p>Here comes the fun part.</p>
<p>In the source code directory, you'll notice a folder named "images."<br />Contained within are all of
the backgrounds and icons that are displayed in this kernel.</p>
<img src="/assets/img/projects/gba/simple/guide_9.png">

<h4 id="PrimaryFiles">Editing Primary Source Files</h4>
<p>What I mean by "Primary Source Files" are the images contained within the folders named "DARK" and
"LIGHT."<br />These files are what make up the majority of the kernel's visual identity.</p>
<img src="/assets/img/projects/gba/simple/guide_10.png">
<p>You can open and edit the .BMP/.PNG files in whatever image editor you want.</p>

<h4 id="FixingColors">Fixing Colors</h4>
<p>There needs to be some tweaks done to the source code depending on the brightness of your theme,
though.<br />Don't worry, it's nothing major.</p>
<p>Go into the folder at the root of the project labeled "source."<br />You'll notice a header file
named "draw.h"</p>
<img src="/assets/img/projects/gba/simple/guide_11.png">
<p>Open this file in the text editor of your choice. Notepad will suffice.</p>
<img src="/assets/img/projects/gba/simple/guide_12.png">
<p>If your theme has more of a lighter color scheme, then change the text in the "#define" from "DARK"
to "LIGHT"</p>
<img src="/assets/img/projects/gba/simple/guide_13.png">
<p>What this does is let the rest of the source code know that you are compiling against the lighter
color scheme and will adjust things like the text color and other things acoordingly.</p>

<h4 id="EditingIcons">Editing Icons</h4>
<p>Going back into the "images" folder, you'll notice a handful of files named "icon_(XX).png" or
"icon_(XX).bmp"<br />These are the icons that are displayed for certain file types.</p>
<img src="/assets/img/projects/gba/simple/guide_9.png">
<p>These can be edited in the same way as the primary source files.</p>

<h4 id="EditingColors">Editing UI Colors</h4>
<p>The next step is not <i>strictly</i> necessary but it might be a good idea to match up with your
theme.</p>
<p>Going back into the "source" directory, you'll find a file named "ezkernel.c."<br />If you're using
the Definitive Edition variant, it's named "ezkernelnew.c."</p>
<img src="/assets/img/projects/gba/simple/guide_14.png">
<p>Search for the phrase "gl_color_selected" in that file. The code surrounding that should look like
this:</p>
<img src="/assets/img/projects/gba/simple/guide_15.png">
<p>These are the colors that are used in the UI, drawn over the image files from before. You'll notice
that the maximum value is 31.<br />These are 15-bit RGB values, and so instead of values between
0-255, you get values between 0-31.<br />Use trial and error to get the color you desire.</p>

<h4 id="ConvertingPrimary">Converting Primary Assets</h4>
<p>In the root directory, there is a folder named "Grit." Enter that directory.</p>
<p>The two files of importance here are "Build Skin Files.bat" and "Config.ini"</p>
<img src="/assets/img/projects/gba/simple/guide_16.png">
<p>Remember how if your theme is on the brighter side, you edited the file "source/draw.h?"<br />You'll
wanna do a similar thing here.</p>
<p>Open up the file "Config.ini."</p>
<img src="/assets/img/projects/gba/simple/guide_17.png">
<p>If you're making a lighter theme, then change the text on the first line to read "LIGHT" rather than
"DARK."</p>
<img src="/assets/img/projects/gba/simple/guide_18.png">
<p>After that, once you're ready to export your assets, then run the "Build Skin Files.bat" script.</p>
<p>What this does is it runs the image files in the specified directory through the included program
known as Grit.<br />This program will convert the data files to the proper source code format, and
the script will take care of the rest.</p>

<h4 id="ConvertingIcons">Converting Icons</h4>
<p>Converting icons is where the tedium starts.</p>
<p>Once you have edited them as how you like, you'll want to use the "Usenti" tool as a more
user-friendly way of exporting them.<br />There is a link in the <a
href="#Prerequisites">Prerequisites</a> section.</p>
<p>macOS and Linux users, Usenti works just fine in Wine, after installing MFC42 in Winetricks.</p>
<img src="/assets/img/projects/gba/simple/guide_19.png">
<p>Open up the icon that you are trying to export. We will use "icon_EXE" as the example.</p>
<img src="/assets/img/projects/gba/simple/guide_20.png">
<img src="/assets/img/projects/gba/simple/guide_21.png">
<p>Usenti also works as an image editor, but its paletted nature might be confusing for some. I'd
recommend editing it with another image editor.</p>
<p>Once you are happy with your icon, click this button on the top bar:</p>
<img src="/assets/img/projects/gba/simple/guide_22.png">
<p>Once you are met with the file browser, set the file type to "GBA source." Afterwards, hit Save.</p>
<img src="/assets/img/projects/gba/simple/guide_23.png">
<p>Afterwards, you will be met with this somewhat scary looking interface.<br />Like the title bar says,
don't panic!</p>
<img src="/assets/img/projects/gba/simple/guide_24.png">
<p>We are only interested in these few settings:</p>
<img src="/assets/img/projects/gba/simple/guide_25.png">
<p>Set these options to how they appear in the following image:</p>
<img src="/assets/img/projects/gba/simple/guide_26.png">
<p>Next, hit the OK button.</p>
<p>If you look back in the "images" directory, you'll notice that there is now a new file.<br />The name
of this file will vary depending on the icon you just exported, but in our case we chose "icon_EXE."
</p>
<img src="/assets/img/projects/gba/simple/guide_27.png">
<p>Delete the old "icon_EXE.h" file. We do not need it anymore.</p>
<p>Now, rename the new "icon_EXE.c" file to "icon_EXE.h"</p>
<p>Next, open up the new "icon_EXE.h" in your text editor.</p>
<img src="/assets/img/projects/gba/simple/guide_28.png">
<p>Notice the name of the array? This is a problem. If we do not change this as necessary, our kernel
will not compile.</p>
<p>Delete the "Bitmap" suffix and affix "gImage_" to the beginning of the name, like this:</p>
<img src="/assets/img/projects/gba/simple/guide_29.png">
<p>And now you repeat this for every icon you want to change.</p>

<h4 id="Compiling">Compiling</h4>
<p>This is it! The home stretch!</p>
<p>If you've done everything correctly, you can now execute the "build.bat" file in the root of the
repository.</p>
<p>Let it do its magic, and you should now have a newly skinned kernel that's ready to flash!</p>
<p>Now, we need to update your flashcart.<br />For base model users, name the new kernel "ezkernel.bin"
and place it at the root of the SD card.<br />Definitive Edition users, name it "ezkernelnew.bin"
and do the same.</p>
<p>Now, turn on your console while holding the R button to update the flashcart kernel.</p>
<p>If all has gone well, you should now have a newly skinned Flashcart!</p>
<p><img width="500px" src="/assets/img/projects/gba/simple/guide_30.png"><br />Custom theme provided by
SkyDX</p>
<p>Happy Skinning!</p>

</div>

<?php

echo constructPageFooter();

?>

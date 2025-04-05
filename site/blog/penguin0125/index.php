<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: The State of Linux Gaming (as of January 2025)");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> The State of Linux Gaming (as of January 2025)</h1>
<p style="margin-top: -25px;">Bazzite FTW<br/></p><br/>
<p>
Jan 10, 2025<br/>
Category: Infodump<br/>
</p>
<br />
<h2>Introduction</h2>
<p>
Gaming on Linux systems has made incredible strides in the last several years, most recently thanks to machines like the Steam Deck, providing customers with an almost seamless Steam gaming experience on a dockable handheld game console.<br/><br/>
Since CES is just wrapping up, I figure I'd round up the current state of gaming on Linux systems, at least from my point of view.<br/><br/>
I'll be covering things like game compatibility, modding, input devices, handhelds, and the like.<br/><br/>
My main machine is a Steam Deck OLED but I'll be making sure to go over things on my laptop as well.<br/><br/>
The article is also mainly made for people who already know what a Linux is (I'm terrible at dumbing down topics like this).<br/><br/>
</p>
<h2>Game Compatibility</h2>
<p>
Most games work fine. Keyword being most. There are still a handful of games that just behave oddly under WINE or Proton.<br/><br/>
<h3>Odd Game Wall of Shame</h3>
<p>
- The intro video for Max Payne still shows a black screen.<br/>
- The intro video for LEGO Racers is potentially unstable.<br/>
- Big Rigs: Over the Road Racing crashes on start.<br/>
- SIMULACRA 2 requires that the user force Windows XP in <code>winecfg</code>.<br/>
- Façade's font rendering is borked even if <code>corefonts</code> is installed.<br/>
- Outlaws has weird UI performance until you override <code>ddraw</code>. Fixed in Proton-GE.<br/><br/>
- GameMaker 8.1 games still have bad sound. Overriding <code>dmime</code> and other related DirectX components can cause instability.<br/><br/>
- Jazz Jackrabbit 2 is unstable in Windowed mode.<br/>
- Tonic Trouble's FMVs are broken.<br/><br/>
- Okami HD has a graphical bug that causes the FMV inside of the bubble in the cutscene after the Water Dragon dies to be completely bugged.<br/>
<br/>
Notice how most of the games that I list here are older titles or just plain "oddballs?" Games from the 7th gen and onward tend to be the most compatible, requiring no fixes to boot and be playable. I'd still recommend adapting the recommended fixes from PCGamingWiki to your setup though.<br/><br/>

That list is also nowhere remotely comprehensive, just things that I've observed recently.<br/><br/>
</p>

<h3>General Guidelines for Playing</h3>
<p>
Brand new AAA releases for Windows sometimes have issues with certain Win32/WinRT functions being implemented, however. It's a good idea to make sure you have confirmation that the game you want to play is working.<br/>
Good examples of this case are <i><a href="https://gitlab.winehq.org/wine/wine/-/merge_requests/1145">Persona 5 Royal</a></i> and <i><a href="https://gitlab.winehq.org/wine/wine/-/merge_requests/6977">Indiana Jones and the Great Circle</a></i>.<br/><br/>

When playing games that rely on DirectX 1-7 (so roughly 1995-2002-ish), I've found that using dgVoodoo2 allows for basically perfect compatibility with these games. Using this for these titles is very good practice.<br/><br/>

Games that rely on XInput, Windows.Gaming.Input, Steam Input, or SDL2 for their controller support will generally work perfectly fine. It's when we get into the weeds of the DInput / DInput8 period where fixes need to be made. Consulting PCGamingWiki for this era is good practice.<br/><br/>

Sometimes old titles will crash on certain modern AMD/Intel CPUs. <i><a href="https://www.pcgamingwiki.com/wiki/Max_Payne#JPEG_errors_on_modern_CPUs">Max Payne</a></i> and <i><a href="https://www.pcgamingwiki.com/wiki/Crysis#Crashes_on_systems_with_AMD_CPUs">Crysis (2007)</a></i> are good examples of this. This is a game issue instead of a Linux issue, but still worth noting. Damn you, AMD for deprecating 3DNow! instructions...<br/><br/>

Old games that use MIDI for their sound need to have a FluidSynth server running in the background. This is kind of hard to reliably do on Steam Deck. Good examples are Maddy Thorson's <i>Jumper</i> and <i>Giten Megami Tensei: Tokyo Mokushiroku</i>.<br/><br/>

It's a good idea to set your locale to the Chinese or Japanese if you're playing a game from that region, especially if it's an older one. <code>LC_ALL=zh_CN</code> and <code>LC_ALL=ja_JP</code> work for Chinese and Japanese respectively. Settings these variables in Steam doesn't appear to work so it must be done in something like Lutris.<br/><br/>

Games that require 3dfx Glide will need dgVoodoo2 to translate Glide to D3D11 or D3D12.<br/><br/>

Be prepared to tinker. Not everything will work out of the box. There is lots of learning involved.<br/>

Old games that are installed from CD-ROM are a whole beast on their own as you need to be prepared to do some truly roundabout means of launching executables to get them to do what you want. A good example is <i>LEGO Island</i>.<br/><br/>

Be weary of games that use third party launchers such as Ubisoft Connect or EA App. They suck and often break.<br/>
</p>
<br/>
</p>
<h2>Input Devices</h2>
<p>
Most controllers will work just fine in Linux, even over Bluetooth. Steam even supports a lot of these controllers in Steam Input.<br/><br/>

<h3>Xbox 360 / Xbox One / Xbox Series X/S</h3>
<p>
Over wired connections, Xbox controllers should be working fine with no problems.<br/><br/>
Xbox One and Xbox Series X/S controllers require a firmware update in order to function properly over Bluetooth. This can be done in Windows by way of the <a href="https://apps.microsoft.com/detail/9nblggh30xj3?hl=en-us&gl=US">Xbox Accessories App</a> or by using an Xbox Console on its own.<br/><br/>
I found that actually pairing the controller was really inconsistent, but it worked after a handful of attempts.<br/><br/>
The signal would sometimes drop out and so what I think is happening is that the legacy <code>xpad</code> driver is just not suited to these newer controllers. We likely need to be working with xpadneo or xone to properly support these controllers.<br/><br/>
</p>
<h3>Nintendo Switch Pro Controller / Joy-Cons</h3>
<p>
The Linux kernel has made huge strides in supporting these controllers in the last couple of years with the <code>hid-nintendo</code> module. However, I would greatly advise against using these controllers over Bluetooth, as the controllers are plainly just unstable. Their readings drop out sporadically and the signal degrades from a distance. This is not a Steam-specific issue, it's either a kernel issue or a Bluetooth server issue.<br/><br/>
</p>
<h3>DualShock 4 / DualSense</h3>
<p>
No real notes to report. The controllers pair and work as you'd expect and perform extremely well over Bluetooth.<br/><br/>
Do be mindful that the touchpad is always registered as a mouse, causing clashes with Steam Input. SteamOS ships a service called <code>ds-inhibit</code> that suppresses them in Game Mode, but this isn't as accessible on Desktops and Laptops. You can install the service yourself, or you can just disable touchpads in your Desktop enviornment when you want to play a game.<br/><br/>
</p>
<h3>Google Stadia</h3>
<p>
When Google killed off Stadia, they released a WebUSB tool to <a href="https://stadia.google.com/controller/">reprogram the firmware on Stadia controllers</a> so that they could become standard Bluetooth gamepads.<br/><br/>
These work fine in Linux and SDL2, being exposed as generic gamepads to Steam. They pair fine and work well in Steam.<br/><br/>

Only real problem is that they don't seem to re-connect automatically after disconnection. You have to initiate the connection with your PC before it's able to properly handshake. Really annoying.<br/><br/>
</p>
<h3>MayFlash DolphinBar</h3>
<p>
This works pretty good but can cause problems when used with Steam. To use with Dolphin added to Steam, you need to add this line towards the bottom of your Steam <code>config.vdf</code>:<br/>
<code>"controller_blacklist" "57e/0306,57e/0306,57e/0306,57e/0306"</code><br/><br/>
</p>
<h3>Other Notes</h3>
<p>
Depending on the version of SDL that Steam has loaded, extra controllers are exposed as either <code>Steam Virtual Gamepad</code> or the actual physical SDL name. This varies from app to app, especially with Flatpak.<br/><br/>

As of writing this, Steam Input has a bug that causes controller ordering in SDL2 to be flipped. This only happens with Non-Steam games seemingly. Why is this a problem? You guys don't do enough quality assurance, this should not be a problem in the Stable channel!<br/><br/>
</p>
</p>
<h2>VR Support</h2>
<p>
VR Support has gotten decently better in the last few years, but it's still full of hoops to jump through.<br/><br/>
For example, you cannot use an Oculus Quest over the network in purely SteamVR. You must use ALVR to trick it, and that requires you register with daddy Zucc to sideload the ALVR APK onto your Quest.<br/><br/>
Most of the obscure HMDs likely won't work.<br/><br/>
PlayStation VR2 requires a Windows-specific app to function with SteamVR. Very hard no on this ever working with SteamVR for Linux.<br/><br/>
</p>
<h2>Handhelds</h2>
<p>
<h3>Steam Deck LCD / OLED</h3>
<p>
So long as you use SteamOS, you'll be fine for the most part. It's just really out of date and inflexible for Computer Touchers. Bazzite works fine on the Steam Deck LCD, but there are a couple of issues still on Steam Deck OLED.<br/><br/>
</p>
<h3>Lenovo Legion Go</h3>
<p>
A lot of work had to go into it, but so long as you use Bazzite, you'll be in good hands. With Bazzite, you get options for emulating controllers like the HORI Steam Controller or DualSense Edge, you get power options, you get BtrFs support on SD Cards AND the home partition, it's just a great image for these handhelds.<br/><br/>
</p>
<h3>ROG Ally X</h3>
<p>
Much of the same for the Legion Go.<br/><br/>
</p>
<h3>Other handhelds</h3>
<p>
Bazzite supports many of these handhelds, from vendors such as AYANEO, GPD, AYN, and MSI. The bazzite handheld wiki can be found <a href="https://docs.bazzite.gg/Handheld_and_HTPC_edition/Handheld_Wiki/">here</a>.<br/><br/>
</p>
</p>
<h2>Hardware Support</h2>
<p>
AMD support is as good as it's always been. In fact, RADV might be <i>too accurate</i> of a Vulkan implementation as I've seen many titles lately get fixes specifically for the purpose of working around game bugs.<br/><br/>
NVIDIA proprietary drivers are as annoying as they've always been. Thankfully, NVK is coming along and becoming decently mature. Hopefully one day, we'll be able to ditch the proprietary drivers for good.<br/><br/>

Dual-GPU support in laptops is something I'm not all too educated on, so I can't really speak on how well it works, but in the time I've spent debugging my friends' NVIDIA Optimus setups, it's a mixed bag.<br/><br/>

Proprietary eGPU connectors such as the one on the ASUS ROG Ally will probably never work.<br/><br/>

Nothing to really comment on Intel.<br/><br/>
</p>
<h2>Modding</h2>
<p>
Modding is still a dumpster fire at times, primarily because everyone making mod loaders uses Microsoft .NET and it's so commonly a dumpster fire in WINE, especially when dealing with 64-bit stuff.<br/><br/>

At the time of writing, Proton Experimental has patches in that automatically override <code>dinput8</code> as <code>n,b</code> so that mod loaders that inject code through hijacking <code>dinput8</code> can function properly without the user having to manually override the DLL. This is good for HedgeModManager as well as various ASI loaders, commonly found in Silent's patches.<br/><br/>

Most of the complaints I hear come from trying to use HedgeModManager for games such as Sonic Frontiers, but I'll lay out my experiences now.<br/><br/>

For me, HedgeModManager worked as it should with no problems, but I only tested 32-bit games like Sonic Generations which are known to work well. I don't have the means of testing the newer Hedgehog Engine games but I'll update this page with more information later on.<br/><br/>

RyuModManager works fine. No notes.<br/><br/>

SA2ModLoader needs to be placed in the same directory as the Sonic Adventure 2 installation but after that it works fine. It does ask the user to perform some kind of update every time it loads, and when the user accepts, it crashes. Not sure what's going on there.<br/><br/>

Silent Hill 2 Enhanced Edition works, but you also need to override <code>dinput</code> and maybe even <code>xinput1_3</code> as <code>n,b</code> for full controller functionality. The variable I set it to was <code>WINEDLLOVERRIDES="dinput=n,b;dinput8=n,b;xinput1_3=n,b"</code>.<br/><br/>

For Lethal Company, I didn't even bother trying to use Thunderstore and instead handled the modloading for Unity games myself. I downloaded BepInEx and extracted it to the game folder, and in Steam I set <code>WINEDLLOVERRDES="winhttp=n,b"</code>. I then installed all the mods manually. Not that hard, everything works like a charm.<br/><br/>

The bottom line: it can be done. You <i>really</i> don't need stupid apps like Bottles to maintain your mod loaders, using Protontricks and booting the mod managers in the Steam prefixes belonging to the games you're modding is enough. Some mod loaders just plain will not work and I mostly blame .NET in these instances. Stop using it.<br/><br/>
</p>
<h2>Conclusion</h2>
<p>
To summarize, we've made many, many strides in this field. It's honestly incredible.<br/><br/>

I still cannot recommend gaming on Linux to people who aren't willing to tinker or learn new things about computers. As a certified computer toucher, I learned this environment pretty much top to bottom, but your average noob is not gonna be a fan of the amount of learning or troubleshooting that is involved here. It's just not worth the hassle for them.<br/><br/>

Call me cynical or negative, but I don't think the "year of the Linux desktop" will ever happen unless we get the software support that Windows has. In the gaming world, that comes to mod managers and things of that nature, if we were to put actual games aside.<br/><br/>

For what it's worth, however, Valve has done more or less the impossible and made a Linux-powered gaming machine that's approachable to the average user. It's just that you're primarily supposed to stay in the guardrails of Steam, and Valve doesn't really provide a whole lot of support for things outside of it. They'll never outright <i>prevent</i> the user from making non-Steam games work, it's just that once you get into the weeds of that, things can get pretty rocky, and fast.<br/><br/>

But that's my January 2025 update on gaming on Linux. It's very doable, but if you don't like the hassle or the compromises, then I totally understand.<br><br/>

<img width="400px" src="/assets/img/blog/penguin0125/gentoo.gif">

<?php

echo constructPageFooter();

?>

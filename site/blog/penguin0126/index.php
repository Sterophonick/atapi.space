<?php

$navContents = <<<EOF
    <ul>
        <li><a href="#p1">Introduction</a></li>
        <li><a href="#p2">WINE 11.0</a></li>
        <li><a href="#p3">NTsync</a></li>
        <li><a href="#p4">xbox_gip</a></li>
        <li><a href="#p5">Unleashed Recompiled</a></li>
        <li><a href="#p6">HedgheModManager 8</a></li>
        <li><a href="#p7">Isle Portable</a></li>
        <li><a href="#p8">OpenGL Mesh Shaders</a></li>
        <li><a href="#p9">WineGDK</a></li>
        <li><a href="#p10">NVK</a></li>
        <li><a href="#p11">Steam Hardware</a></li>
        <li><a href="#p12">steamos-manager</a></li>
        <li><a href="#p13">Xbox One Compat</a></li>
        <li><a href="#p14">Xenia-Canary</a></li>
        <li><a href="#p15">KDE Plasma</a></li>
        <li><a href="#p16">Wayland Transition</a></li>
        <ul>
            <li><a href="#p16_1">fre:ac</a></li>
            <li><a href="#p16_2">LibreOffice</a></li>
            <li><a href="#p16_3">GNU IMP</a></li>
            <li><a href="#p16_4">Krita</a></li>
            <li><a href="#p16_5">Discord</a></li>
            <li><a href="#p16_6">WINE</a></li>
            <li><a href="#p16_7">Dolphin Emulator</a></li>
            <li><a href="#p16_8">qpwgraph</a></li>
            <li><a href="#p16_9">Miscellaneous</a></li>
        </ul>
        <li><a href="#p17">Lightning Round</a></li>
        <li><a href="#p18">Wall of Shame</a></li>
        <ul>
            <li><a href="#p18_1"><code>dmime.dll</code></a></li>
            <li><a href="#p18_2">Discord Capture</a></li>
            <li><a href="#p18_3">XWayland Capture</a></li>
            <li><a href="#p18_4">Mirror's Edge 2</a></li>
            <li><a href="#p18_5">Max Payne</a></li>
            <li><a href="#p18_6">HDMI 2.1</a></li>
            <li><a href="#p18_7">RDSEED</a></li>
            <li><a href="#p18_8">HROT</a></li>
            <li><a href="#p18_9">RE4 Remake</a></li>
            <li><a href="#p18_10">Workarounds</a></li>
            <li><a href="#p18_11">Anti-Cheat</a></li>
            <li><a href="#p18_12">Intel's Woes</a></li>
            <li><a href="#p18_13">dgVoodoo2</a></li>
            <li><a href="#p18_14">Font oddiites</a></li>
        </ul>
        <li><a href="#p19">Closing Thoughts</a></li>
    </ul>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: The State of the Linux Desktop (2026 Edition)");

?>

<h2><img loading="lazy" style="vertical-align:middle" src="/assets/img/blog/icon.png"> The State of the Linux Desktop (2026 Edition)</h2>
<p>Hurr durr I'ma ninja sloth<br/></p><br/>
<p>
Dec 29, 2025<br/>
Category: Recap<br/>
</p>
<br />
<p id="p1">Hello again, back for round 2 of this series. I hope I'm able to make a good enough recap of stuff that happened in 2025. Like the previous one, this round will still largely focus on video games, but I plan on including more general Linux desktop progress here. If there's something you wanted that I forgot, uhhh... sorry, this was all from <i>my</i> point of view.</p>
<br/>

<h2 id="p2">WINE 11.0</h2>
<p>
    As of writing, not quite out of Release Candidates, but WINE 11.0 is on the way, and will be arriving in January. A very non-exhaustive list of additions and improvements over 10.0 includes:<br/>
</p>
<ul class="centeredList">
    <li>Bluetooth driver, <code>winebth.sys</code></li>
    <li>WoW64 prefix mode, so 32-bit dependencies aren't required</code></li>
    <li>NTsync Thread Synchronization Support</li>
    <li>A bunch of WinRT support for UWP libraries</li>
    <li>Many improvements to Wayland support, not quite stable yet</li>
    <li>Many, many, many bug fixes.</li>
</ul>

<p>
    Proton will eventually be rebased on this new WINE stable release, and while on its own this won't improve many games too too much, it's nice on the developer side since that means they can continue their work with a more up-to-date codebase. They won't have to keep any obsolete workarounds maintained anymore.
</p>

<br/>

<h2 id="p3">NTsync</h2>
<p>
    After a long time of development, Linux 6.14 included a new <code>misc</code> driver known as "NTsync." This driver doesn't communicate with any hardware, instead it is a kernel-level implementation of various Windows NT thread synchronization primitives. Essentially what that means is that Windows compatibility layers such as WINE are able to use this driver to more accurately and performantly emulate thread synchronization, compared to previous user-space implementations such as esync and fsync. WINE support for NTsync wasn't fully completed until WINE 10.16, however.<br/><br/>
    
    You might recall some buzz from Phoronix about how this driver gives performance increases upwards of 678%:<br>
    <img loading="lazy" src="/assets/img/blog/penguin0126/ntsync.png"><br/><br/>
    
    This is only true for those who are using upstream WINE to play video games. For those using Proton, Wine-GE, or other gaming-patched WINEs, your improvements are more a matter of semantics. Not to say that there aren't games that are improved by this. <i>Call of Duty: Black Ops</i> and <i>Call of Duty: Black Ops II</i> have lots of framerate drops and stutters that are otherwise completely fixed with this new driver. My playthrough of BO2 had literally zero framedrops with an NTsync-patched Proton.<br/><br/>
    
    Comparison:
    <table align="center">
        <tr>
            <td>
                <img loading="lazy" loading="lazy" class="galleryImg" src="/assets/img/blog/penguin0126/bo1-f.png">
                <p>FSync</p>
            </td>
            <td>
                <img loading="lazy" loading="lazy" class="galleryImg" src="/assets/img/blog/penguin0126/bo1-n.png">
                <p>NTSync, same hardware</p>
            </td>
        </tr>
    </table>
    <small>(Screenshots courtesy of Linux for All @ YouTube)</small><br/><br/>
    
    NTsync might be available with Proton 11, if Valve deems it to be stable enough to ship to customers.
</p>
<br/>

<h2 id="p4">xbox_gip</h2>
<p>
    Nobody seems to really report on this.<br/><br/>
    
    <a href="https://github.com/evlaV/linux-integration/blob/6.16/integration/drivers/input/joystick/xbox_gip.c">Internally, in the SteamOS kernel</a>, there is an experimental new driver called <code>xbox_gip</code> intended to provide betters upport for Microsoft Game Input Protocol (GIP) devices intended for Xbox consoles. It supports only Xbox One/Series controllers, but the ground work is in place to support things like flight sticks and racing wheels, and the extra buttons of the Xbox Arcade Stick.<br/><br/>
    
    The SteamOS kernel also removes support for Xbox One devices from the <code>xpad</code> driver. I hope above all else that this helps take the place of drivers like <code>xpadneo</code> or <code>xone</code>.
</p>
<br/>

<h2 id="p5">Unleashed Recompiled</h2>
<p>
    Coming out of pretty much nowhere in March 2025, <a href="https://github.com/hedge-dev/UnleashedRecomp">Unleashed Recompiled</a> released on GitHub, providing a recompiled port of the Xbox 360 version of <i>Sonic Unleashed</i> available on Windows and Linux (and later macOS) without the use of an Xbox 360 emulator such as Xenia. Touting enhanced controller support, comprehensive PC settings, bug fixes, and a new renderer written from scratch for Direct3D 12 and Vulkan.<br/>
</p>
<br/>

<h2 id="p6">HedgeModManager 8</h2>
<p>
    One of the mod managers that annoyed me was HedgeModManager. It was Windows-only and written in .NET, so not only did it struggle with being stable it always had these weird graphical issues that .NET programs always seem to have in WINE. It also had issues with 64-bit games like Sonic Forces... for some reason? Anyway, all of this seems to have been fixed with the release of <a href="https://github.com/hedge-dev/HedgeModManager">HedgeModManager 8</a>, a complete multi-platform rewrite of this modloader, though with the crutch that it targets a Flatpak environment. Loading mods for Sonic the Hedgehog titles on Linux becomes less of an annoying hassle with this new rewrite.
</p>
<br/>

<h2 id="p7">Isle Portable</h2>
<p>
    Another source port available for Linux this year was <a href="https://github.com/isledecomp/isle-portable">Isle Portable</a>, a decompiled source port of <i>LEGO Island</i>. While this game isn't particularly amazing, it's still something special and trying to actually play this game, even on Windows, was an evil hack with an alternate installer and a patching tool, but now you can just use this and it simply just works. More Linux support here is always a good thing.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/isle.png">
</p>
<br/>

<h2 id="p8">OpenGL Mesh Shaders</h2>
<p>
    Minecraft players with NVIDIA cards (Turing and newer) have had the luxury of being able to use a Sodium extension called <a href="https://github.com/MCRcortex/nvidium">Nvidium</a>, which takes advantage of the <code>GL_NV_mesh_shader</code> vendor extension to produce dense geometry extremely quickly. Developers for the <code>radeonsi</code> driver have implemented a generic version of this, <code>GL_EXT_mesh_shader</code>, <a href="https://gitlab.freedesktop.org/mesa/mesa/-/merge_requests/38044">into the Mesa project</a>, motivated at least in part by the demand for a generic Nvidium. 
</p>
<br/>

<h2 id="p9">WineGDK</h2>
<p>
    On Halloween, this <a href="https://www.reddit.com/r/linux_gaming/comments/1ol6f91/minecraft_bedrock_for_windows_not_education/">Reddit post</a> was made with a screenshot of Minecraft Bedrock Edition being played through WINE. Bedrock has been infamous in the Linux community for requiring the x86 Android version in order to play, so to see the Windows 10/11 version being played in WINE was a sight to behold.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/winegdk.png"><br/><br/>
    
    Of course, this didn't just come from nothing. A pseudononymous developer by the name of "Weather" has created a fork of WINE (with a Proton build!) that <a href="https://github.com/Weather-OS/WineGDK">implements a lot of Windows Game Development Kit (GDK) components</a> on top of an existing WINE base, with the fork in question being named <i>WineGDK</i>. Components like <code>xgameruntime</code> and <code>gameinput</code> are implemented here, seemingly just enough to play Minecraft.<br/><br/>
    
    Weather wants this code to be brought upstream, but doing so themselves would require them to use their real name, effectively doxxing themselves. Hopefully another WINE developer can take notice of this code and adapt it upstream in some way.
</p>
<br/>

<h2 id="p10">NVK</h2>
<p>
    While not strictly being born in 2025, NVK, an open-source Vulkan driver for NVIDIA hardware has matured considerably throughout that year. As of now it is a fully Vulkan 1.4-conformant implementation, with about roughly half the performance of the NVIDIA Proprietary drivers (which I name as "nvprop"), <a href="https://www.phoronix.com/review/nvidia-980-5080-linux">according to Phoronix as of December 11.</a><br/><br/>
    
    (Right click to view full images)<br/>
    <table align="center">
        <tr>
            <td>
                <img loading="lazy" loading="lazy" width="310px" src="/assets/img/blog/penguin0126/nvk_xon.png">
            </td>
            <td>
                <img loading="lazy" loading="lazy" width="310px" src="/assets/img/blog/penguin0126/nvk_grav.png">
            </td>
        </tr>
    </table>
    <br/>
    
    I got to test this myself in June, with a test of Portal 2 yielding around 112 FPS on the highest settings at 1080P on a Quadro 3000 Laptop.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/nvk-p2.jpg"><br/><br/>
    
    Also very much worth noting, Autumn "misyltoad" Ashton wrote a <a href="https://idtech.space/notice/AzDLHLfeOFEkNFNmtM">very preliminary implementation</a> of DLSS for NVK! At this very moment it only works if the DLSS binary is that has shipped with your game is compatible with the GPU that you are using, but it is working <i>enough</i> that <i>Control: Ultimate Edition</i> is able to use it with the right GPU.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/nvk_dlss.jpg">
</p>
<br/>

<h2 id="p11">Steam Hardware</h2>
<p>
    In November, Valve announced two new pieces of Steam hardware. The Steam Machine, the Steam Controller, and the Steam Frame.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/steam-hardware.png"><br/><br/>
    
    The Steam Machine and Steam Controller were last attempted back in 2015, when SteamOS was much less refined and based on Debian Linux instead of Arch. Both things were such a failure that it took until the release of the Steam Deck to get back on track, but with everything having gone so well with the Deck, they can expand their hardware ecosystem much more safely.<br/><br/>
    
    The Steam Machine has a new custom amd64 SoC based on Zen 3 and RDNA3, capable of some great 1080p gaming, or 4K if you're an FSR enjoyer. Valve claims that the machine is around 6x the performance of the Steam Deck, not that a simple number is a good way of measuring hardware capability.<br/><br/>
    
    The Steam Frame is the cool one, being a self-enclosed VR headset powered by a Qualcomm Snapdragon SoC, still running SteamOS, just compiled for ARM. In conjunction with the Steam Frame, Valve has introduced <a href="https://steamdb.info/app/3029110/info/">Steam Play <i>Lepton</i></a>, an Android compatiblity layer for (presumably) aarch64 Linux, supposedly being based on Waydroid, which is an Android container for Wayland platforms. The real question is how much of Waydroid are they actually using, especially since Waydroid requires a large image of LineageOS to function.<br/><br/>
    
    The other cool thing is aarch64 support being added to Proton. A git submodule for the <a href="https://github.com/FEX-Emu/FEX/tree/main">FEX Emulator</a> has been added to the main Proton repository, with FEX being a fast userland amd64 emulator for aarch64 Linux platforms. There's also aarch64 build instructions.<br/>
     <img loading="lazy" src="/assets/img/blog/penguin0126/proton-aarch64.png"><br/><br/>
     
     That Steam Controller do be spicy though...
</p>
<br/>

<h2 id="p12">steamos-manager</h2>
<p>
    With the release of SteamOS-supported machines like the Lenovo Legion Go S, Vicki "endrift" Pfau has been contracted to write a background service called <a href="https://gitlab.steamos.cloud/holo/steamos-manager">steamos-manager</a>, as part of the work being done towards making SteamOS itself more generic. Its purpose is for controlling various hardware aspects such as TDP, Wi-Fi, GPU clocks, battery charge limits, and also replaces the <code>ds-inhibit</code> daemon from older builds of SteamOS.<br/><br/>
    
    So far, support for other handheld devices has been added to this service, such as the Legion Go family, GPD Win family, ONEXPLAYER machines, AOKZOE machines, AYANEO machines, etc. This is also in conjunction with SteamOS adopting <a href="https://github.com/ShadowBlip/InputPlumber">InputPlumber</a> to handle the fragmented controller inputs of these machines. InputPlumber on SteamOS combines all the odd input devices into one single <code>uhid</code> Steam Deck controller device, for Steam to use with Steam Input.<br/>
</p>
<br/>

<h2 id="p13">Xbox One Compatibility Layers</h2>
<p>
    Coming hot off the heels of the <a href="https://github.com/exploits-forsale/collateral-damage">Collateral Damage</a> exploit for the Xbox family of hardware, and making big progress in 2025, is <i>XWine1</i>, which is a translation layer for running Xbox One titles in Windows. While there are no public releases yet, the pictures and videos that they have released to their Twitter page are very impressive, and they even have gone through the trouble of implementing missing components for WINE environments, which makes me hope for better UWP support eventually. In this photo they released in January, they have it running on a Steam Deck OLED.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/xwine1.jpg"><br/><br/>
    
    They have also shown other Linux systems running the compatibility layer, <a href="https://nitter.net/XWineOne/status/1907517872194330960#m">such as the PlayStation 4</a>.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/xwine1_f.jpg"><br/><br/>
    
    While they don't have any public builds, I'm inclined to believe that the project is real, especially with the gameplay videos showing the DXVK HUD active and the work-in-progress photos of games like <i>Forza Motorsport 5</i>. There's just too much effort for this to be an attention grab.<br/><br/>
    
    Also worth noting is <i><a href="https://github.com/WinDurango/WinDurango">WinDurango</a></i>, which purports the same thing, just currently without the WINE support. Both projects are able to play <i>Minecraft: Xbox One Edition</i> completely, which is very promising.
</p>
<br/>

<h2 id="p14">Xenia-Canary Linux Builds</h2>
<p>
    This probably isn't exactly new, but it's something I only recently noticed, so I'm including it.<br/><br/>
    
    Xenia-Canary (the Xbox 360 emulator) has, at some point, become able to work correctly under most Linux environments. The last time that I tested this, the games always crashed the emulator on boot. Neat.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/xenia.png">
</p>
<br/>

<h2 id="p15">KDE Plasma</h2>
<p>
    KDE has kept up the train of improvements to its Plasma desktop environment all throughout this year. Some important highlights include:<br/>
</p>
<br/>

<ul class="centeredList">
    <li>XRandR emulation in XWayland</li>
    <li>Improved HDR support for WINE/Proton under Wayland clients</li>
    <li>Fuzzy matching and immediate results in KRunner</li>
    <li>Support for dials and touch rings with drawing tablets.</li>
    <li>K.I.S.S. initial setup wizard for systems pre-installed with Plasma.</li>
    <li>Unified Permissions settings page for Flatpaks and other XDG apps</li>
    <li>One-click Flatpak installs from browsers</li>
    <li>Integration for connecting to networks via QR codes</li>
    <li>Rounded corners in the Breeze theme</li>
    <li>Proper screen mirroring support for Wayland</li>
    <li>DrKonqi crash reporter now handles non-KDE applications</li>
</ul>
<br/><br/>

<p>Plasma is the desktop that I use on a daily basis, and the rush of seeing awesome cool features and fixes get added to it every week is more potent than cocaine.</p>
<br/>

<h2 id="p16">Wayland Transition Progress</h2>
<p>
    The X Window System is on its way out on both Linux and BSD. The GNOME desktop environment has <a href="https://gitlab.gnome.org/GNOME/gnome-shell/-/merge_requests/3768">completely dropped support</a> for it and KDE <a href="https://blogs.kde.org/2025/11/26/going-all-in-on-a-wayland-future/">plans to do the same</a> for the release on Plasma 6.8, which is supposed to come out sometime in early 2027. Other desktop environments such as Cinnamon and Budgie are starting to adapt to the Wayland-only future.<br/><br/>
    
    It's not like all the legacy apps will magically stop working, they developed XWayland for this exact reason. The truth of the matter is that X11 was introduced back in 1984 as part of MIT's <i>Project Athena</i> and X11 is a series of weird hacks and patches to allow compatibility with newer graphics hardware. This is, in no uncertain terms, unsustainable long-term, and a major pain point for developers. Wayland compositors such as KWin and Mutter have decently matured, enough that I consider a Wayland session to be pretty stable now.<br/><br/>
    
    Not that there aren't pain points and issues remaining, we'll be stuck with those for a long time, but it's more stable for things like multi-monitor setups, VRR, and HDR than X11 ever will be. You can make your X Server forks with vaguely-fascist rhetoric in your pitiful little corner as you shrivel up into a corn cob.<br/><br/>
    
    With that being said, I'd like to take some space to make notes about specific programs that I happen to use.
</p>
<br/>

<h3 id="p16_1">fre:ac</h3>
<p>
    Fre:ac is an X11-only program that behaves very strangely with Wayland fractional scaling, especially on dual-monitor setups with unequal scaling. I don't know what its problem is.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/freac_scale.png"><br/>
</p>
<br/>

<h3 id="p16_2">Libreoffice</h3>
<p>
    Despite being a Wayland application, it has similar issues to fre:ac, causing the ribbon and document view to become way too small.
    <img loading="lazy" src="/assets/img/blog/penguin0126/libreoffice_scale.png"><br/><br/>
    
    Fun fact: the loading splash screen is X11 but the rest of the program is Wayland.
</p>
<br/>

<h3 id="p16_3">GNU Image Manipulation Program</h3>
<p>
    The GNU Image Manipulation program gained proper Wayland support this year, and it works very well, not really much to note here.
</p>
<br/>

<h3 id="p16_4">Krita</h3>
<p>
    Krita has <a href="https://invent.kde.org/graphics/krita/-/merge_requests/2457">work-in-progress Wayland support</a>, however it is not present in any release builds, only when building from source. 
</p>
<br/>

<h3 id="p16_5">Discord</h3>
<p>
    Discord is a very strange case. It uses Wayland and Pipewire to do screen sharing, but the actual client window itself uses X11. It's possible this decision was made because Wayland <i>still</i> doesn't have a reliable way of doing global hotkeys for things like Push-To-Talk. Plasma allows the user to let all X11 applications see the activity of the keyboard for this purpose. 
</p>
<br/>

<h3 id="p16_6">WINE</h3>
<p>
    WINE's Wayland support is done through its very own <code>winewayland.drv</code> driver, much like <code>winex11.drv</code> for X servers. Its support is in a state that I would call "functional." It works, it's usable, but there are a plethora of odd behaviors, especially for video games, that need to be touched up.<br/><br/>
    
    It also doesn't do proper window manager integration, so you're missing your fancy window decorations.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/winewayland.png"><br/>
</p>
<br/>

<h3 id="p16_7">Dolphin Emulator</h3>
<p>
    Dolphin Emulator doesn't launch with Wayland, not even setting <code>QT_QPA_PLATFORM=wayland</code> fixes it. Odd.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/xw_dolphin.png"><br/>
</p>
<br/>

<h3 id="p16_8">qpwgraph</h3>
<p>
    qpwgraph, a tool I use for routing PipeWire streams, forces the Qt xcb plugin <a href="https://gitlab.freedesktop.org/rncbc/qpwgraph/-/blob/main/src/appdata/org.rncbc.qpwgraph.desktop?ref_type=heads">in its XDG Desktop Entry</a> for some reason.
</p>
<br/>

<h3 id="p16_8">Miscellaneous</h3>
<ul class="centeredList">
    <li>Teams For Linux: X11</li>
    <li>Steam: X11</li>
    <li>Zoom Video Conferencing: X11</li>
    <li>Java Swing Toolkit: X11</li>
    <li>RPCS3: Wayland</li>
    <li>PCSX2: Wayland</li>
    <li>MAME: Wayland</li>
    <li>Xenia-Canary: X11</li>
    <li>agbplay-gui: Wayland</li>
    <li>Ruffle: Wayland</li>
    <li>mGBA: Wayland</li>
    <li>Audacity: X11</li>
    <li>MakeMKV: Wayland</li>
    <li>VMware Workstation: X11</li>
    <li>Visual Studio Code: Wayland</li>
    <li>MATLAB: X11</li>
    <li>MKVToolNix: Wayland</li>
    <li>FlashGBX: Wayland</li>
    <li>Super Mario War: Wayland</li>
    <li>Super Tux Kart: Wayland</li>
    <li>SM64CoopDX: Wayland</li>
    <li>Xonotic: Wayland (Only with SDL)</li>
    <li>DOSBox-Staging: Wayland</li>
    <li>Kdenlive: Wayland</li>
</ul>
<br/><br/>
<p>Hopefully eventually XWayland can be left for the user to install themselves for legacy support, rather than needing to rely on it for several oft-used applications.</p><br/>

<h2 id="p17">Lightning Round</h2>
<ul class="centeredList">
    <li><a href="https://www.phoronix.com/review/linux-619-amdgpu-radeon">Many legacy AMD GPUs default to the modern <code>amdgpu</code> driver</a></li>
    <li><a href="https://github.com/GPUOpen-Drivers/AMDVLK/discussions/416">AMD discontinues AMDVLK in favor of Mesa RADV</a></li>
    <li><a href="https://github.com/WinterSnowfall/d7vk">WinterSnowfall has developed d7vk, a Direct3D 7 add-on to DXVK</a></li>
    <li><a href="https://github.com/doitsujin/dxvk/issues/3488#issuecomment-3263837359">DXVK's new shader compiler that accounts for more undefined behavior</a></li>
    <li><a href="https://github.com/Wemino/VorpalFix">VorpalFix, a patch that fixes <i>American McGee's Alice (2011)</i></a></li>
    <li><a href="https://github.com/Wemino/MadnessPatch">MadnessPatch, a fixup patch for <i>Alice: Madness Returns</i></a></li>
    <li><a href="https://github.com/Wemino/EchoPatch">EchoPatch, a fixup patch for <i>F.E.A.R.</i> and its expansions</a></li>
    <li>I got a shoutout from Bazzite at Southern California Linux Expo! :3</li>
    <li><a href="https://github.com/Etaash-mathamsetty/Proton">Proton-EM comes into popularity for its extensive Wayland work</a></li>
    <li><a href="https://www.collabora.com/news-and-blog/news-and-events/goodbye-nouveau-gl-hello-zink.html">NVK will adopt Zink as its OpenGL implementation rather than using Nouveau</a></li>
    <li><a href="https://github.com/evlaV/linux-integration/commit/fb222867e0916a9912985797268e81b7145c76e5">Valve Steam Machine LEDs driver</a></li>
    <li>The usual crap-ton of extra hardware support.</li>
    <li><a href="https://www.collabora.com/news-and-blog/news-and-events/nvk-enabled-for-maxwell,-pascal,-and-volta-gpus.html">NVK gets support for Maxwell, Pascal, and Volta GPUs</a></li>
    <li><a href="https://www.phoronix.com/review/radeon-radv-rt-2025">RADV's improved Vulkan ray-tracing performance</a></li>
    <li><a href="https://www.phoronix.com/news/Sony-DualSense-Audio-Handling">DualSense Audio Jack Support over USB</a></li>
    <li>And too much more to list here...</li>
</ul><br/><br/>

<h2 id="p18">Wall of Shame</h2>
<p>
    Not everything is sunshine and rainbows. There's still plenty of bullshit to deal with, something is broken (or <i>breaks</i>...), weird tangled messes of workarounds, or NVIDIA being novideo.
</p>
<br/>

<h3 id="p18_1">GameMaker 8 Sound</h3>
<p>
    Games that rely on the <code>IDirectMusicPerformance8</code> class for their audio will often exhibit extremely buggy sound behavior. Since I last talked about this, the situation has improved. <code>PlaySegmentEx</code> has been implemented. But there's a problem. It doesn't handle music looping the way it should, and <code>StopEx</code> remains unimplemented, leading to samples playing when they otherwise should have been terminated.<br/><br/>
    
    Sunky.MPEG:<br/>
    <red>Warning: Volume!</red>
    <video preload="none" class="interruptVideo" width="682" height="544" poster="/assets/img/blog/penguin0126/vidposters/sunky.png" controls>
    <source src="/assets/vid/sunky.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>
    
    Mighty Jill-Off (The music is supposed to stop when Jill dies):<br/>
    <video preload="none" class="interruptVideo" width="640" height="508" poster="/assets/img/blog/penguin0126/vidposters/jilloff.png" controls>
    <source src="/assets/vid/jilloff.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>
    
    There's other odd behavior with WINE's <code>dmime.dll</code>, and guess what, using <code>winetricks</code> to replace those components causes all sorts of issues, sometimes you'll get no sound, sometimes you'll get some horrible audio latency. Blegh.
</p><br/>

<h3 id="p18_2">Discord Capture Devices</h3>
<p>
    I'd really like to get fullscreen capture of my Steam Deck for sharing Jackbox games and whatnot. Discord advertises an ability to screenshare both video and audio using video capture devices via Video4Linux, much like it can on Windows with capture devices. On Windows, this works fine, nothing of note. On Linux though...<br/>
    
    So, you hop into a voice channel, and you go to select a capture device. I have my webcam and my HDMI capture card available here.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/discord1.png"><br/><br/>
    
    These blur hashes are entirely incorrect. In this screenshot, nothing was attached to my capture card, so it should have been a black video feed. Anyway, you select that and your audio device and...<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/discord2.png"><br/><br/>
    
    What the fuck is that, there's nothing there. It doesn't properly initialize any video feed. Test with the webcam, same thing, no dice. You'd think <i>someone</i> would have. You know, tested this? But sure, my fault for wanting to play a game with some friends.<br/><br/>
    
    And before you start, no, don't @ me about using BetterDiscord or Vesktop, I tried those. They don't allow this feature and have their own set of issues regarding camera devices.
</p><br/>

<h3 id="p18_3">XWayland Capture</h3>
<p>
    Heh. Encountered a problem with no elegant solution while writing this.<br/><br/>
    
    It is impossible to record XWayland windows using OBS Studio while running a Wayland session. You select <code>Screen Capture (Pipewire)</code> in your sources, and try to select your Window. Look at that, it's blank. Because Wayland is so damn opinionated about what you are and are not allowed to capture.<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/obs.png"><br/>
</p><br/>

<h3 id="p18_4">Mirror's Edge Catalyst</h3>
<p>
    <i>Mirror's Edge Catalyst</i> has regressed sometime after Proton 8.0. No longer can one even boot this game up, as it crashes during the loading sequences.<br/><br/>
    
    Additionally, EA has shut down the servers, and many have reported that adding <code>127.0.0.1 winter15.gosredirector.ea.com</code> to your <code>/etc/hosts</code> or equivalent is enough to get it working again.<br/><br/>
    
    <a href="https://github.com/ValveSoftware/Proton/issues/6452">Git Issue Thread</a>
</p><br/>

<h3 id="p18_5">Max Payne Intro FMV</h3>
<p>
    The intro FMV to <i>Max Payne</i> does not play correctly. It only plays the audio, drawing nothing to the screen.

    <video preload="none" class="interruptVideo" width="720" height="480" poster="/assets/img/blog/penguin0126/vidposters/maxpayne.png" controls>
    <source src="/assets/vid/maxpayne.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video>
</p><br/>

<h3 id="p18_6">HDMI 2.1+ on AMDGPU</h3>
<p>
    The HDMI Forum rejected AMD's proposal for an open-source implementation of HDMI 2.1 and beyond for their GPU drivers. This locks out display modes such as 8K@60Hz or 4K@120Hz and features such as Variable Refresh Rate. Instead, if you have DisplayPort <i><b>active adapter</i></b>, meaning that it actually does some signal translation instead of passing it through, you can get these features on your hardware.<br/><br/>
    
    I'm not entirely sure of any <i>specific</i> DP1.4 -> HDMI 2.1 adapters out there that reliably expose features such as VRR and whatnot, but they're probably out there.
</p><br/>

<h3 id="p18_7">RDSEED on znver5</h3>
<p>
    AMD's Zen 5 architecture has <a href="https://www.phoronix.com/news/AMD-SB-7055-RDSEED-Zen-5">a vulnerability</a> in their implementation of Intel's hardware random number generation, <code>RDRAND</code>. The vulnerability would cause the 16-bit and 32-bit forms of the instruction to return a value of 0, while still signalling a successful operation. This pretty much had the potential to kneecap any security that used it by an attacker with local priveleges. Whoops.<br/><br/>
    
    CachyOS, which has package repositories compiled for various x86-64 revisions, had problems with a kernel patch that disabled the feature in CPUID. As <a href="https://lore.kernel.org/lkml/9a27f2e6-4f62-45a6-a527-c09983b8dce4@cachyos.org/">reported by Peter Jung</a>, users could not even boot far enough to get into their graphical sessions.<br/><br/>
    
    I believe that AMD has gotten their microcode fix out now into <code>linux-firmware</code> and so all is right with the world once again.
</p><br/>

<h3 id="p18_8">Frame presentation in HROT</h3>
<p>
    HROT is a game that was created using a custom engine written in Pascal, and it exhibits some very strange frame presentation behavior.<br/><br/>
    
    If you were to launch it on an X11 session, you'd get normal performance. Run it in XWayland, you get around 15 FPS. Run it in XWayland with Zink, you get much better performance, but not quite perfect performance. This behavior also affects Gamescope.
</p><br/>

<h3 id="p18_9">Resident Evil 4</h3>
<p>
    <i>Resident Evil 4</i> is a game that, when it launched, wanted to support the Steam Deck. At the time, ray tracing in RADV and VKD3D-Proton wasn't fully supported and had plenty of performance problems. Capcom had the crazy idea of detecting whether or not the game was running in WINE, and if it was, completely disable ray tracing. It is now 2026, and ray tracing in both RADV and VKD3D-Proton is in a pretty good state, and this game never removed that workaround.<br/><br/>
    
    They added a command line parameter to disable it though.<br/>
    Add <code>/WineDetectionEnabled:False</code> to your Steam launch options, or whatever is your equivalent, and this functionality will be restored.<br/><br/>
    
    Not the first time a game has detected WINE. When <i>Persona 5 Royal</i> released in 2022, it wouldn't start in WINE because they hadn't yet implemented transacted file APIs. Atlus added an alternate code path just for Steam Deck users that would avoid these APIs. Several years later, these APIs have had implementations for a while, and I'm not sure if that workaround was ever removed. It is pretty inconsequential in this instance, I suppose.<br><br/>
    
    I found <a href="https://gist.github.com/TheComputerGuy96/a29231aee7013a6d6d67113fd71cf69f">this list</a> of a handful of games that are <i>aware</i> that they are running in WINE or on a Steam Deck and alter their behavior. Going with an alternate code path is one thing. Cool, awesome, smile. But it is something much more cursed and short-sighted to disable functionality unless the user sets a flag.
    
    Game devs, seriously, don't ever do this. Let the Linux people work their magic.
</p><br/>

<h3 id="p18_10">"It's Workarounds All The Way Down"</h3>
<p>
    On a related note, take a look at this comment from Discord:<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/workaround1.png"><br/><br/>
    
    That right there embodies what I think is probably the most nerve-wracking aspect of all this work: hacky workarounds are used in place of elegant solutions.<br/><br/>
    
    Checkout this section of the startup script to Proton:<br/>
    <img loading="lazy" src="/assets/img/blog/penguin0126/workaround2.png"><br/><br/>
    
    This isn't all, far from it. about 40% or so of the launcher script is *just* game workarounds.<br/><br/>
    
    Stuff like this is also present in Valve's WINE fork itself:
    <img loading="lazy" src="/assets/img/blog/penguin0126/workaround3.png"><br/><br/>
    
    Workarounds like this are present <i>everywhere</i> in the software stack, DXVK, VKD3D-Proton and Mesa are no exception, primarily to work around game bugs and driver behavior.<br/><br/>
    
    And like, the launch script acknowledges that these should ideally be short-lived until an elegant solution is researched and developed.
    <img loading="lazy" src="/assets/img/blog/penguin0126/workaround4.png"><br/><br/>
    
    It's weird, I'm a little annoyed. I don't know how to feel about it. On one hand, you get to play your games. On the other hand, it's a pain to maintain. Ideally, all the driver devs would be talking to the compatibility layer devs, but NVIDIA just <i>has</i> to be the contrarian in this situation. 
</p><br/>

<h3 id="p18_11">Anti-Cheat</h3>
<p>
    "But Atapi, what about kernel anti-cheat?" you cry, as you shrivel into a corn cob and turn into dust. The answer to that question is of course "I don't care. Go to your room." It's not a solvable problem due to the nature of Linux as an operating system kernel. There is a very good reason why <i>Apex Legends</i> and <i>Grand Theft Auto Online</i> withdrew their support.<br/><br/>
    
    You can read more on the subject <a href="https://tulach.cc/the-issue-of-anti-cheat-on-linux/">in this blog post by Samuel Tulach</a>.
</p><br/>

<h3 id="p18_12">Intel's Woes</h3>
<p>
This year, Intel has laid off a lot of employees who worked on the Linux stack, especially on the side of Wi-Fi and graphics. It's a real mess. Even the modern wireless daemon, <code>iwd</code> has been put on <a href="https://www.phoronix.com/news/Intel-IWD-Development-Halts">development hiatus</a> due to their employment woes. A gentle reminder that we are all small puppies in God's hot car.
</p><br/>

<h3 id="p18_13">dgVoodoo2 Regression</h3>
<p>
    At some point in its development, dgVoodoo2 has stopped working under WINE. Doesn't matter if you're using DXVK or not, it just doesn't work anymore. Versions before around 2.8 work just fine, but anything afterward is completely borked.<br/><br/>

    Wine-Bug: <a href="https://bugs.winehq.org/show_bug.cgi?id=58731">58731</a><br/><br/>

    The main developer has responed about it saying that <a href="https://www.vogons.org/viewtopic.php?p=1255480#p1255480">"dgVoodoo has no business on non-Windows platforms anyway,"</a> and has also lashed out at other players for using dgVoodoo on Linux.<br/><br/>

    There are alternatives for playing older Direct3D games on modern systems, <a href="https://github.com/elishacloud/dxwrapper/releases">dxwrapper</a> is able to do Direct3D 2-8 to D3D9, and <a href="https://www.zeus-software.com/downloads/nglide">nGlide</a> can be used for games that use 3Dfx Glide. Still, Jesus.
</p><br/>

<h3 id="p18_14">Windows Font Weirdness</h3>
<p>
    For some really strange reason, there are a few cases of certain games displaying fonts incorrectly despite these games being rendered by the GPU. These games depend on Windows fonts like <i>Comic Sans MS</i> or <i>Verdana</i> and just behave strangely.<br/><br/>
    
    <i>Façade</i>:
    <img loading="lazy" src="/assets/img/blog/penguin0126/font-facade.jpg"><br/><br/>
    
    <i>G String</i> (And other Source engine titles):
    <img loading="lazy" src="/assets/img/blog/penguin0126/font-gstring.jpg"><br/><br/>
</p>

<h2 id="p19">Closing Thoughts</h2>
<p>
    Are we in the fabled "Year of the Linux Desktop" as many Linux YouTubers have prophecized? I don't really know. I'm conflicted. A desktop experience, perpetually in a state of radical transformation, core infrastructure being always replaced under our feet at any given time. It's still not one that I would recommend to anyone unless you're a tinkerer and love learning.<br/><br/>
    
    Not to mention, the Steam Deck is an illusion. It is a very carefully curated Linux experience, provided with a set of hardware that give it its best foot forward. Reddit users clamour for a "generic" SteamOS that they can plop onto any PC, but this straight up is not possible. Not with our current software stack, and especially not with NVIDIA and Intel behaving like they do. Your Linux experience, especially when gaming, is considerably informed by what hardware you have, much more than Windows.<br/><br/>
    
    If this is something you want to try, do as much research as you can on good components, especially AMD parts, for now. Seriously, it'll save you an unbelievable amount of headaches. Oh and, probably best to stick with the LTS kernel unless you absolutely have to use the latest one.<br/><br/>
    
    That's pretty much all from me. That's my one-year update from the last time I did this. Like they say, the more things change, the more things stay the same.
</p>
<img loading="lazy" src="/assets/img/blog/penguin0126/kity.jpg">


<?php echo constructPageFooter(); ?>

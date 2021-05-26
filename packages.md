<html>
<style>
        h3 {
            font-family: AppleKid;
            line-height: 1;
            letter-spacing: 0.8px;
        }
        h2 {
            font-family: AppleKid;
            line-height: 1;
            letter-spacing: 0.8px;
        }
        h1 {
            font-family: AppleKid;
            line-height: 1;
            letter-spacing: 0.8px;
        }
        @font-face {
            font-family: AppleKid;
            src: url('../images/Apple-Kid.woff2') format('woff2'),
                url('../images/Apple-Kid.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        p.small {
            line-height: 1;
        }
        .mainContent {
            font-family: AppleKid;
            font-size: 20pt;
            line-height: 1;
        }
</style>
<body>
<div class="mainContent">
<h1 style="font-size:32pt">Linux Related Stuff</h1>
<br />
<h2 style="font-size:28pt">Arch Linux AUR Packages</h2>
<a href="https://aur.archlinux.org/packages/nikwi-deluxe-bin/">Nikwi Deluxe (Binary)</a><br />
<a href="https://aur.archlinux.org/packages/xjump/">XJump</a><br />
<br />
<h2 style="font-size:28pt">Proton/Wine variants</h2>
<h3 style="font-size:24pt">Proton-4.11-GE-1-IMSCARED</h3>
<p>The following variant of Proton, which is a fork of GloriousEggroll's Proton-4.11-GE-1, has a few fixes that allow IMSCARED to work properly. It includes all of the windowing fixes of Proton-4.11-GE-1, but also has an updated version of DXVK and a script that will create a symlink to the current user's desktop.</p>
<a href="https://archive.org/details/proton-4.11-ge-1-imscared.-7z">Proton-4.11-GE-1-IMSCARED Download</a><br /><br />
<h3 style="font-size:24pt">Wine-6.4-DDrawFix</h3>
<p>The following variant of Wine, based on Wine 6.4, has included a patch that allows for LEGO Island to function properly. In mainline builds of Wine, it crashes when clicking on anything because of some stubbed functions in ddraw that allow for the user to click on objects in a 3D space.</p>
<p>Shoutouts to MattKC for linking me to the patch so I can apply it.</p>
<a href="downloads/wine-6.4-ddrawfix.tar.xz">Wine-6.4-DDrawFix Download</a><br />
<a href="https://www.winehq.org/pipermail/wine-devel/2020-September/173902.html">The WineHQ thread that MattKC linked me to. Contains a diff.</a><br />
<br />
<br />
<a href="..">Go Back</a><br />
</div>
</body>
</html>

<?php

$customSideContent = <<<EOF
    <div class="extraSidebar window">
        <h4 style="text-align: center"><img class="pixelArt" style="vertical-align:middle" src="/assets/img/global/new.gif"> Site Updates!</h4>
        <ul style="font-size: 13pt">
            <li>2025/09/21: New site layout! Currently very work-in-progress, not everything is finished, but damn does the site look so much cooler.</li>
        <ul>
    </div>
    <div class="extraSidebar window">
        <h4 style="text-align: center">Site Settings</h4>
        <span title="Toggles the little cat that chases your mouse pointer."><input type="checkbox" onclick="showOneko()" id="enableOneko"><small>Disable Oneko</small></span><br/>
        <span title="Allow or disallow the music player from automatically playing music on page load."><input type="checkbox" onclick="musicCookie()" id="enableAutoplay"><small>Don't Autoplay Music</small></span><br/>
        <span title="Prevent the music player from automatically pausing on focus loss."><input type="checkbox" onclick="musicFocusCookie()" id="enablePauseOnFocus"><small>Don't Pause on Focus Loss</small></span>
    </div>
    <div class="sideFunFact window">
        <h4 style="text-align: center">Link my site!</h4>
        <p>
            Copy the text in the little white box to link it on your site!
        </p>
        <img class="pixelArt" src="/assets/img/buttons/atapi.gif"
        title="Made by @ZenithNeko and @ashie404!!! <3">
        <textarea id="homeButtonTextArea" rows="2" cols="10" readonly="" onclick="this.setSelectionRange(0, this.value.length)">
            <a href="https://atapi.space/"><img width="88px" height="31px" src="https://atapi.space/assets/img/buttons/atapi.gif" alt="A red-and-pink checkerboard button with the text "Atapi" on it. There is also an icon of a little cat fursona."></a>
        </textarea>
    </div>
    <div class="sideFunFact window">
        <h4 style="text-align: center"><img class="headerIcon" width="32px" height="32px" src="/assets/img/home/lfm.png"> Last played:</h4>
        <span id="lastFmSong">
            <a id="lastFmLink" style="color: white; font-style: normal; text-decoration: none;">
                <span id="lastFmArt"></span> <span id="lastFmText">Checking...</span>
            </a>
        </span>
        <p style="font-size: 9pt">
            Last.fm integration courtesy of <a href="https://github.com/biancarosa/lastfm-last-played/tree/main">biancarosa</a>.
        </p>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        let user = 'Sterophonick';
        let url = 'https://lastfm-last-played.biancarosa.com.br/' + user + '/latest-song';
        let songArt = document.querySelector('#lastFmArt');
        let songText = document.querySelector('#lastFmText');
        let songLink = document.querySelector('#lastFmLink');
        fetch(url)
            .then(function (response) {
                return response.json()
            }).then(function (json) {
                songLink.setAttribute("href", json['track']['url']);
                songArt.innerHTML = '<img style="filter: none;" class="headerIcon" src="' + json['track']['image'][0]['#text'] + '" width="32px" height="32px">';
                songText.innerHTML = "<marquee width='190px'><p>" + json['track']['artist']['#text'] + ' - ' + json['track']['name'] + "</p></marquee>";
            });
    </script>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain!");

$imageURLs = array(
    "/assets/img/home/welcome.gif", "/assets/img/home/welcome2.gif", "/assets/img/home/welcome3.gif", "/assets/img/home/cowsay.png", "/assets/img/home/welcome4.gif"
);

echo '<img id="welcome" src="' . $imageURLs[ floor(rand() % sizeof($imageURLs))] . '" alt="funny meme" onclick="togglePotato()"/>';

?>


<script>
function togglePotato() {
    var potato = document.getElementById("potat");
    if (potato.style.display == "none") {
        potato.style.display = "block";
    } else {
        potato.style.display = "none";
    }
}
function friday() {
    var d = new Date();
    if (d.getDay() === 5) {
        //$("#fridey").load("/img/fridey.gif");
        document.getElementById('friday').innerHTML = '<img src="/assets/img/home/yakuzafriday.gif"/><br/><br/>';
    }
}
</script>

<h1><img style="vertical-align:middle" src="/assets/img/home/icon.png"> hiiiii!!! :3</h1>
<p>
meowdy! I'm Atapi / Sterophonick <a href="pronouns/">(he/she/they)!</a> I am a
cute kitty cat on the internet that has been touching computers for about as long as I can really remember. I work with Linux and old tech, emulation, reverse engineering, and the like! :3
</p>
<br />
<img class="pixelArt" src="/assets/img/home/construction.gif" title="Under construction!"><br />
<p>
This site is basically my little zone on the internet, a hub for my projects and my weird ramblings. Come in and take a look! <img src="/assets/img/smileys/wink.png"><br />
</p>
<br />

<div id="friday"><script type="text/javascript">friday();</script></div>

<p>here's my ridiculous collection of buttons!</p>
<div id="buttons" class="pixelArt" style="width: 100%; margin: auto; font-size:0%">
<a href="https://www.gameboy-advance.net/"><img src="/assets/img/buttons/gbanet.gif"></a>
<a href="https://www.mamedev.org/"><img src="/assets/img/buttons/mame.gif"></a>
<img src="/assets/img/buttons/linux.gif">
<img src="/assets/img/buttons/netscape.gif">
<img src="/assets/img/buttons/notepad.gif">
<a href="https://www.youtube.com/@Petscop/"><img
src="/assets/img/buttons/childlibrary.gif"></a>
<img src="/assets/img/buttons/ie.gif">
<img width="88px" height="31px" src="/assets/img/buttons/sucks.gif">
<img src="/assets/img/buttons/php.gif">
<img src="/assets/img/buttons/ace.png">
<a href="https://ashiecorner.xyz"><img src="/assets/img/buttons/ashie404.gif"></a>
<a href="https://zencorner.xyz"><img src="/assets/img/buttons/zenithneko.gif"></a>
<img src="/assets/img/buttons/kde.gif">
<a href="https://wetdry.world/@sterophonick"><img src="/assets/img/buttons/masto.gif"></a>
<img src="/assets/img/buttons/graphic.png">
<img src="/assets/img/buttons/nobiney.png">
<img src="/assets/img/buttons/eb.gif">
<img src="/assets/img/buttons/badapple.gif">
<a href="https://archive.org"><img src="/assets/img/buttons/archive.png"></a>
<img src="/assets/img/buttons/kromer.gif">
<a href="https://yesterweb.org/no-to-web3/"><img src="/assets/img/buttons/web3.gif"></a>
<img src="/assets/img/buttons/steam.gif">
<img src="/assets/img/buttons/mother.gif">
<img src="/assets/img/buttons/fof.gif">
<img src="/assets/img/buttons/neofox_boom.gif">
<a href="https://elizafox.space/"><img src="/assets/img/buttons/elizafox.png"></a>
<a href="https://zenthefox.online/"><img src="/assets/img/buttons/zennow.gif"></a>
<a href="https://tauon.dev/" target="_blank">
<img src="/assets/img/buttons/lily.png" alt="lily" width="88" height="31"
style="image-rendering: pixelated" title="do hotlink my button!"/>
</a>
<img src="/assets/img/buttons/blahaj.gif">
<img src="/assets/img/buttons/oneshot.gif">
<a href="https://bee.movie/"><img src="/assets/img/buttons/beebadge.png" title="<3"></a>
<a href="https://foxboy.dev/"><img src="/assets/img/buttons/ryfox.png"></a>
<a href="https://pivotman319-owo.github.io/"><img src="/assets/img/buttons/pivotman.png"></a>
<img src="/assets/img/buttons/ralsei.gif">
<img src="/assets/img/buttons/femboy.gif">
<img src="/assets/img/buttons/spotify.gif">
<img src="/assets/img/buttons/soder.gif">
<img src="/assets/img/buttons/source.png">
<img src="/assets/img/buttons/amd.gif">
<img src="/assets/img/buttons/epicblazed.png">
<img src="/assets/img/buttons/emulate.png">
<img src="/assets/img/buttons/jellyfin.png">
<img src="/assets/img/buttons/archlinux.gif">
<a href="https://pouet.net/"><img src="/assets/img/buttons/pouet.gif"></a>
<a href="https://www.vulkan.org/"><img src="/assets/img/buttons/vulkan.png"></a>
<img src="/assets/img/buttons/despacito.gif">
<a href="https://winehq.org/"><img src="/assets/img/buttons/wine.png"></a>
<img src="/assets/img/buttons/scene.png">
<a href="https://modarchive.org/"><img src="/assets/img/buttons/modarchive.gif"></a>
<img src="/assets/img/buttons/geo.gif">
<img src="/assets/img/buttons/atari.gif">
<img src="/assets/img/buttons/getplayer.gif">
<img src="/assets/img/buttons/steamdeck.png">
<img src="/assets/img/buttons/xbla.png">
<a href="https://kaleidosium.my.id/"><img src="/assets/img/buttons/dania.png"></a>
<a href="https://ayetsg.com/"><img src="/assets/img/buttons/ayetsg.png"></a>
<img src="/assets/img/buttons/openmpt.png">
<img src="/assets/img/buttons/webp.png">
<a href="https://www.youtube.com/@VinsCool"><img src="/assets/img/buttons/vinvin.gif"></a>
<img src="/assets/img/buttons/nyancat.gif">
<a href="https://bazzite.gg"><img src="/assets/img/buttons/bazzite.png"></a>
<a href="https://kokoscript.com"><img src="/assets/img/buttons/kokoscript.gif"></a>
<img src="/assets/img/buttons/homebrew.png">
<a href="https://amp.dascene.net"><img src="/assets/img/buttons/amp.jpg"></a>
<a href="https://gbadev.org"><img src="/assets/img/buttons/gbadev.gif"></a>
<a href="https://pdroms.de"><img src="/assets/img/buttons/pdroms.gif"></a>
<a href="https://scratch.mit.edu"><img src="/assets/img/buttons/scratch.png"></a>
<a href="https://web.archive.org/web/20240000000000*/playeradvance.org"><img
src="/assets/img/buttons/playeradvance.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/nintendomax.com"><img
src="/assets/img/buttons/nintendomax.gif"></a>
<a href="https://dcemu.co.uk"><img src="/assets/img/buttons/dcemu.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/vbalink.info"><img
src="/assets/img/buttons/vbalink.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/gbxemu.com"><img
src="/assets/img/buttons/gbxemu.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/emuvortex.com"><img
src="/assets/img/buttons/emuvortex.gif"></a>
<a href="https://web.archive.org/web/20240000000000*/lik-sang.com"><img
src="/assets/img/buttons/liksang.png"></a>
<a href="https://www.youtube.com/channel/UC9ecwl3FTG66jIKA9JRDtmg"><img
src="/assets/img/buttons/siivagunner.png"></a>
<img src="/assets/img/buttons/scott.png">
<a href="https://dianaisnthere.codeberg.page/"><img src="/assets/img/buttons/diana.png"></a>
<a href="https://leggi.es/"><img src="/assets/img/buttons/deneb.gif"></a>
<a href="https://maidado.xyz/"><img src="/assets/img/buttons/maidado.png"></a>
<a href="https://micro.niko.lgbt/"><img src="/assets/img/buttons/micro.png"></a>
<a href="https://sneexy.pages.gay/"><img src="/assets/img/buttons/sneexy.gif"></a>
<a href="https://j4.lc/"><img src="/assets/img/buttons/j4.png"></a>
<a href="https://aquamarine.gay/"><img alt="A web button that says 'Aquamarine's Aquarium' with an image of a light blue creature, with yellow accents, purple hair, and a maroon coat, that is an anthropomorphic axolotl and a cat." src="/assets/img/buttons/aqua.gif" title="A web button that says 'Aquamarine's Aquarium' with an image of a light blue creature, with yellow accents, purple hair, and a maroon coat, that is an anthropomorphic axolotl and a cat." style="image-rendering: pixelated;"></a>
<a href="https://priyom.org"><img src="/assets/img/buttons/priyom.gif"></a>
<a href="https://signalshed.com"><img src="/assets/img/buttons/enigma2k.png"></a>
<a href="https://eightyeightthirty.one"><img src="/assets/img/buttons/88x31.png"></a>
<a href="https://www.defectivebydesign.org"><img src="/assets/img/buttons/dbd.png"></a>
<img src="/assets/img/buttons/amogus.gif">
<a href="https://invoxiplaygames.uk/"><img src="/assets/img/buttons/ipg.png"></a>
<img src="/assets/img/buttons/boom.gif">
<a href="https://essem.space/"><img src="/assets/img/buttons/essem.png"></a>
<a href="https://velveteen.one/"><img src="/assets/img/buttons/velbadge.png"></a>
<img src="/assets/img/buttons/silicon.GIF">
<img src="/assets/img/buttons/bonzi.GIF">
<a href="https://moule.world/"><img src="/assets/img/buttons/moule.gif"></a>
<a href="https://cobalt.tools"><img src="/assets/img/buttons/cobalt.gif"></a>
<img src="/assets/img/buttons/rockband.png">
<a href="/interstitial.php?name=Xaselgio's Den&dest=https://xaselgio.net"><img src="/assets/img/buttons/xaselgio.gif"></a>
<a href="https://cavernofremembrance.neocities.org"><img src="/assets/img/buttons/cavern2.gif"></a>
<a href="https://planetclue.com"><img src="/assets/img/buttons/planetclue.gif"></a>
<img src="/assets/img/buttons/lego.gif">
<a href="https://web0.halotroop.com/"><img src="/assets/img/buttons/halotroop.gif"></a>
<a href="https://flipperzero.one/"><img src="/assets/img/buttons/flipper.gif"></a>
<a href="https://flurrys.nekoweb.org/"><img src="/assets/img/buttons/nescartridges.gif"></a>
<a href="https://darksdomain.neocities.org/"><img src="/assets/img/buttons/darksdomain.gif"></a>
<a href="https://starfall.com/"><img src="/assets/img/buttons/starfall.png"></a>
<a href="/interstitial.php?name=VG Cats&dest=https://vgcats.com/"><img src="/assets/img/buttons/vgcats.gif"></a>
<a href="https://web.archive.org/web/20250000000000*/http://www.geocities.co.jp/Playtown-Yoyo/6130/"><img src="/assets/img/buttons/letsemu.gif"></a>
<a href="https://retrojcities.neocities.org/" target="_blank"><img src="/assets/img/buttons/retrojcity.png" width="88" height="31" alt="retrojcity red button"></a>
<a href="https://aceraccoon.neocities.org/"><img src="/assets/img/buttons/aceracc.gif"></a>
<a href="https://ne0nbandit.art/"><img src="/assets/img/buttons/ne0nbandit.png"></a>
<a href="https://retroguru.com/"><img src="/assets/img/buttons/retroguru.png"></a>
<a href="https://melankorin.net/"><img src="/assets/img/buttons/melankorin.gif"></a>
<img src="/assets/img/buttons/ac2001central.gif">
</div>

<span id="potat" style="display: none;">
    <br/>
    <marquee><img src="/assets/img/home/potato.gif"></marquee>
</span>

<?php

echo constructPageFooter();

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Site & Privacy Info");

?>

<h1>Site & Privacy Info</h1>
<h2>Cookies</h2>
<p>This site uses cookies for storing user settings, accessible at the footer of the page. The YouTube embeds on the blog posts use <code>youtube-nocookie.com</code> to further reduce the use of cookies. There are, however, pages that embed to Scratch, which I'm not certain will not use cookies. They might, if for no other reason than for Cloud Variables.</p>
<br/>
<h2>Privacy</h2>
<p>When you visit any page on this site, your IP address and user agent are logged. This information will <u><i><l>NEVER</l></i></u> be disclosed by me and it is purely for the purpose of site troubleshooting and diagnosis in the event of an attack.
</p>
<br/>
<h2>Legacy Support</h2>
<p>
    This site has an <a href="http://alt.atapi.space">HTTP alt</a> for old browsers and computers! I encourage people to use HTTPS whenever possible, but doing this should be fine since last I checked, I'm not a bank. Send me pics of this site on old computers! <3<br/>
    <br/>
    Known tested browsers:<br/>
    Internet Explorer 5.0<br/>
    Nintendo 3DS Browser<br/>
    Nintendo DSi Browser<br/>
    Nintendo Wii Internet Channel<br/>
    <br/>
    Your user agent:<br/>
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
</p>
<br/>
<h2>Server Specs</h2>
<div id="toc" class="toc" style="width:60%; margin:auto; text-align: left;">
    <ul>
        <li>
            1 vCPU core 5900X
        </li>
        <li>
            1 GB RAM
        </li>
        <li>
            Ubuntu 24.04
        </li>
        <li>
            Caddy w/ PHP-FPM 8.3
        </li>
        <li>
            Git: <code><?php
                $test = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/.git/FETCH_HEAD');
                $test_cut = substr($test, 0,40);
                echo $test_cut;
            ?></code>
        </li>
    </ul>
</div>
<br/>
<h2>Anti-Scraping Measures</h2>
<p>
    There's a measure that the Caddy server takes to silence AI scrapers. It will check your user agent against the following regex:<br/>
    <code><small>CCBot|GPT|Claude|anthropic|\bcohere\b|\bmeta\b|PetalBot|bingbot|Amazonbot|Bytespider|Perplexity|OAI-SearchBot</code></small><br/><br/>

    When a match is found, the connection is completely severed. This regex should be enough for most bost and scrapers, I'm sure there are some missing. It might be better in the long run to redirect them to a tarpit so that their training data is even more poisoned, but at the moment I'm not sure how to go about that. If I ever do something that inhibits your ability to browse my site, please let me know!
</p>
<br/>
<p>If you discover any security vulnerabilities PLEASE let me know about it!</p><br/>
<h2>Content Attribution</h2>
<p>
- Standard typeface is Motherish by ArtsyOmni, CJK Script is Zen Maru Gothic<br/>
- Monospace typeface is Ubuntu Mono<br/>
- CSS and layout inspiration from Kokoscript<br/>
- Oneko.js by adryd325, graphic modified by ParkerCC<br/>
- Background is an altered version of the MacOS 9 cats wallpaper<br/>
- No copyright infringement intended<br/>
</p>
<img width="160px" src="/assets/img/disclosure/cat.gif"><br/>

<?php echo constructPageFooter(); ?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage!");

?>

<h1>Privacy Policy / Disclosure</h1>
<h2>Cookies</h2>
<p>This site uses cookies for storing user settings, accessible at the footer of the page. The YouTube embeds on the blog posts use <code>youtube-nocookie.com</code> to further reduce the use of cookies. There are, however, pages that embed to Scratch, which I'm not certain will not use cookies. They might, if for no other reason than for Cloud Variables.</p>
<br/>
<h2>Privacy</h2>
<p>When you visit any page on this site, your IP address and user agent are logged. This information will <u><i><l>NEVER</l></i></u> be disclosed by me and it is purely for the purpose of site troubleshooting and diagnosis in the event of an attack.
</p>
<br/>
<h2>Server Specs</h2>
<div id="toc" class="toc" style="width:50%; margin:auto; text-align: left;">
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
    </ul>
</div>
<p>If you discover any security vulnerabilities PLEASE let me know about it!</p>

<?php echo constructPageFooter(); ?>

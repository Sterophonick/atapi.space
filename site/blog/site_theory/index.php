<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Blog :: The Theory Behind This Site");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> The Theory Behind This Site</h1>
<p style="margin-top: -25px;">No PHP required, I hope.<br/></p><br/>
<p>October 7, 2024<br/>Category: Infodump</p>
<br />
<p>
This is a little manifesto behind this site, a collection of loosely-related ideas in regards to why this site is the way it is, at least at the time this blog post was writen.<br/><br/>
If you're reading this in the far, far future, you might wanna git clone this and checkout to a commit when this was originally written, or use the Wayback Machine, which probably archived this.<br/><br/>
Oh, also, these are not guidelines that <i>you</i> strictly need to follow. For you, these are just suggestions at best.<br/><br/>
Anyhoo...<br/><br/>
</p>
<h2>Try to Avoid Newer HTML Features</h2>
<p>
Bascially, ensure that people who are running somewhat older browsers can keep viewing this site correctly. We're not targeting something like, say, NCSA X Mosaic here, but Microsoft Internet Explorer 6 is something I've toyed around with a bit, with varying degrees of success.<br/>
</p>
<img width="768px" src="/assets\img\blog\site-theory\ie6_broken.png"><br/>
<br/>
<p>
This pic shows the site running through a Windows XP VMware configuration, before I fixed the header and footer so they displayed correctly on IE6.<br/><br/>
The reason that they didn't work ended up being that IE6 does not support backticks for multi-line strings in JavaScript. It's little things like that that make me somewhat thankful we have the browser engines we have today, even thought it would be nice to see this site be able to run one something like Netscape Naviagator.<br/><br/>
Not really saying to avoid HTML5 altogether, just enough so that people on, say, Firefox 52 can still use your site and get the information they need.<br/><br/>
</p>
<h2>Working Around Static Web Hosts</h2>
<p>
Something much more situational.<br/><br/>
GitHub Pages is a static web host. That means there is no support for server-side scripting that makes injecting things like global headers, footers, and sidebars trivial. Unfortunately for us, that means we need to work around it. Thankfully, most browsers, new and old support the <code>document.write()</code> function from JavaScript, so what I ended up doing was writing JavaScript functions that would inject HTML at the top and bottom of the page to create the header and footer divs.<br/><br/>
It's especially nice this way because I can even inject elements based on what page is being rendered, so things like the (Go Back) link only appear when the user is not on the root page.<br/><br/>
</p>
<h2>GeoCities-isms</h2>
<p>
PLEASE use silly 3D GIFs! Silly 3D GIF attack! Raaaaah!!!<br/>
</p>
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<img style="vertical-align:middle" src="/assets\img\blog\site-theory\babyjatt.gif">
<br/>
<p>
HOWEVER, please don't overuse them! WE want to maintain clarity and avoid drawing too much of the user's attention away from the text they're reading!<br/><br/>
Additionally,
<span style="background-color: red;">please </span>
<span style="background-color: blue;">don't </span>
<span style="background-color: green;">use </span>
<span style="background-color: red;">text </span>
<span style="background-color: blue;">background </span>
<span style="background-color: green;">colors!</span>
They're a little distracting when trying to read larger blocks of text! If we want to draw the user's attention or emphasize a point, we can
<span style="color: #FF7F7F;">color the text itself!</span>
<br/><br/>
</p>
<p>
Using the <code>&lt;marquee&gt;</code> tag is acceptable, especially since every browser I have used supports it. Let's use it while we still can.<br/><br/>
</p>
<p>
If your site plays music, please make it OPTIONAL!<br/><br/>
</p>
<img width="768px" src="/assets\img\blog\site-theory\dustindiamond.png"><br/><br/>
<p>
What I'm basically saying is don't be like dustiandiamond.com unless that's the whole point of your page. I adore that site to death, but in practice it's terrible at conveying any real information.<br/><br/>
</p>
<h2>Content Container</h2>
<p>
Design your pages around a centered container! Don't let your site stretch to the full width of the screen! This leads to reduced clarity and readability, as the user has to read across a wider page of text.<br/><br/>
This is something I see a handful of sites these days fumble a bit, and even old iterations of my site got this wrong. Viewing on a 1080 panel led to a page that was just plain too wide.<br/><br/>
Ideally your main container should have a max width of something between 768 pixels and 1280 pixels.<br/><br/>
Of course, this rule assumes that your page is something like mine, designed to convey information in text, rather than provide an interactive experience.<br/><br/>
</p>
<h2>Policing Dark Reader</h2>
<p>
This only applies to those whos sites are darker, but PLEASE PLEASE PLEASE use the following tag in your <code>&lt;head&gt;</code> to disable the Dark Reader extension:<br/><br/>
<code>&lt;meta name="darkreader-lock"&gt;</code><br/><br/>
This makes sure that your site's color palette doesn't get pwned by default if the user has Dark Reader installed.<br/><br/>
</p>
<h2>Link ALL the Sites!</h2>
<img width="384px" src="/assets\img\blog\site-theory\xallthey.jpg"><br/><br/>
<p>
Link to other peoples' sites! Link your obscure niche interests! Make the personal web more like a web!	<br/><br/>
</p>
<br/>
<p>
That's pretty much it. Thanks for reading, you now have free kromer.<br/>
</p>
<a href="https://deltarune.com/lancer/"><img width="384px" src="/assets\img\blog\site-theory\8kromer.png"></a>

<?php

echo constructPageFooter();

?>

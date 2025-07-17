<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Please Contact Fisher-Price Customer Relations");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Please Contact Fisher-Price Customer Relations</h1>
<p style="margin-top: -25px;"><br/></p><br/>
<p>
July ??, 2025<br/>
Category: Tech<br/>
</p>
<br />
<h2>Atapi what are you doing</h2>
<p>

    So there was this little toy that I had as a wee one, we're talking like, four years old. It would attach to a computer over Windows XP, and some software would read the state of the device and act as a secure browser for young children to play flash games on.<br/>
    <img width="720px" src="/assets/img/blog/easylink/easylink.jpg"><br/><br/>

    I recently picked one up, since thinking about it made me wonder how the thing operated, it really cannot be that complex, right?<br/>
    (I'm right, it's basic baby crap.)<br/><br/>
    <img width="720px" src="/assets/img/blog/easylink/photo1.jpg"><br/><br/>

    A quick disassembly shows that, yeah, there isn't much going on. There's a CY7C63813-SXC 8-bit microcontroller and a bunch of switches, eight reserved for the character key, and five reserved for emulating keyboard keys.<br/>
    <img width="360px" src="/assets/img/blog/easylink/photo2.jpg"> <img width="360px" src="/assets/img/blog/easylink/photo3.jpg"><br/><br/>

    Quick side note, I got this thing complete-in-box, including the software CD-ROM and the mousepad.<br/>
    <img width="720px" src="/assets/img/blog/easylink/photo4.jpg"><br/><br/>

    It was also a pain in the ass to unbox, the whole front side is completely destroyed thanks to how confusingly it was packed. I'm sure this was the case for many parents who bought this for their kid.<br/><br/>
    <img width="720px" src="/assets/img/blog/easylink/photo5.jpg"><br/><br/>
</p>

<br/>

<h2>The Software</h2>
<p>
    The actual software is made in Adobe Flash, unsurprisingly. In fact, it even runs in the background on startup so that it automatically shows up once the child inserts a character key.<br/>
    <video class="interruptVideo" width="720" height="581" controls>
    <source src="/assets/vid/easylink-start.webm" type="video/webm">
    <br/>
    <span style="color: red">Your browser doesn't appear to be able to support this video.</span><br/>
    </video><br/><br/>
</p>

<?php

echo constructPageFooter();

?>

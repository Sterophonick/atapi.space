<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Blog :: Please Contact Fisher-Price Customer Relations");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Please Contact Fisher-Price Customer Relations</h1>
<p style="margin-top: -25px;">"CD ROM is not a toy"<br/></p><br/>
<p>
July 17, 2025<br/>
Category: Infodump<br/>
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

    The software requires that you make a password so that your frolicking dirt child doesn't have the ability to mess up the rest of the machine. This dialog is shown when going into the parental controls or tries to exit the program.<br/>
    <img src="/assets/img/blog/easylink/password.png"><br/><br/>

    The parental controls had options for setting a time limit, as well as allowing printing.<br/>
    <img src="/assets/img/blog/easylink/parental.png"><br/><br/>

    The software just waits for updates on the character key switches, and then it will load web pages dedicated to the character that was inserted. Elmo was for Sesame Street, Zak and Wheezie was for Dragon Tales, stuff like that. I only have three of the character keys that were ever produced, though.<br/><br/>

    Unsurprisingly, none of the character keys go anywhere anymore. Every URL is completely dead and we've since moved on to universal HTTPS, something this software would never ever have a chance of supporting.<br/>/
    <img width="720px" src="/assets/img/blog/easylink/software1.png"><br/><br/>

    The software installs to <code>C:\Program Files\Fisher-Price\Easy-Link internet launch pad</code> and we can see all of the files laid bare for us.<br/>
    <img src="/assets/img/blog/easylink/winxp1.png"><br/><br/>

    Curiously, this <code>URL.xml</code> file has a listing for all of the links that the integrated browser would be allowed and disallowed from visitng.<br/>
    <img src="/assets/img/blog/easylink/winxp2.png"><br/><br/>

    So, I tried manually replacing it with my site, since it allows for raw HTTP connections.<br/>
    <img src="/assets/img/blog/easylink/winxp3.png"><br/><br/>

    This does not fix the problem of it not being able to connect to any networks.<br/><br/>

    I even made sure that Windows Firewall was off in the Virtual Machine, it can connect to the internet just fine, just the software mysteriously doesn't work with the outside world at all anymore.<br/>
    <img width="720px" src="/assets/img/blog/easylink/winxp4.png"><br/><br/>

    So, I'm not really sure what else to make of the software. If anyone can give me pointers on how to make it work, I would really appreciate it.<br/><br/>
</p>

<br/>

<h2>Reading it in Linux</h2>
<p>
    From this point, I figured I should try to do a raw reading of the USB data in Linux.<br/><br/>

    In <code>lsusb</code> the device shows up as <code>ID 0813:0004 Mattel, Inc. EasyLink</code><br/> and uses the <code>hid-generic</code> module.<br/>
    <img src="/assets/img/blog/easylink/linux1.png"><br/><br/>

    So, we know that it's not using any bespoke, odd USB protocols. It's just a standard HID device, which Linux is more than capable of reading raw data from.<br/><br/>

    What I did next was use <code>hid-recorder</code> from <code>hid-tools</code> to get the descriptors and a raw reading.<br/>
    <img src="/assets/img/blog/easylink/linux2.png"><br/><br/>

    From this screenshot, <code>hid-recorder</code> tells us that each HID report is just four bytes in size, something that's backed up by the actual reports.<br/><br/>

    This first set of HID packets is at neutral, no buttons are being pressed and no character is inserted.<br/>
    <img src="/assets/img/blog/easylink/linux3.png"><br/><br/>

    This set of packets was with the Dragon Tales key inserted.<br/>
    <img src="/assets/img/blog/easylink/linux4.png"><br/><br/>

    So this must mean that the first byte is reserved for the character key. The second byte would react upon pressing the arrow keys or the enter key on the unit.<br/><br/>

    Using my finger, I manually pressed down the switches inside of the key slot, and pressed the individual buttons as well. Through this, I came up with this bit mapping for each byte. Blue is the first byte, red is the second byte. All bits used in the HID packets default to high, meaning that when the switches are hit, the bits are set low.<br/>
    <img src="/assets/img/blog/easylink/diagram.jpg"><br/><br/>

    Of the keys that I have, the Elmo key has a value of <code>0x04</code>, the Dragon Tales key has a value of <code>0x10</code>, and the Little People key has a value of <code>0x0C</code>. Bytes 3 and four always read out as <code>0x01</code> and <code>0x00</code> respectively.<br/><br/>
</p>

<p>
    That's all I've really got for this little curiosity, if someone can teach me how to write a python script or something that can read the state of the device, that would be pretty neat I think.<br/>
    Oh, and <a href="https://archive.org/details/easy-link-launch-pad">here's a download link to the software</a>. Feel free to do with it as you please.<br/><br/>
    <img width="720px" src="/assets/img/blog/easylink/deck.jpg">
</p>
<?php

echo constructPageFooter();

?>

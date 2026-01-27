<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            The Rabbit Quiz was made for a "Project Science" class in middle school, where we had a couple of lovely pet bunnies. I never got the Game Boy Advance version finished in time for the actual presentation (I was struggling with how loops worked in C), so I had to remake it in Scratch. The Scratch version has since been lost to time.<br/><br/>
            
            There exists one image of the rabbits, which has been crunched to fit a Game Boy Advance screen. The kit was named "Oreo" and the adult was named "Mamas."<br/>
            <img width="229px" src="/assets/img/projects/gba/misc/bunnies.png" alt="A couple of oreo-colored rabbits in their cage. Mamas is nuzzling oreo.">
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Game Boy Advance :: Rabbit Quiz Advance");

?>
<h1><img style="vertical-align:middle" src="/assets/img/projects/gba-icon.png"> Rabbit Quiz Advance</h1>
<?php generateGBAEmbed("/files/Rabbit%20Quiz.gba"); ?>
<br/>
<p style="font-size:12pt">
Game Boy Advance emulation courtesy of <a
href="https://github.com/simon-paris/gba.ninja/tree/master">Simon Paris</a>.<br>
</p>
<br />
<div id="controls">
<p>Keybinds</p>
<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
text-align: center;">
<col width="320px" />
<col width="320px" />
<tr>
<td>A Button - Z<br /></td>
<td>Select Button - Backspace<br /></td>

</tr>
<tr>
<td>B Button - X<br /></td>
<td>Start Button - Enter<br /></td>
</tr>
<tr>
<td>D-Pad - Arrow Keys<br /></td>
<td>L Button - Shift<br /></td>
</tr>
</table>
R Button - Control<br />
</div>
<br />
<p>Some emulation issues might be present. I recommend you download the ROM and play it in mGBA.</p>

<?php

echo constructPageFooter();

?>

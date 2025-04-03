<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage! :: Projects :: Game Boy Advance :: Rabbit Quiz Advance");

?>
<h1><img style="vertical-align:middle" src="\assets\img\projects\gba-icon.png"> Rabbit Quiz Advance</h1>
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

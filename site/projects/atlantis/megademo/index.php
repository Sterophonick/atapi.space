<?php

$customSideContent = <<<EOF
    <div class="sideFunFact window">
        <h4>Fun fact!</h4>
        <p>
            MegaDemo was made in late 2016 during a middle school "Business Technology" class that I did not give a hoot about. Literally, the most nothingburger class I took in middle school.
        </p>
    </div>
EOF;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Domain! :: Projects :: Game Boy Advance :: MegaDemo");

?>
<h1><img style="vertical-align:middle" src="/assets/img/projects/gba-icon.png"> MegaDemo</h1>
<?php generateGBAEmbed("/files/MegaDemo.gba"); ?>
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

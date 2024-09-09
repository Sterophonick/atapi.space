var quoteStrings = [
    "duck in game stop. what will he buy.",
    "swag money. money money swag.",
    "New mission: refuse this mission!",
    "THIS. SENTENCE. IS. FALSE!",
    "Don't have a cow, man!",
    "An idle mind is The Devil's Playhouse.",
    "But Max, you don't even like girls!",
    "grodon fremann!!!!",
    "Redundant adjective is redundant",
    "Hi, Super Nintendo Chalmers!",
    "Thank god you're here, look what Antifa did!",
    "1) Cover yourself in oil",
    "Reject humanity, embrace meow",
    "\"Hard Luck.\" Classy.",
    "にゃ～",
    "What is a man? A little pile of secrets. But enough talk, have at you!",
    "has you really been far even as decided to use even go want to look more like?",
    "enbies don't owe you androgyny, but you owe enbies all of your money!",
    "Where did you learn to fly?",
];

function getQuoteTag() {
    var img = '<p style=\"margin-top: -15px\">';
    var randomIndex = Math.floor(Math.random() * quoteStrings.length);
    img += quoteStrings[randomIndex];
    img += '</p>';
    return img;
}

document.write(`
<div id="header">
    <div class="title" align="center">
        <!-- the idea to use a table here came from Headspin. thanks for your old website about GBA compression, laddie  -->
        <table id="titleTable" border="0" cellpadding="20px" cellspacing="5px" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber44">
            <tr>
            <td><a href="./index.html"><img id="logo" border="0" src="assets/img/global/quickpfp.png" width="128"></a></td>
            <td>
            <h1 style="margin-top:30px">Atapi's Own Little World</h1>
            </tr>
        </table>
    </div>
    <script type="text/javascript">document.write(getQuoteTag());</script>
    <div id="nav" style="margin-top: -15px">
        <a href="projects.html"><img class="nav-icon" src="./assets/img/global/folder.png"> Projects</a>
        -
        <a href="misc.html"><img class="nav-icon" src="./assets/img/global/misc.png"> Misc</a>
        -
        <a href="dumps.html"><img class="nav-icon" src="./assets/img/global/chip.png"> Dumps</a>
        -
        <a href="blog.html"><img class="nav-icon" src="./assets/img/global/notepad.png"> Blog</a>
        -
        <a href="gallery.html"><img class="nav-icon" src="./assets/img/global/gallery.png"> Gallery</a>
        <br/>
        <a href="greetz.html"><img class="nav-icon" src="./assets/img/global/greetz.png"> Greetz</a>
        -
        <a href="http://users3.smartgb.com/g/g.php?a=s&i=g36-33432-a2"><img class="nav-icon" src="./assets/img/global/guestbook.png"> Guestbook!</a>
        <br/>
    </div>
    <div id="separator" style="margin-top:5px; margin-bottom: 5px;">
        <img width="100%" height="6px" id="spacer" src="assets/img/global/border.png"">
        <br/>
        <br/>
    </div>
</div>
`);

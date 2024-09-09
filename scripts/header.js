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
    "i may be cringe but you're mean and that's worse <img style=\"vertical-align:middle;\" src=\"assets/img/smileys/sad.png\">",
    "everyday i'm tacoing. woah, i'm so random!",
    "WATCH OUT FOR GAS STATION TWEAKERS!",
    "i was never book smart, i'm money smart, makes me more intelligent",
    "unattended children will be taught x86 assembly",
    "all my friends are creepers they explode",
    "jgjsdjfghkahkfjhkshlalksd",
    "hey girl can we go on a wii sports resort date",
    "long live the queen. you woulda loved skibidi toilet.",
    "i am suffering from a GNOME issue",
    "Maclunkey!",
    "wow i'm so gay and dumb and i like girls and awagga",
    "Hi! I'm not Hugh Bliss!",
    "sometimes the side chick ain't even a chick, it be Microsoft DirectX 9.0c Redistributables",
    "Holy knuckle-cracking kringles on a bullet train with a sack full of ketchup-covered cheese logs!",
    "Oh hi. So, how are you holding up? BECAUSE I'M A POTATO.",
    "Welcome to www.worm.com ! Hacked by Chinese!",
    "how do you type with boxing gloves on?",
    "What is this? Did the quadratic formula explode?",
    "All your base are belong to us.",
    "My ROFLcopter goes soi soi soi soi soi soi",
    "I like turtles.",
    "lol, internet",
    "O RLY?",
    "The school books say it can't be here again",
    "Can't sleep, clown will eat me",
    "I know you can read my thoughts, boy. Meow meow meow meow meow meow",
    "LEEEEROOOOOOOOY JEEENKINS!",
    "WHO IS THIS 4CHAN",
    "How do I shot web?",
    "Ceiling GLaDOS is watching you die.",
    "<a href=\"https://i.kym-cdn.com/entries/icons/mobile/000/000/305/duckroll169.jpg\">Click here for epic</a>",
    "FYI I am a spy",
    "Berenyuu~",
    "THIS WEBSITE CONTAINS WIN",
    "Kiani, Biscuit!",
    "Queer cats? In MY website? It's more likely than you think.",
    "Can you feel the sunshine?",
    "INVISIBLE BIKE",
    "Lurk Moar.",
    "I can haz cheezburger?",
    "That's Mama Luigi to you, Mario!",
    "My spoon is too big!",
    "You're the man now, dog!",
    "PUNCH THE KEYS, FOR GOD'S SAKE!",
    "i has a shuvel",
    "I AM ERROR.",
    "PUSH START TO RICH.",
    "Good luck, I'm behind 7 proxies!",
    "y u brake game",
    "missingno",
    "Be sure to drink your Ovaltine",
    "But can it run Crysis?",
    "Terrible, terrible damage!",
    "SHAAAAAAAAAAAUN!",
    "Jason! Jason! Jason!",
    "Me Gusta!",
    "Door stuck! DOOR STUCK!",
    "are you guys going trick or treating?".
    "How does one patch KDE2 under FreeBSD?",
    "Wololo!",
    "This is sewious!",

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

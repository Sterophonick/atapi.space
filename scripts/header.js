var quoteStrings = [
    // asdfmovie
    "Everybody do the flop!", "-- Do the Flop Guy, asdfmovie6",
    "Hi, babe, yes I am real man, you wanna go skateboards?", "-- Real Man, asdfmovie8",
    "Beep, Beep, I'm a sheep, I said, Beep, Beep, I'm a sheep!", "-- Sheep, asdfmovie10",
    "look a ball! bal man!", "-- TomSka",
    "Look out, he's got a nose!", "-- Cop, asdfmovie",
    "Piano! *CRASH* Who's idea was this!?", "-- asdfmovie4",
    "Hey, Bobby! Play that one about fallin' down the stairs!", "-- Johnny, asdfmovie5",

    // Poker Night at the Inventory / Poker Night 2
    "I will make hat from you, little bunny!", "-- The Heavy, Poker Night at the Inventory",
    "If you keep indulging in my blatant dishonesty, I'm gonna have to run for congress.", "-- Sam, Poker Night 2",
    "I'm just going to turn my DS on, and you guys keep giving me your money. This is an incredible system we've got here.", "-- Tycho Brahe, Poker Night at the Inventory",
    "My face is a universal symbol of death and destruction!", "-- Max, Poker Night 2",
    "Nikola Tesla was in direct communication with intelligences from another dimension.", "-- GLaDOS, Poker Night 2",
    "There's a hole in Siberia that leads directly to hell. It's 3 inches wide.", "-- GLaDOS, Poker Night 2",
    "The Player has busted out, and must leave the table before everyone starts laughing.", "-- GLaDOS, Poker Night 2",
    "I know something you don't know. Not about this hand. Just generally.", "-- GLaDOS, Poker Night 2",
    "The judicious poker player knows the importance of a well-timed fold. And then there's you.", "-- GLaDOS, Poker Night 2",
    "Congratulations. You're a universe-imperiling paradox in dog's clothing.", "-- GLaDOS, Poker Night 2",
    "You guys might want to work on your poker faces before going up against a trained spy.", "-- Brock Samson, Poker Night 2",
    "Well, duh, you're a doof, Sam!", "-- Max, Poker Night 2",
    "You're just gonna fold? But now I can't guilt you into betting bad cards by putting on my cute rabbit face!", "-- Max, Poker Night at the Inventory",
    "Well, of COURSE you won with those cards. Even Steve could've won with those cards, and all he can say is \"Hey-o!\"", "-- Claptrap, Poker Night 2",

    // Homestar Runner
    "The system is down, yo!","-- Strong Bad",
    "how do you type with boxing gloves on?", "-- Strong Bad",
    "What is this? Did the quadratic formula explode?", "-- Strong Bad",

    // Half-Life
    "grodon fremann!!!!", "-- Me",
    "Does anyone know who ate all the donuts?", "-- Black Mesa Scientist",
    "I still have nightmares about that cat.", "-- Barney Calhoun",
    "The right man in the wrong place can make all the difference in the world.", "-- G-Man",

    // Shortwave Radio
    "Achtung! Achtung!", "-- G04 \"Three Note Oddity\" Numbers Station",
    "YANKEE. HOTEL. FOXTROT.", "-- Unknown NATO Alphabet Station, The Conet Project",
    "DELTA. FOXTROT. DELTA. ZWEI EINS.", "-- G14 \"DFC37 / DFD21\" Numbers Station",
    "39715 39715 39715 39715 39715 39715 39715 39715 39715 39715", "-- E03 \"The Linconshire Poacher\" Numbers Station",
    "COORDINATED UNIVERSAL TIME.", "-- WWV Time Station, 10000 KHz",
    "I lied. I don't have Netflix. Take off your shoes, we're listening to shortwave radio numbers stations.", "-- some meme i found on kym",
    "Our hen is about to lay an egg. All is good. Until I hear from you again.","-- G01 \"Tyrolean Music Station,\" translated from German",
    "Two. Five. Six. Oblique. Zero. Zero. Two. Five. Six. Oblique. Zero. Zero. Out.","-- E11 \"Oblique\" Numbers Station",

    // Napoleon Dynamite
    "You got, like, three feet of air that time.", "-- Napoleon Dynamite",
    "I told you! I spent it with my uncle in Alaska hunting wolverines!", "-- Napoleon Dynamite",
    "Who's the one that knows illegal ninja moves from the government?", "-- Napoleon Dynamite",

    // Old Internet Memes
    "Picard Approves", "-- Unknown",
    "They called it Xbox 360 because you turn 360 degrees and walk away.", "-- Unknown",
    "Windmills do not work that way!", "-- Morbo",
    "You can't ground Spider-Man!", "-- Unknown",
    "Can I be drawn better?", "-- Unknown",
    "SOPA, Y U NO LEAVE INTERNET ALONE?", "-- Unknown",
    "NEDM", "-- Unknown",
    "Good luck, I'm behind 7 proxies!", "-- Anon",
    "y u brake game", "-- Unknown",
    "missingno", "-- Minecraft",
    "Be sure to drink your Ovaltine", "-- Little Orphan Annie",
    "But can it run Crysis?", "-- Every PC gamer in 2007",
    "Terrible, terrible damage!", "-- Dustin Browder",
    "SHAAAAAAAAAAAUN!", "-- Ethan Mars",
    "Jason! Jason! Jason!", "-- Ethan Mars",
    "Me Gusta!", "-- Unknown",
    "Door stuck! DOOR STUCK!", "-- jrbsn",
    "are you guys going trick or treating?", "-- GoronCity.net",
    "How does one patch KDE2 under FreeBSD?", "-- Unknown",
    "Wololo!", "-- Priest, Age of Empires",
    "This is sewious!", "-- Ming-Ming",
    "Can you feel the sunshine?", "-- TJ Davis, Sonic R",
    "INVISIBLE BIKE", "-- that one cat meme from like 2006",
    "Lurk Moar.", "-- Rules of the Internet",
    "I can haz cheezburger?", "-- Eric Nakagawa",
    "That's Mama Luigi to you, Mario!", "-- Luigi",
    "My spoon is too big!", "-- Rejected by Don Hertzfeldt",
    "You're the man now, dog!", "-- Sean Connery, Finding Forrester",
    "PUNCH THE KEYS, FOR GOD'S SAKE!", "-- Sean Connery, Finding Forrester",
    "i has a shuvel", "-- Baby Kermit, unknown origin",
    "Kiani, Biscuit!", "-- <a href=\"https://www.youtube.com/watch?v=hw3jkIUnvVc\">Try not to laugh or grin at this video</a>",
    "THIS WEBSITE CONTAINS WIN","-- Me",
    "<a href=\"https://i.kym-cdn.com/entries/icons/mobile/000/000/305/duckroll169.jpg\">Click here for epic</a>", "do it bro trust me",
    "LEEEEROOOOOOOOY JEEENKINS!", "-- Ben Schulz",
    "Who is this 4chan?", "-- Brooke Baldwin",
    "How do I shot web?", "-- Unknown",
    "All your base are belong to us.", "-- CATS leader, Zero Wing",
    "My ROFLcopter goes soi soi soi soi soi soi", "-- Unknown Warcraft III Player",
    "I like turtles.", "-- Johnathan Ware",
    "lol, internet", "-- YTMND",
    "O RLY?", "-- Unknown",
    "Redundant adjective is redundant", "-- Me",
    "Play him off, Keyboard Cat!", "-- Keyboard Cat",

    // Portal
    "It's a paradox, there is NO answer!", "-- GLaDOS",
    "New mission: refuse this mission!", "-- Paradoxes Poster, Portal 2",
    "THIS. SENTENCE. IS. FALSE!", "-- GLaDOS",
    "Ceiling GLaDOS is watching you die.", "-- Valve Fan Store T-Shirt",
    "Oh hi. So, how are you holding up? BECAUSE I'M A POTATO.", "-- GLaDOS",
    "Testing is the future, and the future starts with you!", "-- Announcer, Portal 2",
    "Let me answer those questions with a question: Who wants to make sixty dollars? Cash.", "-- Cave Johonson",
    "If the laws of physics no longer apply in the future, God help you.","-- Announcer, Portal 2",

    // Minecraft
    "The Creeper is a spy!", "-- Minecraft",

    // Halo
    "Sir. Big DS.", "-- Huge Nintendo DS",
    "I Love Bees!", "-- Halo 2 Promotion",

    // Smiling Friends
    "I love this place, I've been coming here since I was a Homunculus.", "-- Charlie Dompler",
    "That's my point, good times are fleeting. It doesn't change the fact the Sun is going to Explode.", "-- Desmond, Smiling Friends",
    "Hooray! I have reached level 987,413 in Mouse Quest!", "-- Shrimp, Smiling Friends",

    // /ppg/
    "Leaks are over, go home!", "-- Unknown",
    "me want beytah right now", "-- Unknown",
    "bad daytah, no beytah", "-- Anon on /vp/",

    // EarthBound
    "Coming Winter 2014!", "-- Unknown",
    "You guys can’t envision the final collapse of Capitalism? Incredible!", "-- Stoic Club patron, EarthBound",
    "For some reason, a pencil-shaped iron statue is blocking the path.", "-- EarthBound",
    "After all, it could only cost you your life, and you got that for free!", "-- Summers Sailor, EarthBound",
    "On days like these, kids like you should be playing Nintendo games.", "-- Onett cop, EarthBound",
    "Fuzzy Pickles!", "-- Photo Man, EarthBound",
    "Argh, Yagh!", "-- Giygas",
    "You cannot grasp the true form of Giygas' attack!", "-- EarthBound",
    "Boing! Zoom! Dakota!", "-- Mr. Saturn",
    "You're awfully kind taking time out to talk to a mouse. This mouse loves you!", "-- Mouse, EarthBound",
    "We had fun one snowy day. I melted, but I am still real in your memory.", "-- Ness' Snowman",
    "All of the info is there, except for the info that isn't there.", "-- Onett Librarian",
    "Broken down, old submarine. The yellow color is purely coincidental.", "-- EarthBound",
    "Clear out. Of way out get my", "-- Onett Cop, EarthBound",

    // Undertale / Deltarune
    "[[Hyperlink Blocked.]]", "-- Spamton",
    "Now's your chance to be a [[BIG SHOT!]]", "-- Spamton",
    "Despite everything, it's still you.", "-- Undertale",
    "Doggo blocks the way!", "-- Undertale",
    "I'M UNDYNE AND I'M PILING ON THE SMOOCHES!", "-- Undyne",
    "I can't go to hell. I'm already out of vacation days.", "-- Burgerpants",
    "You're a wimpy loser with a big heart!", "-- Undyne",
    "You can't use the fire exit because you're not made of fire.", "-- Undertale",
    "First, ghosts are real, now anime's real. All my nightmares are true.", "-- Aaron, Undertale",
    "Perhaps mankind was not meant to pet this much.", "-- Undertale",

    // Political / LGBTQ+
    "trans rights are human rights, now and forever", "-- @LinusTechTip_",
    "we can't kiss girls anymore. because of woke.", "-- Me",
    "Queer cats? In MY website? It's more likely than you think.", "-- Me",
    "enbies don't owe you androgyny, but you owe enbies all of your money!", "-- Me",
    "Thank god you're here, look what Antifa did!", "-- a cool magnet i found",
    "It's too bad that stupidity isn't painful.", "-- Anton Szandor LaVey",
    "Be kind to people, be ruthless to systems.", "-- PinkWug",
    "Live so that if your life was a book, fascists would ban it.", "-- Me",
    "Be silly, be kind, be weird. There's no time for anything else.", "-- @slhslhslh",
    "Better a pig than a fascist.", "-- Porco Rosso",
    "You often find the best humanity has to offer amongst those that society dismisses as not being human at all.","-- Jenetrix",


    // Sam & Max
    "He's in a better place now. Just kidding. He's in hell.", "-- Max",
    "Holy knuckle-cracking kringles on a bullet train with a sack full of ketchup-covered cheese logs!", "-- Sam",
    "Hi! I'm not Hugh Bliss!", "-- Hugh Bliss",
    "\"Hard Luck.\" Classy.", "-- Sam",
    "An idle mind is The Devil's Playhouse.", "-- Max's Super-Ego",
    "But Max, you don't even like girls!", "-- Sam Clones",
    "My innocence has been shattered by this blatant tourist trap. I want my money back.", "-- Max",
    "My mind is a swirling miasma of scintillating thoughts and turgid ideas.", "-- Sam",
    "I work for the largest division of Hell, the FCC!", "-- Hugh Bliss",

    // The Simpsons
    "I'm somewhere where I don't know where I am!", "-- Homer Simpson",
    "Can't sleep, clown will eat me", "-- Bart Simpson",
    "I know you can read my thoughts, boy. Meow meow meow meow meow meow", "-- Homer Simpson",
    "Hi, Super Nintendo Chalmers!", "-- Ralph Wiggum",
    "Don't have a cow, man!", "-- Bart Simpson",
    "I'm the mascot of an evil corporation!", "-- Bart Simpson",

    // Linux
    "Waiter, waiter! More Wineserver instances please!", "-- IceFireFish",
    "Processing Vulkan shaders...", "-- Steam for Linux",
    "Bailing out, you are on your own. Good luck.", "-- Arch Linux",
    "You probably just broke your system. Congratulations.", "-- Arch Linux",
    "sudo make me a sandwich", "-- Randall Munroe, xkcd",
    "me when d8vk merge", "-- Joshua \"Misyl\" Ashton",
    "i am suffering from a GNOME issue", "-- Bazzite developers",

    // Game recommends
    "Also try Titanfall 2!", "",
    "Also try Messiah!","",
    "Also try Yakuza 0!","",
    "Also try Yakuza Kiwami!","",
    "Also try Yakuza Kiwami 2!","",
    "Also try Like a Dragon: Gaiden!","",
    "Also try Lost Judgment!","",
    "Also try MadWorld!","",
    "Also try American McGee's Alice!","",
    "Also try Peter Jackson's King Kong!","",
    "Also try Bayonetta!","",
    "Also try Halo: ODST!","",
    "Also try Devil May Cry!","",
    "Also try OneShot!","",
    "Also try Sam & Max Save the World!","",
    "Also try Sam & Max: The Devil's Playhouse!","",
    "Also try Assassin's Creed!","",
    "Also try STAR WARS: Dark Forces!","",
    "Also try Hi-Fi RUSH!","",
    "Also try Crysis!","",
    "Also try DUSK!","",
    "Also try The Chronicles of Riddick!","",
    "Also try Alien Hominid HD!","",
    "Also try Singularity!","",
    "Also try Psychonauts!","",
    "Also try F.E.A.R.!","",
    "Also try Unreal!","",
    "Also try Wolfenstein: The New Order!","",
    "Also try Minecraft!","",
    "Also try ilomilo!","",
    "Also try Castle Crashers!","",
    "Also try Half-Life!","",
    "Also try Epic Pinball!","",
    "Also try Jazz Jackrabbit 2!","",

    // Warez
    "See you in the next release!", "-- Mode7(?)",
    "eURASiA 2003+ - fOR pLEASURE, nOT pRESSURE", "-- EURASiA",
    "mugs - look sally, its purple haze! oh john! thats so amazing!", "-- Most Ugly Gameboy Sceners",
    "RELOADED has done it again. Another key generator released by the best.", "-- LHS",
    "WRG's back with it's first GBA release of the year!","-- Wolf'n Road Group",
    "-= dumping trash, so you can play with it =-", "-- Trashman",

    // Yakuza
    "Ten years in the joint made you a [[DATA EXPUNGED]]!", "-- Akira Nishikiyama",
    "Heh... High five, brain.", "-- Goro Majima",
    "Comedy? There's no place for <i>comedy</i> in a yakuza story...", "-- Kazuma Kiryu",
    "Yo. Kiryu-chan~!", "-- Goro Majima",

    // Malware
    "Dis is one half. Press any key to continue ...", "-- Virus:DOS/OneHalf",
    "Kuku! Kuku! Kuku! Kuku! Kuku! Kuku!", "-- Virus:DOS/Kuku",
    "USSR     ViruSoft  (c)  v1. 1990", "-- Virus:DOS/HYMN",
    "Don't be afraid. I am a very kind virus. You have do many works today.", "--Virus:DOS/Skynet",
    "billy gates why do you make this possible ? Stop making money and fix your software!!", "-- Worm:Win32/Blaster",
    "BOOM! No more RedX !!!", "-- Virus:DOS/Hafen",
    "Your PC is now STONED!", "-- Virus:DOS/Stoned",
    "Copy me, I want to travel!", "-- Virus:DOS/Eddie",
    "TECHNO TECHNO TECHNO TECH >>Don't Touch the keyboard<< TECHNO TECHNO TECHNO TECHNO", "-- Virus:DOS/Techno",
    "Welcome to www.worm.com ! Hacked by Chinese!", "-- Worm:Win32/CodeRed",
    "As you reboot, you find that something has overwritten your MBR! It is a sad thing your adventures have ended here!", "-- Classic Shell / Audacity FOSShub trojan",
    "Ooops, your important files are encrypted.","-- Ransom:Win32/NotPetya",
    "sinkhole.tech - where the bots party hard and the researchers harder","-- WannaCry Killswitch Domain Sinkhole",
    "Happy New Year 1999 !!","-- Worm:Win32/Happy99",
    "Dedicated to the dynamic memories of millions of viruses who are no longer with us today - Thanks GOODNESS!!!","-- Virus:Boot/Brain",
    "Between millions of people around the world i found you. Don't forget to remember this day every time MY FRIEND!","-- Virus:Win9x/Pikachu",

    // Just images
    "<img style=\"vertical-align:middle; height:24px; \" title=\"spinnycats by renere\" src=\"assets/img/global/blerbs/spinny_cat_ace.gif\">", "",
    "<img style=\"vertical-align:middle; height:24px; \" title=\"spinnycats by renere\" src=\"assets/img/global/blerbs/spinny_cat_nb.gif\">", "",
    "<img style=\"vertical-align:middle; height:24px; width: 128px;\" src=\"assets/img/global/blerbs/tiger.png\">", "",
    "Low quality Hideo Kojima thinking: <img style=\"vertical-align:middle; height:24px; width: 128px;\" src=\"assets/img/global/blerbs/low_quality_hideo_kojima_thinking.jpg\">","",

    // Petscop / Giftscop
    "Wellcome to puzzle hell.","-- Sheriff Domestic",
    "1 tumbler clicks. 4 gears turn.", "-- test-plane, Giftscop 1.1",
    "TURN OFF PLAYSTATION", "-- Pink Tool, Petscop",
    "I guess that's toneth then. toneth toneth toneth toneth toneth toneth toneth. the end. it's yucky outside.", "-- Toneth's Description, Petscop",
    "It doesn’t matter what you look like, it doesn’t matter how much you’ve changed. Stop wandering and come home.", "-- Petscop",
    "In a way, recordings have the power to raise the dead. They're kind of scary.", "-- Paul, Petscop",
    "Under the Newmaker Plane.", "-- Red Tool, Petscop",
    "GOOD GRIEF AND ALAS", "-- Child Library, Petscop",
    "Keep watching the windmill.", "-- Red Tool, Petscop",
    "Care left the room.", "-- Petscop",
    "They wander the Newmaker Plane.", "-- Petscop",
    "I LOVE YOU NEWMAKER PLEASE SHOW MARVIN WHERE HIS HOUSE IS", "-- Pink Tool, Petscop",
    "ALSO WANTS 1000 PIECES FOR \"MACHINE BEYOND SCHOOL BASEMENT STAIRWAY\"", "-- Pink Tool, Petscop",
    "You found her. You may visit her room.", "-- Petscop",
    "Why would I be in a car? I'm playing Petscop.", "-- Paul, Petscop",

    //Vinesauce
    "I am your friend and BonziBUDDY! I have the ability to learn from you.", "-- BonziBUDDY",
    "It's been nice gnawing you!", "-- BonziBUDDY",
    "Animated Christmas tree for desktop!", "-- Joel \"Vargskelethor\"",
    "Ok I'll.", "-- Joel \"Vargskelethor\"",
    "Kup teraz!", "-- Joel \"Vargskelethor\"",
    "Oh, there's a burning super death sword!", "-- Joel \"Vargskelethor\"",
    "Ghostbusters! They're back in town!", "-- Joel \"Vargskelethor\"",
    "Grand Dad!? Fleenstones!?", "-- Joel \"Vargskelethor\"",
    "He had all the DLL files in the world... but at what cost?", "-- Joel \"Vargskelethor\"",
    "Guys, there's analog dabbing.", "-- Vinny",
    "Luigi, I got Terminal 7! This is what it looks like, Luigi!", "-- Vinny",
    "I'm not a doctor, but I play one in Microsoft Paint.", "-- Vinny",
    "In the game of life, we're all NPCs in someone else's speedrun.", "-- Vinny",

    // SnapCube RTFandub
    "So, this is the fabled Tilted Towers...", "-- Shadow the Hedgehog",
    "I'm the devil... from the Bible.", "-- Black Doom",
    "Anyway, welcome to my purple orb, it's time to go.", "-- Memphis Tennessee",
    "I miss my wife, Tails.", "-- Dr. Eggman",
    "Silver! Silver! The Denny's is that way!", "-- Blaze the Cat",
    "I just get so tilted at the towers.", "-- Memphis Tennessee",
    "I had to trap Sonic in the hell dimension because he disrespected gamers.", "-- Memphis Tennessee",
    "PUBG's old news, Eggman! Tetris 99's where it's at!", "-- Sonic the Hedgehog",

    // Bubsy 3d: Bubsy visits the James Turrell Retrospective
    "hello bubsy. PLEase delete me im just a tech demo", "-- Citizen, Bubsy 3d: Bubsy visits the James Turrell Retrospective",
    "Art's cool :^)", "-- Bubsy, Bubsy 3d: Bubsy visits the James Turrell Retrospective",
    "Look! It's the Los Angeles County Museum of Art! 5905 Wilshire Blvd Los Angeles, CA 90036", "-- Bubsy, Bubsy 3d: Bubsy visits the James Turrell Retrospective",

    // Calvin and Hobbes
    "It's a magical world, Hobbes, ol' buddy... Let's go exploring!", "-- Calvin, Calvin and Hobbes",
    "I think TRUE happiness can only be found in the wanton indulgence of animals.", "-- Hobbes, Calvin and Hobbes",

    // American McGee's Alice
    "You've gone quite mangy, cat, but your grin's a comfort.", "-- Alice, American McGee's Alice",
    "As knowing where you're going is preferable to being lost, ask.", "-- Cheshire Cat, American McGee's Alice",
    "The proper order of things is often a mystery to me. You too?", "-- Cheshire Cat, American McGee's Alice",
    "Only the insane equate pain with success.", "-- Cheshire Cat, American McGee's Alice",
    "Only the foolish believe that suffering is just wages for being different.", "-- Cheshire Cat, American McGee's Alice",
    "Think of it as a Chinese Box or a stubborn lid. A tap in the right spot might do the trick.", "-- Cheshire Cat, American McGee's Alice",

    // BattleBlock Theater
    "Get the best time to win! Get the worst time to lose!", "-- Announcer, BattleBlock Theater",
    "Milk, milk lemonade, bring the hat and you'll get paid!", "-- Announcer, BattleBlock Theater",
    "There was explosions! And dancing girls! Dancing girls who exploded!", "-- Announcer, BattleBlock Theater",
    "Now it goes without saying, but cats REALLY don't like to be ignored.", "-- Announcer, BattleBlock Theater",
    "I see them lurking in the shadows... lurking hard! Or hardly lurking, seeee?", "-- Announcer, BattleBlock Theater",

    // Hypnospace Outlaw
    "Hypnospace? Did we really use it? Or did it use us?","-- Artie Dispenza, Hypnospace Outlaw",

    // Misc
    "Looking down with my hyper-realistic eyes, I saw that it was covered in hyper-realistic blood.", "-- Every Creepypasta in 2012",
    "What's the square root of a fish? Now I'm sad.", "-- Skullgirls",
    "Think fast, chucklenuts!", "-- Scout, Team Fortress 2",
    "Click to enable Adobe Flash Player", "-- Adobe Flash Player",
    "PURE EVIL SINCE 1996!", "-- Soylent Communications",
    "That's a Y.P., not an M.P.!", "-- Petey the Cat",
    "they put the mamsnrhbr chehfde in the soder",  "-- discord gifs",
    "BUT WHO WAS PHONE??", "-- 4chan Copypasta",
    "YO SKRILL, DROP IT HARD!", "-- Sirah, Skrillex - Kyoto",
    "nyanyanya!", "",
    "Apply directly to the forehead!", "-- HeadOn! Commercial",
    "It's now safe to turn off your computer.", "-- Windows 95",
    "Hamboning will save your life someday.", "-- Rigby",
    "Buzz, look! An alien!", "-- Woody",
    "It's just a flesh wound.", "-- The Black Knight",
    "Nobody expects the Spanish Inquisition!", "-- Monty Python's Flying Circus",
    "Remember our promise.", "-- SIGNALIS",
    "\"That's what.\"", "-- she",
    "My body is ready.", "-- Reggie Fils-Aime",
    "WHAT A HORRIBLE NIGHT TO HAVE A CURSE.", "-- Castlevania II: Simon's Quest",
    "I only upload high quality video game rips.", "-- SiIvaGunner",
    "Not my fault, Tucker did it!", "-- Red, RedvsBlue",
    "I am not an atomic playboy!", "-- Future Crew",
    "sfc /scannow chkdsk", "-- joe biden",
    "An Evil Kumquat ate this blurb.", "-- cheddargirl",
    "PUSH START TO RICH.", "-- Dian Shi Ma Li",
    "I AM ERROR.", "-- Zelda II: The Adventure of Link",
    "Burenyuu~", "-- Neco Arc",
    "The school books say it can't be here again.", "-- Tay Zonday",
    "sometimes the side chick ain't even a chick, it be Microsoft DirectX 9.0c Redistributables", "-- Me",
    "wow i'm so gay and dumb and i like girls and awagga", "-- Me",
    "にゃ～","",
    "What is a man? A little pile of secrets. But enough talk, have at you!", "-- Dracula",
    "has you really been far even as decided to use even go want to look more like?", "-- Chip Madeen",
    "Where did you learn to fly?", "-- Skylar, Cybermorph",
    "i may be cringe but you're mean and that's worse <img style=\"vertical-align:middle;\" src=\"assets/img/smileys/sad.png\">", "-- Unknown",
    "everyday i'm tacoing. woah, i'm so random!", "-- Unknown",
    "WATCH OUT FOR GAS STATION TWEAKERS!", "-- Ghetto Smosh",
    "i was never book smart, i'm money smart, makes me more intelligent", "-- Jay Eazy",
    "unattended children will be taught x86 assembly", "-- Me",
    "all my friends are creepers they explode", "-- ElegantAshes",
    "jgjsdjfghkahkfjhkshlalksd", "-- Me",
    "hey girl can we go on a wii sports resort date", "-- star dog",
    "long live the queen. you woulda loved skibidi toilet.", "-- crs100",
    "Maclunkey!", "-- Greedo",
    "Reject humanity, embrace meow", "-- ZenithNeko",
    "2) Cover yourself in oil", "-- Unknown",
    "haiiii ^_^ hi!! \<3 haiiiiiii hiii :3", "-- Unknown",
    "duck in game stop. what will he buy.", "-- Unknown",
    "swag money. money money swag.", "-- Me",
    "No bobux :(", "-- Unknown",
    "Get Psyched!", "-- Wolfenstein 3D",
    "Call Apogee Say Aardwolf", "-- Wolfenstein 3D",
    "Ready for Round 2, Jeff?", "-- Sonic.EXE",
    "holy freaking bingle. what!? :3", "-- maia arson crimew",
    "This station will not be participating in digital conversion at this time.", "-- LOCAL58TV",
    "System Error. Contact Xbox Customer Support.", "-- Xbox 360",
    "if your grave doesnt say \"rest in peace\" on it you are automatically drafted into the skeleton war", "-- @dril",
    "the doritos corporation thanks you", "-- Kyle Gospo",
    "Marcianito 100% real bailando cumbia.wmv", "-- Unknown",
    "Let's face it... I'm cute.", "-- meeeeeeeeee :3",
    "Hey, you can't have that! That snorkel's been just like a snorkel to me!", "-- Weird Al",
    "You question the words of the mighty Jimmy!?", "-- Master Shake",
    "You look at him and tell me there's a god.", "-- Master Shake",
    "Get the X-ROM 512 for your GameBoy Advance TODAY!", "-- EasyBuy2000",
    "How lucky I am to have something that makes saying goodbye so hard.", "-- Winnie the Pooh",
    "Pika Pika!", "-- Pikachu",
    "Katarn will never come near this ship.", "-- General Mohc, STAR WARS: Dark Forces",
    "Better to let your opponent have his pot, than to build him a new one", "-- Artie Flopshark, Telltale Texas Hold'Em",
    "You know, like a liar.", "-- John Mulaney",
    "This is the height of luxury!", "-- John Mulaney",
    "We want a GIFT! But only if it's MONEY!", "-- John Mulaney",
    "Get some rest, tall child!", "-- John Mulaney",
    "whats that? you dont drink wet cement? you couldnt be more pathetic.", "-- bunnipop",
    "I miss you, Cynthia, rest in power.","", //199? - 2021

];

function getQuoteTag() {
    var img = '<p style=\"margin-top: -15px\">';

    var randomIndex = Math.floor(Math.random() * quoteStrings.length / 2) * 2; // get even random number
    img += quoteStrings[randomIndex];
    img += '<br/>';
    img += '<span style=\"font-size:15pt; line-height:1.0;\"><i>';
    img += quoteStrings[randomIndex+1];
    img += '</i></span>';
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

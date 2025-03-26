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
    "Nope, nope, nope, the land of ten thousand nopes.", "-- Strong Bad",
    "Hey, Strong Bad! I'm inside your house.", "-- Homestar Runner",

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
    "Be sure to drink your Ovaltine.", "-- Little Orphan Annie, A Christmas Story",
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
    "Science isn't about WHY, it's about WHY NOT!", "-- Cave Johnson",
    "Look at you, sailing through the air majestically. Like an eagle. Piloting a blimp.", "-- GLaDOS",
    "Space? Space! SPAAAAAAAAAAAAAAAAAAAAAAAACE!", "-- Space Core",

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
    "You guys can't envision the final collapse of Capitalism? Incredible!", "-- Stoic Club patron, EarthBound",
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
    "You often find the best humanity has to offer amongst those that society dismisses as not being human at all.","-- @Jenetrix",
    "Hate has caused a lot of problems in this world, but it hasn't solved one yet.","-- Li'l Petey, Cat Kid Comic Club: Mothering Heights",
    "We don't exactly fit in. Anywhere. And we've made that our greatest strength.","-- Faith Connors, Mirror's Edge",
    "The axe forgets, but the tree remembers.", "-- Unknown (Shona proverb?)",
    "Do not obey in advance.", "-- Timothy D. Snyder",
    "Tyranny requires constant effort. It breaks, it leaks. Authority is brittle. Oppression is the mask of fear.", "-- Karis Nemik, STAR WARS: Andor (S01E12)",
    "A shared sorrow is only half a sorrow.", "-- One Topic at a Time",

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
    "I'm not going back in that closet. Not after all we've accomplished.", "-- Sam",

    // The Simpsons
    "I'm somewhere where I don't know where I am!", "-- Homer Simpson",
    "Can't sleep, clown will eat me", "-- Bart Simpson",
    "I know you can read my thoughts, boy. Meow meow meow meow meow meow", "-- Homer Simpson",
    "Hi, Super Nintendo Chalmers!", "-- Ralph Wiggum",
    "Don't have a cow, man!", "-- Bart Simpson",
    "I'm the mascot of an evil corporation!", "-- Bart Simpson",
    "Glove slap! Baby, glove slap! Glove slap! Shut your big yap!", "-- The Simpsons",
    "I was thinking along the lines of \"No TV and no beer make Homer something something.\"","-- Homer Simpson",
    "A gun is not a weapon, it's a tool, like a hammer or a screwdriver or an alligator.", "-- Homer Simpson",

    // Linux
    "Waiter, waiter! More Wineserver instances please!", "-- IceFireFish",
    "Processing Vulkan shaders...", "-- Steam for Linux",
    "Bailing out, you are on your own. Good luck.", "-- Arch Linux",
    "You probably just broke your system. Congratulations.", "-- Arch Linux",
    "sudo make me a sandwich", "-- Randall Munroe, xkcd",
    "me when d8vk merge", "-- misyltoad",
    "i am suffering from a GNOME issue", "-- Bazzite developers",
    "Your system at a SPARC! Gah!", "-- Linux kernel oops on PA-RISC", 

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
    "Also try Sword with Sauce!", "",
    "Also try Indiana Jones and the Great Circle!","",

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
    "Don't be afraid. I am a very kind virus. You have do many works today.", "-- Virus:DOS/Skynet",
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
    "<img style=\"vertical-align:middle; height:24px; \" title=\"spinnycats by renere\" src=\"/assets/img/global/blerbs/spinny_cat_ace.gif\">", "",
    "<img style=\"vertical-align:middle; height:24px; \" title=\"spinnycats by renere\" src=\"/assets/img/global/blerbs/spinny_cat_nb.gif\">", "",
    "<img style=\"vertical-align:middle; height:24px; width: 128px;\" src=\"/assets/img/global/blerbs/tiger.png\">", "",
    "Low quality Hideo Kojima thinking: <img style=\"vertical-align:middle; height:24px; width: 128px;\" src=\"/assets/img/global/blerbs/low_quality_hideo_kojima_thinking.jpg\">","",

    // Petscop / Giftscop
    "Wellcome to puzzle hell.","-- Sheriff Domestic",
    "1 tumbler clicks. 4 gears turn.", "-- test-plane, Giftscop 1.1",
    "TURN OFF PLAYSTATION", "-- Pink Tool, Petscop",
    "I guess that's toneth then. toneth toneth toneth toneth toneth toneth toneth. the end. it's yucky outside.", "-- Toneth's Description, Petscop",
    "It doesn't matter what you look like, it doesn't matter how much you've changed. Stop wandering and come home.", "-- Petscop",
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
    "A secret is only a secret when it is unspoken to another.", "-- Cheshire Cat, Alice: Madness Returns",
    "A reflection sometimes exposes more reality than the object it echoes.", "-- Cheshire Cat, Alice: Madness Returns",
    "When the remarkable becomes bizarre, reason turns rancid.", "-- Cheshire Cat, Alice: Madness Returns",

    // BattleBlock Theater
    "Get the best time to win! Get the worst time to lose!", "-- Announcer, BattleBlock Theater",
    "Milk, milk lemonade, bring the hat and you'll get paid!", "-- Announcer, BattleBlock Theater",
    "There was explosions! And dancing girls! Dancing girls who exploded!", "-- Announcer, BattleBlock Theater",
    "Now it goes without saying, but cats REALLY don't like to be ignored.", "-- Announcer, BattleBlock Theater",
    "I see them lurking in the shadows... lurking hard! Or hardly lurking, seeee?", "-- Announcer, BattleBlock Theater",

    // Hypnospace Outlaw
    "Hypnospace? Did we really use it? Or did it use us?","-- Artie Dispenza, Hypnospace Outlaw",
    "I see you're exploring Hypnospace, can I help out?","-- Professor Helper, Hypnospace Outlaw",
    "computer....shakespear....flamingo","-- Terry, Hypnospace Outlaw",

    // The Secret of Monkey Island
    "How appropriate. You fight like a cow.", "-- Guybrush Threepwood, The Secret of Monkey Island",
    "It's days like this that makes you glad to be dead.", "-- LeChuck, The Secret of Monkey Island",
    "Never pay more than 20 bucks for a computer game.", "-- Guybrush Threepwood, The Secret of Monkey Island",

    // Grim Fandango
    "My scythe--I like to keep it next to where my heart used to be.", "-- Manny Calavera, Grim Fandango",
    "Whatever you say, Jefe.", "-- Manny Calavera, Grim Fandango",
    "You're not too big. The cars are just too small.", "-- Manny Calavera, Grim Fandango",
    "Yeah, yeah. Pretty busy. My carpal tunnel syndrome is really acting up.", "-- Balloon Twister, Grim Fandango",
    "The living still give me the creeps.", "-- Manny Calavera, Grim Fandango",

    // Humongous Entertainment
    'A spy without a gadget is like a shopping cart without a broken wheel.', '-- Spy Fox, Spy Fox in "Dry Cereal"',
    "The name's Fox. Spy Fox.", "-- Spy Fox",
    "Ah, Monkey Penny. Now this is a real TV dinner.", '-- Spy Fox, Spy Fox in "Dry Cereal"',

    // Indiana Jones
    "I don't know, I'm making this up as I go.", "-- Indiana Jones, Raiders of the Lost Ark",
    "Nazis. I hate these guys.", "-- Indiana Jones, Indiana Jones and the Last Crusade",
    "They took the cat mummy, Marcus.", "-- Indiana Jones, Indiana Jones and the Great Circle",
    "You lost today, kid. But that doesn't mean you have to like it.", "-- Fedora, Indiana Jones and the Last Crusade",
    "You'll have one hell of a story to tell.", "-- Indiana Jones, Indiana Jones and the Great Circle",

    // Metal Gear
    "Memes, the DNA of the soul...", "-- Monsoon, Metal Gear Rising: Revengeance",
    "La-li-lu-le-lo! La-li-lu-le-lo! La-li-lu-le-lo!", "-- Roy Campbell, Super Smash Bros. Brawl",
    "Building the future and keeping the past alive are one in the same thing.", "-- Solid Snake, Metal Gear Solid 2: Sons of Liberty",
    "We've inherited freedom from all those who have fought for it.", "-- Solid Snake, Metal Gear Solid 2: Sons of Liberty",
    "We need to pass the torch and let our children read our messy and sad history by its light.", "-- Solid Snake, Metal Gear Solid 2: Sons of Liberty",
    "Even if a pawn becomes a queen, it is still just a playing piece.", "-- President Johnson, Metal Gear Solid 2: Sons of Liberty",
    "There's no winning or losing for a mercenary.","-- Solid Snake, Metal Gear Solid",
    "Find something to believe in, and find it for yourself. When you do, pass it onto the future.","-- Solid Snake, Metal Gear Solid 2: Sons of Liberty",
    "TURN THE GAME CONSOLE OFF RIGHT NOW", "-- Roy Campbell (Malfunctioning), Metal Gear Solid 2: Sons of Liberty",
    "Nanomachines, son.", "-- Senator Armstrong, Metal Gear Rising: Revengeance",
    "You can stop being part of a mistake, starting now.", "-- Solid Snake, Metal Gear Solid 2: Sons of Liberty",
    "The foibles of politics and the march of time can turn friends into enemies just as easily as the wind changes.", "-- The Boss, Metal Gear Solid 3: Snake Eater",
    "It's not about changing the world. It's about doing our best to leave the world the way it is.", "-- Big Boss, Metal Gear Solid 4: Guns of the Patriots",
    "To a ruler, an everlasting enemy is convenient.", "-- Revolver Ocelot, Metal Gear Solid V: The Phantom Pain",
    "I need scissors! 61!", "-- Roy Campbell (Malfunctioning), Metal Gear Solid 2: Sons of Liberty",
    
    // Okami
    "Ah, the wonders of nature! A deep valley between two lofty peaks!", "-- Issun, Okami",
    "It takes two to tango. The bond of the brush shall intercede!", "-- Waka, Okami",
    "Prudence is paramount when you're traveling. Remember that, pooch!", "-- Tea Customer, Okami",
    "I'm as plump as a dumpling, but I'm poisonous! Yes! Poisonous!", "-- Past Kamiki Merchant, Okami",
    "Even the most solid defense has a tiny gap like the eye of a needle!", "-- Waka, Okami",
    "Ammy's a wolf, not a speedboat!", "-- Issun, Okami",
    "A journey of a thousand miles begins with a single step. So just take it step by step.", "-- Waka, Okami",
    "Ah... Amaterasu. Origin of all that is good and mother to us all...", "-- Celestial Brush Gods, Okami",

    // Silent Hill
    "I guess I really don't care if it's dangerous or not. I'm going to town either way.", "-- James Sunderland, Silent Hill 2",
    "In my restless dreams, I see that town. Silent Hill.", "-- Mary's letter, Silent Hill 2",
    "The only me is me. Are you sure the only you is you?", "-- Bloodstained bag, Silent Hills P.T.",
    "The fear of the blood tends to create fear for the flesh.", "-- Silent Hill",
    "I'd rather go to hell.", "-- Heather Mason, Silent Hill 3",
    "You see it too? For me, it's always like this.", "-- Angela, Silent Hill 2",
    "I don't really feel like eating and drinking stuff from an alternate reality, OK?", "-- Heather Mason, Silent Hill 3",
    "James honey, did something happen? After we got separated in that long hallway?", "-- Maria, Silent Hill 2",

    // FEZ
    "The thirteen circles. The 64-bit name of God.", "-- Owl, FEZ",
    "Hexahedron. Octahedron. Dodecahedron. Her sacred geometry.", "-- Owl, FEZ",
    "A point of origin. After and beyond", "-- Owl, FEZ",
    "The many are one. The one is many.", "-- Owl, FEZ",
    "Hear the owls. See their effigy. Assemble the parliament.", "-- Dot, FEZ",
    "HA HA HA CHECK OUT MR RECTANGLE HEAD OVER THERE", "-- Zu Resident, FEZ (Translated from Zu)",
    "HI THERE HOW ARE YOU I WILL BE YOUR HEXAHEDRON TODAY", "-- The Hexahedron, FEZ (Translated from Zu)",

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
    "Hamboning will save your life someday.", "-- Rigby, Regular Show",
    "Buzz, look! An alien!", "-- Woody, Toy Stoy",
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
    "hey girl can we go on a wii sports resort date", "-- @ellie@yearning.gay",
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
    "blocked. blocked. blocked. youre all blocked. none of you are free of sin.","-- @dril",
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
    "Better to let your opponent have his pot, than to build him a new one.", "-- Artie Flopshark, Telltale Texas Hold'Em",
    "You know, like a liar.", "-- John Mulaney",
    "This is the height of luxury!", "-- John Mulaney",
    "We want a GIFT! But only if it's MONEY!", "-- John Mulaney",
    "Get some rest, tall child!", "-- John Mulaney",
    "whats that? you dont drink wet cement? you couldnt be more pathetic.", "-- bunnipop",
    "I miss you, Cynthia, rest in power.","", //199? - 2021
    "It's bad enough wasting time without killing it.", "-- Tock, The Phantom Tollbooth",
    "There is no data. There is only XUL!", "-- Mozilla XUL Namespace",
    "Even though you change shape, I still understand you.", "-- Epona, The Legend of Zelda: Twilight Princess",
    "PLEASE CRANK THE SILLY THING AROUND", "-- Apollo 11 Guidance Computer Source Code",
    "Even with the sun gone, the world is still a beautiful place.", "-- Kip, OneShot",
    "i live in wayland she live in weston", "-- Me",
    "i can't believe they made cortana british", "-- Me",
    "it will be able to explode", "-- Me",
    "This website is NOT a safe space for Ed Sheeran.", "-- Me",
    "This website is served by 700 rats.", "-- Me",
    "Legalize swag.", "-- Me",
    "Pain is temporary, swag is forever.", "-- Me",
    "Your Xbox requires service. Please call Xbox Customer Support.", "-- Xbox Error Screen",
    "Your system ate a SPARC! Gah!", "-- Linux kernel oops on PA-RISC",
    "<img style=\"vertical-align:middle; height:32px;\" src=\"/assets/img/global/blerbs/atari_bombs.png\">", "-- Atari ST",
    "Software Failure. Press left mouse button to continue.", "-- Commodore Amiga",
    "Removed Herobrine.","-- Minecraft Patch Notes",
    "GOD is real, unless if declared Integer", "-- Old Fortan Joke",
    "I'll be dead long before you were born and I'll be dead long before you'll be dead.", "-- Space Ghost",
    "Aaaawwww boy! You guys get away from my olive loaf!", "-- Brak",
    "Is it hot in here, or am I sweating?", "-- Brak",
    "Why do you have to have a head?", "-- Gaz, Invader ZIM",
    "Hmm, tastes like prion disease....", "-- Mona, from 2chan Shift-JIS art",
    "On power up or reset, Furby must go select a new name ,,, ahw how cute.", "-- Furby Source Code, 1997",
    "The numbers, Mason. What do they mean!?", "-- Jason Hudson, Call of Duty: Black Ops",
    "Nothing is true; Everything is permitted.", "-- Various, Assassin's Creed 2",
    "Me? Gongaga.", "-- Zack Fair, Crisis Core: Final Fantasy VII",
    "I don't need a weapon, my friends are my power!", "-- Sora, Kingdom Hearts", 
    "Oh, to be an abandoned Garfield phone at the beach.", "-- Me",
    "PUSH SD CARD, THEN REMOVE IT", "-- RVL DATA CHECK AND LOG CHECK",
    "Without my Tigger stripes, I'm nothing but a second-rate Tigger!", "-- Tigger, Piglet's Big Game",
    "PLEASE SET DISK CARD", "-- Famicom Disk System",
    "Your Nintendo GameCube (model DOL-001) appears to be malfunctioning.", "-- toypop",
    "BOOTROM 8046 \\ ERROCODE: 00F800FE", "-- Nintendo 3DS, NAND init error",
    "Please insert the Wii Startup Disc. This will set up your Wii console.", "-- Nintendo Wii, prerelease NAND image",
    "Nakamura MEMTest Scene 2097136 \ press `A` button to start network update", "-- Wii System Menu 1.0-RC1",
    "The system files are corrupted. Please refer to the Wii Operations Manual for help troubleshooting.", "-- Nintendo Wii",
    "Error #001, unauthorized device has been detected.", "-- Nintendo Wii",
    "The GAME BOY® PLAYER is not connected. Please turn the power off and connect a GAME BOY® PLAYER.", "-- Game Boy Player",
    "The software was closed because an error occurred.", "-- Nintendo Switch",
    "Please insert a PlayStation® or PlayStation®2 format disc.", "-- PlayStation 2",
    "Something went wrong with the system software.", "-- PlayStation 5",
    "The PS5 doesn't support Bluetooth audio accessories.", "-- PlayStation 5",
    "Bricked? Congrats, we saw that coming. Ping #steampal-sw and visit 13S for a fix.", "-- Valve, prerelease Steam Deck OLED jupiter-hw-support",
    "But, Galileo devices can be BRICKED by BIOS updates if you interrupt them.", "-- Valve, prerelease Steam Deck OLED jupiter-hw-support",
    "WARNING: Ignoring this is a one-way ticket to Bricksville. Enjoy the ride!", "-- Valve, prerelease Steam Deck OLED jupiter-hw-support",
    "Unattended children will be taught IDA Pro.", "-- Me",
    "Grief Counseling for emulator developers is now available at irc.efnet.org #titandemo", "-- TiTAN, Overdrive 2",
    "Now this will run on my 486?", "-- Unknown E3 2003 attendant at Half-Life 2 showing",
    "There was a lot of anger in this room.", "-- Jin Sun-Kwon, F.E.A.R.",
    "Player one, go!", "-- Cookie Blair, Cookie's Bustle: Mysterious Bombo World",
    "Buy a new Windows 7 PC. Get a free Xbox 360.", "-- Microsoft Ad",
    "You know what I need? Some heels without guns.", "-- Bayonetta, Bayonetta 2",
];

function getQuoteTag() {
    var img = '<p style=\"margin-top: -15px; line-height:0.75;\">';

    var randomIndex = Math.floor(Math.random() * quoteStrings.length / 2) * 2; // get even random number
    img += quoteStrings[randomIndex];
    img += '<br/>';
    img += '<span style=\"font-size:15pt;\"><i>';
    img += quoteStrings[randomIndex+1];
    img += '</i></span>';
    img += '</p>';
    return img;
}

function getCookieByName(name) {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
         cookie = cookie.trim();
         if (cookie.startsWith(name + '=')) {
            return cookie.substring(name.length + 1);
         }
    }
   return null;
}

// table for automatic music playing
// 
var musicPaths = [
    "SvenZZon - Spring time remix", "/assets/snd/music/sv_sprin.mp3",
    "Karsten Koch - aryx.s3m", "/assets/snd/music/aryx.mp3",
    "LHS - AGGRESSiON Easy DVD Creator 1.1.0 kg", "/assets/snd/music/aggression_dvd.mp3",
    "AceMan - Different ways", "/assets/snd/music/different_ways.mp3",
    "meo - surrender...", "/assets/snd/music/surrender.mp3",
    "falcon/pulse+tdr - spineless", "/assets/snd/music/spineless.mp3",
    "Maktone & Nagz - shocktopus", "/assets/snd/music/shocktopus.mp3",
    "Ghidorah - GhidaPoP", "/assets/snd/music/ghidapop.mp3",
    "4Mat - Krunk", "/assets/snd/music/krunk.mp3",
    "BeWu & X-Ray - Gray set willy", "/assets/snd/music/gray_set_willy.mp3",
    "luchibobra - WeeD", "/assets/snd/music/weed.mp3",
    "TheDuccinator - Some Creatures", "/assets/snd/music/some_creatures.mp3",
    "X-Ray - Mizzle", "/assets/snd/music/mizzle.mp3",
    "ZenithNeko - Flourishing Falls", "/assets/snd/music/flourishing_falls.mp3",
    "Jogeir Liljedahl - physical presence", "/assets/snd/music/physical_presence.mp3",
    "Jonne Valtonen - Retro Table", "/assets/snd/music/retro_table.mp3",
    "TheQuickSlash - weirdmidi", "/assets/snd/music/weirdmidi.mp3",
    "4Mat - Eternity", "/assets/snd/music/eternity.mp3",
    "X-Ray - Mizzle", "/assets/snd/music/mizzle.mp3",
    "Beldoroon - Spring time yeah", "/assets/snd/music/spring_time_yeah.mp3",
    "BLiZZARD - Contraduct Design", "/assets/snd/music/contraduct.mp3",
    "dualtrax/cro - orion crackmusic", "/assets/snd/music/orion.mp3",
    "cro - marihuana", "/assets/snd/music/marihuana.mp3",
    "Fearofdark - Next", "/assets/snd/music/next.mp3",
    "Maktone - class cracktro#15", "/assets/snd/music/class cracktro#15.mp3",
    "Maktone - class11.time flies", "/assets/snd/music/class11.time flies.mp3",
    "Kulor - An Anthem for WinterChip", "/assets/snd/music/winterchip.mp3",
    "Kulor - Hexaprism Hall", "/assets/snd/music/hexaprism.mp3",
    "Kulor - So Kawaii Space Puppy", "/assets/snd/music/kawaii.mp3",
    "Maktone - sac12.the waiting", "/assets/snd/music/sac12.the waiting.mp3",
    "Maktone - sae01", "/assets/snd/music/sae01 (shortcracktrotune).mp3",
    "Coma28 - skogens djur 014", "/assets/snd/music/skogens djur 014.mp3",
    "dalezy - evoke-report#2", "/assets/snd/music/evoke2.mp3",
    "V.E.M. - keygentune2003 orn", "/assets/snd/music/keygentune2003.mp3",
];

function getMusicTag() {
    var img = '<p style=\"margin-top: 15px; margin-bottom: -5px; line-height:0.75;\">';
    var randomIndex = Math.floor(Math.random() * musicPaths.length / 2) * 2; // get even random number
    img += "Now Playing: <marquee style=\"vertical-align: bottom;\" speed=\"50%\" width=\"10%\">";
    img += musicPaths[randomIndex];
    img += "</marquee><br/>";
    
    img += "<audio style=\"height: 20px\" id=\"musicplayer\" controls loop src=\"";
    img += musicPaths[randomIndex+1];
    img += "\""

    if(getCookieByName("autoplay") == "true") {
        img += " autoplay";
    }

    img += "></audio>";
    img += "</p>"
    return img;
}



// since this file is included at the very top of the page let's exploit that
// my hope is that i will be fired from every webdev job i potentially have if my boss ever sees this crap

// i am aware this code is crap.
// however github is a very bad webhost if you're trying to things that are even remotely more complex than the simplest html from geocities circa 1999
// maybe one day i'll have a better webhost with php support (and also learn wtf php is) but for now this works. it's just really bad to edit.


var htmlHeader = '<div id="header">';
htmlHeader += '<div class="title" align="center">';
htmlHeader += '<!-- the idea to use a table here came from Headspin. thanks for your old website about GBA compression, laddie  -->';
htmlHeader += '<table id="titleTable" border="0" cellpadding="20px" cellspacing="5px" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber44">';
htmlHeader += '<tr>';
htmlHeader += '<td><a href="/"><img id="logo" border="0" src="/assets/img/global/noodle_pic.png" width="128"></a></td>';
htmlHeader += '<td>';
htmlHeader += '<h1 style="margin-top:30px">Atapi\'s Own Little World</h1>';
htmlHeader += '</tr>';
htmlHeader += '</table>';
htmlHeader += '</div>';
htmlHeader += '<script type="text/javascript">document.write(getQuoteTag());</script>';
htmlHeader += '<div id="nav" style="margin-top: -15px">';
htmlHeader += '<a href="/projects"><img class="nav-icon" src="/assets/img/global/folder.png"> Projects</a>';
htmlHeader += ' - ';
htmlHeader += '<a href="/dumps"><img class="nav-icon" src="/assets/img/global/chip.png"> Dumps</a>';
htmlHeader += ' - ';
htmlHeader += '<a href="/blog"><img class="nav-icon" src="/assets/img/global/notepad.png"> Blog</a>';
htmlHeader += ' - ';
htmlHeader += '<a href="/gallery"><img class="nav-icon" src="/assets/img/global/gallery.png"> Gallery</a>';
htmlHeader += ' - ';
htmlHeader += '<a href="/links"><img class="nav-icon" src="/assets/img/global/links.png"> Links</a>';
htmlHeader += ' - ';
htmlHeader += '<a href="/guestbook"><img class="nav-icon" src="/assets/img/global/guestbook.png"> Guestbook!</a>';
htmlHeader += '<br/>';
htmlHeader += '<script type="text/javascript">document.write(getMusicTag());</script>';
htmlHeader += '</div>';
htmlHeader += '<div id="separator" style="margin-top:5px; margin-bottom: 5px;">';
htmlHeader += '<img width="100%" height="6px" id="spacer" src="/assets/img/global/border.png">';
htmlHeader += '<br/>';
htmlHeader += '';
htmlHeader += '</div>';
htmlHeader += '</div>';
htmlHeader += '<script src="/scripts/oneko/oneko.js"></script>'; // add Oneko :3

document.write(htmlHeader);

// forcibly set the volume of the global music player
var audio = document.getElementById("musicplayer");
audio.volume = 0.15;
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/util.php';
echo constructPageHeader("Atapi's Homepage!");

?>

<h1><img style="vertical-align:middle" src="/assets/img/blog/icon.png"> Those Weird Numbers from the Sky</h1>
<p style="margin-top: -25px;">We resume our broadcast day.<br/></p><br/>
<p>
October 14, 2024<br/>
Category: Infodump<br/>
<span style="color: yellow">
Content Warning // Politics (World), Loud Noises
</span>
</p>
<br/>
<p>
Here's an odd question.<br/>
You ever wonder what the Russian military does in the background, you know, <i>while</i> they invade land that doesn't belong to them?</br>
See, they've got these goofy radio stations that do nothing but play buzzing or beeping noises 24/7!
</p>
<table class="fixed" align="center" border="0" cellspacing="10" cellpadding="0"
style="text-align: center;">
<col width="320px" />
<col width="320px" />
<tr>
<td>
<img height="320px" src="/assets/img/blog/numbers/Buzzer.png"><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/buzzer.mp3");?><br/>
UZB-76 "The Buzzer"<br/>
</td>
<td>
<img height="320px" src="/assets/img/blog/numbers/goose.jpg"><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/goose.mp3");?><br/>
"The Goose"<br/>
</td>
</tr>
</table>
<p>
Now we can start for real.
</p>
<br/>
<p>
Since the first world war, there have been mysterious pirate radio radio stations broadcasting secret codes, whether they be transmitted through speech, morse, or digital modes, they all have the same exact purpose: transmitting secret messages.<br/><br/>
Possibly the most fascinating of these stations were always <i>Numbers Stations</i>, which primarily grew to prominent usage during the first Cold War, however they are still around today, just in way fewer quantities.<br/><br/>
I was first alerted of this topic by Vinny's video on anomalous shortwave radio signals, which he did for Halloween of 2023. Good stream, great for Halloween.<br/>
</p>

<?php generateYouTubeEmbed("Z9BkgeW7UjU", 560, 315);?>
<br/>

<p>
One year, many late nights listening, and hours of visiting old websites on the topic, and I hardly can tell if I am even sneezing on the surface of this crap.<br/><br/>
I mean, of course I wouldn't be, all of the information surrounding these PIRATE radio stations is top secret, to the point where in 1998, the DTI literally said<br/><br/>
"yeah so like, theses stations and stuff. they are what you suppose they are. they are not for, shall we say, public consumption." (paraphrasing)<br/><br/>
So, since it's almost Halloween, I figured I'd compile stuff that I know into this little page, because infodumping is fun, and also Spooky Month.<br/><br/>
</p>
<h2>Methodology</h2>
<p>
Historically, these stations would be read by a live operator, but since humans are prone to errors, agencies began developing dedicated machines for completing the monotonous task of reading numbers and symbols into a microphone and hoping somebody hears them.<br/><br/>
Not many of these machines are really anything to write home about, but I think the most interesting one of note is the Gerat 32620 / Stasi Sprach machine.<br/>
<img src="/assets/img/blog/numbers/gerat.png"><br/><br/>
I find this one so notable for a number of reasons:<br/>
<span>
<ol type="1" style="width:45%; margin:auto; text-align: left;">
<li>It's a machine run by a Z80 and an AD7520 DAC.</li>
<li>It does both speech and morse code.</li>
<li>It's able to take input from a paper tape.</li>
<li>There are separate speech cartridges with alternate languages.</li>
<li>It can be controlled via RS232.</li>
<li>It has been emulated in MAME.</li>
</ol>
</span>
<br/>
</p>
<p>
Indeed, the back of this device houses a serial port for external communications, potentially meaning that any PC with RS232 serial can communicate with this device.<br/><br/>
In fact, I think Poland DOES still use this machine since the voices in their English station, E11 "Oblique," are identical to the voices on the English cartridge, which are spoken by a Polish woman.<br/><br/>
Here's a very high quality depiction as to what I think is going on with this machine.<br/>
<img src="/assets/img/blog/numbers/funny_drawing.png"><br/><br/>
Get that? Cool.<br/><br/>
Another bit, life as a spy agent must have been BOOOOORING. And lonely, but mostly boring. If you weren't infiltrating a government agency, you likely had to find a job in the area you were stationed, your relationships were very restricted out of necessity, and to top it all off, every day or so your entire fake life would have to come to a halt for a couple of hours to listen to a portable shortwave radio and spend even more time trying to tediously decode the message.<br/>
<img src="/assets/img/blog/numbers/avgn.png"><br/><br/>
Anyway, right, decoding the message. So these stations' messages were encoded through a method known as a one-time pad. Essentially a mechanism for swapping letters around, but as far as I can tell, each station operator had a unique way of organizing these numbers. So long as each pad is destroyed after one single use, this method is utterly secure and practically impossible to break, unless, I guess you're a bad spy with poor opsec.<br/><br/>
</p>
<h2>Actual Stations</h2>
<p>
Here's my favorite stations, mostly for their quirks or history.<br/><br/>
</p>
<h3>E01 "Ready Ready"</h3>
<p>
E01 was an AM station based somewhere in Europe, having been last reportd in late 1999.<br/>
In each transmission, it would repeat the 5-digit ID marker for five minutes, before the female voice would say "Ready, Ready". It would then read the amount of number groups twice, before the actual message.<br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e01.mp3");?><br/><br/>
</p>
<h3>E03 "The Lincolnshire Poacher"</h3>
<p>
E03 was a British numbers stashion that transmitted from the HMGCC in Buckinghamshire, England, and later on, the Royal Air Force base on the small island of Cyprus. The station was active from the mid-1980s onto July 2008, from which it hasn't been heard since.<br/><br/>
The station got its name for its preamble theme, which is an old folk song called, well, <i>The Lincolnshire Poacher</i>. The station would play its electronic preamble 12 times, then the 5-digit identifier 10 times. After which, it would play six chimes, before the 200 5-digit number groups were played. It would play six more chimes, and then it would play the song six times. In total, transmissions would take roughly 45 minutes.<br/><br/>
An interesting detail about this station was how its female voice would change tone as it read each figure group. Unlike other stations that are obviously robotic, the voice on this one would go up in pitch when it read each fifth number.<br/><br/>
The messaging schedule was really unique, as 10 broadcasts were made a day, with 18 unique messages per month being made. This chart basically describes its schedule:<br/>
<img src="/assets/img/blog/numbers/e03sched.png"><br/>
<p style="font-size:12pt">Image credit: priyom.org</p><br/>
I also managed to track down what I believe to be its actual transmitter site:<br/>
<a href="https://www.google.com/maps/place/34.588206,33.004446"><img width="768px" src="/assets/img/blog/numbers/akrotiri.png"><br/><br/></a>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e03.mp3");?><br/><br/>
<p>
Supposedly the target for this station was the Middle East, and was subjected to heavy jamming attempts from places like Iran and Syria. Its stable and consistent schedule made it a really easy target for jamming.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e03jam.mp3");?><br/><br/>
</p>
</p>
<h3>E03a "Cherry Ripe"</h3>
<p>
E03a was E03's "sister" station, this time stationed in Guam, later moving to a location not far from the city of Humpty Doo, Australia. Unlike E03, E03a was instead likely targetted at Asia.<br/><br/>
The station made 8 broadcasts per day, 5 days a week, 14 messages a month.<br/><br/>
<a href="https://www.google.com/maps/place/-12.607748,131.289009"><img src="/assets/img/blog/numbers/humptydoo.png"><br/><br/></a>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e03a.mp3");?><br/><br/>
</p>
<h3>E07 "English Man"</h3>
<p>
Russia, in the modern day, operates numerous stations. E07 transmits two days per week, three times per day.<br/>
Not entirely sure of what it's targeting, but it's interesting to know that Russia still relies on such an old-fashioned method for espionage these days.<br/><br/>
E07 is located in both Moscow and Khabarovsk.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e07.mp3");?><br/><br/>
</p>
<h3>E11 "Oblique"</h3>
<p>
An English station based in Warsaw, Poland. Operated by the <a href="https://www.sww.gov.pl/en/">Polish Military Intelligence Service (SWW)</a>, this station is known to have been operating since the early 80s. It got its nickname due to the usage of the word "Oblique" in place of a dash.<br/><br/>
This station appears to still rely on the Gerat 32620 device, the diagram for its operation being shown above in the really crude doodle.<br/><br/>
This station sends transmissions every day, but most of them are null messages. Only one message is sent per month and it's usually at random.<br/><br/>
</p>
<a href="https://www.google.com/maps/place/52.42935363098804,20.881122690588548"><img width="768px" src="/assets/img/blog/numbers/sww_top.png"><br/></a>
<img width="768px" src="/assets/img/blog/numbers/sww_street.png"><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e11.mp3");?><br/><br/>
<h3>E12 "NNN"</h3>
<p>
One of the "OG" numbers stations, this Austrian station was active up until sometime in November of 1997.<br/><br/>
Operating on a weekly schedule, the station would send only one unique schedule each month, with group counts being relatively low multiples of five, such as 25 or 30.<br/><br/>
On each transmission, the station would play a morse code "N" for five minutes, read the group count twice, then read the 5-digit paired number groups. From there, the message would repeat.<br/><br/>
E12 had originally broadcast alongside G12, its German counterpart, however G12 went silent in June 1994.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e12.mp3");?><br/><br/>
</p>
<h3>E13 "Five Dashes"</h3>
<p>
This station was based in Germany, and was active from March 1991 to early 1993.<br/><br/>
Each transmission would read a three-digit ID, a 5-digit group, and a 3-digit group count, before playing three tones. It would read the groups, say "I say again", and read the groups again. Each group was five digits, and there was a pause after each third digit in a group.<br/><br/>
It was rather similar to the US station E05, which caused theories to form that it was operated by both US and German intelligence agencies.<br/><br/>
I mostly like this station because the tones sound absolutely atrocious in one of the known recordings.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e13.mp3");?><br/><br/>
</p>
<h3>E25 "Rebeat"</h3>
<p>
At the time of writing, E25 is currently under investigation and is known to be operated by Egypt. Transmissions are known to be unpredictably timed and loaded with operator mistakes, in many cases leading to an undecipherable message.<br/><br/>
The machine is known to be using Windows 7, and a lot of sounds occasionally make their way into the transmission mix. Sometimes, however, transmissions are made live, and distant chattering or paper crumbling can be heard. Sometimes the live operator will accidentally swap the order of digits due to getting confused by the right-to-left ordering of Arabic.<br/><br/>
Also for some reason the live operator sounds, like really really excited.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/e25.mp3");?><br/><br/>
</p>
<h3>G01 "Tyrolean Music Station"</h3>
<p>
A rather unique station.<br/><br/>
This one was operated by French Intelligence, and transmissions ceased sometime in 1975, after it was featured in a French magazine.<br/><br/>
Rather than just broadcasting groups of numbers, instead it broadcast various phrases after playing its Bavarian folk preamble.<br/><br/>
The way it was set up was purposely for the sake of trolling, since it was sending messages to agents behind the Iron Curtain. Hearing the Communist anthem and the Bavarian folk music, nobody would really expect the station to be operated by the French.<br/><br/>
<img src="/assets/img/blog/numbers/Interferences.jpg"><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g01.mp3");?><br/><br/>
</p>
<h3>G02 "Swedish Rhapsody"</h3>
<p>
One of the most famous stations, this Polish station got its name from the incorrectly attributed preamble song. The song was revealed to actually be "Luxembourg Polka" after <a href="http://numbersoddities.nl/N&O-200.pdf#page=3">the Polish government declassified various documents in 2014.</a><br/><br/>
G02 was first observed in the 1960s but ceased operations in April 1998. It became so famous because the voice, generated by a Gerat 32620, was configured to be much higher than typically heard of the female German voice cartridge.<br/><br/>
G02 could send up to three messages in one transmission, with the first and second messages being 100 number groups long, and the third being 50 number groups long.<br/><br/>
I really like this recording because it absolutely craps itself a couple of times, but it was also featured in the OMORI soundtrack, little fun fact.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g02.mp3");?><br/><br/>
</p>
<h3>G03 "Gongs and Chimes"</h3>
<p>
Operated by the East German National People's Army (NVA), this station was last heard in May 1990. It became so famous for its preamble, which was simply just grandfather clock chimes. However, as the Cold War went on, the tape became warped and mangled as it was used, and thusly became incredibly terrifying to listen to.<br/><br/>
Once again, the Gerat 32620 makes an appearance, using a slightly higher pitched configuration of the German cartridge.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g03.mp3");?><br/><br/>
Things changed after the fall of the Berlin Wall in 1989. The station's output became much less frequent as the German Reuinification progressed, and on May 9, 1990, one final message was played. Instead of the usual message structure, we instead have a male announcer say "And now the transmission for the bright child," followed by a bunch of drunk NVA soldiers singing a children's song, "All My Ducklings."<br/><br/>
It's a beautiful recording, and I'm endlessly thankful that it has been preserved.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g03-final.mp3");?><br/><br/>
G03 was controlled from Wernsdorf, and the transmitter site was located in Zeesen.<br/>
</p>
<a href="https://www.google.com/maps/place/52.273640,13.615993"><img width="768px" src="/assets/img/blog/numbers/zeesen.png"><br/></a><br/>
<h3>G04 "Three Note Oddity"</h3>
<p>
Another 32620 station, this time operated by Hungarian Intelligence, most likely targeing Germany. This station was active throughout the cold war, before going inactive in 2005.<br/><br/>
This station got its nickname from its three rising tones included in the preamble. Strangely, there's no group count in the header, just an "Achtung! Achtung!"<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g04.mp3");?><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/g04_02.mp3");?><br/><br/>
Remember our promise.<br/><br/>
</p>
<h3>V13 "New Star Broadcasting"</h3>
<p>
This one hails from Taiwan, and is aimed at China, with a female voice speaking in Mandarin.<br/><br/>
It operates on a number of shortwave frequencies, such as 7502, 7688, 8196, 8300, and more.<br/><br/>
It has a rather unique structure, consisting of a long musical preamble, an announcement of "This is the New Star Broadcasting Station", followed by preambles of all messages to be sent, repeated twice.<br/><br/>
For each message, there's a 4-digit ID, the group count, and then the ID repeats. Following which, we get our 4-digit groups, followed by a separator for every 20 groups. After that, there's a postamble of the 4-digit ID and the group count.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/v13.mp3");?><br/><br/>
There is also a very rare null format:<br/>
<i>"This is the New Star Broadcasting Station, station 3. At this time, there are no messages for you. Thank you for listening, wishing you health and happiness. See you."</i><br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/v13-null.mp3");?><br/><br/>
</p>
<h3>V19 "WTR21"</h3>
<p>
A Spanish-speaking station run by France. Little is known about this station, as it was only ever used once in the mid-80s before going silent.<br/><br/>
There's only one recording of it.<br/><br/>
This station's preamble song was identified as "Don't Cry for me Argentina" but was given the name WTR21 for the NATO alphabet identifier in the preamble and postamble.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/wtr21.mp3");?><br/><br/>
</p>
<h3>HM01</h3>
<p>
This is a Cuban numbers station operated by the Cuban Intelligence Directorate (DGI).<br/><br/>
A rather unique digital station, this one uses six 5-digit message headers, followed by a tone, and then for the following 20 minutes, we get six .TXT, .F1C, or .F1G files transmitted over OFDM.<br/><br/>
HM01 is known to share transmisison sites with <i>Radio Havana Cuba</i>. It's not really uncommon for the two stations to get their frequencies mixed up.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/hm01.mp3");?><br/><br/>
</p>
<h3>UZB76/UVB76 "The Buzzer" & Friends</h3>
<p>
While not really a numbers station, "The Buzzer" is a Russian military commandment station serving the Western Military District, and was first discovered in the 70s.<br/><br/>
If there isn't any traffic being sent, this station just emits its channel marker.<br/><br/>
When it first gained traction, many believed it was some kind of nuclear killswitch, where if it ever stopped emitting that meant Russian was initiating nuclear war, however the channel marker simply just makes it easier for operators to find it.<br/>
The Buzzer can be heard 24/7 on the 4625 KHz band in the surrounding area.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/buzzer.mp3");?><br/><br/>
The Buzzer is also famous in recent years for internet trolling campaigns leading to radio pirates jamming the station with music and spectrographic images.<br/><br/>
<img src="/assets/img/blog/numbers/trollface.png"><br/><br/>
Russia operates numerous other stations like this, all serving their other military districts, such as
<a href="https://priyom.org/military-stations/russia/the-pip">The Pip, </a>
<a href="https://priyom.org/military-stations/russia/the-squeaky-wheel">The Squeaky Wheel, </a>
<a href="https://priyom.org/military-stations/russia/the-goose">The Goose, </a>
and
<a href="https://priyom.org/military-stations/russia/the-alarm">The Alarm.</a>
<br/><br/>
</p>
<h3>DPRK-ARQ Network</h3>
<p>
North Korea is known to be a prolific user of shortwave radio, for various purposes. They use a proprietary modem with their own BFSK protocol to transmit information to embassies around the world. Their elaborate network can especially be heard if you're over in Europe or Asia, operating anywhere from 7-25 MHz.<br/><br/>
Messages sent are in 5-figure group ciphertexts, with a binary header.<br/><br/>
<img src="/assets/img/blog/numbers/dprk.png"><br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/dprk-1200.mp3");?><br/><br/>
Messages can look something along the lines of this, however they can change in format, length, or header based on location or message context.<br/>
<img src="/assets/img/blog/numbers/dprk-test.png"><br/><br/>
</p>
<h3>V15 (Radio Pyongyang Affiliated Station)</h3>
<p>
A rather unique station, this one operates as a program on Pyongyang Broadcasting Station in North Korea.<br/><br/>
V15 messages were presented as a list of assignments for university students, calling out page numbers and problem numbers in place of 5-number figure groups.<br/><br/>
V15 is known to have been broadcasting messages before June 2000, after which it fell silent. However, V15 was revived on June 23, 2016. This event was reported by South Korean intelligence agencies, and it quickly became worldwide news. The South Korean Ministry of Intelligence subsequently criticized North Korea for reviving the station. It's not really known whether or not the station was revived as a psyop to unnerve the South Korean populace.<br/><br/>
On December 21,2016, the station began transmitting in FM, making V15 the first legit numbers station to be broadcast in this mode.<br/><br/>
V15 transmitted every week until June 27, 2019, from which transmission became sporadic, until being last heard on March 12, 2020.<br/><br/>
In mid-January of 2024, Pyongyang Broadcasting Station fell completely silent.<br/><br/>
<?php generateAudioFileEmbed("/assets/snd/blog/numbers/v15.mp3");?><br/><br/>
</p>
<h2>What now?</h2>
<p>
Firstly, some questions that have no answers:<br/>
1. What the hell?<br/>
2. How many of these stations can just come back up at any time?<br/>

<br/>
So, we have all of these historical stations, with most of them being long dead. Where do we go from here?<br/><br/>
To be perfectly honest, I'm not really sure. Considering that Poland, Egypt, Cuba, and Russia still rely on these technologies for their spy operations, I think it's safe to say that it's a very reliable means of one-sidedcommunication, not to mention the anonymity bonus. If global tensions continue rising like they have, I sense that Numbers Stations might make a resurgence in some form or another.<br/><br/>
I would PREFER that they didn't, to be fully clear, but it seems like the path that the superpowers of the world are heading.<br/><br/>
</p>
<p>
Happy Halloween!<br/><br/>
<img width="360px" src="/assets/img/blog/numbers/takeoff.png"><br/><br/>
<a href="https://priyom.org"><img src="/assets/img/buttons/priyom.gif"></a>
<a href="https://signalshed.com"><img src="/assets/img/buttons/enigma2k.png"></a><br/><br/>
</p>
<p style="font-size:12pt">
Audio recordings courtesy of:<br/>
Me<br/>
The Conet Project<br/>
Simon Mason<br/>
Priyom.org<br/>
<br/>
Information:<br/>
Ringway Manchester<br/>
Priyom.org<br/>
numbers-stations.com<br/>
Simon Mason<br/>
ENIGMA2000<br/>
<br/>
Satellite/Street images courtesy of Google<br/>
</p>

<?php

echo constructPageFooter();

?>

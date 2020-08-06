<html>
<style>
		h4 {
			font-family: AppleKid;
			line-height: 1;
			letter-spacing: 0.8px;
		}
		h3 {
			font-family: AppleKid;
			line-height: 1;
			letter-spacing: 0.8px;
		}
		h2 {
			font-family: AppleKid;
			line-height: 1;
			letter-spacing: 0.8px;
		}
		h1 {
			font-family: AppleKid;
			line-height: 1;
			letter-spacing: 0.8px;
		}
		@font-face {
			font-family: AppleKid;
			src: url('../images/Apple-Kid.woff2') format('woff2'),
				url('../images/Apple-Kid.woff') format('woff');
			font-weight: normal;
			font-style: normal;
		}
        p.small {
            line-height: 1;
        }
		.mainContent {
			font-family: AppleKid;
			font-size: 20pt;
			line-height: 1;
		}
</style>
<body>
<div class="mainContent">
<h1 style="font-size:32pt">Emulating the Gigatron TTL Microcomputer in MAME</h1>
<p>8/6/2020</p>
<br />
<h2 style="font-size:28pt">The Concept</h2>
<p>Basically, I did it because I wanted to use a Gigatron TTL without having to go online. Plus, MAME hasn't really had a machine like this before, so I figured I'd give it a shot. 
The Gigatron is a relatively simple machine, every hardware aspect is controlled by the "CPU", the screen,
sound, blinkenlights, everything.</p>
<p>The Gigatron has no CPU, it's all 7400-series TTL logic chips, but those specific chips allow for an instruction set with 256 unique instructions, with a few registers that are able to control 
the video signal, the sound, and blinkenlights. In fact, the most difficult thing about it would be learning MAME's framework.</p>
<img src="https://gigatron.io/wp-content/uploads/2020/03/Diagram-768x576.png">
<br/>
<h2 style="font-size:28pt">Phil Thomas' Emulator</h2>
<p>Turns out, there was already a JS-based emulator on the official website, made by Phil Thomas. That emulator uses a BSD-2-clause license, which is compatible with MAME's BSD-3-clause license, so it
wouldn't be of much concern if I ported that emulator to MAME.</p><br/>
<a href="https://github.com/PhilThomas/gigatron/">Phil's emulator</a><br />
<h2 style="font-size:28pt">CPU</h2>
<img src="https://gigatron.io/wp-content/uploads/2019/11/Native-instruction-overview-2019-11-25-768x613.png"><br/>
<p>This diagram can show just how simple the Gigatron CPU is. There are so few instructions, and each instruction takes 1 cycle, out of 6.25 MHz.
</p>
<br />
<br />
<a href="../blog">Go Back</a>
</div>
</body>
</html>
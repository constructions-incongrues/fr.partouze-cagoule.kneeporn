<?php
$lines = file(__DIR__.'/citations.txt');
$text = $lines[array_rand($lines)];
?>
<html>
	<!-- C'est sans conteste le plus beau site que j'ai jamais programmé -->
	<head>
		<title>Knee Porn</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.0/howler.core.min.js"></script>
		<style>
			@font-face {
				font-family: "Trickster";
 				src: url("/Trickster-master/fonts/Trickster-Reg.ttf");
			}
			html {
 				background: url(kneeporn.png) no-repeat center center fixed; 
 				-webkit-background-size: cover;
 				-moz-background-size: cover;
 				-o-background-size: cover;
  				background-size: cover;
				cursor: url(hand.cur), pointer;
			}
			body {
				text-align: center;
				font-size: 3em;
				cursor: url(unmessagesimple.cur), pointer;
			}
			h1 {
				color: pink;
				font-family: Trickster;
				margin: 0;
			}
			p {
				font-size: 0.3em;
			}
			h3 {
				color: lime;
			}
			#knudes {
				text-decoration: underline;
			}
			#knudes:hover {
				background-color: black;
				color: white;
			}
		</style>
		<script>
			var answer = window.prompt('Tapez "GENOU" pour continuer');
			if (answer.toLowerCase() == 'prout') {
				alert('VOUS ÊTES INTOLÉRANT⋅E AU LACTOSE, MISTER BOND 🍸');
			}
		</script>
		<meta property="og:description" content="Pour une vengeance rétroactive de 4000 ans" />
	</head>

	<body>
		<a href="https://www.youtube.com/channel/UCpXb2DVqdX5MzF9On5Gx8yQ/videos">
			<h1>Welcome to my page</h1>
		</a>

		<h3><?php echo $text ?></h3>

		<h4>
			SEND <span id="knudes"><strong>KNUDES</strong></span> AND I SEND YOU <strong>KMINES<strong> :-*
		</h4>
		
		<a href="manifesto.png">	
			<img src="gloireaugenou.gif" />
		</a>

		<p>
			<a href="mailto:kneeporn@partouze-cagoule.fr">kneeporn@partouze-cagoule.fr</a>
		</p>
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			var knudes = [
				new Howl({
					src: ['sound/1.mp3']
				}),
				new Howl({
					src: ['sound/2.mp3']
				}),
				new Howl({
					src: ['sound/3.mp3']
				})
			];
			document.getElementById('knudes').addEventListener('mouseover', function(event) {
				var index = Math.floor(Math.random() * Math.floor(2));
				var sound = knudes[index];
				sound.play();
			});
		});
		</script>
	</body>
</html>

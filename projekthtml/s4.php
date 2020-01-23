<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="stylesheet" href="./wzor.css" type="text/css">
	<title>Dobre programy</title>
	<link rel="icon" type="image/png" href="./logo.png">
	<meta charset="UTF-8">
</head>
<body>
	<div id="container">
		<section id=lewa>
		<nav>
			<a href=index.html>Strona główna</a>
			<a href=s1.html>Grafika</a>
			<a href=s2.html>Tabele</a>
			<a href=s3.html>Nagrywanie</a>
			<a href=s4.php>Aktualna data</a>
		</nav>
		</section>
		<section id=gn1r></section>
		<section id=gn1>
			<header>Wypunktowanie</header>
			<ol type=I>
				<li>Było raz tak:
				<ul style="list-style-type: square">
					<li>Bociana dziobał szpak
					<li>Później była zmiana
					<li>I szpak dziobał bociana
					<li>Później były jeszcze takie 3 zmiany
				</ul>
				<li>Ile razy szpak był dziobany?
			</ol>
			<script>
			function moja_funkcja() {
				var data = new Date();
				var wynik = data.getDate() + "." + data.getMonth()+1+"."+data.getFullYear();
				wynik+=" "+data.getHours()+":"+data.getMinutes();
				document.getElementById("data").innerHTML = wynik;
			}
			
			
			</script>
			<button type="button" onclick="moja_funkcja()">Pokaz date</button>
			<p id="data"></p>		
			<?php

				$sek=date("s"); //Y-m-d H:i:s
				echo ("powitanie w $sek sekundzie<br>");
				echo $sek+1," sekundy temu byla inna minuta ";
				echo "<br><br>\n";
				 
				$cos=$_GET["form"];
				if ($cos != null && strlen($cos)>1) {
					echo "wpisales $cos..<br>\n";
				}
			?>
			<form  action=./s4.php method=get>
			<input type=text name=form><input type=submit>
			</form>
		</section>
		
		
		
		

	</div>
	<footer>
		Copyright 2020 Wszelkie prawa zastrzeżone
	</footer>
</body>

</html>


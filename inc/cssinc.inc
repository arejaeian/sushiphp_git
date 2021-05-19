<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>

<body>

<div class="menuToggle" onclick="toggleMenu();"></div>
	<nav class="navi">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="Rezepte.php">Rezepte</a></li>
		<li><a href="Geschichte.php">Geschichte</a></li>
		<li><a href="Bilder.php">Bildergalerie</a></li>
		<li><a href="Kontakt.php">Kontakt</a></li>
		</ul>
		<div class="soci">
		<ul>
			<li><a href="https://de-de.facebook.com/"><img src="img/facebook.png"></a></li>
			<li><a href="https://twitter.com"><img src="img/twitter.png"></a></li>
			<li><a href="https://www.instagram.com"><img src="img/instagram.png"></a></li>
			</ul>
			<a href="mailto:187palyer.2@gmail.com" class="ebox"><img src="img/email.png"></a>
		</div>
	</nav>
	<script type="text/javascript">

	function toggleMenu(){
		var menuToggle = document.querySelector('.menuToggle');
		var menuToggle = document.querySelector('.navi');
		menuToggle.classList.toggle('active');
		navi.classList.toggle('active');
	}

	</script>

</body>
</html>

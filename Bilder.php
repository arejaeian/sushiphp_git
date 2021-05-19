<?php include("inc/meta.inc") ?>

<title>Bildergalerie 寿司</title>
</head>
<style>

@font-face {font-family: 'fonts/kaushan_scriptregular';src: url('fonts/kaushanscript-regular-webfont.woff2') format('woff2'),
url('kaushanscript-regular-webfont.woff') format('woff');font-weight: normal;font-style: normal;}

body {margin:0;padding:0;font-family:"fonts/kaushan_scriptregular";background:rgba(29,26,26,1.00);}

.container {max-width:2000px;margin:100px auto;display:flex;flex-wrap:wrap;justify-content:space-around;}

.card {position:relative;margin:50px 0;width:770px;height:510px;background:#fff;transform-style:preserve-3d;transform:perspective(2000px);transition:1s;
box-shadow:inset 770px 0 50px rgba(0,0,0,.5);}

.card:hover {z-index:1000;transform:perspective(2000px) rotate(-10deg);box-shadow:inset 20px 0 50px rgba(0,0,0,.5);}

.card .imgbox {position:relative;width:100%;height:100%;border:1px solid #000;box-sizing:border-box;transform-origin:left;z-index:1;transition:1s;}

.card:hover .imgbox {transition:rotateY(-135deg);}

.card .imgbox .img {position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}

.card .details {position:absolute;top:0;left:0;box-sizing:border-box;padding:20px;}



<?php include("inc/style.inc") ?>

</style>

<body>

<div class="container">
	<div class="card">
		<div class="imgbox">
			<img src="img/sash.jpg">
		</div>
		<div class="details">
			<h2>Sashimi</h2><p>Sashimi ist die purste Form von Sushi. Hier wird komplett auf Reis oder andere Beilagen verzichtet.
				Sashimi ist lediglich der rohe, fein filetierte, ganz frische Fisch.</p>
		</div>
		</div>
		<div class="card">
			<div class="imgbox">
				<img src="img/tem.jpg">
			</div>
			<div class="details">
				<h2>Temaki</h2><p>Temaki sind kleine, spitze Tütchen aus Noriblättern, die von Hand ohne Bambusmatte gerollt und dann mit Reis, frischem Fisch und Gemüse gefüllt werden.</p>
			</div>
			</div>
			<div class="card">
				<div class="imgbox">
					<img src="img/oki.jpg">
				</div>
				<div class="details">
					<h2>Oshi</h2><p>Oshi-Sushi: (übersetzt “gepresstes Sushi”) Bei dieser Sushiform werden Reis, Fisch und Gemüse in eine Form aus Holz gelegt,
						mit Steinen beschwert und gepresst. Der Sushi-Laib wird dann in kleine Scheiben geschnitten.</p>
				</div>
				</div>
				<div class="card">
					<div class="imgbox">
						<img src="img/mak.jpg">
					</div>
					<div class="details">
						<h2>Futo-Maki</h2><p>  Futo-Maki: (übersetzt: “dicke Rolle“) ist die große Variante der Makirolle. Futomaki werden aus einem ganzen Noriblatt hergestellt, das mit Reis,
							Fisch und Gemüse gefüllt wird. Bei Futomaki befinden sich mindestens 3 oder mehr Füllungen in der Rolle.</p>
					</div>
					</div>
					<div class="card">
						<div class="imgbox">
							<img src="img/mak2.jpg">
						</div>
						<div class="details">
							<h2>Hoso-Maki</h2><p>Hoso-Maki: (übersetzt “dünne Rolle“) Bei den Hoso-Maki wird ein Noriblatt (Algenblatt) halbiert und meist mit nur einer bis maximal zwei Zutaten gefüllt.
								Dazu wird Sojasauce gereicht.</p>
						</div>
						</div>
						<div class="card">
							<div class="imgbox">
								<img src="img/ura.jpg">
							</div>
							<div class="details">
								<h2>Ura-Maki</h2><p>Ura-Maki: Diese Maki sind auch unter dem Namen Inside-Out oder California-Rolls bekannt.
									Dabei werden die Zutaten wie Fisch und Gemüse direkt vom Noriblatt umhüllt und der Reis befindet sich außen an der Rolle.</p>
							</div>
							</div>
		</div>

	<?php include("inc/cssinc.inc") ?>

</body>
</html>

<?php include("inc/meta.inc") ?>

<title>Bananen Sushi 寿司</title>
</head>
<style>

@font-face {font-family: 'fonts/kaushan_scriptregular';src: url('fonts/kaushanscript-regular-webfont.woff2') format('woff2'),
url('kaushanscript-regular-webfont.woff') format('woff');font-weight: normal;font-style: normal;}

body {font-family:"fonts/kaushan_scriptregular";font-size:18pt;background:rgba(29,26,26,1.00);display:flex;justify-content:center;align-items:center;flex-wrap:wrap;min-height:100vh;}

.container {display:flex;justify-content:center;align-items:center;flex-wrap:wrap;min-height:1200px;margin:40px 0;}

.container .card {position:relative;min-width:820px;height:1440px;box-shadow:inset 5px 5px 5px rgba(0,0,0,0.2),inset -5px -5px 15px rgba(255,255,255,0.1),inset 5px 5px 5px rgba(0,0,0,0.3),inset -5px -5px 15px rgba(255,255,255,0.1);border-radius:15px;margin:30px;}

.container .card::before {content:'';position:absolute;top:0;left:0;width:50%;height:100%;background:rgba(255,255,255,0.1);}

.container .card .bbox {position:absolute;top:20px;left:20px;right:20px;bottom:20px;background:#2a2b2f;border:2px solid #1e1f23;border-radius:15px;box-shadow:0 20px 50px rgb(0,0,0,0.5);transition:0.5s;display:flex;justify-content:center;align-items:center;overflow:hidden;}

.container .card .bbox::before {content:'';position:absolute;top:0;left:0;width:50%;height:100%;background:rgba(255,255,255,0.05);pointer-events:none;}

.container .card .bbox:hover {transform:translateY(-50px);box-shadow:0 40px 70px rgba(0,0,0,0.5);}

.container .card .bbox .content2{padding:20px;text-align:center;}

.container .card .bbox .content2 h2 {position:absolute;top:-10px;right:30px;font-size:8em;color:#03e9f4;}

.container .card .bbox .content2 h3 {font-size:1.8em;color:#03e9f4;z-index:1;transition:0.5s;}

.container .card .bbox .content2 p {font-size:24px;font-weight:300;color:antiquewhite;z-index:1;transition:0.5s;}

.container .card .bbox .content2 a {position:relative;display:inline-block;padding:8px 20px;background:#039ef4;margin-top:15px;border-radius:20px;text-decoration:none;font-weight:400;color:#fff;box-shadow:0 10px 20px rgba(0,0,0,0.2);}

.container .card .bbox .content2 .r1 {position:relative;top:0px;left:0px;width:100%;}

<?php include("inc/style.inc") ?>

</style>

<body>

	<div class="container">
	<div class="card">
	<div class="bbox">
	<div class="content2"><img src="img/banane.jpg" class="r1"><h3>Bananen Sushi</h3><p>Zutaten:<br>Für 12 Stück<br>200 g  Zartbitter-Kuvertüre<br>3 EL Pistazienkerne<br>2 Bananen<br>4 EL Kokosraspel<br>100 g  Schlagsahne</p>
	<p>Zubereitung in 15 Minuten<br>ganz einfach 200 g Zartbitterkuvertüre hacken, über dem heißen Wasserbad schmelzen.<br>3 EL Pistazienkerne fein hacken.<br>2 Bananen schälen und in der flüssigen Kuvertüre wenden.<br>1 Banane, 4 EL Kokosraspeln, und die andere in den Pistazien wälzen.<br>Trocknen lassen. 100 g Sahne aufkochen, vom Herd ziehen.<br>Übrige Kuvertüre einrühren.<br>Bananen in ca. 3 cm große Stücke schneiden und mit der Schokosoße anrichten.</p>
	<a href="Rezepte.php">Get Back</a></div>
	</div></div></div>


<?php include("inc/cssinc.inc") ?>



	<p class="copyright">&copy;2020. Ali-Reza Rejaeian</p>
</body>
</html>

<?php include("inc/meta.inc") ?>

<title>Geschichte 寿司</title>
</head>
<style>

@font-face {font-family: 'fonts/kaushan_scriptregular';src: url('fonts/kaushanscript-regular-webfont.woff2') format('woff2'),
url('kaushanscript-regular-webfont.woff') format('woff');font-weight: normal;font-style: normal;}

body {font-family:"fonts/kaushan_scriptregular";font-size:18pt;background:rgba(29,26,26,1.00);display:flex;justify-content:center;align-items:center;}

* {margin:0;padding:0;}

.container {position:relative;top:100px;width:800px;display:flex;justify-content:center;align-items:center;flex-wrap:wrap;padding:30px;}

.container .card {position:relative;max-width:650px;height:1220px;background:#fff;margin:30px 10px;padding:20px 15px;display:flex;flex-direction:column;box-shadow:0 5px 20px rgba(0,0,0,0.5);transition:0.3s ease-in-out;}

.container .card:hover {height:1520px;}

.container .card .imgbox {position:relative;width:460px;height:460px;top:-60px;left:20px;z-index:1;box-shadow:0 5px 20px rgb(0,0,0,0.2);}

h3,h2 {color:#03e9f4;}

.container .card .imgbox img {max-width:100%;border-radius:4px;}

.container .card .content {position:relative;margin-top:-140px;padding:10px 15px;text-align:center;color:#111;visibility:hidden;opacity:0;transition:0.3s ease-in-out;}

.container .card:hover .content {visibility:visible;opacity:1;margin-top:-40px;transition-delay:0.3s;}

<?php include("inc/style.inc") ?>

</style>

<body>

	<div class="container">
	<div class="card">
	<div class="imgbox">
	<img src="img/sushikoch.jpg"><p style="text-align:center" class="tc"><br>Geschichte von Sushi</p>
	</div><p><h3>Ursprung des Sushi in China</h3></p><p>Noch in den 90er Jahren waren Maki und Nigiri relativ unbekannte Begriffe.<br>Heute sind die japanischen Röllchen ein beliebtes Essen zum Mitnehmen.<br>Doch kommt Sushi wirklich ursprünglich aus Japan?</p>
	<p>Sushi ist zwar ein japanisches Gericht, jedoch keine Erfindung aus Japan.<br>Die Reisröllchen stammen ursprünglich aus südostasien und gehen auf eine Konservierungsmethode für Fisch zurück.<br>So wurde entlang des südostasiatischen Flusses Mekong, Fisch haltbar gemacht, indem man ihn in gekochtem Reis einlegte.<br>Verschlossen in einem Gefäß wurde die Fisch-Reis-Kombination fermentiert.<br>Auf diese Weise war der Fisch über längere Zeit genießbar, während der säuerlich gewordene Reis nicht verzehrt wurde.<br>Diese Konservierungsmethode wurde so beliebt, dass sie sich über Regionen Chinas bis nach Japan ausbreitete.</p>
	<div class="content"><h2>Card One</h2></div>
	</div></div>
	<div class="container">
	<div class="card">
	<div class="imgbox">
	<img src="img/sushi-restaurant.jpg"><p style="text-align:center" class="tc">Einzug in den USA und Europa</p>
	</div><p><h3>Weiterentwicklung des Sushi in Japan</h3></p><p>Die Methode bereitete sich in ganz Asien aus und gelangte nach Japan, wo sie bei der japanischen Spezialität Funazushi angewandt wurde.<br>Im Laufe der Jahrhunderte legte man den Fisch kürzer ein, so dass der Reis ebenfalls verzehrt werden konnte.<br>Der säuerliche Geschmack aus der Fermentierung bliebt jedoch.</p><p>Seit dem Ende des 16. Jahrhunderts mischen Köche dem Sushi Reisessig bei, um den ursprünglich säuerlichen Geschmack zu erzeugen.<br>Auch wurde der Reis stets gepresst, da er den Gärungsprozess entfachen sollte. Noch heute ist der Reis im Sushi klebrig und fest.</p><p>Sushi in seiner heutigen Form entstand in Tokio des 18. Jahrhunderts. Damals hieß die Stadt Edo.<br>Dort gilt das Sushi-Restaurant Kodai Suzume-zushi Sushiman als offizieller Erfinder des Sushi und bereitet seit 1781 die bekannte Mahlzeit zu.<br>Noch heute besteht das Restaurant und verkauft Sushi.<br>Mit den japanischen Auswanderern gelangte Sushi um die ganze Welt.<br>Zunächst wurde die Spezialität in der zweiten Hälfte des 20. Jahrhunderts in den USA bekannt.<br>So eröffnete das erste amerikanische Sushi-Restaurant 1966 in Los Angeles.</p><p>Zielgruppe des Restaurants im Stadtteil Little Tokyo war ursprünglich eine Kundschaft mit japanischer Herkunft.<br>Mit der Zeit entdeckte jedoch auch die übrige Bevölkerung die leichte Reis-Mahlzeit.<br>Die California Inside-Out Roll geht auf die ersten Jahre in Los Angeles zurück und ist nun auch Bestandteil der heutigen Sushi-Tradition.</p>
	<div class="content"><h2>Card Two</h2></div>
	</div></div>
	<div class="container">
	<div class="card">
	<div class="imgbox">
	<img src="img/sushitrend.jpg"><p style="text-align:center" class="tc"><br>Sushi wird zum Trend</p>
	</div><p><h3>Seit einigen Jahren ist der Sushi-Boom ungebrochen und liegt voll im Trend.</h3><br>Auch in Europa eröffneten in den Großstädten immer mehr Sushi-Restaurants.<br>Anfangs sorgten die Fließbänder, auf denen die Rolls an der Kundschaft vorbeizogen für Aufsehen.<br>Mittlerweile gehört die japanische Spezialität zum Alltag dazu.<br>Aß noch vor 20 Jahren der kultivierte Großstädter Maki Rolls zu Mittag, findet man Sushi mittlerweile auch in Kleinstädten.<br>Doch Sushi gibt es nicht nur in Sushi-Restaurants.<br>In japanischen Kochkursen lernen Genießer, wie man die Röllchen mit einer Bambusmatte zubereitet.<br>Ob mit Fisch, Avocado oder Gurke: Die Variation der Sushi-Rolls kennt keine Grenzen und ist selbst für Vegetarier ein leckerer Snack.</p>
	<div class="content"><h2>Card Three</h2></div>
	</div>
	</div>

<?php include("inc/cssinc.inc") ?>

</body>
</html>

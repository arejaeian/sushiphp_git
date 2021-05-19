<?php include("inc/meta.inc") ?>

<title>Kontakt 寿司</title>
</head>
<style>

@font-face {font-family: 'fonts/kaushan_scriptregular';src: url('fonts/kaushanscript-regular-webfont.woff2') format('woff2'),
url('kaushanscript-regular-webfont.woff') format('woff');font-weight: normal;font-style: normal;}

body {font-family:"fonts/kaushan_scriptregular";background:rgba(29,26,26,1.00);display:flex;justify-content:center;align-items:center;min-height:100vh;}

* {margin:0;padding:0;box-sizing:border-box;}

.container {position:relative;width:100%;max-width:1100px;margin:20px;height:600px;background:url("img/ura.jpg");background-size:cover;display:flex;justify-content:space-between;align-items:center;}

.container .formbox {width:50%;display:flex;justify-content:center;align-items:center;}

.container .formbox form {position:relative;width:100%;padding:0 0 0 75px;}

.container .formbox form h2 {color:#fff;font-weight:500;font-size:2em;text-transform:uppercase;letter-spacing:2px;margin-bottom:40px;}

.container .formbox form .inputbox {position:relative;margin-bottom:40px;}

.container .formbox form .inputbox:last-child {margin-bottom:0px;}

.container .formbox form .inputbox input,.container .formbox form .inputbox textarea {position:relative;background:transparent;outline:none;border:none;width:100%;color:#fff;padding-bottom:10px;
	font-size:16px;letter-spacing:1px;font-weight:300;border-bottom:2px solid rgba(255,255,255,0.5);resize:none;}

.container .formbox form .inputbox textarea {height:100px;}

.container .formbox form .inputbox input[type="submit"] {background:#fff;padding:8px 20px;margin-top:-10px;width:100px;cursor:pointer;background:#03e9f4;color:#fff;font-size:18px;border:none;text-transform:uppercase;letter-spacing:4px;}

.container .formbox form .inputbox input[type="submit"]:focus {background:#1bfaad;color:#111;}

.container .formbox form .inputbox span {position:absolute;left:0;font-size:16px;font-weight:300;display:inline-block;pointer-events:none;letter-spacing:1px;color:rgba(255,255,255,0.5);transition:all 0.2s;}

.container .formbox form .inputbox input:focus ~ span,.container .formbox form .inputbox textarea:focus ~ span,
.container .formbox form .inputbox input:valid ~ span,.container .formbox form .inputbox textarea:valid ~ span {transform:translateY(-24px);color:#1bfaad;font-size:14px;}

.container .formbox form .inputbox input:focus,.container .formbox form .inputbox textarea:focus,
.container .formbox form .inputbox input:valid,.container .formbox form .inputbox textarea:valid {border-bottom-color:#fff;}

.container .imgbox {position:relative;width:50%;height:100%;overflow:hidden;}

.container .imgbox:before {content: '';position:absolute;top:0;left:0;width:100%;height:100%;background:#03e9f4;transform-origin:bottom;transform:skewX(-25deg) translateX(10%);}

.container .imgbox img {position:absolute;bottom:150px;right:30px;max-height:95%;}

@media (max-width:991px) {

	.container .formbox {width:100%;padding:0 50px;}

	.container .formbox form {width:100%;max-width:500px;padding:0;}

	.container .imgbox {display:none;}}


<?php include("inc/style.inc") ?>

</style>

<body>

	<div class="container">
	<div class="formbox">
<form>
<h2>Contact us</h2>
<div class="inputbox">
	<input type="text" name="" required="required">
	<span>Full Name</span>
</div>
<div class="inputbox">
	<input type="email" name="" required="required">
	<span>Email Adresse</span>
</div>
<div class="inputbox">
	<textarea required="required"></textarea>
	<span>Type ur message here ...</span>
</div>
<div class="inputbox">
	<input type="submit" value="Send" name="">
</div>
</form>
</div>
<div class="imgbox"><img src="img/logo.ico">
</div>
</div>

	<?php include("inc/cssinc.inc") ?>

</body>
</html>

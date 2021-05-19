.copyright {position:absolute;bottom:20px;color:antiquewhite;font-size:1.1em;margin: 20px 0 10px;}

.menuToggle {position:fixed;top:0;right:0;width:60px;height:60px;background:#03e9f4 url("img/menu.png");background-repeat:no-repeat;background-position:center;background-size:30px;cursor:pointer;z-index:1000;}

.menuToggle.acitve {background:#03e9f4 url("img/close.png");background-repeat:no-repeat;background-position:center;background-size:25px;}

.navi {position:fixed;top:0;left:calc(100% - 60px);width:100%;height:100%;background:#fff;z-index:999;display:flex;justify-content:center;align-items:center;transition:0.2s;}

.navi.active {left:0px;}

.navi ul {position:relative;}

.navi ul li {position:relative;list-style:none;text-align:center;}

.navi ul li a {font-size:2.5em;color:#111;text-decoration:none;font-weight:300;}

.navi ul li a:hover {color:#03e9f4;}

.soci {position:absolute;top:0;left:0;width:60px;height:100%;border-right:1px solid rgba(0,0,0,.1);display:flex;justify-content:center;align-items:center;}

.soci ul {position:relative;}

.soci ul li {position:relative;list-style:none;}

.soci ul li a {position:relative;display:inline-block;transform:scale(0.6);}

.soci .ebox {position:absolute;bottom:20px;transform:scale(0.6);}

@media (max-width:767px) {header{padding:100px 40px} header .content h2{font-size:2.5em} navi{left:100%} header .sto{position:absolute;top:0;right:0;width:100%;height:100%;object-fit:cover;opacity:0.5;} header .logo{top:10px;font-size:1.5em;} .navi ul li a {font-size:2em;}}

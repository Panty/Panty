<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=latin1">
		<meta name="author" content="Nekkathecat & Noisia">
		<meta name="template" content="{$THEME}">
		<title>{$TITLE} - {block name=title}Default Page Title{/block}</title>
		<script type="text/javascript"></script>
		<link href="{$URL_ASSETS}css/main.css" type="text/css" rel="stylesheet">
		<link href="{$URL_ASSETS}css/jquery-ui.css" type="text/css" rel="stylesheet">
		<link href="{$URL_ASSETS}css/ui.selectmenu.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<div class="header" id="header">
				<a href="{$URL}index.php/news/index" class="header-logo"></a>
				<a href="{$LAUNCHER_URL}" class="register-btn">
					<p></p>
					<span></span>
				</a>
				<div style=" height:162px; width:1px;"></div>
				<!--DEBUT NAVBAR -->
				<ul class="menu">
					<li>
						<a id="home" href="{$URL}index.php/news/index">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="comm" href="{$URL}index.php/server/story">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="connect" href="{$URL}index.php/server/play">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="support" href="{$URL}index.php/server/staff">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="ranking" href="{$URL}index.php/server/ladder">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="rinfo" href="{$URL}index.php/server/cgu">
							<p></p>
							<span></span>
						</a>
					</li>
				</ul>
				<!--FIN SIDEBAR -->
			</div>
			<div class="body">
				<div class="body-top-fix"></div>
				<div id="main-side">
					<a href="#" class="vote-banner">
						<p></p>
						<span></span>
					</a>
					<!--DEBUT NEWS-->
					<div class="news-container">
						<ul>
							{block name=body}{/block}
						</ul>
					</div>
					<!--FIN NEWS-->
				</div>
				<div id="sidebar">
					<!--DEBUT SIDEBAR -->
					<!--PANEL CONNEXION -->
					{if !isset($smarty.session.logged)}
					<div class="sidebar-box login">
						<div class="sbox-head">Connexion</div>
						<div class="sbox-content">
							<form class="login" action="{$URL}index.php/user/login" method="post">
								<input type="text" name="username" placeholder="Nom de compte" required/>
								<input type="password" name="password" placeholder="***********" required/>
								<input type="submit" name="submit_login" value="connexion">
								<span>
								<a href="{$URL}index.php/user/register">Pas de compte ?</a>
								</span>
							</form>
							<div class="clear"></div>
						</div>
					</div>
					{else}
					<div class="sidebar-box popular-topics">
						<div class="sbox-head">Bienvenue {$smarty.session.pseudo}</div>
						<div class="sbox-content">
							<ul>
								<li><h4><a href="{$URL}index.php/user/profil"><img width="16" height="16" style="float: left;" src="{$URL_ASSETS_GLOBAL}devtool/user.png"> Mon profil</a></h4></li>
								<li><h4><a href="{$URL}index.php/user/tokens"><img width="16" height="16" style="float: left;" src="{$URL_ASSETS_GLOBAL}devtool/star.png"> Mes points ({$smarty.session.tokens})</a></h4></li>
								<li><h4><a href="{$URL}index.php/shop/cat/1"><img width="16" height="16" style="float: left;" src="{$URL_ASSETS_GLOBAL}devtool/cadeau.png"> Boutique</a></h4></li>
								<li><h4><a href="{$URL}index.php/user/vote"><img width="16" height="16" style="float: left;" src="{$URL_ASSETS_GLOBAL}devtool/time.png"> Voter</a></h4></li>
								<li><h4><a href="{$URL}index.php/user/logout"><img width="16" height="16" style="float: left;" src="{$URL_ASSETS_GLOBAL}devtool/close.png"> Déconnexion</a></h4></li>
							</ul>
						</div>
					</div>
					{/if}
					<!--FIN PANEL CONNEXION -->
					<!--DEBUT NAV -->
					<a href="{$URL}index.php/user/vote" class="teamspeak-baner">
						<p></p>
						<span></span>
					</a>
					<div class="sidebar-box login">
						<div class="sbox-head">Encyclopedie :: Recherche</div>
						<div class="sbox-content">
							<form class="login" action="{$URL}index.php/encyclopedia/item" method="post">
								<input class="color_input" type="text" placeholder="Nom de l'item à rechercher..." name="item" id="item" required/>
								<input class="color_input_sub" type="submit" name="item_post" value="Rechercher" type="submit"/>
							</form>
							<div class="clear"></div>
						</div>
					</div>
					<!--FIN NAV -->
				</div>
				<!--FIN SIDEBAR -->
				<div class="clear"></div>
			</div>
			<!--FIN BODY -->
			<div class="footer">
				<!--DEBUT FOOTER -->
				<a class="back-to-top" href="#header">
					<p></p>
					<span></span>
				</a>
				<div id="rights">
					<font color="#594f46">®</font> {$TITLE} - Tous droits réservés<br>
					Propulsé par Panty - Copyright 2013</font> <br>
					Designé par <a href="http://nekkathecat.deviantart.com" rel="nofollow" target="_blank">Nekkathecat</a> | Développé par <a rel="nofollow">Noisia</a><br>
				</div>
				<div id="footer-menu">
					<ul>
						<!--LIENS PRATIQUES ICI -->
						<li><a href="#">Guildes : <b>{$guilds}</b></a></li>
					</ul>
					<ul>
						<li><a href="#">Personnages : <b>{$characters}</b></a></li>
					</ul>
					<ul>
						<li><a href="#">Comptes : <b>{$accounts}</b></a></li>
						<!--FIN LIENS PRATIQUES ICI -->
					</ul>
				</div>
			</div>
			<!--FIN FOOTER -->
		</div>
		<script type="text/javascript" src="{$URL_ASSETS}js/jquery.min.js"></script>
		<script type="text/javascript" src="{$URL_ASSETS}js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="{$URL_ASSETS}js/ui.selectmenu.js"></script>
		<script type="text/javascript" src="{$URL_ASSETS}js/jquery.spritely-0.6.1.js"></script>
	</body>
</html>
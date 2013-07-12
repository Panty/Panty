<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 00:29:15
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\ragefull\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2854651d9eab237fbf6-55900822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e897d5420908987b79297a556b7caebaac5c2ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\register.tpl',
      1 => 1373236152,
      2 => 'file',
    ),
    'e4fe2f24c1a5691c74e8a3da6824ac81d2d991fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\layout.tpl',
      1 => 1373234782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2854651d9eab237fbf6-55900822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d9eab252f759_95404257',
  'variables' => 
  array (
    'TITLE' => 0,
    'URL_ASSETS' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d9eab252f759_95404257')) {function content_51d9eab252f759_95404257($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=latin1">
		<meta name="author" content="Nekkathecat & Noisia">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Enregistrement</title>
		<script type="text/javascript"></script>
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/main.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/jquery-ui.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/ui.selectmenu.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<div class="header" id="header">
				<a href="#" class="header-logo"></a>
				<a href="#" class="register-btn">
					<p></p>
					<span></span>
				</a>
				<div style=" height:162px; width:1px;"></div>
				<!--DEBUT NAVBAR -->
				<ul class="menu">
					<li>
						<a id="home" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/news/index">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="comm" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/story">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="connect" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="support" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="ranking" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder">
							<p></p>
							<span></span>
						</a>
					</li>
					<li>
						<a id="rinfo" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu">
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
							
<?php if (isset($_smarty_tpl->tpl_vars['champs']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</h2>
	<div class="news-text">
		Tous les champs doivent être <b>complétés</b>.<br>
	</div>
</li>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['alreadyused']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</h2>
	<div class="news-text">
		Le <b>nom de compte</b>, le <b>pseudonyme</b> ou <b>l'email</b> est déjà utilisé.<br>
	</div>
</li>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['password']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</h2>
	<div class="news-text">
		Les <b>mots de passe</b> ne correspondent pas.<br>
	</div>
</li>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['mail_invalid']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</h2>
	<div class="news-text">
		L'adresse <b>email</b> est invalide.<br>
	</div>
</li>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['captcha']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</h2>
	<div class="news-text">
		Le <b>captcha</b> entré est incorrect.<br>
	</div>
</li>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
<li class="news-row">
	<h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</h2>
	<div class="news-text">
		Votre compte a été <b>créé</b> avec succès.<br>
	</div>
</li>
<?php }?>
<li class="news-row">
	<h2>Enregistrement</h2>
	<div class="news-text">
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register">
			<table>
				<tbody>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/joueur.png"> Nom de compte :
						</td>
						<td width="290">
							<input name="username" id="username" maxlength="32" value="" type="text" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/construction.png"> Mot de passe :
						</td>
						<td>
							<input name="password" id="password" maxlength="40" value="" type="password" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/construction.png"> Confirmez votre mot de passe :
						</td>
						<td>
							<input name="password_conf" id="password_conf" maxlength="40" value="" type="password" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Pseudo :
						</td>
						<td>
							<input name="pseudo" id="pseudo" value="" type="text" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/email_open.png"> Adresse E-mail :
						</td>
						<td>
							<input name="email" id="email" value="" type="text" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/view.png"> Question secrète :
						</td>
						<td>
							<input name="quest" id="quest" value="" type="text" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/edit.png"> Réponse secrète :
						</td>
						<td>
							<input name="answ" id="answ" value="" type="text" required>
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/ip.png"> Code de sécurité :
						</td>
						<td>
							<input name="captcha" id="captcha" value="" type="text" required> : <img title="" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
captcha.php">
						</td>
					</tr>
					<tr>
						<td>
							<img title="" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> C.G.U :
						</td>
						<td>
							<input value="check[]" name="rule" type="checkbox"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu" required><img title="Attention, lire attentivement &amp; accepter les C.G.U !" width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/help.png"></a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<center>
								<input name="register" class="inscrire" value="Inscription !" type="submit">
							</center>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</li>

						</ul>
					</div>
					<!--FIN NEWS-->
				</div>
				<div id="sidebar">
					<!--DEBUT SIDEBAR -->
					<!--PANEL CONNEXION -->
					<div class="sidebar-box login">
						<div class="sbox-head">Connexion</div>
						<div class="sbox-content">
							<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/login" method="post">
								<input type="text" name="username" placeholder="USER" required/>
								<input type="password" name="password" placeholder="PWD" required/>
								<input type="submit" name="submit_login" value="login">
								<span>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register">Pas de compte ?</a>
								</span>
							</form>
							<div class="clear"></div>
						</div>
					</div>
					<!--FIN PANEL CONNEXION -->
					<!--DEBUT NAV -->
					<a href="#" class="teamspeak-baner">
						<p></p>
						<span></span>
					</a>
					<div class="sidebar-box login">
						<div class="sbox-head">Encyclopedie :: Recherche</div>
						<div class="sbox-content">
							<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item" method="post">
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
					<font color="#594f46">®</font> Panty - Tous droits réservés<br>
					Message de Copyright qui doit en jeter google ?</font> <br>
					Designé par <a href="http://nekkathecat.deviantart.com" rel="nofollow" target="_blank">Nekkathecat</a> | Développé par <a rel="nofollow">Noisia</a><br>
				</div>
				<div id="footer-menu">
					<ul>
						<!--LIENS PRATIQUES ICI -->
						<li><a href="#">TEST</a></li>
						<li><a href="#">TEST</a></li>
					</ul>
					<ul>
						<li><a href="#">TEST</a></li>
						<li><a href="#">TEST</a></li>
						<li><a href="#">TEST</a></li>
					</ul>
					<ul>
						<li><a href="#">TEST</a></li>
						<li><a href="#">TEST</a></li>
						<li><a href="#">TEST</a></li>
						<!--FIN LIENS PRATIQUES ICI -->
					</ul>
				</div>
			</div>
			<!--FIN FOOTER -->
		</div>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/ui.selectmenu.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery.spritely-0.6.1.js"></script>
	</body>
</html><?php }} ?>
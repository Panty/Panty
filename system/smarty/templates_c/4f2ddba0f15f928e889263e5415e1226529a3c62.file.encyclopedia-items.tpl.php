<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 01:56:07
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\ragefull\encyclopedia-items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1638051d9f79e546ed0-39522069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2ddba0f15f928e889263e5415e1226529a3c62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\encyclopedia-items.tpl',
      1 => 1373239193,
      2 => 'file',
    ),
    'e4fe2f24c1a5691c74e8a3da6824ac81d2d991fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\layout.tpl',
      1 => 1373241286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1638051d9f79e546ed0-39522069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d9f79e675b37_71971156',
  'variables' => 
  array (
    'THEME' => 0,
    'TITLE' => 0,
    'URL_ASSETS' => 0,
    'URL' => 0,
    'LAUNCHER_URL' => 0,
    'URL_ASSETS_GLOBAL' => 0,
    'guilds' => 0,
    'characters' => 0,
    'accounts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d9f79e675b37_71971156')) {function content_51d9f79e675b37_71971156($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=latin1">
		<meta name="author" content="Nekkathecat & Noisia">
		<meta name="template" content="<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Encyclop�die</title>
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
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/news/index" class="header-logo"></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['LAUNCHER_URL']->value;?>
" class="register-btn">
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
							
<li class="news-row">
	<h2>Recherche d'objet</h2>
	<div class="news-text">
		<div style="margin:auto;width:570px;height:210px;background:url('<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/Bg_RechE.png');">
			<div style="position:absolute; margin-top:32px; margin-left:1px;height:176px; width:568px;overflow-y:scroll;">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><div class="bb"><span style="position:absolute;margin-left: 5px;margin-top: 6px;font-size:14px;color:#514a3c;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span><img width="21" height="21" style="float:right;margin-top:5px;margin-right:5px;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
items/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.png"></div></a>
				<?php } ?>
			</div>
		</div>
	</div>
</li>	

						</ul>
					</div>
					<!--FIN NEWS-->
				</div>
				<div id="sidebar">
					<!--DEBUT SIDEBAR -->
					<!--PANEL CONNEXION -->
					<?php if (!isset($_SESSION['logged'])){?>
					<div class="sidebar-box login">
						<div class="sbox-head">Connexion</div>
						<div class="sbox-content">
							<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/login" method="post">
								<input type="text" name="username" placeholder="Nom de compte" required/>
								<input type="password" name="password" placeholder="***********" required/>
								<input type="submit" name="submit_login" value="connexion">
								<span>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register">Pas de compte ?</a>
								</span>
							</form>
							<div class="clear"></div>
						</div>
					</div>
					<?php }else{ ?>
					<div class="sidebar-box popular-topics">
						<div class="sbox-head">Bienvenue <?php echo $_SESSION['pseudo'];?>
</div>
						<div class="sbox-content">
							<ul>
								<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/profil"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Mon profil</a></h4></li>
								<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/tokens"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/star.png"> Mes points (<?php echo $_SESSION['tokens'];?>
)</a></h4></li>
								<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/1"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/cadeau.png"> Boutique</a></h4></li>
								<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/vote"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/time.png"> Voter</a></h4></li>
								<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/logout"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/close.png"> D�connexion</a></h4></li>
							</ul>
						</div>
					</div>
					<?php }?>
					<!--FIN PANEL CONNEXION -->
					<!--DEBUT NAV -->
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/vote" class="teamspeak-baner">
						<p></p>
						<span></span>
					</a>
					<div class="sidebar-box login">
						<div class="sbox-head">Encyclopedie :: Recherche</div>
						<div class="sbox-content">
							<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item" method="post">
								<input class="color_input" type="text" placeholder="Nom de l'item � rechercher..." name="item" id="item" required/>
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
					<font color="#594f46">�</font> <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Tous droits r�serv�s<br>
					Propuls� par Panty - Copyright 2013</font> <br>
					Design� par <a href="http://nekkathecat.deviantart.com" rel="nofollow" target="_blank">Nekkathecat</a> | D�velopp� par <a rel="nofollow">Noisia</a><br>
				</div>
				<div id="footer-menu">
					<ul>
						<!--LIENS PRATIQUES ICI -->
						<li><a href="#">Guildes : <b><?php echo $_smarty_tpl->tpl_vars['guilds']->value;?>
</b></a></li>
					</ul>
					<ul>
						<li><a href="#">Personnages : <b><?php echo $_smarty_tpl->tpl_vars['characters']->value;?>
</b></a></li>
					</ul>
					<ul>
						<li><a href="#">Comptes : <b><?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
</b></a></li>
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
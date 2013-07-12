<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 02:01:43
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\ragefull\shop_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195951da00c092a730-84214485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48f151c79d3a32415c470c545b28f68b0e6fb21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\shop_confirm.tpl',
      1 => 1373241700,
      2 => 'file',
    ),
    'e4fe2f24c1a5691c74e8a3da6824ac81d2d991fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\ragefull\\layout.tpl',
      1 => 1373241286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195951da00c092a730-84214485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51da00c0a923e6_65693500',
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
<?php if ($_valid && !is_callable('content_51da00c0a923e6_65693500')) {function content_51da00c0a923e6_65693500($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=latin1">
		<meta name="author" content="Nekkathecat & Noisia">
		<meta name="template" content="<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Boutique : Confirmation</title>
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
							
		<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
	      <li class="news-row"><h2><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</h2><div class="news-text">
          Vous devriez recevoir votre <b>commande</b> d'ici quelques instants !<br>
          </div></li>
		<?php }?>
		<li class="news-row"><h2>Boutique : Confirmation</h2><div class="news-text">
		<center>Veuillez vérifier les informations de la commande avant de continuer. Lisez bien les informations de cette page, elles peuvent vous être utiles.</center><br /><br />
		<div style="margin:auto;width:587px;height:260px;background:url('<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/Bg_Boutique2.png');">

				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 10px; margin-left:10px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
				<b style="float:right;color:#ffffff;font-size:14px;margin-top: 10px; margin-right:10px;">Niv.<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
</b>
				<span style="position:absolute;color:#514a3c;font-size:12px;margin-top: 40px; margin-left:5px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['pod'];?>
 pods</span>
				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 42px; margin-left:265px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['sold'];?>
</b>
				
				
				<img style="position:absolute;margin-top: 65px; margin-left: 18px;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
items/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.png">

				<div style="position:absolute; margin-top:65px; margin-left:136px;height:123px; width:450px;overflow-y:scroll;overflow-x:hidden;">
					<p style="margin-top:5px; margin-left:3px;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['item_stats']->value;?>
</p>
				</div>
				<div style="position:absolute;color:#514a3c;font-size:14px;margin-top: 191px; margin-left:7px;height:65px; width:575px;">
				<u>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['panoplie']=='-1'){?>Panoplie : Aucune<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['panoplie_name']->value;?>
<?php }?>
				</u><br />
				</div>
		</div>
		<br />
		
		<span style="color: rgb(255, 0, 0)"><b>ATTENTION :</b> Vous devez impérativement avoir votre personnage connecté en jeu avant de valider la commande.</span><br>
		Aucun remboursement ne pourra avoir lieu en cas de perte si vous ne respectez pas cette indication.<br>
		Veuillez verifier maintenant que vous n'avez pas ete déconnecté du jeu avant de faire l'achat.<br><br>
		
		<center>
		<form method="post">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td><b><center>Personnage</center></b></td>
					<td><center><b>Niveau</b></center></td>
				</tr>
				
			<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['character']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value){
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
				<tr>
					<td>
						<input type="radio" name="character" value="<?php echo $_smarty_tpl->tpl_vars['char']->value['id'];?>
"> 
					</td>
					<td><b><center><?php echo $_smarty_tpl->tpl_vars['char']->value['name'];?>
</center></b></td>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['char']->value['level'];?>

					</td>
				</tr>	
			<?php } ?>
			</tbody>
			</table>
			<center><input class="color_input" type="submit" name="" value="Confirmer l'achat !" type="submit"/></center>
		</form>
		</center>
	</div></li>

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
devtool/close.png"> Déconnexion</a></h4></li>
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
					<font color="#594f46">®</font> <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Tous droits réservés<br>
					Propulsé par Panty - Copyright 2013</font> <br>
					Designé par <a href="http://nekkathecat.deviantart.com" rel="nofollow" target="_blank">Nekkathecat</a> | Développé par <a rel="nofollow">Noisia</a><br>
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
<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 15:57:26
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\fustop\tokens.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2135751dac546b0cad4-78808386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15436ee62bc02ade49a446ebc5ec815d73334385' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\tokens.tpl',
      1 => 1373291769,
      2 => 'file',
    ),
    'c16eeabca603d0d1efb370f1ccd8d58610b373a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\layout.tpl',
      1 => 1373291595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135751dac546b0cad4-78808386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ASSETS' => 0,
    'TITLE' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dac546c04306_76167485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dac546c04306_76167485')) {function content_51dac546c04306_76167485($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/bootstrap.css" rel="stylesheet">
        <meta charset="latin-1" />
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Achat de points</title>
		<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/trool.png" />
	</head>
	<body>
	<div id="page">
		<header>
			<div id="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/Biloute.png" width="420" height="250"></img></div>
			<div id="connexion">
			<?php if (isset($_SESSION['logged'])){?>
				<center>
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/thingy.png"><br/>
					Bienvenue <?php echo $_SESSION['pseudo'];?>
<br />
					<i>Ce n'est pas vous ? <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/logout">D�connexion</a></i>
				</center>
			<?php }else{ ?>
				Module de connexion<br/>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/login">
				<input type="text" name="username" class="input input-medium" placeholder="Pseudo" required><br/>
				<input type="password" name="password" class="input input-medium" placeholder="Mot de passe" required><br/>
				<input type="submit" class="btn btn-inverse" value="Connexion">
				</form>
			<?php }?>
			</div>
		</header>
		<div id="menuh">
			<ul>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/news/index"><li>Accueil</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/story"><li>Histoire</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play"><li>Nous rejoindre</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff"><li>L'�quipe</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder"><li>Classement</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><li>R�glement</li></a>
			</ul>
		</div>
		<br/>
		<div id="content">
			<div class="announce">
				
<div class="titlenews">Achat de points</div>
	<div class="well well-small">
	<div id="starpass_<?php echo $_smarty_tpl->tpl_vars['IDD']->value;?>
"></div>
	<script type="text/javascript" src="http://script.starpass.fr/script.php?idd=<?php echo $_smarty_tpl->tpl_vars['IDD']->value;?>
&amp;verif_en_php=1&amp;datas=&amp;">
	</script>
	<noscript>Veuillez activer le Javascript de votre navigateur s'il vous pla&icirc;t.<br />
	<a href="http://www.starpass.fr/">Micro Paiement StarPass</a>
	</noscript>
</div><br />	

						</div>
			<br/>
			
			<div class="announce">
				   SERVEUR&copy;  Design par <a href="#">Team Kat</a> - D�velopp� avec TinyMVC. Tous droits reserv�s<br/>
		    </div>
		</div>
		<div id="menur">
		<?php if (isset($_SESSION['logged'])){?>
			<div class="titlecat">Gestion de compte</div><br/>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/profil">Mon profil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/tokens">Mes points (<?php echo $_SESSION['tokens'];?>
)</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/1">Boutique</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/vote">Voter</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/logout">D�connexion</a></li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/borner-separateur.png">
			</ul>
			<br/>
		<?php }?>
			<div class="titlecat">Encyclop�die :: Recherche</div><br/>
				<center>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item">
				<input type="text" name="item" id="item" class="input input-large" placeholder="Nom de l'item � rechercher..." required><br/>
				<input type="submit" class="btn btn-inverse" name="item_post" value="Rechercher">
				</form>
				</center>
			<br/>
		</div>
		<br/>
	</div>
</body><?php }} ?>
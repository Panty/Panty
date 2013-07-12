<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 16:04:41
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\fustop\play.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667451dac4fbac4738-53418391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f699b09155f9d80eaa2aea8b37022c38fe6a70d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\play.tpl',
      1 => 1373291769,
      2 => 'file',
    ),
    'c16eeabca603d0d1efb370f1ccd8d58610b373a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\layout.tpl',
      1 => 1373292279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667451dac4fbac4738-53418391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dac4fbbd4187_53213608',
  'variables' => 
  array (
    'URL_ASSETS' => 0,
    'TITLE' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dac4fbbd4187_53213608')) {function content_51dac4fbbd4187_53213608($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/bootstrap.css" rel="stylesheet">
        <meta charset="latin-1" />
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Jouer !</title>
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
index.php/user/logout">Déconnexion</a></i>
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
index.php/user/register"><li>Inscription</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play"><li>Nous rejoindre</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff"><li>L'équipe</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder"><li>Classement</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><li>Règlement</li></a>
			</ul>
		</div>
		<br/>
		<div id="content">
			<div class="announce">
				
<div class="titlenews">Rejoindre le serveur</div>
	<div class="well well-small">
		<center>Vous souhaitez rejoindre la communauté de <b><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</b> et revivre l'aventure des anciens serveurs officiel de <b>Ankama</b> ? Vous trouverez ici toutes les informations qu'il vous faut pour nous rejoindre même si vous n'avez pas encore le jeu.<br><br>
			Si vous n'êtes pas satisfaits de nos services nous vous invitons à vous rendre sur les serveurs officiels, malgré la <b>version 2.0</b>.<br><br>
			<b><u>Etape nº1: Installation du client.</u></b><br><br>
			Téléchargez la version 1.29 de Dofus (seulement si vous n'avez pas déjà le client dofus 1.29) <b><font color="red">est obligatoire</font></b> pour pouvoir accéder au serveur en toute tranquillité.<br><br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['DOFUS_URL']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/download.png" border="0"></a><br><br>
			Après avoir téléchargé le client ci-dessus, veuillez le lancer et suivre les instructions pour mener à bien votre installation.<br><br>
			<b><u>Etape nº2: Lancement du jeu (Installateur)</u></b><br><br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['LAUNCHER_URL']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/download.png" border="0"></a><br><br>
			Lancez l'exécutable installateur.exe. Celui-ci vous permettra d'effectuer les dernières mises à jour.
		</center>
</div><br />

						</div>
			<br/>
			
			<div class="announce">
				   SERVEUR&copy;  Design par <a href="#">Team Kat</a> - Développé avec TinyMVC. Tous droits reservés<br/>
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
index.php/user/logout">Déconnexion</a></li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/borner-separateur.png">
			</ul>
			<br/>
		<?php }?>
			<div class="titlecat">Encyclopédie :: Recherche</div><br/>
				<center>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item">
				<input type="text" name="item" id="item" class="input input-large" placeholder="Nom de l'item à rechercher..." required><br/>
				<input type="submit" class="btn btn-inverse" name="item_post" value="Rechercher">
				</form>
				</center>
			<br/>
		</div>
		<br/>
	</div>
</body><?php }} ?>
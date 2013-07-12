<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 16:11:40
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\fustop\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:849951dac656966ca6-98485681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a65e93f84c5f1795869626a9b24335c28510ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\account.tpl',
      1 => 1373292233,
      2 => 'file',
    ),
    'c16eeabca603d0d1efb370f1ccd8d58610b373a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\layout.tpl',
      1 => 1373292612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849951dac656966ca6-98485681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dac656abb929_67195877',
  'variables' => 
  array (
    'URL_ASSETS' => 0,
    'TITLE' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dac656abb929_67195877')) {function content_51dac656abb929_67195877($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/bootstrap.css" rel="stylesheet">
        <meta charset="latin-1" />
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Profil</title>
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
				
	<?php if (isset($_smarty_tpl->tpl_vars['badpassword']->value)){?>
	      <div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div><div class="well well-small">
          Le <b>mot de passe</b> entré ne correspond pas avec le mot de passe du compte.<br>
          </div><br />
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['badconfirm']->value)){?>
	      <div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div><div class="well well-small">
          Les <b>mots de passe</b> entrés ne sont pas les mêmes.<br>
          </div><br />
	<?php }?>	
	
	<?php if (isset($_smarty_tpl->tpl_vars['pass_changed']->value)){?>
	      <div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</div><div class="well well-small">
          Votre mot de passe a été <b>changé</b> avec succès.<br>
          </div><br />
	<?php }?>	

<div class="titlenews">Mon compte</div>
	<div class="well well-small">
<center>
	<table style="width: 340px;" border="0">
			<tbody>
			<tr>
				<td style="width:150px">Nom de compte : </td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_data']->value['account'];?>
</td>
			</tr>
			<tr>
				<td style="width:150px">Adresse mail : </td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_data']->value['mail'];?>
</td>
			</tr>
			<tr>
				<td style="width:150px">Mon pseudo : </td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_data']->value['pseudo'];?>
</td>
			</tr>

			<tr>
				<td style="width:150px">Nombre de vote : </td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['nb_votes'];?>
</td>
			</tr>
			
			<tr>
				<td style="width:150px">Points disponible : </td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['tokens'];?>
</td>
			</tr>

			<tr>
				<td style="width:150px">Derniere IP :</td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['last_ip'];?>
</td>
			</tr>
			
			<tr>
				<td style="width:150px">Derniere Connection :</td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['last_co'];?>
</td>
			</tr>
			
			<tr>
				<td style="width:150px">Question secrète :</td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['question'];?>
</td>
			</tr>
			
			<tr>
				<td style="width:150px">Compte :</td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['player_lv'];?>
</td>
			</tr>
			
			<tr>
				<td style="width:150px">Connecté :</td>
				<td style="width:150px"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['connected'];?>
</td>
			</tr>		
			</tbody>
	</table>
	</center>
</div><br />	
	
<div class="titlenews">Changement de mot de passe</div>
	<div class="well well-small">
<center>
<table style="width: 400px;" border="0">
<form action="" method="post">
<tr>
<td style="width:250px">Ancien mot de passe :</td>
<td style="width:150px"><input class="input" name="oldpass" value="" type="password" required></td>
</tr>
<tr>
<td style="width:250px">Nouveau mot de passe :</td>
<td style="width:150px"><input class="input" name="pass" value="" type="password" required></td>
</tr>
<tr>
<td style="width:250px">Confirmer le nouveau mot de passe :</td>
<td style="width:150px"><input class="input" name="passconf" value="" type="password" required></td>
</tr>
</table>
<center>
<input class="btn btn-inverse" name="change" value="Changer" type="submit">
</center>
</form>
</center>   
</div><br />	


						</div>
			<br/>
			
			<div class="announce">
				   <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
&copy;2013  Design par <a href="#">Team Kat</a> - Propulsé par Panty. Tous droits réservés<br/>
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
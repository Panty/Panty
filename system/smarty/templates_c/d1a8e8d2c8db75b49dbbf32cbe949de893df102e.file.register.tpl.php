<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 16:04:42
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\fustop\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516751dac6fa871681-64604628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a8e8d2c8db75b49dbbf32cbe949de893df102e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\register.tpl',
      1 => 1373292228,
      2 => 'file',
    ),
    'c16eeabca603d0d1efb370f1ccd8d58610b373a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\layout.tpl',
      1 => 1373292279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516751dac6fa871681-64604628',
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
  'unifunc' => 'content_51dac6fa9f2d86_98972677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dac6fa9f2d86_98972677')) {function content_51dac6fa9f2d86_98972677($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/bootstrap.css" rel="stylesheet">
        <meta charset="latin-1" />
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Enregistrement</title>
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
				
<?php if (isset($_smarty_tpl->tpl_vars['champs']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div>
	<div class="well well-small">
		Tous les champs doivent être <b>complétés</b>.<br>
</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['alreadyused']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div>
	<div class="well well-small">
		Le <b>nom de compte</b>, le <b>pseudonyme</b> ou <b>l'email</b> est déjà utilisé.<br>
</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['password']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div>
	<div class="well well-small">
		Les <b>mots de passe</b> ne correspondent pas.<br>
</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['mail_invalid']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div>
	<div class="well well-small">
		L'adresse <b>email</b> est invalide.<br>
</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['captcha']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</div>
	<div class="well well-small">
		Le <b>captcha</b> entré est incorrect.<br>
</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
<div class="titlenews"><img width="16" height="16" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</div>
	<div class="well well-small">
		Votre compte a été <b>créé</b> avec succès.<br>
</div><br />
<?php }?>
<div class="titlenews">Enregistrement</div>
	<div class="well well-small">
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
								<input name="register" class="btn btn-inverse" value="Inscription !" type="submit">
							</center>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
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
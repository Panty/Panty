<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 16:10:14
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\fustop\encyclopedia-items-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848251dac6267a02e4-65311942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028e63b0ed2bf97fe5a4b962f03d223143327024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\encyclopedia-items-view.tpl',
      1 => 1373292019,
      2 => 'file',
    ),
    'c16eeabca603d0d1efb370f1ccd8d58610b373a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\fustop\\layout.tpl',
      1 => 1373292612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848251dac6267a02e4-65311942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dac6268de1f1_40148388',
  'variables' => 
  array (
    'URL_ASSETS' => 0,
    'TITLE' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dac6268de1f1_40148388')) {function content_51dac6268de1f1_40148388($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/bootstrap.css" rel="stylesheet">
        <meta charset="latin-1" />
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Vue d'objet</title>
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
				
<div class="titlenews">Vue d'objet</div>
	<div class="well well-small">
	<div style="margin:auto;width:587px;height:260px;background:url('<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/Bg_Item.png');">

				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 10px; margin-left:10px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
				<b style="float:right;color:#ffffff;font-size:14px;margin-top: 10px; margin-right:10px;">Niv.<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
</b>
				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 42px; margin-left:210px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['prix'];?>
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
</div><br />
<?php if (isset($_smarty_tpl->tpl_vars['drops']->value)){?>
<div class="titlenews">Liste de drop</div>
	<div class="well well-small">
		<table>
			<tbody>
				<tr>
					<td width="40%">
						<b>
							<center>Monstre</center>
						</b>
					</td>
					<td width="20%">
						<b>
							<center>Seuil</center>
						</b>
					</td>
					<td width="40%">
						<center><b>Max</b></center>
					</td>
					<td width="40%">
						<center><b>Taux</b></center>
					</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['data_drop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_drop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['drops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_drop']->key => $_smarty_tpl->tpl_vars['data_drop']->value){
$_smarty_tpl->tpl_vars['data_drop']->_loop = true;
?>
				<tr>
					<td style="color:#000000;background-color:#e3b74e">
						<center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['mob_name'];?>
</center>
					</td>
					<td style="color:#000000;background-color:#e3b74e">
						<center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['seuil'];?>
</center>
					</td>
					<td style="color:#000000;background-color:#e3b74e">
						<center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['max'];?>
</center>
					</td>
					<td style="color:#000000;background-color:#e3b74e">
						<center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['taux'];?>
%</center>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php }?>
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
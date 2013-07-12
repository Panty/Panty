<?php /* Smarty version Smarty-3.1.13, created on 2013-07-06 05:44:48
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\paradize\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1712251cf04e7528f83-45796862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ac77488f89a42fa5d558ce779a339d72112187' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\paradize\\account.tpl',
      1 => 1372014169,
      2 => 'file',
    ),
    '9c94ac3c618343facfc87d0a3250cf25e0fd41f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\paradize\\layout.tpl',
      1 => 1373082237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1712251cf04e7528f83-45796862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cf04e76f4d67_79107550',
  'variables' => 
  array (
    'TITLE' => 0,
    'URL_ASSETS' => 0,
    'URL_ASSETS_GLOBAL' => 0,
    'logged' => 0,
    'accounts' => 0,
    'characters' => 0,
    'guilds' => 0,
    'top3' => 0,
    'top' => 0,
    'URL' => 0,
    'BOARD_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cf04e76f4d67_79107550')) {function content_51cf04e76f4d67_79107550($_smarty_tpl) {?><!-- Form site -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
	
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Profil</title>
			<meta http-equiv="Content-Type" content="text/html; charset=latin-1" />
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/style.css" type="text/css"/>
			<link type="image/x-icon" rel="shortcut icon" href="http://staticns.ankama.com/dofus/ogrine/img/favicon.ico" />
	</head>
	
<div id="page-wrap">
<div id=header>
	<div id="header_stats">
		<p class="header_stats_1"><font color="#F6E497">Serveur : <img class="header_stats_icon" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/on.png"> <b class="green"></b></font></p>
	    <!-- Hors ligne <p class="header_stats_1"><font color="#F6E497">Serveur : <img class="header_stats_icon" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/off.png"> <b class="red">Hors ligne</b></font></p> -->
		<p class="header_stats_2"><font color="#F6E497">Connectes: : </font><b><?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
/100</b></p>
		<p class="header_stats_3"><font color="#F6E497">Comptes : </font><b><?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
</b></p>
		<p class="header_stats_4"><font color="#F6E497">Personnages : </font><b><?php echo $_smarty_tpl->tpl_vars['characters']->value;?>
</b></p>
		<p class="header_stats_5"><font color="#F6E497">Guildes : </font><b><?php echo $_smarty_tpl->tpl_vars['guilds']->value;?>
</b></p>
		<!--<p class="header_stats_6"><font color="#F6E497">Visiteurs : </font><b><script type="text/javascript" src="http://www.abcompteur.com/live/?code=0/100/12161/4/1&ID=662092"></script></b></p>-->
	</div>
<div id="header_ladder">
  


  

<?php  $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top']->key => $_smarty_tpl->tpl_vars['top']->value){
$_smarty_tpl->tpl_vars['top']->_loop = true;
?>
<p class="header_p<?php echo $_smarty_tpl->tpl_vars['top']->value['pos'];?>
_1"><font color="#EFECCA"><?php echo $_smarty_tpl->tpl_vars['top']->value['name'];?>
</p><p class="header_p<?php echo $_smarty_tpl->tpl_vars['top']->value['pos'];?>
_2"><?php echo $_smarty_tpl->tpl_vars['top']->value['level'];?>
</p>
<?php } ?>

</div>
</div>


<div id=mainMiddle>

<!----------------------------------------------------- MENULEFT !-->
	<div id="menuLeft">
		<?php if (!isset($_SESSION['logged'])){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/titleMenuLeft/titleMenu_4.png">
			<div id="menuLeft_line">	
			   <center>
					<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/login" method="post">
					<input class="color_input" type="text" value="Mon compte" name="username" id="login" onfocus="select()" />
					<input class="color_input" type="password" name="password" value="Pass" onfocus="select()" />
					<input class="color_input_sub" type="submit" name="" value="Se connecter" type="submit"/>
					</form>
				</center>
			</div>
		<?php }else{ ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/titleMenuLeft/titleMenu_5.png">
			<div id="menuLeft_line">
				<ul style="margin-left:-40px;margin-bottom:-1px;margin-top:-1px;" class="niveau1">
				<nav>
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/profil"><li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Mon profil (<?php echo $_SESSION['pseudo'];?>
)</li></a>
					<li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/star.png"> Avantages			
						<ul class="niveau2">
							<li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/star.png"> Mes points (<?php echo $_SESSION['tokens'];?>
)</li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/tokens"><li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/money.png"> Acheter des points</li></a>
							<li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/cadeau.png"> Boutique
							<ul class="niveau3">
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/1"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/chapeau.png"> Coiffes</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/2"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/cape.png"> Capes</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/3"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/amulette.png"> Amulettes</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/4"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/anneau.png"> Anneaux</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/5"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/ceinture.png"> Ceintures</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/6"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/botte.png"> Bottes</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/7"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/arme.png"> Armes</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/8"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/bouclier.png"> Boucliers</li></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/9"><li><img width="20" height="20" style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/cat/familier.png"> Autre</li></a>
							</ul>
							</li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/vote"><li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/time.png"> Voter</li></a>
						</ul>
					</li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/logout"><li><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/close.png"> Déconnexion</li></a>
				</nav>
				</ul>
			</div>	
		<?php }?>
			
	<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/titleMenuLeft/titleMenu_1.png">
			<div id="menuLeft_line">
				<nav>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/news/index"><li>Accueil</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/story"><li>Presentation</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff"><li>L'equipe</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><li>Reglement</li></a>
				</nav>
			</div>
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/titleMenuLeft/titleMenu_2.png">
			<div id="menuLeft_line">
			<ul style="margin-left:-40px;margin-bottom:-1px;margin-top:-1px;" class="niveau1">
				<nav>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play"><li>Nous rejoindre</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register"><li>Inscription</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BOARD_URL']->value;?>
"><li>Forum</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder"><li>Ladder</li></a>
				</nav>
			</ul>
			</div>
			
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/titleMenuLeft/titleMenu_3.png">
			<div id="menuLeft_line">	
			   <center>
					<form class="login" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item" method="post">
						<input class="color_input" type="text" value="Nom de l'item à rechercher..." name="item" id="item" onfocus="select()" />
						<input class="color_input_sub" type="submit" name="item_post" value="Rechercher" type="submit"/>
					</form>
				</center>
			</div>
	</div>
	
	<div id="mainMiddle">		
		<!-- Form site -->
		<!-- News -->
		<div id="contentMiddle">
		
		<div id="contentMiddle_News">
			<img class="img_content_News" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/content/top_news.png"/>
			<span><b>&nbsp;&nbsp;&nbsp;Profil</b></span>
			<img class="img_content_News" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/content/bottom_news.png"/>
		</div>	
		<br />
		<div id="contentMiddle_News">
			<img class="img_content_News" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/content/top_news.png"/>
			<div class="cadreText">
				<section id="main-content">
					<div id="guts">
						
    <div class="cadreText">		
	<?php if (isset($_smarty_tpl->tpl_vars['badpassword']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Le <b>mot de passe</b> entré ne correspond pas avec le mot de passe du compte.<br>
          </fieldset>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['badconfirm']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Les <b>mots de passe</b> entrés ne sont pas les mêmes.<br>
          </fieldset>
	<?php }?>	
	
	<?php if (isset($_smarty_tpl->tpl_vars['pass_changed']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</legend>
          Votre mot de passe a été <b>changé</b> avec succès.<br>
          </fieldset>
	<?php }?>	
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
<br>	
	
<center>
<form action="" method="post">
<fieldset><legend>Ancien mot de passe :</legend>
<input class="input" name="oldpass" value="" type="password">
</fieldset>
<fieldset><legend>Nouveau mot de passe :</legend>
<input class="input" name="pass" value="" type="password">
</fieldset>
<fieldset><legend>Confirmer le nouveau mot de passe :</legend>
<input class="input" name="passconf" value="" type="password">
</fieldset>
<center>
<input class="input" name="change" value="Changer" type="submit">
</center>
</form>
</center>   
</div>

					</div>
				</section>
			</div>
			<img class="img_content_News" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/content/bottom_news.png"/>
		</div>
		
	</div>	
	</div>	
<!----------------------------------------------------- COPYRIGHT !-->
	<div id="copyright">
		<div class="text_copyright"><br /><br /><br /><br />
		<b><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</b>  2013 - All rights reserved.<br />
		<i>Template</i> and & <i>Design</i> by <b>Kitano et Nicow</b>.<br />
		
		</div>
	</div>	
</div>
</div>

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery.ba-hashchange.min.js'></script>
    <script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/modernizr.js'></script>
    <script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/dynamicpage.js'></script>
</body>

</html>
<?php }} ?>
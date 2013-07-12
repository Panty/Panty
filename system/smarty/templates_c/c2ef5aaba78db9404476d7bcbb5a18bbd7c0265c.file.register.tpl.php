<?php /* Smarty version Smarty-3.1.13, created on 2013-06-29 14:43:33
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\pandora\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1829851ced644d8a897-48950593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ef5aaba78db9404476d7bcbb5a18bbd7c0265c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\register.tpl',
      1 => 1372014169,
      2 => 'file',
    ),
    'f8321f75e5e61246f0fafbd596cfc8cff7027020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\layout.tpl',
      1 => 1372509811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1829851ced644d8a897-48950593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced6452fcaf5_69365505',
  'variables' => 
  array (
    'TITLE' => 0,
    'URL_ASSETS' => 0,
    'URL' => 0,
    'URL_ASSETS_GLOBAL' => 0,
    'logged' => 0,
    'accounts' => 0,
    'BOARD_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ced6452fcaf5_69365505')) {function content_51ced6452fcaf5_69365505($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=latin-1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Enregistrement</title>
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
css/common.css" type="text/css"/>		
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
		</script>
</head>

<body>
	<img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/logo.png">

<div id="box_top">
	<div id="left">
	<?php if (isset($_SESSION['logged'])){?>
		<div id="a">
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/profil"><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Mon profil (<?php echo $_SESSION['pseudo'];?>
)</a></br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/tokens"><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/star.png"> Mes points (<?php echo $_SESSION['tokens'];?>
)</a></br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/vote"><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/time.png"> Voter</a></br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/shop/cat/1"><img class="icon_li"src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/cadeau.png"> Boutique</a></br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/logout">D&eacute;connexion</a>
		</div>
	<?php }else{ ?>
		<form style="margin:5px 0px 0px 0px;" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/login" method="post">
			<input type="hidden" name="referer" value="<<?php ?>?php echo uri_string(); ?<?php ?>>" />
			<input name="username" class="input_connexion" type="text" value="Utilisateur" onfocus="this.value=&#39;&#39;">
			<input name="password" class="input_connexion" type="password" value="******" onfocus="this.value=&#39;&#39;">
			<input class="connexion" type="submit" name="connexion" value=" ">
		</form>
		<div class="no"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register">Pas encore inscris ?</a></div>
	<?php }?>
	</div>
	
	<div id="middle">
		<div class="slider-wrapper theme-default">
			<div class="ribbon"></div>
			<div id="box_button"></div>
				<div id="slider" class="nivoSlider" style="position: relative; width: 490px; height: 192px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/slider/02.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: no-repeat no-repeat; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/01.png" title="" style="display: none; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/05.png" title="" style="display: none; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/02.png" title="" style="display: none; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/03.png" title="" style="display: none; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/06.png" title="" style="display: none; ">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/04.png" title="" style="display: none; ">
				</div>
					</div>
	</div>

	<div id="right">
		<div class="status">Serveur :
		<font color="green">En ligne</font>
		</div>
		<div class="connecte">Connect&eacute;s : <b><?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
</b></div>
		<div class="compte">Comptes : <b><?php echo $_smarty_tpl->tpl_vars['accounts']->value;?>
</b></div>
	</div>
</div>

<div id="box_middle"><img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bg_top_corp.png">
<div id="menu">
	<div id="sous_menu">
		<img class="title" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/title_asterion.png">
			<div id="sep"></div>
		<div id="a">
			<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/top_menu.png">
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/news/index"><li>Accueil</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/story"><li>Présentation</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff"><li>L'équipe</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><li>Règlement</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play"><li>Nous rejoindre</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register"><li>Inscription</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BOARD_URL']->value;?>
"><li>Forum</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder"><li>Ladder</li></a>
				</br>
				</br>
				<div id="left">
				<form action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item" method="post">
					<input name="item" type="text" value="Utilisateur" onfocus="this.value=&#39;&#39;">
					<input type="submit" name="connexion" value=" ">
				</form>
				</div>
				<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bottom_menu.png">
		</div>
	</div>
	<br>
</div>

<div id="corp">
<div id="title"><img class="ico" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/date.png">Enregistrement</div>
<div id="content">
<div id="top"></div>
<div id="text">

    <div class="cadreText">
	<?php if (isset($_smarty_tpl->tpl_vars['champs']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Tous les champs doivent être <b>complétés</b>.<br>
          </fieldset>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['alreadyused']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Le <b>nom de compte</b>, le <b>pseudonyme</b> ou <b>l'email</b> est déjà utilisé.<br>
          </fieldset>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['password']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Les <b>mots de passe</b> ne correspondent pas.<br>
          </fieldset>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['mail_invalid']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          L'adresse <b>email</b> est invalide.<br>
          </fieldset>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['captcha']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> Erreur !</legend>
          Le <b>captcha</b> entré est incorrect.<br>
          </fieldset>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
	      <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/clean.png"> Félicitation !</legend>
          Votre compte a été <b>créé</b> avec succès.<br>
          </fieldset>
	<?php }?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register">
      <table>
        <tbody>
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/joueur.png"> Nom de compte :
            </td>
            <td width="290">
              <input name="username" id="username" maxlength="32" value="" type="text">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/construction.png"> Mot de passe :
            </td>
            <td>
              <input name="password" id="password" maxlength="40" value="" type="password">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/construction.png"> Confirmez votre mot de passe :
            </td>
            <td>
              <input name="password_conf" id="password_conf" maxlength="40" value="" type="password">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Pseudo :
            </td>
            <td>
              <input name="pseudo" id="pseudo" value="" type="text">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/email_open.png"> Adresse E-mail :
            </td>
            <td>
              <input name="email" id="email" value="" type="text">
            </td>
          </tr> 
		  
		  <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/view.png"> Question secrète :
            </td>
            <td>
              <input name="quest" id="quest" value="" type="text">
            </td>
          </tr>
		  
		  <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/edit.png"> Réponse secrète :
            </td>
            <td>
              <input name="answ" id="answ" value="" type="text">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/ip.png"> Code de sécurité :
            </td>
            <td>
              <input name="captcha" id="captcha" value="" type="text"> : <img title="" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
system/sysfiles/plugins/captcha.php">
            </td>
          </tr>
		  
          <tr>
            <td>
              <img title="" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/error.png"> C.G.U :
            </td>
            <td>
              <input value="check[]" name="rule" type="checkbox"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><img title="Attention, lire attentivement &amp; accepter les C.G.U !" class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
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

</div>
<div id="bottom"></div>
</div>
</div>
<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bg_bottom_corp.png">
<img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bg_footer.png">
</div>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-06-29 14:43:36
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\pandora\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992051ced51b5cb9b4-42900600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '075fe81ddab28428e2c9296f29152b3a4170cbd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\message.tpl',
      1 => 1371801682,
      2 => 'file',
    ),
    'f8321f75e5e61246f0fafbd596cfc8cff7027020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\layout.tpl',
      1 => 1372509811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992051ced51b5cb9b4-42900600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced51b8cb831_36585306',
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
<?php if ($_valid && !is_callable('content_51ced51b8cb831_36585306')) {function content_51ced51b8cb831_36585306($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=latin-1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
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
index.php/server/story"><li>Pr�sentation</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/staff"><li>L'�quipe</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/cgu"><li>R�glement</li></a>
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
images/date.png"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
<div id="content">
<div id="top"></div>
<div id="text">

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


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
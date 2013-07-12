<?php /* Smarty version Smarty-3.1.13, created on 2013-06-29 14:38:37
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\pandora\encyclopedia-items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310751ced54d89cc48-26202092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c5fa93f5c215e111c01415d8dedc39b8f0e7b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\encyclopedia-items.tpl',
      1 => 1372014169,
      2 => 'file',
    ),
    'f8321f75e5e61246f0fafbd596cfc8cff7027020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\layout.tpl',
      1 => 1372509443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310751ced54d89cc48-26202092',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced54dbf2ba4_38969940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ced54dbf2ba4_38969940')) {function content_51ced54dbf2ba4_38969940($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=latin-1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Encyclopédie</title>
		
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
				<form action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/encyclopedia/item" method="post">
					<li><input name="item" class="input_connexion" type="text" value="Utilisateur" onfocus="this.value=&#39;&#39;"></li>
					<li><input class="connexion" type="submit" name="connexion" value=" "></li>
				</form>
				<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bottom_menu.png">
		</div>
	</div>
	<br>
</div>

<div id="corp">
<div id="title"><img class="ico" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/date.png">Encyclopédie</div>
<div id="content">
<div id="top"></div>
<div id="text">

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
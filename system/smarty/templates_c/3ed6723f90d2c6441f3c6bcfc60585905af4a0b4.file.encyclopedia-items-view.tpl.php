<?php /* Smarty version Smarty-3.1.13, created on 2013-06-29 14:42:40
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\pandora\encyclopedia-items-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:761451ced5b27687a3-97614149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed6723f90d2c6441f3c6bcfc60585905af4a0b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\encyclopedia-items-view.tpl',
      1 => 1372509085,
      2 => 'file',
    ),
    'f8321f75e5e61246f0fafbd596cfc8cff7027020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\layout.tpl',
      1 => 1372509759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '761451ced5b27687a3-97614149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced5b2b20022_17543307',
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
<?php if ($_valid && !is_callable('content_51ced5b2b20022_17543307')) {function content_51ced5b2b20022_17543307($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=latin-1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Vue d'objet</title>
		
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
					<li><input type="submit" name="connexion" value=" "></li>
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
images/date.png">Vue d'objet</div>
<div id="content">
<div id="top"></div>
<div id="text">

		<div style="margin:auto;width:587px;height:260px;background:url('<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/Bg_Item.png');">

				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 10px; margin-left:10px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
				<b style="float:right;color:#ffffff;font-size:14px;margin-top: 10px; margin-right:10px;">Niv.<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
</b>
				<b style="position:absolute;color:#ffffff;font-size:14px;margin-top: 42px; margin-left:265px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['sold'];?>
</b>
				
				<img style="position:absolute;margin-top: 65px; margin-left: 18px;" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
items/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.png">

				<div style="position:absolute; margin-top:65px; margin-left:136px;height:123px; width:450px;overflow-y:scroll;">
					<p style="margin-top:5px; margin-left:3px;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['item_stats']->value;?>
</p>
				</div>
				<div style="position:absolute;color:#514a3c;font-size:14px;margin-top: 191px; margin-left:7px;height:65px; width:575px;">
				<u>

				</u><br />
				</div>
		</div>
		<br />
		
		<?php if (isset($_smarty_tpl->tpl_vars['drops']->value)){?>
		</div>
	<div id="bottom"></div>
	</div>
	
<div id="content">
<div id="top"></div>
<div id="text">
			<table>
				<tbody>
				<tr>
					<td style="background-color:#aba18d;" width="40%"><b><center>Monstre</center></b></td>
					<td width="20%"><b><center>Seuil</center></b></td>
					<td style="background-color:#aba18d;" width="40%"><center><b>Max</b></center></td>
					<td style="background-color:#aba18d;" width="40%"><center><b>Taux</b></center></td>
				</tr>

				<?php  $_smarty_tpl->tpl_vars['data_drop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_drop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['drops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_drop']->key => $_smarty_tpl->tpl_vars['data_drop']->value){
$_smarty_tpl->tpl_vars['data_drop']->_loop = true;
?>
				<tr>
					<td style="color:#000000;background-color:#e3b74e"><center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['mob_name'];?>
</center></td>
					<td style="color:#000000;background-color:#e3b74e"><center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['seuil'];?>
</center></td>
					<td style="color:#000000;background-color:#e3b74e"><center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['max'];?>
</center></td>
					<td style="color:#000000;background-color:#e3b74e"><center><?php echo $_smarty_tpl->tpl_vars['data_drop']->value['taux'];?>
%</center></td>
				</tr>	
				<?php } ?>

				</tbody>
			</table>
			<?php }?>

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
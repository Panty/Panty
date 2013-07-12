<?php /* Smarty version Smarty-3.1.13, created on 2013-06-29 14:47:47
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\pandora\cgu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2284051ced67bcdf4b6-20785535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4adc437381e4d25f80a7a7a6fd50c5e4d821c28f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\cgu.tpl',
      1 => 1372014170,
      2 => 'file',
    ),
    'f8321f75e5e61246f0fafbd596cfc8cff7027020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\pandora\\layout.tpl',
      1 => 1372510065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2284051ced67bcdf4b6-20785535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced67c1b9469_71874506',
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
<?php if ($_valid && !is_callable('content_51ced67c1b9469_71874506')) {function content_51ced67c1b9469_71874506($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=latin-1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Conditions générales d'utilisation</title>
		
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
				<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bottom_menu.png">
		</div>
	</div>
	<br>
</div>

<div id="corp">
<div id="title"><img class="ico" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/date.png">Conditions générales d'utilisation</div>
<div id="content">
<div id="top"></div>
<div id="text">

<div class="cadreText"><b><font color="red">En vous inscrivant et en jouant sur <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
, vous déclarez avoir lu et accepté la présente charte. Il vous est donc impossible
          de contester une sanction sous prétexte que vous ne l'avez pas lu, si les raisons de cette sanction sont inscrites ci dessous.</font></b>
          <br><br>
          <img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/livre.png" style="float: right;">

            Les membres de l'équipe sont des personnes bénévoles qui travaillent par envie pour le serveur, il est évident que vous leur devez le respect comme toute autre personne.
            <br>
            Toute marque d'impolitesse ou d'irrespect envers un des membres de l'équipe et/ou le serveur est <font color="red">sanctionnée</font>.
            <br>
            Toutes question destinée à un membre de l'équipe <b>sera correctement formulée ou ne trouvera pas de réponse</b>.
            <br>
            Il est <font color="red">interdit</font> de contacter les MJ inutilement pour leur demander une téléportation, des kamas, de l'équipement etc.
            <br>
            Les pseudonymes des personnages joueurs des membres de l'équipe sont confidentiels. Il est <font color="red">interdit</font> de les contacter sous ces pseudonymes ou de les divulguer.
          
          <br><br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/help.png"> Qui contacter et comment ?</legend>
          Avant de poster une requête sur le support, n'hésitez pas à demander de l'aide ou des renseignements auprès des autres joueurs, ainsi que sur le forum.
          Prenez bien soin d'être le plus clair possible dans votre requête. Si la requête est illisible, incompréhensible ou qu'elle concerne une question traitée de nombreuse fois
          sur le forum, <b>un MJ a parfaitement le droit de la supprimer sans la traiter</b>. Il en va de même pour les demandes qui ne se font pas par requête, tels que les rapports de bogues
          (à faire sur notre bugtracker), les demandes de sanctions ou les réclamations de sanctions (à faire sur le forum, dans les sections réservées a cela).<br>
          </fieldset>
			<br>
		  <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/money.png"> Transactions :</legend>
            Les échanges de comptes ne sont <b>pas cautionnés et déconseillés</b>. En cas d'arnaque vous en êtes le seul responsable, <b>en aucun cas l'équipe n'interviendra pour restituer le compte</b>.
            <br>
            La vente de compte ou items, kamas, etc... <b>contre des Starpass</b> est <font color="red">strictement interdite</font>, ainsi que toute autre transaction concernant les Starpass. Ceux ci ne sont ni revendables, ni échangeables.
            <br>
            Les transactions des comptes ou objets fictifs du jeu (items, kamas, etc...) <b>contre de l'argent réel</b> sont <font color="red">strictement interdites</font>.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Pseudonymes :</legend>
            Si vous avez un doute sur la conformité de votre pseudo il est préférable de le changer ou demander a un membre du staff ce qu'il en pense.
            <br>
            Tout pseudo en rapport avec la liste suivante est fortement déconseillé voir interdit, en cas de non respect de cette règle, nous nous réservons le droit de le modifier sans préavis :<br>
            &nbsp;&nbsp;- Se rapprochant de celui d'un membre de l'équipe du serveur.<br>
            &nbsp;&nbsp;- Susceptible de choquer les joueurs (tels que, sans s'y limiter, en rapport avec la vulgarité, tout caractère obscène, violent, à connotation sexuelle)<br>
            &nbsp;&nbsp;- Racisme / Ethnie<br>
            &nbsp;&nbsp;- Harcèlement ou diffamation<br>
            &nbsp;&nbsp;- Religions ou figure religieuse<br>
            &nbsp;&nbsp;- Politique ou figure politique<br>
            &nbsp;&nbsp;- Publicité
            <br>
            Toute <b>publicité</b> pour un autre serveur ou leur mention (pour faire l'éloge ou la diatribe) est <font color="red">interdite</font>. Dans le cas contraire vous risquez une suspension définitive de vôtre compte. Nous sommes sur <!--?php echo <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Serveur priver Dofus 1.29; ?-->, les autres serveurs ne nous concernent pas.
          
          <br><br>

            Il est <font color="red">interdit</font> <b>d'envoyer des messages privés à un MJ</b>, attendez que ce dernier vous contacte pour lui répondre.
            <br>
            Les maîtres de jeu ne <b>valident pas les quêtes non fonctionnelles</b>, sauf  à titre exceptionnel. Les rapports de bogues sont à faire sur le bugtracker.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/newspaper.png"> Charte en jeu :</legend>
            Toute utilisation de logiciels tiers est <font color="red">interdite</font> et <font color="red">sanctionnée par une suspension définitive du compte</font> sans possibilité de revenir sur cette sanction, ainsi que tout acte de complicité de triche.
            <br>
            Tout abus de bogue est <font color="red">sanctionné</font>. Tout équipement ou objet récupéré grâce à ce genre d'abus, <b>se verra immédiatement supprimé et le joueur sera sanctionné</b>.
            <br>
            La mendicité reste tolérée si celle-ci est discrète et sans harcèlement.
            <br>
            Le multi-compte (Utilisation de plusieurs comptes en même temps par une même personne) est <b>toléré</b> à condition qu'il ne soit pas utilisé à des fins malhonnêtes (Tel que, sans s'y limiter, provocation de l'alignement opposé, utilisation des deux comptes en même temps pour s'aider).
            <br>
            Le multi-boxing est <font color="red">interdit</font> au même titre que le multi-compte, il pourra être sanctionné de la même manière.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/set_security_question.png"> Guildes :</legend>
            Les guildes appartiennent à leur créateur, seul celui-ci peut décider de la passation de la guilde à un autre membre. Les MJ <b>n'interviendront donc pas en cas d'abandon</b> par le meneur de guilde (sauf en cas de suspension définitive du compte) et les investissements (maisons, enclos, ...) <b>ne seront pas rendus</b>.
            <br>
            Les meneurs de guilde sont entièrement responsables de leur guilde, ainsi ils ont la responsabilité de contrôler ce qui se passe au sein de leur guilde. Si l'une d'elle se révèle être le refuge d'actes allant à l'encontre de cette charte, <b>elle se verra dissoute sans préavis et les membres se verront lourdement sanctionnés</b>.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/comment.png"> Canaux de discussions :</legend>
            Tout langage autre que le français sur les canaux publiques (général, recrutement, commerce ...) est <font color="red">interdit</font>.
            <br>
            Toute exploitation abusive d'un canal de discutions publique (tel que, sans s'y limiter, insulte, diffamation ou flood) est <font color="red">interdite</font>.
            <br>
            Les messages entièrement en majuscules sur un canal de discussions sont peu recommandés car symbolisant la colère. A l'exception d'un usage Rp, ceux-là ne seront pas tolérés.
            <br>
            Chaque joueur mérite le respect sur le serveur. Ainsi, les <b>injures</b> envers un joueur sont <font color="red">interdites</font>. Les insultes graves (tel que, sans s'y limiter, le racisme, l'homophobie) sont <b>sanctionnées plus lourdement</b>.
            <br>
            Un MJ sait ce qu'il a à faire. Les joueurs n'ont pas à leur dicter quoi que ce soit. Les refléxions tels que "MJ go support" lorsqu'un MJ fait son apparition en public ne sont donc pas tolérées.
            <br>
            <font color="red">Les messages demandant l'aide d'un MJ sur les canaux publics ainsi que les messages privés envoyés à répétition à un MJ sont interdits</font>. Il est donc fortement déconseillé de flooder le canal lorsqu'un membre de l'équipe y fait son apparition.
            <br>
            Est considéré comme flood, un message lancé plus de deux fois par minutes sur un canal public. Est également considéré comme tel la relance d'un MJ sur un canal de discussions ou en message privé ainsi que toute utilisation de macro de dessins.
          </fieldset>
			<br>
		  <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/ip.png"> Sanctions :</legend>
            Chacun est <b>entièrement responsable de son compte</b>. En cas de sanction de celui ci, toutes explications telle que "ce n'est pas moi mais un autre" ne permettront pas de la lever.
            <br>
            Comme explicité plus haut, <b>les starpass ne sont ni échangeables, ni remboursable</b>, même après sanction du compte.
            <br>
            Toute sanction en jeu <b>peut être répercutée sur le forum</b> et inversement.
            <br>
            Les sanction encourues varient en fonction de la gravité de l'acte et de la récidive.
            <br>
            Les supsensions définitives s'appliquent <b>également à l'adresse IP</b>.
            <br>
            Les preuves (tel que les screenshots) falsifiées engenderont <b>une suspension définitive (forum + jeu) du compte</b> ayant déposé la plainte.
            <br>
            Tout comportement contraire à l'éthique de <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 pourra être sanctionnée par l'équipe sans avertissement préalable.
          </fieldset>
		<br></div>

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
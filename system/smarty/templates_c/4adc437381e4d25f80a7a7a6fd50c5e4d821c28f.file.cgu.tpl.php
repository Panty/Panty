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
 - Conditions g�n�rales d'utilisation</title>
		
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
				<img class="ex" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/bottom_menu.png">
		</div>
	</div>
	<br>
</div>

<div id="corp">
<div id="title"><img class="ico" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/date.png">Conditions g�n�rales d'utilisation</div>
<div id="content">
<div id="top"></div>
<div id="text">

<div class="cadreText"><b><font color="red">En vous inscrivant et en jouant sur <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
, vous d�clarez avoir lu et accept� la pr�sente charte. Il vous est donc impossible
          de contester une sanction sous pr�texte que vous ne l'avez pas lu, si les raisons de cette sanction sont inscrites ci dessous.</font></b>
          <br><br>
          <img src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS']->value;?>
images/livre.png" style="float: right;">

            Les membres de l'�quipe sont des personnes b�n�voles qui travaillent par envie pour le serveur, il est �vident que vous leur devez le respect comme toute autre personne.
            <br>
            Toute marque d'impolitesse ou d'irrespect envers un des membres de l'�quipe et/ou le serveur est <font color="red">sanctionn�e</font>.
            <br>
            Toutes question destin�e � un membre de l'�quipe <b>sera correctement formul�e ou ne trouvera pas de r�ponse</b>.
            <br>
            Il est <font color="red">interdit</font> de contacter les MJ inutilement pour leur demander une t�l�portation, des kamas, de l'�quipement etc.
            <br>
            Les pseudonymes des personnages joueurs des membres de l'�quipe sont confidentiels. Il est <font color="red">interdit</font> de les contacter sous ces pseudonymes ou de les divulguer.
          
          <br><br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/help.png"> Qui contacter et comment ?</legend>
          Avant de poster une requ�te sur le support, n'h�sitez pas � demander de l'aide ou des renseignements aupr�s des autres joueurs, ainsi que sur le forum.
          Prenez bien soin d'�tre le plus clair possible dans votre requ�te. Si la requ�te est illisible, incompr�hensible ou qu'elle concerne une question trait�e de nombreuse fois
          sur le forum, <b>un MJ a parfaitement le droit de la supprimer sans la traiter</b>. Il en va de m�me pour les demandes qui ne se font pas par requ�te, tels que les rapports de bogues
          (� faire sur notre bugtracker), les demandes de sanctions ou les r�clamations de sanctions (� faire sur le forum, dans les sections r�serv�es a cela).<br>
          </fieldset>
			<br>
		  <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/money.png"> Transactions :</legend>
            Les �changes de comptes ne sont <b>pas cautionn�s et d�conseill�s</b>. En cas d'arnaque vous en �tes le seul responsable, <b>en aucun cas l'�quipe n'interviendra pour restituer le compte</b>.
            <br>
            La vente de compte ou items, kamas, etc... <b>contre des Starpass</b> est <font color="red">strictement interdite</font>, ainsi que toute autre transaction concernant les Starpass. Ceux ci ne sont ni revendables, ni �changeables.
            <br>
            Les transactions des comptes ou objets fictifs du jeu (items, kamas, etc...) <b>contre de l'argent r�el</b> sont <font color="red">strictement interdites</font>.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/user.png"> Pseudonymes :</legend>
            Si vous avez un doute sur la conformit� de votre pseudo il est pr�f�rable de le changer ou demander a un membre du staff ce qu'il en pense.
            <br>
            Tout pseudo en rapport avec la liste suivante est fortement d�conseill� voir interdit, en cas de non respect de cette r�gle, nous nous r�servons le droit de le modifier sans pr�avis :<br>
            &nbsp;&nbsp;- Se rapprochant de celui d'un membre de l'�quipe du serveur.<br>
            &nbsp;&nbsp;- Susceptible de choquer les joueurs (tels que, sans s'y limiter, en rapport avec la vulgarit�, tout caract�re obsc�ne, violent, � connotation sexuelle)<br>
            &nbsp;&nbsp;- Racisme / Ethnie<br>
            &nbsp;&nbsp;- Harc�lement ou diffamation<br>
            &nbsp;&nbsp;- Religions ou figure religieuse<br>
            &nbsp;&nbsp;- Politique ou figure politique<br>
            &nbsp;&nbsp;- Publicit�
            <br>
            Toute <b>publicit�</b> pour un autre serveur ou leur mention (pour faire l'�loge ou la diatribe) est <font color="red">interdite</font>. Dans le cas contraire vous risquez une suspension d�finitive de v�tre compte. Nous sommes sur <!--?php echo <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Serveur priver Dofus 1.29; ?-->, les autres serveurs ne nous concernent pas.
          
          <br><br>

            Il est <font color="red">interdit</font> <b>d'envoyer des messages priv�s � un MJ</b>, attendez que ce dernier vous contacte pour lui r�pondre.
            <br>
            Les ma�tres de jeu ne <b>valident pas les qu�tes non fonctionnelles</b>, sauf  � titre exceptionnel. Les rapports de bogues sont � faire sur le bugtracker.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/newspaper.png"> Charte en jeu :</legend>
            Toute utilisation de logiciels tiers est <font color="red">interdite</font> et <font color="red">sanctionn�e par une suspension d�finitive du compte</font> sans possibilit� de revenir sur cette sanction, ainsi que tout acte de complicit� de triche.
            <br>
            Tout abus de bogue est <font color="red">sanctionn�</font>. Tout �quipement ou objet r�cup�r� gr�ce � ce genre d'abus, <b>se verra imm�diatement supprim� et le joueur sera sanctionn�</b>.
            <br>
            La mendicit� reste tol�r�e si celle-ci est discr�te et sans harc�lement.
            <br>
            Le multi-compte (Utilisation de plusieurs comptes en m�me temps par une m�me personne) est <b>tol�r�</b> � condition qu'il ne soit pas utilis� � des fins malhonn�tes (Tel que, sans s'y limiter, provocation de l'alignement oppos�, utilisation des deux comptes en m�me temps pour s'aider).
            <br>
            Le multi-boxing est <font color="red">interdit</font> au m�me titre que le multi-compte, il pourra �tre sanctionn� de la m�me mani�re.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/set_security_question.png"> Guildes :</legend>
            Les guildes appartiennent � leur cr�ateur, seul celui-ci peut d�cider de la passation de la guilde � un autre membre. Les MJ <b>n'interviendront donc pas en cas d'abandon</b> par le meneur de guilde (sauf en cas de suspension d�finitive du compte) et les investissements (maisons, enclos, ...) <b>ne seront pas rendus</b>.
            <br>
            Les meneurs de guilde sont enti�rement responsables de leur guilde, ainsi ils ont la responsabilit� de contr�ler ce qui se passe au sein de leur guilde. Si l'une d'elle se r�v�le �tre le refuge d'actes allant � l'encontre de cette charte, <b>elle se verra dissoute sans pr�avis et les membres se verront lourdement sanctionn�s</b>.
          </fieldset>
			<br>
          <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/comment.png"> Canaux de discussions :</legend>
            Tout langage autre que le fran�ais sur les canaux publiques (g�n�ral, recrutement, commerce ...) est <font color="red">interdit</font>.
            <br>
            Toute exploitation abusive d'un canal de discutions publique (tel que, sans s'y limiter, insulte, diffamation ou flood) est <font color="red">interdite</font>.
            <br>
            Les messages enti�rement en majuscules sur un canal de discussions sont peu recommand�s car symbolisant la col�re. A l'exception d'un usage Rp, ceux-l� ne seront pas tol�r�s.
            <br>
            Chaque joueur m�rite le respect sur le serveur. Ainsi, les <b>injures</b> envers un joueur sont <font color="red">interdites</font>. Les insultes graves (tel que, sans s'y limiter, le racisme, l'homophobie) sont <b>sanctionn�es plus lourdement</b>.
            <br>
            Un MJ sait ce qu'il a � faire. Les joueurs n'ont pas � leur dicter quoi que ce soit. Les refl�xions tels que "MJ go support" lorsqu'un MJ fait son apparition en public ne sont donc pas tol�r�es.
            <br>
            <font color="red">Les messages demandant l'aide d'un MJ sur les canaux publics ainsi que les messages priv�s envoy�s � r�p�tition � un MJ sont interdits</font>. Il est donc fortement d�conseill� de flooder le canal lorsqu'un membre de l'�quipe y fait son apparition.
            <br>
            Est consid�r� comme flood, un message lanc� plus de deux fois par minutes sur un canal public. Est �galement consid�r� comme tel la relance d'un MJ sur un canal de discussions ou en message priv� ainsi que toute utilisation de macro de dessins.
          </fieldset>
			<br>
		  <fieldset><legend><img class="icon_text" src="<?php echo $_smarty_tpl->tpl_vars['URL_ASSETS_GLOBAL']->value;?>
devtool/ip.png"> Sanctions :</legend>
            Chacun est <b>enti�rement responsable de son compte</b>. En cas de sanction de celui ci, toutes explications telle que "ce n'est pas moi mais un autre" ne permettront pas de la lever.
            <br>
            Comme explicit� plus haut, <b>les starpass ne sont ni �changeables, ni remboursable</b>, m�me apr�s sanction du compte.
            <br>
            Toute sanction en jeu <b>peut �tre r�percut�e sur le forum</b> et inversement.
            <br>
            Les sanction encourues varient en fonction de la gravit� de l'acte et de la r�cidive.
            <br>
            Les supsensions d�finitives s'appliquent <b>�galement � l'adresse IP</b>.
            <br>
            Les preuves (tel que les screenshots) falsifi�es engenderont <b>une suspension d�finitive (forum + jeu) du compte</b> ayant d�pos� la plainte.
            <br>
            Tout comportement contraire � l'�thique de <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 pourra �tre sanctionn�e par l'�quipe sans avertissement pr�alable.
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
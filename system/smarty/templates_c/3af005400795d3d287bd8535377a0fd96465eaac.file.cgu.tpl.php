<?php /* Smarty version Smarty-3.1.13, created on 2013-07-06 05:47:14
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\paradize\cgu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221151ced78bada5a4-13770266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af005400795d3d287bd8535377a0fd96465eaac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\paradize\\cgu.tpl',
      1 => 1372014169,
      2 => 'file',
    ),
    '9c94ac3c618343facfc87d0a3250cf25e0fd41f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\paradize\\layout.tpl',
      1 => 1373082426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221151ced78bada5a4-13770266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ced78beff8c6_36239721',
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
<?php if ($_valid && !is_callable('content_51ced78beff8c6_36239721')) {function content_51ced78beff8c6_36239721($_smarty_tpl) {?><!-- Form site -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
	
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Conditions générales d'utilisation</title>
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
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/play"><li>Nous rejoindre</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/user/register"><li>Inscription</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BOARD_URL']->value;?>
"><li>Forum</li></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php/server/ladder"><li>Ladder</li></a>
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
			<span><b>&nbsp;&nbsp;&nbsp;Conditions générales d'utilisation</b></span>
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
</body>

</html>
<?php }} ?>
<?php
/***
 * Panty - Change the design like you change your panty !
 * Copyright Kirito 2013-2014
 * Fichier de configuration
 * Contact : Skillet.Seven (Skype)
 * Made with TinyMVC (Fait avec TinyMVC, pour ceux qui savent pas lire l'anglais !)
 ***/
 
/* 
En cas de probl�me de configuration, vous pouvez poster un topic d'aide sur le forum Aidemu.fr.
Attention � bien rentrer les IDD et les IDP starpass !
N'h�sitez pas � consulter le topic principal sur Aidemu pour �tre au courrant des mises � jour !
Bonne utilisation, 
Noisia/Kirito.
*/

define('TITLE', 'Panty'); // Titre du site

define('DB_HOST', '127.0.0.1'); // Adresse de la DB
define('DB_NAME', 'tinymvc'); // Nom de la DB
define('DB_USER', 'root'); // User de la DB
define('DB_PASSWORD', ''); // Mot de passe de la DB

if (!defined('TMVC_URL'))
	define('TMVC_URL', 'http://localhost/Panty/'); // URL du CMS
	
define('SHOP_TOKENS', 10); // Nombre de points gagn�s pour un code audio
define('VOTE_TOKENS', 2); // Nombre de points gagn�s pour un vote

define('VOTE_URL', 'http://localhost/Panty/index.php'); // URL de vote
define('BOARD_URL', 'http://localhost/Panty/index.php'); // URL de votre forum
define('DOFUS_URL', 'http://localhost/Panty/index.php'); // URL de votre forum
define('LAUNCHER_URL', 'http://localhost/Panty/index.php'); // URL de votre forum

define('IDP', 17013); // IDP starpass
define('IDD', 153985); // IDD starpass

if (!defined('PANTY_THEME'))
	define('PANTY_THEME', 'ragefull'); // Th�me du CMS
Panty
=====

CMS Dofus développé avec TinyMVC couplé au moteur de template Smarty, afin de permettre une gestion multi-thèmes.

INSTALLATION 
=====
1) Téléchargez l'archive de Panty en cliquant sur le bouton "Download ZIP" à droite de votre écran.<br />
2) Dézippez le contenu de l'archive dans le dossier de votre choix, à l'intérieur du dossier "www" pour Wamp, ou à l'intérieur du dossier "htdocs" pour Xampp.<br />
3) Rendez-vous dans le dossier system -> panty -> configs, éditez le fichier "Panty.php" avec un éditeur de texte avec les informations correspondantes.<br />
4) Exécutez le fichier "sql_full.sql" sur votre base de données. ATTENTION : Le SQL supprime le contenu des tables "accounts" et "item_template" !<br />
5) Rendez vous à l'adresse du CMS, et tout devrait fonctionner !

TYPE DE NEWS
=====
Pour le moment, aucun panel d'administration n'est disponible afin de vous permettre l'édition des news. Tout se passe donc via base de données.<br />
La mise en page des news est effectuée via les balise HTML. Cependant, si il y a une chose que vous ne pouvez pas deviner, c'est les types de news. Les voici :<br />
0 - Global<br />
1 - Maintenance<br />
2 - Bug/Résolution de bug<br />
3 - Développement (mise à jour de l'émulateur...)<br />
4 - Boutique/Promotions<br />
5 - Cadeau/Bonus/Events

FAQ
=====

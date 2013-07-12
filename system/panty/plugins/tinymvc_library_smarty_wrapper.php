<?php
/**
 * Library Smarty
 * Contient les éléments nécessaires au fonctionnement de Smarty
 * @package		Panty
 */
define('SMARTY_SPL_AUTOLOAD', 1);
require(TMVC_BASEDIR . '/smarty/Smarty.class.php');
class TinyMVC_Library_Smarty_Wrapper Extends Smarty {
	function __construct() {
		parent::__construct();
		$this->setTemplateDir(TMVC_BASEDIR . '/smarty/templates/');
		$this->setCompileDir(TMVC_BASEDIR . '/smarty/templates_c/');
		$this->setConfigDir(TMVC_BASEDIR . '/smarty/configs/');
		$this->setCacheDir(TMVC_BASEDIR . '/smarty/cache/');
		$this->smarty->assign('URL_ASSETS', TMVC_ASSDIR . PANTY_THEME . '/');
		$this->smarty->assign('URL_ASSETS_GLOBAL', TMVC_ASSDIR . 'global/');
		$this->smarty->assign('THEME', PANTY_THEME);
		$this->smarty->assign('URL', TMVC_URL);
		$this->smarty->assign('BOARD_URL', BOARD_URL);
		$this->smarty->assign('DOFUS_URL', DOFUS_URL);
		$this->smarty->assign('LAUNCHER_URL', LAUNCHER_URL);
		$this->smarty->assign('TITLE', TITLE);
		$this->smarty->assign('IDD', IDD);
	}
}
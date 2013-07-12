<?php
/**
 * server.php
 *
 * Page concernant les actions dirigé serveur
 * Ex : Règlement, Nous rejoindre, etc...
 *
 * @package		Panty
 * @author		Kirito
 */
class Server_Controller extends TinyMVC_Controller {
	function story() {
		$this->smarty->display(PANTY_THEME . '/story.tpl');
	}
	function staff() {
		$this->load->model('Server_Model', 'server');
		$array_staff = $this->server->get_staff();
		$this->smarty->assign('array_staff', $array_staff);
		$this->smarty->display(PANTY_THEME . '/staff.tpl');
	}
	function cgu() {
		$this->smarty->display(PANTY_THEME . '/cgu.tpl');
	}
	function play() {
		$this->smarty->display(PANTY_THEME . '/play.tpl');
	}
	function ladder() {
		$this->load->model('Server_Model', 'server');
		$array_perso = $this->server->get_top();
		$this->smarty->assign('array_perso', $array_perso);
		$this->smarty->display(PANTY_THEME . '/ladder.tpl');
	}
}
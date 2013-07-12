<?php
/**
 * shop.php
 *
 * Page concernant les actions dirigé boutique
 * Ex : Gestion des catégories, affichage et achat d'item
 *
 * @package		Panty
 * @author		Kirito
 */
class Shop_Controller extends TinyMVC_Controller {
	function cat() {
		if (!isset($_SESSION['logged'])) {
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		$this->load->library('uri');
		$this->load->model('Shop_Model', 'shop');
		$id = (int) $this->uri->segment(4);
		switch ($id) {
			case 1:
				$cat = '=16';
				break;
			case 2;
				$cat = '=17';
				break;
			case 3:
				$cat = '=1';
				break;
			case 4:
				$cat = '=9';
				break;
			case 5:
				$cat = '=10';
				break;
			case 6:
				$cat = '=11';
				break;
			case 7:
				$cat = '>=2 and type<=8';
				break;
			case 8:
				$cat = '=82';
				break;
			case 9:
				$cat = '>17';
				break;
			default:
				$cat = '=16';
				break;
		} //$id
		$items = $this->shop->get_items($cat);
		$this->smarty->assign('items', $items);
		$this->smarty->display(PANTY_THEME . '/shop.tpl');
	}
	function item() {
		if (!isset($_SESSION['logged'])) {
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		$this->load->library('uri');
		$this->load->model('Shop_Model', 'shop');
		$id   = (int) $this->uri->segment(4);
		$item = $this->shop->get_item($id);
		if ($item['publier'] == 1) {
			if ($item['sold'] <= $_SESSION['tokens']) {
				$acc_id = $_SESSION['id'];
				if (isset($_POST['character'])) {
					$char_id = htmlentities($_POST['character']);
					unset($_SESSION['tokens']);
					$_SESSION['tokens'] = $this->shop->buy_item($acc_id, $id, $item['sold'], $char_id);
					$this->smarty->assign('success', 'success');
				} //isset($_POST['character'])
				if ($item['panoplie'] != '-1') {
					$panoid        = (int) $item['panoplie'];
					$panoplie_name = $this->shop->get_panoplie_name($panoid);
					$this->smarty->assign('panoplie_name', $panoplie_name);
				} //$item['panoplie'] != '-1'
				$this->load->model('User_Model', 'character');
				$characters = $this->character->get_account_characters($acc_id);
				$this->smarty->assign('character', $characters);
				$this->smarty->assign('item', $item);
				$this->smarty->assign('item_stats', $this->shop->statsitem($item['statsTemplate'], FALSE, 'oui', 'oui'));
				$this->smarty->display(PANTY_THEME . '/shop_confirm.tpl');
			} //$item['sold'] <= $_SESSION['tokens']
			else {
				$dat = array(
					"title" => "Achat impossible",
					"content" => "Vous n'avez pas assez de points pour acheter cet item !"
				);
				$this->smarty->assign($dat);
				$this->smarty->display(PANTY_THEME . '/message.tpl');
			}
		} //$item['publier'] == 1
		else {
			$dat = array(
				"title" => "Achat impossible",
				"content" => "L'objet n'est pas disponible en boutique !"
			);
			$this->smarty->assign($dat);
			$this->smarty->display(PANTY_THEME . '/message.tpl');
		}
	}
}
<?php
/**
 * shop_model.php
 *
 * Page intégrant les requêtes niveau boutique
 * Big-up à BlackStar, que je connais pas, mais qui m'a permit d'avoir les stats des items via boutique
 * Merci de m'avoir donné le goût à l'émulation  d(^o^)b !
 *
 * @package		Panty
 * @author		Kirito
 */
class Shop_Model extends TinyMVC_Model {
	// Merci à BlackStar pour la fonction statsitem !
	function statsitem($stats, $player, $color = 'non', $max = 'non') {
		$statstexte   = array(
			'b6' => array(
				'Creatures invocables',
				'defaut'
			),
			'b2' => array(
				'Soins',
				'rose'
			),
			'6f' => array(
				'PA',
				'pa'
			),
			'75' => array(
				'PO',
				'po'
			),
			'80' => array(
				'PM',
				'defaut'
			),
			'd6' => array(
				'% Resistances neutre',
				'rneutre'
			),
			'd2' => array(
				'% Resistances terre',
				'rterre'
			),
			'd3' => array(
				'% Resistances eau',
				'reau'
			),
			'd4' => array(
				'% Resistances air',
				'rair'
			),
			'd5' => array(
				'% Resistances feu',
				'rfeu'
			),
			'f4' => array(
				'Resistances neutre',
				'rneutre'
			),
			'f0' => array(
				'Resistances terre',
				'rterre'
			),
			'f1' => array(
				'Resistances eau',
				'reau'
			),
			'f2' => array(
				'Resistances air',
				'rair'
			),
			'f3' => array(
				'Resistances feu',
				'rfeu'
			),
			'25f' => array(
				'Point de stats (force)',
				'terre'
			),
			//Degats
			'62' => array(
				'(air)',
				'air'
			),
			'61' => array(
				'(terre)',
				'terre'
			),
			'63' => array(
				'(feu)',
				'feu'
			),
			'60' => array(
				'(eau)',
				'eau'
			),
			'64' => array(
				'(neutre)',
				'neutre'
			),
			'70' => array(
				'Dommages',
				'do'
			),
			'79' => array(
				'Dommages',
				'do'
			),
			'8a' => array(
				'% dommages',
				'do'
			),
			'73' => array(
				'Coups Critiques',
				'cc'
			),
			'7a' => array(
				'Echecs Critiques',
				'cc'
			),
			'76' => array(
				'Force',
				'terre'
			),
			'77' => array(
				'Agilite',
				'air'
			),
			'7c' => array(
				'Sagesse',
				'sagesse'
			),
			'7e' => array(
				'Intelligence',
				'feu'
			),
			'7b' => array(
				'Chance',
				'eau'
			),
			'7d' => array(
				'Vitalite',
				'vie'
			),
			'ae' => array(
				'Initiatives',
				'sagesse'
			),
			'b0' => array(
				'Prospections',
				'pp'
			),
			'e1' => array(
				'Dommages pieges',
				'do'
			),
			'e2' => array(
				'% dommages pieges',
				'do'
			),
			//Vole de vie
			'5b' => array(
				'(eau)',
				'eau'
			),
			'5c' => array(
				'(terre)',
				'terre'
			),
			'5d' => array(
				'(air)',
				'air'
			),
			'5e' => array(
				'(feu)',
				'feu'
			),
			'5f' => array(
				'(neutre)',
				'neutre'
			),
			//Vol de kamas
			'82' => array(
				'',
				'defaut'
			),
			'6e' => array(
				'Vie',
				'vie'
			),
			//Resistance ethere
			'32c' => array(
				'',
				'defaut'
			),
			'320' => array(
				'Pods',
				'defaut'
			),
			'9e' => array(
				'Pods',
				'defaut'
			),
			//Resistance pvp
			'fa' => array(
				'% resistances terre PVP',
				'rterre'
			),
			'fb' => array(
				'% resistances eau PVP',
				'reau'
			),
			'fc' => array(
				'% resistances air PVP',
				'rair'
			),
			'fd' => array(
				'% resistances feu PVP',
				'rfeu'
			),
			'fe' => array(
				'% resistances neutre PVP',
				'rneutre'
			),
			'104' => array(
				'resistances terre PVP',
				'rterre'
			),
			'105' => array(
				'resistances eau PVP',
				'reau'
			),
			'106' => array(
				'resistances air PVP',
				'rair'
			),
			'107' => array(
				'resistances feu PVP',
				'rfeu'
			),
			'108' => array(
				'resistances neutre PVP',
				'rneutre'
			),
			//MALUS
			'db' => array(
				'% Resistances neutre',
				'rneutre'
			),
			'd7' => array(
				'% Resistances terre',
				'rterre'
			),
			'd8' => array(
				'% Resistances eau',
				'reau'
			),
			'd9' => array(
				'% Resistances air',
				'rair'
			),
			'da' => array(
				'% Resistances feu',
				'rfeu'
			),
			'65' => array(
				'PA a la cible',
				'feu'
			),
			'99' => array(
				'Vitalite',
				'feu'
			),
			'af' => array(
				'Initiatives',
				'sagesse'
			),
			'9c' => array(
				'Sagesse',
				'sagesse'
			),
			'74' => array(
				'PO',
				'po'
			),
			'98' => array(
				'Chance',
				'eau'
			),
			'9d' => array(
				'Force',
				'terre'
			),
			'9b' => array(
				'Intelligence',
				'feu'
			),
			'7f' => array(
				'PM',
				'feu'
			),
			'9a' => array(
				'Agilite',
				'air'
			)
		);
		$couleurstats = array(
			'defaut' 	=> '5d5541',
			'pp' 		=> '3e9795',
			'pa' 		=> 'e17400',
			'do' 		=> '0d4e27',
			'po' 		=> '396c68',
			'vie' 		=> 'E8001F',
			'cc'		=> '9d391a',
			'rose'		=> 'ff8d8d',
			'sagesse' 	=> '700b86',
			'neutre' 	=> '000000',
			'rneutre'	=> '000000',
			'feu' 		=> 'ff0000',
			'rfeu' 		=> 'ff0000',
			'terre' 	=> '9d6617',
			'rterre' 	=> '9d6617',
			'air' 		=> '009933',
			'rair' 		=> '009933',
			'eau' 		=> '127fc4',
			'reau' 		=> '127fc4'
		);
		$statsclear   = '';
		$dommage      = '';
		$statsexplode = explode(',', $stats);
		$count        = count($statsexplode);
		for ($i = 0; $i < $count; $i++) {
			$statshexa = explode('#', $statsexplode[$i]);
			$signe     = ($statshexa[0] == '65' OR $statshexa[0] == '99' OR $statshexa[0] == 'af' OR $statshexa[0] == '9c' OR $statshexa[0] == '74' OR $statshexa[0] == '98' OR $statshexa[0] == '9d' OR $statshexa[0] == '9b' OR $statshexa[0] == '7f' OR $statshexa[0] == '9a' OR $statshexa[0] == 'db' OR $statshexa[0] == 'd7' OR $statshexa[0] == 'd8' OR $statshexa[0] == 'd9' OR $statshexa[0] == 'da') ? '<span style="color:#' . $couleurstats['feu'] . '">-</span>' : '+';
			$signe     = ($statshexa[0] == '60' OR $statshexa[0] == '61' OR $statshexa[0] == '62' OR $statshexa[0] == '63' OR $statshexa[0] == '64') ? 'Dommages :' : $signe;
			$signe     = ($statshexa[0] == '5b' OR $statshexa[0] == '5c' OR $statshexa[0] == '5d' OR $statshexa[0] == '5e' OR $statshexa[0] == '5d') ? 'Vole de vie :' : $signe;
			$signe     = ($statshexa[0] == '82') ? 'Vole de kamas :' : $signe;
			$signe     = ($statshexa[0] == '32c') ? 'Résistance de l\'arme :' : $signe;
			if ($color == 'oui') {
				$coloravant = '<img src="' . TMVC_ASSDIR . 'global/ico/' . $statstexte[$statshexa[0]][1] . '.png" style="float:left;" width=16 height=16></img>  <span style="color:#' . $couleurstats[$statstexte[$statshexa[0]][1]] . ';">  ';
				$colorapres = '</span>';
			} //$color == 'oui'
			else {
				$coloravant = '';
				$colorapres = '';
			}
			if ($player == FALSE) {
				$de     = explode('+', $statshexa[4]);
				$nbde   = explode('d', $de[0]);
				$jetmax = '';
				for ($iii = 0; $iii < $nbde[0]; $iii++) {
					$jetmax += rand(1, $nbde[1]);
				} //$iii = 0; $iii < $nbde[0]; $iii++
				$jetmax += $de[1];
				$jetmini = $de[1] + $nbde[0];
				if (hexdec($statshexa[2]) == 0) {
					if ($statshexa[0] != '32c') {
						$statsclear .= $coloravant . '<strong>' . $signe . ' ' . $jetmini . '</strong>';
						$statsclear .= ' ';
						$statsclear .= $statstexte[$statshexa[0]][0] . $colorapres;
						$statsclear .= '<br />';
					} //$statshexa[0] != '32c'
				} //hexdec($statshexa[2]) == 0
				else {
					if ($max == 'oui' AND $statshexa[0] != '5b' AND $statshexa[0] != '5c' AND $statshexa[0] != '5d' AND $statshexa[0] != '5e' AND $statshexa[0] != '5f' AND $statshexa[0] != '82' AND $statshexa[0] != '6e' AND $statshexa[0] != '62' AND $statshexa[0] != '61' AND $statshexa[0] != '60' AND $statshexa[0] != '64' AND $statshexa[0] != '63') {
						$dommage .= $coloravant . '<strong>' . $signe . ' ' . hexdec($statshexa[2]) . '</strong>';
					} //$max == 'oui' AND $statshexa[0] != '5b' AND $statshexa[0] != '5c' AND $statshexa[0] != '5d' AND $statshexa[0] != '5e' AND $statshexa[0] != '5f' AND $statshexa[0] != '82' AND $statshexa[0] != '6e' AND $statshexa[0] != '62' AND $statshexa[0] != '61' AND $statshexa[0] != '60' AND $statshexa[0] != '64' AND $statshexa[0] != '63'
					else {
						$dommage .= $coloravant . '<strong>' . $signe . $jetmini . '</strong> à <strong>' . hexdec($statshexa[2]) . '</strong>';
					}
					$dommage .= ' ';
					$dommage .= $statstexte[$statshexa[0]][0] . $colorapres;
					$dommage .= '<br />';
				}
			} //$player == FALSE
			else {
				if ($statshexa[0] == '5b' OR $statshexa[0] == '5c' OR $statshexa[0] == '5d' OR $statshexa[0] == '5e' OR $statshexa[0] == '5f' OR $statshexa[0] == '60' OR $statshexa[0] == '61' OR $statshexa[0] == '62' OR $statshexa[0] == '63' OR $statshexa[0] == '64') {
					$de     = explode('+', $statshexa[4]);
					$nbde   = explode('d', $de[0]);
					$jetmax = '';
					for ($iii = 0; $iii < $nbde[0]; $iii++) {
						$jetmax += rand(1, $nbde[1]);
					} //$iii = 0; $iii < $nbde[0]; $iii++
					$jetmax += $de[1];
					$jetmini = $de[1] + $nbde[0];
					$dommage .= $coloravant . '<strong>' . $signe . $jetmini . '</strong> à <strong>' . hexdec($statshexa[2]) . '</strong>';
					$dommage .= ' ';
					$dommage .= $statstexte[$statshexa[0]][0] . $colorapres;
					$dommage .= '<br />';
				} //$statshexa[0] == '5b' OR $statshexa[0] == '5c' OR $statshexa[0] == '5d' OR $statshexa[0] == '5e' OR $statshexa[0] == '5f' OR $statshexa[0] == '60' OR $statshexa[0] == '61' OR $statshexa[0] == '62' OR $statshexa[0] == '63' OR $statshexa[0] == '64'
				else {
					$statsclear .= $coloravant . '<strong>' . $signe . ' ' . hexdec($statshexa[2]) . '</strong>';
					$statsclear .= ' ';
					$statsclear .= $statstexte[$statshexa[0]][0] . $colorapres;
					$statsclear .= '<br />';
				}
			}
		} //$i = 0; $i < $count; $i++
		return $dommage . $statsclear;
	}
	function get_items($cat) {
		$this->db->query('select * from item_template where type' . $cat . ' and publier=1');
		$array_shop = array();
		$i          = 0;
		while ($row = $this->db->next()) {
			$array_shop[$i]['id']    = $row['id'];
			$array_shop[$i]['name']  = htmlentities($row['name'], ENT_QUOTES, "UTF-8");
			$array_shop[$i]['level'] = $row['level'];
			$array_shop[$i]['pods']  = $row['pod'];
			$array_shop[$i]['sold']  = $row['sold'];
			if ($row['panoplie'] != '-1') {
				$array_shop[$i]['panoplie'] = self::get_panoplie_name($row['panoplie']);
			} //$row['panoplie'] != '-1'
			else {
				$array_shop[$i]['panoplie'] = $row['panoplie'];
			}
			$array_shop[$i]['stats'] = self::statsitem($row['statsTemplate'], FALSE, 'oui', 'oui');
			$i++;
		} //$row = $this->db->next()
		return $array_shop;
	}
	function get_item($id) {
		return $this->db->query_one('select * from item_template where id=?', array(
			$id
		));
	}
	function get_panoplie_name($id) {
		ini_set("display_errors", 0);
		error_reporting(0);
		$name = $this->db->query_one('select * from itemsets where ID=?', array(
			$id
		));
		return $name['name'];
	}
	function buy_item($acc_id, $id, $price, $char_id) {
		$datas  = $this->db->query_one('select * from accounts where guid=?', array(
			$acc_id
		));
		$tokens = $datas['points'] - $price;
		$this->db->where('guid', $acc_id);
		$this->db->update('accounts', array(
			'points' => $tokens
		));
		$this->db->insert('live_action', array(
			'PlayerID' => $char_id,
			'Action' => 21,
			'Nombre' => $id
		));
		return $tokens;
	}
}
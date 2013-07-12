<?php
/**
 * server_model.php
 *
 * Page int�grant les requ�tes niveau serveur
 *
 * @package		Panty
 * @author		Kirito
 */
class Server_Model extends TinyMVC_Model
{
	function get_top()
	{
		$array_perso = array();
		$this->db->query('select * from personnages ORDER BY xp DESC LIMIT 0,50');
		$alignement = array(
			0 => '0',
			1 => '1',
			2 => '2',
			3 => '3'
		);
		$sexe       = array(
			0 => 'm',
			1 => 'f'
		);
		$classe     = array(
			1 => 'feca',
			2 => 'osa',
			3 => 'enu',
			4 => 'sram',
			5 => 'xel',
			6 => 'eca',
			7 => 'eni',
			8 => 'iop',
			9 => 'cra',
			10 => 'sadi',
			11 => 'sacri',
			12 => 'pand'
		);
		$i          = 1;
		while ($row = $this->db->next())
		{
			$array_perso[$i]['pos']        = $i;
			$array_perso[$i]['name']       = $row['name'];
			$array_perso[$i]['level']      = $row['level'];
			$array_perso[$i]['sexe']       = $sexe[$row['sexe']];
			$array_perso[$i]['class']      = $classe[$row['class']];
			$array_perso[$i]['alignement'] = $alignement[$row['alignement']];
			$array_perso[$i]['honor']      = $row['honor'];
			$array_perso[$i]['xp']         = $row['xp'];
			$i++;
		} //$row = $this->db->next()
		return $array_perso;
	}
	function get_top3()
	{
		$this->db->query('select * from personnages ORDER BY xp DESC LIMIT 0,3');
		$array_perso = array();
		$i           = 1;
		while ($row = $this->db->next())
		{
			$array_perso[$i]['pos']   = $i;
			$array_perso[$i]['name']  = $row['name'];
			$array_perso[$i]['level'] = $row['level'];
			$i++;
		} //$row = $this->db->next()
		return $array_perso;
	}
	function get_logged()
	{
		$query = $this->db->query_all('select * from accounts where logged=?', array(
			'1'
		));
		return $this->db->num_rows();
	}
	function get_accounts()
	{
		$query = $this->db->query_all('select * from accounts');
		return $this->db->num_rows();
	}
	function get_characters()
	{
		$query = $this->db->query_all('select * from personnages');
		return $this->db->num_rows();
	}
	function get_guilds()
	{
		$query = $this->db->query_all('select * from guilds');
		return $this->db->num_rows();
	}
	function get_staff()
	{
		$this->db->query('select * from accounts WHERE level>0 ORDER BY level DESC');
		$i = 1;
		while ($row = $this->db->next())
		{
			switch ($row['level'])
			{
				case 1:
					$array_staff[$i]['rang'] = 'Animateur';
					break;
				case 2:
					$array_staff[$i]['rang'] = 'Mod�rateur';
					break;
				case 3:
					$array_staff[$i]['rang'] = 'D�veloppeur';
					break;
				case 4:
					$array_staff[$i]['rang'] = 'Ma�tre Joueur';
					break;
				case 5:
					$array_staff[$i]['rang'] = 'Administrateur';
					break;
				default:
					$array_staff[$i]['rang'] = 'Non d�finit';
					break;
			} //$row['level']
			$array_staff[$i]['pseudo'] = $row['pseudo'];
			$array_staff[$i]['mail']   = $row['email'];
			$array_staff[$i]['logged'] = $row['logged'];
			$i++;
		} //$row = $this->db->next()
		return $array_staff;
	}
}
<?php
/**
 * user_model.php
 *
 * Page intégrant les requêtes niveau utilisateurs
 *
 * @package		Panty
 * @author		Kirito
 */
class User_Model extends TinyMVC_Model {
	function get_user($username, $password) {
		if ($this->db->query('select COUNT(*) from accounts where account=? AND pass=?', array(
			$username,
			$password
		)) == 1):
			return $this->db->query_one('select * from accounts where account=? AND pass=?', array(
				$username,
				$password
			));
		else:
			return FALSE;
		endif;
	}
	function get_account_characters($account_id) {
		$this->db->select('*');
		$this->db->from('personnages');
		$this->db->where('account', $account_id);
		$this->db->orderby('xp');
		$this->db->query();
		$array_perso = array();
		$i           = 1;
		while ($row = $this->db->next()) {
			$array_perso[$i]['id']    = $row['guid'];
			$array_perso[$i]['name']  = $row['name'];
			$array_perso[$i]['level'] = $row['level'];
			$i++;
		} //$row = $this->db->next()
		return $array_perso;
	}
	function user_data($id) {
		return $this->db->query_one('select * from accounts where guid=?', array(
			$id
		));
	}
	function change_pass($id, $new_pass) {
		$this->db->where('guid', $id);
		return $this->db->update('accounts', array(
			'pass' => $new_pass
		));
	}
	function add_vote($id, $date_now) {
		$datas  = $this->db->query_one('select * from accounts where guid=?', array(
			$id
		));
		$tokens = $datas['points'] + VOTE_TOKENS;
		$votes  = $datas['votes'] + 1;
		$this->db->where('guid', $id);
		$this->db->update('accounts', array(
			'votes' => $votes,
			'points' => $tokens,
			'timevote' => $date_now
		));
		return $tokens;
	}
	function already_used($username, $pseudo, $email) {
		$request     = $this->db->query('select * from accounts where account=? OR pseudo=? OR email=?', array(
			$username,
			$pseudo,
			$email
		));
		$request_num = $this->db->num_rows();
		if ($request_num == 1):
			return TRUE;
		else:
			return FALSE;
		endif;
	}
	function create_user($username, $password, $pseudo, $email, $quest, $answ) {
		return $this->db->insert('accounts', array(
			'account' => $username,
			'pass' => $password,
			'pseudo' => $pseudo,
			'email' => $email,
			'question' => $quest,
			'reponse' => $answ
		));
	}
	function add_tokens($id) {
		$datas  = $this->db->query_one('select * from accounts where guid=?', array(
			$id
		));
		$tokens = $datas['points'] + SHOP_TOKENS;
		$this->db->where('guid', $id);
		$this->db->update('accounts', array(
			'points' => $tokens
		));
		return $tokens;
	}
}
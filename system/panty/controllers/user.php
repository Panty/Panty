<?php
/**
 * user.php
 *
 * Page concernant les actions dirigé utilisateurs
 * Ex : Inscription, espace membre, achat de points, vote...
 *
 * @package		Panty
 * @author		Kirito
 */
class User_Controller extends TinyMVC_Controller
{
	function register()
	{
		if (isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "index.php/news/index");
			exit;
		} //isset($_SESSION['logged'])
		if (isset($_POST['register']))
		{
			if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_conf']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['quest']) && isset($_POST['answ']) && isset($_POST['captcha']) && isset($_POST['rule']))
			{
				$this->load->model('User_Model', 'user');
				$username      = htmlentities($_POST['username']);
				$password      = htmlentities($_POST['password']);
				$password_conf = htmlentities($_POST['password_conf']);
				$pseudo        = htmlentities($_POST['pseudo']);
				$email         = htmlentities($_POST['email']);
				$quest         = htmlentities($_POST['quest']);
				$answ          = htmlentities($_POST['answ']);
				$captcha       = $_POST['captcha'];
				$already_used  = $this->user->already_used($username, $pseudo, $email);
				if ($already_used == FALSE)
				{
					if ($password == $password_conf)
					{
						if (filter_var($email, FILTER_VALIDATE_EMAIL))
						{
							if ($captcha == $_SESSION['captcha'])
							{
								$this->user->create_user($username, $password, $pseudo, $email, $quest, $answ);
								$this->smarty->assign('success', 'success');
							} //$captcha == $_SESSION['captcha']
							else
							{
								$this->smarty->assign('captcha', 'captcha');
							}
						} //filter_var($email, FILTER_VALIDATE_EMAIL)
						else
						{
							$this->smarty->assign('mail_invalid', 'mail_invalid');
						}
					} //$password == $password_conf
					else
					{
						$this->smarty->assign('password', 'password');
					}
				} //$already_used == FALSE
				else
				{
					$this->smarty->assign('alreadyused', 'alreadyused');
				}
			} //isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_conf']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['quest']) && isset($_POST['answ']) && isset($_POST['captcha']) && isset($_POST['rule'])
			else
			{
				$this->smarty->assign('champs', 'champs');
			}
		} //isset($_POST['register'])
		$this->smarty->display(PANTY_THEME . '/register.tpl');
	}
	function profil()
	{
		if (!isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		$this->load->model('User_Model', 'user');
		$id        = htmlentities($_SESSION['id']);
		$user_data = $this->user->user_data($id);
		if (isset($_POST['oldpass']) && isset($_POST['pass']) && isset($_POST['passconf']) && isset($_POST['change']))
		{
			$oldpass          = htmlentities($_POST['oldpass']);
			$new_pass         = htmlentities($_POST['pass']);
			$new_pass_confirm = htmlentities($_POST['passconf']);
			if ($oldpass == $user_data['pass'])
			{
				if ($new_pass == $new_pass_confirm)
				{
					$this->user->change_pass($id, $new_pass);
					$this->smarty->assign('pass_changed', 'pass_changed');
				} //$new_pass == $new_pass_confirm
				else
				{
					$this->smarty->assign('badconfirm', 'badconfirm');
				}
			} //$oldpass == $user_data['pass']
			else
			{
				$this->smarty->assign('badpassword', 'badpassword');
			}
		} //isset($_POST['oldpass']) && isset($_POST['pass']) && isset($_POST['passconf']) && isset($_POST['change'])
		switch ($user_data['level'])
		{
			case 0:
				$rank = 'Joueur';
				break;
			case 1:
				$rank = 'Animateur';
				break;
			case 2:
				$rank = 'Modérateur';
				break;
			case 3:
				$rank = 'Développeur';
				break;
			case 4:
				$rank = 'Maître Joueur';
				break;
			case 5:
				$rank = 'Administrateur';
				break;
			default:
				$rank = 'Joueur';
				break;
		} //$user_data['level']
		switch ($user_data['logged'])
		{
			case 0:
				$log = 'Non';
				break;
			case 1:
				$log = 'Oui';
				break;
			default:
				$log = 'Non';
				break;
		} //$user_data['logged']
		$datas = array(
			'account' => $user_data['account'],
			'mail' => $user_data['email'],
			'pseudo' => $user_data['pseudo'],
			'nb_votes' => $user_data['votes'],
			'tokens' => $user_data['points'],
			'last_ip' => $user_data['lastIP'],
			'last_co' => $user_data['lastConnectionDate'],
			'question' => $user_data['question'],
			'answer' => $user_data['reponse'],
			'player_lv' => $rank,
			'connected' => $log
		);
		$this->smarty->assign('user_data', $datas);
		$this->smarty->display(PANTY_THEME . '/account.tpl');
	}
	function login()
	{
		$this->load->model('User_Model', 'user');
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		$user     = $this->user->get_user($username, $password);
		if ($user != FALSE):
			$dat                = array(
				"title" => "Bienvenue " . $username,
				"content" => "Connexion effectuée avec succès !"
			);
			$_SESSION['pseudo'] = $user['pseudo'];
			$_SESSION['tokens'] = $user['points'];
			$_SESSION['id']     = $user['guid'];
			$_SESSION['logged'] = true;
		else:
			$dat = array(
				"title" => "Erreur",
				"content" => "Nom de compte ou mot de passe incorrect !"
			);
		endif;
		$this->smarty->assign($dat);
		$this->smarty->display(PANTY_THEME . '/message.tpl');
	}
	function logout()
	{
		if (!isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		session_destroy();
		$dat = array(
			"title" => "Déconnexion",
			"content" => "Déconnexion effectuée avec succès !"
		);
		$this->smarty->assign($dat);
		$this->smarty->display(PANTY_THEME . '/message.tpl');
	}
	function tokens()
	{
		if (!isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		$this->smarty->display(PANTY_THEME . '/tokens.tpl');
	}
	function vote()
	{
		if (!isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		$this->load->model('User_Model', 'user');
		$id            = htmlentities($_SESSION['id']);
		$user_data     = $this->user->user_data($id);
		$time_lastvote = $user_data['timevote'];
		$date_now      = time();
		$time_vote     = ($date_now - $time_lastvote) / 60;
		if ($time_vote >= 120)
		{
			unset($_SESSION['tokens']);
			$_SESSION['tokens'] = $this->user->add_vote($id, $date_now);
			header("Location: " . VOTE_URL);
			exit;
		} //$time_vote >= 120
		else
		{
			$wait = round(120 - $time_vote, 0);
			$dat  = array(
				"title" => "Vote impossible",
				"content" => "Vous devez attendre $wait minutes avant de pouvoir voter à nouveau !"
			);
			$this->smarty->assign($dat);
			$this->smarty->display(PANTY_THEME . '/message.tpl');
		}
	}
	function tokens_add()
	{
		if (!isset($_SESSION['logged']))
		{
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		} //!isset($_SESSION['logged'])
		// Déclaration des variables
		$ident = $idp = $ids = $idd = $codes = $code1 = $code2 = $code3 = $code4 = $code5 = $datas = '';
		$idp   = IDP;
		// $ids n'est plus utilisé, mais il faut conserver la variable pour une question de compatibilité
		$idd   = IDD;
		$ident = $idp . ";" . $ids . ";" . $idd;
		// On récupère le(s) code(s) sous la forme 'xxxxxxxx;xxxxxxxx'
		if (isset($_POST['code1']))
			$code1 = $_POST['code1'];
		if (isset($_POST['code2']))
			$code2 = ";" . $_POST['code2'];
		if (isset($_POST['code3']))
			$code3 = ";" . $_POST['code3'];
		if (isset($_POST['code4']))
			$code4 = ";" . $_POST['code4'];
		if (isset($_POST['code5']))
			$code5 = ";" . $_POST['code5'];
		$codes = $code1 . $code2 . $code3 . $code4 . $code5;
		// On récupère le champ DATAS
		if (isset($_POST['DATAS']))
			$datas = $_POST['DATAS'];
		// On encode les trois chaines en URL
		$ident = urlencode($ident);
		$codes = urlencode($codes);
		$datas = urlencode($datas);
		/* Envoi de la requête vers le serveur StarPass
		Dans la variable tab[0] on récupère la réponse du serveur
		Dans la variable tab[1] on récupère l'URL d'accès ou d'erreur suivant la réponse du serveur */
		$get_f = @file("http://script.starpass.fr/check_php.php?ident=$ident&codes=$codes&DATAS=$datas");
		if (!$get_f)
		{
			exit("Votre serveur n'a pas accès au serveur de StarPass, merci de contacter votre hébergeur.");
		} //!$get_f
		$tab = explode("|", $get_f[0]);
		if (!$tab[1])
			$url = "http://script.starpass.fr/error.php";
		else
			$url = $tab[1];
		// dans $pays on a le pays de l'offre. exemple "fr"
		$pays      = $tab[2];
		// dans $palier on a le palier de l'offre. exemple "Plus A"
		$palier    = urldecode($tab[3]);
		// dans $id_palier on a l'identifiant de l'offre
		$id_palier = urldecode($tab[4]);
		// dans $type on a le type de l'offre. exemple "sms", "audiotel, "cb", etc.
		$type      = urldecode($tab[5]);
		// vous pouvez à tout moment consulter la liste des paliers à l'adresse : http://script.starpass.fr/palier.php
		// Si $tab[0] ne répond pas "OUI" l'accès est refusé
		// On redirige sur l'URL d'erreur
		if (substr($tab[0], 0, 3) != "OUI")
		{
			header("Location: $url");
			exit;
		} //substr($tab[0], 0, 3) != "OUI"
		else
		{
			$this->load->model('User_Model', 'user');
			$id = $_SESSION['id'];
			unset($_SESSION['tokens']);
			$_SESSION['tokens'] = $this->user->add_tokens($id);
			$dat                = array(
				"title" => "Achat de points terminé",
				"content" => "L'achat de points s'est déroulé avec succès ! Vous disposez désormais de " . $_SESSION['tokens'] . " points."
			);
			$this->smarty->assign($dat);
			$this->smarty->display(PANTY_THEME . '/message.tpl');
		}
	}
	function not_connected()
	{
		if (!isset($_SESSION['logged']))
		{
			$dat = array(
				"title" => "Erreur",
				"content" => "Vous devez être connecté pour accéder à cette page."
			);
			$this->smarty->assign($dat);
			$this->smarty->display(PANTY_THEME . '/message.tpl');
		} //!isset($_SESSION['logged'])
		else
		{
			header("Location: " . TMVC_URL . "index.php/user/not_connected");
			exit;
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* db.php
* the chaos also needs somewhere to save its content
*/



class LibUser {
	var $config;
	var $chars = "abcdefghjkmnpqrstuvwxyz23456789";
	var $db;
	var $logged = false;
	var $sec;
	var $current;
	
	/**
	* __construct
	*
	*/
	public function __construct ($config,$db,$sec)
	{	
		$this->config = $config;
		$this->db = $db;
		$this->sec = $sec;
	}
	
	/**
	* loginrequired
	* check if user is logged
	*/
	public function loginrequired() {
		if (!$this->logged) {
			header("Location: ?");
		}
	}

	/**
	* load
	* signin in the chaos
	*/
	public function load () {
		
		$userdata = $this->db->query("select * from user where id=".$_SESSION["iduser"]);
		return $userdata[0];		
	}

	/**
	* newpassword
	* generates a password string
	*/
	public function newpassword ($long = 8) {
		$result = "";
		for ($i=0;$i<$long;$i++)
			$result .= substr($this->chars,rand(0,(strlen($this->chars)-1)),1);
			
		return $result;
	}

	/**
	* signin
	* signin in the chaos
	*/
	public function signin ($login,$password) {
		
		$reg = $this->db->query("select * from user where (login='".$login."' or email='".$login."') and password=sha1('".$password."')");
		$_SESSION["iduser"] = $reg[0]["id"];
		$_SESSION["login"] = $reg[0]["login"];
		$_SESSION["email"] = $reg[0]["email"];
		$this->logged = true;
		return count($reg);		
	}
	
	/**
	* signout
	* signin in the chaos
	*/
	public function signout () {
		session_destroy();
		$_SESSION["iduser"] = "";
		$_SESSION["login"] = "";
		header("Location: ?");
	}


	/**
	* signup
	* validates a captcha image
	*/
	public function signup ($login,$email,$password) {
		$result = array();
		
		$loginexists = $this->db->query("select login from user where login='".$login."' ");
		if (count($loginexists[0])) {
			$result["login"] = _("Login exists"); 
		}

		$emailexists = $this->db->query("select email from user where email='".$email."' ");
		if (count($emailexists[0])) {
			$result["email"] = _("Email exists"); ; 
		}
					
		if (!count($result)) {	
			$this->db->nonquery("insert into user (login, password, email) values ('".$login."',sha1('".$password."'),'".$email."')");
			$result["iduser"] = $this->db->insert_id();
		}
		return $result;
		
	}

	/**
	* update
	* updates user profile
	*/
	public function update ($login,$email,$password) {
		$result = array();
		$currentid = $_SESSION["iduser"];
		
		$loginexists = $this->db->query("select login from user where login='".$login."' and id<>".$currentid);
		if (count($loginexists[0])) {
			$result["login"] = _("Login exists"); 
		}

		$emailexists = $this->db->query("select email from user where email='".$email."' and id<>".$currentid);
		if (count($emailexists[0])) {
			$result["email"] = _("Email exists"); ; 
		}
		
	
		if (!count($result)) {	
			if ($password != "") {
				$this->db->nonquery("update user set login='".$login."', password=sha1('".$password."'), email='".$email."' where id=".$currentid);
			} else {
				$this->db->nonquery("update user set login='".$login."', email='".$email."' where id=".$currentid);
			}
		}
		
		$_SESSION["login"] = $login;
		$_SESSION["email"] = $email;
		
		return $result;
		
	}
	
	/**
	* recover
	* validates a captcha image
	*/
	public function recovery ($email, $mail) {
		$result = array();
		


		$emailexists = $this->db->query("select * from user where email='".$email."' ");

		if (count($emailexists)) {
			$recovercode = $this->sec->randomstring(40);
			$recoverurl = $this->config["site_url"]."index.php?p=recovery&code=".$recovercode."&id=".$emailexists[0]["id"];
			$text = sprintf(_("Hi there,\n Someone (presumably you), has requested a password reset. Click here to reset your password:\n%s \n Best regards,\nchaos.cx team"), $recoverurl);
			$this->db->nonquery("update user set recover=sha1('".$recovercode."') where email='".$email."' ");
			$mail->sendemail($email,_("chaos account recovery"),$text,"",$this->config["email"]);
		}
		
		return count($emailexists);
		
	}
	
	

	/**
	* resetpassword
	* generates and show new password after recovery
	*/
	public function resetpassword ($recovercode,$id) {
	
		$html = "";

		$accountexists = $this->db->query("select * from user where recover=sha1('".$recovercode."') and id= ".$id);

		if (count($accountexists)) {
			$password = $this->sec->randomstring(8);
			$this->db->nonquery("update user set recover='', password=sha1('".$password."') where id=". $id);
			$html = sprintf(_("Ok, account your new password is %s. Try to sign in now: "),$password);
			$html .= '<a href="?=signin" title="'._("Sign in").'">'._("Sign in").'</a>';
		}
		
		if (count($accountexists)) {
			return $html;
		} else {
			return sprintf(_("Invalid recovery code"));
		}
		
	}
	
	/**
	* acceptInvitation
	* generates and show new password after recovery
	*/
	public function acceptInvitation ($recovercode) {
	
		$html = "";

		$exists = $this->db->query("select * from chaos_user where recover='".$recovercode."'");

		if (count($exists) && !$this->logged) {
			$this->db->nonquery("update chaos_user set recover='' where recover='".$recovercode."'  and id=". $exists[0]["id"]);
			$html = sprintf(_("Ok, invitation accepted. Try to sign in now: "),$password);
			$html .= '<a href="?p=signin" title="'._("Sign in").'">'._("Sign in").'</a>';
		} elseif (count($exists) && $this->logged) {
			$this->updateInvitations($_SESSION["iduser"],$_SESSION["email"],$exists[0]["idchaos"]);
			$html = _("Ok, invitation accepted. Check out your chaos: ");
			$html .= '<br /><a href="?p=mychaos" title="'._("My chaos").'">'._("My chaos").'</a>';
		}
		
		if (count($exists)) {
			return $html;
		} else {
			return sprintf(_("Invalid recovery code"));
		}
		
	}
	
	/**
	* updateInvitations
	* update invitations one by one
	*/
	public function updateInvitations ($iduser,$email,$idchaos=0) {
	
		$where = (!$idchaos)?" ":" idchaos=".$idchaos." and ";
		$sql = "update chaos_user set iduser=".$iduser.", email='', recover='' where ".$where." email='".$email."'";
		$exists = $this->db->nonquery($sql);

	}

	/**
	* showInvitations
	* show pending invitations
	*/
	public function showInvitations ($iduser) {
	
		$html = "";

		$invitations = $this->db->query("select chaos_user.*, name from chaos_user inner join chaos on chaos.id=chaos_user.idchaos where email='".$_SESSION["email"]."' and recover<>''");

		if (count($invitations)) {
		$html .= '<div class="">'._("Pending invitations").'</div>';
		$html .=	'<div><a href="?p=invite&op=confirm&id=0" title="'._("Confirm all invitations").'">'._("Confirm invitations").'</a></div>';

			foreach ($invitations as $inv) {
				$html .= '<div><a href="?p=invite&op=confirm&id='.$inv["idchaos"].'" title="'.sprintf(_("Click to accept invitation to %s"),$inv["name"]).'">'.$inv["name"].'</a></div>';
			}
		}
		return $html;
	
	}
	
}

?>
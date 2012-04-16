<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* db.php
* the chaos has its own class
*/



class LibChaos {
	var $config;
	var $db;
	var $current;
	var $sec;
	/**
	* __construct
	*
	*/
	public function __construct ($config,$db,$sec)
	{	
		$this->config = $config;
		$this->db = $db;
		$this->sec = $sec;
		$this->current["id"] = 0;
	}
	
	/**
	* create
	* Creates a captcha image
	*/
	public function createChaos ($chaosname,$chaostype) {
		$bgcolor = $this->randomColor();
		$fgcolor = $this->randomColor();
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		
		$sql = "insert into chaos (name, chaostype, bgcolor, fgcolor,iduser) values ('".$chaosname."',".$chaostype.",'".$bgcolor."','".$fgcolor."',".$iduser.")";
		
		return $this->db->nonquery($sql);
	}

	/**
	* configChaos
	* Changes chaos configuration a captcha image
	*/
	public function configChaos ($idchaos,$bgcolor,$fgcolor,$bgimage,$algorythm) {

		$result = false;
		if ($idchaos!="" || $idchaos) {
			$user = $this->db->query("select * from chaos where id=".$idchaos);
			$this->current = $user[0];
			$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
			
				if ($iduser == $user[0]["iduser"]) {
					$sqlupdate = "update chaos set bgcolor='".$bgcolor."',fgcolor='".$fgcolor."', bgimage='".$bgimage."',algorythm='".$algorythm."' where id=".$idchaos;
					$result = $this->db->nonquery($sqlupdate);
			
			}
		}	
		
		return $result;
	}
	
	/**
	 * hasReadPermission
	 * Checks if user has permission to read chaos
	 */
	public function hasReadPermission ($idchaos,$iduser) {
		$iduser = (!$iduser)?0:$iduser;
		if ($idchaos!="" || $idchaos) {
			$chaosdata = $this->db->query("select * from chaos left join chaos_user on chaos_user.idchaos=chaos.id where chaos.id=".$idchaos." and (chaostype>1 or chaos.iduser=".$iduser." or chaos_user.iduser=".$iduser.")" );
			
			// if owner or public/anonymous
			if (count($chaosdata)) {
				return true;
			} else  {
				return false;
			}
		} else {
			return true;
		}	
	}
	
	/**
	 * hasPermission
	 * Checks if user has permission to add items or change chaos config
	 */
	public function hasPermission ($idchaos,$iduser) {
			$iduser = (!$iduser)?0:$iduser;
		if ($idchaos!="" || $idchaos) {
			$chaosdata = $this->db->query("select * from chaos left join chaos_user on chaos_user.idchaos=chaos.id where chaos.id=".$idchaos." and (chaostype=3 or chaos.iduser=".$iduser." or chaos_user.iduser=".$iduser.")");
			
			// if owner, or user with perm, or public
			if (count($chaosdata)) {
				return true;
			} else  {
				return false;
			}
		} elseif ($this->config["allow_any_frontpage"]) {
			return true;
		} else {
			return false;
		}	
	}

	
	
	/**
	* checkExists
	* Checks if a chaos exists or not
	*/
	public function checkExists ($chaosname) {
		$exists = false;
		if (trim($chaosname) == "") { return false; }
		$reg = $this->db->query("select * from chaos where name='".$chaosname."'");
		$this->current = $reg[0];
		$exists = ($reg[0]["name"] == $chaosname);			
		return $exists;
	}
	
	

	
	/**
	* getChaos
	* returns chaos info
	*/
	public function getChaos ($idchaos) {
		$exists = false;
		$reg = $this->db->query("select * from chaos where id='".$idchaos."'");
		$this->current = $reg[0];
		return count($reg);
	}

	/**
	* isAdmin
	* returnsif chaos iduser is the same of session user
	*/
	public function isAdmin () {
		return ($this->current["iduser"] == $_SESSION["iduser"]);
	}
	
	/**
	* getUserChaos
	* returns chaos for user
	*/
	public function getUserChaos ($iduser) {
		$html = "";
		$chaoses = $this->db->query("select chaos.id,chaos.name, chaos.created, count(item.idchaos) as total from chaos left join item on item.idchaos=chaos.id left join chaos_user on chaos_user.idchaos=chaos.id where (chaos.iduser=".$iduser." or chaos_user.iduser=".$iduser.") group by chaos.id");
		foreach ($chaoses as $chaos) {
			$html .= '<div><a href="?p='.$chaos["name"].'" title="'.sprintf(_("Go to %s chaos"),$chaos["name"]).'">'.$chaos["name"].'</a> ';
			$html .= '<span class="whitenote">'.sprintf(_("created on %s"),$chaos["created"]).'</span>, '.sprintf(_("%s items."),$chaos["total"]).'</div>';
		}
		return $html;
	}
	
	/**
	* randomColor
	* Generates a random rgb color in hex
	*/	
	private function randomColor () {
		$color = "0123456789abcdef";
		$rgb = "";
		
		for ($i=0;$i<6;$i++)
			$rgb .= substr($color,rand(0,strlen($color)),1);
			
		return $rgb;
	}
	
	/**
	* invite
	* invite a friend to w
	*/
	public function invite ($who, $idchaos,$chaosname, $email, $msg) {
		$result = array();
		
		// Delete previous if any
		$this->db->nonquery("delete from chaos_user where email='".$email."' and idchaos=".$idchaos);

		$recovercode = $this->sec->randomstring(40);
		$recoverurl = $this->config["site_url"]."index.php?p=invite&code=".$recovercode;

		// Insert new:
		$this->db->nonquery("insert into chaos_user (idchaos, email, recover) values(".$idchaos.",'".$email."',sha1('".$recovercode."'))");

		$text = sprintf(_("Hi there,\n ".$email.", has invited you to be part of %s:\n". $msg ."\n Click here to accept:\n%s \n \nIf you don't have an account you can sign up later. \nBest regards,\nchaos.cx team"), $chaosname,$recoverurl);
		//$mail->sendemail($email,_("invitation to chaos"),$text,"",$this->config["email"]);
		
		return $text;
		
	}
	
}

?>
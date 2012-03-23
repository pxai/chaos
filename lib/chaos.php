<?php
/**
* db.php
* the chaos has its own class
*/



class LibChaos {
	var $config;
	var $db;
	var $current;
	
	/**
	* __construct
	*
	*/
	public function __construct ($config,$db)
	{	
		$this->config = $config;
		$this->db = $db;
	}
	
	/**
	* create
	* Creates a captcha image
	*/
	public function createChaos ($chaosname,$privatechaos,$anonymouschaos,$securityquestion,$securityanswer) {
		$bgcolor = $this->randomColor();
		$fgcolor = $this->randomColor();
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		
		$sql = "insert into chaos (name, private, anonymous, bgcolor, fgcolor, question, answer,iduser) values ('".$chaosname."',".$privatechaos.",".$anonymouschaos .",'".$bgcolor."','".$fgcolor."','".$securityquestion."','".$securityanswer."',".$iduser.")";
		
		return $this->db->nonquery($sql);
	}

	/**
	* configChaos
	* Changes chaos configuration a captcha image
	*/
	public function configChaos ($idchaos,$bgcolor,$fgcolor,$bgimage,$algorythm) {
		if ($idchaos!="" || $idchaos) {
			$user = $this->db->query("select * from chaos where id=".$idchaos);
			$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
			
				if ($iduser == $user[0]["iduser"]) {
					$sqlupdate = "update chaos set bgcolor='".$bgcolor."',fgcolor='".$fgcolor."', bgimage='".$bgimage."',algorythm='".$algorythm."' where id=".$idchaos;
					$result = $this->db->query($sqlupdate);
			
			}
		}	
		
		return $result;
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
}

?>
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
	public function createChaos ($chaosname,$privatechaos) {
		$bgcolor = $this->randomColor();
		$fgcolor = $this->randomColor();
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		
		$sql = "insert into chaos (name, private, bgcolor, fgcolor,iduser) values ('".$chaosname."',".$privatechaos.",'".$bgcolor."','".$fgcolor."',".$iduser.")";
		
		return $this->db->nonquery($sql);
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
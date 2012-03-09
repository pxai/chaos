<?php
/**
* db.php
* the chaos has its own class
*/



class LibChaos {
	var $config;
	var $db;
	
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
	public function createChaos ($chaosname,$privatechaos,$securityquestion="",$securityanswer="") {
		if ($privatechaos == "1" ) {
			$sql = "insert into chaos (name, private, question, answer) values ('".$chaosname."','".$privatechaos."',sha1('".$securityquestion."'),sha1('".$securityanswer."'))"; 
		} else {
			$sql = "insert into chaos (name, private) values ('".$chaosname."',0)";
		}
		
		return $this->db->nonquery($sql);
	}

	/**
	* checkExists
	* Checks if a chaos exists or not
	*/
	public function checkExists ($chaosname) {
		$exists = false;
		if (trim($chaosname) == "") { return false; }
		$reg = $this->db->query("select name from chaos where name='".$chaosname."'");
		$exists = ($reg[0]["name"] == $chaosname);			
		return $exists;
	}
	
	

}

?>
<?php
/**
* db.php
* the chaos also needs somewhere to save its content
*/



class LibDb {
	
	/**
	* __construct
	*
	*/
	public function __construct ($config)
	{	$this->config = $config;
		$this->connect();
	}
	
	function connect () {
		if (! ($conn = mysql_connect($this->config["dbhost"],$this->config["dbuser"],$this->config["dbpassword"])) ) {
				$debug .= _("db_connect_error").mysql_error();
		} else {
				$debug .= _("db_connect_ok");
		}


		if (! ($conn = mysql_select_db($this->config["db"],$conn)) ) {
			$debug .= _("db_select_error").mysql_error();
		} else {
			$debug .= _("db_select_ok");
		}
	}

	public function query($sql) {
		$rows = array();
		$result = mysql_query($sql) or die("Error: $sql :" . mysql_error());
		while ($r = mysql_fetch_assoc($result)) {
			$rows[] = $r;
		}		
	
		mysql_free_result($result);
		return $rows;
	}	

	public function nonquery($sql) {
		$result = mysql_query($sql) or die("Error: $sql :" . mysql_error());
		return $result;
	}

	public function insert_id () {
			return mysql_insert_id();
	}

}

?>
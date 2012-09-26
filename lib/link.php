<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


/**
* link.php
* building links for the chaos
* @author Pello Xabier Altadill Izura - http://pello.info
* 
* https://github.com/pxai/chaos
*/

class LibLink {
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
	* url
	* Sets proper headers and send email
	*/
	public function url ($url) {
		global $config;
		
		if($url=="") {
			return $config["root"]; 
		} elseif ($config["htaccess"] ) {
			return $url;
		} else {
			$parts = preg_split("/\//",$url);
			$result = "";
			if (count($parts) == 1) {
				return "index.php?p=".$url;
			} else {
				$result .= "?p=".$parts[0];
				for($i=1;$i<count($parts);$i=$i+2) {
					$result .= "&".$parts[$i]."=".$parts[$i+1];
				}
				
				return "index.php".$result.$config["htaccess"];
			}
		}
	
	}
	
}
?>
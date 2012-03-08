<?php
/**
* link.php
* building links for the chaos
*/

class LibLink {

function url ($url) {
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


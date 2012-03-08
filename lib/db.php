<?php
/**
* db.php
* the chaos also needs somewhere to save its content
*/



class LibDb {
	
	function connect () {
		if (! ($conn = mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpassword"])) ) {
				$debug .= _("db_connect_error").mysql_error();
		} else {
				$debug .= _("db_connect_ok");
		}


		if (! ($conn = mysql_select_db($config["db"],$conn)) ) {
			$debug .= _("db_select_error").mysql_error();
		} else {
			$debug .= _("db_select_ok");
		}
	}

function query($sql) {
	$rows = array();
	$result = mysql_query($sql);
	while ($r = mysql_fetch_assoc($result)) {
		$rows[] = $r;
	}		
	
	mysql_free_result($result);
}

function nonquery($sql) {
	$result = mysql_query($sql);
	}

}

?>
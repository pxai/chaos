<?php
/**
* db.php
* the chaos also needs somewhere to save its content
*/

$totalqueries = 0;

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





?>
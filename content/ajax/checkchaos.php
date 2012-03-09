<?php
/**
* create_ajax.php
* ajax handler for checking if chaos exists
* Expected data:
*  chaosname

*/

$sql = "";
$exist = false;
$result = 0;

$_POST["chaosname"] = strtolower($_POST["chaosname"]);
	
	if ($chaos->checkExists($_POST["chaosname"])) {
		echo '{"Result" : "Exists"}';
	} else {
		echo '{"Result" : "Free"}';
	}

?>
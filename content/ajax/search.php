<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* item.php
* ajax handler for upload
* Expected data:
   id
 */

$sql = "";
$exist = false;
$errors = "";
$idchaos = 0;



// check id
if (!preg_match("/^[a-zA-Z0-9]{3,}$/",$_POST["searchterm"]))  {
			$errors .= 'error';
} else {
	echo $item->searchItems($_POST["searchterm"],$idchaos, 10);
}

echo $errors;

?>
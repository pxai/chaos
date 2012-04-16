<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* create_ajax.php
* ajax handler for chaos creation
* Expected data:
*  chaosname
*  privatechaos
*  securityquestion
*  securityanswer
*/

$sql = "";
$exist = false;
$errors = "";
$allowedtypes = array(1,2,3);

$_POST["chaosname"] = strtolower($_POST["chaosname"]);

if (preg_match($config["rx-chaosname"],$_POST["chaosname"]) ) {
	
	if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		$errors .= ' "captcha" : "incorrect",';
	} 
	if ($chaos->checkExists($_POST["chaosname"])) {
		$errors .= ' "chaos" : "exists",';
	}

	// if user is not logged, force anonymous.
	$chaostype = ($user->logged && in_array($_POST["chaostype"],$allowedtypes))?$_POST["chaostype"]:3;

	$errors = rtrim($errors,",");
	
	if (!$errors) {
		$result = $chaos->createChaos($_POST["chaosname"],$chaostype);
		$captcha->drop($_POST["captchakey"]);
	}
} else {
		$errors .= ' "name" : "incorrect"';
}


if (!$errors) {
	echo '{"Result" : "Success", "Chaosname" : "'.$_POST["chaosname"].'"}';
} else {
	echo '{"Result" : "Error" , '.$errors.'}';
} 

?>
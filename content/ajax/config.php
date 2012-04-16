<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* create_ajax.php
* ajax handler for chaos creation
* Expected data:
*  chaosname
*  privatechaos
*  captcha
*  captchakey
*/

$sql = "";
$exist = false;
$errors = "";

$_POST["chaosname"] = strtolower($_POST["chaosname"]);

if (preg_match("/^[0-9]+$/",$_POST["chaosid"]) ) {

	if (!$chaos->getChaos($_POST["chaosid"])) {
		$errors .= ' "chaos" : "incorrect",';
	} 
	
	if ($user->logged && $chaos->current["anonymous"]==0 && $chaos->current["iduser"]!= $_SESSION["iduser"]) {
		$errors .= ' "permission" : "denied",';
	}
	
	if (!$user->logged && $chaos->current["anonymous"]==0) {
		$errors .= ' "permission" : "denied",';
	}

	if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		$errors .= ' "captcha" : "incorrect",';
	} 
	
	if (!preg_match("/^[a-fA-F0-9]{3,6}$/",$_POST["bgcolor"]) ) {
		$errors .= ' "bgcolor" : "incorrect", ';
	}

	if (!preg_match("/^[a-fA-F0-9]{3,6}$/",$_POST["fgcolor"]) ) {
		$errors .= ' "fgcolor" : "incorrect", ';
	}

	if (!in_array($_POST["algorythm"],$config["algorythms"]) ) {
		$errors .= ' "algorythm" : "incorrect", ';
	}


	if ($_POST["bgimage"] && !preg_match($config["rx-url"],$_POST["bgimage"]) ) {
		$errors .= ' "bgimage" : "incorrect", ';
	}

	// if user is not logged, force anonymous.
	
	$_POST["anonymouschaos"] = (!$user->logged)?1:$_POST["anonymouschaos"];
	$needsquestion = (!$user->logged || $_POST["anonymouschaos"]==1);
	
	$needsquestion = false;
	
	if ($needsquestion && trim($_POST["securityquestion"]) == "") {
		$errors .= ' "securityquestion" : "incorrect",';
	}

	if ($needsquestion && trim($_POST["securityanswer"]) == "") {
		$errors .= ' "securityanswer" : "incorrect",';
	}

	$errors = rtrim($errors,", ");
	
	if (!$errors) {
		$result = $chaos->configChaos($_POST["chaosid"],$_POST["bgcolor"],$_POST["fgcolor"],$_POST["bgimage"],$_POST["algorythm"]);
		$captcha->drop($_POST["captchakey"]);
	}
} else {
		$errors .= ' "id" : "incorrect"';
}


if (!$errors) {
	echo '{"Result" : "Success" , "Name" : "'.$chaos->current["name"].'" }';
} else {
	echo '{"Result" : "Error" , '.$errors.'}';
} 

?>
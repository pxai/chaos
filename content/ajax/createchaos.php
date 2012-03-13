<?php
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

$_POST["chaosname"] = strtolower($_POST["chaosname"]);

if (preg_match($config["rx-chaosname"],$_POST["chaosname"]) ) {
	
	if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		$errors .= ' "captcha" : "incorrect",';
	} 
	if ($chaos->checkExists($_POST["chaosname"])) {
		$errors .= ' "chaos" : "exists",';
	}

	$errors = rtrim($errors,",");
	
	if (!$errors) {
		$result = $chaos->createChaos($_POST["chaosname"],$_POST["privatechaos"]);
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
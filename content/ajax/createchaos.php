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

	// if user is not logged, force anonymous.
	$_POST["anonymouschaos"] = (!$user->logged)?1:$_POST["anonymouschaos"];
	$needsquestion = (!$user->logged || $_POST["anonymouschaos"]==1);
	
	if ($needsquestion && trim($_POST["securityquestion"]) == "") {
		$errors .= ' "securityquestion" : "incorrect",';
	}

	if ($needsquestion && trim($_POST["securityanswer"]) == "") {
		$errors .= ' "securityanswer" : "incorrect",';
	}

	$errors = rtrim($errors,",");
	
	if (!$errors) {
		$result = $chaos->createChaos($_POST["chaosname"],$_POST["privatechaos"],$_POST["anonymouschaos"],$_POST["securityquestion"],$_POST["securityanswer"]);
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
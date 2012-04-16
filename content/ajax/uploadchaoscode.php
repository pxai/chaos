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

$noerror = false;

if (preg_match("/^[0-9]+$/",$_POST["chaosid"]) ) {
	
	$uploadcode = $captcha->captchastring();
	$chaosid = $_POST["chaosid"];
	
	$noerror = $db->nonquery("insert into chaos_upload_code values (".$chaosid .",'".$uploadcode."')");
}

if ($noerror) {
	echo '{ "Result" : "'.$uploadcode.'"}';
} else {
	echo '{"Result" : "Error"}';
} 

?>
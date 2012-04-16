<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* captcha.php
* the chaos generates zillions of annoying captchas
*/

//$captcha = new LibCaptcha($config);

$key = filter_input(INPUT_GET, 'key', FILTER_SANITIZE_STRING);

if (preg_match("/^[a-zA-Z0-9]{1,8}$/",$key)) {
	
	$reg = $db->query("select captcha from captcha where id='".$key."'");
	echo $captcha->generate($reg[0]["captcha"]);
	
}

?>
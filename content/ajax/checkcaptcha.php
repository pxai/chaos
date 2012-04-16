<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* checkcaptcha.php
* ajax handler for chaos creation
* Expected data:
*  chaosname
*  privatechaos
*  securityquestion
*  securityanswer
*/

if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		echo '{ "Result" : "Error" }';
} else {
		echo '{ "Result" : "Success" }';
	}

?>
<?php
/**
* index.php
* the chaos has an index but who knows where it goes after
*/
$debug = "";


include_once "config.php";
include_once "lib/autoload.php";


$db = new LibDb($config);
$link = new LibLink($config);
$captcha = new LibCaptcha($config,$db);
$chaos = new LibChaos($config,$db);

// List of allowed actions
$allowed = array("chaos","footer","ajax/createchaos","captcha","config","upload");

// get requested page, safe way in php5.2
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);

// Is one of the allowed actions?
if (in_array($page,$allowed)) {
	include_once "content/".$page.".php";
// Is a chaos page?
} elseif (preg_match("/^[a-z\_\-\.0-9)]{1,100}$/",$page)) {
	$chaosname = $page;
	include_once "content/chaos.php";	
// Anyone else, go to default
} else {
	include_once $config["default"];
}
?>
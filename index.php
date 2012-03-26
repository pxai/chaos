<?php
/**
* index.php
* the chaos has an index but who knows where it goes after
*/
session_start();

$debug = "";


include_once "config.php";
include_once "lib/autoload.php";


$db = new LibDb($config);
$util = new LibUtil($db,$config);
$link = new LibLink($config,$db);
$captcha = new LibCaptcha($config,$db);
$chaos = new LibChaos($config,$db);
$item = new LibItem($config,$db,$util);
$tags = new LibTags($config,$db);
$sec = new LibSec($config,$db);
$user = new LibUser($config,$db,$sec);
$mail = new LibMail($config,$db);

$sec->sanitize("get");
$sec->sanitize("post");

if ($_SESSION["iduser"]) { $user->logged = true; }


// List of allowed actions
<<<<<<< HEAD
$allowed = array("chaos","st/css/main.php","rss","signin","signout","signup","recovery","profile","footer","ajax/item","ajax/dragdrop","ajax/createcaptcha","ajax/upload","ajax/uploadchaoscode","ajax/createchaos","ajax/gettags","ajax/config","captcha","config","upload");
=======
$allowed = array("chaos","st/css/main.php","signin","signout","signup","recovery","profile","footer","ajax/item","ajax/createcaptcha","ajax/upload","ajax/uploadchaoscode","ajax/createchaos","ajax/gettags","captcha","config","upload");
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847

// get requested page, safe way in php5.2
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);

// Is one of the allowed actions?
if (in_array($page,$allowed)) {
	// static content css, js
	if (preg_match("/^st\/[a-z]+\/[a-z]+\.[a-z]+/",$page)) {
		$page = ltrim($page,"st/");
		include_once $page;
	} else {
		include_once "content/".$page.".php";
	}
// Is a chaos page?
} elseif (preg_match($config["rx-chaosname"],$page)) {
	$chaosname = $page;
	include_once "content/chaos.php";	
// Anyone else, go to default
} else {
	include_once $config["default"];
}
?>
<?php
/**
* index.php
* the chaos has an index but who knows where it goes after
*/
session_start();

// variable to check script access
define('BASEPATH','lock');
$debug = "";

include_once "config.php";
include_once "lib/autoload.php";


$db = new LibDb($config);
$sec = new LibSec($config,$db);
$util = new LibUtil($db,$config);
$link = new LibLink($config,$db);
$captcha = new LibCaptcha($config,$db);
$chaos = new LibChaos($config,$db,$sec);
$item = new LibItem($config,$db,$util);
$tags = new LibTags($config,$db);
$user = new LibUser($config,$db,$sec);
$mail = new LibMail($config,$db);

$sec->sanitize("get");
$sec->sanitize("post");

if ($_SESSION["iduser"]) { $user->logged = true; }


// List of allowed actions
$allowed = array("chaos","st/css/main.php","rss","signin","signout","signup","recovery","profile","footer","ajax/search","ajax/item","ajax/dragdrop","ajax/createcaptcha","ajax/upload","ajax/uploadchaoscode","ajax/createchaos","ajax/fastupload","ajax/gettags","ajax/config","ajax/checkcaptcha","captcha","config","upload","create","newitem","tag","mychaos","invite","preview");

// get requested page, safe way in php5.2
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);
$op = filter_input(INPUT_GET, 'op', FILTER_SANITIZE_STRING);

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
	if ($chaos->checkExists($page)) {
		$currentbg = $chaos->current["bgcolor"];
		$currentfg = $chaos->current["fgcolor"];
		$currentimage = $chaos->current["bgimage"];
		$chaosname = $page;
	}
	
	include_once "content/default.php";	
// Anyone else, go to default
} else {
	include_once $config["default"];
}
?>
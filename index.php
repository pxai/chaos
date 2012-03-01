<?php
/**
* index.php
* the chaos has an index but who knows where it goes after
*/
$debug = "";

include_once "config.php";
include_once "lib/db.php";

// List of allowed actions
$allowed = array("chaos","footer");

// get requested page, safe way in php5.2
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);

// Is one of the allowed actions?
if (in_array($page,$allowed)) {
	include_once "content/".$page.".php";
	
// Is a chaos page?
} elseif (preg_match("/^[a-z\_\-0-9)]{1,140}$/",$page)) {
	include_once $config["default"];
	
// Anyone else, go to default
} else {
	include_once $config["default"];
}
?>
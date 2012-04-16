<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* create_ajax.php
* ajax handler for upload
* Expected data:
   chaosid
   chaosuploadcode
   uploadname
   uploadtags
   uploadtype
   url
   captchakey
   captcha
 */

$sql = "";
$exist = false;
$errors = "";
$idchaos = 0;
$linkneeded = array(5,6,8);
$isupdate = (preg_match("/^[0-9]+$/",$_POST["updateid"]))?true:false;
$isdelete = (preg_match("/^[0-9]+$/",$_POST["deleteid"]))?true:false;

if (!$chaos->hasPermission($idchaos,$_SESSION["iduser"])) {
	exit;
}

// Is a delete?
if ($isdelete) {
	if ($result = $item->deleteItem($_POST["deleteid"])) {
		echo '{"Result" : "Success" }';
	} else {
		echo '{"Result" : "Error" }';
	}
	
} else {

// check name
if (!preg_match($config["rx-name"],$_POST["uploadname"]))  {
			$errors .= ' "name" : "incorrect",';
}


// check tags
if ($_POST["uploadtags"]!="" && !preg_match($config["rx-tags"],$_POST["uploadtags"])) {
			$errors .= ' "tags" : "incorrect",';
} 

// check type
if (!$isupdate && !preg_match("/^[0-9]+$/",$_POST["uploadtype"]) ) {
			$errors .= ' "type" : "incorrect",';
}

// check url if needed
if (in_array($_POST["uploadtype"],$linkneeded) && !preg_match($config["rx-url"],$_POST["url"])) {
			$errors .= ' "url" : "incorrect", ';
} 


// check description in text items
if ($_POST["uploadtype"]==7  && trim($_POST["uploaddescription"])=="") {
			$errors .= ' "description" : "incorrect", ';
} 
// check captcha
if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		$errors .= ' "captcha" : "incorrect",';
} 





$errors = rtrim($errors,",");

	
if (!$errors) {
	// Check if upload corresponds to this chaos
	if (preg_match("/^[0-9]+$/",$_POST["chaosid"]) && preg_match("/^[0-9a-z]+$/",$_POST["chaosuploadcode"])) {
		$row = $db->query("select * from chaos_upload_code where idchaos=".$_POST["chaosid"]." and code='".$_POST["chaosuploadcode"]."'");
		if (count($row)) {
			$idchaos = $_POST["chaosid"];
		}
		$db->nonquery("delete from chaos_upload_code where idchaos=".$_POST["chaosid"]."  and code='".$_POST["chaosuploadcode"]."'");
	}

	
	$captcha->drop($_POST["captchakey"]);

	$url = $_POST["url"]; 
	
	if ($isupdate) {
		$result = $item->updateItem($_POST["updateid"],$_POST["uploadname"],$_POST["uploaddescription"],$url);
		if ($result) { $tags->setTags($_POST["uploadtags"],$_POST["updateid"]); }
	} 
	echo '{"Result" : "Success", "Uploadname" : "'.$_POST["uploadname"].'", "Id" : "'.$result.'"}';
	
} else {
	echo '{"Result" : "Error" , '.$errors.'}';
}

}

?>
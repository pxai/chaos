<?php
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

$isupdate = (preg_match("/^[0-9]+$/",$_POST["updateid"]))?true:false;
$isdelete = (preg_match("/^[0-9]+$/",$_POST["deleteid"]))?true:false;

// Is a delete?
if ($isdelete) {
	if ($result = $item->deleteItem($_POST["deleteid"])) {
		echo '{"Result" : "Success" }';
	} else {
		echo '{"Result" : "Error" }';
	}
	
} else {

// check name
if (!preg_match("/^[A-Za-z0-9]+[A-Z\sa-z0-9\-\_\.]*$/",$_POST["uploadname"]))  {
			$errors .= ' "name" : "incorrect",';
}


// check tags
if ($_POST["uploadtags"]!="" && !preg_match("/^[A-Za-z0-9]+[A-Za-z0-9\s\-\_\.\,]*$/",$_POST["uploadtags"])) {
			$errors .= ' "tags" : "incorrect",';
} 

// check type
if (!$isupdate && !preg_match("/^[0-9]+$/",$_POST["uploadtype"]) ) {
			$errors .= ' "type" : "incorrect",';
}

// check url
if ($_POST["uploadtype"]!=7  && !preg_match($config["rx-url"],$_POST["url"])) {
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

	
	//$captcha->drop($_POST["captchakey"]);

	if ($isupdate) {
		$result = $item->updateItem($_POST["updateid"],$_POST["uploadname"],$_POST["uploaddescription"],$_POST["url"]);
		if ($result) { $tags->setTags($_POST["uploadtags"],$_POST["updateid"]); }
	} else {
		$result = $item->createItem($idchaos,$_POST["uploadname"],$_POST["uploaddescription"],$_POST["uploadtype"],$_POST["url"]);
		$tags->setTags($_POST["uploadtags"],$result);
	}

	echo '{"Result" : "Success", "Uploadname" : "'.$_POST["uploadname"].'", "Id" : "'.$result.'"}';
	
} else {
	echo '{"Result" : "Error" , '.$errors.'}';
}

}

?>
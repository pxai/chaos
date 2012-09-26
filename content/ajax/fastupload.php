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

/*
// check url
if ($_POST["uploadtype"]!=7  && !preg_match($config["rx-url"],$_POST["url"])) {
			$errors .= ' "url" : "incorrect", ';
} 

// check description in text items
if ($_POST["uploadtype"]==7  && trim($_POST["uploaddescription"])=="") {
			$errors .= ' "description" : "incorrect", ';
} 
*/
// check captcha
if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
		$errors .= ' "captcha" : "incorrect",';
		if ($_FILES['uploadfile']['name']) {
			header("Location: index.php?p=".$chaos->current["name"]."&op=newitem&error=captcha");
		}
} 


// Check if upload corresponds to this chaos
if (preg_match("/^[0-9]+$/",$_POST["chaosid"]) && preg_match("/^[0-9A-Za-z]+$/",$_POST["chaosuploadcode"])) {
	$row = $db->query("select * from chaos_upload_code where idchaos=".$_POST["chaosid"]." and code='".$_POST["chaosuploadcode"]."'");
	if (count($row)) {
		$idchaos = $_POST["chaosid"];
	}
	$db->nonquery("delete from chaos_upload_code where idchaos=".$_POST["chaosid"]."  and code='".$_POST["chaosuploadcode"]."'");
} else {
	$errors .= ' "uploadid" : "incorrect",';
}


$chaos->getChaos($idchaos);

if (!$chaos->hasPermission($idchaos,$_SESSION["iduser"])) {
		$errors .= ' "permission" : "denied", ' ;
}

if (!$errors && $_POST["url"] != "") {
	if (!preg_match($config["rx-url"],$_POST["url"])) {
		$errors .= ' "url" : "incorrect", ';
	} else {
		$newid = $item->createItem($idchaos,$_POST['url'],"",5,$_POST['url']);
		echo '{ "Result" : "Success" , "Newid" : "'.$newid.'", "Name" : "'.$chaos->current["name"].'"  }';
		//header("Location: ?p=".$chaos->current["name"]);
	}
	
} elseif (!$errors && $_POST["uploaddescription"] != "") {
		$title = substr(trim($_POST["uploaddescription"]),0,20);
		$newid = $item->createItem($idchaos,$title,$_POST["uploaddescription"],7,"");
		echo '{ "Result" : "Success" , "Newid" : "'.$newid.'", "Name" : "'.$chaos->current["name"].'" }';
		//header("Location: ?p=".$chaos->current["name"]);
	
} elseif (!$errors && $_FILES['uploadfile']['name']) {

	/*  if (!preg_match("/(gif|jpg|jpeg|png)$/",$_FILES['user_file']['name'][$i])) {
	 echo "I asked for an image...";
	} else {
	*/
	 
	if ($_FILES["uploadfile"]["size"]>= $config["upload_size"]) {
		$errors .= ' "size" : "incorrect", ';
	}
	 
	$errors = rtrim($errors,",");


	if (!$errors) {

		$ext = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);

		$type = $item->getType($ext);

		$newid = $item->createItem($idchaos,$_FILES['uploadfile']['name'],"",$type,$_FILES['upload_file']['name']);
		//$newid = 666;

		$newfilename = $sec->randomstring(16);

		$upload_dir = $config["upload_dir"]. "items/".($newid %1024);
		mkdir($upload_dir,0777,true);
		$upload_file = $upload_dir."/".$newfilename.".".$ext;
				 

		if (is_uploaded_file($_FILES['uploadfile']['tmp_name'])) {
			if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload_file)) {
				/* Great success... */
				$url = ($_FILES['uploadfile']['name'])?$upload_file:$_POST["url"];
				$item->updateItem ($newid,$_FILES['uploadfile']['name'],"",$url);
				$captcha->drop($_POST["captchakey"]);
				//echo '{ "Result" : "Success" , "Newid" : "'.$newid.'" , "Name" : "'.$_FILES['upload_file']['name'].'", "Ext" : "'.$ext.'","Size" : "'.$_FILES['upload_file']['size'].'",  }';
				header("Location: ?p=preview&new=".$newid);
			} else {
				$errors .= ' "file" : "Error moving file '.$upload_file.'", ';
				$db->nonquery("delete from item where id=" .$newid);
			}
		} else {
				$errors .= ' "file" : "Error on uploaded file", ';
				$db->nonquery("delete from item where id=" .$newid);
		}
	} else {
				$errors .= ' "file" : "Error uploading file", ';
	}
}



$errors = rtrim($errors,",");

	
if ($errors) {
	
	echo '{"Result" : "Error" , '.$errors.'}';
}


?>
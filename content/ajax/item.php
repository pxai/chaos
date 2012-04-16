<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* item.php
* ajax handler for upload
* Expected data:
   id
 */

$sql = "";
$exist = false;
$errors = "";
$idchaos = 0;



// check id
if ($_POST["id"] !="" && !preg_match("/^[0-9]+$/",$_POST["id"]))  {
			$errors .= ' "id" : "incorrect",';
} elseif (trim($_POST["id"]) != "") {


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
	
			$result = $item->createItem($idchaos,$_POST["uploadname"],$_POST["uploadtype"],$_POST["url"]);
			$tags->setTags($_POST["uploadtags"],$result);
	
		echo '{"Result" : "Success", "Uploadname" : "'.$_POST["uploadname"].'" , "Id" : "'.$result.'"}';
		
	} else {
		echo '{"Result" : "Error" , '.$errors.'}';
	}
	
	
} elseif ($_GET["op"] == "getitem" && preg_match("/^[0-9]+$/",$_GET["id"])) {
		echo $item->getItem($_GET["id"]);
} elseif ($_GET["op"] == "getitemfull" && preg_match("/^[0-9]+$/",$_GET["id"])) {
		echo $item->getItem($_GET["id"],1);
} elseif ($_GET["op"] == "getitemjson" && preg_match("/^[0-9]+$/",$_GET["id"])) {
		echo $item->getItemJson($_GET["id"]);
} elseif ($_GET["op"] == "getitem" && preg_match("/^[0-9]+$/",$_GET["last"]) && preg_match("/^[0-9]+$/",$_GET["chaos"])) {
		echo $item->getLasts($_GET["last"],$_GET["chaos"]);
}

?>
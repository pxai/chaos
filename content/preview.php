<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


	$name = "";
	$description = "";
	$tag = "";
	
	if (preg_match("/^[0-9]+$/",$_GET["new"])) {
		$item->selectItem($_GET["new"]);	
		if ($item->isOwner($_GET["new"])) {
		
			$name = $item->current["name"];
			$description = $item->current["description"];
			$tag = $item->current["tags"];
		
			$errors = array();
			if ($_POST["linksavebutton"]!="" && preg_match("/^[0-9]+$/",$_POST["updateid"])) {
			
				$name = $_POST["uploadname"];
				$description = $_POST["uploaddescription"];
				$tag = $_POST["uploadtags"];
				
				// check name
				if (!preg_match($config["rx-name"],$_POST["uploadname"]))  {
					$errors["name"]= _("Format incorrect");
				}
		
				// check tags
				if ($_POST["uploadtags"]!="" && !preg_match($config["rx-tags"],$_POST["uploadtags"])) {
						$errors["tags"]= _("Format incorrect");;
				} 
			
				// Check desc
				if (trim($_POST["uploaddescription"])=="" && $item->current["idtype"] == 7) {
					$errors["description"] = _("Description can't be blank in online text");
				}			
			
				if (!$errors) {
					$item->updateItem ($_GET["new"],$_POST["uploadname"],$_POST["uploaddescription"],$item->current["url"]);
					if ($_POST["uploadtags"])
						$tags->setTags($_POST["uploadtags"],$_GET["new"]);
					header("Location: ?p=".$item->current["chaosname"]);
				}
			}

?>
<?php
	include_once "content/head.php";
?>
<div id="dialogpreview" class="signform">
	<form name="preview" method="post" action="?p=preview&new=<?=$item->current["id"]?>">
	<fieldset>
		<span id="uploadlog" class="log"></span>
		<input type="hidden" name="updateid" id="updateid" value="<?=$item->current["id"]?>" />
		<input type="hidden" name="uploadtype" id="uploadtype" value="" />
		<label for="uploadname" class="required">* <?=_("Name")?></label><br />
		<input type="text" name="uploadname" id="uploadname" value="<?=$name?>" size="20" /><span id="uploadnamelog" class="log"><?=$errors["name"]?></span><br />
		<label for="uploaddescription"><?=_("Description")?></label><br />
		<textarea name="uploaddescription" id="uploaddescription"><?=$description?></textarea><span id="uploaddescriptionlog" class="log"><?=$errors["description"]?></span><br />
		<label for="tags"><?=_("Tags")?></label><br />
		<input type="text" name="uploadtags" id="uploadtags" value="<?=$tag?>" size="30" /><span id="uploadtagslog" class="log"><?=$errors["tags"]?></span><br / -->
				<input type="submit" name="linksavebutton" id="linksavebutton" value="<?=_("Save")?>" /><br />
	</fieldset>
</form>
</div>
<?php
		}
	}
?>


<?php
	include_once "content/footer.php";
?>
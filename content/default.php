<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');
 if (!$chaos->hasReadPermission($chaos->current["id"],$_SESSION["iduser"])) {
	 header("Location: ?");
	}
?>
<?php
	include_once "content/head.php";
?>
<div id="items">
<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)">

<?php include_once "content/upload.php"; ?>
<?php include_once "content/uploaddrop.php"; ?>
<?php

	switch ($op) {
		case "config" : 
						include_once "content/config.php";
						break;
		case "newitem" : 
						include_once "content/newitem.php";
						break;
		default:
					?>
					<div id="showitem" class="dialog"></div>
					<?php
					if ($chaos->current["id"]) 
						echo $item->getLasts(0,$chaos->current["id"]);
					else
						echo $item->getLasts(0);
		break;
	}
?>
</div>
</div>
<div id="divmore"><a href="<?=$chaos->current["id"]?>" title="<?=_("Older items")?>" id="more"><?=_("Older...")?></a></div>

<?php
	include_once "content/footer.php";
?>
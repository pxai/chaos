<?php
	include_once "content/head.php";
?>
<div id="items">
<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)">
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
						echo $item->getLasts(10,$chaos->current["id"]);
					else
						echo $item->getLasts();
		break;
	}
?>
</div>
</div>

<?php
	include_once "content/footer.php";
?>
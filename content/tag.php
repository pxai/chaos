<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

 if (!preg_match($config["rx-tags"],$_GET["tag"])) {
	 header("Location: ?");
	}
?>
<?php
	include_once "content/head.php";
?>
<div id="items">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
<?php
		echo $item->getByTag($_GET["tag"],10);
?>
</div>
</div>

<?php
	include_once "content/footer.php";
?>
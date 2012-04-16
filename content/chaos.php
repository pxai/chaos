<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');
	include_once "content/head.php";
?>
<div id="items">
<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)">

<?php 
	echo $item->getLasts(10,$chaos->current["id"]);
?>
</div>
</div>
<?php
	include_once "content/footer.php";
?>
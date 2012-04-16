<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

 if (!$user->logged) {
	 header("Location: ?");
	}
?>
<?php
	include_once "content/head.php";
?>
<div id="items">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">

<div class="signform">
	<div class="formtitle"><?=_("My chaos")?></div>
<fieldset>
<?php

		echo $chaos->getUserChaos($_SESSION["iduser"]);
?>
</fieldset>
</div>
</div>
</div>

<?php
	include_once "content/footer.php";
?>
<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you'); ?>

<div id="dialoguploaddrop" class="dialog">
	<form name="" method="post" action="index.php?p=ajax/dragdrop" enctype="multipart/form-data">
	<fieldset>
		<span id="uploaddroplog" class="log"></span>
		<input type="hidden" name="chaosiddrop" id="chaosiddrop" value="<?=$chaos->current["id"]?>" />
		<input type="hidden" name="chaosuploaddropcode" id="chaosuploaddropcode" value="" />
		<label for="uploaddropname"><?=_("Name")?></label><br />
		<input type="text" name="uploaddropname" id="uploaddropname" value="" size="20" /><span id="uploaddropnamelog" class="log"></span><br />
		<label for="tags"><?=_("Tags")?></label><br />
		<input type="text" name="uploaddroptags" id="uploaddroptags" value="" size="30" /><span id="uploaddroptagslog" class="log"></span><br />
		<label for="uploaddroptype"><?=_("uploaddrop type")?><span id="uploaddroptype"></span></label><br />
		<ul id="uploaddroptype">
		<? //=$item->loadType()?>
		</ul>
		<input type="submit" name="linkuploaddropbutton" id="linkuploaddropbutton" value="<?=_("Upload")?>" /><br />
	</fieldset>
</form>
</div>
<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you'); ?>
<!--script type="text/javascript" src="js/create.php"></script-->
<div id="dialogfastupload" class="dialog">
	<form name="" method="post" action="ajax/fastupload">
	<fieldset>
		<span id="uploadlog" class="log"></span>
		<input type="hidden" name="chaosid" id="chaosid" value="<?=$chaos->current["id"]?>" />
		<input type="hidden" name="chaosuploadcode" id="chaosuploadcode" value="" />
		<div id="linkuploadform">
				<label for="url"><?=_("Url")?></label><br />
				<input type="text" name="url" id="url" value="" size="40" /><br />
		</div> 
		<div id="fileuploadform">
			<div>- <?=_("Or")?> -</div>
				<label for="uploadfile"><?=_("File")?></label><br />
				<input type="file" name="uploadfile" id="uploadfile" value=""  /><br />
		</div>

		<div id="textuploadform">
			<div>- <?=_("Or")?> -</div>
			<label for="uploaddescription"><?=_("Description")?></label><br />
			<textarea name="uploaddescription" id="uploaddescription"></textarea><span id="uploaddescriptionlog" class="log"></span><br />
		</div>
		<div id="uploadcaptcha"></div>
				<input type="button" name="linkuploadbutton" id="linkuploadbutton" value="<?=_("Upload")?>" /><br />
	</fieldset>
</form>
</div>
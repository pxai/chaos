<div id="dialogupload" class="dialog">
	<form>
	<fieldset>
		<span id="uploadlog" class="log"></span>
		<input type="hidden" name="chaosid" id="chaosid" value="<?=$chaos->current["id"]?>" />
		<input type="hidden" name="chaosuploadcode" id="chaosuploadcode" value="" />
		<label for="uploadname" class="required">* <?=_("Name")?></label><br />
		<input type="text" name="uploadname" id="uploadname" value="" size="20" /><span id="uploadnamelog" class="log"></span><br />
		<label for="uploaddescription"><?=_("Description")?></label><br />
		<textarea name="uploaddescription" id="uploaddescription"></textarea><span id="uploaddescriptionlog" class="log"></span><br />
		<label for="tags"><?=_("Tags")?></label><br />
		<input type="text" name="uploadtags" id="uploadtags" value="" size="30" /><span id="uploadtagslog" class="log"></span><br / -->
		<div id="linkuploadform" class="dialog">
				<label for="url"><?=_("Url")?></label><br />
				<input type="text" name="url" id="url" value="" size="40" /><br />
		</div> 
		<div id="uploadcaptcha"></div>
				<input type="button" name="linkuploadbutton" id="linkuploadbutton" value="<?=_("Upload")?>" /><br />
	</fieldset>
</form>
</div>
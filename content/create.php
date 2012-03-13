<div id="dialogcreate" class="dialog">
	<form>
	<fieldset>
		<span id="createlog"></span>
		<label for="chaosname"><?=_("Chaos name")?></label><br />
		<input type="text" name="chaosname" id="chaosname" value="" /><span id="chaosnamelog"></span><br />
		<input type="checkbox" name="privatechaos" id="privatechaos" value="0" />
		<label for="privatechaos"><?=_("Private chaos")?></label><br />
		<div id="createcaptcha"></div>
		<input type="button" name="submitchaos" id="submitchaos" value="<?=_("Create chaos")?>" /><br />
	</fieldset>
</form>
</div>
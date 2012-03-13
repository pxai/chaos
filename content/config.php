<div id="dialogconfig" class="dialog">
	<form>
	<fieldset>
		<label for="bgcolor"><?=_("Background color")?></label><br />
		<input type="text" name="bgcolor" id="bgcolor" value="#<?=$chaos->current["bgcolor"]?>" size="7" /><br />
		<label for="navcolor"><?=_("Navigation color")?></label><br />
		<input type="text" name="fgcolor" id="fgcolor" value="#<?=$chaos->current["fgcolor"]?>" size="7" /><br />
		<div id="configcaptcha"></div>
		<input type="button" name="submitconfig" id="submitconfig" value="<?=_("Change chaos")?>" /><br />
	</fieldset>
</form>
</div>
<div id="dialogcreate" class="dialog">
	<form>
	<fieldset>
		<span id="createlog"></span>
		<label for="chaosname"><?=_("Chaos name")?></label><br />
		<input type="text" name="chaosname" id="chaosname" value="" /><span id="chaosnamelog"></span><br />
		<input type="checkbox" name="privatechaos" id="privatechaos" value="0" />
		<label for="privatechaos"><?=_("Private chaos")?></label><br />
		<?=$captcha->create()?>
		<div id="privatechaosform">
			<p><?=_("Please provide some Question/Answer to manage your chaos")?></p>
			<label for="securityquestion"><?=_("Question")?></label><br />
			<input type="text" name="securityquestion" id="securityquestion" value=""  size="40"/><br />
			<label for="securityanswer"><?=_("Answer")?></label><br />
			<input type="text" name="securityanswer" id="securityanswer" value="" size="30" /><br />
		</div>
		<input type="button" name="submitchaos" id="submitchaos" value="<?=_("Create chaos")?>" /><br />
	</fieldset>
</form>
</div>
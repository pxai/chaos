<div id="dialogcreate" class="dialog">
	<form>
	<fieldset>
		<span id="createlog" class="log"></span>
		<label for="chaosname"><?=_("Chaos name")?></label><br />
		<input type="text" name="chaosname" id="chaosname" value="" /><span id="chaosnamelog" class="log"></span><br />
		<input type="checkbox" name="privatechaos" id="privatechaos" value="0" />
		<label for="privatechaos"><?=_("Private chaos")?></label> <abbr title="<?=_("Not public, not searchable")?>">?</abbr><br />
		<?php if (!$user->logged) { ?>
			<label for="anonymouschaos"><?=_("You're not logged in. New chaos will be anonymous.")?></label>
		<?php		
		 } else {
		?>
		<input type="checkbox" name="anonymouschaos" id="anonymouschaos" value="0" />
		<label for="anonymouschaos"><?=_("Anonymous chaos")?></label> <abbr title="<?=_("Signup not required")?>">?</abbr><br />
		<?php
			}
		?>
		<div id="createcaptcha"></div>
		<div id="securityquestiondiv">
		<label for="securityquestion"><?=_("Security question")?></label><br />
		<input type="text" name="securityquestion" id="securityquestion" value="" size="30"/><span id="securityquestionlog" class="log"></span><br />
		<label for="securityanswer"><?=_("Security answer")?></label><br />
		<input type="text" name="securityanswer" id="securityanswer" value="" size="30"/><span id="securityquestionlog" class="log"></span><br />
		</div>
		<input type="button" name="submitchaos" id="submitchaos" value="<?=_("Create chaos")?>" /><br />
	</fieldset>
</form>
</div>
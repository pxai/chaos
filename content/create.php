<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

	include_once "content/head.php";
?>
<script type="text/javascript" src="js/create.php"></script>
<div id="dialogcreate" class="signform">
	<div class="formtitle"><?=_("Create new chaos")?></div>

	<form>
	<fieldset>
		<span id="createlog" class="log"></span>
		<label for="chaosname"><?=_("Chaos name")?></label><br />
		<input type="text" name="chaosname" id="chaosname" value="" /><span id="chaosnamelog" class="log"></span><br />
		<?php if (!$user->logged) { ?>
			<label for="anonymouschaos"><?=_("You're not logged in. New chaos will be anonymous.")?></label>
		<?php		
		 } else {
		?>
		<input type="radio" name="chaostype" id="privatechaos" value="1" />
		<label for="privatechaos"><?=_("Private chaos")?></label> <abbr title="<?=_("You rule, not public, not searchable")?>">?</abbr><br />
		<input type="radio" name="chaostype" id="publicchaos" value="2" />
		<label for="publicchaos"><?=_("Public chaos")?></label> <abbr title="<?=_("You rule, public and searchable")?>">?</abbr><br />
		<input type="radio" name="chaostype" id="anonymouschaos" value="3" />
		<label for="anonymouschaos"><?=_("Anonymous chaos")?></label> <abbr title="<?=_("No one rules, public and searchable")?>">?</abbr><br />
		<?php
			}
		?>
		<div id="createcaptcha"></div>
		<input type="button" name="submitchaos" id="submitchaos" value="<?=_("Create chaos")?>" /><br />
	</fieldset>
</form>
</div>
<?php
	include_once "content/footer.php";
?>
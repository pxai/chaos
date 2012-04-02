<?php
//	include_once "content/head.php";
	if (preg_match($config["rx-chaosname"],$_GET["c"]) && $chaos->checkExists($_GET["c"])) {
		$chaosname = $_GET["c"];
	}
	
?>
<script type="text/javascript" src="js/config.php"></script>
<div id="dialogconfig" class="signform">
	<form>
	<fieldset>
			<span id="configlog" class="log"></span>
		<input type="hidden" name="chaosid" id="chaosid" value="<?=$chaos->current["id"]?>" />
		<label for="bgcolor"><?=_("Background color")?></label><br />
		<input type="text" name="bgcolor" id="bgcolor" value="<?=$chaos->current["bgcolor"]?>" size="7" /><span id="bgcolorlog" class="log"></span><br />
		<label for="fgcolor"><?=_("Navigation color")?></label><br />
		<input type="text" name="fgcolor" id="fgcolor" value="<?=$chaos->current["fgcolor"]?>" size="7" /><span id="fgcolorlog" class="log"></span><br />
		<label for="bgimage"><?=_("Background image url")?></label><br />
		<input type="text" name="bgimage" id="bgimage" value="<?=$chaos->current["bgimage"]?>" size="20" /><span id="bgimagelog" class="log"></span><br />
		<label for="algorythm"><?=_("Default algorythm")?></label><br />
		<input type="text" name="algorythm" id="algorythm" value="<?=$chaos->current["algorythm"]?>" size="20" /><span id="algorythmlog" class="log"></span><br />
		<div id="configcaptcha"></div>
		<input type="button" name="submitconfig" id="submitconfig" value="<?=_("Change chaos")?>" /><br />
	</fieldset>
</form>
</div>
<?php
	//include_once "content/footer.php";
?>
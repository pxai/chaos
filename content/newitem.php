<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you'); ?>

<script type="text/javascript" src="js/fastupload.php?p=<?=$chaos->current["name"]?>"></script>
<div id="dialogupload" class="signform">
	<div class="formtitle"><?=_("Upload")?></div>

	<form method="post" id="fastuploadform" action="?p=ajax/fastupload" enctype="multipart/form-data">
	<div class="tabmenu">
		<span class="current" id="span-linkuploadform"><a href="linkuploadform" title="<?=_("Upload Url")?>" class="atab"><?=_("Upload Url")?></a></span>
		<span id="span-fileuploadform"><a href="fileuploadform" title="<?=_("Upload File")?>" class="atab"><?=_("Upload File")?></a></span>
		<span id="span-textuploadform"><a href="textuploadform" title="<?=_("Upload Text")?>" class="atab"><?=_("Upload Text")?></a></span>
	</div>
	<fieldset>
		<span id="uploadlog" class="log"></span>
		<input type="hidden" name="chaosid" id="chaosid" value="<?=$chaos->current["id"]?>" />
		<input type="hidden" name="chaosuploadcode" id="chaosuploadcode" value="" />
		<div id="linkuploadform" class="tabvisible">
				<label for="url"><?=_("Url")?></label><br />
				<input type="text" name="url" id="url" value="<?=$_POST["url"]?>" size="40" /><br />
		</div> 
		<div id="fileuploadform" class="tab">
				<label for="uploadfile"><?=_("File")?></label><br />
				<input type="file" name="uploadfile" id="uploadfile" value=""  /><br />
		</div>
		<div id="textuploadform" class="tab">
			<label for="uploaddescription"><?=_("Description")?></label><br />
			<textarea name="uploaddescription" id="uploaddescription" ><?=$_POST["uploaddescription"]?></textarea><span id="uploaddescriptionlog" class="log"></span><br />
		</div>
		<div id="uploadcaptcha"></div>
		<input type="button" name="linkuploadbutton" id="linkuploadbutton" value="<?=_("Upload")?>" /><br />
	</fieldset>
</form>
</div>
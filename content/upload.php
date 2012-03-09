<div id="dialogupload" class="dialog">
	<form>
	<fieldset>
		<label for="uploadname"><?=_("Name")?></label><br />
		<input type="text" name="uploadname" id="uploadname" value="" size="20" /><br />
		<label for="tags"><?=_("Tags")?></label><br />
		<input type="text" name="uploadtags" id="uploadtags" value="" size="30" /><br />
		<label for="uploadtype"><?=_("Upload type")?><span id="uploadtype"></span></label><br />
		<ul id="uploadtype">
		<li><a href="" title="<?=_("Upload image")?>" id="uploadimage"><img src="images/picture.gif" title="<?=_("Upload image")?>" alt="<?=_("Upload image")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload video")?>" id="uploadvideo"><img src="images/video.gif" title="<?=_("Upload video")?>" alt="<?=_("Upload video")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload music")?>" id="uploadmusic"><img src="images/music.gif" title="<?=_("Upload music")?>" alt="<?=_("Upload music")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload file")?>" id="uploadfile"><img src="images/file.gif" title="<?=_("Upload file")?>" alt="<?=_("Upload file")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload link")?>" id="uploadlink"><img src="images/link.gif" title="<?=_("Upload link")?>" alt="<?=_("Upload link")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload rss")?>" id="uploadrss"><img src="images/rss.gif" title="<?=_("Upload rss")?>" alt="<?=_("Upload rss")?>" border="0"/></a></li>
		<li><a href="" title="<?=_("Upload text")?>" id="uploadtext"><img src="images/text.gif" title="<?=_("Upload text")?>" alt="<?=_("Upload text")?>" border="0"/></a></li>
		</ul>
		<input type="button" name="uploadbutton" id="uploadbutton" value="<?=_("Upload")?>" /><br />
	</fieldset>
</form>
</div>
<?php
/**
* nav.php
* 
*/
?>
<nav>
<a href="<?=$link->url("")?>" title="<?=_("home")?>" id="logo"><img src="images/chaoslogo.jpg" alt="<?=_("chaos logo")?>" title="<?=_("chaos logo")?>" border="0" /></a>
<a href="<?=$link->url("upload")?>" title="<?=_("upload")?>"><img src="images/upload.png" alt="<?=_("Upload content")?>" title="<?=_("Upload content")?>" border="0" /><span><?=_("Upload")?></span></a>
<a href="<?=$link->url("create")?>" title="<?=_("create_chaos")?>"><img src="images/add.png" alt="<?=_("create new chaos")?>" title="<?=_("create new chaos")?>" border="0" /><span><?=_("Create new chaos")?></span></a>
<a href="<?=$link->url("config")?>" title="<?=_("create_chaos")?>"><img src="images/config.png" alt="<?=_("Config chaos")?>" title="<?=_("Config chaos")?>" border="0" /><span><?=_("Config chaos")?></span></a>
<input type="text" /><a href="change_style.php" title="<?=_("change_style")?>"><img src="images/search.png" alt="<?=_("search")?>" title="<?=_("search")?>" border="0" /></a>
</nav>
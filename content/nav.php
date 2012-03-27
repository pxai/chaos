<?php
/**
* nav.php
* 
*/
?>
<a href="<?=$link->url("")?>" title="<?=_("home")?>" id="logo"><img src="images/chaoslogo.jpg" alt="<?=_("chaos logo")?>" title="<?=_("chaos logo")?>" border="0" /></a>
<?php
	if ($chaosname != "") {
		?>
		<a href="<?=$link->url($chaosname)?>" title="<?=sprintf(_("Go to %s chaos"),$chaosname)?>" id="chaoslink">/<?=$chaosname?></a>
		<?php
		}
?>
<div id="nav">
<nav>
<a href="<?=$link->url("upload")?>" title="<?=_("upload")?>" id="upload"><img src="images/upload.png" alt="<?=_("Upload content")?>" title="<?=_("Upload content")?>" border="0" /><span><?=_("Upload")?></span></a>
<a href="<?=$link->url("create")?>" title="<?=_("Create chaos")?>" id="createchaos"><img src="images/add.png" alt="<?=_("create new chaos")?>" title="<?=_("create new chaos")?>" border="0" /><span><?=_("Create new chaos")?></span></a>
<a href="<?=$link->url("config")?>" title="<?=_("Config chaos")?>" id="configchaos"><img src="images/config.png" alt="<?=_("Config chaos")?>" title="<?=_("Config chaos")?>" border="0" /><span><?=_("Config chaos")?></span></a>
<input type="text" /><a href="search.php" title="<?=_("search")?>"><img src="images/search.png" alt="<?=_("search")?>" title="<?=_("search")?>" border="0" /></a>
<?php if ($user->logged) { ?><?=_("Hi")?> <a href="<?=$link->url("profile")?>" title="<?=_("Change profile")?>"><span><?=$_SESSION["login"]?></span></a>
<?php } else { ?><a href="<?=$link->url("signin")?>" title="<?=_("Sign in")?>" id="signinchaos"><img src="images/user.png" alt="<?=_("Sign in")?>" title="<?=_("Sign in")?>" border="0" /><span><?=_("Sign in")?></span></a>
<?php } ?>
</nav>
</div>
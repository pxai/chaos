<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

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

<?php if ($chaos->hasPermission($chaos->current["id"], $_SESSION["iduser"])): ?>
<span>
<a href="<?="?p=".$chaos->current["name"]."&amp;op=newitem"?>" title="<?=_("upload")?>"><img src="images/upload.png" alt="<?=_("Upload content")?>" title="<?=_("Upload content")?>" border="0" /><span><?=_("Upload")?></span></a>
</span>
<?php endif; ?>
<span>
<a href="<?=$link->url("create")?>" title="<?=_("Create chaos")?>"><img src="images/add.png" alt="<?=_("create new chaos")?>" title="<?=_("create new chaos")?>" border="0" /><span><?=_("Create new chaos")?></span></a>
</span>
<?php if ($_SESSION["iduser"] && $chaos->current["iduser"] == $_SESSION["iduser"]): ?>
<span>
<a href="<?="?p=".$chaos->current["name"]."&amp;op=config"?>" title="<?=_("Config chaos")?>" id="configchaos"><img src="images/config.png" alt="<?=_("Config chaos")?>" title="<?=_("Config chaos")?>" border="0" /><span><?=_("Config chaos")?></span></a>
</span>
<?php endif; ?>
<span>
<input type="text" id="searchterm" name="searchterm" /><a href="search.php" title="<?=_("search")?>" id="searchchaos"><img src="images/search.png" alt="<?=_("search")?>" title="<?=_("search")?>" border="0" /></a>
</span>
<span>
<img src="images/user.png" alt="<?=_("Sign in")?>" title="<?=_("Sign in")?>" border="0" id="usericon" />
<?php if ($user->logged) { ?>
	<div id="ddownuser">
		<div><a href="<?=$link->url("profile")?>" title="<?=_("Change profile")?>" ><?=_("Profile")?></a></div>
		<div><a href="<?=$link->url("mychaos")?>" title="<?=_("My chaos")?>" ><?=_("My Chaos")?></a></div>
		<div><a href="<?=$link->url("signout")?>" title="<?=_("Sign out")?>"><?=_("Sign out")?></a></div>
	</div>
<?=_("Hi")?> 
	<!-- a href="<?=$link->url("profile")?>" title="<?=_("Change profile")?>"><span><?=$_SESSION["login"]?></span></a -->
<?php } else { ?>	
	<div id="ddownuser">
		<div><a href="<?=$link->url("signin")?>" title="<?=_("Sign in")?>" id="signinchaos"><?=_("Sign in")?></a></div>
		<div><a href="<?=$link->url("signup")?>" title="<?=_("Sign up")?>"><?=_("Sign up")?></a></DIV>
	</div>
<?php } ?>
</span>
</div>
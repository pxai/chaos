<?php

	$errors["email"] = "";
	$ok = 0;  
	
	if ($_POST["recoverbutton"] != "") {
		if (!preg_match($config["rx-email"],$_POST["email"]) ) {
			$errors["email"] = _("Email format incorrect: ");
		} else {
			if (!$user->recovery($_POST["email"],$mail)) {
				$errors["email"] = _("Email doesn't exists");
			} 
		}
	
	}
	
	if (!$chaos->checkExists($chaosname)) {
		$currentbg = $chaos->current["bgcolor"];
		$currentfg = $chaos->current["fgcolor"];
		$currentimage = $chaos->current["bgimage"];
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
	include_once "content/head.php";
	include_once "content/jquery.php";
?>
</head>
<body>
<header>
<?php include_once "content/nav.php"; ?>
</header>
<div id="content">
<?php include_once "content/create.php"; ?>
<?php include_once "content/config.php"; ?>
<?php include_once "content/upload.php"; ?>
<div id="recovery" class="signform">
	<div class="formtitle"><?=_("Account recovery")?></div>
	<?php if (preg_match("/^[a-zA-Z0-9]{40}$/",$_GET["code"]) && preg_match("/^[0-9]+$/",$_GET["id"])) { 
		echo $user->resetpassword($_GET["code"],$_GET["id"]);
	} elseif ($errors["email"]!="" || !$_POST["email"]) { ?>
	<form name="recoveryform" method="post" action="?p=recovery">
	<fieldset>
		<span id="recoverylog"><?=$errors["recovery"]?></span>
		<label for="email"><?=_("Email")?></label><br />
		<input type="email" name="email" id="email" value="<?=$_POST["email"]?>" size="30" /><span id="emaillog"><?=$errors["email"]?></span><br />

		<input type="submit" name="recoverbutton" id="recoverbutton" value="<?=_("Recover")?>" /><br />
	</fieldset>

</form>

	<?php } else { ?>
		<p><?=_("Ok, an email has sent to you. Check it out and click on the url to recover and validate your account.")?></p>
	<?php } ?>

</div>
<footer>
<?php
	include_once "content/footer.php";
?>
</footer>
</div>
</body>
</html>
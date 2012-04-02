<?php

	$errors = array();
	
	if ($_POST["signinbutton"] != "") { 
		if (!preg_match($config["rx-username"],$_POST["login"]) && !preg_match($config["rx-email"],$_POST["login"])) {
			$errors["login"] = _("Login format incorrect");
		} 
	
		if (!preg_match($config["rx-password"],$_POST["password"])  ) {
			$errors["password"] =  _("Password format incorrect");
		}
		if ($user->signin($_POST["login"],$_POST["password"])) {
			header("Location: " . "?");
		} else {
			$errors["validation"] = _("Login incorrect");
		}
	}
	
	if (!$chaos->checkExists($chaosname)) {
		$currentbg = $chaos->current["bgcolor"];
		$currentfg = $chaos->current["fgcolor"];
		$currentimage = $chaos->current["bgimage"];
	}
?>
<?php
	include_once "content/head.php";
?>
<div id="signin" class="signform">
	<div class="formtitle"><?=_("Sign in")?></div>
	<form name="signinform" method="post" action="?p=signin">
	<fieldset>
		<span id="signinlog" class="log"><?=$errors["validation"]?></span>
		<label for="login"><?=_("Login or Email")?></label><br />
		<input type="text" name="login" id="login" value="" size="30" /><span id="loginlog" class="log"><?=$errors["login"]?></span><br />
		<label for="password"><?=_("Password")?></label><br />
		<input type="password" name="password" id="password" value="" size="10" /><span  class="log"><?=$errors["password"]?></span><br />

		<input type="submit" name="signinbutton" id="signinbutton" value="<?=_("Sign in")?>" /><br />
	</fieldset>
	<a href="?p=recovery" title="<?=_("Click here to recover your password")?>"><?=_("Forgot your password?")?></a>&nbsp;|&nbsp;
	<a href="?p=signup" title="<?=_("Sign up")?>"><?=_("Sign up")?></a>
</form>
</div>
<?php
	include_once "content/footer.php";
?>
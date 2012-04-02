<?php
	$user->loginrequired();
	$errors = array();


	if ($_POST["profilebutton"] != "" ) {
		if ( $_POST["password1"]!=$_POST["password2"]) {
			$errors["password"] = _("Password mismatch");
		}
		
		if ($_POST["password1"]!="" && !preg_match($config["rx-password"],$_POST["password1"])) {
			$errors["password"] = _("Password format incorrect");
		} 
		
		if (!preg_match($config["rx-username"],$_POST["login"])) {
			$errors["login"] = _("Login format incorrect: use a-zA-Z0-9_-.");
		} 

		if (!preg_match($config["rx-email"],$_POST["email"])) {
			$errors["email"] = _("Email format incorrect");
		} 
	
		if (!$errors) {
			$errors = $user->update($_POST["login"],$_POST["email"],$_POST["password1"]);
		}
			//header("Location: " .$config["default"])
		
	}

	//$userdata = $user->load();	
	
	if (!$chaos->checkExists($chaosname)) {
		$currentbg = $chaos->current["bgcolor"];
		$currentfg = $chaos->current["fgcolor"];
		$currentimage = $chaos->current["bgimage"];
	}
?>
<?php include_once "content/head.php"; ?>
<div id="profile" class="signform">
	<div class="formtitle"><?=_("My profile")?></div>
	<form name="profileform" method="post" action="?p=profile">
	<fieldset>
		<span id="profilelog"></span>
		<label for="login"><?=_("Login")?></label><br />
		<input type="text" name="login" id="login" value="<?=$_SESSION["login"]?>" size="20" /><span id="loginlog"><?=$errors["login"]?></span><br />
		<label for="email"><?=_("Email")?></label><br />
		<input type="text" name="email" id="email" value="<?=$_SESSION["email"]?>" size="30" /><span id="emaillog"><?=$errors["email"]?></span><br />
		<label for="password1"><?=_("Password")?></label><br />
		<input type="password" name="password1" id="password1" value="" size="10" /><span id="passwordlog"><?=$errors["password"]?></span><br />
		<label for="password2"><?=_("Repeat Password")?></label><br />
		<input type="password" name="password2" id="password2" value="" size="10" /><br />

		<input type="submit" name="profilebutton" id="profilebutton" value="<?=_("Update profile")?>" /><br />
	</fieldset>
</form>
</div>
<?php
	include_once "content/footer.php";
?>
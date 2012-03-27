<?php

	$errors = array();


	if ($_POST["signupbutton"] != "" ) {
		if ( $_POST["password1"]!=$_POST["password2"]) {
			$errors["password"] = _("Password mismatch");
		}

		if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
			$errors["captcha"] = _("Captcha incorrect")."<br />";
		}	
	
		if (!preg_match($config["rx-password"],$_POST["password1"])) {
			$errors["password"] = _("Password format incorrect");
		} 
			
		if (!preg_match($config["rx-username"],$_POST["login"])) {
			$errors["login"] = _("Login format incorrect: use a-zA-Z0-9_-.");
		} 

		if (!preg_match($config["rx-email"],$_POST["email"])) {
			$errors["email"] = _("Email format incorrect");
		} 
	
		if (!$errors) {
			$result = $user->signup($_POST["login"],$_POST["email"],$_POST["password1"]);
			if ($result["iduser"] != "") {
				header("Location: " . "?p=signin");
			} else {
				$errors = $result;
			}
		}
			//header("Location: " .$config["default"])
		
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
<div id="signup" class="signform">
	<div class="formtitle"><?=_("Sign up")?></div>

	<form name="signupform" method="post" action="?p=signup">
	<fieldset>
		<span id="signinlog" class="log"></span>
		<label for="login"><?=_("Login")?></label><br />
		<input type="text" name="login" id="login" value="<?=$_POST["login"]?>" size="20" /><span id="loginlog" class="log"><?=$errors["login"]?></span><br />
		<label for="email"><?=_("Email")?></label><br />
		<input type="email" name="email" id="email" value="<?=$_POST["email"]?>" size="30" /><span id="emaillog" class="log"><?=$errors["email"]?></span><br />
		<label for="password1"><?=_("Password")?></label><br />
		<input type="password" name="password1" id="password1" value="" size="10" /><span id="passwordlog" class="log"><?=$errors["password"]?></span><br />
		<label for="password2"><?=_("Repeat Password")?></label><br />
		<input type="password" name="password2" id="password2" value="" size="10" /><br />
		<?php echo $captcha->create();?><?=$errors["captcha"]?>
		<input type="submit" name="signupbutton" id="signupbutton" value="<?=_("Sign up")?>" /><br />
	</fieldset>
</form>
</div>
<footer>
<?php
	include_once "content/footer.php";
?>
</footer>
</div>
</body>
</html>
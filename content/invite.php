<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

	$errors = array();
	$exception = "";

	// Is an acceptation
	if (preg_match("/^[0-9a-zA-Z]+$/",$_GET["code"])) {
		$exception = $user->acceptInvitation($_GET["code"]);
	} elseif ($_GET["op"] == "confirm" && preg_match("/^[0-9]+$/",$_GET["id"])) {

		$user->updateInvitations($_SESSION["iduser"],$_SESSION["email"],$_GET["id"]);
		header("Location: ?p=profile"); 
	} else {
	
		if (preg_match("/^[0-9]+$/",$_GET["id"])) {
			$chaos->getChaos($_GET["id"]);
		}
	
		if (!$chaos->isAdmin()) {
			header("Location: " . "?");
		}  
	
		if ($_POST["invitebutton"] != "" ) {
			if (!$captcha->validate($_POST["captchakey"],$_POST["captcha"])) {
				$errors["captcha"] = _("Captcha incorrect")."<br />";
			}	
	
			if (!preg_match($config["rx-email"],$_POST["email"])) {
				$errors["email"] = _("Email format incorrect");
			} 
	
			if (!$errors) {
			$result = $chaos->invite($_SESSION["email"],$_GET["id"],$chaos->current["name"],$_POST["email"],$_POST["msg"]);
			echo $result;
			}
			//header("Location: " .$config["default"])
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

<?php if (!$exception) { ?>
<div id="signup" class="signform">
	<div class="formtitle"><?=_("Invite uploader")?></div>

	<form name="signupform" method="post" action="?p=invite&id=<?=$chaos->current["id"]?>">
	<fieldset>
		<label for="email"><?=_("Email")?></label><br />
		<input type="email" name="email" id="email" value="<?=$_POST["email"]?>" size="30" /><span id="emaillog" class="log"><?=$errors["email"]?></span><br />
		<label for="msg"><?=_("Message")?></label><br />
		<textarea name="msg" id="msg"><?=$_POST["msg"]?></textarea><br />
		<?php echo $captcha->create(3);?><?=$errors["captcha"]?>
		<input type="submit" name="invitebutton" id="invitebutton" value="<?=_("Send Invitation")?>" /><br />
	</fieldset>
</form>
</div>
<?php  } else { ?>
	<?=$exception?>
<?php  } ?>
<?php
	include_once "content/footer.php";
?>
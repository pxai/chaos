<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

	include_once "content/head.php";
?>
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
<?php
	include_once "content/footer.php";
?>

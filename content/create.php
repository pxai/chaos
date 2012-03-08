<!DOCTYPE HTML>
<html>
<head>
<title> chAoS.cx :: <?=$page?></title>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" /> 
<link rel="alternate" type="application/rss+xml" title="last" href="?rss" />
<link rel="shortcut icon" href="favicon.png" sizes="16x16"/>
<?php
	include_once "content/jquery.php";
?>
<script type="text/javascript">/*<![CDATA[*/
	$(document).ready(function(){
		$('#dialogcreate').dialog({
					autoOpen: false,
					title: <?=_("Create new Chaos")?>,
					width: 400,
					modal: true
					});
		$("#dialogcreate").dialog("open");
	});
	/*]]>*/</script>
</head>
<body>
<header>
<?php include_once "content/nav.php";  ?>
</header>
<div id="content">
create
<div id="dialogcreate">
<form>
<fieldset>
<label for="chaosname"><?=_("Chaos name")?></label><br />
<input type="text" name="chaosname" id="chaosname" value="" /><br />
<input type="checkbox" name="privatechaos" id="privatechaos" value="1" />
<label for="privatechaos"><?=_("Private chaos")?></label><br />
<input type="button" name="submitchaos" id="submitchaos" value="<?=_("Create chaos")?>" /><br />
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
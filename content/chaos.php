<?php
	if (!$chaos->checkExists($chaosname)) {
		header("Location: index.php");
	} else {
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
<script type="text/javascript">
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
alert("Hacemos drag");
}

function drop(ev)
{
//var data=ev.dataTransfer.getData("Text");
//ev.target.appendChild(document.getElementById(data));
ev.preventDefault();
alert("Hacemos drag");
}
</script>
</head>
<body>
<header><div id="header">
<?php include_once "content/nav.php"; ?>
</div></header>
<div id="content">
<?php include_once "content/create.php"; ?>
<?php include_once "content/config.php"; ?>
<?php include_once "content/upload.php"; ?>
<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)">
<div id="items">
<?php 
	echo $item->getLasts();
?>
</div>
</div>
This is personal chaos <?=$chaosname?>
<footer>
<?php
	include_once "content/footer.php";
?>
</footer>
</div>
</body>
</html>
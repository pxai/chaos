<?php
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
<header>
<?php include_once "content/nav.php"; ?>
</header>
<div id="content">
<?php include_once "content/create.php"; ?>
<?php include_once "content/config.php"; ?>
<?php include_once "content/upload.php"; ?>
<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)"></div>
<img id="drag1" src="img_logo.gif" draggable="true"
ondragstart="drag(event)" width="336" height="69" alt="Drag and drop" />
<footer>
<?php
	include_once "content/footer.php";
?>
</footer>
</div>
</body>
</html>
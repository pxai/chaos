<!DOCTYPE HTML>
<html>
<head>
<title> c h A o S (:=X <?=$page?></title>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" /> 
<link rel="alternate" type="application/rss+xml" title="last" href="?rss" />
<link rel="shortcut icon" href="favicon.png" sizes="16x16"/>
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
chaos.cx
<nav><a href="upload.php" title="<?=_("upload")?>"><?=_("upload")?></a></nav>
<nav><a href="create.php" title="<?=_("create_chaos")?>"><?=_("create_chaos")?></a></nav>
<nav><a href="change_style.php" title="<?=_("change_style")?>"><?=_("change_style")?></a></nav>
</header>
<div id="content">
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
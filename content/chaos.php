<!DOCTYPE HTML>
<html>
<head>
<title> chAoS.cx :: <?=$page?></title>
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
<nav>
<a href="/" title="<?=_("home")?>" id="logo"><img src="images/chaoslogo.jpg" alt="<?=_("chaos logo")?>" title="<?=_("chaos logo")?>" border="0" /></a>
<a href="upload.php" title="<?=_("upload")?>"><img src="images/upload.png" alt="<?=_("Upload content")?>" title="<?=_("Upload content")?>" border="0" /><span><?=_("Upload")?></span></a>
<a href="create.php" title="<?=_("create_chaos")?>"><img src="images/add.png" alt="<?=_("create new chaos")?>" title="<?=_("create new chaos")?>" border="0" /><span><?=_("Create new chaos")?></span></a>
<a href="config.php" title="<?=_("create_chaos")?>"><img src="images/config.png" alt="<?=_("Config chaos")?>" title="<?=_("Config chaos")?>" border="0" /><span><?=_("Config chaos")?></span></a>
<input type="text" /><a href="change_style.php" title="<?=_("change_style")?>"><img src="images/search.png" alt="<?=_("search")?>" title="<?=_("search")?>" border="0" /></a>
</nav>
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
<!DOCTYPE HTML>
<html>
<head>
<title> chAoS.cx :: <?php echo $page; ?></title>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="?p=st/css/main.php&c=<?=$chaosname?>" type="text/css" media="screen" /> 
<link rel="alternate" type="application/rss+xml" title="last" href="?rss" />
<link rel="shortcut icon" href="favicon.png" sizes="16x16"/>
<?php
	include_once "content/jquery.php";
?>

</head>
<body>
<div id="header">
<?php include_once "content/nav.php"; ?>
</div>


<?php include_once "content/upload.php"; ?>
<?php include_once "content/uploaddrop.php"; ?>
<script type="text/javascript">


function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
alert("Hacemos drag");
console.log(ev);
}

var newfile = null;

function drop(ev)
{
//var data=ev.dataTransfer.getData("Text");
//ev.target.appendChild(document.getElementById(data));
	ev.preventDefault();
	alert("Hacemos drop");
	//console.log(ev);
  var dt = ev.dataTransfer;  
  var files = dt.files;
  newfile = dt.files;
    
  var formfile = document.getElementById("upload_file");
  
  var count = newfile.length;  
  var formData = new FormData();
  
  var fd = new FormData();  

  
  
fd.append( 'upload_file', newfile[0] );


$.ajax({
  url: 'index.php?p=ajax/dragdrop',
  data: fd,
  processData: false,
  contentType: false,
  dataType:'json',
  type: 'POST',
  success: function(data){
  	if (data.Result == "Success") {
    	alert(data);
   } else {
   	alert("error");
   	}
  }
});

 $("#dialoguploaddrop").dialog("open");
  
    event.stopPropagation();
    
}


</script>
<div id="content">
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

</head>
<body>
<header>
<?php include_once "content/nav.php"; ?>
</header>

<div id="content" ondrop="drop(event)"
ondragover="allowDrop(event)">
<?php include_once "content/create.php"; ?>
<?php include_once "content/config.php"; ?>
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
  
//    for (var i = 0; i < files.length; i++) {  
  ////console.log(files[i]); 
    //  //console.log(" File " + i + ":\n(" + (typeof files[i]) + ") : <" + files[i] + " > " +  
      //    //  files[i].name + " " + files[i].size + "\n");  
				//$("#uploaddropname").val(files[i].name);    			
				//$("#upload_file").attr("value",files[i].name);    			
    		//	//alert(formfile.value);
			    //formData.append(files[i].name, files[i]);
  //  }  
/*
  
  	var xhr = new XMLHttpRequest();
  	xhr.open('POST', "index.php?p=ajax/dragdrop", true);
	xhr.setRequestHeader('Content-Type', 'multipart/form-data');
  	xhr.onload = function(e) {
        if (xhr.responseText) {
            alert(xhr.responseText);
        }
  	 };

  	xhr.send(formData);  

  */  
    //$("#dialogupload").dialog("open");
    //$("#dialoguploaddrop").dialog("open");
    //alert("Vamos a ver:"+$("#upload_file").val());
    //$("#content").text("Cojonudo");

    
    
    /* Prevent FireFox opening the dragged file. */
    event.stopPropagation();
    
}


</script>
<<<<<<< HEAD
=======
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
ondragover="allowDrop(event)">
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847
<div id="items">
<?php 
	echo $item->getLasts();
?>
</div>
<<<<<<< HEAD

=======
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847
</div>

<footer>
<?php
	include_once "content/footer.php";
?>
</footer>
</body>
</html>
<?php
	/**
	* css owned by the chaos
	*
	*/

	header("Content-type: text/css");
	$chaosname = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_STRING);
	// We load chaos data
	if (preg_match($config["rx-chaosname"],$chaosname) && $chaos->checkExists($chaosname)) {
		$currentbg = $chaos->current["bgcolor"];
		$currentfg = $chaos->current["fgcolor"];
		$currentimage = $chaos->current["currentimage"];
	}
	// We put chaos colors or default
	$bgcolor = (preg_match("/^[0-9a-zA-Z]{6}$/",$currentbg))?$currentbg:$config["bgcolor"];
	$fgcolor = (preg_match("/^[0-9a-zA-Z]{6}$/",$currentfg))?$currentfg:$config["fgcolor"];
	$bgimage = ($currentimage)?$currentbg:$config["bgimage"];
?>
/**
* main.css
* css for chaos
*/

body,html {
	margin: 0;
	padding: 0;
	font-size: 10pt;
	color: #<?=$fgcolor?>;
	background-color: #<?=$bgcolor?>; 
	background-image: url(<?=$bgimage?>);
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
	}
	
header, div#header {
	height: 3em;
	background-color: #2a2a2a;
	}

span.log {
color: orange;
}

#logo {
	width: 125px;
	float: left;
	}

header nav {
	display: block;
	float: right;
	margin-bottom: 2em;
	}

header nav a {
	text-decoration: none;
	display: inline-block;
	}

header nav a span {
	color: #666666;
	}

header nav a:hover span {
	color: white;
	}
header input {
	border: 0;
	height: 1.5em;
}
#chaoslink {
	text-decoration: none;
	font-size: 2em;
	display: inline-block;
	padding: 0.3em;
	color: #666666;
	}
a {
	color: #<?=$fgcolor?>;
	}
input {
	padding-left: 0.3em;
	padding-top: 0.2em;
	border-radius: 0.4em;
}
fieldset{
	border-radius:1em;
	background-color: #777;
}
<<<<<<< HEAD

.required {
	font-weight: bolder;
}
=======
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847
/*********************
* item
**********************/
.item {
<<<<<<< HEAD
	width: 40em;
=======
	width: 20em;
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847
	background-color: white;
	margin: 1em;
	padding: 0.5em;
	color: black;
	border-radius:0.8em;
}

.item a {
	text-decoration: none;
<<<<<<< HEAD
	color: black;
}

.item a:hover {
	text-decoration: underline;
}

.item-name a {
	font-size: 2em;
	color: #6b8e23;
=======
	color: black;	 
}

.item a:hover {
}

.item-name {
	font-size: 2em;
	color: black;
>>>>>>> 23ebc3b6460d4d74a628b40ecb44aa55a7188847
}

.item-details {
	font-size: 0.8em;
	color: gray;
}

.item-link {
	clear: both;
}

.item-date {
}

.item-type {
	float: left;
	width: 4em;
}

.item-tags {
	clear: both;
	font-size: 0.8em;
	color: gray;
}

/*** dialogs *****/
.dialog {
display: none;
width: 20em;
border-radius:1em;
}

#securityquestiondiv {
<?php if ($user->logged) { ?>
	display: none;
<?php } else { ?>
	display: block;
<?php } ?>
}
 .signform {
 	width: 40em;
 	margin: 4em auto 0 auto;
 	}
 
  .signform fieldset {
 	border: 0.1em solid gray;
 	}
 
 .signform label, .signform input  {
 		font-size: 14pt;
 		height: 2em;
 	}

 	
 .signform input {
		border: none; 
		margin-bottom: 1em;	
 	}

 .signform input:focus {
		 	background-color: lightgreen;
 	}

 	
 .formtitle {
 		font-size: 18pt;
 	}

#uploadbutton {
 display: none;
}

#uploadtype {
 list-style: none;
 margin: 1em;
 padding: 0;
}

#uploadtype li{
 display: inline-block;
 margin-right: 1em;
}
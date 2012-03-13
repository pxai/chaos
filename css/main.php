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
	}
	
header {
	height: 3em;
	background-color: #2a2a2a;
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
	
/*** dialogs *****/
.dialog {
display: none;
width: 20em;
}

 .signform {
 	width: 40em;
 	margin: 10em auto 0 auto;
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
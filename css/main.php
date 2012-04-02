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
	font-size: 1em;
	color: #<?=$fgcolor?>;
	background-color: #<?=$bgcolor?>; 
	background-image: url(<?=$bgimage?>);
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
	}
	
#header {
	top: 0;
	width: 100%;
	min-width: 60em;
	height: 2.5em;
	background-color: #2a2a2a;
	box-shadow: 3px 3px 4px #000;
	position: fixed;
	}

span.log {
color: orange;
}

#logo {
	width: 125px;
	float: left;
	}

#nav {
	float: right;
	width: 300px;
	text-align: right;
	min-width: 50em;
	/*height: 100%;*/
	margin-bottom: 2em;
	}

#nav span {	
/*display: inline-block;*/
}
	
#nav a {
	text-decoration: none;
	}

#nav a span {
	color: #666666;
	}

#content {
	margin-top: 2.8em; 
}
#nav a:hover span {
	color: white;
	}
#nav input {
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
input, textarea {
	padding-left: 0.3em;
	padding-top: 0.2em;
	border-radius: 0.4em;
}
fieldset{
	border-radius:1em;
	background-color: #777;
	z-index: 10;
}

.required {
	font-weight: bolder;
}

/*********************
* item
**********************/
.item {
	width: 40em;
	background-color: white;
	margin: 1em;
	padding: 0.5em;
	color: black;
	border-radius:0.8em;
}

.item a {
	text-decoration: none;
	color: black;
}

.item a:hover {
	text-decoration: underline;
}

.item-name a {
	font-size: 1em;
	color: #6b8e23;
}

.item a:hover {
}

.item-name {
	font-size: 2em;
	color: black;
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

.item-tags a {
	color: #6b8e23;
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

 .signform input:focus, .signform textarea:focus{
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

/***************************
* ddown list
**************************/
/*--- DROPDOWN ---*/
#ddownuser{
	padding: 0;
	margin: 0;
	float:left;
	top: 40px;
	right: 0;
	position:absolute;
	z-index:5;
	padding: 1em;
	background-color: #2a2a2a;
	border: 0.1em solid white;
	display: none;	
}

/**************************
* tab
****************************/
.tab {
display: none;
}

.tabvisible {
display: block;
}

.tabmenu {
	margin-bottom: -0.1em;
}

.tabmenu span {
	z-index: -1;
	display: inline-block;
	padding: 1em;
	margin-left: 2em;
	border-top: 0.1em solid gray;
	border-left: 0.1em solid gray;
	border-right: 0.1em solid gray;
	background-color: #777;
	border-top-left-radius:1em;
	border-top-right-radius:1em;
	background-color: #<?=$bgcolor?>;
}

.tabmenu span.current {
	background-color: #777;
}

.tabmenu a {
	color: black;
	text-decoration: none;
}
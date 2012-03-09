<?php
	/**
	* css owned by the chaos
	*
	*/
	header("Content-type: text/css");
?>
/**
* main.css
* css for chaos
*/

body,html {
	margin: 0;
	padding: 0;
	font-size: 10pt;
	color: #a1a1a1;
	background-color: #666666; 
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
#chaoslink {
	text-decoration: none;
	font-size: 2em;
	display: inline-block;
	padding: 0.3em;
	color: #666666;
	}
	
/*** dialogs *****/
.dialog {
display: none;

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
 margin-left: 1em;
}
<?php

/**
* config.php
* even the chaos has a configuration file.
*/

$config["db"] = "chaos";
$config["dbhost"] = "localhost";
$config["dbuser"] = "root";
$config["dbpassword"] = "root";
$config["site_url"] = "http://localhost/labs/chaos/";

$config["root"] = "?";
$config["htaccess"] = false;
$config["debug"] = true;
$config["language"] = "en_EN.UTF-8";
$config["default"] = "content/default.php";
$config["email"] = "chaos@chaos.cx";
$config["upload_dir"] = "./upload/";
$config["upload_size"] = "10241114";
$config["allow_any_frontpage"] = true;
$config["item_pagination"] = 10;

/*************************************
* basic appearence
**************************************/
$config["bgcolor"] = "666";
$config["fgcolor"] = "6b8e23";
$config["bgimage"] = "images/vortex.gif";
// js algorythms to show info
$config["algorythms"] = array("none","");

/***********************************
* jquery urls
* You can reference to external js libs instead of hosting on your own
* Google offers his bandwidth, google owns us all
************************************/
$config["jquery"] = "js/jquery.js";
$config["jquery-ui"] = "js/jquery-ui.js";
$config["jquery-ui-css"] = "css/smoothness/jquery-ui-1.8.18.custom.css";
//$config["jquery"] = "http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js";
//$config["jquery-ui"] = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js";
//$config["jquery-ui-css"] = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css";


/***********************************
 * regular expressions
 * the will check user name format, 
 * chaos name format, etc...
 ***********************************/
$config["rx-username"] = "/^[a-zA-Z0-9\-\.\_]{1,100}$/";
$config["rx-password"] = "/^[\w\W]{4,}$/";
$config["rx-email"] = "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,10}$/";
$config["rx-chaosname"] = "/^[a-z0-9\-\.\_]{1,100}$/";
$config["rx-url"] = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
$config["rx-name"] = "/^[\w\W]{1,100}$/";
$config["rx-tags"] = "/^[A-Za-z0-9]+[A-Za-z0-9\s\-\_\.\,]*$/";


/***********************************
* filetypes
* extension ad filetype relation
*
**********************************/
$config["images"] = array("bmp","png","jpeg","jpg","gif","svg","ico");
$config["audio"] = array("mp3","wav","ogg");
$config["video"] = array("mpg","mpeg","avi","wmv","mkv","ogg");

?>
<?php
/**
* autoload.php
* the chaos needs to autoload classes
*/
function __autoload($class) {
    $path = strtolower(preg_replace('/([a-z])([A-Z])/', '$1/$2', $class));
    if(file_exists($path . '.php')) {
        require_once($path . '.php');
    } 
    
}
?>
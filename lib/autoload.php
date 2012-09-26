<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* autoload.php
* the chaos needs to autoload classes
* @author Pello Xabier Altadill Izura - http://pello.info
* 
* https://github.com/pxai/chaos
*/
function __autoload($class) {
    $path = strtolower(preg_replace('/([a-z])([A-Z])/', '$1/$2', $class));
    if(file_exists($path . '.php')) {
        require_once($path . '.php');
    } 
    
}
?>
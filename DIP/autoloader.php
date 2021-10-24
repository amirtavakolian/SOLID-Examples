<?php 

spl_autoload_register("autoloader");

function autoloader($class){
    
    $class = $class.".php";

    if(!file_exists($class)){
        die("Class not found");
    }

    require_once $class;
}
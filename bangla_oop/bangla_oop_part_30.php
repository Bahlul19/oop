<?php

spl_autoload_register(function($class_name){
    include ("classes/".$class_name.".php");
});


$db = new Database();

$db->setDriver("mysql");//must use the name driver which we use

//$db->setDriver("sqlite"); or we use this

$db->connect("host","user","password","dbname");

?>

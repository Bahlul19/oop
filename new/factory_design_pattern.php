<?php

spl_autoload_register(function($class_name){
   include("classes/".$class_name.".php"); 
});


$db = new Database();

$db->setDriver("mysql");
//use anyone
$db->setDriver("sqlite");

$db->connect("localhost","root","password","dbname");

?>
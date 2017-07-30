<?php

/*

spl_autoload_register(function($class_name){
   
    
    include ("classes/".$class_name.".php");
    
});

 */

include("classes/Java2.php");
include("classes/Php2.php");
include("classes/Ruby2.php");



use live\tausif\Ruby2 as ru;//if we use that line the Ruby2 class trun into ru then we class only ru


//use keyword \ then namespace directory \ live then class name \Php2 then
// as the anyname like ph
//the difine it

use live\Php2 as ph;

//new ph();

new live\Java2();

//use live\Java2 as java;

new live\Php2();

//new live\tausif\Ruby2();

new ru();

//new java();

echo HTML;

echo live\CSS;
//echo directory name\property name

live\tausif\myName();
//class directoryname\directoryname\function


?>

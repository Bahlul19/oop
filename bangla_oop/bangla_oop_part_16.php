<?php

//Auto loading class

//include('classes/Ruby.php');
//include('classes/Java.php');
//include('classes/Php.php');

//function __autoload($class_name)
//{
//    echo "$class_name<br/>";
//    
//    include("classes/".$class_name.".php");
//}


//spl_autolad_register();

spl_autoload_register(function ($class_name){
    
    include("classes/".$class_name.".php");
    
});


$rube = new Ruby();

$java = new Java();

$php = new Php();


?>
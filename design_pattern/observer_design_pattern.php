<?php

//Observer Design pattern

//When ekta event oilo just thokon jodi chai ekta notification aito 
//Otar lagy observer design pattern use korte oibo

spl_autoload_register(function($class_name){
   include("classes/".$class_name.".php"); 
});

$obj = new Observable();

$skype = new Skype();

$gtalk = new Gtalk();


//php gyneric class
$s = new stdClass();


$obj->register($skype);

$obj->register($gtalk);

$obj->register($s);

$obj->changeState();


?>

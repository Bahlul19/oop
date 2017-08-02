<?php

spl_autoload_register(function($class_name){
    include("classes/".$class_name.".php");
});


$obj = new Observable();

$skype = new Skype();

$gtalk = new Gtalk();

$std = new stdClass();

$obj->register($skype);

$obj->register($gtalk);

$obj->register($std);

$obj->changeState();

?>
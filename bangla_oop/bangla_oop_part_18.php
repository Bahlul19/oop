<?php

spl_autoload_register(function($class_name){
   
  include("classes/".$class_name.".php");
   
});


$calculation = new TypeHiting();

$num = array(
    array('Number One',10,10),
    array('Number Two',20,20),

    );

$calculation->getValue($num);


?>
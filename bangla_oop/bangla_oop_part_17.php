<?php


spl_autoload_register(function($class_name){
   
    include("classes/".$class_name.".php");
    
});

////$php = new Php();
////$php->framework()->cms();
//
//$calculation = new Calculation();
//
//echo "Result is: ". $calculation->getValue(3,5)->getResult();
//
////object instance oilo $this;

$calculation = new Calculation();

echo "Result is : " . $calculation->getValue(3,10)->getResult();//Chain method

?>
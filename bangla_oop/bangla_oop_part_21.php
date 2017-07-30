<?php


spl_autoload_register(function($class_name){
   
    include("classes/".$class_name.".php");
    
});


//Extend class of Php clas

//class PhpChild extends Php
//{
//    function cms()
//    {
//        echo "Child class constant and class name-> ".__CLASS__."<br/>";
//        echo "Child class Function and class name-> ".get_class($this)."<br/>";
//    }
//    
//    function ourMethod()
//    {
//        parent::framework();
//    }
//}
//
//
////$php = new Php();
//
//$php = new PhpChild();
//
//$php->framework();
//
//echo"<hr/>";
//
//$php->cms();
//
//echo"<hr/>";
//
//$php->ourMethod();


class PhpChild extends Php
{
    function cms()
    {
        echo "Base class constaint and class name -> ".__CLASS__."<br/>";
        echo "Base class function and class name ->".get_class($this)."<br/>";
    }
    
    function ourMethod()
    {
        parent::framework();
    }
}

$php = new PhpChild();

$php->framework();

echo "<hr/>";

$php->cms();

echo "<hr/>";

$php->ourMethod();






































?>

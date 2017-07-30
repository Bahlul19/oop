<?php

abstract class Php
{
    function framework()
    {
        //echo "Cake php  is a framework";
        
//        echo "Base class Constant and class name-> ".__CLASS__."<br/>";
//        echo "Base class Function and class name-> ". get_class($this)."<br/>";
        
        echo "Base class constaint and class name -> ".__CLASS__."<br/>";
        echo "Base class function and class name ->".get_class($this)."<br/>";
        
        
        //below two examples for tutorial_21
        //__CLASS__ it return which class it belongs
        //get_class($this) is return which class object it belongs
        
        
        
        
        
        
        
//This lesson is use for tutorial 21
//        return $this;
    }
    
//    function cms()
//    {
//        echo "Wordpress is a cms";
//        return $this;
//    }
}

//Method chaining er khetre object instance ta ke return korte hobe 

?>
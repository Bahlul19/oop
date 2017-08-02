<?php

class SingleTOnDatabase 
{
    //first make a instance variable
    
   private static $instance;
    
   public function __construct()
   {
       if(!self::$instance)
       {
            self::$instance = $this;
            echo "New File Created<br/>";
            return  self::$instance;
       }
       else 
       {
           echo "Old one ok<br/>";
           return  self::$instance;
       }
   }
}

?>

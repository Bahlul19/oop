<?php

class Database 
{
//    private static $instance;
    
    public $instance;
    
    public function __construct()
    {
        /*
       if(!self::$instance)
       {
           self::$instance = $this;
           echo "New File Created<br/>";
           return self::$instance;
       }
       else
       {
           echo "Old one created<br/>";
           return self::$instance;
       }
       */
        
        if(!$this->instance)
        {
            $this->instance = $instance;
            echo "New File Created<br/>";
            return $this->instance;
        }
        else 
        {
            echo "Old one created<br/>";
            return $this->instance;
        }
    }
    

}


?>
<?php

//class Database
//{
//    private static $instance;
//    
//    public function __construct()
//    {
//        if(!self::$instance)
//        {
//            self::$instance = $this;
//            echo "Created new one<br/>";
//            return self::$instance;
//        }
//        else 
//        {
//            echo "Old one instance<br/>";
//            return self::$instance;
//        }
//        
//    }
//}

class Database 
{
    private static $instance;
    
    
    public function __construct()
    {
        if(!self::$instance)
        {
            self::$instance = $this;
            echo "Created new one<br/>";
            return self::$instance;
        }
        
        else 
        {
            echo "Old one instance<br/>";
            return self::$instance;
        }
    }
}
?>
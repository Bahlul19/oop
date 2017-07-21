<?php


class Cars
{
    static $wheel_count = 10;
    static $door_count = 20;
    
    static function cars_detail()
    {
        return self::$wheel_count;
        return self::$door_count;
    }
}

//reference the parent class and parent keyword

class Trucks extends Cars{
    
    
    static function display()
    {
        echo parent::cars_detail();
    }
    
}

Trucks::display();


?>
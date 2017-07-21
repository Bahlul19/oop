<?php

class Cars
{
    static $doors = 100;
    static $windows =20;
    
    static function car_details()
    {
        return self::$doors;
        return  self::$windows;
    }
}

class Trucks extends Cars{
    
    static function display()
    {
        echo parent::car_details();
    }
    
}

Trucks::display();


?>

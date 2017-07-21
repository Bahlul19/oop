<?php

class Cars
{
    public $wheel_count = 19;
    static $door_count = 20;
    
    function __construct()
    {
        echo $this->wheel_count;
        echo '<br/>';
        echo self::$door_count++;
        echo '<br/>';
    }
}

$bmw = new Cars();


$toyota = new Cars();


$marchedes = new Cars();

?>
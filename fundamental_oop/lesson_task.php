<?php

class Cars
{
    public $wheel_count = 20;
    private $door_count = 10;
    protected $car_seat = 25;
    static $car_name = "Lucida";
    private $light_count = 4;
            
    function car_details()
    {
        echo "Hello students";
        
         echo '<br/>';
        
        echo $this->door_count;
        
        echo '<br/>';
        
        echo $this->car_seat;
        
        echo '<br/>';
    }
    
    static function car_evr()
    {
        echo self::$car_name;
    }
    
    function __construct() {
        echo $this->wheel_count;
    }
    
    function get_car_details()
    {
        echo $this->light_count;
    }
        
    function set_car_details()
    {
        $this->light_count = 2000;
    }
    
}

class Trucks extends Cars
{
    function car_details_again()
    {
        echo parent::car_evr();
    }
}



$bmw = new Cars();
echo '<br/>';

//echo $bmw->wheel_count;


$marcedes = new Trucks();

echo '<br/>';

$marcedes->car_details();

Cars::car_evr();

echo '<br/>';

Trucks::car_details_again();

echo '<br/>';


$bmw->set_car_details();
$bmw->get_car_details();


?>

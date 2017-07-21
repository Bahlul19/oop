<?php

class Cars
{
    public $car_name = "Bmw";
    private $car_doors = 10;
    protected $car_wheels = 4;
            
    function car_details()
    {
        echo "This car name is  ".$this->car_doors;
    }
}

$car_aceess = new Cars();

echo $car_aceess->car_name;

echo '<br/>';

$car_aceess->car_details();

?>
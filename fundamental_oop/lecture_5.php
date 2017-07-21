<?php

class Cars
{
    var $wheels_count = 10;
    var $doors_count = 20;
    
    function car_details()
    {
        return "This car has ".$this->doors_count." doors";
    }
}

$bmw = new Cars();
//$marchedes = new Cars();

$bmw->car_details();
echo '<br/>';

echo $bmw->doors_count;
echo '<br/>';

echo $bmw->car_details();

?>
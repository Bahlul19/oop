<?php

class Cars
{
    var $wheels = 10;
    function car_details()
    {
        return "This is a my car";
    }
}
$bmw = new Cars();

//echo $bmw->wheels;


//second class
class Trucks extends Cars
{
  
}

$tacoma =  new Trucks();

//echo $tacoma -> wheels = 300; overwrite the variable through this

echo $tacoma -> wheels;
//echo $bmw -> wheels; same kam kore.
echo "<br/>";
echo $tacoma -> car_details();

?>
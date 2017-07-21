<?php

//if we declare variable here then we need to create variable like this
// $wheel_count
class Cars
{
    //if we declare variable here then we need to create variable like this
// var $wheel_count
    
    var $wheel_count = 20;
    var $door_count = 10;
    
    function car_details()
    {
       return "This cars has ".$this->wheel_count." wheels";
    }
    
     function car_detailsTwo()
    {
       echo "This cars has ".$this->door_count." doors";
    }
    
}

$bmw = new Cars();
$marchedes = new Cars();


echo $bmw->wheel_count = 200;
echo "<br/>";

echo $marchedes->door_count;
echo "<br/>";

echo $bmw->car_details();
echo "<br/>";

$bmw->car_detailsTwo(); //call method

?>
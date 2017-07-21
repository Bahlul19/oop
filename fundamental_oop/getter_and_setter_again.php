<?php

//class Cars
//{
//    private $doors = 10;
//            
//    function get_values()
//    {
//        echo $this->doors;
//    }
//    
//    function set_values()
//    {
//        $this->doors = 200;
//    }
//}
//
//$bmw = new Cars();
//
//
//$bmw->set_values();
//$bmw->get_values();
//



class Cars
{
    private $doors = 100;
    
    function get_values()
    {
        echo $this->doors;
    }
    
    function set_values()
    {
       $this->doors = 200;
    }
}

$my_car = new Cars();

$my_car->get_values();
$my_car->set_values();



?>

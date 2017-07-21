<?php

class Cars
{
    private $wheels_count = 20;
    
    
    function get_values()
    {
        echo $this->wheels_count;
    }
    
    function set_values()
    {
        $this->wheels_count = 100;
    }
}

$bmw = new Cars();


$bmw->set_values();
//if you define set value first then it will print set value first
$bmw->get_values();






?>
<?php

class Cars
{
    public $wheels_count =4;
    private $door_count =4;
    protected $seat_count =8;
    
    
    function greetings()
    {
//          echo "This car has ".$this->wheels_count;
//          return "This car has ".$this->door_count ;
            return "This car has ".$this->door_count;
    }
    
}

$bmw = new Cars();

echo $bmw->wheels_count;

echo '<br/>';

//echo $bmw -> greetings();
//echo '<br/>';

//echo $bmw->door_count;
//echo '<br/>';
//you cannot access private property outside the class only access inside the class




//echo $bmw->seat_count;
//echo '<br/>';
//you cannot access protected property outside the class only access inside the
//class and sub classes

//echo $bmw->greetings();
//echo '<br/>';


class Trucks extends Cars
{
    
}

$comata = new Trucks();
//echo $comata->seat_count = 100;

echo $comata->greetings();


?>


<!-- OOP te private and protected er value direct print koranu jay na public
funtion ba method baniya call ba access kora jay-->
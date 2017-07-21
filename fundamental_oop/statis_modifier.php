<?php


class Cars
{
    public $wheel_count = 10;
    static $door_count = 4;
    
    static $car_seat = 12;
    
    function car_details()
    {
        echo "Hello users";
    }
    
    static function car_everything()
    {
        echo Cars::$door_count;
        echo '<br/>';
        echo Cars::$car_seat;
    }
}

$bmw = new Cars();

echo $bmw->wheel_count;

echo '<br/>';

echo Cars::$door_count;

//if use static modifier use the class name in the case of print the output
//like Cars(The class name is Cars)::$door_count;

//If we use static property and static method don't need to use instance just 
//use the number 33 rules.

echo '<br/>';
Cars::car_details();

echo '<br/>';
Cars::car_everything();

?>
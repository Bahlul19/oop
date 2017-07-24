<?php

class Person
{
    static $name = "Tausif";
    
    function details()
    {
        echo "Name is :".self::$name;
    }
}

Person::details();



?>

<?php

class Person
{
    public $name;
    public $age = 10;
    
    /*
    function personName()
    {
        echo "Person name is : ".$this->name;
    }
    
    function personAge()
    {
        echo "Person age is: ".$this->age;
    }
    
    function __construct() {
        echo "Constructor cretaed<br/>";
    }
}

$personOne = new Person();

$personOne->name = "Abkor Hussain";

$personOne->personName();

echo '<br/>';

$personOne->personAge();
*/
    
    
    function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function personDetails()
    {
      echo "This person name is {$this->name} and person age is {$this->age}";
    }
    
    
}

$personOne = new Person("Akbor Hussain","20");

$personOne->personDetails();
    
   
?>
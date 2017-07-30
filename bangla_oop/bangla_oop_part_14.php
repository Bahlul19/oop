<?php


/*

GET method o 1ta value khali property fatani jaw

SET method o 2ta value fatani jay property r value

CALL method access kore undefined method ti and argument holo array

 */

/*
class Student 
{
    public $name;
    
    public function describe()
    {
        echo "I am a student<br/>";
    }
    public function __get($pm)
    {
        echo "$pm doesnt exist<br/>";
    }
    
    public function __set($pm, $value)
    {
        echo "We set $pm->$value<br/>";
    }
    
    public function __call($pm, $value) {
        echo "There is no ".$pm." method and Arguments: ".implode(', ', $value);
        echo '<br/>';
        echo '<br/>';
    }
    
}

$std = new Student();

$std->describe();

//$std->name = "Hasan" ei rokom vabe amra korbo na

$std->Hasan;//here hasan is a undefined property

$std->age = 15;//here age->15 is an undefined value

$std->notExitMethod('2','34','12');

*/

class Person 
{
    public function __get($pm)
    {
        echo "My name is ".$pm."<br/>";
    }
    
    public function __set($pm,$values)
    {
        echo "My $pm->$values"."<br/>";
    }
    
    public function __call($pm,$value)
    {
        echo "There is no ".$pm." methods and Argument: ".implode(', ',$value);
    }
}

$std = new Person();

$std->Tausif;

$std->age = 20;

$std->noMethodExit('20','30','40');

?>




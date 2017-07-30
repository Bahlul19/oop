<?php
//Abstract Class
/*
//Abstract method create korle must abstract class er vitor hote hobe and 


//class ta o abstract hobe


//Abstract keyword use korle direct object use kora jabe na
 
 */

abstract class Student 
{
    public $name;
    public $age;
    
    function details()
    {
        echo $this->name . " is ".$this->age ." years old<br/>";
    }
    abstract function School();
}

class Boy extends Student
{  
    public function describe()
    {
      return parent::details()." And i am a high school student<br/>";
    }
    public function School()
    {
        return "My school is best school in town<br/>";
    }
}


//$std = new Student();

$std = new Boy();

$std -> name = "Tausif";

$std-> age = 25;

//$std->details();

echo $std->describe();
echo $std->School();


?>
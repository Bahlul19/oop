<?php

class Person
{
    const NAME = "Fahmeda Yesmin Chowdhury";
    
    function display()
    {
        echo "The name is : ".Person::NAME;
    }
}

$personOne = new Person();

$personOne->display();

?>



<?php

class Cars
{
    //Method is a function which is define inside a class.
    function greeting()
    {
        
    }
    
    function hello()
    {
        
    }
    
    function hi()
    {
        
    }
}

$the_methods = get_class_methods('Cars');

foreach($the_methods as $methods)
{
    echo $methods . '<br/>';
}
//function is a function when it is define outside a class.

?>
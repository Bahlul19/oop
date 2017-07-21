<?php

    class Cars
    {
        function introToOop()
        {
            
        }
        
        function introToOop2()
        {
            
        }
    }
    
    $my_class = get_declared_classes();
    
    foreach($my_class as $class)
    {
        echo $class . '<br/>';
    }
    
    $the_methods = get_class_methods('Cars');
    
    foreach($the_methods as $methods)
    {
        echo $methods .'<br/>';
    }
    

?>

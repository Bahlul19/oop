<?php
/*
class Student 
{
    function describe()
    {
//        echo "Student class is found";
        echo "Describe method is exits";
    }
}


if(class_exists("Student"))
{
    $std = new Student;
    
    if(method_exists($std, "describe"))
    {
        $std->describe();
    }
    
    else 
    {
        echo "Methods not found";
    }
}
else 
{
    echo "Exiting class is not found";
}

*/

class Student 
{
    function describe()
    {
        echo "Method is exist";
    }
}


if(class_exists("Student"))
{   
    $std = new Student();
    
    if(method_exists($std, "describe"))
    {
        $std->describe();
    }
    else 
    {
        echo "Method is not exist";
    }
    
}

else 
{
    echo "Class is not exist";
}

?>
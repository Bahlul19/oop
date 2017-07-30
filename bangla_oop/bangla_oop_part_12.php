<?php

/*

Interface holo ekti empty class jekhane kuno method declaration thake 
and method declaration er kuno body part thake na

interface er vitor method er kuno body thakbe na 

*/

interface School 
{
    function mySchool();
}

interface College 
{
    function myCollege();
}

interface Versity 
{
    function myVersity();
}


class Teacher implements School,College,Versity
{
    
    function __construct() 
    {
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
        
    }
    
    function mySchool()
    {
        echo "I am a school teacher<br/>";
    }
    
    
    function myCollege()
    {
        echo "I am a collge teacher<br/>";
    }
    
    function myVersity()
    {
        echo "I am a versity teacher<br/><br/>";
    }
    
}


class Student implements School,College,Versity
{
    
    function __construct() {
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
        
    }
    
    function mySchool()
    {
        echo "I am a school student<br/>";
    }
    
    
    function myCollege()
    {
        echo "I am a collge student<br/>";
    }
    
    function myVersity()
    {
        echo "I am a versity student<br/>";
    }
    
}

$teacher = new Teacher();

$student = new Student();

?>
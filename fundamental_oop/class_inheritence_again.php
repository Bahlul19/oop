<?php

class School
{
    var $room_no = 90;
    function rooms()
    {
        echo "There is about ".$this->room_no ." in school"; 
    }
}

$scl = new School();

class College extends School
{
    
}
//
$clg = new College();

 echo $clg->room_no;
 
 echo '<br/>'; 
 
 $clg ->rooms();


?>

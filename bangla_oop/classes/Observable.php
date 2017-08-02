<?php

class Observable
{
    private $observers = array();
    
    public function register($object)
    {
        if($object instanceof Observer)
        {
            $this->observers[] = $object;
        }
        else 
        {
             echo "Object should be implements observer interface<br/>";
        }
    }
    
    public function changeState()
    {
        foreach($this->observers as $observer)
        {
            $observer->message();
        }
    }
}


?>

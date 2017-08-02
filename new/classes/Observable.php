<?php

class Observable
{
    public $observers = array();
    
    public function register($object)
    {
       if($object instanceof Observer)
       {
           $this->observers[] = $object;
       }
       else 
       {
           echo "Message already send<br/>";
       }
    }
    
    public function changeState()
    {
        foreach($this->observers as $observer)
        {
            $observer->notification();
        }
    
}


}

?>

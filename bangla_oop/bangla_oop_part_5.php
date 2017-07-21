<?php

class UserData
{
    public $user;
    public $userID;
    function __construct($user,$userID) 
    {
       $this->user = $user;
       $this->userID = $userID;
       echo "The user name is {$this->user} and ID is {$this->userID}";
    }
    
//    function display()
//    {
//         echo "The user name is {$this->user} and ID is {$this->userID}";
//    }
//    
    
    function __destruct()
    {
        unset($this->user);
        unset($this->userID);
    }
    
//descrutor should be used in mainly for destroy the user data from the database 
}

$ur = new UserData("Tausif","1301020019");
//$ur->display();

?>

<?php


//final keyword mean onno classn  ke access korte dibe na and method ke o override korte dibe na 

class UserData
{
    public $user;
    public $userID;
    
    
     function __construct($user,$userID)
    {
        $this->user = $user;
        $this->userID = $userID;
    }
    
    final function display()
    {
        echo "Name is {$this->user} and ID is {$this->userID}";
    }
    
}

class Admin extends UserData
{
    public $level;
    
    function display()
    {
 echo "Name is {$this->user}, ID is {$this->userID} and level is {$this->level} ";
    }
    
    
}



$user = "Tausif";

$userID = 12090;

$user_access = new UserData($user,$userID);

//$user_access->display();

$user = "Bahlul";
$userID = 10090;

$admin_access = new Admin($user, $userID);

$admin_access->level = "administration";

$admin_access->display();


?>

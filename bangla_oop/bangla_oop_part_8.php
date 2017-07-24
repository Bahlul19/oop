<?php

class UserData
{
    public $userName; 
    public $userID;
    
    function __construct($userName,$userID)
    {
        $this->userName = $userName;
        $this->userID = $userID;
    }
    
    function display()
    {
        echo "Name is {$this->userName},ID is {$this->userID}";
    }
}

$userName = "Tausif";

$userID = "100";

$user_access = new UserData($userName,$userID);

//$user_access->display();



class AdminData extends UserData
{
    public $level;
    function display()
    {
        echo "Name is {$this->userName},ID is {$this->userID} and Position {$this->level}";
    }
}



$userName = "Fahmi";

$userID = "200";

$admin_access = new AdminData($userName, $userID);

$admin_access->level = "Administration";

$admin_access->display();


?>
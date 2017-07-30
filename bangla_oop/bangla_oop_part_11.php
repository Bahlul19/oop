<?php

/*
polymorphism means ekta class theke onno class a access kora mane inherit kora 
mane extends kora and extand kora class a property add kora and main class er
method ke sub class er method ke method diye override kora
 */

class UserData
{
    public $userName;
    public $userID;
    
    function __construct($userName,$userID)
    {
        $this->userName= $userName;
        $this->userID = $userID;
    }
    
    function display()
    {
        echo "Name : {$this->userName} and ID : {$this->userID}";
    }
    
}

class AdminData extends UserData
{
    public $level;
    
    function display()
    {
        echo "Name : {$this->userName}, ID : {$this->userID}, Position : {$this->level}";
    }
}

$userName = "Tausif";

$userID = 10989;

$user_access = new UserData($userName,$userID);

$userName = "Bahlul";

$userID = 10952;

$admin_access = new AdminData($userName,$userID);

$admin_access->level = "Administration";

$admin_access->display();

echo '<br/>';

if($admin_access instanceof UserData)
{
    echo "Inherited";
}




?>

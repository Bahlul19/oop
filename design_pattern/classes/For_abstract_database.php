<?php


abstract class Database
{
    public function connect();
    
    public function query();
    
    public function insertID();
    
    
    public function setHost($host)
    {
        //Set Database here..
    }
    
    public function setDB($db)
    {
        //Set Database here..
    }
    
    public function setUser($user)
    {
        //set user name..
    }
    
    
    public function setPassword($password)
    {
        //set Password...
    }
}

?>
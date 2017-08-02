<?php

abstract class Database
{
    public function connect();
    public function query();
    public function insertID();
    
    public function setHost($host)
    {
        //Set Database host
    }
    
    public function setDB($db)
    {
        //Set Database name
    }
    
    public function setUser($user)
    {
        //Set Database user
    }
    
    public function setPassword($password)
    {
        //Set Database password
    }
    
}

?>
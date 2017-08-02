<?php

abstract class Database
{
    public function connect();
    public function query();
    public function insertID();
   
    public function setHost()
    {
        //set the host
    }
    
    public function setDB()
    {
        //set the database
    }
    
    public function setUser()
    {
        //set the user
    }
    
    public function setPassword()
    {
        //set the password
    }
    
}







?>
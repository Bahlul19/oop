<?php

class Database
{
    public $driver;
    public $link;
    
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
    
    public function connect()
    {
        if($this->driver == "mysql")
        {   
            $managemysql = new ManageMsql();
        
            $managemysql->setHost($host);
            $managemysql->setDB($db);
            $managemysql->setUser($user);
            $managemysql->setPassword($password);
            $this->link = $managemysql->connect();    
        }
        
        else if($this->driver == "sqlite")
        {
            $managesqlite = new ManageSqlite();

            $managesqlite->setHost($host);
            $managesqlite->setDB($db);
            $managesqlite->setUser($user);
            $managesqlite->setPassword($password);
            $this->link = $managesqlite->connect();
        }
    }
}

?>

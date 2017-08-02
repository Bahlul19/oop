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
            $manageMysql = new ManageMsql();
            $manageMysql->setHost($host);
            $manageMysql->setUser($user);
            $manageMysql->setPassword($password);
            $this->link = $manageMysql->connect();
        }
        else if($this->driver = "sqlite")
        {
            $manageSqlite = new ManageMsql();
            $manageSqlite->setHost($host);
            $manageSqlite->setUser($user);
            $manageSqlite->setPassword($password);
            $this->link = $manageSqlite->connect();
        }
    }
}


?>
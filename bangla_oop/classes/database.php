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
            $ManageMysql = new ManageMsql();
            $ManageMysql->setHost($host);
            $ManageMysql->setUser($user);
            $ManageMysql->setPassword($password);
            $ManageMysql->setDB($db);
            $this->link = $ManageMysql->connect();
        }
        
        else if($this->driver == "sqlite")
        {
            $ManageSqlite = new ManageMsql();
            $ManageSqlite->setHost($host);
            $ManageSqlite->setUser($user);
            $ManageSqlite->setPassword($password);
            $ManageSqlite->setDB($db);
            $this->link = $ManageSqlite->connect();
        }
    }
}

?>
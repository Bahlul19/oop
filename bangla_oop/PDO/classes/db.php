<?php

include ('config.php');

class DB
{
    private static $pdo;
    public static function connection()
    {
        if(!isset(self::$pdo))
        {
           try
           {
            self::$pdo = new PDO('mysql:host='.DB_HOST.'; dname ='.DB_NAME,DB_USER,DB_PASS);
           } catch (PDOException $ex) {
                $ex->getMessage();
           }
        }
    }
}


?>
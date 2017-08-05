<?php
//include('config.php');
//class DB
//{
//    private static $pdo;
//    public static function connection()
//    {
//       if(!isset(self::$pdo))
//       {
//        try
//        {
//          self::$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME,DB_USER,DB_PASS);
//        } catch (PDOException $ex) {
//            $ex->getMessage();
//        }
//       }
//    }
//}



class DB
{
    private static $pdo;
    public function connection()
    {
        if(!isset(self::$pdo))
        {
            try
            {
              self::$pdo = new PDO('mysql:host'.DB_HOST.'; dbname'.DB_NAME,DB_USER,DB_PASS);
            } catch (PDOException $ex) {
            $ex->getMessage();
            }
        }
    }
}
//private use koray self keyword use kora oise



?>

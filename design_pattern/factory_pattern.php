<?php

spl_autoload_register(function($class_name){
   
    include("classes/".$class_name.".php");
    
});

//for mysql
//$managemysql = new ManageMsql();
//
//$managemysql->setHost($host);
//$managemysql->setDB($db);
//$managemysql->setUser($user);
//$managemysql->setPassword($password);
//$managemysql->connect();       


//fro sql
//$managesqlite = new ManageSqlite();
//
//$managesqlite->setHost($host);
//$managesqlite->setDB($db);
//$managesqlite->setUser($user);
//$managesqlite->setPassword($password);
//$managesqlite->connect();



//if($dbType == "mysql")
//{
//    //mysql code 
//}
//else if($dbType = "sqlite")
//{
//    //sqlite code 
//}


$db = new Database();

$db->setDriver("mysql");

//it should be mysql or sqlite
$db->setDriver("sqlite");


$db->connect("hostname","username","password","dbname");

?>

<?php

$dsn = "mysql:dbname=userdata;host=localhost";

$user = "root";

$password = "";

try
{
    $pdo = new PDO($dsn,$user,$password);//Create PDO Object
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();
}

$sql = "select * from tbl_user";

$result = $pdo->query($sql);
//every value save in result

foreach($result as $value)
{
    echo "<pre>";
    
    echo $value['skill'];
    
    echo "</pre>";
}

?>
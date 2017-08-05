<?php

echo "<span sytle='color:red;font-size:18px;'>Php Data Object</span>";

//dsn = data source name 
$dsn = "mysql:dbname=userdata;host=localhost";

$user = "root";

$password = "";

try
{
    $pdo = new PDO($dsn,$user,$password);
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();
}

$sql = "select * from tbl_user";

$result = $pdo->query($sql);

foreach($result as $value)
{
    echo "<pre>";
    
    echo $value['name'];
    
    echo "</pre>";
}

?>

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
$id = 1;

$sql = "select * from tbl_user where id=:id";

//$sql ="select * from tbl_user where id = ?";
$stmt = $pdo->prepare($sql);

$stmt->execute(array(':id' => $id));

//$stmt->execute(array($id)); if we use ? then use this

while($data = $stmt->fetch())
{
    echo "Name : ".$data['name']."<br/>";
    echo "Skill : ".$data['skill']."<br/>";
}

?>
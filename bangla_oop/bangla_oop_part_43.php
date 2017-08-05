<?php

$dsn = "mysql:dbname=userdata;host:localhost";

$username = "root";

$password = "";


try
{
    $pdo = new PDO($dsn,$username,$password);
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();
}

$name = "Maruf Kobis";

$email = "marufkobis@gmail.com";

$skill = "SOEO";

$age = 30;

/*
$sql = "INSERT INTO tbl_user (name,email,skill,age) VALUES(:name, :email, :skill, :age)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam('name',$name);
$stmt->bindParam('email',$email);
$stmt->bindParam('skill',$skill);
$stmt->bindParam('age',$age);


$stmt->execute();
 */

$sql = "INSERT INTO tbl_user (name,email,skill,age) VALUES(?,?,?,?)";

$stmt = $pdo->prepare($sql);

$array= array($name,$email,$skill,$age);

$stmt->execute($array);

?>
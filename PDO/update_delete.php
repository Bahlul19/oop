<?php

$dsn = "mysql:dbname=userdata;host=localhost";

$user = "root";

$pass = "";

try
{
    $pdo = new PDO($dsn,$user,$pass);
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();
}

/* UPDATE QUERY
$id = 1;

$skill = "Java,JavaScript";


$sql = "update tbl_user set skill = ? where id = ?";
$stmt = $pdo->prepare($sql);

$stmt->execute(array($skill,$id));
*/


/*
$id = 3;

$skill = "OOP, Laravel";

$name = "Siddiquee";

$sql = "update tbl_user set skill = ?,name = ? where id = ?";
2 ta update korte hole comma(,) use korte hobe

$stmt = $pdo->prepare($sql);
$stmt->execute(array($skill,$name,$id));
*/

//using bindParam

/*
$sql = "update tbl_user set skill=:skill,name=:name where id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':skill', $skill);

$stmt->bindParam(':name', $name);

$stmt->bindParam(':id', $id);

$stmt->execute();
 */

//DELETE QUERY 

$id = 7;
/*
$sql = "delete from tbl_user where id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute(array($id));
 */

//Using bindParam
$sql = "delete from tbl_user where id =:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id',$id);

$stmt->execute();


?>
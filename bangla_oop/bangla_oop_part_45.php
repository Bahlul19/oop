<?php

$dsn = "mysql:dbname=userdata;host=localhost";

$user = "root";

$pass = "";

try
{
    $pdo = new PDO($dsn,$user,$pass);
} catch (Exception $ex) {
    echo "Connection Failed".$ex->getMessage();
}

/*
$sql = "select * from tbl_user";

$stmt = $pdo->query($sql);

foreach($stmt as $value)
{
    echo $value['skill']."<br/>";
}
*/

$name = "Image";

$email = "imaage@gmail.com";

$skill = "handeling";

$age = 30;

/*
$sql = "insert into tbl_user(name,email,skill,age) values (:name, :email, :skill, :age)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':age', $age);

$stmt->execute();
 */

/*
$sql = "insert into tbl_user (name,email,skill,age)values(?,?,?,?)";

$stmt = $pdo->prepare($sql);

$array = array($name,$email,$skill,$age);

$stmt->execute($array);
*/

$id = 9;

//$sql = "select * from tbl_user where id = :id";
//both are same
$sql = "select * from tbl_user where id = ?";


// id = ? and id = :id same kotha 


$stmt = $pdo->prepare($sql);

//$stmt->execute(array(':id' => $id));
//both are same
$stmt->execute(array($id));

while($data = $stmt->fetch())
{
    echo "Name: ".$data['name']."<br/>";
    echo "Email: ".$data['email']."<br/>";
}

?>

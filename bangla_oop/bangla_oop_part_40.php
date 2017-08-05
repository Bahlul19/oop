<?php

//select and update query in database using oop style
$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno())
{
    echo "Connection fail..";
    exit();
}
else 
{
     echo "Database connection successfully<br/>";
}



/*
$sql = "insert into tbl_user(name,email,skill) values(?,?,?)";

$stmt = $db->prepare($sql);

$stmt->bind_param("sss",$name,$email,$skill);
//s means string we use three string thats why use 3 s

$name = "Tausif";
$email = "ta@gmail.com";
$skill = "blogger";

$stmt->execute();
$stmt->close();
$db->close();
*/



/* Select query
$sql = "select name,skill from tbl_user order by id";

$stmt = $db->prepare($sql);

$stmt->bind_result($name, $skill);

$stmt->execute();

while($stmt->fetch())
{
    echo $skill."<br/>";
}
*/

$sql = "insert into tbl_user (name,email,skill) values(?,?,?)";

$stmt = $db->prepare($sql);

$stmt->bind_param("sss",$name,$email,$skill);

$name = "Fahmida";
$email = "Fami@gmaill.com";
$skill = "networking";

$stmt->execute();

$stmt->close();

$db->close();

?>
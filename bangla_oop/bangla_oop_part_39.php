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

$sql = "select name,skill from tbl_user order by id";

$stmt = $db->prepare($sql);

$stmt->execute();
//must be execute it

//select 2 variable which pull from database

$stmt->bind_result($name,$skill);

while($stmt->fetch())
{
    echo "<pre>";
    echo $name."<br/>";
    echo "</pre>";
}

?>
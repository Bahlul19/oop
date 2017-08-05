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
     echo "Database connection successfully";
}


//select query
$sql = "select * from tbl_user";

$query = $db->query($sql);

while($data = $query->fetch_object())
{
    echo "<pre>";
//    echo $data->skill;//now all value save into $data
    
    echo $data->name;
    
    echo "</pre>";
}


/*
//Update query 

$sql_update = "update tbl_user SET skill='c#,python' where id ='1'";

$query = $db->query($sql_update);
*/

?>
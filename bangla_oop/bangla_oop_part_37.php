<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno())
{
    echo "connection failed<br/>";
    exit();
}
else 
{
    echo "connection successfully";
}

?>
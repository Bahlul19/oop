<?php

include('header.php');
spl_autoload_register(function($class){
	include("classes/".$class.".php");
});

$user = new Student();

if($_GET['id'])
{
	$id = $_GET['id'];
	//now access in Student class
	$result = $user->readById($id);
}

if($user->delete($id))
    	{
                  echo "       
   <p class='alert alert-warning'>Data Deleted Successfully</p>.
           ";
        }
        else 
        {
            echo "
            <p class='alert alert-danger'>Query Failed,please check</p>";       
        }

?>
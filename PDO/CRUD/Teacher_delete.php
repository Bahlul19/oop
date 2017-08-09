<?php

include('header.php');
spl_autoload_register(function($class){
   include("classes/".$class.".php"); 
});

//get the value id
    $user = new Teacher();
    if($_GET['id'])
    {
        $id = $_GET['id'];
        $result = $user->readById($id);
    }
    
    if($user->delete($id))
    {
            echo "       
   <p class='alert alert-danger'>Data Deleted Successfully</p>.
           ";
    }
    else 
    {        
           echo "Query Failed,please check";
    }
    
?>
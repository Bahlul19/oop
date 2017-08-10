<?php

include('header.php');

spl_autoload_register(function($class){
    include("classes/".$class.".php");
});
?>

<?php

$user = new Teacher();

if($_GET['id'])
{
    $id = $_GET['id'];
    $result = $user->readById($id);
}


    if($user->delete($id))
    {
      echo "
     <p class='alert alert-warning alert-dismissible' role='alert'>Data Deleted Successfully</p>     
        ";
    }
    else 
    {
         echo "
     <p class='alert alert-danger alert-dismissible' role='alert' >Query Failed</p>     
        ";
    }


?>
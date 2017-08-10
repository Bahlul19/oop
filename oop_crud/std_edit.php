<?php
include ('header.php');
spl_autoload_register(function($class){
    include("classes/".$class.".php");
});
?>

<?php

$user = new Student();

if($_GET['id'])
{
    $id = $_GET['id'];
    $result = $user->readById($id);
}


if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $age = $_POST['age'];
    
    $user->setName($name);
    $user-> setDepartment( $department);
    $user->setAge($age);
    
    
    if($user->update($id))
    {
      echo "
     <p class='alert alert-success alert-dismissible' role='alert'>Data Updated Successfully</p>     
        ";
    }
    else 
    {
         echo "
     <p class='alert alert-danger alert-dismissible' role='alert' >Query Failed</p>     
        ";
    }
}


?>


<div class="col-md-3"></div>
<div class="col-md-6">
    <h4 style="text-align: center">Update Student Form</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?= $result['id'] ?>" class="form-control">
      
        <div class="form-group">
            Name:<input type="text" name="name" value="<?= $result['name'] ?>" class="form-control">    
        </div>
        
        <div class="form-group">
            Department:<input type="text" name="department" value="<?= $result['department'] ?>"  class="form-control">    
        </div>
        <div class="form-group">
            Age:<input type="text" name="age" value="<?= $result['age'] ?>" class="form-control">    
        </div>
        <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
    </form>
    
    
</div>
<div class="col-md-3"></div>
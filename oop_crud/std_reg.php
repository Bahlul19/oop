<?php
include ('header.php');
spl_autoload_register(function($class){
    include("classes/".$class.".php");
});
?>

<?php

$user = new Student();

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $age = $_POST['age'];
    
    $user->setName($name);
    $user-> setDepartment( $department);
    $user->setAge($age);
    
    
    if($user->insert())
    {
      echo "
     <p class='alert alert-success alert-dismissible' role='alert'>Data Inserted Successfully</p>     
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
    <h4 style="text-align: center">Fill Up The Student Form</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        
      
        <div class="form-group">
            Name:<input type="text" name="name" class="form-control">    
        </div>
        
        <div class="form-group">
            Department:<input type="text" name="department" class="form-control">    
        </div>
        <div class="form-group">
            Age:<input type="text" name="age" class="form-control">    
        </div>
        <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
    </form>
    
    
</div>
<div class="col-md-3"></div>
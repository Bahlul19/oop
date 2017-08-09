<?php
include('header.php');

spl_autoload_register(function($class){
   include("classes/".$class.".php"); 
});
?>

<?php

$user = new Student(); 

//word should be done under $user object

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $age = $_POST['age'];
    
    $user->setName($name);
    $user->setDepartment($department);
    $user->setAge($age);
    
    if($user->insert())
    {
                  echo "       
   <p class='alert alert-success'>Data Inserted Successfully</p>.
           ";
        }
        else 
        {
            echo "
            <p class='alert alert-danger'>Query Failed,please check</p>";       
        }
    }

?>


<div class="col-md-4"></div>
<div class="col-md-4">

    <h3>Please Fill Up Student Form</h3>

    <form action="" method="post" enctype="multipart/form-data">


        <div class="form-group">
            Name <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            Department <input type="text" name="department" class="form-control">
        </div>

        <div class="form-group">
            Age <input type="text" name="age" class="form-control">
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">Submit</button>

    </form>

</div>
<div class="col-md-4"></div>

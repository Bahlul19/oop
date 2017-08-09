<!--For Update-->
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
    
//update process

 if(isset($_POST['update']))
    {
        $id =$_POST['id'];
        $name =$_POST['name'];
        $department = $_POST['department'];
        $age = $_POST['age'];

        $user->setName($name);
        $user->setDepartment($department);
        $user->setAge($age);

        if($user->update($id))
        {
            echo "       
   <p class='alert alert-success'>Data Updated Successfully</p>.
           ";
        }
        else 
        {
            echo "Query Failed,please check";
        }

    }


?>



<!--Update FORM-->

<div class="col-md-4"></div>
<div class="col-md-4">

    <h3>Please Fill Up Form</h3>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <input type="hidden" name="id" value="<?= $result['id'] ?>" class="form-control">
        </div>

        <div class="form-group">
            Name <input type="text" name="name" value="<?= $result['name'] ?>" class="form-control">
        </div>

        <div class="form-group">
            Department <input type="text" name="department" value="<?= $result['department'] ?>"  class="form-control">
        </div>

        <div class="form-group">
            Age <input type="text" name="age" value="<?= $result['age'] ?>" class="form-control">
        </div>
        
        <button type="submit" name="update" class="btn btn-primary">Update</button>

    </form>

</div>
<div class="col-md-4"></div>



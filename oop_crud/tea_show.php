<?php

include('header.php');

spl_autoload_register(function($class){
    include("classes/".$class.".php");
});

?>

<?php $user = new Teacher() ?>

<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-bordered table-striped">
    <tr>
        <th>Serial No</th> 
        <th>Name</th>  
        <th>Department</th> 
        <th>Age</th> 
        <th>Update</th>
        <th>Delete</th>
    </tr>
   
       <?php
       
       foreach($user->readAll() as $value) //not need to assign key
       {
       ?>   
    
    <tr>
        <td> <?= $value['id']; ?> </td> 
        <td> <?= $value['name']; ?> </td>
        <td> <?= $value['department']; ?> </td>
        <td> <?= $value['age']; ?> </td>
        
        <td>
           <?php echo" <a href='tea_edit.php?id=".$value['id']."'>Edit</a> ";?>
        </td>
        
        <td>
           <?php echo" <a href='tea_delete.php?id=".$value['id']."'>Delete</a> ";?>
        </td>
        
    </tr>
 
       <?php } ?>
 
</table>
</div>
<div class="col-md-2"></div>

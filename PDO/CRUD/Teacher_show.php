<?php

include('header.php');

spl_autoload_register(function($class){
   include("classes/".$class.".php"); 
});

?>


<?php

$user = new Teacher();

//access student class by this object


//insert the query by this condition

?>

<div class="col-md-4"></div>
<div class="col-md-4">

    <table class="table table-bordered table-striped">
    
        <tr>
            <th>Serial Number</th>
            <th>Name</th>
            <th>Department</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    <?php
    
    foreach($user->readAll() as $key => $value)
    {
?>
        <tr>
            <td><?= $value['id']; ?></td>
            <td><?= $value['name']; ?></td>
            <td><?= $value['department']; ?></td>
            <td><?= $value['age']; ?></td>
            <td>
<?php echo "<a href='Teacher_edit.php?id=".$value['id']."'>EDIT</a>" ?>               
            </td>
            <td>
<?php echo "<a href='Teacher_delete.php?id=".$value['id']."'>DELETE</a>" ?>                
            </td>
        </tr>
        
    <?php }?>
        
        
    </table>
    </div>
<div class="col-md-4"></div>
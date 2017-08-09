<?php

include('header.php');


spl_autoload_register(function($class){
   include("classes/".$class.".php"); 
});

?>


<?php 
$user1 = new Student(); 
?>


<div class="col-md-4"></div>

<div class="col-md-4">
    
    <table class="table table-bordered">
        
        
        <tr>
            <th>Serial No:</th>
            <th>Name:</th>
            <th>Department:</th>
            <th>Age:</th>
            <th>Update</th>
            <th>Remove</th>
        </tr>
        
        <?php
        
        foreach($user1->readAll() as $key => $value)
        {
        ?>  
        
        <tr>
            
            <td> <?= $value['id'];?></td>
            <td> <?= $value['name'];?></td>
            <td> <?= $value['department'];?></td>
            <td> <?= $value['age'];?></td>
            
            <td> 
            <?php
echo "<a href='edit.php?id=".$value['id']."'>EDIT</a>";
            ?>
            </td>

            <td> 
              <?php
echo "<a href='delete.php?id=".$value['id']."'>DELETE</a>";
            ?>
            </td>

            
        </tr>
      
        <?php } ?>

        
    </table>
    
    
</div>

<div class="col-md-4"></div>
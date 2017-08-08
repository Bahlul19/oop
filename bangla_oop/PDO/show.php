<?php

include('header.php');


spl_autoload_register(function($class_name){
   include("./classes/".$class_name.".php"); 
});

?>


<?php 
$user = new Student(); 
?>


<div class="col-md-4"></div>

<div class="col-md-4">
    
    <table class="table table-bordered">
        
        
        <tr>
            <th>Serial No:</th>
            <th>Name:</th>
            <th>Department:</th>
            <th>Age:</th>
        </tr>
        
        <?php
        
        foreach($user->readAll() as $key => $value)
        {
        ?>  
        
        <tr>
            
            <td> <?= $value['id'];?></td>
            <td> <?= $value['name'];?></td>
            <td> <?= $value['department'];?></td>
            <td> <?= $value['age'];?></td>
            
        </tr>
      
        <?php } ?>

        
    </table>
    
    
</div>

<div class="col-md-4"></div>
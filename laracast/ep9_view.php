<!DOCTYPE html>
<html>

    <head>
        <title>
            Laracast
        </title>
    </head>
    <body>
        

        <ul>

            <li>
                <strong>
                    Name:
                 </strong>    
                    <?= $task['title'] ?>
               
            </li>
            
            
            <li>
                <strong>
                    Due Date:
                </strong>    
                    <?= $task['due'] ?>
                
            </li>
            
            
            <li>
                <strong>
                    Personal Responsible:
               </strong>     
                    <?= $task['assign_to'] ?>
                
            </li>
            
            
            <li>
                <strong>
                    Status:
                </strong>    
          
                <?php if($task['completed']) :?>
                <?= "<span style='color:green'> Completed </span>" ?>
                <?php else : ?>
                <?= "<span style='color:red'> Incompleted </span>" ?>
                <?php endif; ?>
                
            </li>
            
           
        </ul>
        
        
        
        
        
        


    </body>

</html>
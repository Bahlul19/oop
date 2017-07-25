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
                    <?= $task['assigned_to'] ?>
                
            </li>
            
            
            <li>
                <strong>
                    Status:
                </strong>    
                <?= $task['completed']? 'Complete' : 'Incomplete' ?>    
                
            </li>
            
           
        </ul>
        
        
        
        
        
        


    </body>

</html>
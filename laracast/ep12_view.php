<!DOCTYPE html>
<html>
    
    <head>
        <title>
            Laracast
        </title>
    </head>
    <body>
        
        <ul>
          <!-- Foreach started-->       
         <?php foreach($task as $tasks) :?>
         
         
            <li>
                
                <!--If condition started-->
                <?php if($tasks->completed) :?>
                <!-- If want to first value
               strike then use upper formula otherwise use 
                if($tasks->complete()) if strikes all
                -->
            <strike>
                <?= $tasks->description; ?>
            </strike>
            
                <?php else : ?>
                <?= $tasks->description ?>
                <?php endif; ?>
            <!--If condition Ended-->
                
            </li>
             
         <?php endforeach; ?>
         <!-- Foreach Ended-->
    
            
        </ul>
        
        
        
    </body>
    
</html>
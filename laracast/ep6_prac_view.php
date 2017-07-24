<!DOCTYPE html>
<html>
    
    <head>
        <title>
            Laracast
        </title>
    </head>
    <body>
        
        <ul>
            
            
            <?php foreach($animals as $animal) :?>
            
            <li><?= $animal ?></li>
            
            <?php endforeach; ?>
            
        </ul>
        
        
        
    </body>
    
</html>
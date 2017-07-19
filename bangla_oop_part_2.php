<?php
include ('function.php');
?>








<!DOCTYPE html>
<html>
    <head>
        <title>
            Bangla OOP Part 2
        </title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Enter the first number
                    </td>
                    <td>
                        <input name ="num1" type="number">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Enter the Second number
                    </td>
                    <td>
                        <input name ="num2" type="number">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="calculation">
                            Calculation
                        </button>
                    </td>
                </tr>
                
                
            </table>
        </form>
    </body>
</html>


<?php

if(isset($_POST['calculation']))
{
    $numone = $_POST['num1'];
    $numtwo = $_POST['num2'];
    
    if(empty($numone) or empty($numtwo))
    {
        echo "<spam style='color:red'>You must fill up the field</span>";
    }
    else 
    {
       $cal = new Calculation();
       $cal -> add($numone,$numtwo);
       $cal -> substract($numone,$numtwo);
       $cal -> division($numone,$numtwo);
       $cal -> multiplication($numone,$numtwo);
    }
    
}


?>

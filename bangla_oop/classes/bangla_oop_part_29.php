<?php

//Php design pattern
//Part-1: Strategy Pattern 

spl_autoload_register(function($class_name){
   
    include("classes/".$class_name.".php");
    
});


$user = new User();

$message = $user->getMessage();


switch($message)
{
    case 'email':
        $objmsg =  new SendEmail();
        break;
    
    case 'sms':
        $objmsg = new SendSms();
        break;
    
    case 'fax':
        $objmsg = new SendFax();
        break;       
}

$objmsg -> notification();


?>

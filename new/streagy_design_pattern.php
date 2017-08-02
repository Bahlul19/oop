<?php

spl_autoload_register(function($class_name){
   include("classes/".$class_name.".php"); 
});


$user = new User();

$message = $user->getMessage();

switch($message)
{
    case "sendsms":
        $objMsg = new SendSms();
        break;
    case "sendemail":
         $objMsg = new SendEmail();
        break;
    case "sendemail":
         $objMsg = new SendFax();
        break;
}

$objMsg->notification();

?>
<?php

$myemail = "jasonfleetwood123@gmail.com";


$email_address = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$name = $_REQUEST['name'] ;
$subject = $_REQUEST['subject'] ;

$msg = 
"Name: " . $name ;
"Email: " . $email_address;
"message: " . $message ;

mail("$myemail", "$subject","$msg");

header("Location:../thankyou.html");
?>
<?php
 
// Warning: PHP does not load if it is not ran through a web server or localhost program

$name=$_POST['name'];
$city=$_POST['email'];
$phone=$_POST['phone'];
$email=$_POST['message'];

// Create the email and send it
 
$to = "jcharitybasketball@gmail.com";
$subject = "Contact Form Message";
$message = " Name: " . $name . "\r\n City: " . $email . "\r\n Phone: " . $phone . "\r\n Email: " . $message;
 
 
$from = "JCBL";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
// Check if any fields are empty; if not, send to successful message

if(empty($name) || empty($email) || empty($phone) || empty($message)) 
{
  header( 'Location: messagefailed.html') ;
}
else if(@mail($to,$subject,$message,$headers))
{
  header( 'Location: messagesent.html' ) ;
}else{
  header( 'Location: messagefailed.html');
}
 
?>

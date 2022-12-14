<?php
//get data from form  

$name = $_POST['fist name'];
$name = $_POST['last name'];
$email= $_POST['emailadress'];
$message= $_POST['write something'];
$number= $_POST['phone number']

$to = "sarahhersh@me.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message = " .  $message. " \r\n Phone number = ". $number  ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
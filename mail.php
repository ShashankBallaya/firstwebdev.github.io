<?php
//get data from form  

$Companyname = $_POST['Company name'];
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['Enquiry details'];
$to = "shashankballaya@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: shashankballaya@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
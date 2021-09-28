<?php
//get data from form  
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "tusharmunnu@gmail.com";
$subject = "Mail From website";
$txt ="name= ". $name . "\r\n email =" . $email . "\r\n  phone = " . $phone . "\r\n  message = " . $message .;
$headers = "From: tusharmunnu22@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
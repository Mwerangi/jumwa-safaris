<?php
//get data from form  
$to = "damazee@gmail.com";
$subject = "Mail From website";
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$expectedpeople = $_POST['expectedpeople'];
$safari = $_POST['safari'];
$message= $_POST['message'];
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone = " . $phone . "\r\n Expectedpeople = " . $expectedpeople . "\r\n  Safari = " . $safari . "\r\n  Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:received.php");
?>
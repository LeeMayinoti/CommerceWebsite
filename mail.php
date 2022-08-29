<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];
$to = "helixclothingonline@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\n Message =" . $message  ."  \r\n number =". $number;
$headers = "From: noreply@nashnaturals.000webhostapp.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
 mail($to,$subject,$txt,$headers);
}
//redirect
header("contact.html");
?>
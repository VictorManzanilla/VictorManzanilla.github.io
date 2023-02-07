<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['massage'];
// $to = "vmanzanilla7@gmail.com";
// $subject = "Mail from portfolio";

// $headers = "From: ".$name. "\r\n" .

$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "vmanzanilla7@gmail.com";

// 	 ($email!= NULL) {
// 	mail($name, $message)
// };

mail($recipient, $message, $mailheader)
or die("Error!");

header('Location:thankyou.html');






?>
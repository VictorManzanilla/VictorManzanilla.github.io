<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['massage'];


$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "vmanzanilla7@gmail.com";

if($email! = NULL){
	mail($name, $message)
};

mail($recipient, $message, $mailheader)
or die("Error!");

header('Location:thankyou.html');






?>
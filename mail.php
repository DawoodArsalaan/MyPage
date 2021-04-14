<?php

if(isset( $_POST['email']) &&  $_POST['email'] != '')
{
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $email_from = "mohammeddaawood78632@gmail.com";
    $to = "testingdawood@gmail.com";
    $subject = "Mail From $name from MyPage";
    $body = "";

    $body .= "Name : ". $name ."\r\n";
    $body .= "Email =  ". $email ."\r\n";
    $body .= "Message = ". $message."\r\n";
    $headers = "From : $email" . "\r\n";
    mail($to,$subject,$body,$headers);
}
//redirect
header("Location: index.html");
?>
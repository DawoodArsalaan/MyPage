<?php

if(isset( $_POST['submit']))
{
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $to = "dawoodmohammed4@outlook.com";
    $subject = "Mail From $name from MyPage";
    $body = "";

    $body .= "Name : ". $name ."\r\n";
    $body .= "Email =  ". $email ."\r\n";
    $body .= "Message = ". $message."\r\n";
    $headers = "From : $email" . "\r\n";
    mail($to,$subject,$body,$headers);

    //redirect
    header("Location: index.html");
}
?>
<?php


$message_sent = false;

if(isset( $_POST['email']) &&  $_POST['email'] !='') {

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    
$school = $_POST['school'];
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$comments = $_POST['comments'];

$to = "promiseprince01@gmail.com";
$body = "hello";

$body .= "From: ".$school. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Message: ".$comments. "\r\n";

mail($to, $title, $body);

$message_sent = true;

  } else {
    $invalid_class_name = "form-invalid";

  }
  


}


?>
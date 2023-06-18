<?php
// Retrieve the posted data
$data = json_decode(file_get_contents("php://input"), true);

// Extract the values
$full_name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$email_subject = $_POST['esub'];
$message = $_POST['msg'];



$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "portfolio";

if(!empty($email) && !empty($message)){
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $receiver = "panduanihar@gmail.com";
    $subject = "From: $name <$email>";
    $body = "Name: $full_name\nEmail: $email\nMobile: $Mobile\nEmail_Subject: $email_subject\n\nMessage: $message";
    $sender = "From: $email";
    if(mail($receiver, $subject, $body, $sender)){
       echo "Your messsage has been sent";
    }else{
      echo "Sorry, failed to send your message!";
    }
  }else{
    echo "Enter a valid email address!";
  }
}else{
  echo "Email and password field is required!";
}
?>
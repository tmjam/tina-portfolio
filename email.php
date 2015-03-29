<?php

use google\appengine\api\mail\Message;

$name=$email=$query="";
if($_SERVER["REQUEST_METHOD"]=="POST") {

   $name = $_POST["name"];
   $email = $_POST["email"];
   $query = $_POST["message"];

  require_once 'google/appengine/api/mail/Message.php';
    $mail_options = [
        "sender" => $email,
        "to" => "tmjam.ahmed@gmail.com",
        "subject" => "Contacting you from portfolio",
        "textBody" => $query,
    ];  

  try {
      $message = new Message($mail_options);
      $message->send();
      echo true;
  } catch (InvalidArgumentException $e) {
      echo false;
  }
} 
 ?>
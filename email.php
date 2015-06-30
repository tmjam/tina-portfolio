<?php
require_once 'google/appengine/api/mail/Message.php';
use google\appengine\api\mail\Message;

$name=$email=$query="";
if($_SERVER["REQUEST_METHOD"]=="POST") {

   $name = $_POST["name"];
   $email = $_POST["email"];
   $query = "Hi Kristina, '".$name."' with email '".$email."' tried contacting you with the following message: \n" . $_POST["message"];

  require_once 'google/appengine/api/mail/Message.php';
    $mail_options = [
        "sender" => "tmjam.ahmed@gmail.com",
        "to" => "kfinlayson9@gmail.com",
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
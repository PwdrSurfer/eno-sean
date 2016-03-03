<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "seaneno.snow@gmail.com";
  $subject = "Sean's Class Portal";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";

  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>

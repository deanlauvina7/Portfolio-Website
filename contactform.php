<?php

if (isset($_POST['contact'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = 'deanlauvina7@gmail.com';
  $headers = 'From: '.$mailFrom;
  $txt = 'You have received an email from '.$name.'.\n\n'.$message;

  mail($mailTo, $subject, $txt, $headers);
  header('Location: index.html?mailsend'); 
}
?>
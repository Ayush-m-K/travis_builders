<?php
  $to = 'winsfolio@gmail.com';
  $subject = 'Contact Request From Builty';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subjectt = $_POST['subject'];
  $message = $_POST['msg'];

$headers = [
    'From' => 'Builty <'.$email.'>',
    'Cc' => 'Builty <'.$email.'>',
    'X-Sender' => 'Builty <'.$email.'>',
    'X-Mailer' => 'PHP/' . phpversion(),
    'X-Priority' => '1',
    'Return-Path' => $email,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=iso-8859-1'
];


  $message = "************************************************** \r\n" .
             "Contact Request From Builty!  \r\n" .
             "************************************************** \r\n" .
            "Name: " . $name . "\r\n" .
            "E-mail: " . $email . "\r\n" .
            "Subject: " . $subjectt . "\r\n" .
            "Message: " . $message . "\r\n";



  $mail = mail($to, $subject, $message, $headers);
print_r($mail);exit;


 ?>
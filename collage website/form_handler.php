<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
              "User Email:$visitor_email.\n".
              "Subject:$subject.\n".
               "User message:$message.\n";

               
$to = '21bcs050vishal@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");


?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$content="From: $name \n Email: $email \n Message: $subject";
$recipient = "mauriciozm15@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];

$formcontent="From: $name \n Subject: $subject \n Message: $message";
$recipient="ines.moreno@mail.mcgill.ca";
$mailheader="From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo("Thank you for your message!");



?>
<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset($_POST['Subject']))
$subject = $_POST['Subject'];



$content="";
$recipient = "willejahbless@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content,$recipient, $mailheader) or die("Error!");
echo "Email sent!";
?>

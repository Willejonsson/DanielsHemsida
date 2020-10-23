<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(!empty($_POST["send"])) {
$name = $_POST["userName"];
$email = $_POST["userEmail"];
$subject = $_POST["subject"];
$content = $_POST["content"];

$toEmail = "villejonsson80@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
require_once "contact-view.php";






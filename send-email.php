<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// create instance of the php mailer class and set true as first argument
$mail = new PHPMailer(true)
$mail -> SMTPDebug = SMTP::DEBUG_SERVER;
// configure to send email
$mail -> isSMTP();
$mail -> SMTPAuth = true;

$mail -> host = "smtp.gmail.com";
$mail -> SMTPSecure = PHPMailer:: ENCRYPTION_STARTTLS;
$mail -> Port = 587;

$mail -> Username = "phestuskitsao359@gmail.com";
$mail -> Password = "osrtoqrrgrsunuyh";

// set receipient 
$mail -> setFrom($email, $name);
$mail -> addAddress('phestuskitsao359@gmail.com', 'Geotechlabs');

$mail -> Subject = $subject;
$mail -> Body = $message;

// Send email  
if($mail->send()){
    echo 'Email sent successfully';
}else{
    echo 'Error: '. $mail->ErrorInfo;
}
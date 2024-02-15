<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

$to = "phestuskitsao359@gmail.com";

$subject = $_POST['subject'];

$headers = "From: " . $_POST['email']; 

$message = $_POST['message'];

if(mail($to, $subject, $message, $headers)) {
  $result='sent';
} else {
  $result ='error'; 
}

echo $result;
die;  
}
?>

<?php
require 'PHPMailer/PHPMailer.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'codebusters8080@gmail.com';
$mail->Password = 'dtz pscc imyc crsz';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('codebusters8080@gmail.com');

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

if (!$mail->send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Email sent!";
}
?>
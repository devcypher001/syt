<?php
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

	$email = "sandeepdnp28@gmail.com";
	$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thakur5sunil@gmail.com';
$mail->Password = 'barcelona512';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = 'thakur5sunil@gmail.com';
$mail->FromName = 'Sunil Thakur';
$mail->AddAddress($email, "Guest user"); //To address who will receive this email

$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if($mail->send()) {
 	echo 'Message has been sent';
}
else
{
	echo "Not message";
}


?>
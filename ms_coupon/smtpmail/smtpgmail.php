<?php
include "classes/class.phpmailer.php"; // include the class name
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
$mail->addAddress('cruel.skt@gmail.com', 'Raj Amal W');
//$mail->addReplyTo('raj.amalw@gmail.com', 'Raj Amal W');
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam rockstar using SMTP mail from localhost';
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
?>


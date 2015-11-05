<?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
if(isset($_POST["send"])){
	$email = $_POST["email"];
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
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send mails using SMTP and PHP in PHP Mailer using our own server or gmail server by Asif18</title>
<meta name="keywords" content="send mails using smpt in php, php mailer for send emails in smtp, use gmail for smtp in php, gmail smtp server name"/>
<meta name="description" content="Send mails using SMTP and PHP in PHP Mailer using our own server or gmail server"/>
<style>
.as_wrapper{
	font-family:Arial;
	color:#333;
	font-size:14px;
}
.mytable{
	padding:20px;
	border:2px dashed #17A3F7;
	width:100%;
}
</style>
<body>
<div class="as_wrapper">
	<h1>Send mails using SMTP and PHP in PHP Mailer using our own server or gmail server</h1>
    <form action="" method="post">
    <table class="mytable">
    <tr>
    	<td><input type="email" placeholder="Email" name="email" /></td>
	</tr>
    <tr>
    	<td><input type="submit" name="send" value="Send via SMTP" /></td>
	</tr>
    </table>
    </form>
</div>
</body>
</html>
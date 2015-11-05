<?php
session_start();
include 'connect.php';
include 'categories/smtpmail/library.php'; // include the library file
include "categories/smtpmail/classes/class.phpmailer.php"; // include the class name
$email = @$_POST['email'];

$query = mysql_query("SELECT * FROM `syt_subscribe` WHERE `email` = '$email'");
$num_query = mysql_num_rows($query);

if($num_query == 0)
{

echo 1;
		$insert = mysql_query("INSERT INTO `syt_subscribe`(`id`, `email`, `time`) VALUES ('','$email',NOW())");
		
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host = 'in7.hostgator.in';
		$mail->SMTPAuth = true;
		$mail->Username = 'info@sellyourtime.in';
		$mail->Password = 'selltime86$';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->From = 'info@sellyourtime.in';
		$mail->FromName = 'Sellyourtime';
		$mail->AddAddress($email, "Sellyourtime"); //To address who will receive this email

		$mail->WordWrap = 550;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime Email Subscription';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $email,<br /><br />Welcome to sellyourtime.You recently requested an email subscription to Sellyourtime. We can't wait to send the updates you want via email. </td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyoutime team<br>Sell or Buy any service online. :)</I></td></tr>";
		$mail->Body .= "<tr><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='#' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a></tr>";
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			
		}
}
else
{
	echo 2;
}

?>
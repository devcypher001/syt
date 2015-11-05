<?php
session_start();
include '../connect.php';
include '../smtpmail/library.php'; // include the library file
include "../smtpmail/classes/class.phpmailer.php"; // include the class name

$email = @$_POST['email'];


$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' and `status`=0");

$qq = mysql_fetch_array($query);

$num_query= mysql_num_rows($query);

if($num_query == 0)
{
	echo 0;
}
else
{	
	echo 1;
	
	$pass = $qq['password'];
	$fn = $qq['firstname'];
	$ln = $qq['lastname'];
	$userid = str_rot13($qq['email']);
	
	$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'thakur5sunil@gmail.com';
		$mail->Password = 'barcelona512';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->From = 'thakur5sunil@gmail.com';
		$mail->FromName = 'Sellyourtime';
		$mail->AddAddress($email, "Sellyourtime Account Activate"); //To address who will receive this email

		$mail->WordWrap = 50;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime Account Activate';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><img src='http://appslure.com/sellyourtime/new/sellyourtime/register/images/sellyourtime.jpg' alt='PHP Gang' /></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $fn $ln,<br /><br />Somebody recently asked to reset your sellyourtime password.To re-active your account , Please enter the following activation code  <br>$userid</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyoutime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
	
		if($mail->send())
		{
			
		}
}
?>
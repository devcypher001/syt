<?php 
session_start();
include 'connect.php';
include '../register/smtpmail/library.php'; // include the library file
include "../register/smtpmail/classes/class.phpmailer.php"; // include the class name

$uid = $_SESSION['syt_id'];
$email = $_SESSION['syt_email'];

$rt = mysql_query("UPDATE `syt_registration` SET `status`=0 WHERE `id`='$uid'");

if($rt)
{
	echo 1;
	
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
																$mail->AddAddress($email, "Sellyourtime verify account"); //To address who will receive this email

																$mail->WordWrap = 50;
																$mail->isHTML(true);
																$mail->Subject = 'Sellyourtime Deactivate account';
																
																
																
																
																
																$mail->Body .= '<html><body>';
																$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
																$mail->Body .= "<tr><td><img src='http://sellyourtime.in/register/images/sellyourtime.jpg'/></td></tr>";
																$mail->Body .= "<tr><td colspan=2>To reactivate anytime in future,you can follow one of the two steps below.</br>
1.Click here to reactivate your SYT account.(This link should take directly to reactivate your account page where email is being asked)</br>
2.You can log on to Sell your time.Navigate to Login page and click forgot passowrd>Reactivate your account and follow the procedure.</br>
We wish you come back soon to utilize our services and offer yours
 </td></tr>";
																$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy service online</I></td></tr>"; 
																
																$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/profile/view?id=24124362' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
																
																$mail->Body .= "</table>";
																$mail->Body .= "</body></html>";
																
															
																if($mail->send())
																{
															
																}
}
else
{
	echo 0;
}
?>
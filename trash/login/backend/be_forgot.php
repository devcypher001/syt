<?php
session_start();
include '../connect.php';
include '../smtpmail/library.php'; // include the library file
include "../smtpmail/classes/class.phpmailer.php"; // include the class name

$email = @$_POST['email'];


$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' and `status`=1");

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
		$mail->AddAddress($email, "SYT"); //To address who will receive this email

		$mail->WordWrap = 550;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime password assistance';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><img src='http://sellyourtime.in/register/images/sellyourtime.jpg'/></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $fn $ln,<br /><br />Welcome to sellyourtime.<br>We received a request to retrieve the password associated with this e-mail address. If you made this request,<br>your password is <b>$pass</b>.<br>If you did not request to retrieve your password you can safely ignore this email. Rest assured your customer account is safe with us.</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
	
		if($mail->send())
		{
			
		}
}
?>
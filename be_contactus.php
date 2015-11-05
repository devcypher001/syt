<?php
include 'connect.php';

include 'register/smtpmail/library.php'; // include the library file
include "register/smtpmail/classes/class.phpmailer.php"; // include the class name

$first = @$_POST['first'];
$last = @$_POST['last'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];

$name = $first." ".$last;

$qq = mysql_query("INSERT INTO `syt_contactus`(`id`, `name`, `email`, `phone`, `time`) VALUES ('','$name','$email','$phone',NOW())");
if($qq)
{
	echo 1;
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'in7.hostgator.in';
	$mail->SMTPAuth = true;
	$mail->Username = 'info@sellyourtime.in';
	$mail->Password = 'selltime86$';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->From = 'info@sellyourtime.in';
	$mail->FromName = 'Sellyourtime contact us';
	$mail->AddAddress("contact@sellyourtime.in", "SYT"); //To address who will receive this email

	$mail->WordWrap = 50;
	$mail->isHTML(true);
	$mail->Subject = 'Sellyourtime contact us';
	
	$mail->Body .= '<html><body>';
	$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
	$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
	$mail->Body .= "<tr><td colspan=2>Welcome to sellyourtime<br>Name : $name<br>Email : $email <br>Phone : $phone</td></tr>";
	$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
	$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
	$mail->Body .= "</table>";
	$mail->Body .= "</body></html>";
	
	if($mail->send()) 
	{
		// echo 1;target="_blank"
	}
}
else
{
	echo 0;
}
?>
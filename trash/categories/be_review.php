<?php 
include '../connect.php';
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name
$name = @$_POST['name'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];
$comment = @$_POST['comment'];
$review = @$_POST['review'];
$star = @$_POST['star'];
$userid = @$_POST['userid'];

$re = mysql_query("INSERT INTO `syt_review`(`id`, `name`, `email`, `phone`, `comment`,`star`,`user_id`,`time`) VALUES ('','$name','$email','$phone','$comment','$star','$userid',NOW())");

if($re)
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
	$mail->FromName = 'Sellyourtime';
	$mail->AddAddress($review, "SYT"); //To address who will receive this email

	$mail->WordWrap = 550;
	$mail->isHTML(true);
	$mail->Subject = 'Sellyourtime review notification';
																
	$mail->Body .= '<html><body>';
	$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
	$mail->Body .= "<tr><td><a href='http://www.sellyourtime.in'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg'/></a></td></tr>";
	$mail->Body .= "<tr><td colspan=2>Greetings from SYT!<br/><br/>Welcome to sellyourtime. $name has posted a review for your work on your profile page as below.<br>Email : $email<br>Phone Number : $phone<br>Review text : $comment<br>He has given you $star stars.<br/><br/>If you think, this is an abuse of your profile or do not accept this,kindly mail us contact@sellyourtime.in.
We shall look into it and take appropriate step.
</td></tr>";
	$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
	$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/profile/view?id=24124362' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>"; 
	$mail->Body .= "</table>";
	$mail->Body .= "</body></html>";
															
	if($mail->send())
	{
		
	}
}
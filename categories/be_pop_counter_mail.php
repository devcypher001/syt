<?php
session_start();
include "connect.php";
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class 

$email = @$_POST['email'];
$user = @$_POST['user'];
$user_name = @$_POST['name'];

$uuid = $_SESSION['syt_id'];

// echo $email." - ".$user." - ".$name;

$post = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$user'");

$p = mysql_fetch_array($post);


$check_privacy = mysql_query("SELECT  `privacy` FROM `syt_registration` WHERE `id`='$uuid'");

$fetch_check_privacy = mysql_fetch_array($check_privacy);

if($fetch_check_privacy['privacy'] == 1 || $fetch_check_privacy['privacy'] == 0)
{
	$user_email = $p['email'];
$user_phone = $p['phone'];
$user_name1 = $p['firstname']." ".$p['lastname'];


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
		$mail->Subject = 'Sellyourtime Info';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $user_name ,<br /><br />Welcome to Sellyourtime. <br>Please find below the details of the service provider you were looking for <br>Name : $user_name1<br>Email : $user_email<br>Phone : $user_phone<br>For further details regarding charges,available and location of this service provider, you can view his profile <a href='http://sellyourtime.in/categories/profile.php?id=$user'>here</a></td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			
			
		}
}
else
{
	$user_email = $p['email'];
$user_phone = $p['phone'];
$user_name1 = $p['firstname']." ".$p['lastname'];

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

		$mail->WordWrap = 50;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime Info';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><img src='http://sellyourtime.in/register/images/sellyourtime.jpg'  /></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $user_name ,<br /><br />Welcome to sellyourtime. <br>Please find below the details of the service provider you were looking for <br>Name : $user_name1<br>Email : $user_email<br>Phone : ************<br>For further details regarding charges,available and location of this service provider, you can view his profile <a href='http://sellyourtime.in/categories/profile.php?id=$user'>here</a></td></tr>";
		
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
		}
}
?>
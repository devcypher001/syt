<?php
include "connect.php";
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class 

$name = @$_POST['name'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];
$description = @$_POST['description'];
$location = @$_POST['location'];
$user = @$_POST['user'];
$allow = @$_POST['allow']=="on"?1:0;


$post = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$user'");

$p = mysql_fetch_array($post);
$user_name = $p['firstname']." ".$p['lastname'];
$user_email = $p['email'];
$user_phone = $p['phone'];

$insert = mysql_query("INSERT INTO `syt_lead`(`id`, `name`, `email`,`phone` ,`description`, `user_id`, `time`,`location`,`allow`) VALUES ('','$name','$email','$phone','$description',$user,NOW(),'$location',$allow)");

if($insert)
{

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
		$mail->AddAddress($user_email, "SYT"); //To address who will receive this email

		$mail->WordWrap = 550;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime Lead';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear $user_name ,<br /><br />Welcome to sellyourtime. $user_name, $name following buyer has contacted you.<br><u>Buyer Details</u><br>Email : $email<br>Phone Number : $phone <br>Description : $description<br>Location : $location</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online. :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			echo 1;
			
		}
}
else
{
	echo 2;
}
?>
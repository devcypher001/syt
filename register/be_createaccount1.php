<?php
session_start();
include '../connect.php';

include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

$firstname = @$_POST['firstname'];
$lastname = @$_POST['lastname'];

$phone = @$_POST['phone'];
$address = @$_POST['address'];
$zip = @$_POST['zip'];
$city = @$_POST['city'];
$country = @$_POST['country'];

$email = @$_POST['email'];
$pass = @$_POST['pass'];
$title = @$_POST['title'];
$gender = @$_POST['gender'];
$dob = @$_POST['dob'];

$dob1 = substr($dob,0,4);
$dob2 = date('Y');
$dob3 = $dob2 - $dob1 >= 15 ? "ok" : "no";

if($dob3 == "ok")
{
	$insert = mysql_query("INSERT INTO `syt_registration`(`id`, `email`, `password`, `firstname`, `lastname`, `individual`, `category`, `subcategory`,`other`, `experience`, `experience_details`, `doc`, `phone`, `address`, `zip`, `city`, `country`, `service_distance`, `charge`, `title`, `time`, `service_day`,`gender`, `dob`, `service_mode`, `status`) VALUES ('','$email','$pass','$firstname','$lastname','','','','','','','','$phone','$address','$zip','$city','$country','','','$title',NOW(),'','$gender','$dob','',0)");
	
	if($insert)
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
		$mail->AddAddress($email, "SYT"); //To address who will receive this email

		$mail->WordWrap = 550;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime verify account';
		
		
		$mail->Body .= '<html><body>';
															$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
															$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
															$mail->Body .= "<tr><td colspan=2>Dear $firstname $lastname,<br /><br />You are just one step away from signing up on SYT.All you need to do is verify $email as your Sellyourtime ID.<br>To activate click on the link below</td></tr>";
															$mail->Body  .= "<tr><td colspan=2 font='color:#999999;'>http://www.sellyourtime.in/register/verify.php?id=".str_rot13($email)."</td></tr>";
															$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
															
															$mail->Body .= "<tr><td colspan=2 font='color:#999999;'>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></td></tr>";
															
															$mail->Body .= "</table>";
															$mail->Body .= "</body></html>";
															
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
}
else
{
	echo 2;
}
?>
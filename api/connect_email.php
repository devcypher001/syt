<?php
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";

function send_mail($user_name,$user_email,$user_phone,$name,$email,$phone,$location,$description)
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
		$mail->Body .= "<tr><td colspan=2>Dear $user_name ,<br /><br />Welcome to Sellyourtime. $user_name, $name following buyer has contacted you.<br><u>Buyer Details</u><br>Email : $email<br>Phone Number : $phone <br>Description : $description<br>Location : $location</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online. :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
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
			    $mail->AddAddress($email, "SYT"); //To address who will receive this email
			
			    $mail->WordWrap = 550;
			    $mail->isHTML(true);
			    $mail->Subject = 'Sellyourtime Info';
			    
			    
			    $mail->Body .= '<html><body>';
			    $mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
			    $mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
			    $mail->Body .= "<tr><td colspan=2>Dear $name ,<br /><br />Welcome to Sellyourtime. <br>Please find below the details of the service provider you were looking for <br>Name : $user_name<br>Email : $user_email<br>Phone : $user_phone<br>For further details regarding charges,available and location of this service provider, you can view his profile <a href='http://sellyourtime.in/categories/profile.php?id=$user'>here</a></td></tr>";
			    $mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
			    $mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
			    $mail->Body .= "</table>";
			    $mail->Body .= "</body></html>";
			    
			    if($mail->send())
			    {
			      
			      
			    }
			
		}
}
?>
<?php
include '../connect.php';
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";

$email = $_GET['email'];
$otp = $_GET['otp'];
$phone = $_GET['phone'];

if(strlen($phone) == 10){
	$profile_phone = "91".$phone;
}else{
	$profile_phone = $phone;
}

$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=syt001&To=91$phone&Text=Hi%20Thank%20you%20for%20signing%20up%20on%20SellYourTime.Please%20enter%20the%20OTP-$otp%20to%20confirm%20the%20registration.%20Use%20our%20all%20free%20platform%20to%20find%20qualified%20business%20leads%20and%20quality%20service%20providers.%20SYT%20Team");
 
$json = array("status" => 1, "msg" => "Success");

echo "[".json_encode($json)."]";

send_mail($email,$otp);

function send_mail($email,$otp)
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
		$mail->Subject = 'OTP for SellYourTime';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Hi<br>
Thank you for signing up on  SellYourTime.Please enter the OTP : $otp to confirm the registration.
Use our all free platform to find qualified business leads and quality service providers.
SYT Team.
</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online. :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			    /*$mail = new PHPMailer;
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
			      
			      
			    }*/
			
		}
}
?>
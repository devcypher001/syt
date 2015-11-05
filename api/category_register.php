<?php

include '../connect.php';

include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";

$name = @$_GET['name'];
$email = @$_GET['email'];
$phone = @$_GET['phone'];
$requirement = @$_GET['requirement'];
$category = @$_GET['category'];
$subcategory = @$_GET['subcategory'];

$insert = mysql_query("INSERT INTO `syt_category_interest`(`id`, `name`, `email`, `phone`, `requirement`, `category`, `subcategory`) VALUES ('','$name','$email','$phone','$requirement','$category','$subcategory')");

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
		$mail->AddAddress("sandeepdnp28@gmail.com", "SYT"); //To address who will receive this email

		$mail->WordWrap = 50;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime interest registered';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Thank you for posting your interest ,<br /><br />Greetings!<br>.
You may further email the buyer or contact offline and negotiate on charges and other terms.

For any other queries,you can mail us at <a href='mailto:contact@sellyourtime.in'>contact@sellyourtime.in 
</a></td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/profile/view?id=24124362' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			$json = array("status" => 1, "msg" => "Success");
		}
}
else
{
	$json = array("status" => 1, "msg" => "Bad");
}
echo "[".json_encode($json)."]";
?>
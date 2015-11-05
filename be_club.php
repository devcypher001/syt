<?php
include 'connect.php';

include 'categories/smtpmail/library.php'; // include the library file
include "categories/smtpmail/classes/class.phpmailer.php"; // include the class 

$first = @$_POST['first'];
$last = @$_POST['last'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];

$st = @$_POST['st'];
$bt = @$_POST['bt'];

$sb = $st."".$bt;

$new_sb = str_replace("undefined","",$sb);


$qq = mysql_query("INSERT INTO `syt_club`(`id`, `firstname`, `lastname`, `phone`, `email`, `title`, `time`) VALUES ('','$first','$last','$phone','$email','$new_sb',NOW())");
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
		$mail->FromName = 'Sellyourtime';
		$mail->AddAddress("31.akshay@gmail.com", "Sellyourtime club new registration"); //To address who will receive this email

		$mail->WordWrap = 50;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime club new registration';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><img src='http://sellyourtime.in/register/images/sellyourtime.jpg'  /></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Hi,<br> Someone registered on SYT club<br>Name : $first $last<br>Email : $email<br>Phone : $phone<br>Interested to $new_sb</a></td></tr>";
		
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
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
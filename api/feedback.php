<?php
include '../connect.php';
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";
$email = $_GET['email'];//name,img,id
//name,subcategories,location,phone

$message = $_GET['message'];

$admin_email = "31.akshay@gmail.com";

$admin_query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");

$fetch_admin_query = mysql_fetch_array($admin_query);

//---------------------------------
$name = $fetch_admin_query['firstname']." ".$fetch_admin_query['lastname'];
$subcategory = $fetch_admin_query['subcategory'];
$location = $fetch_admin_query['zip'];
$phone = $fetch_admin_query['phone'];
//---------------------------------

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
		$mail->AddAddress($admin_email, "SYT"); //To address who will receive this email

		$mail->WordWrap = 550;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime Feedback';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear Akshay Arora ,<br /><br /> Name : $name<br>Subcategory : $subcategory<br>Location : $location<br>Phone : $phone <br>Message : $message</td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online. :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
				$json = array("status" => 1, "msg" => "Mail sent");
		}

		echo "[".json_encode($json)."]";

?>
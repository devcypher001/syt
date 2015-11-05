<?php
include '../connect.php';

include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

$name = @$_POST['name'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];
$requirement = @$_POST['requirement'];
$category = @$_POST['category'];
$subcategory = @$_POST['subcategory'];

//echo $name." - ".$email." - ".$phone." - ".$requirement." - ".$category." - ".$subcategory;

$category= mysql_query("SELECT * FROM `syt_registration` WHERE `subcategory` = '$subcategory'");

if(mysql_num_rows($category) != 0)
{

while($row = mysql_fetch_assoc($category))
{

$sender_email = $row['email'];
          
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
		$mail->AddAddress($sender_email, "SYT"); //To address who will receive this email

		$mail->WordWrap = 50;
		$mail->isHTML(true);
		$mail->Subject = 'Sellyourtime interest registered';
		
		
		$mail->Body .= '<html><body>';
		$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
		$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
		$mail->Body .= "<tr><td colspan=2>Dear SYT member ,<br /><br />Greetings!<br>Following buyer has been looking for your services.<br /><br /><u>Buyer Details</u><br />Name : $name<br />Email : $email<br>Phone Number : $phone<br />Requirement : $requirement<br />Category : $category<br />Subcategory : $subcategory<br /><br />You can contact the buyer to offer him your services.
You may further email the buyer or contact offline and negotiate on charges and other terms.

For any other queries,you can mail us at <a href='mailto:contact@sellyourtime.in'>contact@sellyourtime.in 
</a></td></tr>";
		$mail->Body .= "<tr><td colspan=2 font='colr:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>"; 
		
		$mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/profile/view?id=24124362' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
		
		$mail->Body .= "</table>";
		$mail->Body .= "</body></html>";
		
		if($mail->send())
		{
			
		}
}  
}

?>
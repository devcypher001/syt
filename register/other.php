<?php
session_start();
include '../connect.php';

include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

$email = "31.akshay@gmail.com";



														
														
																
															$mail = new PHPMailer;
																$mail->isSMTP();
																$mail->Host = 'smtp.gmail.com';
																$mail->SMTPAuth = true;
																$mail->Username = 'thakur5sunil@gmail.com';
																$mail->Password = 'barcelona512';
																$mail->SMTPSecure = 'tls';
																$mail->Port = 587;
																$mail->From = 'thakur5sunil@gmail.com';
																$mail->FromName = 'Sellyourtime';
																$mail->AddAddress($email, "Sellyourtime other category"); //To address who will receive this email

																$mail->WordWrap = 50;
																$mail->isHTML(true);
																$mail->Subject = 'Sellyourtime other category';
																
																
																$mail->Body .= '<html><body>';
																$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
																$mail->Body .= "<tr><td><img src='http://appslure.com/sellyourtime/new/sellyourtime/register/images/sellyourtime.jpg' /></td></tr>";
																$mail->Body .= "<tr><td colspan=2>Somebody just signed up in others category as 'UX developer'</I></td></tr>"; 
																$mail->Body .= "</table>";
																$mail->Body .= "</body></html>";
																
															
																if($mail->send())
																{
																	echo "okk";
																}
		
?>
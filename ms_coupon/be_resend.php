<?php
include "smtpmail/classes/class.phpmailer.php"; // include the class name
include 'db.php';
$name= @$_POST['name'];
$phone= @$_POST['phone'];
$email= @$_POST['email'];
/* GENERATE OTP */
  function generate_random_password($length = 10) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
    $additional_characters = array('_','.');
    $final_array = array_merge($alphabets,$numbers,$additional_characters);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }
$otp = generate_random_password(8);
/* ENTER INTO DATABASE */
$sql = mysql_query("UPDATE `user` SET `otp`='$otp' , `validate`='0'  WHERE `email`='$email'");
/*SEND OTP EMAIL */
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thakur5sunil@gmail.com';
$mail->Password = 'barcelona512';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = 'thakur5sunil@gmail.com';
$mail->FromName = 'MARKS & SPENCER';
$mail->addAddress($email,$name);
//$mail->addReplyTo('raj.amalw@gmail.com', 'Raj Amal W');
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'MARKS & SPENCER OTP';
$mail->Body    = 'Hi , Please find your OTP: <b>'.$otp.'</b><br> Thank You';
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'OTP has Resend to your email id';
file_get_contents("http://luna.a2wi.co.in:7501/failsafe/HttpLink?aid=572538&pin=mk@1&message=One%20Time%20Password%20for%20Marks%20and%20Spencer%20EOSS%20Offer%20is%20$otp.%20Please%20use%20this%20password%20to%20complete%20your%20transaction.%20For%20any%20query%20contact%20Care.India@marksandspencer.com&mnumber=91$phone");
?>
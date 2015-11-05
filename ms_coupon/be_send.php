<?php
include "smtpmail/classes/class.phpmailer.php"; // include the class name
include "smtpmail/library.php"; // include the class name
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
$s = mysql_query("SELECT * FROM `user` WHERE `email`='$email'");
if(mysql_num_rows($s))
{
  $a = mysql_fetch_array($s);
  $id = $a['id'];
  $sql1 = mysql_query("UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`otp`='$otp',`validate`='0' WHERE `id`='$id'");
}
else
{
 $sql = mysql_query("INSERT INTO `user`(`id`, `name`, `email`, `phone`, `otp`, `validate`, `coupon`) VALUES ('','$name', '$email', '$phone', '$otp', '0', '')"); 
}
/*SEND OTP EMAIL */
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thakur5sunil@gmail.com';
$mail->Password = 'barcelona512';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
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
echo 'OTP has send to your Mobile Number';

/* Phone SMS */

$response=file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=syt001&To=91$phone&Text=One%20Time%20Password%20for%20M%26S%20EOSS%20Offer%20is%20$otp.%20Please%20use%20this%20password%20to%20complete%20your%20transaction.%20For%20any%20query%20contact%20Care.India@marksandspencer.com");

print_r($response);

/* 
$url = "http://luna.a2wi.co.in:7501/failsafe/HttpLink";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'aid=572538&pin=mk@1&message=testmessage&mnumber=919818396512');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
echo $result;
*/
?>
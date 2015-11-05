<?php
session_start();
include "../connect.php";
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class 

$user = @$_POST['user'];

$name = @$_POST['name'];
$email = @$_POST['email'];
$location = @$_POST['location'];
$phone = @$_POST['phone'];
$description = @$_POST['description'];


$query = mysql_query("SELECT `userid` FROM `syt_post` WHERE `id`='$user'");
$fetch_query = mysql_fetch_array($query);

$userid = $fetch_query['userid'];

//echo $userid;
//echo $user." ".$name." ".$email." ".$location." ".$phone." ".$description;

$select_person = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$userid'");
$fetch_select_person = mysql_fetch_array($select_person);
$sender_email = $fetch_select_person['email'];
$fullname = $fetch_select_person['firstname']." ".$fetch_select_person['lastname'];

$title = $fetch_select_person['title'];

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

      $mail->WordWrap = 550;
      $mail->isHTML(true);
      $mail->Subject = 'Sellyourtime Seller Reply';
      
      
      $mail->Body .= '<html><body>';
      $mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
      $mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
      $mail->Body .= "<tr><td colspan=2>Dear $fullname ,<br /><br />Welcome to Sellyourtime. <br>You had posted this service requirement on Sellyourtime https://www.sellyourtime.in/categories/blog-post.php?postid=$user <br><br>A service provider has contacted you.<br>Please find below the details of the service provider<br>Name : $name<br>Email : $email<br>Phone : $phone<br>Location : $location <br>Description : $description<br><br>For further details regarding charges,availability and location of this service provider<br><br>You can use the contact information as above.</td></tr>";
      $mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
      $mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
      $mail->Body .= "</table>";
      $mail->Body .= "</body></html>";
      
      if($mail->send())
      {
         
         
      }
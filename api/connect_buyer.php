<?php
include '../connect.php';
include  'gcm_message.php';
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";


$name = $_GET['name'];
$email = $_GET['email'];
$phone= $_GET['phone'];
$location = $_GET['location'];
$desc = $_GET['desc'];

$postid = $_GET['postid'];

$query = mysql_query("SELECT * FROM `syt_post` WHERE `id`='$postid'");

$fetch_query = mysql_fetch_array($query);

$userid = $fetch_query['userid'];

$post_subcategory =  $fetch_query['subcategory'];

$select_person = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$userid'");

$fetch_select_person = mysql_fetch_array($select_person);

$sender_email = $fetch_select_person['email'];

$name_encode = urlencode($name);

if(strlen($fetch_select_person['phone']) == 10){
	$sender_phone = "91".$fetch_select_person['phone'];
}else{
	$sender_phone = $fetch_select_person['phone'];
}

$fullname = $fetch_select_person['firstname']." ".$fetch_select_person['lastname'];

$title = $fetch_select_person['title'];

$regID = $fetch_select_person['regID'];

//$userid = $fetch_select_person['id'];

$selected_user = array();


$a=array();
array_push($a,"$regID");

//------------------------------------------------------------
$qqq = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$find_connector_query= mysql_fetch_array($qqq);
$userid=$find_connector_query['id'];
//------------------------------------------------------------



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
      $mail->Body .= "<tr><td colspan=2>Dear $fullname ,<br /><br />Welcome to Sellyourtime. <br>You had posted this service requirement on Sellyourtime https://www.sellyourtime.in/categories/blog-post.php?postid=$postid <br><br>A service provider has contacted you.<br>Please find below the details of the service provider<br>Name : $name<br>Email : $email<br>Phone : $phone<br>Location : $location <br>Description : $desc<br><br>For further details regarding charges,availability and location of this service provider<br><br>You can use the contact information as above.</td></tr>";
      $mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or buy any service online :)</I></td></tr>";
      $mail->Body .= "<tr>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></tr>";
      $mail->Body .= "</table>";
      $mail->Body .= "</body></html>";
      
      if($mail->send())
      {
         $json = array("status" => 1, "msg" => "Submitted Successfully");
        // $response = @file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=gdjmp&To=$sender_phone&Text=A service provider has contacted you");
         
         //$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=gdjmp&To=91$sender_phone&Text=Hi! I saw your requirement for $post_category on SellYourTime. I am a registered service provider on SYT.You can call me on  $phone. to hire me for my services.Regards,$name");
         
         $response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=syt001&To=$sender_phone&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.%20Kindly%20contact%20me%20on%20$phone%20for%20more%20details.%20Regards,%20$name_encode");       
      }
      else
      {
      	$json = array("status" => 0, "msg" => "Registration Failed");
      }
      
      echo "[".json_encode($json)."]";
      
      
      
      //-----------------------------------------------------------------
      	//echo "<pre>",print_r($a),"</pre>";
      	$notification_type = "Seller";
	$greetMsg = "$name has tried to contact you for your requirement.View profile";
	$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","userid":"'.$userid.'","sender_email":"'.$sender_email.'"}';
	
	
	$message = array("m" => $respJson); 
	
	$pushsts = sendPushNotificationToGCM($a, $message); 
	
      
      //-----------------------------------------------------------------
?>
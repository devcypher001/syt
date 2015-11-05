<?php
include  '../gcm_message.php';
include '../../connect.php';

$message = $_POST['message'];
$category = $_POST['category'];

$selected_user=array();
$regID = mysql_query("SELECT * FROM `syt_registration` where `regID` <> '' AND `title`='Seller' AND `category`='$category'");
//$fetch_regID = mysql_fetch_array($regID);
while($row = mysql_fetch_assoc($regID))
{
	array_push($selected_user, $row['regID']);
}

$notification_type = "admin";
$greetMsg = "$message";
$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'"}';
	
$message = array("m" => $respJson); 
	
$pushsts = sendPushNotificationToGCM($selected_user, $message);

echo 1;
?>
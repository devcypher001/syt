<?php
date_default_timezone_set('Asia/Kolkata');

include  '../gcm_message.php';
include '../../connect.php';

$message = @$_POST['message'];
$seller_id = @$_POST['seller_id'];

$selected_user=array();
$regID = mysql_query("SELECT * FROM `syt_registration` where `regID` <> ''");

$query = mysql_query("INSERT INTO `service_provider_of_the_week`(`id`, `seller_id`, `message`, `regtime`) VALUES ('','$seller_id','$message',NOW())");
//$fetch_regID = mysql_fetch_array($regID);
while($row = mysql_fetch_assoc($regID))
{
	array_push($selected_user, $row['regID']);
}

$notification_type = "service_provider";
$greetMsg = "$message";
$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","seller_id":"'.$seller_id.'"}';
	
$message = array("m" => $respJson); 
	
$pushsts = sendPushNotificationToGCM($selected_user, $message);

echo 1;
?>
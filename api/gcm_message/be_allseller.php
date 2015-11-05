<?php
include  '../gcm_message.php';
include '../../connect.php';

$d = $_POST['d'];
$d1 = $_POST['d1'];
$message = $_POST['message'];
$http_link = $_POST['http_link'];

$selected_user=array();
$regID = mysql_query("SELECT * FROM `syt_registration` where (`time` BETWEEN '$d' AND '$d1') AND (`regID` <> '' AND `title`='Seller')");
//$fetch_regID = mysql_fetch_array($regID);
while($row = mysql_fetch_assoc($regID))
{
	array_push($selected_user, $row['regID']);
}

$notification_type = "admin_message";
$greetMsg = "$message";
$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","http_link":"'.$http_link.'"}';
	
$message = array("m" => $respJson); 
	
$pushsts = sendPushNotificationToGCM($selected_user, $message);

echo 1;
?>
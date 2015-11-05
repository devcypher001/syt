<?php
include  '../gcm_message.php';
include '../../connect.php';

$message = $_POST['message'];
$d = $_POST['d'];
$d1 = $_POST['d1'];
$http_link = $_POST['http_link'];

$regID = mysql_query("SELECT * FROM `syt_registration` where (`time` BETWEEN '$d' AND '$d1') AND (`regID` <> '')");

for($i=0;$i<=mysql_num_rows($regID);$i+=1000)
{
	sendTogcm($i,$d,$d1,$http_link);
}

function sendTogcm($i,$message,$gender,$http_link)
{
	
	
	
	$selected_user=array();
	
	$regID1 = mysql_query("SELECT * FROM `syt_registration` where (`time` BETWEEN '$d' AND '$d1') AND (`regID` <> '') LIMIT $i , 1000");
	
	
	
	
	while($row = mysql_fetch_assoc($regID1))
	{
		array_push($selected_user, $row['regID']);
	
	}
	
	$notification_type = "admin_message";
	$greetMsg = "$message";
	$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","http_link":"'.$http_link.'"}';
	
	$message = array("m" => $respJson); 
	
	$pushsts = sendPushNotificationToGCM($selected_user, $message);
	
}

echo 1;
?>
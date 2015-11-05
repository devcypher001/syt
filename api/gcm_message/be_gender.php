<?php
include  '../gcm_message.php';
include '../../connect.php';

$message = $_POST['message'];
$gender = $_POST['gender'];
$http_link = $_POST['http_link'];

$regID = mysql_query("SELECT * FROM `syt_registration` where (`regID` <> '' AND `gender`='$gender')");
//$fetch_regID = mysql_fetch_array($regID);

for($i=0;$i<=mysql_num_rows($regID);$i+=1000)
{
	sendTogcm($i,$message,$gender,$http_link);
}

function sendTogcm($i,$message,$gender,$http_link)
{
	
	
	$data = array();
	
	$selected_user=array();
	
	$regID1 = mysql_query("SELECT * FROM `syt_registration` where (`regID` <> '' AND `gender`='$gender') LIMIT $i , 1000");
	
	
	
	
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


echo "<pre>";
var_dump($pushsts);
echo "</pre>";

?>
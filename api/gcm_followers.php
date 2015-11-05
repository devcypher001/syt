<?php
include '../connect.php';
include  'gcm_message.php';

$message = $_GET['message'];
$follower_id =  $_GET['follower_id'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$fullname = $fetch_query['firstname']." ".$fetch_query['lastname'];
$id = $fetch_query['id'];

//---------------------------------------------------------

$selected_user = array();

//$follower_id = "80,143";
$explode_user = explode(',', $follower_id);
$email = $_GET['email'];

foreach($explode_user as $element)
{
	$query1 = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$element'");
	$fetch_query1 = mysql_fetch_array($query1);
	
	array_push($selected_user,$fetch_query1['regID']);
}

$json = array("status" => 1, "msg" => "Gotcha");

echo "[".json_encode($json)."]";

//---------------------------------------------------------
$notification_type = "Follower";
$greetMsg = $message;
$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","fullname":"'.$fullname.'","email":"'.$email.'","id":"'.$id.'"}';
	
$message = array("m" => $respJson); 
	
$pushsts = sendPushNotificationToGCM($selected_user, $message);

?>
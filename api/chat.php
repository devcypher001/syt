<?php
include '../connect.php';
include  'gcm_message.php';

$id = $_GET['id'];
$mw = $_GET['message'];
$email = $_GET['email'];

$qq = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email'");
$fetch_qq = mysql_fetch_array($qq);
$userid = $fetch_qq['id'];
$fullname = $fetch_qq['firstname']." ".$fetch_qq['lastname'];


$chat_history = mysql_query("INSERT INTO `chat_history`(`id`, `sender`, `receiver`, `message`,`time`) VALUES ('','$userid','$id','$mw',NOW())");

if(!empty($fetch_qq['image']))
	{
		$image = $fetch_qq['image'];
	}
	else
	{
		$image = "default_avatar_man.png";
	}
//-----------------------------------------------------------------------------------
$q= mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$id'");
$fetch_q = mysql_fetch_array($q);
$selected_user = array($fetch_q['regID']);

//print_r($selected_user);

if(!empty($fetch_q['regID']))
{
	$notification_type = "Chat";
	$greetMsg = $mw;
	$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","userid":"'.$userid.'","fullname":"'.$fullname.'","image":"'.$image.'"}';
		
	$message = array("m" => $respJson); 
		
	$pushsts = sendPushNotificationToGCM($selected_user, $message); 
		
	$json = array("status" => 1, "msg" => "message sent");
}
else
{
	$json = array("status" => 2, "msg" => "GCM not found");
}



echo "[".json_encode($json)."]";
?>
<?php
include  'gcm_message.php';
include '../connect.php';
$email = $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$profileId = $fetch_query['id'];

$fullname = $fetch_query['firstname']." ".$fetch_query['lastname'];

$loginId = $_GET['loginId'];

$selected_user=array();
//----------------------------------
$regID = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$loginId'");
//$fetch_regID = mysql_fetch_array($regID);
while($row = mysql_fetch_assoc($regID))
{
	array_push($selected_user, $row['regID']);
}
//----------------------------------

$check = mysql_query("SELECT * FROM `follow` WHERE `follower`='$loginId' AND `followed`='$profileId'");

if(mysql_num_rows($check) == 1)
{
	$delete = mysql_query("DELETE FROM `follow` WHERE `follower`='$loginId' AND `followed`='$profileId'");
	if($insert)
	{
		$json = array("status" => 3, "msg" => "Unfollowed successfully");
	}
	else
	{
		$json = array("status" => 2, "msg" => "Unfollowed failure");
	}
}
else
{
	$insert = mysql_query("INSERT INTO `follow`(`id`, `follower`, `followed`, `time`) VALUES ('','$loginId','$profileId',NOW())");
	if($insert)
	{
		$json = array("status" => 1, "msg" => "insert success");
		
		$notification_type = "followed";
		$greetMsg = "$fullname has followed your profile.";
		$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'"}';
			
		$message = array("m" => $respJson); 
			
		$pushsts = sendPushNotificationToGCM($selected_user, $message);
	}
	else
	{
		$json = array("status" => 0, "msg" => "insert failure");
	}
}


echo "[".json_encode($json)."]";
?>
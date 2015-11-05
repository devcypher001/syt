<?php
include  'gcm_message.php';
include '../connect.php';
$email = $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$profileId = $fetch_query['id'];

$loginId = $_GET['loginId'];


$check = mysql_query("SELECT * FROM `follow` WHERE `follower`='$loginId' AND `followed`='$profileId'");

if(mysql_num_rows($check) == 1)
{
	$json = array("status" => 2, "msg" => "Already followed");
}
else
{
	$insert = mysql_query("INSERT INTO `follow`(`id`, `follower`, `followed`, `time`) VALUES ('','$loginId','$profileId',NOW())");
	if($insert)
	{
		$json = array("status" => 1, "msg" => "insert success");
	}
	else
	{
		$json = array("status" => 0, "msg" => "insert failure");
	}
}


echo "[".json_encode($json)."]";
?>
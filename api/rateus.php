<?php
include '../connect.php';

$email = $_GET['email'];
$profileId = $_GET['profileId'];
$rate = $_GET['rate'];

$query = mysql_query("INSERT INTO `syt_review`(`id`, `name`, `email`, `phone`, `comment`, `star`, `user_id`, `time`) VALUES ('','','$email','','','$rate','$profileId',NOW())");

if($query)
{
	$json = array("status" => 1, "msg" => "rate Successfully !!!!");
}
else
{
	$json = array("status" => 0, "msg" => "Error While rate");
}

echo "[".json_encode($json)."]";
?>
<?php
include '../connect.php';

$old_password = $_GET['oldpassword'];
$new_password = $_GET['newpassword'];
$email = $_GET['email'];

$q = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' and `password`='$old_password'");
if(mysql_num_rows($q) == 1)
{
	$q1 = mysql_query("UPDATE `syt_registration` SET `password`='$new_password' WHERE `email` = '$email'");
	if($q1)
	{
		$json = array("status" => 1, "msg" => "Successfully password changed");
	}
}
else
{
	$json = array("status" => 0, "msg" => "User not found");
}

echo "[".json_encode($json)."]";
?>
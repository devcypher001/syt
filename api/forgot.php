<?php
include '../connect.php';
$email  = $_GET['email'];
$password  = $_GET['password'];

$q=mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email'");
$n = mysql_num_rows($q);
if($n > 0)
{
	$q1 = mysql_query("UPDATE `syt_registration` SET `password`='$password' WHERE `email` = '$email'");
	if($q1)
	{
		$json = array("status" => 1, "msg" => "Updated Successfully");
	}
	else
	{
		$json = array("status" => 0, "msg" => "Updation Error");
	}
}
else
{
	$json = array("status" => 0, "msg" => "User not found");
}

echo "[".json_encode($json)."]";
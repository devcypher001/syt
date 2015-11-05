<?php
include '../connect.php';

$email = mysql_real_escape_string($_GET['email']);

$regID = mysql_real_escape_string($_GET['regID']);

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");


if(mysql_num_rows($query) == 0)
{
	$json = array("status" => 0, "msg" => "No user","title" => "0" );
}
else
{
	$fetch_query = mysql_fetch_array($query);
	
	$update = mysql_query("UPDATE `syt_registration` SET `regID`='$regID' WHERE `email`='$email'");
	$json = array("status" => 1, "msg" => "Update regID","title" => $fetch_query['title']  );
}
	echo '['.json_encode($json).']';


?>
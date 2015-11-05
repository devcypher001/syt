<?php

include '../connect.php';

$email = $_GET['email'];
$subcategory = $_GET['subcategory'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$userid = $fetch_query['id'];

$delete = mysql_query("DELETE FROM `syt_add_category` WHERE `subcategory`='$subcategory' AND `user_id`='$userid'");
if($delete)
{
	$json = array("status" =>1, "msg" => "Great");
}
else
{
	$json = array("status" =>0, "msg" => "Nope");
}

echo "[".json_encode($json)."]";
?>
<?php
include '../connect.php';

$post_id = $_GET['post_id'];

$query = mysql_query("DELETE  FROM `syt_post` WHERE `id`='$post_id'");

if($query)
{
	$json = array("status" => 1, "msg" => "Delete Successfully");
}
else
{
	$json = array("status" => 0, "msg" => "Delete error");
}

echo "[".json_encode($json)."]";

?>
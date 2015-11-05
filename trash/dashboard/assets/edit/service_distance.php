<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$service_distance = @$_POST['service_distance'];

$q1 = mysql_query("UPDATE `syt_registration` SET `service_distance`='$service_distance' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
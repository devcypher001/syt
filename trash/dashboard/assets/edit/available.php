<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$available = @$_POST['available'];

$q1 = mysql_query("UPDATE `syt_registration` SET `service_day`='$available' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
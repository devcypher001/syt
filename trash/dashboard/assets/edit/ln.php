<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$ln = @$_POST['ln'];

$q1 = mysql_query("UPDATE `syt_registration` SET `lastname`='$ln' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$city = @$_POST['city'];

$q1 = mysql_query("UPDATE `syt_registration` SET `city`='$city' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
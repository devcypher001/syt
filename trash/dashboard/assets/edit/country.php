<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$country = @$_POST['country'];

$q1 = mysql_query("UPDATE `syt_registration` SET `country`='$country' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
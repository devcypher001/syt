<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$address = @$_POST['address'];

$q1 = mysql_query("UPDATE `syt_registration` SET `address`='$address' WHERE `id`='$uid'");
if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
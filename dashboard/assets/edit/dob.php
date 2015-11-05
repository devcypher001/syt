<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$dob = @$_POST['dob'];

$q1 = mysql_query("UPDATE `syt_registration` SET `dob`='$dob' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
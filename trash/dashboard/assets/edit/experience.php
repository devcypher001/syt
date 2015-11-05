<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$experience = @$_POST['experience'];

$q1 = mysql_query("UPDATE `syt_registration` SET `experience`='$experience' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
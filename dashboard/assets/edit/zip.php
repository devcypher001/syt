<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$zip = @$_POST['zip'];

$q1 = mysql_query("UPDATE `syt_registration` SET `zip`='$zip' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
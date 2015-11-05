<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$fn = @$_POST['fn'];

$q1 = mysql_query("UPDATE `syt_registration` SET `firstname`='$fn' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
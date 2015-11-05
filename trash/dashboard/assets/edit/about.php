<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$about = @$_POST['about'];

$q1 = mysql_query("UPDATE `syt_registration` SET `experience_details`='$about' WHERE `id`='$uid'");
if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
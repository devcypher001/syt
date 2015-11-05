<?php 
include 'connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$ss = @$_POST['ss'];

$qu = mysql_query("DELETE FROM `syt_post` WHERE `userid`='$uid' AND `id`='$ss'");

if($qu)
{
	echo 1;
}
else
{
	echo 0;
}
?>
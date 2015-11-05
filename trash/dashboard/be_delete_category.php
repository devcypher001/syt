<?php 
include 'connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$ss = @$_POST['ss'];

$op = mysql_query("DELETE FROM `syt_add_category` WHERE `id` = '$ss'");
if($op)
{
	echo 1;
}	
else
{
	echo 0;
}
?>
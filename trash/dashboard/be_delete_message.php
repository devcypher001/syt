<?php 
include 'connect.php';
$cc = @$_POST['cc'];

$delete = mysql_query("DELETE FROM `syt_conversation` WHERE `id`='$cc'");
if($delete)
{
	echo 1;
}
?>
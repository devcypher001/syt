<?php 
session_start();
include 'connect.php';

$pass = @$_POST['pass'];
$uid = $_SESSION['syt_id'];

$ui = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$uid' AND `password`='$pass'");

$num_uui = mysql_num_rows($ui);

if($num_uui == 0)
{
	echo 0;
}
else
{
	echo 1;
}
?>
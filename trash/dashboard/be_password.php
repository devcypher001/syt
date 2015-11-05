<?php
include 'connect.php';
session_start();

$cpass = @$_POST['cpass'];
$npass = @$_POST['npass'];
$npass1 = @$_POST['npass1'];

$uid = $_SESSION['syt_id'];

$check = mysql_query("SELECT * FROM `syt_registration` WHERE `password`='$cpass' and `id`='$uid'");

if(mysql_num_rows($check) != 0)
{
	if($npass == $npass1)
	{
		$uj = mysql_query("UPDATE `syt_registration` SET `password`='$npass' WHERE `id`='$uid'");

		if($uj)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		echo 2;
	}
}
else
{
	echo 3;
}
?>
<?php
session_start();
include '../connect.php';
$e = @$_POST['ajx'];
$code = str_rot13(@$_POST['code']);

if($code == $e)
{
	$rt = mysql_query("UPDATE `syt_registration` SET `status`=1 WHERE `email`='$e'");
	
	if($rt)
	{
		echo 1;
	}
	else
	{
		echo 2;
	}
}
else{
	
	echo 0;
}


/*$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' and `status`=0");

$qq = mysql_fetch_array($query);

$num_query= mysql_num_rows($query);

if($num_query == 0)
{
	echo 0;
}
else
{	
	echo 1;
}*/
?>
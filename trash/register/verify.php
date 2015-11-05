<?php
session_start();
include '../connect.php';

$id = @$_GET['id'];

$str = str_rot13($id);

if(!isset($id))
{
	echo "Access Denied";
}
else
{
	$q= mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$str'");
	$num_q = mysql_num_rows($q);
	
	if($num_q == 0)
	{
		echo "Wrong token";
	}
	else{
		$upd = mysql_query("UPDATE `syt_registration` SET `status`=1 WHERE `email` = '$str'");
		
		if($upd)
		{
			
			while($rr = mysql_fetch_assoc($q))
			{
				echo "<font color='green' size='4px'>Successfully Verified</font><br>";
				echo "<a href='../login/index.php'>Login</a>";
			}
		}
	}
}
?>
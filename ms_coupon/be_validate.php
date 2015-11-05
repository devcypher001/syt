<?php
include 'db.php';
$name= @$_POST['name'];
$phone= @$_POST['phone'];
$email= @$_POST['email'];
$otp= @$_POST['otp'];

$sql = mysql_query("SELECT  * FROM `user` WHERE `email`='$email'");
if (mysql_num_rows($sql)) {
$a = mysql_fetch_array($sql);
$b = $a['otp'];
$id = $a['id'];
	if($b==$otp)
	{
		echo "1";
		$s = mysql_query("UPDATE `user` SET `validate`='1' WHERE `id`='$id'");
	}
	else
	{
		echo "2";
	}
}
else
{
	echo "2";
}

?>
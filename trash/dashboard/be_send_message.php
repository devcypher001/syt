<?php
session_start();

include 'connect.php';

$source = $_SESSION['syt_id'];
$person = @$_POST['person'];
$message = @$_POST['message'];
$hash = rand();
$exp = explode('/',$person);

$destination = $exp[1];
// echo $userid ." ".$person." ".$message." ".$exp[1];

$check = mysql_query("SELECT * FROM `syt_message` WHERE (`source`='$source' AND `destination`='$destination') OR (`source`='$destination' AND `destination`='$source')");

if(mysql_num_rows($check) == 0)
{
	$qq = mysql_query("INSERT INTO `syt_message`(`id`, `source`, `destination`,`hash`) VALUES ('','$source','$destination','$hash')");

	if($qq)
	{
		echo 1;
		$uix = mysql_query("INSERT INTO `syt_conversation`(`id`, `source_id`, `message_hash`, `message`,`notif`) VALUES ('','$source','$hash','$message',0)");
	}
	else
	{
		echo 0;
	}
}
else
{
	echo 3;
}
?>
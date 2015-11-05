<?php
session_start();

include 'connect.php';

$source = $_SESSION['syt_id'];
$dest = @$_POST['dest'];
$dest1 = @$_POST['dest1'];
$send_message = @$_POST['send_message'];

$qq = mysql_query("INSERT INTO `syt_conversation`(`id`, `source_id`, `message_hash`, `message`, `notif`) VALUES ('','$source','$dest','$send_message',0)");

if($qq)
{
	echo 1;
}
else
{
	echo 0;
}
?>
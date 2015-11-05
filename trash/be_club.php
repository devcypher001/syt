<?php
include 'connect.php';
$first = @$_POST['first'];
$last = @$_POST['last'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];
$st = @$_POST['st']=="" ? "Sell":"Buy";

$qq = mysql_query("INSERT INTO `syt_club`(`id`, `firstname`, `lastname`, `phone`, `email`, `title`, `time`) VALUES ('','$first','$last','$phone','$email','$st',NOW())");
if($qq)
{
	echo 1;
}
else
{
	echo 0;
}
?>
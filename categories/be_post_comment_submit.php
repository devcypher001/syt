<?php

include 'connect.php';

$name = @$_POST['name'];
$location = @$_POST['location'];
$requirement = @$_POST['description'];
$email = @$_POST['email'];
$postid = @$_POST['user'];

$qu = mysql_query("INSERT INTO `syt_seller_reply`(`id`, `name`, `email`, `desc`, `location`, `postid`) VALUES ('','$name','$email','$requirement','$location','$postid')");

if($qu)
{
	echo 1;
}
else
{
	echo 0;
}
?>

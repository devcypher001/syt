<?php
include 'connect.php';

$email = @$_POST['email'];

$check = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");

if(mysql_num_rows($check) == 0)
{
	echo 0;
}
else
{
	echo 1;
}
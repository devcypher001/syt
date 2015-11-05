<?php
include '../connect.php';

$email = @$_POST['email'];

$select = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email'");

$num_select = mysql_num_rows($select);

if($num_select == 0)
{
	echo 1;
}
else
{
	echo 0;
}	
?>
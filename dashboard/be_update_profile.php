<?php
include 'connect.php';
session_start();

$name = @$_POST['first'];
$last = @$_POST['last'];
$mobile = @$_POST['mobile'];
$experience = @$_POST['experience'];

$uid = $_SESSION['syt_id'];

$uj = mysql_query("UPDATE `syt_registration` SET `firstname`='$name',`lastname`='$last',`experience_details`='$experience',`phone`='$mobile' WHERE `id`='$uid'");

if($uj)
{
	echo 1;
}
else
{
	echo 0;
}
?>
<?php
include 'connect.php';
session_start();

$userid = @$_SESSION['syt_id'];

$fb = @$_POST['fb'];
$google = @$_POST['google'];
$linkedin = @$_POST['linkedin'];
$twitter = @$_POST['twitter'];

//echo $fb." ".$google." ".$linkedin." ".$twitter." ".$userid;


$qu = mysql_query("UPDATE `syt_registration` SET `fb`='$fb',`twitter`='$twitter',`google`='$google',`linkedin`='$linkedin' WHERE `id`='$userid'");
if($qu)
{
	echo 1;
}
else
{
	echo 0;
}
?>
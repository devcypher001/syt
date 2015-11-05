<?php 
include '../../connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$fn = @$_POST['fn'];
$ln = @$_POST['ln'];
$city = @$_POST['city'];
$zip = @$_POST['zip'];
$dob = @$_POST['dob'];
$phone = @$_POST['phone'];
$address = @$_POST['address'];

$q1 = mysql_query("UPDATE `syt_registration` SET `firstname`='$fn',`lastname`='$ln',`phone`='$phone',`address`='$address',`zip`='$zip',`city`='$city' WHERE `id`='$uid'");

if($q1)
{
	echo 1;
}
else
{
	echo 0;
}
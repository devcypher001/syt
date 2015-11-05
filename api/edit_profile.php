<?php
include '../connect.php';
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
//$address = $_GET['address'];
$zip = $_GET['zip'];
$dob = $_GET['dob'];
$phone = $_GET['phone'];

$email = $_GET['email'];

//$q = mysql_query("UPDATE `syt_registration` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`address`='$address',`zip`='$zip',`dob`='$dob' WHERE `email`='$email'");
$q = mysql_query("UPDATE `syt_registration` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`zip`='$zip',`dob`='$dob' WHERE `email`='$email'");

if($q)
{
	$json = array("status" => 1, "msg" => "Upload Successfully");
}
else
{
	$json = array("status" => 0, "msg" => "Failed");
}
echo "[".json_encode($json)."]";
/*if($q)
{
	$json = array("status" => 1, "msg" => "Registered Successfully");
}
else
{
	$json = array("status" => 1, "msg" => "Registered Successfully");
}
*/
//echo "[".json_encode($json)."]";
?>
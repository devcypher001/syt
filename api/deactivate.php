<?php
include '../register/smtpmail/library.php';
include "../register/smtpmail/classes/class.phpmailer.php";

include '../connect.php';

$email = $_GET['email'];

$query = mysql_query("UPDATE `syt_registration` SET `status`=0 WHERE `email`='$email'");
if($query)
{
	$json = array("status" => 1, "msg" => "Deactivate Successfully");
}
else
{
	$json = array("status" => 0, "msg" => "Internal error");
}

echo "[".json_encode($json)."]";

?>
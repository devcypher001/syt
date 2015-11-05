<?php
session_start();
include "connect.php";
$check = @$_POST['check'];
$uid = $_SESSION['syt_id'];

$update_privacy = mysql_query("UPDATE `syt_registration` SET `privacy`='$check' WHERE `id`='$uid'");
if($update_privacy)
{
	echo 1;
}
?>
<?php
include '../connect.php';

$email = mysql_real_escape_string($_GET['email']);

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");


if(mysql_num_rows($query) == 0)
{
	$json = array("status" => 1, "msg" => "Redirection successfully","title" => "0" );
}
else
{
	$fetch_query = mysql_fetch_array($query);
	$json = array("status" => 0, "msg" => "Already registered","title" => $fetch_query['title'] );
}
	echo '['.json_encode($json).']';


?>
<?php
include ('../connect.php');
session_start();

$email = $_GET['email'];

$find_query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");

$fet = mysql_fetch_array($find_query);

$_SESSION['syt_email'] = $fet['email'];
$_SESSION['syt_name'] = $fet['firstname']." ".$fet_query['lastname'];
$_SESSION['syt_id'] = $fet['id'];
$_SESSION['syt_title'] = $fet['title'];


if(!empty($_SESSION['syt_email']))
{
	header("Location:../index.php");
}
?>
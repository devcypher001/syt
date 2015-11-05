<?php
session_start();
include 'connect.php';

$uid = $_SESSION['syt_id'];
$email = $_SESSION['syt_email'];

$category = @$_POST['category'];
$subcategory = @$_POST['subcategory'];
$desc = @$_POST['desc'];
$delivery = @$_POST['delivery'];
$price = @$_POST['price'];
$zip = @$_POST['zip'];
$travel = (@$_POST['travel'] == "undefined") ? "I will travel to service provider" : "I will not travel to service provider";
$title = @$_POST['title'];
$experience = @$_POST['experience'];
$distance = @$_POST['distance'];

//echo $email." ".$subcategory." ".$desc." ".$delivery." ".$price." ".$zip." ".$travel." ".$title." ".$experience; 
$query= mysql_query("INSERT INTO `syt_post`(`id`, `zip`, `category`, `syt_title`, `syt_desc`, `subcategory`, `delievery_date`, `travel`, `price`, `keyword`, `experience`,`date`,`userid`,`service_distance`) VALUES ('','$zip','$category','$title','$desc','$subcategory','$delivery','$travel','$price','','$experience',NOW(),'$uid','$distance')");

if($query)
{
	echo 1;
}
else
{
	echo 2;
}
?>
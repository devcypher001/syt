<?php

include '../connect.php';

$category = @$_GET['category'];
$subcategory = @$_GET['subcategory'];

$experience = @$_GET['experience'];
$desc = @$_GET['desc'];
$service_mode = $_GET['service_mode'];
$travel_distance = @$_GET['travel_distance'];
$charge_mode = @$_GET['charge_mode'];
$min_price = @$_GET['min_price'];
$max_price = @$_GET['max_price'];
$charge = $min_price."-".$max_price;
$service_day = @$_GET['service_day'];


//------------------------------------------------
$email = $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$userid = $fetch_query['id'];

$q = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id` = '$userid'");
$num_q = mysql_num_rows($q);

$qq = mysql_query("SELECT * FROM `syt_add_category` WHERE `subcategory`='$subcategory' and `user_id`='$userid'");
$num_qq = mysql_num_rows($qq);


if($num_q == 2)
{
	$json = array("status" => 2, "msg" => "Already added in 3 category");
}
else
{
	if($num_qq == 0 )
	{
		$qwe = mysql_query("INSERT INTO `syt_add_category`(`id`, `category`, `subcategory`,`other`,`experience`,`experience_details`,`doc`, `service_distance`,`charge_mode`,`charge`,`charge1`,`charge2`,`time`,`service_day`,`service_mode`,`user_id`) VALUES ('','$category','$subcategory','','$experience','$desc','','$travel_distance','$charge_mode','$min_price','$max_price','$charge',NOW(),'$service_day','$service_mode','$userid')");
		if($qwe)
		{
			$json = array("status" =>1, "msg" => "Great");
		}
		else
		{
			$json = array("status" => 0, "msg" => "Internal error bro..");
		}
	}
	else
	{
		$json = array("status" => 3, "msg" => "Already added in this category");
	}	
}

echo "[".json_encode($json)."]";

?>
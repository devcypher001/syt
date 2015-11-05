<?php

include '../connect.php';

$userid = $_GET['user_id'];

$query  = mysql_query("SELECT * FROM `syt_post` WHERE `id` = '$userid'");

$data = array();

while($rr = mysql_fetch_assoc($query))
{
	$uid = $rr['userid'];
	
	$query2 = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$uid'");
	
	$fetch_query2 = mysql_fetch_array($query2);
	
	$fullname = $fetch_query2['firstname']." ".$fetch_query2['lastname'];

	
	$zip = $rr['zip'];
	$category = $rr['category'];
	$syt_title = $rr['syt_title'];
	$syt_desc= $rr['syt_desc'];
	$subcategory = $rr['subcategory'];
	$delievery_date = $rr['delievery_date'];
	$travel = $rr['travel'];
	$price = $rr['price'];
	$experience = $rr['experience'];
	$date = $rr['date'];
	$service_distance = $rr['service_distance'];
	$service_mode = $rr['service_mode'];
	$charge_mode = $rr['charge_mode'];
	$charge1 = $rr['charge1'];
	$charge2 = $rr['charge2'];
	
	$a = array('zip' => $zip,"category" => $category,"syt_title"=>$syt_title,"syt_desc"=>$syt_desc,"subcategory"=>$subcategory,"delievery_date"=>$delievery_date,"travel"=>$travel,"price"=>$price,"experience"=>$experience,"date"=>$date,"service_distance"=>$service_distance,"service_mode"=>$service_mode,"charge_mode"=>$charge_mode,"charge1"=>$charge1,"charge2"=>$charge2,"fullname"=>$fullname,"login_id"=>$fetch_query2['id'] );
	
	$data[] = $a;
}

echo json_encode($data);
?>
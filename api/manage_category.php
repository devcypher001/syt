<?php
include '../connect.php';
$email = $_GET['email'];
$category = $_GET['category'];

$q = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fet_q = mysql_fetch_array($q);

$user_id = $fet_q['id'];

$query = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id`='$user_id' AND `category` = '$category'");

$data = array();

while($rr = mysql_fetch_assoc($query))
{
	$a = array(
		
		'subcategory' => $rr['subcategory'],
		'experience' => $rr['experience'],
		'experience_details' => $rr['experience_details'],
		'service_mode' => $rr['service_mode'],
		'service_day' => $rr['service_day'],
		'charge_mode' => $rr['charge_mode'],
		'charge1' => $rr['charge1'],
		'charge2' => $rr['charge2']
	
	);
	
	$data[] = $a;

}

echo json_encode($data);
?>
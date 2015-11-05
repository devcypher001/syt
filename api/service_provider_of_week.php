<?php
include '../connect.php';
$qw = mysql_query("SELECT * FROM `service_provider_of_the_week` order by `id` desc");

$rr = mysql_fetch_array($qw);

$data = array();

	
	$id = $rr['id'];
	$seller_id = $rr['seller_id'];
	$message = $rr['message'];
	
	$a = array(
		'id' => $id,
		'seller_id' => $seller_id,
		'message' => $message
		);
	
	//$data[] = $row['uid'] . " " . $row['username'] . " " . $row['xPos'] . " " . $row['yPos'];
	
	$data[] = $a;
	


echo json_encode($data);

?>
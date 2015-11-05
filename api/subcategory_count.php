<?php
include '../connect.php';

$category_title = $_GET['categorytitle'];

$query = mysql_query("SELECT * FROM  `syt_registration` WHERE  `subcategory` =  '$category_title' AND  `title` =  'Seller' Limit 0,30");
$data = array();
while($rr = mysql_fetch_assoc($query))
{
	$a = array(
		'id' => $rr['id'],
		'email' => $rr['email'],
		'firstname' => $rr['firstname'],
		'lastname' => $rr['lastname'],
		'category' => $rr['category'],
		'subcategory' => $rr['subcategory'],
		'experience' => $rr['experience'],
		'zip' => $rr['zip'],
		'charge_mode' => $rr['charge_mode'],
		'image' => $rr['image'],
		'charge1' => $rr['charge1'],
		'charge2' => $rr['charge2'],
		'service_day' => $rr['service_day']		
	);
	
	$data[] = $a;
}
echo json_encode($data);
?>
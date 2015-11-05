<?php
include '../connect.php';

$category = $_GET['category'];
$location = $_GET['location'];

$query = mysql_query("SELECT * FROM  `syt_post` WHERE  (`category` = '$category' AND `zip` like '$location%')  Limit 0,30");

$data = array();
while($rr = mysql_fetch_assoc($query))
{
	
	$a = array(
		'id' => $rr['id'],
		'category' => $rr['category'],
		'syt_title' => $rr['syt_title'],
		'syt_desc' => $rr['syt_desc'],
		'subcategory' => $rr['subcategory'],
		'location' => $rr['zip'],
		'fullname' => fetch_name($rr['userid'])
	
		);

	$data[] = $a;
}

function fetch_name($id)
{
	$query = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$id'");
	$fetch_query = mysql_fetch_array($query);
	$fullname = $fetch_query['firstname']." ".$fetch_query['lastname'];
	return $fullname; 
}
echo json_encode($data);
?>
<?php

include '../connect.php';

//$userid = $_GET['user_id'];

$query  = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 3");

$data = array();

while($rr = mysql_fetch_assoc($query))
{
	$category = $rr['sub_subcate'];
	
	$a = array('category' => $category);
	
	$data[] = $a;
}

echo json_encode($data);
?>
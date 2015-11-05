<?php
include '../connect.php';
$qw = mysql_query("SELECT * FROM `syt_registration` WHERE `title`='Seller' order by `id` desc limit 0,20");

$data = array();

while($rr = mysql_fetch_assoc($qw))
{
	$fn = $rr['firstname'];
	$ln = $rr['lastname'];
	$category = $rr['category'];
	$subcategory = $rr['subcategory'];
	$id = $rr['id'];
	
	$fullname = $fn." ".$ln;
	$a = array('name' => $fullname,'category' => $category,'subcategory' => $subcategory,'zip' => $rr['zip'],'id' => $id);
	
	//$data[] = $row['uid'] . " " . $row['username'] . " " . $row['xPos'] . " " . $row['yPos'];
	
	$data[] = $a;
	
}

echo json_encode($data);

?>
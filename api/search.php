<?php
include '../connect.php';

$title = $_GET['title'];
$category = $_GET['category'];
$subcategory = $_GET['subcategory'];
$location = $_GET['location'];

$query = mysql_query("SELECT * FROM  `syt_registration` WHERE  (`subcategory` = '$subcategory' AND `title` = '$title' AND `zip` like '$location%')  Limit 0,30");

$data = array();
while($rr = mysql_fetch_assoc($query))
{
	$image_hyperlink = substr($rr['image'],0,4);
	if(empty($rr['image']))
	{
		$img = "https://www.sellyourtime.in/dashboard/images/default_avatar_man.png";
	}
	elseif($image_hyperlink == "http")
	{
		$img = $rr['image'];
	}
	else
	{
		$img = "https://www.sellyourtime.in/dashboard/images/".$rr['image'];
	}
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
		'image' => $img,
		'charge1' => $rr['charge1'],
		'charge2' => $rr['charge2'],
		'service_day' => $rr['service_day']		
	);
	
	$data[] = $a;
}
echo json_encode($data);
?>
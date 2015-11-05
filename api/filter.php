<?php
include '../connect.php';

$subcategory = $_GET['subcategory'];
$min = $_GET['charge1'];
$max = $_GET['charge2'];
$service_day= $_GET['service_day'];
$zip = $_GET['zip'];
$minexperience = $_GET['minexp'];
$maxexperience = $_GET['maxexp'];

//$query = mysql_query("SELECT * FROM `syt_registration` WHERE (`subcategory` = '$subcategory' OR (`experience` BETWEEN '$minexperience' AND '$maxexperience ') AND `service_day` = '$service_day' AND `title`='Seller') OR  (`zip` = '$zip')");

$query = mysql_query("SELECT * FROM `syt_registration` WHERE (`subcategory` = '$subcategory' AND (`experience` BETWEEN '$minexperience' AND '$maxexperience ') AND `title`='Seller')");
//AND `service_day` = '$service_day'
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
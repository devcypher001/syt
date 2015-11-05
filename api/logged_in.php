<?php
include '../connect.php';

$email= $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
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
		
		'firstname' => $rr['firstname'],
		'lastname' => $rr['lastname'],
		'category' => $rr['category'],
		'subcategory' => $rr['subcategory'],
		'experience_details' => $rr['experience_details'],
		'phone' => $rr['phone'],
		/*'address' => $rr['address'],*/
		'zip' => $rr['zip'],
		'charge' => $rr['charge'],
		'dob' => $rr['dob'],
		'image' => $img,
		'lead' => get_lead($rr['category'],$rr['subcategory'])
		
	);
	
	$data[] = $a;
}
echo json_encode($data);

function get_lead($category,$subcategory)
{
	$q = mysql_query("SELECT * FROM `syt_post` WHERE `subcategory` like '$subcategory%' or `category` like '$category%'");
	
	while($rr1 = mysql_fetch_assoc($q))
	{
		$b = array(
		
			'syt_title' => $rr1['syt_title'],
			'id' => $rr1['id'],
			'price' => $rr1['price']
		);
		
		$data1[] = $b;
	}
	return $data1;
}
?>
<?php
include '../connect.php';

$id= $_GET['id'];
$email = $_GET['email'];

//---------------------------------------------------------------------
$logged_in_profile = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_logged_in_profile = mysql_fetch_array($logged_in_profile);
$logged_id = $fetch_logged_in_profile['id'];
//---------------------------------------------------------------------

$rating = mysql_query("SELECT SUM( star ) , COUNT( * ) AS count
FROM  `syt_review` 
WHERE  `user_id` ='$id'");

$fetch_rating = mysql_fetch_array($rating);

if($fetch_rating['count'] == 0)
{
	$avg_rate = 1;
}
else
{

	$avg_rate = ceil($fetch_rating['SUM( star )']/$fetch_rating['count']);
}


//echo $avg_rate;

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$id'");
$data = array();
while($rr = mysql_fetch_assoc($query))
{

	$image_hyperlink = substr($rr['image'],0,4);
	if(empty($rr['image']))
	{
		$image = "https://www.sellyourtime.in/dashboard/images/default_avatar_man.png";
	}
	elseif($image_hyperlink == "http")
	{
		$image = $rr['image'];
	}
	else
	{
		$image = "https://www.sellyourtime.in/dashboard/images/".$rr['image'];
	}
	
	$follower = mysql_query("SELECT * FROM `follow` WHERE `follower`='$id' AND `followed`='$logged_id'");
	if(mysql_num_rows($follower) >= 1)
	{
		$follow_type = "Following";
	}
	else{
		$follow_type = "Follow";
	}
	
	$a = array(
		'id' => $rr['id'],
		'email' => $rr['email'],
		'firstname' => $rr['firstname'],
		'lastname' => $rr['lastname'],
		'individual' => $rr['individual'],
		'category' => $rr['category'],
		'subcategory' => $rr['subcategory'],
		'experience' => $rr['experience'],
		'experience_details' => $rr['experience_details'],
		'phone' => $rr['phone'],
		/*'address' => $rr['address'],*/
		'zip' => $rr['zip'],
		'city' => $rr['city'],
		'service_distance' => $rr['service_distance'],
		'charge_mode' => $rr['charge_mode'],
		'charge' => $rr['charge'],
		'title' => $rr['title'],
		'time' => $rr['time'],
		'service_day' => $rr['service_day'],
		'gender' => $rr['gender'],
		'dob' => $rr['dob'],
		'service_mode' => $rr['service_mode'],
		'status' => $rr['status'],
		'image' => $image,
		'fb' => $rr['fb'],
		'twitter' => $rr['twitter'],
		'google' => $rr['google'],
		'linkedin' => $rr['linkedin'],
		'banner' => $rr['banner'],
		'verify' => $rr['verify'],
		'charge1' => $rr['charge1'],
		'charge2' => $rr['charge2'],
		'privacy' => $rr['privacy'],
		'rate' => "$avg_rate",
		'follow_type' => $follow_type
		
	);
	
	$data[] = $a;
}
echo json_encode($data);
?>
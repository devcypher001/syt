<?php
include '../connect.php';
include  'gcm_message.php';

$email = $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_query = mysql_fetch_array($query);

$followerId = $fetch_query['id'];

//-------------------------------------------


//-------------------------------------------

$info = array();

$insert = mysql_query("SELECT * FROM `follow` WHERE `follower` = '$followerId'");
while($row = mysql_fetch_assoc($insert))
{
	$followedId = $row['followed'];
		
	$qqq = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$followedId'");
	
	while($rr = mysql_fetch_assoc($qqq))
	{
		if(!empty($rr['image']))
		{
			$image = $rr['image'];
		}
		else
		{
			$image = "default_avatar_man.png";
		}
		
		$firstname = $rr['firstname'];
		$lastname = $rr['lastname'];
		$category = $rr['category'];
		$subcategory = $rr['subcategory'];
		
		
		$data = array("status" => 1, "firstname" =>$firstname, "lastname" =>$lastname, "category" =>$category,"subcategory" => $subcategory, "image" =>$image,"location" => $rr['zip'],"id" => $rr['id']);
		
		$info[] = $data;
	}

}
//echo "<pre>",print_r($info),"</pre>";
echo json_encode($info);

?>
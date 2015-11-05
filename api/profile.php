<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include '../connect.php';

if($_SERVER['REQUEST_METHOD'] == "GET"){
	// Get data
	$email = isset($_GET['email']) ? mysql_real_escape_string($_GET['email']) : "";
	
	
	if($email == '')
	{
		$json = array("status" => 0, "msg" => "Email is required parameter");
	}
	else
	{
		$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email'");
	
		if(mysql_num_rows($query))
		{
			while ($sel = mysql_fetch_assoc($query)) {
			
				$image_hyperlink = substr($sel['image'],0,4);
				if(empty($sel['image']))
				{
					 $img = "https://www.sellyourtime.in/dashboard/images/default_avatar_man.png";
				}
				elseif($image_hyperlink == "http")
				{
					$img = $sel['image'];
				}
				else
				{
					 $img = "https://www.sellyourtime.in/dashboard/images/".$sel['image'];
				}
			
				$a = $sel['firstname'];
				$b = $sel['lastname'];
				$c = $sel['category'];
				$d = $sel['subcategory'];
				$e = $img;
				$f = $sel['id'];
				$app_url = "https://play.google.com/store/apps/details?id=com.syt.balram.syt";
			}
		$json = array("status" => 1, "firstname" =>$a, "lastname" =>$b, "category" =>$c,"subcategory" => $d, "image" =>$e,"id" =>$f,"app_url" => $app_url);	
		}
		else
		{
			$json = array("status" => 0, "msg" => "Unable to fetch");
		}	
	}
	
}
	
else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}

	

	/* Output header */
	header('Content-type: application/json');
	echo "[".json_encode($json)."]";



?>
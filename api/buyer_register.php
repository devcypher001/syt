<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include '../connect.php';
include 'referrer_class.php';
if($_SERVER['REQUEST_METHOD'] == "GET"){
	// Get data
	$email = isset($_GET['email']) ? mysql_real_escape_string($_GET['email']) : "";
	$password = isset($_GET['password']) ? mysql_real_escape_string($_GET['password']) : "";
	$firstname = isset($_GET['firstname']) ? mysql_real_escape_string($_GET['firstname']) : "";
	$lastname = isset($_GET['lastname']) ? mysql_real_escape_string($_GET['lastname']) : "";
	$gender = isset($_GET['gender']) ? mysql_real_escape_string($_GET['gender']) : "";
	$dob = isset($_GET['dob']) ? mysql_real_escape_string($_GET['dob']) : "";
	$phone = isset($_GET['phone']) ? mysql_real_escape_string($_GET['phone']) : "";
	/*$address = isset($_GET['address']) ? mysql_real_escape_string($_GET['address']) : "";*/
	$zip = isset($_GET['zip']) ? mysql_real_escape_string($_GET['zip']) : "";
	//$country = isset($_GET['country']) ? mysql_real_escape_string($_GET['country']) : "";
	$regID = isset($_GET['regID']) ? mysql_real_escape_string($_GET['regID']) : "";
	
	$param_value = isset($_GET['param_value']) ? mysql_real_escape_string($_GET['param_value']) : "";
	
	referrer($param_value);
	
	$image = isset($_GET['image']) ? mysql_real_escape_string(base64_decode(utf8_decode($_GET['image']))) : "";
	 
	/*$image_type = isset($_GET['image_type']) ? mysql_real_escape_string($_GET['image_type']) : "";
	
	$social_id = isset($_GET['social_id']) ? mysql_real_escape_string($_GET['social_id']) : "";
	
	if($image_type == "facebook"){
	
		$image = "http://graph.facebook.com/social_id/picture";
		
	}*/
	
	
	if($email == '' || $firstname == '' || $lastname == '' || $dob == '' || $phone == ''  || $zip == '' )
	{
		$json = array("status" => 0, "msg" => "Missing required parameter field");
	}
	else
	{
		$query = mysql_query("INSERT INTO `syt_registration`(`id`, `email`, `password`, `firstname`, `lastname`, `phone`, `zip`, `country`, `title`, `time`, `gender`, `dob`,`regID`,`image`,`status`) VALUES ('','$email','$password','$firstname','$lastname','$phone','$zip','','Buyer',NOW(), '$gender','$dob','$regID','$image',1)");
		if($query)
		{
			$response = @file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=gdjmp&To=918860806718&Text='Thank you for signup on SellYourTime.Please use our all free platform to buy or sell any services accross 450+ categories'");
			$json = array("status" => 1, "msg" => "Register Successfully !!!!");
		}
		else
		{
			$json = array("status" => 0, "msg" => "Error While Inserting");
		}
		
	}
	
}
	
else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}
	/* Output header */
	
	echo "[".json_encode($json)."]";
?>
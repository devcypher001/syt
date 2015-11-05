<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include '../connect.php';

if($_SERVER['REQUEST_METHOD'] == "GET"){
	// Get data
	$email = isset($_GET['email']) ? mysql_real_escape_string($_GET['email']) : "";
	$password = isset($_GET['password']) ? mysql_real_escape_string($_GET['password']) : "";
	$regID = isset($_GET['regID']) ? mysql_real_escape_string($_GET['regID']) : "";
	
	if($email == '' || $password == '')
	{
		$json = array("status" => 0, "msg" => "Please Fill All fields");
	}
	else
	{
		$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' AND `password`='$password' and `status`=1");
		$fetch_query = mysql_fetch_array($query);
	
		if(mysql_num_rows($query))
		{
			
			$update_reg = mysql_query("UPDATE `syt_registration` SET `regID`='$regID' WHERE `email`='$email' AND `password`='$password'");
			if($update_reg)
			{
				$json = array("status" => 1, "msg" => "Login Successfully","title" => $fetch_query['title'] );
			}
		}
		else
		{
			$json = array("status" => 0, "msg" => "Login Failure");
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
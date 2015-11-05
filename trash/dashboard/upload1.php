<?php
include 'connect.php';
session_start();

$output_dir = "images/";

$uid = $_SESSION['syt_id'];

if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
 	 	$fileName = $_FILES["myfile"]["name"];
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
    	$ret[]= $fileName;
		
		$qe = mysql_query("UPDATE `syt_registration` SET `banner`='$fileName' WHERE `id` = '$uid'");
	}
	
    echo json_encode($ret);
 }
 ?>
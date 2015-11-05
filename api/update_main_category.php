<?php
include '../connect.php';
$email = $_GET['email'];
$category = $_GET['category'];

$subcategory = $_GET['subcategory'];
$experience = $_GET['experience'];
$experience_details = $_GET['experience_details'];
$service_mode = $_GET['service_mode'];
$service_day = $_GET['service_day'];
$charge_mode = $_GET['charge_mode'];
$charge1 = $_GET['charge1'];
$charge2 = $_GET['charge2'];

$charge = $charge1." - ".$charge2;
		

$q=mysql_query("UPDATE `syt_registration` SET `subcategory`='$subcategory',`experience`='$experience',`experience_details`='$experience_details',`charge_mode`='$charge_mode',`charge`='$charge',`service_day`='$service_day',`service_mode`='$service_mode',`charge1`='$charge1',`charge2`='$charge2' WHERE `email`='$email' AND `category`='$category'");


if($q)
{
	$json = array("status" => 1, "msg" => "Updated Successfully");
}
else
{
	$json = array("status" => 0, "msg" => "Updation Failed");
}

echo "[".json_encode($json)."]";

//echo json_encode($data);
?>
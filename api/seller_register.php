<?php
include '../connect.php';
include 'referrer_class.php';

$fn = $_GET['fn'];
$ln = $_GET['ln'];
$email = $_GET['email'];
$password = $_GET['password'];
$gender = $_GET['gender'];
$dob = $_GET['dob'];
$individual = $_GET['individual'];
$desc = $_GET['desc'];
$travel = $_GET['travel'];
$phone = $_GET['phone'];
/*$address = $_GET['address'];*/
$zip = $_GET['zip'];
$charge_mode = $_GET['chargemode'];
$min_price = $_GET['minprice'];
$max_price = $_GET['maxprice'];
$service_day = $_GET['serviceday'];
$notified = $_GET['notified'];

$category = @$_GET['category'];
$subcategory = @$_GET['subcategory'];
$exp = $_GET['exp'];

$title= $_GET['title'];
$service_mode = $_GET['servicemode'];
$regID = $_GET['regID'];

$param_value = isset($_GET['param_value']) ? mysql_real_escape_string($_GET['param_value']) : "";
	
referrer($param_value);

//$image = $_GET['image'];

$image = isset($_GET['image']) ? mysql_real_escape_string(base64_decode(utf8_decode($_GET['image']))) : "";
$charge = $min_price."-".$max_price;

$q = mysql_query("INSERT INTO `syt_registration`(`id`, `email`, `password`, `firstname`, `lastname`, `individual`, `category`, `subcategory`, `other`, `experience`, `experience_details`, `doc`, `phone`, `address`, `zip`, `city`, `country`, `service_distance`, `charge_mode`, `charge`, `title`, `time`, `service_day`, `gender`, `dob`, `service_mode`, `status`, `image`, `fb`, `twitter`, `google`, `linkedin`, `banner`, `verify`, `charge1`, `charge2`, `privacy`,`regID`) VALUES ('','$email','$password','$fn','$ln','$individual','$category','$subcategory','','$exp','$desc','','$phone','','$zip','','','','$charge_mode','$charge','$title',NOW(),'$service_day','$gender','$dob','$service_mode',1,'$image','','','','','','','$min_price','$max_price','','$regID')");

if($q)
{
	$json = array("status" => 1, "msg" => "Registered Successfully");
	$response = @file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=gdjmp&To=918860806718&Text='Thank you for signup on SellYourTime.Please use our all free platform to buy or sell any services accross 450+ categories'");
}
else
{
	$json = array("status" => 0, "msg" => "Registration Failed");
}

echo "[".json_encode($json)."]";
?>
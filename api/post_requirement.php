<?php
include '../connect.php';
include  'gcm_message.php';

$category = $_GET['category'];
$subcategory = $_GET['subcategory'];
$serviceday = $_GET['serviceday'];//monday-friday or delievery date
$exp = $_GET['exp'];//2yrs
$desc = $_GET['desc'];//description
$servicemode = $_GET['servicemode'];//I WILL TRAVEL TO CLIENT
$chargemode = $_GET['chargemode'];//CHARGE A FIXED PRICE
$minprice = $_GET['minprice'];
$maxprice = $_GET['maxprice'];

$price = $minprice." - ".$maxprice;

$notif = $_GET['notif'];

$title = $_GET['title'];

$email = $_GET['email'];

//-----------------------------------------------------------
$find_zip = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_find_zip = mysql_fetch_array($find_zip);
//-----------------------------------------------------------

$zip = $fetch_find_zip['zip'];
$userid = $fetch_find_zip['id'];

//$servicedistance = $_GET['servicedistance'];//1-50 KM

$fullname = $fetch_find_zip['firstname']." ".$fetch_find_zip['lastname'];


$query = mysql_query("INSERT INTO `syt_post`(`id`, `zip`, `category`, `syt_title`, `syt_desc`, `subcategory`, `delievery_date`, `travel`, `price`, `keyword`, `experience`, `date`, `userid`, `service_distance`, `service_mode`, `charge_mode`, `notif`, `charge1`, `charge2`) VALUES ('','$zip','$category','$title','$desc','$subcategory','$serviceday','','$price','','$exp',NOW(),'$userid','','$servicemode','$chargemode','$notif','$minprice','$maxprice')");

$selected_user = array();

if($query)
{
	$json = array("status" => 1, "msg" => "Post Successfully");
	
	$find_max = mysql_query("SELECT MAX(id) FROM  `syt_post`");
	
	$fetch_find_max = mysql_fetch_array($find_max);
	
	$last_id = $fetch_find_max['MAX(id)'];
	
	//echo "last_id : ".$last_id;
	
	$select_subcategory = mysql_query(" SELECT `regID` FROM `syt_registration` WHERE `subcategory`='$subcategory' AND `title`='Seller'");
	while($row = mysql_fetch_assoc($select_subcategory))
	{
		array_push($selected_user, $row['regID']);
	}
}
else
{
	$json = array("status" => 0, "msg" => "error");
}

//echo "<pre>",print_r($selected_user),"</pre>";

echo "[".json_encode($json)."]";

//--------------------------------------------------------------------------------------

	$notification_type = "Buyer";
	$greetMsg = "$fullname has posted a requirement under $subcategory category.View requirement";
	$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","last_id":"'.$last_id.'","email":"'.$email.'"}';
	
	$message = array("m" => $respJson); 
	
	$pushsts = sendPushNotificationToGCM($selected_user, $message); 
	
	
	//echo $pushsts;

//--------------------------------------------------------------------------------------
?>
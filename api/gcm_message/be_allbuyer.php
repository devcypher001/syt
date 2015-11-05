<?php
include  '../gcm_message.php';
include '../../connect.php';

$message = $_POST['message'];
$d = $_POST['d'];
$d1 = $_POST['d1'];
$http_link = $_POST['http_link'];

//echo $d." - ".$d1;

$selected_user=array();
$regID = mysql_query("SELECT * FROM `syt_registration` where (`time` BETWEEN '$d' AND '$d1') AND (`regID` <> '' AND `title`='Buyer')");
//$regID = mysql_query("SELECT * FROM `syt_registration` where (`regID` <> '' AND `title`='Seller' and `email`='sandeepdnp28@gmail.com')");
//$regID = mysql_query("SELECT * FROM `syt_registration` where (`time` >= '$d' AND `time` <= '$d1') AND (`regID` <> '' AND `title`='Buyer')");
//$fetch_regID = mysql_fetch_array($regID);
while($row = mysql_fetch_assoc($regID))
{
	array_push($selected_user, $row['regID']);
}
//echo "<pre>",print_r($selected_user),"</pre>";
//print_r($selected_user);
$notification_type = "admin_message";
$greetMsg = "$message";
$respJson = '{"notification_type":"'.$notification_type.'","greetMsg":"'.$greetMsg.'","http_link":"'.$http_link.'"}';
	
$message = array("m" => $respJson); 
	
$pushsts = sendPushNotificationToGCM($selected_user, $message);

echo 1;
?>
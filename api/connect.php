<?php
include '../connect.php';
include 'connect_email.php';


$name = $_GET['name'];
$email = $_GET['email'];
$phone= $_GET['phone'];
$location = $_GET['location'];
$desc = $_GET['desc'];
$checked = $_GET['checked'];

$userid = $_GET['userid'];

$q = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");
$fetch_q = mysql_fetch_array($q);

$profile_name = $fetch_q['firstname']." ".$fetch_q['lastname'];
$profile_email = $fetch_q['email'];
$profile_phone = $fetch_q['phone'];
//$profile_phone = $fetch_q['phone'];

//$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=918860806718&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.Kindly%20contact%20me%20on%20number%20mention%20below%20for%20more%20details.Regards,$name $phone");

//$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349896&username=9650222676&password=gdjmp&To=918860806718&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.Kindly%20contact%20me%20on%20number%20mention%20below%20for%20more%20details.Regards,$name $phone");

if(strlen($fetch_q['phone']) == 10){
	$profile_phone = "91".$fetch_q['phone'];
}else{
	$profile_phone = $fetch_q['phone'];
}

$response = file_get_contents("http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=349679&username=9650222676&password=syt001&To=$profile_phone&Text=Hi!%20I%20saw%20your%20profile%20on%20SellYourTime.Iam%20looking%20for%20your%20services.%20Kindly%20contact%20me%20on%20$phone%20for%20more%20details.");

//echo $profile_phone;
$q = mysql_query("INSERT INTO `syt_lead`(`id`, `name`, `email`, `phone`, `description`, `user_id`, `time`, `location`, `allow`) VALUES ('','$name','$email','$phone','$desc','$userid',NOW(),'$location',1)");

if($q)
{
	$json = array("status" => 1, "msg" => "Submitted Successfully");
	send_mail($profile_name,$profile_email,$profile_phone,$name,$email,$phone,$location,$desc);
}
else
{
	$json = array("status" => 0, "msg" => "Registration Failed");
}

echo "[".json_encode($json)."]";
?>
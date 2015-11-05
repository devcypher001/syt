<?php 
include 'connect.php';
session_start();

$d = @$_POST['d'];
$c = @$_POST['c'];
$detail_experience = @$_POST['detail_experience'];
$experience = @$_POST['experience'];
$cite_value = @$_POST['cite_value'];
$atmyplace = @$_POST['atmyplace'];
$online = @$_POST['online'];
$distance = @$_POST['distance'];
$service_day = @$_POST['service_day'];
$other = @$_POST['other'];

$fixed_price = @$_POST['fixed_price'];

$min_price = @$_POST['min_price'];
$max_price = @$_POST['max_price'];

$charge = $min_price."-".$max_price;
$price = @$_POST['price'];

$service_mode = $cite_value."/".$atmyplace."/".$online;

 // echo $d." / ".$c." / ".$detail_experience." / ".$experience." / ".$cite_value." / ".$atmyplace." / ".$online." / ".$distance." / ".$service_day." / ".$other." / ".$fixed_price." / ".$charge;
$uid = $_SESSION['syt_id'];

// $doc = $_SESSION['upload_token1'];

if(isset($_SESSION['upload_token1']))
{
	$doc = $_SESSION['upload_token1'];
}
else
{
	$doc="";
}

$kk = mysql_query("SELECT * FROM `syt_add_category` WHERE `subcategory`='$d' and `user_id`='$uid'");

$qq1 = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id`='$uid'");
$num_kk = mysql_num_rows($kk);
$num_qq1 = mysql_num_rows($qq1);

if($num_qq1 < 2)
{
	if($num_kk == 0)
	{
		$qwe = mysql_query("INSERT INTO `syt_add_category`(`id`, `category`, `subcategory`,`other`,`experience`,`experience_details`,`doc`, `service_distance`,`charge_mode`,`charge`,`charge1`,`charge2`,`time`,`service_day`,`dob`,`service_mode`,`user_id`) VALUES ('','$c','$d','','$experience','$detail_experience','$doc','$distance','$price','$charge','$min_price','$max_price',NOW(),'$service_day','','$service_mode','$uid')");

		if($qwe)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		echo 5;
	}	
}
else
{
	echo 6;
}

?>
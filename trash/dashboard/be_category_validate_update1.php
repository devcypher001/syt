<?php
session_start();
include 'connect.php';

$experience = @$_POST['experience'];
$experience_details2 = @$_POST['experience_details2'];

$cite_value = @$_POST['cite_value'];
$atmyplace = @$_POST['atmyplace'];
$online = @$_POST['online'];
$cite = $cite_value."/".$atmyplace."/".$online;

$min_price = @$_POST['min_price'];
$max_price = @$_POST['max_price'];
$mi_ma_price = $min_price."-".$max_price;

$fixed_pro = @$_POST['fixed_pro'];
$service_day = @$_POST['service_day'];

$charge_mode = @$_POST['price1'];
$distance = @$_POST['distance'];

$uu = @$_POST['uu'];

$slash = strrchr($mi_ma_price,"-") ? $mi_ma_price : $fixed_pro;

$uid = $_SESSION['syt_id'];

if(isset($_SESSION['upload_token3'])) 
{
	$doc = $_SESSION['upload_token3'];
}
else{
	$doc="";
}

// echo "experience=".$experience." / experience_details1=".$experience_details2." / cite_value=".$cite_value." / atmyplace=".$atmyplace." / online=".$online." / min_price=".$min_price." / max_price=".$max_price." / fixed_pro=".$fixed_pro." / service_day=".$service_day."/ charge_mode=".$charge_mode." / distance=".$distance;

 $uuu = mysql_query("UPDATE `syt_registration` SET `experience`='$experience',`experience_details`='$experience_details2',`service_mode`='$cite',`charge_mode`='$charge_mode',`charge`='$mi_ma_price',`service_day`='$service_day',`service_distance`='$distance',`doc`='$doc' WHERE `id`='$uid'");

if($uuu)
{
	echo 1;
}
else
{
	echo 0;
}
?>

<?php
session_start();
include 'connect.php';

$experience = @$_POST['experience'];
$experience_details1 = @$_POST['experience_details1'];

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
// $doc = $_SESSION['upload_token2'];

if(isset($_SESSION['upload_token2']))
{
	$doc = $_SESSION['upload_token2'];
}
else{
	$doc="";
}

   // echo "experience=".$experience." / experience_details1=".$experience_details1." / cite_value=".$cite_value." / atmyplace=".$atmyplace." / online=".$online." / min_price=".$min_price." / max_price=".$max_price." / fixed_pro=".$fixed_pro." / service_day=".$service_day."/ charge_mode=".$charge_mode." / distance=".$distance;
$uuu = mysql_query("UPDATE `syt_add_category` SET `experience`='$experience',`experience_details`='$experience_details1',`service_mode`='$cite',`charge`='$mi_ma_price',`charge_mode`='$charge_mode',service_day='$service_day',`service_mode`='$cite',`service_distance`='$distance' ,`doc`='$doc' WHERE `user_id`='$uid' and `id`='$uu'");

if($uuu)
{
	echo 1;
}
else
{
	echo 0;
}
?>

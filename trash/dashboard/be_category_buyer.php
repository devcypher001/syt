<?php 
include 'connect.php';
session_start();

$d = @$_POST['d'];
$c = @$_POST['c'];
$title = @$_POST['title'];
$desc = @$_POST['desc'];
$experience = @$_POST['experience'];
$service_day = @$_POST['service_day'];
$service_day1 = @$_POST['service_day1'];
$service_day2 = @$_POST['service_day2'];

$sd = $service_day."".$service_day1." ".$service_day2;


$offer_service = $_POST['offer_service'];

$distance = @$_POST['distance'];
$price = @$_POST['price'];
$fixed_pro = @$_POST['fixed_pro'];
$min_price = @$_POST['min_price'];
$max_price = @$_POST['max_price'];

$pri = $fixed_pro."".$min_price."-".$max_price;

$uid = $_SESSION['syt_id'];

$zip = @$_POST['zip'];

 // echo "c = ".$c." d = ".$d." title = ".$title." desc = ".$desc." experience = ".$experience." sd = ".$sd." offer_service = ".$offer_service." distance = ".$distance." price = ".$price." fixed_pro = ".$fixed_pro." min_price-max_price = ".$min_price."-".$max_price." pri = ".$pri." zip = ".$zip;

 $query= mysql_query("INSERT INTO `syt_post`(`id`, `zip`, `category`, `syt_title`, `syt_desc`, `subcategory`, `delievery_date`, `travel`, `price`, `keyword`, `experience`, `date`, `userid`, `service_distance`,`service_mode`,`charge_mode`, `notif`, `charge1`, `charge2`) VALUES ('','$zip','$c','$title','$desc','$d','$sd','','$pri','','$experience',NOW(),'$uid','$distance','$offer_service','$price',0,'$min_price','$max_price')");

 if($query)
 {
	echo 1;
 }
?>
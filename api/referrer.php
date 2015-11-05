<?php
include '../connect.php';

$param_key = $_GET['param_key'];
$param_value = $_GET['param_value'];//laddu.click9999

$explode_param_value = explode('.',$param_value);
//echo $explode_param_value[0]." ".$explode_param_value[1];

if(empty($explode_param_value[1]))
{
	$clickMomentId = $param_value;
}
else
{
	$clickMomentId = $explode_param_value[1];
}
//echo $clickMomentId;
//$appId = $_GET['appId'];

//$response = file_get_contents("http://app.airloyal.com/airloyal/earn/callback/sellyourtime?clickMomentId=$clickMomentId&appId=");



$query = mysql_query("INSERT INTO `installed`(`id`, `param_key`, `param_value`) VALUES ('','$param_key','$param_value')");

if($query)
{
	$json = array("status" => 1, "msg" => "inserted Successfully !!!!");
}
else
{
	$json = array("status" => 0, "msg" => "Error While inserting");
}

echo "[".json_encode($json)."]";
?>
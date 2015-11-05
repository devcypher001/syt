<?php
include '../connect.php';

function referrer($param_value)
{
//$param_key = $_GET['param_key'];
//$param_value = $_GET['param_value'];//laddu.click9999

	$explode_param_value = explode('.',$param_value);
	//echo $explode_param_value[0]." ".$explode_param_value[1];
	
	if($explode_param_value[0] == "mobisoc")
	{
		$clickMomentId = $param_value;
		$pv = $explode_param_value[1];
		
		$response = file_get_contents("http://tracking.mobisoc.com/aff_lsr?transaction_id=$pv");
	}
	else
	{
		$clickMomentId = $param_value;
		$response='';
	}
	//echo $response;
	$query = mysql_query("INSERT INTO `referrer`(`id`, `param_value`,`message`) VALUES ('','$param_value','$response')");
	
	//echo "JJGreat";
}

//echo referrer("a45d5d44-941e-46c8-9782-0fa365176a02");
?>
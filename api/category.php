<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include '../connect.php';

$query = mysql_query("SELECT * FROM `syt_category` WHERE 1");


if(mysql_num_rows($query))
{
	$json = array("status" => 1, "0" => " category found");
	while ($row = mysql_fetch_assoc($query)) {
		$i=1;
		array_push($json, $row['category'] );
		$i++;
	}
}
else
{
	$json = array("status" => 0, "msg" => "NO category found");
}


	/* Output header */
	header('Content-type: application/json');
	echo "[".json_encode($json)."]";
?>
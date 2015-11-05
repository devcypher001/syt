<?php
	include '../connect.php';
	$zip = @$_GET['zip'];
	
	$data = array();

	$z = mysql_query("SELECT * FROM  `syt_location` WHERE  `zipcode` LIKE  '$zip%' or `place` like '$zip%' LIMIT 0 , 30");
	
	while($row = mysql_fetch_assoc($z))
	{
		$zip = $row['zipcode'];
		$json = array(
			"location" =>$row['place']."($zip)"
		);	
		
		$data[] = $json;
	}
	
	
	
	echo json_encode($data);
?>
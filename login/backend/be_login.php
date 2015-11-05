<?php
session_start();
include '../connect.php';

$email = @$_POST['email'];
$password = @$_POST['password'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email`='$email' AND `password`='$password' AND `status`= 1 ");

$fet_query = mysql_fetch_array($query);

$num_query= mysql_num_rows($query);

if($num_query == 0)
{
	echo 0;
}
else
{	
	if($fet_query['title'] == "Seller")
	{
		$_SESSION['syt_email'] = $fet_query['email'];
		$_SESSION['syt_name'] = $fet_query['firstname']." ".$fet_query['lastname'];
		$_SESSION['syt_id'] = $fet_query['id'];
		
		echo 1;
	}
	else if($fet_query['title'] == "Buyer")
	{
		$_SESSION['syt_email'] = $fet_query['email'];
		$_SESSION['syt_name'] = $fet_query['firstname']." ".$fet_query['lastname'];
		$_SESSION['syt_id'] = $fet_query['id'];
		
		echo 2;
	}
}
/*
while($rr1 = mysql_fetch_assoc($query))
		{
			$_SESSION['syt_email'] = $rr1['email'];
			$_SESSION['syt_name'] = $rr1['firstname']." ".$rr1['lastname'];
			$_SESSION['syt_id'] = $rr1['id'];
			
			echo $_SESSION['syt_email'];
		}
*/
?>
<?php
include '../connect.php';
include  'gcm_message.php';

$email = $_GET['email'];

//-----------------------------------------------------------
$find_zip = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$fetch_find_zip = mysql_fetch_array($find_zip);
//-----------------------------------------------------------

$userid = $fetch_find_zip['id'];
 
$query = mysql_query("SELECT * FROM `syt_post` WHERE `userid` = '$userid' order by `id` desc");

if(mysql_num_rows($query) == 0)
{
	$a = array();
	$data= $a;
}
else
{

while($rr = mysql_fetch_assoc($query))
{
	$a = array(
		'id' => $rr['id'],
		'category' => $rr['category'],
		'syt_title' => $rr['syt_title'],
		'syt_desc' => $rr['syt_desc'],
		'subcategory' => $rr['subcategory'],
		'date' => $rr['date']
	
		);
		
	$data[] = $a;
}

}
echo json_encode($data);


?>
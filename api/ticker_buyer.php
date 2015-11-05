<?php
include '../connect.php';
$qw = mysql_query("SELECT * 
FROM  `syt_post` 
ORDER BY  `id` DESC 
LIMIT 0 , 20");

$data = array();

while($rr = mysql_fetch_assoc($qw))
{
	$category = $rr['category'];
	$subcategory = $rr['subcategory'];
	$uid = $rr['userid'];
	$user_id = $rr['id'];
	//echo $user_id."<br>";
	$q = mysql_query("Select * from `syt_registration` where `id` = '$uid'");
	$fetch_q = mysql_fetch_array($q);
	
	$a = array('category' => $category,"subcategory" => $subcategory,"user_id"=>$user_id,"location"=>$fetch_q['zip'],"fullname"=>$fetch_q['firstname']." ".$fetch_q['lastname']);
	
	//$data[] = $row['uid'] . " " . $row['username'] . " " . $row['xPos'] . " " . $row['yPos'];
	
	//echo $category." - ".$subcategory." - ".$id." - ".$fetch_q['zip']." - ".$fetch_q['firstname']." ".$fetch_q['lastname']."<br>";
	
	$data[] = $a;
	
}
echo json_encode($data);


?>
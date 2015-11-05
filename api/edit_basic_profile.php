<?php
include '../connect.php';

$email= $_GET['email'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `email` = '$email'");
$data = array();
while($rr = mysql_fetch_assoc($query))
{
	$a = array(
		'id' => $rr['id'],
		
		'firstname' => $rr['firstname'],
		'lastname' => $rr['lastname'],
		'phone' => $rr['phone'],
		/*'address' => $rr['address'],*/
		'zip' => $rr['zip'],
		'dob' => $rr['dob'],
		'category' => get_category($rr['category'],$rr['id']),
		'category_main' => array('cate' => $rr['category'],'subcate' => $rr['subcategory'])
		
	);
	
	$data[] = $a;
}
echo json_encode($data);

function get_category($category,$uid)
{
	$data1 = array();
	$query = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id`='$uid'");
	if(mysql_num_rows($query) != 0)
	{
		while($r = mysql_fetch_assoc($query))
		{
			$b = array(
			
				'cate' => $r['category'],
				'subcate' => $r['subcategory']
				
			);
			
			$data1[] = $b;
		}
		
		return $data1;
	}
	else
	{
		return 'null';
	}
	
}
?>
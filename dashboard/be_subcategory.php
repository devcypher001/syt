<?php
session_start();
include 'connect.php';

$c = @$_POST['c'];
$uid = $_SESSION['syt_id'];
$qq = mysql_query("SELECT * FROM `syt_registration` WHERE `subcategory` = '$c' and `id`='$uid'");
$qq1 = mysql_query("SELECT * FROM `syt_add_category` WHERE `subcategory`='$c' AND `user_id`='$uid'");

$num_qq = mysql_num_rows($qq);
$num_qq1 = mysql_num_rows($qq1);
echo $num_qq1;

if($num_qq == 0)
{
	if($num_qq1 == 2)
	{
		echo 0;
	}
	else
	{
		echo 4;
	}
	
}
else
{
	//$qw = mysql_query("INSERT INTO `syt_add_category`(`id`, `subcategory`, `user_id`) VALUES ('','$c','$uid')");
	// if($qw)
	// {
		echo 1;
	// }
}
?>
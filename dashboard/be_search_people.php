<?php
session_start();
include 'connect.php';

$person = @$_POST['person'];
$userid= $_SESSION['syt_id'];

$qq = mysql_query("SELECT * FROM `syt_registration` WHERE `id` NOT IN ('$userid') AND `email` like '$person%' or `phone` like '$person%' or `firstname` like '$person' ");
$num_qq = mysql_num_rows($qq);

if($num_qq == 0)
{
	echo "Person not found";
}
else
{
	while($kk = mysql_fetch_assoc($qq)){
		
?>
		<div onclick="fill('<?php echo $kk['firstname']." ".$kk['lastname']."/".$kk['id']; ?>')"><?php echo $kk['firstname']." ".$kk['lastname']." (".$kk['email'].")"; ?></div>
<?php
	}
}
?>
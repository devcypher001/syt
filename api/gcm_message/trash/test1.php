<?php
include '../../connect.php';
$d = $_POST['d'];
$d1 = $_POST['d1'];

//echo $d." ".$d1;

//echo date("Y-m-d", $d)." ".date("Y-m-d", $d1);

$q = mysql_query("SELECT * FROM `syt_registration` WHERE `time` BETWEEN '$d' AND '$d1'");
echo mysql_num_rows($q)."<br><br><br>";
while($row = mysql_fetch_assoc($q))
{
	//$t = explode(' ',$row['time']);
	echo $row['id']."<br>";
	
}
?>
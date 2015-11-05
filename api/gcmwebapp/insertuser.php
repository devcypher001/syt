<?php
include_once './db_functions.php';
//Create Object for DB_Functions clas
$db = new DB_Functions(); 
$emailID = $_GET["emailId"];
$regId = $_GET["regId"];


$q = mysql_query("INSERT INTO `gcmusers`(`id`, `emailid`, `gcmregid`) VALUES ('','$emailID','$regId')");

if($q)
{
	echo "Great";
}
else
{
	echo "Not great";
}

?>
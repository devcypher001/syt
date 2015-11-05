<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$mysql_db_hostname = "localhost";
$mysql_db_user = "sellyour_ms1";
$mysql_db_password = "@marks@";
$mysql_db_database = "sellyour_ms1";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");

mysql_query("SET character_set_results=utf8", $con);
mb_language('uni');
mb_internal_encoding('UTF-8');

mysql_query("set names 'utf8'",$con); 
mysql_query("SET character_set_client=utf8", $con);
mysql_query("SET character_set_connection=utf8", $con); 
mysql_query("SET character_set_results=utf8", $con);

?>
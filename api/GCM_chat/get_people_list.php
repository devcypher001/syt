<?php

$servername = "localhost";
$username = "appslkeg_syt_api";
$password = "@helloworld@";
$dbname = "appslkeg_syt";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];

$select_sql = "SELECT username, red_id FROM RegisteredDevices where username != '$username'";
$select_result = $conn->query($select_sql);

//echo $select_result->num_rows;
$complete_result = "";

if ($select_result->num_rows == 0) {

   echo "No People";
   
}else{
    
	while($row = mysqli_fetch_assoc($select_result)) {
			$rows[] = $row;
    }
	echo json_encode($rows);

}
mysqli_close($conn);

?>
<?php

$servername = "localhost";
$username = "appslkeg_syt_api";
$password = "@helloworld@";
$dbname = "appslkeg_syt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["username"]; // = "VVV";
$red_id = $_POST["reg_id"]; // = "APA91bEfFaXquuolftF0jy55C5LShdL5Ugu5NrSk_bmwd8wpYW6Ht4dKW5gEq2WFuMFRQD2LOVRF7kN7CtJrh-cTRwXxtELSfUSi4W8L56bi35vYWvylRwZA0qZ02qv9GFYshQENn6Xv-s3yW5sLoaxl-Hka5ZzFuIZBNpiCVQqseG20ckH0e10";

$duplicate_check_sql = "SELECT * FROM RegisteredDevices where username = '$name'";
$suplicate_result = $conn->query($duplicate_check_sql);

if ($suplicate_result->num_rows > 0) {

   echo "Username already registered";
   
}else{
    
	$sql = "INSERT INTO RegisteredDevices (username, red_id) VALUES ('$name', '$red_id')";

	if (mysqli_query($conn, $sql)) {
		echo "New Device Registered successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}
mysqli_close($conn);

?>
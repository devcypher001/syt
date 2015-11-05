<?php
include '../connect.php';
?>

<!doctype html>
<html lang="en">
<head>
	<title>Confirmation</title>
  
</head>

<body>
<div style="margin-left:30%;">
	<div style="margin-left:7%;font-size:20px;" id="please_wait">Information processing. Please wait... </div><br>
	<div style="margin-left:10%" id="loader"></div>
	<div style="margin-left:-11%;display:none" id="loader1"></div><br>
	<div style="margin-left:18%;display:none" id="login">Login Here</div>
	
</div>

</body>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script>
	function myFunction() 
	{
		
	}
	$(document).ready(function(){
		$("#loader").html('<img src="images/loader.gif" width="200" height="200"/>');
		
		setInterval(function()
		{ 
			$("#loader").hide();
			$("#please_wait").hide();
			$("#loader1").html("<font size='5px' color='green'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are successfully registered.</br>An email has been sent to your registered email id for account verification.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please verify.</font>").show();
			$("#login").html("<font size='6px' color='blue'><a href='../login'>Login Here</a></font>").show();
		}, 1000);
		//
	});
	</script>

	
</html>
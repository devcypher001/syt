<?php
session_start();
if(isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sell your time-forgot password</title>
<link href="css/forgot.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var email = $(".textbox1").val();
		
		var ajx = "email="+email;
		
		if(email=="")
		{
			alert("Please email ID")
		}
		else{
			$.ajax
			({
				type: "POST",
				url: "backend/be_forgot.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					if(html == 1)
					{
						alert("Password has been sent to your email.");
					}
					else{
						alert("We couldn't find your account with that information.")
					}
				}
			});
		}
	});
});
</script>
</head>
<body>
<div class="wrap">
<div class="contact-form1" style="width: 23%;
margin-left: 36%;
margin-top: 7%;
">
	<a href="../index.php"><img src="../img/logo.png"/></a>
</div>
<!-- strat-contact-form -->	
<div class="contact-form" style="margin-top:6%">
<!-- start-form -->
	<div class="contact_form">
		<h1>Forgot Password</h1>
		<br>
		<h4>Please enter your email id and we will send the password to you.</h4>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="abc@gmail.com" required />
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>

         </ul>
       	 	<input type="submit" name="Sign In" id="submit" value="Email Password"/>
			<div class="clear"></div>	
		<div class="forgot">
			<a href="index.php">Login here</a><br>
			<a href="activate.php">Activate your account</a>
		</div>	
		<div class="clear"></div>	
	</div>
<!-- end-form -->
<!-- start-account -->

<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">

</div>
</div>
</body>
<script type="text/javascript" src="js/backstretch.js"></script>
	
	<script>
		$.backstretch([
		  "images/bg2.jpg",
		  "images/bg.png",
		  "images/bg3.jpg"
		  ], {
			fade: 750,
			duration: 4000
		});
	</script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59441940-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
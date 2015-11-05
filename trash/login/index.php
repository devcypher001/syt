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
<title>Sell your time-Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		
		var email = $(".textbox1").val();
		var password = $(".textbox2").val();
		var remember_me = $("#remember_me:checked").val();
		
		var ajx = "email="+email+"&password="+password+"&remember_me="+remember_me;
		
		if(email=="" || password=="")
		{
			alert("Please fill all fields")
		}
		else{
			$.ajax
			({
				type: "POST",
				url: "backend/be_login.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					if(html == 1)
					{
						window.location="../dashboard/index.php";
					}
					else if(html == 2)
					{
						window.location="../dashboard/index1.php";
					}
					else
					{
						alert("Invalid credentials. Please correct username or password")
					}
				}
			});
		}
	});
	
	$(".textbox1").keyup(function(e){
		if(e.keyCode == 13)
		{
			var email = $(".textbox1").val();
		var password = $(".textbox2").val();
		var remember_me = $("#remember_me:checked").val();
		
		var ajx = "email="+email+"&password="+password+"&remember_me="+remember_me;
		
		if(email=="" || password=="")
		{
			alert("Please fill all fields")
		}
		else{
			$.ajax
			({
				type: "POST",
				url: "backend/be_login.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					if(html == 1)
					{
						window.location="../dashboard/index.php";
					}
					else if(html == 2)
					{
						window.location="../dashboard/index1.php";
					}
					else
					{
						alert("Invalid credentials. Please correct username or password")
					}
				}
			});
		}
		}
	});
	
	$(".textbox2").keyup(function(e){
		if(e.keyCode == 13)
		{
			var email = $(".textbox1").val();
		var password = $(".textbox2").val();
		var remember_me = $("#remember_me:checked").val();
		
		var ajx = "email="+email+"&password="+password+"&remember_me="+remember_me;
		
		if(email=="" || password=="")
		{
			alert("Please fill all fields")
		}
		else{
			$.ajax
			({
				type: "POST",
				url: "backend/be_login.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					if(html == 1)
					{
						window.location="../dashboard/index.php";
					}
					else if(html == 2)
					{
						window.location="../dashboard/index1.php";
					}
					else
					{
						alert("Invalid credentials. Please correct username or password")
					}
				}
			});
		}
		}
	});
	
	$("#submit").click(function(){
		
		var isChecked = $('#remember_me:checked').val()?true:false;
		var email = $(".textbox1").val();
		var password = $(".textbox2").val();
		if(isChecked == true)
		{
			$.ajax
			({
				type: "POST",
				url: "backend/be_setcookie.php",
				data: "email="+email+"&password="+password,
				cache: false,
				success: function(hh)
				{
					// alert(hh)
				}
				
			});
		}
	});	
});
</script>
</head>
<body>
<div class="wrap">
<div class="contact-form1">
	<a href="../index.php"><img src="../img/logo.png"/></a>
</div>
<!-- strat-contact-form -->	
<div class="contact-form">


<!-- start-form -->
	<div class="contact_form">
		<h1>Login to Your Account</h1>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="abc@gmail.com" value="<?php if(!empty($_COOKIE['cookie_email'])) { echo $_COOKIE['cookie_email'];}?>" required  />
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="website" class="textbox2" value="<?php if(!empty($_COOKIE['cookie_password'])) { echo str_rot13($_COOKIE['cookie_password']);}?>" placeholder="Password">
	            <p><img src="images/lock.png" alt=""></p>
	        </li>
         </ul>
       	 	<input type="submit" name="Sign In" id="submit" value="Sign In"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" id="remember_me" name="checkbox"><i></i>Remember me</label>
		<div class="forgot">
			<a href="forgot.php">Forgot password?</a>
		</div>	
		<div class="clear"></div>	
	</div>
<!-- end-form -->
<!-- start-account -->


<div class="account">
	<h2><a href="../register">Don't have an account? Sign Up!</a></h2>
    <div class="span"><a href="http://www.facebook.com/dialog/oauth?client_id=1535443476729064&redirect_uri=http://sellyourtime.in/facebook?fbTrue=true&scope=email,user_likes,publish_stream" onclick="Login()"><img src="images/facebook.png" alt=""/><i>Sign In with Facebook</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="http://sellyourtime.in/linkedin/linkedin_login.php"><img src="images/twitter.png" alt=""/><i>Sign In with Linkedin</i><div class="clear"></div></a></div>
    <div class="span2"><a href="#"><img src="images/gplus.png" alt=""/><i>Sign In with Google+</i><div class="clear"></div></a></div>
</div>	
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
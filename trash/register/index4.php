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
<title>Join Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link href='css/fontello.css' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script src="js/jquery.js" type="text/javascript"></script>
</head>

<script>
 function ValidateEmail(email) 
 {
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	return expr.test(email);
 };

$(document).ready(function(){
	$("#sell").click(function(){
		
		var tt = $("#sell").attr("tt");
		
		$("#sell").css({"background":"#ED6300","color":"white"});
		$("#buy").css({"background":"#4C83C3","color":"white"});
		
		$(".textbox1").attr('disabled',false);
		$(".textbox2").attr('disabled',false);
		$("#result").html("");
		
		$('#submit').click(function(){
			var textbox1 = $(".textbox1").val();
			var textbox2 = $(".textbox2").val();
			
			$("#result").html("");
			
			if(ValidateEmail(textbox1))
			{
				$.ajax
				({
					type:"POST",
					url:"be_checkemail.php",
					data:"email="+textbox1,
					success:function(display)
					{
						if(display == 0)
						{
							$("#result").html("<font color='red' size='4'>This email address already exists...</font>");
						}
						else
						{
							//$("#result").html(tt);
							window.location="join.php?_emN9VOG="+btoa(textbox1)+"&_pmN9VOG="+btoa(textbox2)+"&title_tmPNDddk="+tt;
						}
					}
				});
			}
			else
			{
				$("#result").html("<font color='red' size='4'>Enter valid email address</font>");
			}
		});
	});
	
	
	
	$("#buy").click(function(){
		
		var tt = $("#buy").attr("tt");
		
		$("#buy").css({"background":"#ED6300","color":"white"});
		$("#sell").css({"background":"#4C83C3","color":"white"});
		
		$(".textbox1").attr('disabled',false);
		$(".textbox2").attr('disabled',false);
		$("#result").html("");
		
		$('#submit').click(function(){
			var textbox1 = $(".textbox1").val();
			var textbox2 = $(".textbox2").val();
			
			$("#result").html("");
			
			if(ValidateEmail(textbox1))
			{
				$.ajax
				({
					type:"POST",
					url:"be_checkemail.php",
					data:"email="+textbox1,
					success:function(display)
					{
						if(display == 0)
						{
							$("#result").html("<font color='red' size='4'>This email address already exists...</font>");
						}
						else
						{
							//$("#result").html(tt);
							window.location="join1.php?_emN9VOG="+btoa(textbox1)+"&_pmN9VOG="+btoa(textbox2)+"&title_tmPNDddk="+tt;
						}
					}
				});
			}
			else
			{
				$("#result").html("<font color='red' size='4'>Enter valid email address</font>");
			}
			
		});
	});
	
	$("li").click(function(){
		
		//$("#result").html("<font color='red' size='4'>Please select one of the options above</font>");
	});
});
</script>
<body>
<div class="wrap">
<div class="contact-form1" style="margin-left:35%;">
	<a href="../index.php"><img src="../img/logo.png"/></a>
</div>
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<div class="contact_form" >
		
		<h1>Join Now</h1>
		<div>
			<div id="sell" tt="Seller">I want to sell &nbsp;&nbsp;&nbsp;a service</div>
			<div id="buy" tt="Buyer">I want to buy &nbsp;&nbsp;a service</div>
		</div>
		<div id="result" style="margin-top:15px"></div>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="abc@example.com" required disabled="true"/>
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="website" class="textbox2" placeholder="Password" disabled="true">
	            <p><img src="images/lock.png" alt=""></p>
	        </li>
         </ul>
       	 	<input type="submit" name="Sign In" value="Get Started" id="submit" onclick="getlogin()"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
			
			
		<div class="forgot">
			<a href="#">Forgot password?</a>
		</div>	
		<div class="clear"></div>	
	</div>
<!-- end-form -->
<!-- start-account -->
<div class="account">
	<p id="welcome">Welcome to Sellyourtime</p>
	<p id="welcome1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;India's first and largest</p>
	<p style="margin-left:25%;font-family:dinc;color:#474646;">services marketplace</p>
	<p style="margin-left: 18%;margin-top: 2%;font-family: dinc;color: #474646;">Sell or buy any service online</p>
	<p style="margin-left: 5%;font-family: dinc;margin-top: 1%;"><span style="color:rgb(255, 153, 79);font-weight:bold;">Find business leads </span>| <span style="color:rgb(76, 131, 195);font-weight:bold;">Find service providers</span></p>
	
    <div class="span"></div>

</div>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '374993789342394', // App ID
      channelUrl : 'http://localhost/facebook-php-sdk-master/', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
    
    
	FB.Event.subscribe('auth.authResponseChange', function(response) 
	{
 	 if (response.status === 'connected') 
  	{
  		document.getElementById("message").innerHTML +=  "<br>Connected to Facebook";
  		//SUCCESS
  		
  	}	 
	else if (response.status === 'not_authorized') 
    {
    	document.getElementById("message").innerHTML +=  "<br>Failed to Connect";

		//FAILED
    } else 
    {
    	document.getElementById("message").innerHTML +=  "<br>Logged Out";

    	//UNKNOWN ERROR
    }
	});	
	
    };
    
   	function Login()
	{
	
		FB.login(function(response) {
		   if (response.authResponse) 
		   {
		   	window.location="../dashboard/index.php";
		    	getUserInfo();
  			} else 
  			{
  	    	 console.log('User cancelled login or did not fully authorize.');
   			}
		 },{scope: 'email,user_photos,user_videos'});
	

	}

  function getUserInfo() {
	    FB.api('/me', function(response) {

	  var str="<b>Name</b> : "+response.name+"<br>";
	  	  str +="<b>Link: </b>"+response.link+"<br>";
	  	  str +="<b>Username:</b> "+response.username+"<br>";
	  	  str +="<b>id: </b>"+response.id+"<br>";
	  	  str +="<b>Email:</b> "+response.email+"<br>";
	  	  str +="<input type='button' value='Get Photo' onclick='getPhoto();'/>";
	  	  str +="<input type='button' value='Logout' onclick='Logout();'/>";
	  	  document.getElementById("status").innerHTML=str;
	  	  	    
    });
    }
	function getPhoto()
	{
	  FB.api('/me/picture?type=normal', function(response) {

		  var str="<br/><b>Pic</b> : <img src='"+response.data.url+"'/>";
	  	  document.getElementById("status").innerHTML+=str;
	  	  	    
    });
	
	}
	function Logout()
	{
		FB.logout(function(){document.location.reload();});
	}

  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));

</script>
<div class="account">
	
    <div class="span"><a href="#" onclick="Login()"><img src="images/facebook.png" alt=""/><i>Sign Up with Facebook</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="AuthorizelinkedIn.php" ><img src="images/twitter.png" alt=""/><i>Sign Up with Linkedin</i><div class="clear"></div></a></div>
    <div class="span2"><a href="#"><img src="images/gplus.png" alt=""/><i>Sign Up with Google+</i><div class="clear"></div></a></div>
	
	<a href="../login" style="position: relative;top: 23px;font-size: 16px;">Already have an account ? <span style="color:rgb(255, 153, 79);font-size: 20px;">Login here</span></a>
</div>

<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	
</div>
</div>
</body>
</html>
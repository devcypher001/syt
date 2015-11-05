<?php session_start(); ?>
<html>
<body background="img/1.jpg" style="margin:auto; padding:0px;">
<script src="js/jquery.js"></script>
<style>

.interact
{
	display:block;
	width:100%;
	height:550px;
	margin:5% auto;
	position:fixed;
	top:0;
	left:0;
	left:0;
	right:0;
	overflow:auto;
	border:1px solid #ccc;
	background:#4753a3;
	z-index:1000;
	display:none;
	border-radius:2px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.interact-info
{
	width: 96%;
/* background: #fff; */
margin-left: 2%;
}

.interact-info label
{
	display:block;
	padding:5px;
	margin-top:10px;
	margin-bottom:4px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#fff;
}

.interact-info input[type="text"],textarea
{
	display:block;
	width:100%;
	padding:10px;
	border:1px solid #ccc;
	border-radius:4px;
	margin-top:14px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.interact-info input[type="submit"]
{
	display:block;
	width:60%;
	padding:10px;
	border:1px solid #FD6920;
	background:#FD6920;
	color:#fff;
	border-radius:4px;
	margin:8px auto;
}

#masking
{
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.6);
	z-index: 5;
	width: 100%;
	height: 100%;
}

.close1
{
	float:right;
	color:red;
	position:relative;
	top:10px;
	right:10px;
	cursor:pointer;
}

#send
{
	color: white;
font-size: 20px;
background-color: #4753a3;
padding:5px;
}

</style>
	<div id="send">Post a reply</div>
	<?php 
	if(empty($_SESSION['syt_email']))
	{
	?>
	<div class="interact-info">
	
		<div><a href="../dashboard/" target="_blank" style="font-size: 25px;
text-decoration: none;">Already have an account?</a></div>
	</div>
	
	<div class="interact-info">
		
		or
	</div>
	<?php
	}
	?>
	<div class="interact-info">
	
		<input type="text" id="name" class="interact-info-name" placeholder="Enter your full name">
	</div>
	
	<div class="interact-info">
		
		<input type="text" class="interact-info-email" placeholder="Enter Email ID" id="email">
	</div>
	
	
	
	<div class="interact-info">
		
		<input type="text" class="interact-info-phone" placeholder="Phone Number" maxlength="10" id="phone">
	</div>
	
	<div class="interact-info">
		
		<input type="text" class="interact-info-phone" placeholder="Enter location (Zip/Area)" maxlength="10" id="location">
		<div id="search_result" style="
padding: 5px;
position: absolute;
width: 94%;display:none;cursor:pointer;background: white;"></div>
	</div>
	
	<div class="interact-info">
		
		<textarea type="text" class="interact-info-description" placeholder="Let the buyer know a few details about your services offerings" id="description" maxlength="500"></textarea>
	</div>
	


	<div class="interact-info">
		<input type="submit" class="submit003" value="Send Message">
	</div>
	
	<div class="interact-info">
		<div id="show_result"></div>
	</div>
</html>

<script>
function fill_zip(c)
	{
		var zip = $("#location").val(c);
		$("#search_result").hide();
	}
 function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
$(document).ready(function(){
	
	$("#name").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
		
	$("#phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
	
	$(".submit003").click(function(){
		
		var name = $("#name").val();
		var email = $("#email").val();
		var location = $("#location").val();
		var phone = $("#phone").val();
		var description = $("#description").val();
		
		var user = <?php echo  $_SESSION['postid'] ; ?>
		
		var aja = "name="+name+"&email="+email+"&description="+description+"&user="+user+"&phone="+phone+"&location="+location;
		
		if(name=="" || email=="" || description=="")
		{
				$("#show_result").html("<font color='red'>Please fill all fields</font>");
		}
		else
		{
			if(ValidateEmail(email))
			{
				$.ajax
			({
				type:"POST",
				url:"be_post_comment_submit.php",
				data:aja,
				success:function(s)
				{
					var name = $("#name").val('');
					var email = $("#email").val('');
					var location = $("#location").val('');
					var phone = $("#phone").val('');
					var description = $("#description").val('');
					alert("Posted successfully..");
				}
			});
			}
			else
			{
				$("#show_result").html("<font color='red'>Please enter valid email.</font>");
			}
			
		}
	});
	
	$("#location").keyup(function(){
		
		var zip = $("#location").val();
		
		$.ajax
		({
			type:"POST",
			url:"backend/be_zip.php",
			data:"zip="+zip,
			success:function(s)
			{
				$("#search_result").html(s).show();
			}
		});
	})
	
	
});
</script>
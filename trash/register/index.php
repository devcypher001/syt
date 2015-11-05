<?php
session_start();
if(isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Here</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery.js" type="text/javascript"></script>
    <style type="text/css">
    	body{
        background: url(images/aa.jpg) ;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: cover;
    }
     @font-face {
    font-family: Kaushan;
    src: url(fonts/KaushanScript-Regular.ttf);
}
    .newpannel{
    	background:#fff; 
    	margin-top:8%; 
    	border-radius: 12px;
    	padding: 5%;
		-webkit-border-radius: 12px;
    }
    .btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
	.btn-labeled {padding-top: 0;padding-bottom: 0;}
	.input-group {margin-top: 15px; margin-bottom:15px; }
	.separator { border-right: 1px solid #dfdfe0; }
	.facebook,.twitter { min-width:170px; }
	.facebook { background-color:#354E84;color:#fff; }
	.twitter { background-color:#00A5E3;color:#fff; }
	.facebook:hover,.twitter:hover { color:#fff; }

	/*contact form*/
	.contact_form input[type="submit"] {
		border: none;
		outline: none;
		cursor: pointer;
		color: #fff;
		background: #79B42B;
		width: 100%;
		padding: 12px;
		font-size: 1.3em;
		letter-spacing:1px;
		margin: 28px 0 30px;
		transition: all 0.5s ease-out;
		-webkit-transition: all 0.5s ease-out;
		-moz-transition: all 0.5s ease-out;
		-ms-transition: all 0.5s ease-out;
		-o-transition: all 0.5s ease-out;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-o-border-radius: 2px;
	}	
.contact_form input[type="submit"]:hover {
	background:#88C470;
}	

@media (min-width: 1360px) and (max-width: 1870px) {
	.screen1{
		margin-right:9%;
}
}
@media (min-width: 751px) and (max-width: 1178px) {
	#sell {
		margin-left: 8% !important;
	}
	#social_ico
	{
		width:244px;
	}
}

@media (min-width: 995px) and (max-width: 1180px) {
	.screen1
	{
		margin-right:9%;
	}
}

#welcome
{
	
	font-family:Kaushan;
	font-size: 31px;
	color:orange;
}

#sell
{
	margin-left: -1%;
	padding: 6%;
	cursor: pointer;
	background: rgb(76, 131, 195);
	font-size: 21px;
	color:white;
	margin-top:4%;
}

#buy
{
	background: rgb(76, 131, 195);
	
	padding: 6%;
	cursor: pointer;
	margin-top:4%;

	font-size: 21px;
	color:white;
}
.forgot{
	float: right;
	/*margin-right: 77px;*/
	width: 35%;
	margin-top: 4px;
}
.forgot a{
	color:#848484;
	font-size: 1.1em;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.forgot a:hover{
	color:#79B42B;
}

    </style>
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
		
		$("#textbox1").attr('disabled',false);
		$("#textbox2").attr('disabled',false);
		$("#result").html("");
		
		$('#submit').click(function(){
			var textbox1 = $("#textbox1").val();
			var textbox2 = $("#textbox2").val();
			
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
		
		$("#textbox1").attr('disabled',false);
		$("#textbox2").attr('disabled',false);
		$("#result").html("");
		
		$('#submit').click(function(){
			var textbox1 = $("#textbox1").val();
			var textbox2 = $("#textbox2").val();
			
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

});
</script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-lg-6 col-md-6  col-lg-offset-5 col-md-offset-5 ">
			<a href="../index.php"><img src="../img/logo.png"/></a>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9 col-md-9  col-lg-offset-2 col-md-offset-2 ">
			<div class="container newpannel" >
				<div class="row">
					<div class="col-lg-6 col-md-6 " style="text-align:center;">

					<div class="col-lg-12 hidden-lg hidden-md" style="text-align:center;">
					<p id="welcome">Welcome to Sellyourtime</p>
					<p> India's first and largest services marketplace</p> <p> Sell or buy any service online</p>
					<h5><b style="color:rgb(237, 99, 0);">Find business leads</b> | <b style="color:#4753a3;">Find service providers</b></h5>
					</div>

					<h2 style="margin-top:-0.01%;">Join Now</h2>
					<div >
						<p>
						  <button id="sell" type="button" class="btn screen1 btn-lg" id="sell" tt="Seller">I Want to Sell<br/>a Service</button>
						  <button id="buy" type="button" class="btn  btn-lg" id="buy" tt="Buyer">I Want to Buy<br/>a Service</button>
						</p>
					</div>
					<div id="result" style=""></div>
					<div style="margin-top:8%;">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control input-lg disabledInput" placeholder="abc@example.com" id="textbox1" disabled="true"/>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <input type="password" class="form-control input-lg" placeholder="Password" id="textbox2" disabled="true"/>
                            </div>
                           	<div class="contact_form">
                                <input type="submit" name="Sign In" value="Get Started" id="submit" />
                            </div>

                    </div>
                    <div class="col-lg-5 col-lg-offset-7">
								<a href="../login/forgot.php">Forgot password?</a>
					</div>	
							
					
					</div>
					<div class="col-lg-1 col-md-1 hidden-xs hidden-sm " style="margin-top: 15%;">
					<img src="images/border.png">
					</div>
					<div class="col-md-1  hidden-lg" style="text-align:center;">
					<img src="images/border1.png">
					</div>
					<div class="col-lg-5 col-md-5 col-sm-4" >
					<div class="col-lg-12 hidden-sm hidden-xs" style="text-align:center;">
					<p id="welcome">Welcome to Sellyourtime</p>
					<p> India's first and largest services marketplace</p> <p> Sell or buy any service online</p>
					<h5><b style="color:rgb(237, 99, 0);">Find business leads</b> | <b style="color:#4753a3;">Find service providers</b></h5>
					</div>
					<div class="row" style="margin-top:10%;">
						<div class="col-lg-10 col-sm-6 col-sm-offset-1 " style="text-align:center;" >
							<a href="http://www.facebook.com/dialog/oauth?client_id=1535443476729064&redirect_uri=http://sellyourtime.in/facebook?fbTrue=true&scope=email,user_likes,publish_stream"><img src="images/facebook1.png" alt="" id="social_ico"/></a>
						</div>
					</div>

					<div class="row" style="margin-top:5%;">
						<div class="col-lg-10 col-sm-6 col-sm-offset-1" style="text-align:center;" >
							<a href="http://sellyourtime.in/linkedin/linkedin_login.php"><img src="images/linkedin.png" alt="" id="social_ico"/></a>
						</div>
					</div>

					<div class="row" style="margin-top:5%;">
						<div class="col-lg-10 col-sm-6 col-sm-offset-1 "  style="text-align:center;">
							<img src="images/google.png" alt="" id="social_ico"/>
						</div>
					</div>
					
					<div class="row" style="margin-top:5%;">
						<div class="col-lg-12  "  style="text-align:center;">
							<a href="../login" style="position: relative;text-decoration:none; top: 23px;font-size: 16px;">Already have an account ? <span style="color:rgb(255, 153, 79);font-size: 20px;">Login here</span></a>
						</div>
					</div>				
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
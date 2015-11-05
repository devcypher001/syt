<?php
session_start();
if(isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
}
$email = @$_GET['email'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sell your time-Activate your account</title>
<link href="css/forgot.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		
		var email = "<?php echo $email; ?>";
		var ajx = atob(email);
		
		var code = $(".textbox1").val();
		
		var d = "ajx="+ajx+"&code="+code;
		
		if(code=="")
		{
			alert("Enter your secret code.")
		}
		else{
			$.ajax
			({
				type: "POST",
				url: "backend/be_activate_reset.php",
				data: d,
				cache: false,
				success: function(html)
				{
					if(html==1)
					{
						alert("Activated Successfully")
					}
					else if(html == 2)
					{
						alert("Internal error")
					}
					else if(html == 0)
					{
						alert("Wrong code")
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
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<div class="contact_form">
		<h1>Enter your code</h1>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="Code" required />
	            <span class="form_hint">Enter a valid code</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>

         </ul>
       	 	<input type="submit" name="Sign In" id="submit" value="Activate"/>
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

  ga('create', 'UA-63742184-1', 'auto');
  ga('send', 'pageview');

</script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6024977292351', {'value':'0.00','currency':'INR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024977292351&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>
</html>
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
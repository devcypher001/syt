<html>
<head><title>Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var message = $("#message").val();
		var d = $("#d").val();
		var d1 = $("#d1").val();
		var http_link = $("#http_link").val();
		var data="message="+message+"&d="+d+"&d1="+d1+"&http_link="+http_link;
		
		if(message!=''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_allbuyer.php',
	    			data: data,
	    			cache: false,
	    			success: function(html)
	    			{
	    				console.log(html)
	    				if(html ==1){
	    					alert("GCM sent successfully");
	    				}else{
	    					alert("Error");
	    				}
	    			}
	    		});
		}
		else{
			alert("Empty field")
		}
	});
});
</script>
<body>
<?php include 'header.html'; ?>
<h1>To All Buyer(scenario 3)</h1>
<input type="date" id="d"><br><br>
<input type="date" id="d1"><br><br>
<input type="text" id="http_link" placeholder="Enter HTTP link"><br><br>
<textarea rows="4" cols="50" id="message"></textarea><br><br>
<input type="submit" id="submit" value="Send Message">
</body>
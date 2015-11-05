z<html>
<head><title>Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var gender = $("#gender").val();
		var message = $("#message").val();
		var http_link = $("#http_link").val();
		var data="message="+message+"&gender="+gender+"&http_link="+http_link;
		
		if(message!=''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_gender.php',
	    			data: data,
	    			cache: false,
	    			success: function(html)
	    			{
	    			/*
	    				if(html ==1){
	    					alert("GCM sent successfully");
	    				}else{
	    					alert("Error");
	    				}
	    				*/
	    				alert(html);
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

<h1>Select Gender (scenario 6)</h1>
<select id="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<br><br>
<input type="text" id="http_link" placeholder="Enter HTTP link"><br><br>
<textarea rows="4" cols="50" id="message"></textarea><br><br>
<input type="submit" id="submit" value="Send Message">
</body>
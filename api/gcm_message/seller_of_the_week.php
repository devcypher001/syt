<html>
<head><title>Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var seller_id = $("#seller_id").val();
		var message = $("#message").val();
		var data="message="+message+"&seller_id="+seller_id;
		if(message!=''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_seller_id.php',
	    			data: data,
	    			cache: false,
	    			success: function(html)
	    			{
	    				
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
<h1>Service provider of the week</h1>
<input type="text" id="seller_id" placeholder="Enter seller ID"><br><br>
<textarea rows="4" cols="50" id="message"></textarea><br><br>
<input type="submit" id="submit" value="Send Message">
</body>
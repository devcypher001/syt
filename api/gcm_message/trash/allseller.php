<html>
<head><title>Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var message = $("#message").val();
		var data="message="+message;
		if(message!=''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_allseller.php',
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
<h1>To All Seller(scenario 2)</h1>

<input type="text" id="message">
<input type="submit" id="submit" value="Send Message">
</body>
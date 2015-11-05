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
	    			url: 'be_admin_message.php',
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
<input type="text" id="message">
<input type="submit" id="submit" value="Send Message">
</body>
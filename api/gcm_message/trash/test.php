<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var d = $("#d").val();
		var d1 = $("#d1").val();
		var data = "d="+d+"&d1="+d1;
		$.ajax
	    	({
	    		type: "POST",
	    		url: 'test1.php',
	    		data: data,
	    		cache: false,
	    		success: function(html)
	    		{
	    			$("#result").html(html);
	    		}
	    	});
		
	});
});
</script>
<input type="date" id="d">
<input type="date" id="d1">
<input type="submit" id="submit" value="Send Message">
<br>

<br>
<div id="result">
</div>
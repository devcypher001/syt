<?php
include '../../connect.php';
?>
<html>
<head><title>Admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		var message = $("#message").val();
		var subcategory = $("#subcategory").val();
		var http_link = $("#http_link").val();
		var d = $("#d").val();
		var d1 = $("#d1").val();
		
		var data="message="+message+"&subcategory="+subcategory+"&http_link="+http_link+"&d="+d+"&d1="+d1;
		alert(data)
		if(message!='' || category != ''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_allsubcategory_seller.php',
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
	
	$("#category").change(function(){
				
				var s = $("#category option:selected").attr("catid");
				var q = $("#category option:selected").val();
        			
				$("#subcategory").show();
				$.ajax
				({
					type:"POST",
					url:"be_register.php",
					data:"s="+s,
					success:function(display)
					{
						
						$("#subcategory").html(display);
					}
				});
				
	});
});
</script>
<body>
<?php include 'header.html'; ?>
<h1>To All Subcategory(scenario 5)</h1>
<input type="date" id="d"><br><br>
<input type="date" id="d1"><br><br>
 <select name="country" class="form-control" id="category">
   <option disabled="" selected="" value="">Select Category for your profession</option>
	<?php
		$query = mysql_query("SELECT * FROM `syt_category` WHERE 1");
		while($r = mysql_fetch_assoc($query))
		{
	?>
			<option value="<?php echo $r['category'];?>"catid=<?php echo $r['id'];?>><?php echo $r['category'];?></option>
	<?php
		}
	?>
                                              
  </select>
  <br><br>
  <select name="country" class="form-control"  id="subcategory">
                                                
   </select><br><br>
<input type="text" id="http_link" placeholder="Enter HTTP link"><br><br>
<textarea rows="4" cols="50" id="message"></textarea><br><br>
<input type="submit" id="submit" value="Send Message">
</body>
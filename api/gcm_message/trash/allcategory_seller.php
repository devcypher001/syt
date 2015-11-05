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
		var category = $("#category").val();
		var data="message="+message+"&category="+category;
		alert(data)
		if(message!='' || category != ''){
			$.ajax
	    		({
	    			type: "POST",
	    			url: 'be_allcategory_seller.php',
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

<h1>To All Category Seller(scenario 4)</h1>
<select class="form-control input-lg " style="font-weight:bold;" id="category">
<option value="">Select category</option>
          <?php
            $rr = mysql_query("SELECT * FROM `syt_category` WHERE 1");
            while($r1 = mysql_fetch_assoc($rr))
            {
          ?>
              <option value="<?php echo $r1['category']; ?>"><?php echo $r1['category'];?></option>
          <?php
            }
          ?>
</select>
<input type="text" id="message">
<input type="submit" id="submit" value="Send Message">
</body>
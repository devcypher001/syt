<html>
<head>
<title>Ajax Image Upload 9lessons blog</title>
</head>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
	
    $('#photoimg').live('change', function(){ 
			    
		$("#preview").html('');
				
		   $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
				
			$("#imageform").ajaxForm({
					target: '#preview'
				}).submit();
		
		});
  }); 
</script>

<style>

body
{
font-family:arial;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
<body>

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage1.php'> <input type="file" name="photoimg" id="photoimg" />
</form>
<div id='preview'>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="uploadfile.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.uploadfile.min.js"></script>
</head>
<body>


<div id="mulitplefileuploader">Upload</div>

<div id="status"></div>
<div id="show"></div>
<script>
$(document).ready(function()
{
var settings = {
    url: "upload.php",
    dragDrop:true,
    fileName: "myfile",
    allowedTypes:"jpg,png,gif",	
    returnType:"json",
	 onSuccess:function(files,data,xhr)
    {
        // alert((data));
		$("#show").append("<img src='images/"+data+"' width='100' height='100'/>&nbsp;&nbsp;");
    },
    showDelete:false
}
var uploadObj = $("#mulitplefileuploader").uploadFile(settings);


});
</script>
</body>


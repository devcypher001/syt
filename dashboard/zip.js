function fill(city)
{
	$("#zip").val(city);
}

$(function(){
	$("#zip").keyup(function(){
		
		var zip = $("#zip").val();
		if(zip != "" && zip != " ")
		{
		$.ajax
		({
			type: "POST",
			url: "be_zip.php",
			data: "zip="+zip,
			cache: false,
			success: function(html)
			{
				$("#search_down1").html(html).show();
			}
		});
		}
	});
	
	$("body").click(function(){
	
		$("#search_down1").hide();
	});
})
function fill(city)
{
	$("#city").val(city);
}

$(function(){
	$("#city").keyup(function(){
		
		var zip = $("#city").val();
		if(zip != "" && zip != " ")
		{
		$.ajax
		({
			type: "POST",
			url: "be_zip1.php",
			data: "zip="+zip,
			cache: false,
			success: function(html)
			{
				$("#search_down").html(html).show();
			}
		});
		}
	});
	
	$("body").click(function(){
	
		$("#search_down").hide();
	});
})
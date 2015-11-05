function fill_zip(city)
{
	$("#zip").val(city);
	$(".search-suggestion").hide();
}

$(function(){
	$("#zip").keyup(function(e){
		if(e.keyCode!=38 && e.keyCode!=40)
		{
		var zip = $("#zip").val();
		if(zip != "" && zip != " ")
		{
		$.ajax
		({
			type: "POST",
			url: "backend/be_zip.php",
			data: "zip="+zip,
			cache: false,
			success: function(html)
			{
				$(".search-suggestion").html(html).show();
			}
		});
		}
		}
	});
	
	$("body").click(function(){
		$(".search-suggestion").hide();
	});
})
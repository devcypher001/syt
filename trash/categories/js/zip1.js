function fill_zip1(city)
{
	$("#zip1").val(city);
	$(".search-suggestion").hide();
}

$(function(){
	$("#zip1").keyup(function(e){
		if(e.keyCode!=38 && e.keyCode!=40)
		{
		var zip = $("#zip1").val();
		if(zip != "" && zip != " ")
		{
		$.ajax
		({
			type: "POST",
			url: "backend/be_zip1.php",
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
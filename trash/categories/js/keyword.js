function fill(uu)
{
	$("#keyword").val(uu);
	 $(".keyword-suggestion").hide();
}

$(function(){
	
	
	$("#keyword").keyup(function(){
		
		var keyword = $("#keyword").val()
		
		$.ajax
		({
			type: "POST",
			url: "backend/search_keyword.php",
			data: "keyword="+keyword,
			cache: false,
			success: function(html)
			{
				$(".keyword-suggestion").html(html).show();
			}
		});
		
	});
	
	$("body").click(function(){
		$(".keyword-suggestion").hide();
	});
});
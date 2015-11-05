$(function(){
	$("#category").change(function(){
		
		var pid = $("#category").val();
		
		$.ajax
		({
			type:"POST",
			url:"be_update.php",
			data:"pid="+pid,
			success:function(display)
			{
				$("#checklist").html(display);
			}
		});
	});
});
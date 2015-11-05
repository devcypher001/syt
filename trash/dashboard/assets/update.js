$(function(){
	$("#profile_submit").click(function(){
		
		var first = $("#name11").val();
		var last = $("#last11").val();
		var mobile = $("#mobile11").val();
		var experience = $("#experience11").val();
		
		var dd = "first="+first+"&last="+last+"&mobile="+mobile+"&experience="+experience;
		if(first=="" || last=="" || mobile=="" || experience=="")
		{
			alert("Please fill all the fields")
		}
		else
		{
			$.ajax
			({
			type:"POST",
			url:"be_update_profile.php",
		    data:dd,
			success:function(display)
			{
				if(display == 1)
				{
					alert("Successfully updated")
				}
				else{
					alert("Internal error")
				}
			}
			});
		}
		
	});
});
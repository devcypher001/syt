$(function(){
	$("#change_password").click(function(){
		
		var cpass = $("#cpass").val();
		var npass = $("#npass").val();
		var npass1 = $("#npass1").val();
		
		var kk = "cpass="+cpass+"&npass="+npass+"&npass1="+npass1;
		
		if(cpass=="" || npass=="" || npass1=="")
		{
			alert("Please fill all the fields")
		}
		else
		{
			$.ajax
			({
			type:"POST",
			url:"be_password.php",
		    data:kk,
			success:function(display)
			{
				if(display == 3)
				{
					alert("The current password is wrong.")
				}
				else if(display == 2)
				{
					alert("Password do not match.")
				}
				else if(display == 1)
				{
					alert("The password has been changed successfully.");
				}
				else
				{
					alert("Internal error")
				}
			}
			});
		}
		
	});
});
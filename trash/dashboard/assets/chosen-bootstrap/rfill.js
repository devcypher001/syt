function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
	
	$("#phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
	});
		
	$("#fn").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
	});
		
	$("#ln").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
	});
		
$(function(){
	
	$("#submit3").click(function(){
		var fn = $("#fn").val();
		var ln = $("#ln").val();
		var city = $("#city").val();
		var zip = $("#zip").val();
		var dob = $("#dob").val();
		var phone = $("#phone").val();
		var address = $("#Address").val();
		
		var uj = "fn="+fn+"&ln="+ln+"&city="+city+"&zip="+zip+"&dob="+dob+"&phone="+phone+"&address="+address;
		$.ajax
		({
			type: "POST",
			url: "assets/edit/button_press.php",
			data: uj,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
		});
		
	});
	
	$("#fn").keyup(function(e){
		
		if(e.which == 13)
		{
			var fn = $("#fn").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/fn.php",
			data: "fn="+fn,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#ln").keyup(function(e){
		
		if(e.which == 13)
		{
			var ln = $("#ln").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/ln.php",
			data: "ln="+ln,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	$("#city").keyup(function(e){
		
		if(e.which == 13)
		{
			var city = $("#city").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/city.php",
			data: "city="+city,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#zip").keyup(function(e){
		
		if(e.which == 13)
		{
			var zip = $("#zip").val();
			$("#search_down1").show();
			
			$.ajax
			({
			type: "POST",
			url: "assets/edit/zip.php",
			data: "zip="+zip,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#country").keyup(function(e){
		
		if(e.which == 13)
		{
			var country = $("#country").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/country.php",
			data: "country="+country,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	
	$("#dob").keyup(function(e){
		
		if(e.which == 13)
		{
			var dob = $("#dob").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/dob.php",
			data: "dob="+dob,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#experience").keyup(function(e){
		
		if(e.which == 13)
		{
			var experience = $("#experience").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/experience.php",
			data: "experience="+experience,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#phone").keyup(function(e){
		
		if(e.which == 13)
		{
			var phone = $("#phone").val();
			
			if($("#phone").val().length == 10)
			$.ajax
			({
			type: "POST",
			url: "assets/edit/phone.php",
			data: "phone="+phone,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#available").keyup(function(e){
		
		if(e.which == 13)
		{
			var available = $("#available").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/available.php",
			data: "available="+available,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Updated successfully...")
				}
			}
			});
		}
		
	});
	
	$("#service_distance").keyup(function(e){
		
		if(e.which == 13)
		{
			var service_distance = $("#service_distance").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/service_distance.php",
			data: "service_distance="+service_distance,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Update successfully...")
				}
			}
			});
		}
		
	});
	
	$("#about").keyup(function(e){
		
		if(e.which == 13)
		{
			var about = $("#about").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/about.php",
			data: "about="+about,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Update successfully...")
				}
			}
			});
		}
		
	});
	
	$("#Address").keyup(function(e){
		
		if(e.which == 13)
		{
			var address = $("#Address").val();
		
			$.ajax
			({
			type: "POST",
			url: "assets/edit/address.php",
			data: "address="+address,
			cache: false,
			success: function(html)
			{
				if(html)
				{
					alert("Update successfully...")
				}
			}
			});
		}
		
	});
});
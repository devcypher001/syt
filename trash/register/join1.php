<?php
include '../connect.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sign up for buyer</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-base.css" rel="stylesheet" />  
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  
</head>
<style>
	@font-face 
	{
    font-family: Kaushan;
    src: url(fonts/KaushanScript-Regular.ttf);
	}
	</style>
<body>
<div class="image-container set-full-height" >
    <!--   Creative Tim Branding   -->
    
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           <div class="contact-form1" style="margin-left:35%;">
	<a href="../index.php"><img src="../img/logo.png"/></a>
</div>
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <form action="" method="">
                <div class="card wizard-card ct-wizard-orange" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <span style="color:#4753a3; font-family: Kaushan;">Join Sell Your Time</span><br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab"></a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> </h4>
                                  <div class="col-sm-1"></div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:#000084;">First Name</label>&#42;
                                        <input type="text" class="form-control" id="firstname" placeholder="Akshat" value="<?php if(!empty($_GET['first_name'])){ echo $_GET['first_name']; }?>">
                                      </div></div>
									  
									  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:#000084;">Last Name</label>&#42;
                                        <input type="text" class="form-control" id="lastname" placeholder="Rana" value="<?php if(!empty($_GET['last_name'])){ echo $_GET['last_name']; }?>">
                                      </div>
                                  </div><div class="col-sm-1"></div>
								  
								  <div class="col-sm-1"></div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:#000084;">Gender</label>&#42;
                                        <select name="country" class="form-control" id="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                      </div></div>
									  
									  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:#000084;">Date of birth</label>&#42;
                                        <input type="date" class="form-control" id="dob" placeholder="Rana">
                                      </div>
                                  </div><div class="col-sm-1"></div>
								  
								 
								  <!--OTHER  SUB Category  DISPLAY NONE-->
								  
										
										
										<div class="row" style="margin-top:0;"></div>
                                   
                                      <!--textarea-->
                                       
                                 	
									
                                    <div class="col-sm-5 col-sm-offset-1" style="margin-top:2%;">
                                         <div class="form-group">
                                            <label style="color:#000084;">Phone Number</label>&#42;
											
                                            <input type="text" class="form-control" id="phone" placeholder="Phone Number" maxlength="13" value="+91">
                                          </div>
                                    </div>
										
									 <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label style="color:#000084;">Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="B-304 Rohini">
                                          </div>
                                    </div>	
									
									 <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label style="color:#000084;">Zip/Area</label>&#42;
                                            <input type="text" class="form-control" placeholder="110085" id="zip" maxlength="6">
											<div id="search_down1" style="color: black;
cursor: pointer;
position: absolute;
z-index: 2;
display: none;
width: 90%;
padding: 7px;
height:400px;
overflow-y:scroll;
background: white;"></div>
                                          </div>
                                    </div>

									<div class="col-sm-4 col-sm-offset-1">
                                         <div class="form-group">
                                            <label style="color:#000084;">Country</label>&#42;<br>
                                             <select name="country" class="form-control" id="country">
                                                <option value="India">India</option>
                                            </select>
                                          </div>
                                    </div>
									
									
                                  
										
                              </div>
                            </div>
                            <!-- DO not Touch -->
                           
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value="Ready to go" id="submit"/>
        
                                </div>
								<div class="col-sm-5 col-sm-offset-1" id="result" style="width: 51%;"></div>
                                <div class="clearfix"></div>
								
                        </div>	
						
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    
    
     <div class="footer">
     
    </div>
    
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script>
	
	var selected;
			$(window).keyup(function(e){
				if(e.keyCode==40)
				{
					if(selected)
					{
						next=selected.next();
						selected.removeClass('selected');
						if(next.length>0)
						{
							selected=next.show().addClass('selected').focus();
							var c = $(selected).attr("cc");
							$("#zip").val(c);
						}
						else
						{
							selected = $('#search_down1 p').eq(0).addClass('selected').focus();
							var c = $("#search_down1 p").attr("cc");
							$("#zip").val(c);
						}
					}
					else
					{
						selected = $('#search_down1 p').eq(0).addClass('selected').focus();
						var c = $("#search_down1 p").attr("cc");
						$("#zip").val(c);
					}
				}
				
				else if(e.keyCode==38)
				{
					if(selected)
					{
						prev=selected.prev();
						selected.removeClass('selected');
						if(prev.length>0)
						{
							selected=prev.addClass('selected').focus();
						}
						else
						{
							selected = $('#search_down1 p').eq(40).addClass('selected').focus();
						}
					}
					else
					{
						selected=$('#search_down1 p').eq(40).addClass('selected').focus();
					}
				}
			});
	
		$("#phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		$("#firstname").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
		
		$("#lastname").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
		
		$("#min_price").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		$("#max_price").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		$("#zip").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		$("#phone").keyup(function(e){
			var str = $("#phone").val().length;
			if(str >= 4)
			{
				console.log(str);
				console.log("Keycode : " + e.which+" "+str);
			}
			else
			{
				if (e.which == 8)
				{
					$("#phone").val("+91");
				}
			}
		});
		
		
		
		$(document).ready(function(){
			$("#submit").click(function(){
				
				var firstname = $("#firstname").val();
				var lastname = $("#lastname").val();
				
				var phone = $("#phone").val();
				var address = $("#address").val();
				var zip = $("#zip").val();
				var city = $("#city").val();
				var country = $("#country").val();
				
				var dob = $("#dob").val();
				var gender = $("#gender").val();
				
				var enc_email = "<?php echo $_GET['_emN9VOG']; ?>";
				var enc_pass = "<?php echo $_GET['_pmN9VOG']; ?>";
				var enc_title = "<?php echo $_GET['title_tmPNDddk']; ?>";
				
				var email = atob(enc_email);
				var pass = atob(enc_pass);
				var title = enc_title;
				
				
				var dat = "firstname="+firstname+"&lastname="+lastname+"&phone="+phone+"&address="+address+"&zip="+zip+"&country="+country+"&dob="+dob+"&gender="+gender+"&email="+email+"&pass="+pass+"&title="+title;
				
				if(firstname=="")
				{
					$("#firstname").css('border','1px solid red');
				}
				else
				{
					$("#firstname").css('border','1px solid #E3E3E3');
					
					if(lastname=="")
					{
						$("#lastname").css('border','1px solid red');
					}
					else
					{
						$("#lastname").css('border','1px solid #E3E3E3');
						
						if(dob == "")
						{
							$("#dob").css('border','1px solid red');
						}
						else
						{
							$("#dob").css('border','1px solid #E3E3E3');
							
								$("#category").css('border','1px solid #E3E3E3');
								
									
									if($("#phone").val().length !=13)
									{
										$("#phone").css('border','1px solid red');
									}
									else
									{
										$("#phone").css('border','1px solid #E3E3E3');
										if(address == "")
										{
											$("#address").css('border','1px solid red');
										}
										else
										{
											$("#address").css('border','1px solid #E3E3E3');
											
											if(zip == "")
											{
												$("#zip").css('border','1px solid red');
											}
											else
											{
												$("#zip").css('border','1px solid #E3E3E3');
												
												if($("#phone").val().length == 13 )
												{
													$("#phone").css('border','1px solid #E3E3E3');
													
													$("#city").css('border','1px solid #E3E3E3');
														
														
														
														$.ajax
														({
														type:"POST",
														url:"be_createaccount1.php",
														data:dat,
														success:function(display)
														{	
															$("#result").html("<img src='images/34.gif'/>");
															$("#result").html("Data processing...");
															
															if(display == 2)
															{
																$("#result").html("<font color='red' size='4'>Your age must be over 15</font>");
															}
															else
															{
																window.location="loader.php";
															}
														}
														
														});
												}
												else
												{
													$("#phone").css('border','1px solid #E3E3E3');
													
												}
											}
										}
									}
								
							
						}
					}
				}
			});
			
			
			
			$("#category").change(function(){
				
				var s = $("#category option:selected").attr("catid");
				
				if($("#category").val() == "Other")
				{
					$("#other_category").show();
					$("#subcategory").hide();
				}
				else
				{
					$("#other_category").hide();
					$("#subcategory").show();
					
					$.ajax
					({
						type:"POST",
						url:"be_register.php",
						data:"s="+s,
						success:function(display)
						{
							$("#subcategory1").html(display);
						}
					});
				}
			});
			
			$("#price").change(function(){
				var price = $("#price").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price").show();
				}
				
				else if(price == "Charge per hour")
				{
					$("#fixed_price").show();
				}
				
				else if(price == "Charge per day")
				{
					$("#fixed_price").show();
				}
				
				else if(price == "Charge per project")
				{
					$("#fixed_price").show();
				}
				else
				{
					$("#fixed_price").show();
				}
			});
		});
	</script>


</div>

</body>
	<script type="text/javascript" src="js/backstretch.js"></script>
	
	<script>
		$.backstretch([
		  "public/images/bg2.jpg",
		  "public/images/bg.png",
		  "public/images/bg3.jpg"
		  ], {
			fade: 750,
			duration: 4000
		});
	</script>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="js/wizard.js"></script>
	<script src="js/zip.js"></script>
	
</html>
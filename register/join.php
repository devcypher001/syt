<?php
include '../connect.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sign up for seller</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-base.css" rel="stylesheet" />  
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
	<style>
	@font-face 
	{
    font-family: Kaushan;
    src: url(fonts/KaushanScript-Regular.ttf);
	}
	  	@media screen and (max-width: 992px) {
#detail_experience
{
height:222px;
}

}

@media screen and (min-width: 992px) {
#detail_experience
{
   width: 548px !important;
height: 148px;
}
}
	</style>
</head>

<body onload="initialize()">
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
								  
								  
										
                                       
								  
                                  <!--<div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                      </div>
                                  </div>-->
								  
								  <div class="col-sm-10 col-sm-offset-1"><div class="row" style="margin-top:2px;"></div>
								  <label class="radio-inline" style="font-weight:bold;color:#000084;">
                                   <input type="radio" name="optradio" style="margin-top: 4%;" id="individual">I am an individual</label>&#42;
								  
								  
                                 <label class="radio-inline" style="font-weight:bold;color:#000084;">
                                  <input type="radio" name="optradio" style="margin-top: 4%;" id="company">We are company</label>&#42;</div>
								  
                                   <div class="col-sm-10 col-sm-offset-1" style="margin-top:2%;">
                                       <div class="form-group">
                                            <label style="color:#000084;">Select a category under which you would like to offer your services? </label>&#42;<br>
											<p style="font-size:13px;"></p>
                                            <select name="country" class="form-control" id="category">
                                                <option disabled="" selected="" value="">Select Category for your profession</option>
												<?php
													$query = mysql_query("SELECT * FROM `syt_category` WHERE 1");
													while($r = mysql_fetch_assoc($query))
													{
												?>
														 <option value="<?php echo $r['category'];?>" catid=<?php echo $r['id'];?>><?php echo $r['category'];?></option>
												<?php
													}
												?>
                                              
                                            </select>
                                          </div>
                                  </div>
								  <!--OTHER  SUB Category  DISPLAY NONE-->
								  	  <div class="row" style="margin-top:0;"></div>
                                   <div class="col-sm-10 col-sm-offset-1" id="subcategory" style="display:none;">
                                       <div class="form-group">
                                            <label style="color:#000084;">The specific service you would like to sell?</label>&#42;<br>
											<p style="font-size:13px;">Select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>
                                             <select name="country" class="form-control"  id="subcategory1">
                                                
                                            </select>
										</div>
									</div>
                                        <!--OTHER Category INPUT DISPLAY NONE-->
										
									
									
										<div class="form-group col-sm-10 col-sm-offset-1" style="display:none;" id="other_subcategory">
										<label for="exampleInputEmail1" style="color:#000084;">Others</label>
                                        <input type="text" class="form-control" id="other" placeholder="Other Category...">
									</div>
										
										
										<div class="row" style="margin-top:0;"></div>
                                   <div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label style="color:#000084;"> How much experience do you have to provide this service (in years)?</label>&#42;<br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="margin-left:-2%;">
                                             <select name="country" class="form-control" id="experience">
                                                
                                               
                                                <option value="">Select experience</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
                                                <option value="11">11</option>
												<option value="12">12</option>
                                                <option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20+ </option>
                                            </select></div>
										</div></div>
                                      <!--textarea-->
                                       
                                    <div class="col-sm-6 col-sm-offset-1" style="margin-top:2%;">
                                         <div class="form-group">
                                            <label style="color:#000084;">Describe your experience in detail:</label>&#42;
                                            <textarea class="form-control" placeholder="Example: I am a business consultant in the area of foreign trade and company setup. I am an MBA graduated from xyz college and completed my engineering from xyz college.I have 10 years of experience helping small and medium business owners set up a company and get all related licenses.I am associated with trade bodies like xyz.We provide end to end consulting and charge most competitive rates." rows="7"  id="detail_experience" maxlength="500"></textarea>
                                          </div>
										  
                                    </div>
									<div class="row">
									<div class="col-sm-10 col-sm-offset-1" style="color:grey;font-weight:bold;text-align:justify;padding-left:30px;padding-right:30px;">
									*We recommend highlighting important aspects of your experience to seek right customers.
									Eg.Certifications & Awards, Institutes you have attended, organisations you have worked in   or are associated with, projects you have undertaken etc.
									</div>
									
									</div>
									
									<div class="col-sm-6 col-sm-offset-1" style="margin-top:2%;" id="count_textarea">
                                        
                                    </div>
                                  <!--textarea-->
								  <div class="col-sm-10 col-sm-offset-1" style="margin-top:2%;">
                                         <div class="form-group">
                                            <label style="color:#000084;">Upload a file with brief description of your service or work profile</label>
											<P style="font-size:13px;text-align:justify;">We recommend uploading a word or pdf file with details of your experience,education, examples of your work and contact details.<span style="font-size:11px;">(You can select multiple files upto of maximum size of 3MB including all files.)</span></P>
											<div class="col-sm-6" style="margin-left:-2%;">
												
												<iframe src="form.php" scrolling="no" width="250" height="40" frameborder="0" id="upload_frame">
												
											</iframe>
											
											</div>
											
                                          </div>
                                    </div>
									
                                    <div class="col-sm-5 col-sm-offset-1" style="margin-top:2%;">
                                         <div class="form-group">
                                            <label style="color:#000084;">Phone Number</label>&#42;
					<p>Enter 10 digit  Mobile No.</p>					
                                            <input type="text" class="form-control" id="phone" placeholder="Enter 10 Mobile No." maxlength="13" value="+91">
                                          </div>
                                    </div>
										
									 <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                           
                                          </div>
                                    </div>	
									
									 <!--<div class="col-sm-4">
                                         <div class="form-group">
                                            <label style="color:#000084;">Zip/Area</label>
                                            <input type="text" class="form-control" placeholder="110085" id="autocomplete" maxlength="6">
										
                                          </div>
                                    </div>-->
									<div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label style="color:#000084;">Location/Address</label>&#42;
                                            <input type="text" class="form-control" placeholder="110085" id="autocomplete">
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
									<div class="col-sm-5">
                                         <div class="form-group">
                                            <label style="color:#000084;">Country</label>&#42;<br>
                                             <select name="country" class="form-control" id="country">
                                                <option value="India">India</option>
                                            </select>
                                          </div>
                                    </div>
									
									
                                   <div class="col-sm-10 col-sm-offset-1" style="margin-top:1%;">
                                       <div class="form-group">
                                            <label style="color:#000084;"> Where would you like to offer your services? </label>&#42;<br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-5" style="margin-left:-2%;">
												<label class="radio-inline" style="">
												<input type="checkbox" name="optradio" style="margin-top: 3%;" id="client_site" value="I will travel to Client Site"> I will travel to client site</label>
												
											</div>
											
											<div class="col-sm-4" style="margin-left:-2%;">
												<label class="radio-inline" style="">
												<input type="checkbox" name="optradio" style="margin-top: 6%;" id="atmyplace" value="At My Place"> At my place</label>
												
											</div>
											
											<div class="col-sm-3" style="margin-left:-2%;">
												<label class="radio-inline" style="">
												<input type="checkbox" name="optradio" value="Online" style="margin-top:10%;" id="online"> Online</label>
												
											</div>
										</div>
										
										</div>
										
									<div class="col-sm-10 col-sm-offset-1" style="margin-top:2%;display:none" id="show_distance">
                                       <div class="form-group">
                                            <label style="color:#000084;"> Select Distance </label>&#42;<br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="margin-left:-2%;">
                                             <select name="country" class="form-control" id="distance">
                                                
                                               
                                                <option value="">Select Distance</option>
                                                <option value="1-50">1-50 km</option>
                                                <option value="51-100">51-100 km</option>
                                                <option value="101-150">101-150 km</option>
                                                <option value="151-200">151-200 km</option>
                                                <option value="201-250">201-250 km</option>
                                                <option value="251-300">251-300 km</option>
                                                <option value="300">300+ km</option>
                                            </select>
											</div>
										</div>
										
										</div>
										
										
										<div class="col-sm-10 col-sm-offset-1" style="margin-top:2%;">
                                       <div class="form-group">
                                            <label style="color:#000084;">How do you wish to charge your service?</label>&#42;<br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8">
                                             <select name="country" class="form-control" id="price" style="margin-left:-4%;">
                                                
                                               
                                                <option value="">Service charges</option>
                                                 <option value="I would like to Volunteer and not charge">I would like to Volunteer and not charge</option>
                                                <option value="Charge a fixed price">Charge a fixed price</option>
                                                <option value="Charge per hour">Charge per hour</option>
                                                <option value="Charge per day">Charge per day</option>
                                                <option value="Charge per project">Charge per project</option>
                                                
                                            </select></div>
										</div>
										</div>
										
										<div class="col-sm-10 col-sm-offset-1" id="fixed_price" style="display:none;">
										<div class="col-sm-4" id="fixed_price">
                                         <div class="form-group" style="margin-top: 4%;">
                                            <label style="color:#000084;">Enter minimum price</label>
											
                                            <input type="text" class="form-control" id="min_price" placeholder="INR" maxlength="8"><span>
                                          </div>
										</div>
										
										<div class="col-sm-1" style="margin-top:7%;">
										&#8212;
										</div>
										
										<div class="col-sm-5" id="fixed_price">
                                         <div class="form-group" style="margin-top: 4%;">
                                            <label style="color:#000084;">Enter maximum price</label>
											
                                            <input type="text" class="form-control" id="max_price" placeholder="INR" maxlength="8" >
                                          </div>
										</div>
										</div>
										
										<div class="col-sm-6 col-sm-offset-1" id="fixed_price_done" style="display:none;">
                                         <div class="form-group" style="margin-top: 4%;">
                                            <label style="color:#000084;">Enter fixed price</label>
											
                                            <input type="text" class="form-control" id="fixed_pro" placeholder="INR" maxlength="8"><span>
                                          </div>
										</div>
										
									<div class="col-sm-10 col-sm-offset-1" style="margin-top:1%;">
                                       <div class="form-group">
                                            <label style="color:#000084;">When can you offer the service?</label>&#42;<br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8" style="margin-left:0%;">
                                             <select name="country" class="form-control" id="service_day" style="margin-left:-4%">
                                                
                                               
                                                <option value=""></option>
                                                <option value="Monday-Friday">Monday - Friday</option>
                                                <option value="Monday-Saturday">Monday - Saturday</option>
												<option value="On Weekends">On Weekends</option>
                                                <option value="All 7 Days">All 7 Days</option>
                                                
                                            </select>
										    </div>
										</div>
									</div>
									
									<div class="col-sm-10 col-sm-offset-1" style="margin-top:1%;">
                                       <div class="form-group">
                                            <label style="color:#000084;">How do you wish to be notified by a buyer for your services?*</label><br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-5" style="margin-left:-2%;">
												<label class="radio-inline">
                                               <input type="radio" name="optradio">On my mobile
                                                </label>
												
											</div>
											
											<div class="col-sm-4" style="margin-left:-2%;">
												<label class="radio-inline">
                                               <input type="radio" name="optradio">E-mail
                                                </label>
												
											</div>
											
											<div class="col-sm-3" style="margin-left:-2%;">
												<label class="radio-inline">
                                               <input type="radio" name="optradio">Both
                                                </label>
												
											</div>
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
								<div class="col-sm-5 col-sm-offset-1" id="result" style="width: 51%;">* mandatory fields</div>
                                <div class="clearfix"></div>
								
                        </div>	
						
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    
    
     <div class="footer" style="">
     <?php
		//include 'form.php';
		?>
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
		
		$("#min_price").keypress(function(e){
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
		
		$("#max_price").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		$("#fixed_pro").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
		/*$("#zip").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});*/
		
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
				
				var individual = $("#individual:checked").val();
				var company = $("#company:checked").val();
				
				var category = $("#category").val();
				
				//var subcategory = $("#subcategory1").val();
				
				
				if($("#subcategory1").val() == "Others")
				{
					var other = $("#other").val();
					var subcategory = other;
					//alert(subcategory)
					
				}else
				{
					var subcategory = $("#subcategory1").val();
					//alert(subcategory)
				}
				
				var experience = $("#experience").val();
				
				var detail_experience = $("#detail_experience").val();
				
				
				var phone = $("#phone").val();
				var address = $("#address").val();
				var zip = $("#autocomplete").val();
				var city = $("#city").val();
				var country = $("#country").val();
				var distance = $("#distance").val();
				var service_day = $("#service_day").val();
				
				var price = $("#price").val();
				
				var fixed_price = $("#fixed_price1").val();
				var hour_price = $("#hour_price1").val();
				var day_price = $("#day_price1").val();
				var project_price = $("#project_price1").val();
				
				var cite_value = $("#client_site:checked").val();
				var atmyplace = $("#atmyplace:checked").val();
				var online = $("#online:checked").val();
				
				var offer_service = cite_value+"/"+atmyplace+"/"+online;
				
				var dob = $("#dob").val();
				var gender = $("#gender").val();
				
				var fixed_price_done = $("#fixed_pro").val();
				
				var enc_email = "<?php echo $_GET['_emN9VOG']; ?>";
				var enc_pass = "<?php echo $_GET['_pmN9VOG']; ?>";
				var enc_title = "<?php echo $_GET['title_tmPNDddk']; ?>";
				
				var email = atob(enc_email);
				var pass = atob(enc_pass);
				var title = enc_title;
				
				var min_price = $("#min_price").val();
				var max_price = $("#max_price").val();
				
				
				var fb_id = "<?php if(!empty($_GET['fb_id'])){ echo $_GET['fb_id']; }else{ echo ""; } ?>";
				
				
			
				var datas= "firstname="+firstname+"&lastname="+lastname+"&individual="+individual+"&company="+company+"&category="+category+"&subcategory="+subcategory+"&other="+other+"&experience="+experience+"&detail_experience="+detail_experience+"&phone="+phone+"&address="+address+"&zip="+zip+"&country="+country+"&distance="+distance+"&service_day="+service_day+"&price="+price+"&fixed_price="+fixed_price+"&hour_price="+hour_price+"&day_price="+day_price+"&project_price="+project_price+"&email="+email+"&pass="+pass+"&title="+title+"&city="+city+"&offer_service="+offer_service+"&dob="+dob+"&gender="+gender+"&max_price="+max_price+"&min_price="+min_price+"&fixed_price_done="+fixed_price_done+"&fb_id="+fb_id;
				
				$("#result").html("<font size='4' color='black'><img src='images/loader.gif' width='30px'></font>");
				$.ajax
				 ({
					type:"POST",
					url:"be_createaccount.php",
					data:datas,
					success:function(display)
					{
					//	console.log(display)
						if(display == 1)
						{
							$("#firstname").css('border','1px solid red');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your firstname</font>");
						}
						else if(display == 2)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid red');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your lastname</font>");
						}
						else if(display == 3)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid red');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your date of birth</font>");
						}
						else if(display == 20)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid red');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
					
							$("#result").html("<font size='4' color='red'>Your age must be over 15</font>");
						}
						else if(display == 4)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');

							$("#result").html("<font size='4' color='red'>Select category</font>");
						}
						else if(display == 5)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid red');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Select subcategory</font>");
						}
						else if(display == 6)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid red');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your experience</font>");
						}
						else if(display == 7)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid red');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your phone number</font>");
						}
						else if(display == 8)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid red');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Enter your description</font>");
						}
						else if(display == 9)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid red');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Find zip code/area</font>");
						}
						else if(display == 10)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid red');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("<font size='4' color='red'>Select city</font>");
						}
						else if(display == 11)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid red');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
						}
						else if(display == 12)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid red');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
						}
						else if(display == 13)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid red');
							$("#max_price").css('border','1px solid red');
							$("#service_day").css('border','1px solid #E3E3E3');
						}
						else if(display == 14)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							
							$("#result").html("Please enter price in correct order.");
						}
						else if(display == 15)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
						}
						else if(display == 16)
						{
							$("#firstname").css('border','1px solid #E3E3E3');
							$("#lastname").css('border','1px solid #E3E3E3');
							$("#dob").css('border','1px solid #E3E3E3');
							$("#category").css('border','1px solid #E3E3E3');
							$("#subcategory1").css('border','1px solid #E3E3E3');
							$("#experience").css('border','1px solid #E3E3E3');
							$("#phone").css('border','1px solid #E3E3E3');
							$("#detail_experience").css('border','1px solid #E3E3E3');
							$("#autocomplete").css('border','1px solid #E3E3E3');
							$("#city").css('border','1px solid #E3E3E3');
							$("#client_site").css('border','1px solid #E3E3E3');
							$("#price").css('border','1px solid #E3E3E3');
							$("#min_price").css('border','1px solid #E3E3E3');
							$("#max_price").css('border','1px solid #E3E3E3');
							$("#service_day").css('border','1px solid #E3E3E3');
							$("#result").html("<font size='4' color='green'>Registered Successfully...</font>");
							
							
							var firstname = $("#firstname").val('');
							var lastname = $("#lastname").val('');
							var detail_experience = $("#detail_experience").val('');
							var phone = $("#phone").val('');		
							var address = $("#address").val('');
							var zip = $("#autocomplete").val('');
							var city = $("#city").val('');
							var country = $("#country").val('');
							var distance = $("#distance").val('');
							var service_day = $("#service_day").val('');
							
							 window.location="../loader.php";
							 
						}
						
					}
				  });
				//window.location="../dashboard/index.php";
			});
			
			$("#detail_experience").keyup(function(){
			
				var count_experience = $("#detail_experience").val().length;
				var remain_letter = 500-count_experience;
				
				if(count_experience <= 500 || count_experience=='')
				{
					var count_textarea = $("#count_textarea").html("<font color='green' size='4'>"+remain_letter+"</font> remaining words.");
				}
			});
			
			$("#client_site").click(function(){
				var cite_value = $('#client_site:checked').val()?true:false;

				if(cite_value == true)
				{
					$("#show_distance").show();
				}
				else
				{
					$("#show_distance").hide();
				}
			});
			
			$("#category").change(function(){
				
				var s = $("#category option:selected").attr("catid");
				var q = $("#category option:selected").val();
        

				if($("#category").val() == "Other")
				{
					$("#other_category").show();
					$("#subcategory").hide();
				
				}
				else if($("#category").val() == "Social Causes")
				{
					$('#price').children('option[value="I would like to Volunteer and not charge"]').css('display','block');
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
				else
				{
					$("#other_category").hide();
					$("#subcategory").show();
					$('#price').children('option[value="I would like to Volunteer and not charge"]').css('display','none');
					
					$.ajax
					({
						type:"POST",
						url:"be_register.php",
						data:"s="+s,
						success:function(display)
						{
							//alert(display)
							$("#subcategory1").html(display);
						}
					});
					
				}
			});
			
			
			$("#subcategory1").change(function(){
				
				var subcategory = $(this).val();
				if( subcategory=="Others")
				{
					$("#other_subcategory").show();
				}
				else
				{
					$("#other_subcategory").hide();
				}
				
			});
			
			$("#price").change(function(){
				var price = $("#price").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price_done").show();
					$("#fixed_price").hide();
				}
				
				else if(price == "Charge per hour")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per day")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per project")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				else
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
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
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
	<script src="../js/geolocation.js"> </script>
	
	<!-- FILE UPLOAD -->
		
		<!-- jQuery File Upload Dependencies -->
		
		<script src="assets/js/jquery.fileupload.js"></script>
		
	<!-- FILE UPLOAD -->
		
	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="js/wizard.js"></script>
	<!--<script src="js/zip.js"></script>-->
	<!--<script src="js/city.js"></script>-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63742184-1', 'auto');
  ga('send', 'pageview');

</script>
	<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6024977292351', {'value':'0.00','currency':'INR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024977292351&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>
</html>
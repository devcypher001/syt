<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
}

$check_title = $_SESSION['syt_id'];
$check_title_query = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$check_title'");
$fet_check_title_query = mysql_fetch_array($check_title_query);


if($fet_check_title_query['title'] != "Seller")
{
	header("Location:index1.php");
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Sell Your Time | My Leads</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="../index.php">
				<img src="assets/img/logo.png" alt="logo" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<?php include 'leads_notif.php';?>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<?php
						$userid = $_SESSION['syt_id'];

						$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");

						$fet_arr = mysql_fetch_array($fet);

					?>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope-alt"></i>
						<span class="badge"><?php include 'inbox.php';?></span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>
									<?php include 'inbox1.php'?>
								</p>
							</li>

							<?php include 'inbox2.php' ?>



						</ul>
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php
							if(empty($fet_arr['image']))
							{
							?>
								<img alt="" src="assets/img/avatar1_small.jpg" />
											<?php
												
											}
											else
											{
												echo "<img src='images/".$fet_arr['image']."' width='29' height='29'/>";
											
											}
										?>
						<span class="username"><?php 
						
						if(isset($_SESSION['syt_name']))
						{
						echo $_SESSION['syt_name'];
						}
						else
						{
							echo "Admin";
						}
						?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->	
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
				<li class="start  ">
					<a href="index.php">
					<i class="icon-home"></i> 
					<span class="title">My Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-user"></i> 
					<span class="title">My Profile</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="profile.php">View Profile</a></li>
						<li ><a href="skills.php">Add Category</a></li>
						
					</ul>
				</li>				
				<li class="">
					<a href="leads.php">
					<i class="icon-table"></i> 
					<span class="title">My Leads</span>
					</a>
				</li>
				<li class="">
					<a href="lead_seller.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Service Providers</span>
					</a>
				</li>
				<li class="">
					<a href="newleads.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Find New Leads</span>
					</a>
				</li>
				
				<li class="">
					<a href="interest.php">
					<i class="icon-briefcase"></i> 
					<span class="title">My Interests</span>
					</a>
				</li>
				
				<li class="active">
					<a href="post.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Buy services</span>
					</a>
				</li>
				<li class="">
					<a href="invite_share.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Share & Invite</span>
					</a>
				</li>
				<li class="">
					<a href="social.php">
					<i class="icon-briefcase"></i> 
					<span class="title">My Social Links</span>
					</a>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label class="hidden-phone">
								<input type="checkbox" class="header" checked value="" />
								<span class="color-mode-label">Fixed Header</span>
								</label>							
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Buy services
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Buy service</a>
								<i class="icon-angle-right"></i>
							</li>
							
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
										<div class="span12">
											<div class="span3">
												<ul class="ver-inline-menu tabbable margin-bottom-10">
													<li class="active">
														<a data-toggle="tab" href="#tab_1-1">
														<i class="icon-cog"></i> 
														Post your requirement
														</a> 
														<span class="after"></span>                           			
													</li>
													
												</ul>
											</div>
											<div class="span9">
												<div class="tab-content">
													
													<div class="portlet box">
							<div class="portlet-body form">
							<label style="font-size:20px;font-weight:bold;">Post your requirement to buy any service you need in your area.Please highlight details,experience required and price you are willing to pay.</label><br>
                        <form action="#" class="form-horizontal">
                              <div class="form-group">
                                
                                <label for="sel1">What services do you need ?</label>
                                
                                <select class="form-control" id="category" style="width: 34%;">
                                  <option disabled="" selected="" value="">Select a category</option>
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
                              <br>
                              <div class="form-group" id="subcategory" style="display:none;">
                                <label for="sel1">Select a specific subcategory.</label>
                                
                                <select class="form-control"  id="subcategory1" style="width: 34%;">
                                 		
                                </select>
                              </div>
							  <br>
							  <div class="form-group col-sm-10 col-sm-offset-1" style="display:none;" id="other_category">
										<label for="exampleInputEmail1" style="color:#000084;">Others</label>
                                        <input type="text" class="form-control" id="other" placeholder="Other Category...">
							 </div>
							 
							 <div class="form-group">
								<label for="exampleInputEmail1" >Give title to your requirement For eg: (Guitar trainer required in greater kailash, delhi)</label>
								 <input type="text" class="form-control" id="title">
							 </div>
							 
							 <br>
							 <div class="form-group">
							 <label>Please add specific details to your requirement.</label>
								<textarea class="span8 m-wrap" rows="3" id="desc" placeholder="I want a guitar trainer to teach me a acoustic guitar on saturday and sunday. I am a beginner and 18 year of age."></textarea>
							 </div>
							 
							 <br>
							 <div class="form-group">
                                <label for="sel1">When do you need this service? (You can either select days of the week or specific dates when you need the service)</label>
                                 <select name="country" class="form-control" id="service_day"  style="width: 34%;">
                                                
                                               
                                                <option value=""></option>
                                                <option value="Monday-Friday">Monday - Friday</option>
                                                <option value="Monday-Saturday">Monday - Saturday</option>
												<option value="On Weekends">On Weekends</option>
                                                <option value="All 7 Days">All 7 Days</option>
                                                
                                 </select>
								 OR
								 <input type="date" id="service_day1"/> &nbsp;-&nbsp;<input type="date" id="service_day2" />
                              </div>
							 <br>
							 
							  <div class="form-group">
                                <label for="sel1">How much experience are you looking for in the service provider?</label>
								<select name="country" class="form-control" id="experience" style="width: 34%;">
                                                
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
                                            </select>
                              </div>
							  <br>
							 
							  
                              <div class="form-group">
                                <label for="sel1">Where do you need this service?</label>
                                
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="margin-top: 3%;" id="client_site" value="I will travel to service provider"> I will travel to service provider</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="margin-top: 6%;" id="atmyplace" value="At My Place"> At my place</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" value="Online" style="margin-top:10%;" id="online"> Online</label>
                              </div>
								
								<div class="form-group" id="location" style="display:none;">
							  <label style="color:#000084;"> Enter Pin code </label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="">
											<input type="text" id="zip1" placeholder="Enter pin code"/>
											<div id="search_result" style="padding: 5px;
position: absolute;
width: 94%;display:none;cursor:pointer;background: white;z-index:100;"></div>
                                            
									</div>
								</div>
								
								<br>
								<div class="form-group" id="distance" style="display:none;">
							  <label style="color:#000084;"> Select Distance </label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="">
                                             <select id="distance1">
                                                
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
								<br>
								
								<div class="form-group">
                                            <label>How would you like to pay for the service ( per hour,per day,per project)?</label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8">
                                             <select name="country" class="form-control" id="price">
                                                
                                               
                                                <option value="">Service charges</option>
                                                <option value="Charge a fixed price">Charge a fixed price</option>
                                                <option value="Charge per hour">Charge per hour</option>
                                                <option value="Charge per day">Charge per day</option>
                                                <option value="Charge per project">Charge per project</option>
                                                
                                            </select></div>
								</div>
								
								
									<div class="col-sm-10 col-sm-offset-1" id="fixed_price" style="display:none;">
										<div class="col-sm-4" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label>Enter minimum price</label>
											
                                            <input type="text" class="form-control" id="min_price" placeholder="INR"><span>
                                          </div>
										</div>
										
										
										<div class="col-sm-5" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label>Enter maximum price</label>
											
                                            <input type="text" class="form-control" id="max_price" placeholder="INR">
                                          </div>
										</div>
										</div>
										
										<br>
										
										<div class="col-sm-6 col-sm-offset-1" id="fixed_price_done" style="display:none;">
                                         <div class="form-group" style="">
                                            <label>Enter fixed price</label>
											
                                            <input type="text" class="form-control" id="fixed_pro" placeholder="INR"><span>
                                          </div>
										</div>
										<br>
									

										<div class="col-sm-6 col-sm-offset-1">
											<div class="form-group">
											<label>How would you like to be contacted by service providers?</label>
												<label class="radio">
													<input type="radio" name="optionsRadios1" class="notif" value="1" />
													On my mobile
												</label>
												
												<label class="radio">
													<input type="radio" name="optionsRadios1" class="notif" value="2" />
													E-mail
												</label>
																			
												<label class="radio">
													<input type="radio" name="optionsRadios1" class="notif" value="3" checked />
													Both
												</label>  
											</div>
										</div>
								
                              <br>
                              
                              <br>
                              <div class="form-group">
                              <div class="submit-btn">
                                         <div  class="btn green" id="submit">Submit</div>
                                       <a href="#" class="btn">Cancel</a>
                               </div>
                               </div>
                        </form>
                     </div>
							
						</div>
													
												</div>
											</div>
											<!--end span9-->                                   
										</div>
									</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->	
		</div>
		<!-- END PAGE -->	 	
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		All rights reserved @ 2015 Sell Your Time
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="assets/js/jquery-1.8.3.min.js"></script>			
	<script src="assets/breakpoints/breakpoints.js"></script>			
	<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.blockui.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>	
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->
	<script src="assets/js/app.js"></script>		
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage('calendar');
			App.init();
		});
	</script>
	
	<script>
	function fill(c)
	{
		var zip = $("#zip1").val(c);
		$("#search_result").hide();
	}
		$("#category").change(function(){
				
				var s = $("#category option:selected").attr("catid");
				var c = $("#category option:selected").val();
		
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
						url:"be_register1.php",
						data:"s="+s+"&c="+c,
						success:function(display)
						{
							$("#subcategory1").html(display);
						}
					});
				}
			});
			
			
			$("#client_site").click(function(){
				var cite_value = $('#client_site:checked').val()?true:false;
				
				if(cite_value == true)
				{
					$("#distance").show();
					$("#location").hide();
				}
				else
				{
					$("#distance").hide();
				}
			});
			
			$("#atmyplace").click(function(){
				var cite_v = $('#atmyplace:checked').val()?true:false;
				if(cite_v == true)
				{
					$("#location").show();
					$("#distance").hide();
				}
				else
				{
					$("#location").hide();
				}
				
			});
			
			$("#price").change(function(){
				var price = $("#price").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price_done").show();
					$("#fixed_price").hide();
					
					$("#min_price").val('');
					$("#max_price").val('');
				}
				
				else if(price == "Charge per hour")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
					$("#fixed_pro").val('');
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
			
			$("#submit").click(function(){
				
				var c = $("#category option:selected").val();
				var d = $("#subcategory option:selected").val();
				var title = $("#title").val();
				var desc = $("#desc").val();
				var service_day = $("#service_day").val();
				var service_day1 = $("#service_day1").val();
				var service_day2 = $("#service_day2").val();
				
				
				var cite_value = $("#client_site:checked").val();
				var atmyplace = $("#atmyplace:checked").val();
				var online = $("#online:checked").val();
				
				var offer_service = cite_value+"/"+atmyplace+"/"+online;
				
				var distance = $("#distance1").val();
				var price = $("#price").val();
				var fixed_pro = $("#fixed_pro").val();
				var min_price = $("#min_price").val();
				var max_price = $("#max_price").val();
				var experience = $("#experience").val();
				var zip = $("#zip1").val();
				var notif = $(".notif:checked").val();
			

				 var ajaz = "c="+c+"&d="+d+"&title="+title+"&desc="+desc+"&service_day="+service_day+"&service_day1="+service_day1+"&offer_service="+offer_service+"&distance="+distance+"&price="+price+"&fixed_pro="+fixed_pro+"&min_price="+min_price+"&max_price="+max_price+"&experience="+experience+"&zip="+zip+"&service_day2="+service_day2+"&notif="+notif;
				
				
				if(c=="")
				{
					alert("Plese select category..")
				}
				else
				{
					if(d=="")
					{
						alert("Please select subcategory...")
					}
					else
					{
						if(service_day!="" && (service_day1=="" && service_day2==""))
						{
							if(title=="" || desc=="")
							{
								alert("Fill all fields...")
							}
							else
							{
								$.ajax
								({
									type:"POST",
									url:"be_category_buyer.php",
									data:ajaz,
									success:function(display)
									{
										alert("Your requirement has been posted.")
										window.location="lead_seller.php";
										var title = $("#title").val('');
										var desc = $("#desc").val('');
						
									}
								});
							}
						}
						else if(service_day=="" && (service_day1!="" && service_day2!=""))
						{
							if(title=="" || desc=="")
							{
								alert("Fill all fields...")
							}
							else
							{
								$.ajax
								({
									type:"POST",
									url:"be_category_buyer.php",
									data:ajaz,
									success:function(display)
									{
										alert("Your requirement has been posted.")
											
											window.location="lead_seller.php";
											
											var title = $("#title").val('');
											var desc = $("#desc").val('');
										
										
									}
								});
							}
						}
						else
						{
							alert("You can either select days of the week or specific dates when you need the service")	
						}
					}
					
				}
				
				// console.log(ajaz)
				
				
				
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
		
		$("#zip1").keyup(function(){
		
			var zip = $("#zip1").val();
			$.ajax
			({
				type:"POST",
				url:"be_zip.php",
				data:"zip="+zip,
				success:function(s)
				{
					$("#search_result").html(s).show();
				}
			});
			
		})
	</script>
	
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
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
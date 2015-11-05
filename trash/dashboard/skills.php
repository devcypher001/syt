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
   <title>Sell Your Time | Form Stuff - Form Wizard</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/css/metro.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
   <link href="assets/css/style_responsive.css" rel="stylesheet" />
   <link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
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
            <li class="has-sub active">
               <a href="javascript:;">
               <i class="icon-user"></i> 
               <span class="title">My Profile</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="profile.php">View Profile</a></li>
                  <li class="active"><a href="skills.php">Add Category</a></li>
                  
               </ul>
            </li>          
            <li class="">
               <a href="leads.php">
               <i class="icon-table"></i> 
               <span class="title">My Leads</span>
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
            
          
			<li class="">
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
					<span class="title">Social Link</span>
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
                  <h3 class="page-title">
                     ADD SKILLS
                     <small>User Profile</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Profile</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Add Category</a>
                        </li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i> Add Category
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="#" class="form-horizontal">
                              <div class="form-group">
                                <label for="sel1">Select Category for your profession?</label>
                                <small>Select a category under which you would like to offer your services?If the category is not listed select 'Other'.</small><br>
                                <select class="form-control" id="category" style="width: 34%;">
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
                              <br>
                              <div class="form-group" id="subcategory" style="display:none;">
                                <label for="sel1">The Specific service you would like to sell?</label>
                                <small>Select a specific sub category. If you would like to sell your time for more than 1 service, you can add it to your profile anytime in future.</small><br>
                                <select class="form-control"  id="subcategory1" style="width: 34%;">
                                 		
                                </select>
                              </div>
							  <br>
							  <div class="form-group col-sm-10 col-sm-offset-1" style="display:none;" id="other_category">
										<label for="exampleInputEmail1" style="color:#000084;">Others</label>
                                        <input type="text" class="form-control" id="other" placeholder="Other Category...">
									</div>
							  
							  <div class="form-group">
                                <label for="sel1">How much experience do you have to provide this service (in years)?</label>
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
                                <label for="sel1">Describe your experience in detail:</label>
								<textarea class="form-control" placeholder="Example: I am a business consultant in the area of foreign trade and company setup. I am an MBA graduated from xyz college and completed my engineering from xyz college.I have 10 years of experience helping small and medium business owners set up a company and get all related licenses.I am associated with trade bodies like xyz.We provide end to end consulting and charge most competitive rates." rows="7" style="height: 162px; width: 603px;" id="detail_experience" maxlength="300"></textarea>	
                              </div>
                              <br/>
							  <div class="form-group">
                                            <label style="color:#000084;">Upload a file with brief description of your service or work profile</label>
											<P style="font-size:13px;">We recommend uploading a word or pdf file with details of your experience,education, examples of your work and contact details.<span style="font-size:11px;">(You can select multiple files upto of maximum size of 3MB including all files.)</span></P>
											<div class="col-sm-6">
												
												<iframe src="form.php" scrolling="no" width="250" height="40" frameborder="0" id="upload_frame"></iframe>
											
											</div>
											
                                          </div>
							  <br>
                              <div class="form-group">
                                <label for="sel1">Where would you like to offer your services?</label>
                                
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="margin-top: 3%;" id="client_site" value="I will travel to Client Site"> I will travel to client site</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="margin-top: 6%;" id="atmyplace" value="At My Place"> At my place</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" value="Online" style="margin-top:10%;" id="online"> Online</label>
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
                                            <label style="color:#000084;">How do you wish to charge your service?</label>
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
                                            <label style="color:#000084;">Enter minimum price</label>
											
                                            <input type="text" class="form-control" id="min_price" placeholder="INR"><span>
                                          </div>
										</div>
										
										
										<div class="col-sm-5" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter maximum price</label>
											
                                            <input type="text" class="form-control" id="max_price" placeholder="INR">
                                          </div>
										</div>
										</div>
										
										<br>
										
										<div class="col-sm-6 col-sm-offset-1" id="fixed_price_done" style="display:none;">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter fixed price</label>
											
                                            <input type="text" class="form-control" id="fixed_pro" placeholder="INR"><span>
                                          </div>
										</div>
								
                              <br>
                              <div class="form-group">
                                <label for="sel1">When can you offer the service?</label>
                                 <select name="country" class="form-control" id="service_day"  style="width: 34%;">
                                                
                                               
                                                <option value=""></option>
                                                <option value="Monday-Friday">Monday - Friday</option>
                                                <option value="Monday-Saturday">Monday - Saturday</option>
												<option value="On Weekends">On Weekends</option>
                                                <option value="All 7 Days">All 7 Days</option>
                                                
                                 </select>
                              </div>
							
							                               
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
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2014 &copy; Sell your Time by Appslure Websolution.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="assets/js/jquery-1.8.3.min.js"></script>    
   <script src="assets/breakpoints/breakpoints.js"></script>       
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="assets/js/jquery.blockui.js"></script>
   <script src="assets/js/jquery.cookie.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="assets/js/excanvas.js"></script>
   <script src="assets/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="assets/js/app.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <script>
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
						url:"be_register.php",
						data:"s="+s+"&c="+c,
						success:function(display)
						{
							$("#subcategory1").html(display);
						}
					});
				}
			});
			$("#subcategory").change(function(){
				
				var c = $("#subcategory option:selected").val();
				
				$.ajax
					({
						type:"POST",
						url:"be_subcategory.php",
						data:"&c="+c,
						success:function(display)
						{
							
							if(display == 1)
							{
								alert("You have already added this category.")
							}
							else if(display == 0)
							{
								alert("You are not allowed to add more than 3 category.")
							}
						}
					});
		
			});
			
			$("#client_site").click(function(){
				var cite_value = $('#client_site:checked').val()?true:false;
				
				if(cite_value == true)
				{
					$("#distance").show();
				}
				else
				{
					$("#distance").hide();
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
			
			$("#submit").click(function(){
				
				var c = $("#category option:selected").val();
				var d = $("#subcategory option:selected").val();
				var detail_experience = $("#detail_experience").val();
				var experience = $("#experience").val();
				
				var cite_value = $("#client_site:checked").val();
				var atmyplace = $("#atmyplace:checked").val();
				var online = $("#online:checked").val();
				var distance = $("#distance1").val();
				var fixed_price = $("#fixed_pro").val();
				var service_day = $("#service_day").val();
				var min_price = $("#min_price").val();
				var max_price = $("#max_price").val();
				var price = $("#price").val();
				
				var date1 = "c="+c+"&d="+d+"&detail_experience="+detail_experience+"&experience="+experience+"&cite_value="+cite_value+"&atmyplace="+atmyplace+"&online="+online+"&distance="+distance+"&fixed_price="+fixed_price+"&service_day="+service_day+"&min_price="+min_price+"&max_price="+max_price+"&price="+price;
			
				
				if(c=="" || d=="" || detail_experience=="" )
				{
					alert("Please fill fields")
				}
				else{
					$.ajax
					({
						type:"POST",
						url:"be_category_validate.php",
						data:date1,
						success:function(display)
						{
							
							if(display == 5)
							{
								alert("You already added.")
							}
							else if(display == 1)
							{
								alert("You have successfully added new category.")
							}
							else if(display == 6)
							{
								alert("SYT allowes you to register and sell your services in 3 categories.")
							}
						}
					});
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
	</script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59441940-1', 'auto');
  ga('send', 'pageview');

</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>

<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
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
					<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a href="#">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered. 
								<span class="time">Just now</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Server #12 overloaded. 
								<span class="time">15 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-warning"><i class="icon-bell"></i></span>
								Server #2 not respoding.
								<span class="time">22 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								Application error.
								<span class="time">40 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Database overloaded 68%. 
								<span class="time">2 hrs</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								2 user IP blocked.
								<span class="time">5 hrs</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope-alt"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 12 new messages</p>
							</li>
							<li>
								<a href="#">
								<span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Lisa Wong</span>
								<span class="time">Just Now</span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="#">
								<span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Richard Doe</span>
								<span class="time">16 mins</span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="#">
								<span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Bob Nilson</span>
								<span class="time">2 hrs</span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li class="external">
								<a href="#">See all messages <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="assets/img/avatar1_small.jpg" />
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
							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
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
					<span class="title">Post Job</span>
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
							Buy Services	&nbsp;		<small>post your requirement</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Buy Services</a>
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
													<div id="tab_1-1" class="tab-pane active">
														<div style="height: auto;" id="accordion1-1" class="accordion collapse">
															
																<label class="control-label">What service do you need?</label>
																<select name="country" class="form-control" id="category" style="width:65%;">
																	<option disabled="" selected="" value="">- Select Category for your profession? -</option>
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
																<label class="control-label">select a specific sub category.If you would like to sell your time</label>
																<select name="country" class="form-control"  id="subcategory1" style="width:65%;">
													
																</select>
																
																<label class="control-label"><b>Job Title.</b><br>Give title to your requirement<br>
																<i>For eg: (Guitar trainer required in greater kailash, delhi)</i>
																</label>
																<input type="text" class="m-wrap span8" id="title"/>
																
																<label class="control-label"><b>Specific details to your requirement</b></label>
																<textarea class="span8 m-wrap" rows="3" id="desc" placeholder="I want a guitar trainer to teach me a acoustic guitar on saturday and sunday. I am a beginner and 18 year of age."></textarea>
																<label class="control-label">When do you need this service?</label>
																<select name="country" class="form-control" id="service_day">
                                                
                                               
                                                <option value=""></option>
                                                <option value="Monday-Friday">Monday - Friday</option>
                                                <option value="Monday-Saturday">Monday - Saturday</option>
												<option value="">On Weekends</option>
                                                <option value="All 7 Days">All 7 Days</option>
                                                
                                            </select>
																
																<label class="control-label">Experience Required (in years).</label>
																<select name="country" class="form-control"  id="experience" style="width:65%;">
																	<option value="">Select experience</option>
																	<option value="0-2">0-2</option>
																	<option value="2-4">2-4</option>
																	<option value="4-6">4-6</option>
																	<option value="6-8">6-8</option>
																	<option value="8-10">8-10</option>
																	<option value="10-12">10-12</option>
																	<option value="12-14">12-14</option>
																	<option value="14-16">14-16</option>
																	<option value="16-18">16-18</option>
																	<option value="19-20">19-20</option>
																	<option value="20">20+</option>
																</select>
																
																<label class="control-label">How much are you pay for the service?</label>
																<input type="text" placeholder="Rs" class="m-wrap span8" id="price"/>
																
																<label class="control-label">Area where you want the service-pin code.</label>
																<input type="text" placeholder="eg 110085" class="m-wrap span8" id="zip"/>
																
																<label class="control-label">I will travel to service provider.</label>
																<select name="country" class="form-control" id="service_day">
                                                
                                               
                                               <option value=""></option>
                                                <option value="Client Site">I will travel to Client Site</option>
                                                <option value="My Place">At My Place</option>
                                                <option value="Online">Online</option>
                                                
                                            </select>
																
																
																<div class="submit-btn">
																	<a href="#" class="btn green" id="submit">Post my requirement</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
																<div class="row" style="margin-top:2%;"></div>
																<div class="control-label" style="font-size:18px;" id="result_show">Result show</div>
																
														</div>
													</div>
													<div id="tab_2-2" class="tab-pane">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
																<br />
																<div class="controls">
																	<div class="thumbnail" style="width: 291px; height: 170px;">
																		<img src="http://www.placehold.it/291x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
																	</div>
																</div>
																<div class="space10"></div>
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<div class="input-append">
																		<div class="uneditable-input">
																			<i class="icon-file fileupload-exists"></i> 
																			<span class="fileupload-preview"></span>
																		</div>
																		<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" class="default" />
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	<span class="label label-important">NOTE!</span>
																	<span>You can write some information here..</span>
																</div>
																<div class="space10"></div>
																<div class="submit-btn">
																	<a href="#" class="btn green">Submit</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
													<div id="tab_3-3" class="tab-pane">
														<div style="height: auto;" id="accordion3-3" class="accordion collapse">
															<form action="#">
																<label class="control-label">Current Password</label>
																<input type="password" class="m-wrap span8" />
																<label class="control-label">New Password</label>
																<input type="password" class="m-wrap span8" />
																<label class="control-label">Re-type New Password</label>
																<input type="password" class="m-wrap span8" />
																<div class="submit-btn">
																	<a href="#" class="btn green">Change Password</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
													<div id="tab_4-4" class="tab-pane">
														<div style="height: auto;" id="accordion4-4" class="accordion collapse">
															<form action="#">
																<div class="profile-settings row-fluid">
																	<div class="span9">
																		<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..</p>
																	</div>
																	<div class="control-group span3">
																		<div class="controls">
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option1" />
																			Yes
																			</label>
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option2" checked />
																			No
																			</label>  
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<div class="profile-settings row-fluid">
																	<div class="span9">
																		<p>Enim eiusmod high life accusamus terry richardson ad squid wolf moon</p>
																	</div>
																	<div class="control-group span3">
																		<div class="controls">
																			<label class="checkbox">
																			<input type="checkbox" value="" /> All
																			</label>
																			<label class="checkbox">
																			<input type="checkbox" value="" /> Friends
																			</label>
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<div class="profile-settings row-fluid">
																	<div class="span9">
																		<p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson</p>
																	</div>
																	<div class="control-group span3">
																		<div class="controls">
																			<label class="checkbox">
																			<input type="checkbox" value="" /> Yes
																			</label>
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<div class="profile-settings row-fluid">
																	<div class="span9">
																		<p>Cliche reprehenderit enim eiusmod high life accusamus terry</p>
																	</div>
																	<div class="control-group span3">
																		<div class="controls">
																			<label class="checkbox">
																			<input type="checkbox" value="" /> Yes
																			</label>
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<div class="profile-settings row-fluid">
																	<div class="span9">
																		<p>Oiusmod high life accusamus terry richardson ad squid wolf fwopo</p>
																	</div>
																	<div class="control-group span3">
																		<div class="controls">
																			<label class="checkbox">
																			<input type="checkbox" value="" /> Yes
																			</label>
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<div class="space5"></div>
																<div class="submit-btn">
																	<a href="#" class="btn green">Save Changes</a>
																	<a href="#" class="btn">Cancel</a>
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
			
			$("#submit").click(function(){
				var category = $("#category").val();
				var subcategory = $("#subcategory1").val();
				var desc = $("#desc").val();
				var delivery = $("#delivery").val();
				var price = $("#price").val();
				var zip = $("#zip").val();
				var travel = $("#travel:checked").val();
				var title = $("#title").val();
				var experience = $("#experience").val();
				
				var ajx = "category="+category+"&subcategory="+subcategory+"&desc="+desc+"&delivery="+delivery+"&price="+price+"&zip="+zip+"&travel="+travel+"&title="+title+"&experience="+experience;
				
				if(category=="" || subcategory=="" || desc=="" || delivery=="" || price=="")
				{
					$("#result_show").html("<font color='red'>Fill all fields</font>")
				}
				else
				{
					$.ajax
					({
						type:"POST",
						url:"be_postjob.php",
						data:ajx,
						success:function(display)
						{
							if(display == 1)
							{
								$("#result_show").html("<font color='green'>Successfully Posted...</font>");
							}
							else
							{
								$("#result_show").html("Internal error");
							}
						}
					});
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

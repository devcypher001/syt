<?php
include 'connect.php';
session_start();
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
	<title>Sell Your Time |User Profile</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	.aln
	{
		margin-left:42px;
	}
	.aln1
	{
		margin-left:46px;
	}
	.aln2
	{
		margin-left:16px;
	}
	.aln3
	{
		margin-left:19px;
	}
	.aln4
	{
		margin-left:31px;
	}
	.aln5
	{
		margin-left: 2px;
	}
	.aln6
	{
		margin-left: 2px;
	}
	</style>
	
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
					<!-- BEGIN INBOX DROPDOWN -->
					<?php include 'leads_notif.php';?>

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
						<?php
							$user_userid = $_SESSION['syt_id'];
							$qrt = mysql_query("SELECT `title` FROM `syt_registration` WHERE `id` = '$user_userid'");
							$fetch_qrt = mysql_fetch_array($qrt);
							
							if($fetch_qrt['title'] == "Seller")
							{
						?>
							<li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
							
						<?php
							}
							else
							{
						?>
							<li><a href="profile_buyer.php"><i class="icon-user"></i> My Profile</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
						<?php
							}
							
						?>
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
					<a href="index1.php">
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
						<li class="active"><a href="profile_buyer.php">View Profile</a></li>
						<!--<li ><a href="skills.php">Add Category</a></li>-->
						
					</ul>
				</li>				
				<li class="">
					<a href="mypost.php">
					<i class="icon-table"></i> 
					<span class="title">My Posts</span>
					</a>
				</li>
				<li class="">
					<a href="service_provider.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Service Providers</span>
					</a>
				</li>
				
				<li class="">
					<a href="#">
					<i class="icon-briefcase"></i> 
					<span class="title">Reviews & Score</span>
					</a>
				</li>
				
				
				<li class="">
					<a href="invite_share1.php">
					<i class="icon-briefcase"></i> 
					<span class="title">Share & Invite</span>
					</a>
				</li>
				
				<li class="">
					<a href="social.php1">
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
							<?php echo $_SESSION['syt_name'];?>		<small>user profile </small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="#">Profile</a> 
								<i class="icon-angle-right"></i>
							</li>
							
							<li><a href="#">View Profile</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid profile">
					<div class="span12">
						<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom">
							<ul class="nav nav-tabs">
								<li><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
								<li ><a href="#tab_1_2" data-toggle="tab">Profile Info</a></li>
								<!--<li ><a href="#tab_1_4" data-toggle="tab">Manage Categories</a></li>-->
								<li><a href="#tab_1_3" data-toggle="tab">Account Settings</a></li>
								
							</ul>
							<div class="tab-content">
								<div class="tab-pane row-fluid active" id="tab_1_1">
									<ul class="unstyled profile-nav span3">
										<li>
											<?php
											if(empty($fet_arr['image']))
											{
											?>
												<img src="assets/img/profile/profile-img.png" />
											<?php
												
											}
											else
											{
												echo "<img src='images/".$fet_arr['image']."' />";
											
											}
										?>
										</li>
										<!-- <li><a href="#">Projects</a></li>-->
										<li><a href="message1.php">Messages <span>3</span></a></li>
										<!--<li><a href="#">Settings</a></li>-->
									</ul>
									
									<div class="span9">
										<div class="row-fluid">
											<div class="span8 profile-info">
												<h1><?php echo $_SESSION['syt_name']; ?></h1>
												<p>
												<?php
													echo $fet_arr['experience_details'];
												?>
												</p>
												
												
												<ul class="unstyled inline">
													<li><i class="icon-map-marker"></i> <?php echo $fet_arr['country']; ?></li>
													<li><i class="icon-calendar"></i><?php echo $fet_arr['dob']; ?></li>
													<li><i class="icon-home"></i> <?php echo $fet_arr['address']; ?></li>
												</ul>
											</div>
											<!--end span8-->
											
											<!--end span4-->
										</div>
										<!--end row-fluid-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<!--<li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Leads</a></li>-->
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body" style="display: block;">
														<table class="table table-striped table-bordered table-advance table-hover">
															<thead>
																<tr>
																	<th><i class="icon-briefcase"></i> Name</th>
																	<th class="hidden-phone"><i class="icon-question-sign"></i> Subcategory</th>
																	<th><i class="icon-bookmark"></i> View</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																
																<?php
																$uu_subcategory = $fet_arr['subcategory'];
																$uu_category = $fet_arr['category'];
															
																$qwr1 = mysql_query("SELECT * FROM `syt_registration` WHERE `title`='Seller'");
																
																if(mysql_num_rows($qwr1) == 0)
																{
																	echo "No external lead";
																}
																else
																{
																	while($rwr1 = mysql_fetch_assoc($qwr1))
																	{
																?>
																
																<tr>
																	<td><?php echo $rwr1['firstname']." ".$rwr1['lastname'];?></td>
																	
																	<td><?php echo $rwr1['subcategory']; ?></td>
																	<td><a class="btn mini green-stripe" href="../categories/profile.php?id=<?php echo $rwr1['id']; ?>">View</a></td>
																</tr>
																<?php
																		
																	}
																}
															
																?>
															</tbody>
														</table>
													</div>
												</div>
												<!--tab-pane-->
												<div class="tab-pane" id="tab_1_22">
													<div class="tab-pane active" id="tab_1_1_1">
														<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
															<ul class="feeds">
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">								
																					<i class="icon-bell"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					You have 4 pending tasks.
																					<span class="label label-important label-mini">
																					Take action 
																					<i class="icon-share-alt"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			Just now
																		</div>
																	</div>
																</li>
																<li>
																	<a href="#">
																		<div class="col1">
																			<div class="cont">
																				<div class="cont-col1">
																					<div class="label label-success">								
																						<i class="icon-bell"></i>
																					</div>
																				</div>
																				<div class="cont-col2">
																					<div class="desc">
																						New version v1.4 just lunched!	
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col2">
																			<div class="date">
																				20 mins
																			</div>
																		</div>
																	</a>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-important">								
																					<i class="icon-bolt"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					Database server #12 overloaded. Please fix the issue.								
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			24 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			30 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			40 mins
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-warning">								
																					<i class="icon-plus"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New user registered.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			1.5 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">								
																					<i class="icon-bell-alt"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					Web server hardware needs to be upgraded.	
																					<span class="label label-inverse label-mini">Overdue</span>					
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			2 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			3 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-warning">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			5 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			18 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			22 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			21 hours
																		</div>
																	</div>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-info">								
																					<i class="icon-bullhorn"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					New order received. Please take care of it.						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			22 hours
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<!--tab-pane-->
											</div>
										</div>
									</div>
									<!--end span9-->
								</div>
								<!--end tab-pane-->
								<div class="tab-pane profile-classic row-fluid" id="tab_1_2">
									<div class="col-sm-offset-3">
										
										Below is the information provided at the time of sign up.</br>You can edit and press or click anywhere to save changes.
									</div>
									<ul class="unstyled span10">
									<?php
										$userid = $_SESSION['syt_id'];
										
										$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");
										
										$fet_arr = mysql_fetch_array($fet);
										
									?>
										<li><span>First Name:</span> <input id="fn" type="text" value="<?php echo $fet_arr['firstname'];?>"></li>
										<li><span>Last Name:</span> <input id="ln" type="text" value="<?php echo $fet_arr['lastname'];?>"></li>
										<li><span>City:</span> <span class="aln"><input type="text" id="city"  value="<?php echo $fet_arr['city'];?>"></span></li>
										<li><span>Zip:</span> <span class="aln1"><input type="text" id="zip" value="<?php echo $fet_arr['zip'];?>"></span>
										<div id="search_down1" style="border:1px solid black;border: 1px solid black;width: 24%;margin-left: 9%;padding: 3px;display:none;cursor:pointer;">dfsa</div>
										</li>
										<li><span>Address:</span> <span class="aln2"><input type="text" id="Address" value="<?php echo $fet_arr['address'];?>"></span></li>
										
										<li><span>Birthday:</span> <span class="aln3"><input id="dob" type="date" value="<?php echo $fet_arr['dob'];?>"></li>
										<li><span>Phone:</span> <span class="aln4"><input type="text" id="phone" value="<?php echo $fet_arr['phone'];?>"></li>
										
										
										
									</ul>
									
								</div>
								<!--tab_1_2-->
								<div class="tab-pane row-fluid profile-account" id="tab_1_3">
									<div class="row-fluid">
										<div class="span12">
											<div class="span3">
												<ul class="ver-inline-menu tabbable margin-bottom-10">
													<!--<li class="active">
														<a data-toggle="tab" href="#tab_1-1">
														<i class="icon-cog"></i> 
														Personal info
														</a> 
														<span class="after"></span>                           			
													</li>-->
													<!--<li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Photo</a></li>-->
													<li class="active"><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
													<li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacy Settings</a></li>
													<li class=""><a data-toggle="tab" href="#tab_5-5"><i class="icon-eye-open"></i> Deactivate Your Account</a></li>
												</ul>
											</div>
											<div class="span9">
												<div class="tab-content">
													<!--<div id="tab_1-1" class="tab-pane active">
														<!--<div style="height: auto;" id="accordion1-1" class="accordion collapse">
															<form action="#">
																<label class="control-label">First Name</label>
																<input type="text" placeholder="Akshat" class="m-wrap span8" id="name11"/>
																<label class="control-label">Last Name</label>
																<input type="text" placeholder="Rana" class="m-wrap span8"  id="last11"/>
																<label class="control-label">Mobile Number</label>
																<input type="text" placeholder="+1 646 580 DEMO (6284)" class="m-wrap span8"  id="mobile11" maxlength="10"/>
																
																
																<label class="control-label">Experience</label>
																<textarea class="span8 m-wrap" rows="3" id="experience11"></textarea>
																
																<div class="submit-btn">
																	<div class="btn green" id="profile_submit">Save Changes</div>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
														
													</div>-->
													<!--<div id="tab_2-2" class="tab-pane active">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																<p style="font-size:19px;">Upload a Selfie (a photo one has taken of oneself)<br>We recommend uploading a clear and professional photo.This will add authenticity to your profile and increase chances of getting contacted and hired.</p>
																<br />
																<div class="controls">
																	<div class="thumbnail" style="width: 1px; height: 0px;">
																		
																	</div>
																</div>
																<div class="space10"></div>
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<div class="input-append">
																		<iframe src="upload_index.php" width="600" height="300" scrolling="no" frameborder="0"></iframe>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	<span class="label label-important">NOTE!</span>
																	<span>You can write some information here..</span>
																</div>
																<div class="space10"></div>
																<div class="submit-btn">
																	
																</div>
															</form>
														</div>
													</div>-->
													
													<div id="tab_12-12" class="tab-pane">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																<p style="font-size:19px;">Upload Banner.</p>
																
																<div class="controls">
																	<div class="thumbnail" style="width: 1px; height: 0px;">
																		
																	</div>
																</div>
																<div class="space10"></div>
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<div class="input-append">
																		<iframe src="upload_banner.php" width="600" height="300" scrolling="no" frameborder="0"></iframe>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	<span class="label label-important">NOTE!</span>
																	<span>You can write some information here..</span>
																</div>
																<div class="space10"></div>
																<div class="submit-btn">
																	
																</div>
															</form>
														</div>
													</div>
													
													<div id="tab_3-3" class="tab-pane active">
														<div style="height: auto;" id="accordion3-3" class="accordion collapse">
															<form action="#">
																<label class="control-label">Current Password</label>
																<input type="password" class="m-wrap span8" id="cpass"/>
																<label class="control-label">New Password</label>
																<input type="password" class="m-wrap span8" id="npass"/>&nbsp;&nbsp;&nbsp;<span class="r_npass"></span>
																<label class="control-label">Re-type New Password</label>
																<input type="password" class="m-wrap span8" id="npass1"/>&nbsp;&nbsp;&nbsp;<span class="r_npass1"></span>
																<div class="submit-btn">
																	<div class="btn green" id="change_password">Change Password</div>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
													<div id="tab_4-4" class="tab-pane">
														<div style="height: auto;" id="accordion4-4" class="accordion collapse">
															<form action="#">
																<div class="profile-settings row-fluid">
																	<div class="span7">
																		<p>How do you wish to be notified by a buyer for your services?</p>
																		
																	</div>
																	<div class="control-group span5">
																		<div class="controls">
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option1" />
																			On my mobile
																			</label>
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option2" checked />
																			E-mail
																			</label>
																			
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option2" checked />
																			Both
																			</label>  
																		</div>
																	</div>
																</div>
																
																
																<div class="profile-settings row-fluid">
																	<div class="span7">
																		<p>When a buyer for your service tries to contact you,would you like to share your phone number and email id or only email?</p>
																		<p style="font-weight:bold;">*We suggest sharing both as it provides both chances of getting hired.</p>
																	</div>
																	<div class="control-group span5">
																		<div class="controls">
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option1" />
																			Phone number and E-mail ID.
																			</label>
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="option2" checked />
																			Only E-mail ID.
																			</label>
																			
																		</div>
																	</div>
																</div>
																<!--end profile-settings-->
																<!--end profile-settings-->
																
																<!--end profile-settings-->
																
																<!--end profile-settings-->
																
																<!--end profile-settings-->
																<div class="space5"></div>
																<div class="submit-btn">
																	<div class="btn green" id="privacy_button">Save Changes</div>
																	
																</div>
															</form>
														</div>
													</div>
													
													
													<div id="tab_5-5" class="tab-pane">
														<div style="height: auto;" id="accordion4-4" class="accordion collapse">
														
														
																<label class="control-label">Current Password</label>
																<input type="password" id="deact" class="m-wrap span8"/>
																
																<div class="submit-btn">
																	<div class="btn green" id="check_deact">Submit</div>
																	<a href="#" class="btn">Cancel</a>
																</div>
														
															<br>
															<br>
															<p id="deactivate" style="cursor:pointer;text-decoration:underline;display:none;font-size:22px;">Click to Deactivate </p>
														</div>
													</div>
													
													
												</div>
											</div>
											<!--end span9-->                                   
										</div>
									</div>
								</div>
								<!--end tab-pane-->
								
								<!--end tab-pane-->
								<div class="tab-pane row-fluid" id="tab_1_6">
									<div class="row-fluid">
										<div class="span12">
											<div class="span3">
												<ul class="ver-inline-menu tabbable margin-bottom-10">
													<li class="active">
														<a data-toggle="tab" href="#tab_1">
														<i class="icon-briefcase"></i> 
														General Questions
														</a> 
														<span class="after"></span>                           			
													</li>
													<li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>
													<li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>
													<li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>
													<li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>
													<li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>
												</ul>
											</div>
											<div class="span9">
												<div class="tab-content">
													<div id="tab_1" class="tab-pane active">
														<div style="height: auto;" id="accordion1" class="accordion collapse">
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																	</a>
																</div>
																<div class="accordion-body collapse in" id="collapse_1">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	Pariatur cliche reprehenderit enim eiusmod highr brunch ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	Food truck quinoa nesciunt laborum eiusmod nim eiusmod high life accusamus  ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	High life accusamus terry richardson ad ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_4">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_5" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_5">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_6" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
																	Wolf moon officia aute non cupidatat skateboard dolor brunch ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_6">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id="tab_2" class="tab-pane">
														<div style="height: auto;" id="accordion2" class="accordion collapse">
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Cliche reprehenderit, enim eiusmod high life accusamus enim eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse in" id="collapse_2_1">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Pariatur cliche reprehenderit enim eiusmod high life non cupidatat skateboard dolor brunch ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_2">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Food truck quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_3">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	High life accusamus terry richardson ad squid enim eiusmod high ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_4">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_5">
																	<div class="accordion-inner">
																		<p>
																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																		</p>
																		<p> 
																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
																		</p>
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Wolf moon officia aute non cupidatat skateboard dolor brunch ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_6">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_2_7">
																	<div class="accordion-inner">
																		<p>
																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																		</p>
																		<p> 
																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id="tab_3" class="tab-pane">
														<div style="height: auto;" id="accordion3" class="accordion collapse">
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_1" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Cliche reprehenderit, enim eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse in" id="collapse_3_1">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_2" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Pariatur skateboard dolor brunch ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_2">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_3" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Food truck quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_3">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_4" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	High life accusamus terry richardson ad squid enim eiusmod high ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_4">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_5" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high  eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_5">
																	<div class="accordion-inner">
																		<p>
																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																		</p>
																		<p> 
																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
																		</p>
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_6" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_6">
																	<div class="accordion-inner">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_7" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high life accusamus aborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_7">
																	<div class="accordion-inner">
																		<p>
																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																		</p>
																		<p> 
																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
																		</p>
																	</div>
																</div>
															</div>
															<div class="accordion-group">
																<div class="accordion-heading">
																	<a href="#collapse_3_8" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
																	</a>
																</div>
																<div class="accordion-body collapse" id="collapse_3_8">
																	<div class="accordion-inner">
																		<p>
																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
																		</p>
																		<p> 
																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end span9-->                                   
										</div>
									</div>
								</div>
								<!--end tab-pane-->
							</div>
						</div>
						<!--END TABS-->
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
	<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>	
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/chosen-bootstrap/rfill.js"></script>
	<script type="text/javascript" src="assets/preference.js"></script>
	<script type="text/javascript" src="assets/update.js"></script>
	<script type="text/javascript" src="assets/password.js"></script>
	<script src="zip.js"></script>
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
							//alert(display)
							$("#subcategory1").html(display);
						}
					});
				}
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
			
			$("#privacy_button").click(function(){
				
				alert("Successfully saved..")
			});
			
			$("#npass").keyup(function(e){
				
				var npass = $("#npass").val().length;
				var n = $("#npass").val();
				
				if(n!="")
				{
					if(npass <= 5)
					{
						$(".r_npass").html("<font color='red'>Weak password</font>");
					}
					else if(npass >=6 && npass <=10)
					{
						$(".r_npass").html("<font color='orange'>Good password.</font>");
					}
					else if(npass >= 13)
					{
						$(".r_npass").html("<font color='green'>Excellent password</font>");
					}
				}
				
			});
			
			$("#deactivate").click(function(){
				var ty = confirm("Are you sure to Deactivate your account ?");
				if(ty == true)
				{
					$.ajax
					({
						type:"POST",
						url:"be_deactivate.php",
						success:function(d)
						{
							if(d == 1)
							{
								alert("Deactivated successfully.")
							}
							else{
								alert("Internal error")
							}
						}
					});
				}
			});
			
			$("#check_deact").click(function(){
				var pass = $("#deact").val();
				
				if(pass == "")
				{
					alert("Fill password")
				}
				else
				{
					$.ajax
					({
						type:"POST",
						url:"be_deactivate_password_check.php",
						data:"pass="+pass,
						success:function(kk)
						{
							if(kk == 1)
							{
								var ty = confirm("Are you sure to Deactivate your account ?");
								
								if(ty == true)
								{
									$.ajax
									({
										type:"POST",
										url:"be_deactivate.php",
										success:function(d)
										{
											if(d == 1)
											{
												alert("Your account have been deactivated successfully.");
												
												window.location="logout.php";
											}
											else{
												alert("Internal error")
											}
										}
									});
								}
							}
							else
							{
								alert("Invalid Password.Please try again.")
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
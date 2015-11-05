<?php
include 'connect.php';
session_start();
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
		margin-left:53px;
	}
	.aln2
	{
		margin-left:18px;
	}
	.aln3
	{
		margin-left:26px;
	}
	.aln4
	{
		margin-left:38px;
	}
	.aln5
	{
		margin-left: 2px;
	}
	.aln6
	{
		margin-left: 2px;
	}
	.aln7
	{
		margin-left: 29px;
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
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
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
						<li class="active"><a href="profile.php">View Profile</a></li>
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
							<li class="pull-right"><b>To change profile image and banner , click on Account Setting Tab</b></li>
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
								<li><a href="#tab_1_1" data-toggle="tab">Overview Profile</a></li>
								<li ><a href="#tab_1_2" data-toggle="tab">Profile Information</a></li>
								<li ><a href="#tab_1_4" data-toggle="tab">Manage Categories</a></li>
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
										<li><a href="message.php">Messages </a></li>
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
													<li><i class="icon-briefcase"></i> <?php echo $fet_arr['category']; ?></li>
													<li><i class="icon-star"></i> <?php echo $fet_arr['subcategory']; ?></li>
													<li><i class="icon-home"></i> <?php echo $fet_arr['address']; ?></li>
												</ul>
											</div>
											<!--end span8-->
											<div class="span4">
												<div class="portlet sale-summary">
													<div class="portlet-title">
														<h4>Availabilty</h4>
														<div class="tools">
															<a class="reload" href="javascript:;"></a>
														</div>
													</div>
													<ul class="unstyled">
														<li>
															<span class="sale-info">WEEK  <i class="icon-img-up"></i></span> 
															<span class="sale-num"><?php echo $fet_arr['service_day']; ?></span>
														</li>
														
													</ul>
												</div>
											</div>
											<!--end span4-->
										</div>
										<!--end row-fluid-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Leads</a></li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body" style="display: block;">
														<table class="table table-striped table-bordered table-advance table-hover">
															<thead>
																<tr>
																	<th><i class="icon-bookmark"></i> Title</th>
																	<th><i class="icon-bookmark"></i> Description</th>
																	<th><i class="icon-bookmark"></i> Amount</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																
																<?php
																$uu_subcategory = $fet_arr['subcategory'];
																$uu_category = $fet_arr['category'];
																
																$qwr1 = mysql_query("SELECT * FROM `syt_post` WHERE `subcategory` like '$uu_subcategory%' or `category` like '$uu_category%'  ");
																
																if(mysql_num_rows($qwr1) == 0)
																{
																	echo "No lead";
																}
																else
																{
																	while($rwr1 = mysql_fetch_assoc($qwr1))
																	{
																?>
																
																<tr>
																	<td><a href="../categories/blog-post.php?postid=<?php echo $rwr1['id']; ?>"><?php echo $rwr1['syt_title'];?></a></td>
																	<td>
																	<?php
																		$expr = strlen($rwr1['syt_desc']);
																		
																		if($expr <= 14)
																		{
																			echo $rwr1['syt_desc'];
																		}
																		else
																		{
																			echo substr($rwr1['syt_desc'],0,13)."..."; 
																		}
																	?>
																	</td>
																	<td>Rs. <?php echo $rwr1['price']; ?></td>
																	<td><a class="btn mini green-stripe" href="../categories/blog-post.php?postid=<?php echo $rwr1['id']; ?>">View</a></td>
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
										
										
										
										<label><h4><b>You can edit,update the categories under which you have registered to sell your services.<br>To add any new service category,choose add category from left menu bar.<br>To delete any service category from your profile <a href="delete_category.php">click here</a></b></h4></label>
									</div>
									<ul class="unstyled span10">
									<?php
										$userid = $_SESSION['syt_id'];
										
										$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");
										
										$fet_arr = mysql_fetch_array($fet);
										
									?>
										<li><span>First Name:</span><span class="aln2"><input id="fn" type="text" value="<?php echo $fet_arr['firstname'];?>"></li></span>
										<li><span>Last Name:</span><span class="aln2"><input id="ln" type="text" value="<?php echo $fet_arr['lastname'];?>"></li></span>
										
										<li><span>Zip:</span> <span class="aln1"><input type="text" id="zip" value="<?php echo $fet_arr['zip'];?>"></span>
										<div id="search_down1" style="border:1px solid black;border: 1px solid black;width: 24%;margin-left: 9%;padding: 3px;display:none;cursor:pointer;">dfsa</div>
										</li>
										<li><span>Address:</span> <span class="aln7"><input type="text" id="Address" value="<?php echo $fet_arr['address'];?>"></span></li>
										
										<li><span>Birthday:</span> <span class="aln3"><input id="dob" type="date" value="<?php echo $fet_arr['dob'];?>"></li>
										<li><span>Phone:</span> <span class="aln4"><input type="text" id="phone" value="<?php echo $fet_arr['phone'];?>" maxlength="10"></li>
										<li><div class="btn green" id="submit3">Update</div></li>
										
										
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
													<li class="active"><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Upload Photo</a></li>
													<li class=""><a data-toggle="tab" href="#tab_12-12"><i class="icon-picture"></i> Upload Banner</a></li>
													<li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
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
													<div id="tab_2-2" class="tab-pane active">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																<p style="font-size:19px;"></p>
																
																<label><h4><b>Upload a Selfie (a photo one has taken of oneself)<br>We recommend uploading a clear and professional photo.This will add authenticity to your profile and increase chances of getting contacted and hired.</b></h4></label>
																
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
																
																<div class="space10"></div>
																<div class="submit-btn">
																	
																</div>
															</form>
														</div>
													</div>
													
													<div id="tab_12-12" class="tab-pane">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																
																<label><h4><b>You can edit the banner that suits your work profile or services offer .(for example if you are a painter you could upload your work or art.)<br>Upload Banner(Please upload an image of 780x380 minimum.)</b></h4></label>
																
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
																
																<div class="space10"></div>
																<div class="submit-btn">
																	
																</div>
															</form>
														</div>
													</div>
													<div id="tab_3-3" class="tab-pane">
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
																			<input type="radio" name="optionsRadios1" value="1" />
																			On my mobile
																			</label>
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="2" checked />
																			E-mail
																			</label>
																			
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="3" checked />
																			Both
																			</label>  
																		</div>
																	</div>
																</div>
																
																
																<div class="profile-settings row-fluid">
																	<div class="span7">
																		<p>When a buyer for your service tries to contact you,would you like to share your phone number and email id or only email?</p>
																		<p style="font-weight:bold;">*We suggest sharing both as it increases chances of getting hired.</p>
																	</div>
																	<div class="control-group span5">
																		<div class="controls">
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="1" />
																			Phone number and E-mail ID.
																			</label>
																			<label class="radio">
																			<input type="radio" name="optionsRadios1" value="2" checked />
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
								<div class="tab-pane" id="tab_1_4">
								
								    <div class="portlet-body form">
									<label><h4><b>You can edit,update the categories under which you have registered to sell your services.<br>To add any new service category,choose add category from left menu bar.<br>To delete any service category from your profile <a href="delete_category.php">click here</a></b></h4></label>
                        <form action="#" class="form-horizontal">
                              <div class="form-group">
                                <label for="sel1">Select Category for your profession?</label>
                                <small>Select a category under which you would like to offer your services?If the category is not listed select 'Other'.</small><br>
                                <select class="form-control" id="category">
                                  <option disabled="" selected="" value="">Select Category for your profession</option>
												<?php
												$uid1 = $_SESSION['syt_id'];
													$query = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id`='$uid1'");
													while($r = mysql_fetch_assoc($query))
													{
												?>
														 <option value="<?php echo $r['subcategory']."/nd";?>" checkid="nd" catid=<?php echo $r['id'];?>><?php echo $r['subcategory'];?></option>
												<?php
													}
												?>
														<option value="<?php echo $fet_arr['subcategory']."/or";?>" catid=<?php echo $fet_arr['id'];?> checkid="or"><?php echo $fet_arr['subcategory'];?></option>
												<?php
												?>
                                              
                                </select>
                              </div>
                             
                              <br/>
							  
							  <div id="checklist">
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
												
												<input type="file">
												
											</iframe>
											
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
                                            <label style="color:#000084;">How do you wish to charge for your service?</label>
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
                              <!--<div class="form-group">
                              <div class="submit-btn">
                                         <div  class="btn green" id="submit_update">Update</div>
                                       <a href="#" class="btn">Cancel</a>
                               </div>
                               </div>-->
							   
							   </div>
                        </form>
                     </div>
									<!--end row-fluid-->
								</div>
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
				
				var check = $('input:radio[name=optionsRadios1]:checked').val();
				$.ajax
				({
					type:"POST",
					url:"be_privacy.php",
					data:"check="+check,
					success:function(we)
					{
						if(we == 1)
						{
							alert("Saved Successfully...")
						}
					}
				});
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
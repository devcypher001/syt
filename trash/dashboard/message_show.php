<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['syt_email']))
{
	header("Location:../index.php");
}
$hash = @$_GET['hash'];
$source = @$_GET['source'];
$destination = @$_GET['destination'];

$uuu = $_SESSION['syt_id'];

$update_notification = mysql_query("SELECT * FROM `syt_message` WHERE `hash`='$hash'");
$fetch_update_notification = mysql_fetch_array($update_notification);

// echo $fetch_update_notification['source']." ".$fetch_update_notification['destination'];

if($fetch_update_notification['source'] == $uuu)
{
	$ch = $fetch_update_notification['destination'];
}
else
{
	$ch = $fetch_update_notification['source'];
}

$notif = mysql_query("UPDATE `syt_conversation` SET `notif`=1 WHERE `source_id`='$ch'");
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
	#chatbox
	{
		width:50%;
		padding: 10px;
		height: 250px;
		overflow-y: scroll;
		background:#abc;
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
										
						$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$destination'");
										
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
								<p><?php include 'inbox1.php';?></p>
							</li>
							<?php include 'inbox2.php';?>
						</ul>
					</li>
					<?php
						$userid = $_SESSION['syt_id'];
										
						$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");
										
						$fet_arr = mysql_fetch_array($fet);
										
					?>
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
							
							<div class="tab-content">
								<div class="tab-pane row-fluid active" id="tab_1_1">
									

										<!--end row-fluid-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												
												<li class=""><a href="#tab_1_12" data-toggle="tab">Chat with 
												
												<?php 
												$chatw = @$_GET['chatwith'];
												$qwe = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$destination'");
												$ty = mysql_fetch_array($qwe);
												
												echo $ty['firstname']." ".$ty['lastname'];
												?>
												
												</a></li>
												
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body" style="display: block;">
														<div class="table table-striped table-bordered table-advance table-hover" id="chatbox" >
														
														
																
																<?php
																
																$source_id = $_SESSION['syt_id'];
																 // echo $dest." ".$chatwith;
																$qwr1 = mysql_query("SELECT * FROM `syt_conversation` WHERE `message_hash`='".$_GET['hash']."'");
																// echo mysql_num_rows($qwr1);
																
																if(mysql_num_rows($qwr1) == 0)
																{
																	echo "No chat added...";
																}
																else
																{
																	while($rwr1 = mysql_fetch_assoc($qwr1))
																	{
																		
																		$source_id = $rwr1['source_id'];
																		$uid = $rwr1['id'];
																		$message_hash = $rwr1['message_hash'];
																		$message = $rwr1['message'];
																		
																		$reg = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$source_id'");
																		$fet_reg = mysql_fetch_array($reg);
																?>
																<p class="delete_message" style="color:black;">
																<?php
																		 echo "<b>".$fet_reg['firstname']." ".$fet_reg['lastname']."</b> : ".$message;
																		
																		if($rwr1['source_id'] == $_SESSION['syt_id'])
																		{
																		echo "&nbsp;&nbsp;&nbsp;<img src='images/cross.png' width='10' height='10' style='cursor:pointer;' class='img_delete' cc='$uid'>";	
																		}
																?>	 
																
																</p>
																	
																	
																
																<?php
																		
																	}
																}
															
																
																?>
																
															
														</div>
													</div>
												</div>
												<!--tab-pane-->
										<textarea id="send_message" style="width:500px;height:100px;"></textarea>
																<br>
																<input type="submit" value="Send" id="send"/>
												<!--tab-pane-->
											</div>
										</div>
									</div>
									<!--end span9-->
								</div>
								<!--end tab-pane-->
							
								<!--tab_1_2-->
								
								<!--end tab-pane-->
								
								<!--end tab-pane-->
								
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
	 function fill(name)
	 {
		 $("#person").val(name);
		 $("#search").hide();
		 $("#person").attr(name);
	 }
	 $(document).ready(function(){
		
		$("#person").keyup(function(){
				
			var person = $("#person").val();
			
			$.ajax
			({
				type:"POST",
				url:"be_search_people.php",
				data:"person="+person,
				success:function(display)
				{
					$("#search").html(display).show();
				}
			});
		});
		
		$("#send").click(function(){
			
			var dest = <?php echo @$_GET['hash']; ?>;
			
			var send_message = $("#send_message").val();
			
			var dat = "dest="+dest+"&send_message="+send_message;
			
			if(send_message == "")
			{
				alert("Please enter message...")
			}
			else
			{
				$.ajax
				({
					type:"POST",
					url:"be_send_message1.php",
					data:dat,
					success:function(display)
					{
						if(display == 1)
						{
							//alert("Message successfully sent");
							location.reload();
						}
					}
				});
			}
		});
		
		$(".img_delete").click(function(){
			var cc = $(this).attr("cc");
			$.ajax
				({
					type:"POST",
					url:"be_delete_message.php",
					data:"cc="+cc,
					success:function(display)
					{
						if(display == 1)
						{
							location.reload();
						}
						else
						{
							alert("Internal error")
						}
					}
				});
		});
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
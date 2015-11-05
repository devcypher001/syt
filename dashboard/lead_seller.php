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

$ulead = mysql_query("SELECT * FROM `syt_lead` WHERE `user_id`='$check_title'");
$fet_ulead = mysql_fetch_array($ulead);

if($fet_ulead['user_id'] == $check_title)
{
	$update_lead = mysql_query("UPDATE `syt_lead` SET `notif`=1 WHERE `user_id`='$check_title'");
	$update_lead1 = mysql_query("UPDATE `syt_post` SET `notif`=1 WHERE `userid`='$check_title'");
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
				
				<li class="">
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
				<li class="active">
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
							My Service Providers
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Leads</a>
								<i class="icon-angle-right"></i>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					
			
					
				<br>
				
				<div class="row-fluid">
			
					<div class="span12">
					
					
					<table class="table table-striped table-bordered table-advance table-hover">
						<thead>
							<tr>
								<th><i class="icon-briefcase"></i> Title </th>
								<th><i class="icon-briefcase"></i> Category</th>
								<th><i class="icon-briefcase"></i> Location</th>
								<th><i class="icon-briefcase"></i> View reply</th>
								<th class="hidden-phone"> <i class="icon-briefcase"></i> Share on</th>
								<th class="hidden-phone"><i class="icon-briefcase"></i> View post</th>
								
							</tr>
						</thead>
						<?php
						
							$qwr1 = mysql_query("SELECT * FROM `syt_post` WHERE `userid` = '$check_title'");
						
							
						if(mysql_num_rows($qwr1) == 0)
						{
							echo "No external lead";
						}
						else
						{
							while($rr = mysql_fetch_assoc($qwr1))
							{
								$iid = $rr['userid'];
								$eq = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$iid'");
								$arr_eq = mysql_fetch_array($eq);
								
							?>
								
								<tbody>
																
									<tr>
										<td><?php echo $rr['syt_title']; ?></td>
										<td><?php echo $rr['subcategory']; ?></td>
										<td><?php echo $rr['zip']; ?></td>
										<td><a data-toggle="modal" href="#myModal<?php echo $rr['id'];?>" class="btn btn-orange btn-lg" cc="<?php echo $rr['description']; ?>">View</a> 
										<td class="hidden-phone"><a class="twitter-share-button"
   href="https://twitter.com/share"
  data-url=""
  data-text="Hi!I hv postd a reqrmnt for Python programmer on https://sellyourtime.in/categories/blog-post.php?postid=<?php echo $rr['id']; ?>.View details like location,budget,experience etc.Refer if u know one."
  data-related="twitterdev:Twitter Developer Relations"
  ><img src="images/twitter.jpg" width="20%"></a></td>
  <td class="hidden-phone"><a href="http://sellyourtime.in/categories/blog-post.php?postid=<?php echo $rr['id']; ?>">View post</a></td>

									<div class="modal fade" id="myModal<?php echo $rr['id'];?>" tabindex="-1" role="dialog"  aria-hidden="true">



            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">More Details</h4>
                </div>
                <?php
						$post_id = $rr['id'];
						$reply = mysql_query("SELECT * FROM `syt_seller_reply` WHERE `postid` = '$post_id'");
						if(mysql_num_rows($reply) == 0)
						{
						?>
							<div class="modal-body">No reply</div>
						<?php
						}
						while($row_reply = mysql_fetch_assoc($reply))
						{

				?>
                <div class="modal-body"><b> Name </b>:  <?php echo $row_reply['name']; ?><br></div>
                <div class="modal-body"><b> Email </b>:  <?php echo $row_reply['email']; ?><br></div>
                <div class="modal-body"><b> Location </b>:  <?php echo $row_reply['location']; ?><br></div>
                <div class="modal-body"><b> Description </b>:  <?php echo $row_reply['desc']; ?><br></div>
                <hr>

                <?php
						}
                ?>
                <div class="modal-footer">
                  <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
          </div>

										</td>
									</tr>
									
								</tbody>
							<?php
							}
						}
					
						
						?>
					</table>
					</div>
					
					
				</div>
				
				
				<br>
				
				 <script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
				
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
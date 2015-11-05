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
elseif (!empty($_GET['redirect'])) {
	$url = @$_GET['redirect'];
	header("Location:../categories/blog-post.php?postid=$url&modal=1");
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Sell Your Time | Home</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	
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
				
				<li class="start active ">
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
							My Dashboard				<small> Statistics and More</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">My Dashboard</a> 
							
							</li>
							
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!--Statistics And More-->
				<script>
				function get()
				{
					window.location = "../categories/profile.php?id=<?php echo $_SESSION['syt_id']; ?>";
				}
				function get1()
				{
					window.location = "leads.php";
				}
				function get2()
				{
					window.location = "message.php";
				}
				</script>
				<div class="row-fluid">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<div class="span4 responsive" data-tablet="span6" data-desktop="span4" style="cursor:pointer" onclick="get()">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-briefcase"></i>
								</div>
								<div class="details">
									<div class="number">
										
									</div>
									<div class="desc">									
										My Public Profile Page
									</div>
								</div>
								<a class="more" href="../categories/profile.php?id=<?php echo $_SESSION['syt_id']; ?>"><!--link to public profile page-->
								View My Public Profile Page <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span4 responsive" data-tablet="span6" data-desktop="span4" style="cursor:pointer" onclick="get1()">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-bookmark"></i>
								</div>
								<div class="details">
									<div class="number">
									<?php
										$count_lead = mysql_query("SELECT * FROM `syt_lead` WHERE `user_id`=".$_SESSION['syt_id']);
										echo mysql_num_rows($count_lead);
									?></div>
									<div class="desc">My Leads</div>
								</div>
								<a class="more" href="leads.php">
								View my leads <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span4 responsive" data-tablet="span6  fix-offset" data-desktop="span4" style="cursor:pointer" onclick="get2()">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-envelope"></i>
								</div>
								<div class="details">
									<div class="number">
									<?php
									$count_message = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$check_title' or `destination` ='$check_title'");
									
									echo mysql_num_rows($count_message);
									?>
									</div>
									<div class="desc">Messages</div>
								</div>
								<a class="more" href="message.php">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						
					</div>
					<!-- END DASHBOARD STATS -->
					
				</div>
				<!--End Statistics-->
				
				
				
				
				<div class="row-fluid">
					
					<div class="span12">
						<!-- BEGIN GEOCODING PORTLET-->
						<div class="portlet box red">
							<div class="portlet-title">
								<h4><i class="icon-reorder"></i>See where your leads are.Find buyers on the map below.</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
							
								<form class="form-inline" action="#">
									<select class="form-control  " style="font-weight:bold;" id="sel11">
									<?php
									$userid = $_SESSION['syt_id'];
										$rr = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id` = '$userid'");
										$rr1 = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$userid' ");
										while($r1 = mysql_fetch_assoc($rr))
										{
									?>
											<option value="<?php echo $r1['category']; ?>"><?php echo $r1['category'];?></option>
									<?php
										}
										while($r2 = mysql_fetch_assoc($rr1))
										{
									?>
											<option value="<?php echo $r2['category']; ?>"><?php echo $r2['category'];?></option>
									<?php
										}
									?>
									</select>

									<input type="button" id="gmap_geocoding_btn" class="btn" value="Search"/>
									

								</form>
								<div id="gmap_geocoding" class="gmaps">
								</div>
							</div>
						</div>
						<!-- END GEOCODING PORTLET-->						
					</div>
				</div>
				
				
				
				
				
				
				
				
				<!-- 
				<div class="row-fluid">
					<div class="portlet box blue calendar">
						<div class="portlet-title">
							<h4><i class="icon-reorder"></i>My Schedule</h4>
						</div>
						<div class="portlet-body light-grey">
							<div class="row-fluid">
								<div class="span3 responsive" data-tablet="span12 fix-margin" data-desktop="span8">
										
									<h3 class="event-form-title">Draggable Events</h3>
									<div id="external-events">
										<form class="inline-form">
											<input type="text" value="" class="m-wrap span12" placeholder="Event Title..." id="event_title" /><br />
											<a href="javascript:;" id="event_add" class="btn green">Add Event</a>
										</form>
										<hr />
										<div id="event_box">
										</div>
										<label for="drop-remove">
										<input type="checkbox" id="drop-remove" />remove after drop									
										</label>
										<hr class="visible-phone" />
									</div>			
								</div>
								<div class="span9">
									<div id="calendar" class="has-toolbar"></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>-->
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

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTtTOyVybvzyRGw5rbDqoZGOCofAIc-xM"></script>
	<script src="assets/js/app.js"></script>		
	
	<script>
	$(document).ready(function(){
		$("#gmap_geocoding_btn").click(function(){
			location.reload();
		});
	});
	</script>
	<!--<script src="assets/js/de.gmaps.js"></script>-->
			
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage('calendar');
			App.init();
			DemoGMaps.init();
		});
		
	</script>
	<?php 
		$qww = $_SESSION['syt_id'];
		$check_location = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$qww'");
		$fet_check_location = mysql_fetch_array($check_location);
		$cat_info = $fet_check_location['category'];
		
		$check_location1 = mysql_query("SELECT * FROM `syt_registration` WHERE `category`='$cat_info' AND `id` NOT IN ('$qww')");


		
	?>
	<script>
	var map;
	var geocoder;
	var marker;
	var infowindow;
	//var location="Rohini,new delhi,india";
	var DemoGMaps = function () {
    
		
			
				geocoder = new google.maps.Geocoder();
				var myCenter=new google.maps.LatLng(21.70,77.14);
		 
		      var mapProp = {
		   
		     center:myCenter,
		     zoom:5,
		     mapTypeId:google.maps.MapTypeId.ROADMAP
		   };
		    map=new google.maps.Map(document.getElementById("gmap_geocoding"),mapProp);
				
				
				

			<?php
				while($rq = mysql_fetch_assoc($check_location1))
				{
					//echo $rq['zip']." ".$rq['country']."<br>";
			?>
					var location = "<?php echo $rq['zip']." ".$rq['country']; ?>";

					//alert(location);
					geocoder.geocode( { 'address': location}, function(results, status) {
				 	//alert(status)
	   			 if (status == google.maps.GeocoderStatus.OK) 
	   			 {
	    	
					//map.setCenter(results[0].geometry.location);
					var lat=results[0].geometry.location.lat();
					var longs=results[0].geometry.location.lng();
	     			// alert(results[0].geometry.location.lat());
	     			//alert(results[0].geometry.location.lng());

	     			var myCenter1=new google.maps.LatLng(lat,longs);
	     			 marker=new google.maps.Marker({
		  			 position:myCenter1,
		  				 });
	     			 
		 				marker.setMap(map);

					
	     			  //show_map(lat,longs);

	     
	    		 } 
	    		else 
	    		{
	      			//alert('Geocode was not successful for the following reason: ' + status);
	    		}
			});

			<?php
				}
			?>

				/**/


			


		function show_map(lat,longs)
		{
			
		    //map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);
			 map.addMarker({
                    lat: lat,
                    lng: longs
                  });
		 
		}



       



}();
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
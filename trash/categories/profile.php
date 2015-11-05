<?php
session_start();
include 'connect.php';
$id = @$_GET['id'];
$_SESSION['id'] = $id;
$queryid=mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$id'");

$num_row = mysql_num_rows($queryid);
$fetch_profile = mysql_fetch_array($queryid);
if($num_row == 0 || $fetch_profile['title'] == "Buyer")
{
	header('Location:../404.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?> | Sellyourtime</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
	<style>

	body{
		overflow-x:hidden !important;
	}
	 @media screen and (max-width: 992px) {
.maps
{
width:250px;height:220px;
}

}

@media screen and (min-width: 992px) {
.maps
{
   width:360px !important;
   height:220px;
}
}
	
	#footer-style-1 {
		font-family: 'Lato' !important;
		font-weight: 300 !important;
		font-size:14px !important;
		color:#686868;
		line-height:175% !important;		
		background-color:#fff;
		background-repeat:repeat;
	}
	
	#send1{
		background:green;
		color:#fff;
	}
	#send1:hover{
		background:red;
		color:#fff;
	}

	</style>
  <!-- GOOGLE FONTS -->
  
  <link href='css/add.css' rel='stylesheet' type='text/css'>
<link href="css/profile.css" rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet">
  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
  <?php 
	$map_location = $fetch_profile['zip'];
	 preg_match('/\((.*?)\)/', $map_location, $a);
    $located = $a[1];
	
	$zip_located = mysql_query("SELECT * FROM `syt_location` WHERE `zipcode` = '$located'");
	$fetch_zip_located = mysql_fetch_array($zip_located);
	
  ?>
	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			function initialize() {
				var latlng = new google.maps.LatLng( <?php echo $fetch_zip_located['latitude'].",". $fetch_zip_located['longitude'] ?>);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading">Sellyourtime</h1>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('images/logo.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
					new google.maps.Size(130,50),
					new google.maps.Point(0,0),
					new google.maps.Point(65, 50));

				var companyPos = new google.maps.LatLng(<?php echo $fetch_zip_located['latitude'] ?>, <?php echo $fetch_zip_located['longitude'] ?>);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					shadow: companyShadow,
					title:"Sellyourtime",
					zIndex: 3});
				
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
			}
		</script>
</head>

<body onload="initialize()">
<div id="main-wrapper">
<div id="masking"></div>
<div class="interact">
	<div class="close"><i class="fa fa-times"></i></div>
	<iframe width="100%" height="90%" frameBorder="0" src="interact.php"></iframe>
</div>

 <header id="header-style-1" style="background:#4753a3; padding:0px;">
		<div class="container-fluid">
        <div class="row">

			<nav class="navbar yamm navbar-default" style="background:#4753a3;">
				<div class="navbar-header screen1" >
                    <div class="col-xs-4">
                    
                    
                    <a href="../index.php" ><img src="img/logo.png"></a>
                    </div>
                    <div class="col-xs-8 visible-xs">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-xs-8 visible-lg  hidden-xs ">
                    <form class="form-inline" role="form" style="padding: 14px 0 0 0;">
                      <div class="form-group" style="background:#159605; color:#fff; ">
                          
                      </div>
                      <div class="form-group">
					  
                      </div>
                      <div class="form-group">
                          
                      </div>
                      <div class="form-group">
                      
                                    
                      </div>
                    </form> 
						<div class="col-xs-2"></div>
						
                    </div>
                    
                            
                        
                    
                    
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right" >
					<ul class="nav navbar-nav">
                    <li class="hidden-lg dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff;">Search <div class="arrow-up"></div></a>
                    <ul class="dropdown-menu">
                    <li>
                        <div class="row">
                           <form class="form-inline" role="form" style="padding:10px;">
                      <div class="form-group" style="background:#159605; color:#fff;">
                          <select class="form-control" style="background:#159605; color:#fff;border: 1px solid #159605;">
                              <option>Sell Time</option>
                              <option>Buy Time</option>
                          </select>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control" Placeholder="e.g. Trainer & Tutor">
                      </div>
                      <div class="form-group">
                          <select class="form-control">
                              <option>Delhi</option>
                              <option>Gurgaon</option>
                              <option>Noida</option>
                          </select>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-search"></span></button>
                                    
                      </div>
                    </form>   
                        </div>
                    </li>
                    </ul>
                    </li>

						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff;">Categories <div class="arrow-up"></div></a>
							<ul class="dropdown-menu" style="font-size:22px;">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=1" class="ch">Trainers and Tutors</a></li>
                                                <li><a href="category_listing.php?catid=3">IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="category_listing.php?catid=6">Home and Utility</a></li>
                                                <li><a href="category_listing.php?catid=7">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=2">Business Consultants</a></li>
                                                <li><a href="category_listing.php?catid=4">Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=5">Beauty and Wellness</a></li>
                                                <li><a href="category_listing.php?catid=8">And Everything Else</a></li>
                                           </ul> 
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li><!-- end drop down -->
                        <li><a href="../howitworks.php" style="color:#fff;">How It Works</a></li>
                        
						<?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="../dashboard/index.php" style="color:#fff;"><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="../dashboard/logout.php" style="color:#fff;">Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="../login" style="color:#fff;">Login</a></li>
								 <li ><a href="../register" style="color:#fff;">Sign Up</a></li>
						<?php
							}
						?>
                       
						
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->

                

                </nav><!-- end navbar yamm navbar-default -->
		</div><!--end Row-->
        </div><!-- end container -->
		
		
		 <div class="header-search company-profile-height">
      

      <div class="company-heading-view">
       
        <div class="company-slider-content">

          <div class="general-view">
            <span style="  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  background: url(<?php if(empty($fetch_profile['banner'])){echo "img/content/company-heading-bg.jpg";}else{ echo "../dashboard/images/".$fetch_profile['banner']."";} ?>) top center no-repeat;
  background-size: cover;"></span> <!-- for dark-overlay on the bg -->
            <div class="container">

              <div class="logo-image">
			  <?php
				if(!empty($fetch_profile['image']))
				{
			  ?>
                <img src="../dashboard/images/<?php echo $fetch_profile['image']; ?>" alt="" width="197" height="176">
				
				<?php
				}
				else
				{
				?>
				<img src="img/content/company-logo.jpg" alt="" width="197" height="176">
				<?php
				}
				?>
              </div>

              <h1>
			  <?php 
				if($fetch_profile['verify'] == 1)
				{
					echo $fetch_profile['firstname']." ".$fetch_profile['lastname']." <img src='img/verify.png' width='20' height='20' alt='The Pulpit Rock'/>";
				}
				else
				{
					echo $fetch_profile['firstname']." ".$fetch_profile['lastname'];
				}
				
			  ?>
			  </h1>
            </div>
          </div> 
		

        </div> <!-- END .company-slider-content -->

      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->
		
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
  
     
	
			
      <!--<div class="map-section">

        <div id="map_canvas"></div>

      </div>-->
</header>

  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-push-4">
          <div class="page-content company-profile">

            <div class="tab-content">
              <div class="tab-pane active" id="company-profile">
			  <h2>
				<?php 
					echo "<b>".$fetch_profile['firstname']." ".$fetch_profile['lastname']."</b>";
				?>
			  </h2>
			   
			  
                
			 <div class="social-icons text-left">
			 
			 
			  
                  <ul class="list-inline" style="font-size:28px;">
				  
					<?php 
						if(!empty($fetch_profile['fb']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['fb']; ?>"><i style="color:#3a5795" class="fa fa-facebook"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['twitter']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['twitter']; ?>"><i style="color:#55acee" class="fa fa-twitter"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['google']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['google']; ?>"><i style="color:#d34836" class="fa fa-google-plus"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['linkedin']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php
						}
					?>
                    
                  </ul>
                </div>
			  
                <h3>
                 
				  <?php
					$another_category = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id`='$id'");
					// echo mysql_num_rows($another_category);
					// $fet_another_category = mysql_fetch_array($another_category);
					
					echo $fetch_profile['category'] ." / ".$fetch_profile['subcategory'];
				  ?> 
                </h3>
				
				Also listed in 
				<?php
					while($wer = mysql_fetch_assoc($another_category))
					{
				?>
						<?php echo $wer['category']; ?> ,<?php echo $wer['subcategory']; ?><br>
				<?php
					}
				?>

                <div>
                  <h4>&#8618;Description</h4>
					  <!-- end .single-product -->
					&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fetch_profile['experience_details']; ?>
                </div> <!-- end company-service -->
				
				
			
				
				<br>
				
				<div >
					<ul class="list-group" style="text-align:left; font-size:20px;">
                    <li class="list-group-item">
                    <span class="badge">
					<?php 
					echo $fetch_profile['experience']." years";
					?></span>
                    EXPERIENCE
                    </li>
					
					<?php 
					if(!empty($fetch_profile['doc']))
					{
					?>
					<li class="list-group-item">
                    <span class="badge"><?php 
					echo "<a href='../register/uploads/".$fetch_profile['doc']."'>".$fetch_profile['doc']."</a>";
					?></span>
                    SUPPORTING INFORMATION
                    </li>
					<?php
					}
					?>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
					echo $fetch_profile['charge_mode'];
					?></span>
                    SERVICE CHARGE MODE
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo $fetch_profile['charge'];
					?></span>
                    SERVICE CHARGES (INR)
                    </li>
					<li class="list-group-item">
                    <span class="badge">
					<?php
						echo str_replace("undefined","",$fetch_profile['service_mode']);
					?></span>
                    SERVICE DELIVERY LOCATION
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo $fetch_profile['zip'];
					?></span>
                    LOCATION
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo $fetch_profile['service_day'];
					?></span>
                    AVAILABILITY
                    </li>
                    </ul>
                    
					<?php
					// $q= mysql_query("")
					?>
					
					
					<div id="tab-pane">
					
					</div>
				</div>
				<!--Lead div -->
					
				<!-- lead div end -->
				
				<hr>
				
				<!-- Review div -->
				<div class="company-ratings">
                  <h4>Rating <span>(5 Ratings)</span></h4>



                  <div class="rating-with-details">
					<?php 
						$rating = mysql_query("SELECT * FROM `syt_review` WHERE `user_id` = '$id' ORDER BY `id` DESC");
						while($rr_rating = mysql_fetch_assoc($rating))
						{
							
					?>
					
                    <div class="single-content">
                      <div class="company-rating-box">
					  
						<?php 
						if($rr_rating['star'] == 5)
						{
						?>
							<ul class="list-inline">
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							</ul>
						<?php
						}
						if($rr_rating['star'] == 4)
						{
						?>
							<ul class="list-inline">
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							</ul>
						<?php
						}
						if($rr_rating['star'] == 3)
						{
						?>
							<ul class="list-inline">
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							</ul>
						<?php
						}
						if($rr_rating['star'] == 2)
						{
						?>
							<ul class="list-inline">
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							</ul>
						<?php
						}
						if($rr_rating['star'] == 1)
						{
						?>
							<ul class="list-inline">
							  <li><a href="#"><i class="fa fa-star"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
							</ul>
						<?php
						}
						?>

                        <h6>Overall</h6>
                      </div>

                      <div class="rating-details">
                        <div class="meta">
                          <a href="#"><strong><?php echo $rr_rating['name']; ?></strong></a>
                          -<?php echo $rr_rating['time']; ?>
                        </div>

                        <div class="content">
                          <p><?php echo $rr_rating['comment']; ?>
                          </p>
                        </div>
                      </div>
                    </div> <!-- end .single-content -->

						<?php }?>
                  </div> <!-- end .rating-with-details -->
                </div> <!-- end .company-rating -->
				<!-- Review div -->
				
				
				
				 <br>
				 <br>
				<div class="col-md-12 tab-pad">
					  <div>
				<p><span class="rateus" style="text-decoration:bold;cursor:pointer;font-weight:bold;color:#4753a3;text-decoration:underline;">Rate this profile</span>
				 
                    <div class="row"  style="display:none;" id="review">
                        <input type="text" placeholder="Name *" style="border: 1px solid grey" id="review_name"><br><br>
                     
						<input type="email" placeholder="Email *" style="border: 1px solid grey" id="review_email" required><br><br>
                      
						<input type="text" placeholder="Phone" style="border: 1px solid grey" id="review_phone" maxlength="10"><br><br>
						
					<div class="form-group">
  <ul class="list-inline">
                          <li><i class="fa fa-star rate" style="cursor:pointer;" star="1"></i></li>
                          <li><i class="fa fa-star rate" style="cursor:pointer;" star="2"></i></li>
                          <li><i class="fa fa-star rate" style="cursor:pointer;" star="3"></i></li>
                          <li><i class="fa fa-star rate" style="cursor:pointer;" star="4"></i></li>
                          <li><i class="fa fa-star rate" style="cursor:pointer;" star="5"></i></li>
                        </ul>
</div>
						
                    <textarea placeholder="Your Comment ..." rows="4" cols="100" style="width:100%;.btn-default {
/* color: #333333; */
background-color: #ffffff;
border-color: #ededed;
}" id="review_comment" required></textarea><br><br>

                    <button type="submit" id="send1" class="btn btn-default" ><i class="fa fa-envelope-o"></i> Send Review</button>
                  
				</p>
				</div>
				
				
				<!-- -->
				
              </div> 
					  </div>
				
				<!-- -->
				
				
				
              </div> <!-- end .tab-pane -->


            

              <div class="tab-pane" id="company-contact">
                
				 <div class="tab-pane active" id="company-profile">
			  
			   
			  
                <h2>
				<?php 
					echo "<b> services portfolio</b>";
				?>
				</h2>
			  
			 <div class="social-icons text-left" >
                  <ul class="list-inline" style="font-size:28px;">
					<?php 
						if(!empty($fetch_profile['fb']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['fb']; ?>"><i style="color:#3a5795" class="fa fa-facebook"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['twitter']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['twitter']; ?>"><i style="color:#55acee" class="fa fa-twitter"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['google']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['google']; ?>"><i style="color:#d34836" class="fa fa-google-plus"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['linkedin']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php
						}
					?>
                    
                  </ul>
                </div>
			  
                <h3>
				
				<div class="row">
         

					  <!-- Another div-->
					  
					  <div class="col-md-12 tab-pad">
						<?php 
						$added_category = mysql_query("SELECT * FROM `syt_add_category` WHERE `user_id` = '$id'");
						if(mysql_num_rows($added_category) == 0)
						{
							echo "No category added yet";
						}
						else if(mysql_num_rows($added_category) == 1)
						{
							$only_one_category = mysql_fetch_array($added_category);
							
					?>
							<ul class="nav nav-tabs vertical-tab" role="tablist">
								<li class="active"><a href="#tab-4" role="tab" data-toggle="tab"><?php echo $only_one_category['category']; ?></a></li>
						  
							</ul>
							<div>
							  <h4>&#8618;Description</h4>
								 
								&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $only_one_category['experience_details']; ?>
							</div>
				
				
							<div class="tab-content vertical">
						  <div class="tab-pane fade in active" id="tab-4">
								<ul class="list-group" style="text-align:left; font-size:20px;">
									<li class="list-group-item">
									<span class="badge">
									<?php 
									echo $only_one_category['category'];
									?></span>
									Category
									</li>
									
									<li class="list-group-item">
									<span class="badge">
									<?php 
									echo $only_one_category['subcategory'];
									?></span>
									Sub-Category
									</li>
									
									<li class="list-group-item">
									<span class="badge">
									<?php 
									echo $only_one_category['experience']." years";
									?></span>
									EXPERIENCE
									</li>
									
									<?php if(!empty($only_one_category['doc'])) {?>
									<li class="list-group-item">
									<span class="badge"><?php 
									echo "<a href='../register/uploads/".$only_one_category['doc']."'>".$only_one_category['doc']."</a>";
									?></span>
									SUPPORTING INFORMATION
									</li>
									<?php }?>
									
									<li class="list-group-item">
									<span class="badge"><?php 
									echo $only_one_category['charge_mode'];
									?></span>
									SERVICE CHARGE MODE
									</li>
									
									<li class="list-group-item">
									<span class="badge"><?php 
										echo $only_one_category['charge']." ".$only_one_category['charge_mode'];;
									?></span>
									SERVICE CHARGES
									</li>
									<li class="list-group-item">
									<span class="badge"><?php 
										$str5 = str_replace("undefined","",$only_one_category['service_mode']);
									echo str_replace("/"," ",$str5);
									?></span>
									SERVICE DELIVERY LOCATION
									</li>
									
									<?php if(!empty($only_one_category['service_distance'])) {?>
									<li class="list-group-item">
									<span class="badge"><?php 
										echo $only_one_category['service_distance']." Km";
									?></span>
									LOCATION
									</li>
									<?php }?>
									
									<li class="list-group-item">
									<span class="badge"><?php 
										echo $only_one_category['zip'];
									?></span>
									AVAILABILITY
									</li>
								</ul>
						  </div>
						
						
						</div>
					<?php
						}
						else if(mysql_num_rows($added_category) == 2)
						{
							while($ry = mysql_fetch_assoc($added_category))
							{
								$tb[] = $ry['id'];
								
							}
							$first = $tb[0];
							$second = $tb[1];
							
							$first_category_fetch = mysql_query("SELECT * FROM `syt_add_category` WHERE `id`='$first'");
							$fet_first_category_fetch = mysql_fetch_array($first_category_fetch);
							
							$second_category_fetch = mysql_query("SELECT * FROM `syt_add_category` WHERE `id`='$second'");
							$fet_second_category_fetch = mysql_fetch_array($second_category_fetch);
					?>
							<ul class="nav nav-tabs vertical-tab" role="tablist">
							  <li class="active"><a href="#tab-4" role="tab" data-toggle="tab"><?php echo $fet_first_category_fetch['subcategory']; ?></a>
							  </li>
							  <li><a href="#tab-5" role="tab" data-toggle="tab"><?php echo $fet_second_category_fetch['subcategory']; ?></a>
							  </li>
							</ul>

						<div class="tab-content vertical">
						  <div class="tab-pane fade in active" id="tab-4">
							<ul class="list-group" style="text-align:left; font-size:20px;">
							
							<div>
							  <h4>Description</h4>
								 
								&nbsp;<?php echo $fet_first_category_fetch['experience_details']; ?>
							</div>
							
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_first_category_fetch['category'];
								?></span>
								Category
								</li>
									
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_first_category_fetch['subcategory'];
								?></span>
								Sub-Category
								</li>
								
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_first_category_fetch['experience']." years";
								?></span>
								EXPERIENCE
								</li>
								
								<?php if(!empty($fet_first_category_fetch['doc'])) {?>
								<li class="list-group-item">
								<span class="badge"><?php 
								echo "<a href='../register/uploads/".$fet_first_category_fetch['doc']."'>".$fet_first_category_fetch['doc']."</a>";
								?></span>
								SUPPORTING INFORMATION
								</li>
								<?php } ?>
								
								<li class="list-group-item">
								<span class="badge"><?php 
								echo $fet_first_category_fetch['charge_mode'];
								?></span>
								SERVICE CHARGE MODE
								</li>
								
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_first_category_fetch['charge']." ".$fet_first_category_fetch['charge_mode'];;
								?></span>
								SERVICE CHARGES
								</li>
								<li class="list-group-item">
								<span class="badge"><?php 
									$str2 = str_replace("undefined","",$fet_first_category_fetch['service_mode']);
									echo str_replace("/"," ",$str2);
								?></span>
								SERVICE DELIVERY LOCATION
								</li>
								
								<?php if(empty($fet_first_category_fetch['service_distance'])) {?>
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_first_category_fetch['service_distance']." Km";
								?></span>
								LOCATION
								</li>
								<?php }?>
								
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_first_category_fetch['service_day'];
								?></span>
								AVAILABILITY
								</li>
							</ul>
						  </div>
						  
						  
						  <div class="tab-pane fade" id="tab-5">
							<div >
								<ul class="list-group" style="text-align:left; font-size:20px;">
								<div>
									<h4>Description</h4>
								 
								&nbsp;<?php echo $fet_second_category_fetch['experience_details']; ?>
								</div>
							
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_second_category_fetch['category']." years";
								?></span>
								Category
								</li>
									
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_second_category_fetch['subcategory']." years";
								?></span>
								Sub-Category
								</li>
								
								<li class="list-group-item">
								<span class="badge">
								<?php 
								echo $fet_second_category_fetch['experience']." years";
								?></span>
								EXPERIENCE
								</li>
								
								<?php if(empty($fet_second_category_fetch['doc'])) {?>
								<li class="list-group-item">
								<span class="badge"><?php 
								echo "<a href='../register/uploads/".$fet_second_category_fetch['doc']."'>".$fet_second_category_fetch['doc']."</a>";
								?></span>
								SUPPORTING INFORMATION
								</li>
								<?php
								}
								?>
								
								
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_second_category_fetch['charge']." ".$fet_second_category_fetch['charge_mode'];;
								?></span>
								SERVICE CHARGES
								</li>
								<li class="list-group-item">
								<span class="badge"><?php 
									
									$str4 = str_replace("undefined","",$fet_second_category_fetch['service_mode']);
									echo str_replace("/"," ",$str4);
									
								?></span>
								SERVICE DELIEVERY
								</li>
								
								
								<?php if(empty($fet_second_category_fetch['service_distance'])) {?>
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_second_category_fetch['service_distance']." Km";
								?></span>
								LOCATION
								</li>
								<?php }?>
								
								<li class="list-group-item">
								<span class="badge"><?php 
									echo $fet_second_category_fetch['service_day'];
								?></span>
								AVAILABILITY
								</li>
								</ul>
				</div>
						  </div>
						
						</div>
					<?php
							//}
						}
							
					?>
						
					  </div>
					  
					  
					  
					  <!-- Another div-->
					  
					  
					</div>


				
              </div> <!-- end .tab-pane -->
				
				
              </div> <!-- end .tab-pane -->
            </div> <!-- end .tab-content -->

          </div> <!-- end .page-content -->


        </div> <!-- end .main-grid layout -->

        <div class="col-md-4 col-md-pull-8 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>
          <div class="page-sidebar company-sidebar">

            <ul class="company-category nav nav-tabs home-tab" role="tablist">
              <li>
                <a href="#company-profile" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i> Profile</a>
              </li>


              <!--<li>
                <a href="#company-events" role="tab" data-toggle="tab"><i class="fa fa-list"></i>Events</a>
              </li>

              <li>
                <a href="#company-blog" role="tab" data-toggle="tab"><i class="fa fa-keyboard-o"></i>blog</a>
              </li>-->

              <li>
                <a href="#company-contact" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i> services portfolio</a>
              </li>
            </ul>

            
			
			<div class="contact-details" id="info_lead" style="display:none;">
              <h2>Enter your details</h2>

              <ul class="list-unstyled">
                <li>
                  <strong>Name</strong>
                  <span><input id="name" type="text" style="border:1px solid"></span>
                </li>
				
				<li>
                  <strong>Email ID</strong>
                  <span><input id="email" type="text" style="border:1px solid"></span>
                </li>
				
				<li>
                  <strong>Phone Number</strong>
                  <span><input id="phone" type="text" style="border:1px solid"></span>
                </li>
				
				
                  <strong></strong>
                  <span><input id="submit001" type="submit" value="Contact to <?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?>" style="margin-top:5%;"></span>
                

              </ul>
            </div>
			
			
		   <br>
            <div class="contact-details">
              <h2>Contact Details</h2>

              <ul class="list-unstyled">
                <li>
                  <strong>Name</strong>
                  <span><?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?></span>
                </li>

                <li>
                  <strong>Category</strong>
                  <span><?php echo $fetch_profile['category']; ?></span>
                </li>

                <li>
                  <strong>Sub-Category</strong>
                  <span><?php echo $fetch_profile['subcategory']; ?></span>
                </li>
                
				<?php
				if(!empty($fetch_profile['address']))
				{
				?>
                <li>
                  <strong>Full Address</strong>
                  <span><?php echo $fetch_profile['address']; ?></span>
                </li>
				<?php
				}
				?>

                <li>
                  <strong>ZIP Code</strong>
                  <span><?php echo $fetch_profile['zip']; ?></span>
                </li>

                <li>
                  <strong>Phone</strong>
                  <span>
				  <?php
				  if(isset($_SESSION['syt_email']))
				  {
					echo $fetch_profile['phone']; 
				  }
				  else
				  {
					echo "**********";
				  }?><i class="fa fa-question-circle"></i></span>
                </li>
				
                <li>
                  <strong>E-mail</strong>
                  <span><?php 
				  if(isset($_SESSION['syt_email']))
				  {
					echo $fetch_profile['email']; 
				  }
				  else
				  {
					echo "**********";
				  }?>
				  </span>
                </li>
			
              </ul>
            </div>
			
			<div class="own-company">
              <a href="#" id="connect_to"><i class="fa fa-circle"></i>Send a message to <?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?></a>
            </div>

            <div class="opening-hours">
              <h2>Location</h2>

              <ul class="list-unstyled">
                <li>
                 <div class="single-product" style="height:210px;">
						
						

						<div class="col-md-4 maps" id="map_canvas" style="" ></div>			                      
                 
                </li>
              </ul>
            </div>
			
			 
			<h2>Related Profiles</h2>
			<div id="example">
			

			  <ul>
			  <?php 
				$cate1 = $fetch_profile['category'];
				$subcate1 = $fetch_profile['subcategory'];
				$qw1 = mysql_query("SELECT * FROM `syt_registration` WHERE `category` like '$cate1%' OR `subcategory` like '$subcate1%'  AND `id` NOT IN ('$id') LIMIT 0,10");
				$count_qw1 = mysql_num_rows($qw1);
				
				if($count_qw1==0)
				{
					echo "No related profiles";
				}
				while($ro = mysql_fetch_assoc($qw1))
				{
				?>
				<li><a href="profile.php?id=<?php echo $ro['id']; ?>">
				
				<?php
				if(!empty($ro['image']))
				{
			  ?>
                <img src="../dashboard/images/<?php echo $ro['image']; ?>" alt="" width="50" height="45">
				
				<?php
				}
				else
				{
				?>
				<img src="img/content/company-logo.jpg" alt="" width="50" height="45">
				<?php
				}
				?>
				
				<?php echo $ro['firstname']." ".$ro['lastname']; ?></a></li>
				
				<?php
				}
				?>
				
			  </ul>
			</div>
			

           

          </div> <!-- end .page-sidebar -->
        </div> <!-- end .main-grid layout -->
      </div> <!-- end .row -->

    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


  	<footer id="footer-style-1">
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<!--<img class="padding-top" src="images/flogo.png" alt="">-->
                    <img src="img/logo.png">
                	<p style="text-align:justify;">India’s first and largest services marketplace.
Sell your time for your skills, knowledge and experience. Start your business or generate qualified leads on SYT.If you are looking for services in your area,find service providers as per your need, budget and schedule.
</p>
                    <div class="social-icons">
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" target="_blank" href="https://www.facebook.com/sellyourtimeindia"><i class="fa fa-facebook"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/105810743539585737734/about?hl=en" target="_blank"><i class="fa fa-google-plus"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Twitter"  href="https://twitter.com/sellyourtime" target="_blank"><i class="fa fa-twitter"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="https://www.linkedin.com/company/sell-your-time" target="_blank"><i class="fa fa-linkedin"></i></a></span>
                    </div><!-- end social icons -->
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3>Twitter Feeds</h3>
                    </div><!-- end title -->
                    <ul class="twitter_feed">
                        <li><span></span><p>Sell Your Time wishes you and your family a merry Christmas and a happy new! <a href="#">about 2 days ago</a></p></li>
                        <li><span></span><p>Sell Your Time wishes you and your family a merry Christmas and a happy new! <a href="#">about 9 days ago</a></p></li>
					</ul><!-- end twiteer_feed --> 
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3><div class="club">Sell your time Club Page</div></h3>
						<span style="color:gold">A premium club where you can do paid networking and meet almost anyone by paying the price of their time.</span>
                    </div><!-- end title 
                    <ul class="footer_post">
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_01.jpg" alt=""></a></li>
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_02.jpg" alt=""></a></li>
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_03.jpg" alt=""></a></li>
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_04.jpg" alt=""></a></li>
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_05.jpg" alt=""></a></li>
                        <li><a href="#"><img class="img-rounded" src="demos/footer_post_06.jpg" alt=""></a></li>
                    </ul> recent posts -->  
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3>NewsLetter</h3>
                    </div><!-- end title -->
					<div class="newsletter_widget">
                    	<p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by email.</p>
                        <div class="newsletter_form">
                            <input type="text" id="subscribe_email" class="form-control" placeholder="Enter your email address"><br> 
                            <div id="subscribe" class="btn btn-primary pull-right" style="background:rgb(21, 150, 5);border: 1px solid rgb(21, 150, 5);">Subscribe</div>    
                        </div><!-- end newsletter form -->
						<div style="color:green" id="subscribe_result">
						</div>
					</div>
					
                </div><!-- end widget -->
            </div><!-- end columns --> 
    	</div><!-- end container -->
    </footer><!-- end #footer-style-1 -->    
<div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p>All rights reserved @ 2015 Sell Your Time</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                        <li class="active"><a href="../index.php">Home</a></li>
                        <li><a href="../faq.php">FAQ</a></li>
                        <li><a href="../terms.php">Terms of Service</a></li>
                        <li><a href="../privacy.php">Privacy Policy</a></li>
                        <li><a href="../contactus.php">Contact us</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div> <!-- end #footer -->

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.vticker.min.js"></script>

<script>
$(function() {
  $('#example').vTicker('init', 
  {
	speed: 1400, 
    pause: 1000,
    showItems: 2,
    padding:4
   });
});
</script>




 <script>
	/*$(document).ready(function(){
		$("#connect_to").click(function(){
			$("#info_lead").show();
		});
		
		$("#submit001").click(function(){
			
			var name = $("#name").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var contact = "<?php echo $fetch_profile['email']; ?>";
			
			var aja = "name="+name+"&email="+email+"&phone="+phone+"&contact="+contact;
			if(name=='' || email=='' || phone=='')
			{
				alert("Fill all fields")
			}
			else
			{
				$.ajax
				({
					type:"POST",
					url:"be_contact.php",
					data:aja,
					success:function(display)
					{
						if(display == 1)
						{
							alert("Contact details has been sent to "+contact);
						}
					}
				});
				var name = $("#name").val('');
				var email = $("#email").val('');
				var phone = $("#phone").val('');	
			}
			
		});
	});*/
 </script>
 <script>
	$(document).ready(function(){
		$("#connect_to").click(function(){
		$("#masking").show(); 
		$(".interact").show();
		});

		$(".close").click(function(){
		   $("#masking").hide(); 
		   $(".interact").hide();
		});
	});
</script>
<script>
function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
	$("#review_phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
					$(document).ready(function(){
						$("#subscribe").click(function(){
							
							var email = $("#subscribe_email").val();
							
							if(email=="")
							{
								$("#subscribe_result").html("<font color='red'>Enter email address.</font>");
							}
							else
							{
								$.ajax
								({
									type: "POST",
									url: "be_newletter.php",
									data: "email="+email,
									cache: false,
									success: function(html)
									{
										if(html == 1)
										{
										$("#subscribe_result").html("<font color='green'>Thanks for subscribing to SYT newsletter.</font>");
										}
										else if(html == 2)
										{
										$("#subscribe_result").html("<font color='red'>You have already subscribed SYT newsletter.</font>");
										
										}
									}
								});
							}
						});
						
						$(".rateus").click(function(){
							$("#review").show();
						});
						
						
						
						
						$(".rate").click(function(){
							var star = $(this).attr("star");
							alert("You have selected "+star+" star");
							
							$("#send1").click(function(){
							var name=$("#review_name").val();
							var email=$("#review_email").val();
							var phone=$("#review_phone").val();
							var comment=$("#review_comment").val();
							var review="<?php echo $fetch_profile['email']; ?>";
							var userid="<?php echo $id; ?>";
							
							var jax = "name="+name+"&email="+email+"&phone="+phone+"&comment="+comment+"&review="+review+"&star="+star+"&userid="+userid;
							
							
							
							if(name=="" || email=="" || phone=="" || comment=="")
							{
								alert("Please fill all fields")
								
							}else
							{
								if(ValidateEmail(email))
								{
									$.ajax
								({
									type: "POST",
									url: "be_review.php",
									data: jax,
									cache: false,
									success: function(html)
									{
										if(html == 1)
										{
											alert("Rated successfully")
											var name=$("#review_name").val('');
											var email=$("#review_email").val('');
											var phone=$("#review_phone").val('');
											var comment=$("#review_comment").val('');
										}
										else{
											alert("Internal error")
										}
									}
								});
								}
								else
								{
									alert("Please enter valid email id")
								}
								
							}
							
						});
							
						})
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
</body>
</html>
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

	#review_name {
  -webkit-transition: all 0.30s ease-in-out;
-moz-transition: all 0.30s ease-in-out;
-ms-transition: all 0.30s ease-in-out;
-o-transition: all 0.30s ease-in-out;
outline: none;
padding: 3px 0px 3px 3px;
margin: 5px 1px 3px 15px;
border: 1px solid #DDDDDD;
padding: 9px;
width: 96%;
}
 
#review_name:focus {
  box-shadow: 0 0 5px rgb(21, 150, 5);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
  border: 1px solid rgb(21, 150, 5);
  padding: 9px;
}

#review_email {
-webkit-transition: all 0.30s ease-in-out;
-moz-transition: all 0.30s ease-in-out;
-ms-transition: all 0.30s ease-in-out;
-o-transition: all 0.30s ease-in-out;
outline: none;
padding: 3px 0px 3px 3px;
margin: 5px 1px 3px 15px;
border: 1px solid #DDDDDD;
padding: 9px;
width: 96%;
}
 
#review_email:focus {
  box-shadow: 0 0 5px rgb(21, 150, 5);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
  border: 1px solid rgb(21, 150, 5);
  padding: 9px;
}

#review_phone {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
border: 1px solid #DDDDDD;
padding: 9px;
width: 96%;
}
 
#review_phone:focus {
  box-shadow: 0 0 5px rgb(21, 150, 5);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
  border: 1px solid rgb(21, 150, 5);
  padding: 9px;
}
#review_comment {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
border: 1px solid #DDDDDD;
padding: 9px;
width: 96%;
}
 
#review_comment:focus {
  box-shadow: 0 0 5px rgb(21, 150, 5);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 15px;
  border: 1px solid rgb(21, 150, 5);
  padding: 9px;
}
#company-profile h4 span {
color: #4C4040;
}

fa {
display: inline-block;
font-family: FontAwesome;
font-style: normal;
font-weight: 900;
color: green;
font-size: 28px;
line-height: 1;
-webkit-font-smoothing: antialiased;
}
/*
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  font-size: 35px;
  float: left;
  padding-left: 5px;
  color: #159605 !important;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}*/
.ratings {
           /* border:     1px solid #CCC;*/
            overflow:   visible;
            margin-left:    15px;
            position:   relative;
            /*width:      180px;
            height:     100px;*/
        }
.ratings_stars {
            background: url('star_blank.png') no-repeat;
            float:      left;
            height:     28px;
            padding:    2px;
            width:      32px;
        }
.ratings_vote {
            background: url('star_voted.png') no-repeat;
        }
.ratings_over {
            background: url('star_overs.png') no-repeat;
        }

.total_votes {  
    background: #eaeaea;  
    top: 58px;  
    left: 0;  
    padding: 5px;  
    position:   absolute;  
}  
.product{  
    font: 10px verdana, sans-serif;  
    margin: 0 auto 40px auto;  
    width: 180px; 
	height:200px; 
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
    //$located = $a[1];
    if(!empty($a[1]))
    {
    	 $located = $a[1];
    	 
    	 $zip_located = mysql_query("SELECT * FROM `syt_location` WHERE `zipcode` = '$located'");
	$fetch_zip_located = mysql_fetch_array($zip_located);
	
	$syt_location = $fetch_zip_located['place']." ".$fetch_zip_located['locality']." ".$fetch_zip_located['city'];
    }
    else
    {
    	$syt_location = $fetch_profile['zip'];
    }
    
    
   
    //echo $located;
	
	

	
  ?>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTtTOyVybvzyRGw5rbDqoZGOCofAIc-xM"></script>
		<script type="text/javascript">
		var geocoder;
				var map;
				var lat,long;
				var marker;
			function initialize() 
			{
				
/*
		 var myCenter=new google.maps.LatLng(19.42705,-99.127571);
		 
		   var mapProp = {
		   
		     center:new google.maps.LatLng(19.42705,-99.127571),
		     zoom:15,
		     mapTypeId:google.maps.MapTypeId.ROADMAP
		   };
		    map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);*/
		 /*  var marker=new google.maps.Marker({
		   position:myCenter,
		   });
		 marker.setMap(map);*/
		

		 		geocoder = new google.maps.Geocoder();
				var address="<?php echo $syt_location; ?>";
				 geocoder.geocode( { 'address': address}, function(results, status) {
				 	//alert(status)
	   			 if (status == google.maps.GeocoderStatus.OK) 
	   			 {
	    	
					//map.setCenter(results[0].geometry.location);
					lat=results[0].geometry.location.lat();
					long=results[0].geometry.location.lng();
	     			 //alert(results[0].geometry.location.lat());
	     			// alert(results[0].geometry.location.lng());
	     			  show_map(lat,long);

	     
	    		 } 
	    		else 
	    		{
	      			//alert('Geocode was not successful for the following reason: ' + status);
	    		}
			});

		
	     

		}
function show_map(lat,long)
		{
			var myCenter=new google.maps.LatLng(lat,long);
		 
		   var mapProp = {
		   
		     center:myCenter,
		     zoom:15,
		     mapTypeId:google.maps.MapTypeId.ROADMAP
		   };
		    map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);
		 marker=new google.maps.Marker({
		   position:myCenter,
		   });
		 marker.setMap(map);
		 
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
                                                <li><a href="category_listing.php?catid=1" class="ch" >Trainers and Tutors</a></li>
                                                <li><a href="category_listing.php?catid=3" >IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="category_listing.php?catid=6" >Home and Utility</a></li>
                                                <li><a href="category_listing.php?catid=7" >Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=2" >Business Consultants</a></li>
                                                <li><a href="category_listing.php?catid=4" >Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=5" >Beauty and Wellness</a></li>
                                                <li><a href="category_listing.php?catid=9" >Social Causes</a></li>
                                           </ul> 
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li><!-- end drop down -->
                        <li><a href="../howitworks.php" style="color:#fff;" target="_blank">How It Works</a></li>
                        
						<?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="../dashboard/index.php" style="color:#fff;" ><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="../dashboard/logout.php" style="color:#fff;" >Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="../login" style="color:#fff;" target="_blank" target="_blank">Login</a></li>
								 <li ><a href="../register" style="color:#fff;" target="_blank">Sign Up</a></li>
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
				if(isset($_SESSION['syt_email']) && ($_SESSION['syt_id']== $id)){
				echo "<a href='../dashboard/profile.php' style='width:165px;' class='btn btn-success'>Change Image</a>";
				}
				?>
				
				
              </div>

              
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
				
					echo "<b>".$fetch_profile['firstname']." ".$fetch_profile['lastname']."</b>&nbsp;&nbsp;";
					if($fetch_profile['verify'] == "1")
					{
					 echo "<img src='img/verify.png' width='20' height='20'/>"; 
					}
				?>
			  </h2>
			   
			  
                
			 <div class="social-icons text-left">
			 
			 
			  
                  <ul class="list-inline" style="font-size:28px;">
				  
					<?php 
						if(!empty($fetch_profile['fb']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['fb']; ?>" target="_blank"><i style="color:#3a5795" class="fa fa-facebook"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['twitter']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['twitter']; ?>" target="_blank"><i style="color:#55acee" class="fa fa-twitter"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['google']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['google']; ?>" target="_blank"><i style="color:#d34836" class="fa fa-google-plus"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['linkedin']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
				
				
				<?php
					if(mysql_num_rows($another_category) != 0)
					{
						echo "Also listed in ";
					while($wer = mysql_fetch_assoc($another_category))
					{
				?>
						<?php echo $wer['category']; ?> ,<?php echo $wer['subcategory']; ?><br>
				<?php
					}
					}
				?>

                <div>
                  <h4>Description</h4>
					  <!-- end .single-product -->
					<p><?php echo $fetch_profile['experience_details']; ?></p>
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
					echo "<a href='#' data-toggle='modal' data-target='#docModal' id='doc'>".$fetch_profile['doc']."</a>";
					?></span>
                    SUPPORTING INFORMATION
                    </li>
                    <li class="list-group-item" id="download" style="display:none;">
                    <div class="form-group" style="margin-bottom: 40px;">
                    
                    <div class="col-sm-3">
                            <input type="text" id="uname" class="form-control" placeholder="Name">
                     </div>
                     <div class="col-sm-4">
                            <input type="email" id="uemail" class="form-control" placeholder="Email">
                     </div>
                     <div class="col-sm-3">
                            <input type="text" id="uphone" class="form-control" placeholder=" Phone">
                     </div>
                     <div class="col-sm-2">
                            <a href="#" class="btn btn-primary" id="sub" style="margin-top:3px;">Submit</a>
                     </div>
                     
                    </div>
                    </li>
                    <li class="list-group-item" id="download1" style="display:none;">
                    <?php 
								echo "<a href='../register/uploads/".$fetch_profile['doc']."'>".$fetch_profile['doc']."</a>";
								?>
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
                  <h4 class="rateus" style="cursor: pointer;background: rgb(89, 203, 75);
padding: 11px;">Rate this profile
<?php
$rating_count = mysql_query("SELECT * FROM `syt_review` WHERE `user_id` = '$id'");
$cc = mysql_num_rows($rating_count);

if($cc != 0)
{

?>
<span style="float: right;
background: aliceblue;
padding: 11px;
margin-top: -1.4%;">
				  
				  <?php
					
					
					while($rr_cc = mysql_fetch_assoc($rating_count))
					{
						$v=0;
						$v = $v + $rr_cc['star'];
						
					}
					if(!empty($v)){
					echo "(".$v."/5 Ratings)";
					// echo $cc." - ".$v;
					}
				  ?>
				</span>
<?php
}
?>
				</h4>
					  <div>
				<p>

                    <div class="row" style="display:none;"  id="review">
									 
                        <input type="text" placeholder="Name *" id="review_name"><br><br>
                     
						<input type="email" placeholder="Email *"  id="review_email" required><br><br>
                      
						<input type="text" placeholder="Phone" style="border: 1px solid grey" id="review_phone" maxlength="10"><br><br>
						
					<div class="row">
					<!--
  <ul class="list-inline">
                          <li><i class="fa fa-star rate" id="rate1" style="cursor:pointer;color: green;font-size: 35px;" star="1"></i></li>
                          <li><i class="fa fa-star rate" id="rate2" style="cursor:pointer;color: green;font-size: 35px;" star="2"></i></li>
                          <li><i class="fa fa-star rate" id="rate3" style="cursor:pointer;color: green;font-size: 35px;" star="3"></i></li>
                          <li><i class="fa fa-star rate" id="rate4" style="cursor:pointer;color: green;font-size: 35px;" star="4"></i></li>
                          <li><i class="fa fa-star rate" id="rate5" style="cursor:pointer;color: green;font-size: 35px;" star="5"></i></li>
                        </ul>
                        
             		<div class="rating">
					<span id="rate1" star="1">☆</span ><span id="rate2" star="2">☆</span><span id="rate3" star="3">☆</span><span id="rate4" star="4">☆</span><span id="rate5" star="5">☆</span>
					</div>
					-->
				<div id="rating_1" class="ratings col-md-6">
					<div class="star_1  ratings_stars ratings_blank" star="1"></div>
					<div class="star_2  ratings_stars ratings_blank" star="2"></div>
					<div class="star_3  ratings_stars ratings_blank" star="3"></div>
					<div class="star_4 ratings_stars ratings_blank" star="4"></div>
					<div class="star_5 ratings_stars ratings_blank" star="5"></div> 
					
        		</div>
        		<div class="voted col-md-4">
            	</div>

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
							<li><a href="<?php echo $fetch_profile['fb']; ?>" target="_blank"><i style="color:#3a5795" class="fa fa-facebook"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['twitter']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['twitter']; ?>" target="_blank"><i style="color:#55acee" class="fa fa-twitter"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['google']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['google']; ?>" target="_blank"><i style="color:#d34836" class="fa fa-google-plus"></i></a></li>
					<?php
						}
					?>
					<?php 
						if(!empty($fetch_profile['linkedin']))
						{
					?>
							<li><a href="<?php echo $fetch_profile['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
							  <h4>Description</h4><p><?php echo $only_one_category['experience_details']; ?></p>
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
									
									<?php
									if(!empty($only_one_category['service_day']))
									{
									?>
									<li class="list-group-item">
									<span class="badge"><?php 
										echo $only_one_category['service_day'];
									?></span>
									AVAILABILITY
									</li>
									<?php }?>
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
								 
								<p><?php echo $fet_first_category_fetch['experience_details']; ?></p>
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
									echo $fet_first_category_fetch['charge']." ".$fet_first_category_fetch['charge_mode'];;
								?></span>
								SERVICE CHARGES
								</li>
								
								<?php if(!empty($fet_first_category_fetch['service_mode'])) {?>
								<li class="list-group-item">
								<span class="badge"><?php 
									$str2 = str_replace("undefined","",$fet_first_category_fetch['service_mode']);
									echo str_replace("/"," ",$str2);
								?></span>
								SERVICE DELIVERY LOCATION
								</li>
								<?php }?>
								
								<?php if(!empty($fet_first_category_fetch['service_distance'])) {?>
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
								
								<?php if(!empty($fet_second_category_fetch['doc'])) {?>
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
								SERVICE DELIVERY LOCATION
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

        <div class="col-md-4 col-md-pull-8 active">
          
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
					echo "**********";
				  ?><i class="fa fa-question-circle"></i></span>
                </li>
				
                <li>
                  <strong>E-mail</strong>
                  <span><?php 
					echo "**********";
				  ?>
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
				$qw1 = mysql_query("SELECT * FROM `syt_registration` WHERE (`category` like '$cate1%' OR `subcategory` like '$subcate1%') AND `title`='Seller'  AND `id` NOT IN ('$id') LIMIT 0,10");
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
                        <a class="twitter-timeline" href="https://twitter.com/sellyourtime" data-widget-id="587909950271176705">Tweets by @sellyourtime</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</ul><!-- end twiteer_feed --> 
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3><div class="club">Sell your time Club</div></h3>
						<span style="color:gold">A premium club where you can do paid networking and meet almost anyone by paying the price of their time.<br><a href="../club.php">Join sell your time club</a></span>
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
                            <input type="text" id="subscribe_email" style="background-color: #121214;
border: 1px solid #343436;" class="form-control" placeholder="Enter your email address"><br> 
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
							$("#review").toggle();
						});
						
						
						
						$('.ratings_stars').click(function(){
				 			
				 			$(this).prevAll().andSelf().addClass('ratings_vote');

							var num=$(this).attr("star");
							var star="stars="+num;
							$(".voted").html("You rate "+num+"/5 stars");
							return num;
							
						
							
						});
						
						$("#send1").click(function(num){
							var name=$("#review_name").val();
							var email=$("#review_email").val();
							var phone=$("#review_phone").val();
							var comment=$("#review_comment").val();
							var review="<?php echo $fetch_profile['email']; ?>";
							var userid="<?php echo $id; ?>";
							var num1 = $('.ratings_vote').length;
							

							var jax = "name="+name+"&email="+email+"&phone="+phone+"&comment="+comment+"&review="+review+"&star="+num1+"&userid="+userid;
							
							if(name=="" || email=="" || phone=="" || comment=="" || num1 == 0)
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

						$("#review_name").keypress(function(e){

							$("#review_name").css("border"," 1px solid red");
						})
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
<script type="text/javascript">
	$(document).ready(function() {
 $('.ratings_stars').hover(
 
            // Handles the mouseover
 
            function() {
 
                $(this).prevAll().andSelf().addClass('ratings_over');
                $(this).nextAll().removeClass('ratings_vote'); 
 
            },
 
            // Handles the mouseout
 
            function() {
 
                $(this).prevAll().andSelf().removeClass('ratings_over');
 
            }
 
        );


 
        });
</script>
<script>
$(document).ready(function(){
    $("#doc").click(function(){
    
      $("#download").css("display","block");
    });
    $("#sub").click(function(){
      var name = $("#uname").val();
    	var email = $("#uemail").val();
      var phone = $("#uphone").val();

      var data = "name="+name+"&email="+email+"&phone="+phone;
    	if (ValidateEmail(email))
      {
        $.ajax
          ({
            type:"POST",
            url:"be_pr.php",
            data:data,
            success:function(ff)
            {
                if(ff == 1)
                {
                  $("#download").css("display","none");
                  $("#download1").css("display","block");
                }
                else
                {
                  alert("Not able to search file");
                }
            }
          });
        
      }
      else{
        alert("Please Enter valid Email Id");
      }
    });
  });
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
</body>
</html>
<?php
session_start();
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SellYourTime | Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">
  
  <!-- Carousel Slider -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- SLIDER ROYAL CSS SETTINGS -->
  <link href="royalslider/royalslider.css" rel="stylesheet">
  <link href="royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

	
    <!-- END Switcher Styles -->
    
	<!-- Demo Examples -->
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/green.css" title="green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/tael.css" title="tael" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/light-green.css" title="light-green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/yellow.css" title="yellow" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/blue.css" title="blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/light-blue.css" title="light-blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/purple.css" title="purple" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/violet.css" title="violet" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/red.css" title="red" media="all" />        <link rel="alternate stylesheet" type="text/css" href="switcher/css/orange.css" title="orange" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="dark-style.css" title="dark" media="all" />
	<!-- END Demo Examples -->
    
    <link href="css/site.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
    <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />

<style type="text/css">
	html,body{
	overflow-y: auto !important;
	overflow-x: hidden !important;
	}
	p.selected
		{
			display:block;
			width:222px;
			background:#4cae4c;
			color:white;
			border:1px solid #4cae4c;
			outline:0;
			padding:0;
		}
		
	.textcolor{
	 color:rgb(59, 70, 145);
	}    
   
    @media only screen and (min-width : 992px) and (max-width : 1800px) {
        .searchicon{
            margin-top: 66%!important;
        }

        }
/*
@media  (min-width : 320px) and (max-width : 330px) {
        .rs{
            margin-top: 78%;
        }

        }

@media  (min-width : 769px) and (max-width : 900px) {
  .rs{
            margin-top: 7% !important;
        }

        }

@media  (min-width : 701px) and (max-width : 768px) {
  .rs{
            margin-top: 11% !important;
        }

        }
@media  (min-width : 669px) and (max-width : 700px) {
  .rs{
            margin-top: 13% !important;
        }

        }
@media  (min-width : 649px) and (max-width : 668px) {
  .rs{
            margin-top: 15% !important;
        }

        }
   
 @media  (min-width : 629px) and (max-width : 648px) {
  .rs{
            margin-top: 18% !important;
        }

        }
        @media  (min-width : 602px) and (max-width : 628px) {
  .rs{
            margin-top: 21% !important;
        }

        }

    @media  (min-width : 569px) and (max-width : 601px) {
  .rs{
            margin-top: 24% !important;
        }

        }
    @media  (min-width : 539px) and (max-width : 568px) {
  .rs{
            margin-top: 27% !important;
        }

        }
    @media  (min-width : 511px) and (max-width : 538px) {
  .rs{
            margin-top: 30% !important;
        }

        }

@media  (min-width : 479px) and (max-width : 510px) {
  .rs{
            margin-top: 34% !important;
        }

        }

@media  (min-width : 449px) and (max-width : 478px) {
  .rs{
            margin-top: 43% !important;
        }

        }

@media  (min-width : 420px) and (max-width : 448px) {
  .rs{
            margin-top: 52% !important;
        }

        }

@media  (min-width : 380px) and (max-width : 419px) {
  .rs{
            margin-top: 60% !important;
        }

        }

@media  (min-width : 359px) and (max-width : 379px) {
  .rs{
            margin-top: 68% !important;
        }

        }

@media  (min-width : 340px) and (max-width : 358px) {
  .rs{
            margin-top: 73% !important;
        }

        }
        @media  (min-width : 330px) and (max-width : 339px) {
  .rs{
            margin-top: 75% !important;
        }

        }

*/
/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* Styles */
}

.textsize {
font-size:21px;
}  
.selected
		{
			display:block;
			width:250px;
			background:#4cae4c;
			color:white;
			border:1px solid #4cae4c;
			outline:0;
		}

</style>
<style type="text/css">
 @media screen and (max-width: 900px) {
.alignment
{
margin-top:42%;
}

}

@media screen and (min-width: 900px) {
.alignment
{
    margin-top: 7%;
}

}
/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    margin-bottom:1px;
	width:100%;
}

#slideshow IMG {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}

#slideshow IMG.active {
    z-index:10;
    opacity:1.0;
}

#slideshow IMG.last-active {
    z-index:9;
}
</style>
<!--important-->
<link href="css/new1.css" type="text/css" rel="stylesheet" media="screen, projection" />
<!--/only-->

</head>
<body>   

    
    <header id="header-style-1" style="background:#4753a3; padding:0px; z-index:1000;">
		<div class="container-fluid">
        <div class="row">

			<nav class="navbar yamm navbar-default" style="background:#4753a3;">
				<div class="navbar-header screen1" >
                    <div class="col-xs-4">
                    
                    
                    <a href="index.php" ><img src="img/logo.png"></a>
                    </div>
                    <div class="col-xs-8 visible-xs">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-xs-8 visible-lg  hidden-xs ">
                    			<div class="col-xs-2"></div>
						
                    </div>
                    
                            
                        
                    
                    
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right" >
					<ul class="nav navbar-nav">

						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff;">Categories <div class="arrow-up"></div></a>
							<ul class="dropdown-menu" style="font-size:22px;">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=1" class="ch">Trainers and Tutors</a></li>
                                                <li><a href="categories/category_listing.php?catid=3">IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="categories/category_listing.php?catid=6">Home and Utility</a></li>
                                                <li><a href="categories/category_listing.php?catid=7">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2">Business Consultants</a></li>
                                                <li><a href="categories/category_listing.php?catid=4">Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=5">Beauty and Wellness</a></li>
                                                <li><a href="categories/category_listing.php?catid=8">And Everything Else</a></li>
                                           </ul> 
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li><!-- end drop down -->
                        <li><a href="howitworks.php" style="color:#fff;">How It Works</a></li>
                        
						<?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="dashboard/index.php" style="color:#fff;"><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="dashboard/logout.php" style="color:#fff;">Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="login" style="color:#fff;">Login</a></li>
								 <li ><a href="register" style="color:#fff;">Sign Up</a></li>
						<?php
							}
						?>
                       
						
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->

                

                </nav><!-- end navbar yamm navbar-default -->
		</div><!--end Row-->
        </div><!-- end container -->
	</header><!-- end header-style-1 -->
	
    

    <div class="slider-wrapper">
    
		<div class="img-slider">
   <div id="slideshow">
		<img src="img/banner1.jpg" style="width:100%;" class="active"/>
		<img src="img/banner2.jpg" style="width:100%;">
		<img src="img/banner3.jpg" style="width:100%;">
		<img src="img/banner4.jpg" style="width:100%;">
		<img src="img/banner5.jpg" style="width:100%;">
		<img src="img/banner6.jpg" style="width:100%;">
	</div>
</div>
        
    </div><!-- end slider-wrapper -->
	
	<script type="text/javascript">
function slideSwitch() {
    var $active = $('#slideshow IMG.active');
    if ( $active.length == 0 )
	$active = $('#slideshow IMG:last');
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next():$('#slideshow IMG:first');
	$active.addClass('last-active');

    $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1000, function(){
        $active.removeClass('active last-active');
    });
}

$(function() {
    setInterval( "slideSwitch()", 3000 );
});
</script>
	
	<div class="row rs" >
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-offset-2 hidden-xs ">
                    <div class="search-cont search-push pd-20">
                    
             <div id="searchForm">
          <input type="hidden" name="searchFrom" value="homePage">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3 "> 
               <div class="form-group">
  		  <label class="small-t mt-5 textcolor" for="sel1"> Looking for?</label>
		  <select class="form-control " id="sel1" style="font-weight:bold;">
		    <option style="font-size:16px;font-weight:bold;">Sell a service</option>
		    <option>Buy a service</option>
		    
		  </select>
		</div>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 ">            
              
              <div class="form-group">
                <label class="small-t mt-5 textcolor ">Select a category</label><br/>
                 <select class="form-control  " style="font-weight:bold;" id="sel11">
					<?php
						$rr = mysql_query("SELECT * FROM `syt_category` WHERE 1");
						while($r1 = mysql_fetch_assoc($rr))
						{
					?>
							<option value="<?php echo $r1['category']; ?>"><?php echo $r1['category'];?></option>
					<?php
						}
					?>
				 </select>

                 </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-4 ">
              <div class="form-group">
                <label class="small-t  mt-5 textcolor">Location / Pincode</label> 
                <input type="text" id="searchPinCodeLocality" class=" form-control" style="font-weight:bold;"
                  placeholder="Vasant Kunj/ 110081" />
				  
                  
               </div>
			  
			  
				 <!--<div style="border:1px solid black;">dfas</div>-->
            </div>
			
			
			
			
            <div class="col-sm-4 col-md-1 col-lg-1 columns">
              <div class="centerit w-130">
              <!--
                <input type="submit" value="Search" class="search-button" id="submitbut" style="margin-top:18% !important;"/>
                -->
           	<img src="img/search.png"  style="position: relative;left: -20px;cursor:pointer;" class="searchicon" id="search_Result" >
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

	<!-- search result bar div-->
	 <div class="col-sm-8 col-md-8 col-lg-7 col-xs-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-offset-2 hidden-xs">
                    <div class="pd-20">
                    <div class="col-sm-3 col-md-3 col-lg-4 col-sm-offset-8 col-md-offset-8 col-lg-offset-8" id="search_down1" style="z-index: 999;
position: absolute;
top: -15px;
left: 1.7%;
width: 262px;
padding:2px;
overflow-y: scroll;
height: 200px;
background-color: rgb(255, 255, 255);display:none;cursor:pointer;"></div>
	         </div>
	</div>
     
	<!--  search result bar div -->
	
	<!-- Search bar for mobile site -->
	
	<div class="container-fluid alignment">
	<div class="row">
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm">

	<div class="col-xs-12">
	<div class="form-group">
  		  <label class="textsize textcolor" for="sel1"> Looking for?</label>
		  <select class="form-control input-lg" id="sel12" style="font-weight:bold;">
		    <option style="font-size:16px;font-weight:bold;">Sell a service</option>
		    <option>Buy a service</option>
		    
		  </select>
	</div>
	</div>
	
	<div class="col-xs-12">
	<div class="form-group">
                <label class="textsize  textcolor ">Select a category</label><br/>
                 <select class="form-control input-lg " style="font-weight:bold;" id="sel112">
					<?php
						$rr = mysql_query("SELECT * FROM `syt_category` WHERE 1");
						while($r1 = mysql_fetch_assoc($rr))
						{
					?>
							<option value="<?php echo $r1['category']; ?>"><?php echo $r1['category'];?></option>
					<?php
						}
					?>
				 </select>

                 </div>
	</div>
	
	<div class="col-xs-12">
	<div class="form-group">
                <label class="textsize  textcolor">Location / Pincode</label> 
                <input type="text" id="searchPinCodeLocality12" class=" form-control input-lg " style="font-weight:bold;"
                  placeholder="Vasant Kunj/ 110081" />
				  
                  
        </div>
        <br/>
        <div class="form-group" id="search_down2" style="cursor:pointer;"></div>
	</div>
	
	<div class="col-xs-6">
	<img src="img/search.png"  style="width: 47px; " class="searchicon2" >
	</div>

	</div>
	</div>
	</div>
	<!-- End Search bar for mobile site -->
			 
	<div class="grey-wrapper ">
    	<div class="container -fluid">
            <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
            <div class="general-title" >
                <h1 style="color:#FD6920;font-size:37px;">How It Works</h1>
                <hr>
            </div><!-- end general title -->
			<br>
            </div>
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div id="custom_tab" class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active" style="width: 275px;background:#fd6920;"><a href="#tab1" data-toggle="tab" style="font-weight:bold; font-size:21px;color:#fff;">Sell a Service</a></li>
                                        <li style="width: 275px;background:#fd6920;"><a href="#tab2" data-toggle="tab" style="font-weight:bold;font-size:21px;color:#fff;">Buy a Service</a></li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <div class="container" style="width:99%;">
                                                <div class="row" style="text-align:center;">
                                                    <div class="col-md-4" >
                                                        <h1>Register for free</h1>
                                                        <img src="img/howtouse_0458.png">
                                                        <h3>Create profile, add skills & experience, price you wish to command and your availability.</h3>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <h1>Find new leads</h1>
                                                        <img src="img/howtouse_0457.png">
                                                        <h3>100%unique, filtered and detailed leads
Browse what services people are looking for and share your profile with them.</h3>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <h1>Grow your business</h1>
                                                        <img src="img/howtouse_0456.png">
                                                        <h3>Offer your services,seek reviews and increase the value of your time.<br>Its all free!</h3>
                                                    </div>
													<div class="clearfix"></div>
             <div class="buttons padding-top text-center">
                <a href="register" class="btn btn-primary btn-lg" title="">Sign up</a>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <div class="container" style="width:99%;">
                                                <div class="row">
                                                    <div class="col-md-4" style="text-align:center;">
                                                        <h1>Search or Post your requirement</h1>
                                                        <img src="img/how_1.png">
                                                        <h3>Specify what you need, location, price you wish to pay and when you want the service</h3>
                                                    </div>
                                                     <div class="col-md-4" style="text-align:center;">
                                                        <h1>Connect and Hire</h1>
                                                        <img src="img/how_2.png">
                                                        <h3>Get introduced to quality service providers. Connect and transact offline</h3>
                                                    </div>
                                                     <div class="col-md-4" style="text-align:center;">
                                                        <h1>Review and return for more</h1>
                                                        <img src="img/how_3.png">
                                                        <h3>Review service providers and come back for more</h3>
                                                    </div>
													<div class="clearfix"></div>
             <div class="buttons padding-top text-center">
                <a href="register" class="btn btn-primary btn-lg" title="">Post your requirement</a>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div><!-- end tab-content -->
                                </div><!-- end tabbable -->
                </div>
            </div>
            
            
        </div>
    </div><!-- end grey-wrapper -->
    
    <section class="white-wrapper">
        <div class="container">
            <div class="general-title" >
                <h1 style="color:#FD6920;font-size:37px;">Sell or buy any service from any category</h1>
                <hr>
            </div><!-- end general title -->

           
            
            <div id="boxed-portfolio" class="portfolio_wrapper padding-top">
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 logo">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/trainer_and_tutor.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=1">View More</a>
                                    <h3>Trainers and Tutors</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
    
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 logo">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/business_consultants.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=2">View More</a>
                                    <h3>Business Consultant</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
                
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 app-design">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/it_and_marketing.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=3">View More</a>
                                    <h3>IT and Marketing</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->

                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 logo photography">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/fashion_and_lifestyle.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=4">View More</a>
                                    <h3>Fashion and Lifestyle</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
    
                
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 app-design photography">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/beauty_and_wellness.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=5">View More</a>
                                    <h3>Beauty & Wellness</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
    
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 photography">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/home_and_utility.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=6">View More</a>
                                    <h3>Home & Utility</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
                
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 app-design">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/event_and_entertainment.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=7">View More</a>
                                    <h3>Events & Entertainment</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
                
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 logo">
                    <div class="portfolio_item">
                        <div class="entry">
                            <img src="img/everything_else.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st btn btn-default" rel="bookmark" href="categories/category_listing.php?catid=8">View More</a>
                                    <h3>And Everything Else...</h3>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end portfolio_item -->
                </div><!-- end col-lg-4 -->
                
            </div>
        
        </div><!-- end container -->
    </section><!-- end white-wrapper -->

<div class="grey-wrapper">
    <div class="container">
        <div class="general-title" >
                <h1 style="color:#FD6920;text-align:center;font-size:37px;">Why you should use<br>#Sellyourtime</h1>
                <hr>
            </div><!-- end general title -->
        <div class="row">
            <div class="oIndexResources row">
    
            <section class="main">
            
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-1">              
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>India's first and largest local services market place</h3>
                                        
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        <h3>Qualified leads and quality service provider's suited to your budget</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        <h3>Grow your business and network with people  It's all free</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
            </section>
    </div>
        </div>
    </div>
</div>

<section id="one-parallax" class="parallax" style="background-image: url('img/gym.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
<div class="overlay">
<div class="container">
<div class="row">

<div class="col-md-6" >
<div class="general-title" >
<h1 style="color:#fff; font-size:30px;">See who all are selling their time</h1>
</div>
<div class="panel panel-default" style="background:#fff;">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt" style="font-size:21px;color:#fd6920;"></span><b style="font-size:21px;color:#fd6920;">Sellers</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">
<?php
$qw = mysql_query("SELECT * FROM `syt_registration` WHERE `title`='Seller'  ");
while($rr = mysql_fetch_assoc($qw))
{
?>
<li class="news-item">
<table cellpadding="4">
<tr>

<td style="font-weight: bold;"><b style="text-decoration:underline;"><?php echo $rr['firstname']." ".$rr['lastname']; ?> </b> signed up to sell his time under <?php echo $rr['subcategory']; ?> category in <?php echo $rr['address']; ?><a href="categories/profile.php?id=<?php echo $rr['id'] ?>">&nbsp;&nbsp;&nbsp;Read more...</a></td>
</tr>
</table>
</li>
<?php
}
?>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>

<div class="col-md-6" >
<div class="general-title" >
<h1 style="color:#fff; font-size:30px;">Services people are looking for</h1>
</div>
<div class="panel panel-default" style="background:#fff;">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt" style="font-size:21px;color:#fd6920;"></span><b style="font-size:21px;color:#fd6920;">Buyers</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">

<?php
$qw = mysql_query("SELECT * FROM `syt_post` ");
while($rr = mysql_fetch_assoc($qw))
{
	$iid = $rr['userid'];
	$eq = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$iid'");
	$arr_eq = mysql_fetch_array($eq);
	
?>
<li class="news-item">
<table cellpadding="4">
<tr>

<td style="font-weight: bold;"><b style="text-decoration:underline;"><?php echo $arr_eq['firstname']." ".$arr_eq['lastname']; ?></b> posted a service requirement under <?php echo $rr['subcategory']; ?> category in <?php echo $rr['zip']; ?><a href="categories/blog-post.php?postid=<?php echo $rr['id'] ?>">&nbsp;&nbsp;Read more...</a></td>
</tr>
</table>
</li>
<?php
}
?>
</ul>
</div>
</div>

</div>
<div class="panel-footer"> </div>
</div>
</div>

</div>
</div>

    </div>
    </section>

	<div class="grey-wrapper">
        	<div class="container">
				<div class="testimonial-widget">
                <h2 style="font-size: 40px;
font-weight: 600;
color: #fe6014;
">That's how we bring change to your lives.</h2>
					<div id="owl-testimonial" class="owl-carousel">
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/ua.png" width="78" height="80"/>&nbsp;&nbsp;A one stop shop for all local services!</p>
							<p class="lead">We bought a new house and wanted to find an interior designer with maximum experience and reasonable rates. We are happy we found SYT where we could find Interior designers to choose from.
It’s true; ultimately all are selling their time for whatever skills and experience they have.
SYT brings all service providers on one platform and makes our life easier.
</p>
							<p style="font-weight:400;">Urvashi Arora (Buyer), Gurgaon</p>
						</div><!-- end tweet -->
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/testimo.png"/>&nbsp;&nbsp;SYT helped my start up!</p>
							<p class="lead">I started my exports business and was looking for genuine consulting on foreign trade rules. I was happy to find sell your time where I could just post my requirement and a qualified foreign trade consultant contacted me. Best part was that it was as per my budget and in my area
</p>
							<p style="font-weight:400;">Business owner, Pranav Khanna (Buyer), Model Town Delhi</p>
						</div><!-- end tweet -->
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/tushar arora.JPG" width="78" height="80"/>&nbsp;&nbsp;I found a Golf Trainer!</p>
							<p class="lead">I wanted to learn Golf and it was very difficult to find a trainer, especially in my area and budget.I posted the requirement on Sell Your Time and I found a great golf coach.It was a great experience. It is a perfect one stop shop for all your learning needs and local services.
						</p>
							<p style="font-weight:400;">Economist in a bank, Tushar Arora (Buyer), Chanakyapuri, New Delhi</p>
						</div><!-- end tweet -->
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/Priyanka Pandey.jpg" width="78" height="80"/>&nbsp;&nbsp;I have my personal shopper!</p>
							<p class="lead">I am a working woman and hardly find time to go out shopping. 
I was amazed to see fashion stylists on Sell your time who could be my personal shopper. 
She came home and showed me what's latest and suits me at a minimum service charge.
There is so much you can find on this website. Great job SYT team!

						</p>
							<p style="font-weight:400;">Hospitality professional, Priyanka Pandey (Buyer), Kolkata</p>
						</div><!-- end tweet -->
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/testimo_5.png"/>&nbsp;&nbsp;SYT gives me filtered and qualified leads for free!</p> 
						<p class="lead">I have a web development company and i advertise on other sites for business leads. But I used to get call from any kind of buyer. I registered on SYT and made a profile according to the leads I want to get.     I am happy I now get only filtered and qualified leads.

						</p>
							<p style="font-weight:400;">Web Developer, Akshat Rana (Seller), Pitampura , New Delhi</p>
						</div><!-- end tweet -->
						
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/testimo.png"/>&nbsp;&nbsp;A Mecca for freelancers!</p> 
						<p class="lead">I am a freelancer and experienced in digital marketing. I wanted a platform where I could advertise for free and get some business on per hour or per project basis.
SYT is the perfect platform for freelancers and companies to look for small and big business leads.


						</p>
							<p style="font-weight:400;">Freelance Digital Marketer, Pooja Malhotra (Seller), Rajouri Garden, New Delhi</p>
						</div><!-- end tweet -->
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/navodit.png"/>&nbsp;&nbsp;I earn on SYT, no pocket money from parents!</p> 
						<p class="lead">SYT is an amazing website. 
I am a 3rd year college student and I have signed up as guitarist and also under part time sales category. 
I can make so much for my pocket money that I do not need to trouble my parents. Love this portal!

						</p>
							<p style="font-weight:400;">Part times sales person, Guitarist, Navodit Sharma (Seller), Kamla Nagar New Delhi</p>
						</div><!-- end tweet -->
						
						
						
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/Siddharth Rathore.JPG" width="78" height="80"/>&nbsp;&nbsp;SYT is a revolutionary platform for selling skills, knowledge and experience</p> 
						<p class="lead">SYT has revolutionized the services space. I am a trainer for Civil Services and SYT allows me to find and teach Students in my area, as per the charge i want and my availability.
No hassle of going to different institutes and websites to market my experience by paying money.
The variety of service providers is huge and unique. I can learn so much more across skills.

						</p>
							<p style="font-weight:400;">IAS Coach,Professor, Siddharth Rathore (Seller), South ex, New Delhi</p>
						</div><!-- end tweet -->
						
						
						<div class="testimonial">
						<p style="color:green;font-size:20px;"><img src="img/testimo.png"/>&nbsp;&nbsp;SYT Club is a unique and premium service</p> 
						<p class="lead">I run and sell businesses. It’s good to be known in the industry but as I cannot meet everyone, I am on Sell Your Time club. If anyone wishes to meet me, they can see my preferences and the charges per hour. If the agenda of meeting suits both of us, we can meet at a mutually agreed time and place.         It’s amazing to see web platform eases this networking process
so much by qualifying both parties online.
I wish to be on SYT and bring other people on my network too.


						</p>
							<p style="font-weight:400;">Serial Entrepreneur, SYT Club Member, New Delhi</p>
						</div><!-- end tweet -->
						
						
					</div><!-- end owl-testimonial -->
				</div><!-- end testimonial widget -->             
            </div><!-- end container -->
    	</div><!-- end overlay -->
    
   
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
                        <h3><div class="club">Sell your time Club</a></div></h3>
						<span style="color:gold">A premium club where you can do paid networking and meet almost anyone by paying the price of their time.<br><a href="club.php">Join sell your time club</a></span>
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
                            <input type="text" id="subscribe_email" class="form-control" placeholder="Enter your email address"> 
                            <div id="subscribe" class="btn btn-primary pull-right">Subscribe</div>    
                        </div><!-- end newsletter form -->
						<div style="color:green" id="subscribe_result">
						</div>
					</div>
					<script>
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
					});
					</script>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div>
        
  <!-- Main Scripts-->
 <!-- <script src="js/jquery.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio-masonry.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:4000,
			startwidth:1275,
			startheight:525,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on"
		});
	});	//ready
  </script>

  <script type="text/javascript">
    jQuery(function () {
       
        
         jQuery(".demo1").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
            pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 3000,
            onToDo: function () {
                //console.log(this);
            }
        });

        jQuery(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
            pauseOnHover: true,
            navigation: false,
            direction: 'down',
            newsTickerInterval: 3000,
            onToDo: function () {
                //console.log(this);
            }
        });

       
    });
</script>
<script>
var selected;
function fill_op(city)
	{
		$("#searchPinCodeLocality1").val(city);
		$("#search_down2").hide();
	}
	
	function fill(city)
	{
		$("#searchPinCodeLocality").val(city);
		$("#search_down1").hide();
	}
	
$(document).ready(function(){
	
	$("#search_Result").click(function(){
		var search = $("#searchPinCodeLocality").val();
		var sell = $("#sel1").val();
		var sell1 = $("#sel11").val();
		
		var d1 = "search="+search+"&sell="+sell+"&sell1="+sell1;
	
		
			if(sell1 == "Trainers and Tutors" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=1";
			}
			else if(sell1 == "Trainers and Tutors" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=1";
			}
			
			//-------------------------------------------------------------
			else if(sell1 == "Business Consultants" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=2";
			}
			else if(sell1 == "Business Consultants" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=2";
			}
			//-------------------------------------------------------------
			else if(sell1 == "IT and Marketing" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=3";
			}
			else if(sell1 == "IT and Marketing" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=3";
			}
			//-------------------------------------------------------------
			else if(sell1 == "Fashion and Lifestyle" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=4";
			}
			else if(sell1 == "Fashion and Lifestyle" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=4";
			}
			//-------------------------------------------------------------
			else if(sell1 == "Beauty and Wellness" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=5";
			}
			else if(sell1 == "Beauty and Wellness" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=5";
			}
			//-------------------------------------------------------------
			else if(sell1 == "Home and Utility" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=6";
			}
			else if(sell1 == "Home and Utility" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=6";
			}
			//-------------------------------------------------------------
			else if(sell1 == "Events & Entertainment" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=7";
			}
			else if(sell1 == "Events & Entertainment" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=7";
			}
			//-------------------------------------------------------------
			else if(sell1 == "Other" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=8";
			}
			else if(sell1 == "Other" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=8";
			}
			//-------------------------------------------------------------
			
	});
	
	$(".searchicon2").click(function(){
	var search = $("#searchPinCodeLocality12").val();
		var sell = $("#sel12").val();
		var sell1 = $("#sel112").val();
		
		var d1 = "search="+search+"&sell="+sell+"&sell1="+sell1;
		
		
			if(sell1 == "Trainers and Tutors" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=1&location_filled="+search;
			}
			else if(sell1 == "Trainers and Tutors" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=1&location_filled="+search;
			}
			
			//-------------------------------------------------------------
			else if(sell1 == "Business Consultants" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=2&location_filled="+search;
			}
			else if(sell1 == "Business Consultants" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=2&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "IT and Marketing" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=3&location_filled="+search;
			}
			else if(sell1 == "IT and Marketing" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=3&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "Fashion and Lifestyle" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=4&location_filled="+search;
			}
			else if(sell1 == "Fashion and Lifestyle" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=4&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "Beauty and Wellness" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=5&location_filled="+search;
			}
			else if(sell1 == "Beauty and Wellness" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=5&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "Home and Utility" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=6&location_filled="+search;
			}
			else if(sell1 == "Home and Utility" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=6&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "Events & Entertainment" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=7&location_filled="+search;
			}
			else if(sell1 == "Events & Entertainment" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=7&location_filled="+search;
			}
			//-------------------------------------------------------------
			else if(sell1 == "Other" && sell=="Sell a service")
			{
				window.location="categories/lead_listing.php?catid=8&location_filled="+search;
			}
			else if(sell1 == "Other" && sell=="Buy a service")
			{
				window.location="categories/category_listing.php?catid=8&location_filled="+search;
			}
			
});
	
	
	var selected;
			$(window).keydown(function(e){
				if(e.keyCode==40)
				{
					if(selected)
					{
						next=selected.next();
						selected.removeClass('selected');
						if(next.length>0)
						{
							selected=next.show().addClass('selected').focus();
							var c = $(selected).attr("cc");
							$("#searchPinCodeLocality").val(c);
						}
						else
						{
							selected = $('#search_down1 p').eq(0).addClass('selected').focus();
							var c = $("#search_down1 p").attr("cc");
							$("#searchPinCodeLocality").val(c);
						}
					}
					else
					{
						selected = $('#search_down1 p').eq(0).addClass('selected').focus();
						var c = $("#search_down1 p").attr("cc");
						$("#searchPinCodeLocality").val(c);
					}
				}
				
				else if(e.keyCode==38)
				{
					if(selected)
					{
						prev=selected.prev();
						selected.removeClass('selected');
						if(prev.length>0)
						{
							selected=prev.addClass('selected').focus();
						}
						else
						{
							selected = $('#search_down1 p').eq(7).addClass('selected').focus();
						}
					}
					else
					{
						selected=$('#search_down1 p').eq(7).addClass('selected').focus();
					}
				}
			});
	
	
	
	$("#searchPinCodeLocality").keyup(function(e){
		
		if(e.keyCode!=38 && e.keyCode!=40)
		{
			var search = $("#searchPinCodeLocality").val();
			var sell = $("#sel1").val();
			var sell1 = $("#sel11").val();
			
			var d = "search="+search+"&sell="+sell+"&sell1="+sell1;
			
			$.ajax
			({
				type: "POST",
				url: "be_index.php",
				data: d,
				cache: false,
				success: function(html)
				{
					$("#search_down1").html(html).show();
				}
			});
		}
		
	});
	
	$("#searchPinCodeLocality").keyup(function(e){
	
		if(e.keyCode == 13)
		{
			window.location="categories/category_listing.php?catid=1";
		}
	});
	
	$("#searchPinCodeLocality1").keyup(function(e){
		
		var search = $("#searchPinCodeLocality1").val();
		var sell = $("#sel1").val();
		var sell1 = $("#sel11").val();
		
		var d = "search="+search+"&sell="+sell+"&sell1="+sell1;
		
		$.ajax
		({
			type: "POST",
			url: "be_index1.php",
			data: d,
			cache: false,
			success: function(html)
			{
				$("#search_down2").html(html).show();
			}
		});
		
	});
	$("body").click(function(){
		$("#search_down1").hide();
	});
});
</script>
  <!-- Royal Slider script files -->
  <script src="royalslider/jquery.easing-1.3.js"></script>
  <script src="royalslider/jquery.royalslider.min.js"></script>
  <script>
	jQuery(document).ready(function($) {
	  var rsi = $('#slider-in-laptop').royalSlider({
		autoHeight: false,
		arrowsNav: false,
		fadeinLoadedSlide: false,
		controlNavigationSpacing: 0,
		controlNavigation: 'bullets',
		imageScaleMode: 'fill',
		imageAlignCenter: true,
		loop: false,
		loopRewind: false,
		numImagesToPreload: 6,
		keyboardNavEnabled: true,
		autoScaleSlider: true,  
		autoScaleSliderWidth: 486,     
		autoScaleSliderHeight: 315,
	
		/* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
		imgWidth: 792,
		imgHeight: 479
	
	  }).data('royalSlider');
	  $('#slider-next').click(function() {
		rsi.next();
	  });
	  $('#slider-prev').click(function() {
		rsi.prev();
	  });
	});
  </script>

  <!-- Affix menu -->
<script>
	(function($) {
	  "use strict";
			$("#header-style-1").affix({
			offset: {
			  top: 100
			, bottom: function () {
				return (this.bottom = $('#copyrights').outerHeight(true))
			  }
			}
		})
	})(jQuery);
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59441940-1', 'auto');
  ga('send', 'pageview');

</script>
  <!-- Demo Switcher JS -->
  <script type="text/javascript" src="switcher/js/fswit.js"></script>
  <script src="switcher/js/bootstrap-select.js"></script>

</body>
</html>
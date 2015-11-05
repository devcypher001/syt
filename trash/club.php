<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>SellYourTime | How It Works</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">
  
  <!-- Carousel Slider -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  
  <!-- Flex Slider -->
  <link href="css/flexslider.css" rel="stylesheet">
  
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

<style type="text/css">
    
    @media only screen and (min-width : 1199px) and (max-width : 1800px) {
        .screen1{
            width: 58%;
        }

        }
    @font-face {
    font-family: Kaushan;
    src: url(register/fonts/KaushanScript-Regular.ttf);
}
</style>
</head>
<body>

    <header id="header-style-1" style="background:#4753a3;">
        <div class="container-fluid">
        <div class="row">

            <nav class="navbar yamm navbar-default navbar-fixed-top" style="background:black;">
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
                   
                    
                </div><!-- end navbar-header -->
                
                <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right" >
                    <ul class="nav navbar-nav">
                      <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:rgb(255, 174, 0);">Categories <div class="arrow-up"></div></a>
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
                                                <li><a href="categories/category_listing.php?catid=9">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2">Business consultants</a></li>
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
                        <li><a href="#" style="color:rgb(255, 174, 0);">How It Works</a></li>
                        <?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="dashboard/index.php" style="color:rgb(255, 174, 0);"><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="dashboard/logout.php" style="color:rgb(255, 174, 0);">Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="login" style="color:rgb(255, 174, 0);;">Login</a></li>
								 <li ><a href="register" style="color:rgb(255, 174, 0);">Sign Up</a></li>
						<?php
							}
						?>
                        
                    </ul><!-- end navbar-nav -->
                </div><!-- #navbar-collapse-1 -->

                

                </nav><!-- end navbar yamm navbar-default -->
        </div><!--end Row-->
        </div><!-- end container -->
    </header><!-- end header-style-1 -->
    
    <section class="my-wrapper">
        <div class="container">
            <div class="general-title">
                <h2>Welcome to the exclusive<br><span style="font-family: Kaushan;"> Sell Your Time Club<span></h2>
                <hr>
                
            </div><!-- end general title -->
            
            
        </div><!-- end container -->
    </section><!-- end white wrapper -->

    <!--Seller-->
    <!--First-->
	<section class="grey-wrapper jt-shadow">
    	<div class="container">
        	<div class="row">
            
                <div class="col-md-12 col-xs-12 ">
                    <h1 style="font-size:30px;text-align:center;">India's first premium networking club where the accomplished,famous and important people sell their time to meet those with common interests or agenda.</h1>
                </div>
                <div class="col-md-8 col-xs-12 col-md-offset-2" style="text-align: center;font-size: 30px;font-weight: 400;line-height: 1.5;font-family: Kaushan;">
                    An invitation only Club.<br>Register your interest with us and we shall contact you.
                </div>
            </div>
		</div><!-- end container -->
    </section><!-- end grey-wrapper -->

	<section id="two-parallax" class="parallax" style="background-image: url('img/club.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="overlay">
        	<div class="container" style="height:220px;">
				
            </div><!-- end container -->
    	</div><!-- end overlay -->
    </section><!-- end transparent-bg -->




    <!--Third-->
    <section class="grey-wrapper jt-shadow">
        <!-- Contact Form - START -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               
                    <fieldset>
                       

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center" style="margin-left: 10.666667%;"></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center" style="margin-left: 10.666667%;"></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center" style="margin-left: 10.666667%;"></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center" style="margin-left: 10.666667%;"></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" maxlength="10">
                            </div>
                        </div>
						
						<div class="input-group" style="margin-bottom: 14%;"></div>
						
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                          Interested to :       
						<label class="radio-inline">
						  <input type="radio" name="optradio" id="selltime" value="Sell">Sell Time
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio" id="buytime" value="Buy">Buy Time
						</label>
					   
						</div>
                        </div>
						
						<div class="input-group" style="margin-bottom: 5%;"></div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                
            </div>
        </div>
    </div>
</div>


    </section><!-- end grey-wrapper -->

	
	
	<section id="two-parallax" class="parallax" style="background-image: url('img/club1.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="overlay">
        	<div class="container" style="height:220px;">
				
            </div><!-- end container -->
    	</div><!-- end overlay -->
    </section><!-- end transparent-bg -->

	
	
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
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
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
                        <h3><div class="club">Sell your time Club</div></h3>
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
					
                </div><!-- end widget -->
            </div><!-- end columns --> 
    	</div><!-- end container -->
    </footer><!-- end #footer-style-1 -->    

<div id="copyrights">
        <div class="container">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="copyright-text">
                    <p>Copyright © 2014 - Designed by Sell Your Time</p>
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
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on"
		});
	});	//ready
  </script>
    
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
					
					<script>
					
					
		$("#phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
			$("#lname").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
		
		$("#fname").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
					
					$(document).ready(function(){
						$("#submit").click(function(){
							var first = $("#fname").val();
							var last = $("#lname").val();
							var email = $("#email").val();
							var phone = $("#phone").val();
							var st = $("#selltime").val();
							
							
							var dd = "first="+first+"&last="+last+"&email="+email+"&phone="+phone+"&st="+st;
							
							if(first=="" || last=="" || email=="" || phone=="")
							{
								alert("Please fill all fields");
							}
							else
							{
								$.ajax
								({
									type: "POST",
									url: "be_club.php",
									data: dd,
									cache: false,
									success: function(html)
									{
										if(html==1)
										{
											alert("Thank you for your interest.Someone from SYT team will contact you soon.")
											var first = $("#fname").val('');
											var last = $("#lname").val('');
											var email = $("#email").val('');
											var phone = $("#phone").val('');
										}
										else
										{
											alert("Internal error")
										}
									
									}
								});
							}
							
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
  
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="js/jquery.flexslider.js"></script>
	<script>
	(function($) {
	  "use strict";
        $(window).load(function() {
            $('#aboutslider').flexslider({
                animation: "fade",
                controlNav: true,
                animationLoop: true,
                slideshow: true,
                sync: "#carousel"
            });
        });
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
    
</body>
</html>
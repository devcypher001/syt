<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>SellYourTime | Terms & Services</title>

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
   
</style>
</head>
<body>

    <header id="header-style-1" style="background:#4753a3;">
        <div class="container-fluid">
        <div class="row">

            <nav class="navbar yamm navbar-default navbar-fixed-top" style="background:#4753a3;">
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
                      <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff;">Categories <div class="arrow-up"></div></a>
                            <ul class="dropdown-menu" style="font-size:22px;">
                                 <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=1" class="ch" >Trainers and Tutors</a></li>
                                                <li><a href="categories/category_listing.php?catid=3" >IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="categories/category_listing.php?catid=6" >Home and Utility</a></li>
                                                <li><a href="categories/category_listing.php?catid=9">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2">Bussiness Consultants</a></li>
                                                <li><a href="categories/category_listing.php?catid=4" target="_blank">Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=5" >Beauty and Wellness</a></li>
                                                <li><a href="categories/category_listing.php?catid=9">Social Causes</a></li>
                                           </ul> 
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
                        </li><!-- end drop down -->
                        <li><a href="howitworks.php" style="color:#fff;" target="_blank">How It Works</a></li>
                        <?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="dashboard/index.php" style="color:#fff;"><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="dashboard/logout.php" style="color:#fff;" >Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="login" style="color:#fff;" target="_blank">Login</a></li>
								 <li ><a href="register" style="color:#fff;" target="_blank">Sign Up</a></li>
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
                <h2>Sellyourtime.in Terms of Use</h2>
                <hr>
                
            </div><!-- end general title -->
            
            
        </div><!-- end container -->
    </section><!-- end white wrapper -->

    <section class="my-wrapper" style="background:white;">
        <div class="container">
		
      
        <br>
		<div style="font-size: 17px;color:black;text-align:justify;">
			We thank you for having trust in us and our processes. We assure you that we are committed to maintain privacy of our users. That's why we insist upon the highest standards of customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.<br>
			
			Sellyourtime.in is an online marketplace for local services that connects its members through a variety of services that it provides.. This document covers the terms and conditions under which these services are provided.<br>
•	Your registration as a member of Sellyourtime.in or the use of any of the features and services on Sellyourtime.in, either as a registered member or as a visitor constitutes automatic acceptance of these terms and conditions.<br>
•	Sellyourtime.in reserves the right to update the terms, conditions and notices of this agreement without notice to you. It is your responsibility to periodically review the most current version of this Agreement.<br>
•	By accessing or using the Sites, Content, or Services, you agree to be bound by these Terms of Service.<br>
•	If you do not agree with any of the terms and conditions of Sellyourtime.in, do not register and you will not be authorized to use Sellyourtime.in services.<br>
•	The views expressed on the website are not those of Sellyourtime.in, and any issues in them belong to the respective contributors.<br>
•	Through the use of this site, you agree to hold Sellyourtime.in harmless and its sponsors, owners, shareholders or employees against any claims.<br>
•	You are responsible for safeguarding the password that you use to access the Sites, Content and Services. You agree not to disclose your password to any third party. You agree to take sole responsibility for any activities or actions under your password, whether or not you have authorized such activities or actions.<br>
•	You may not make any content item originating from Sellyourtime.in available for public access by any means whatsoever without obtaining prior written permission from Sellyourtime.in.<br>
•	Sellyourtime.in provides a variety of forums for its members to express themselves in the form of blogs, comments, reviews and photographs. You truthfully assert that the content being contributed is yours and that you own the copyright to the content.<br>
•	The content on the website is posted by Sellyourtime.in, visitors and its members. Sellyourtime.in will attempt to ensure the integrity and the accuracy of the Site in the Content and or Services but it does not guarantee that the information is accurate or complete or current. Sellyourtime.in can not be held liable for inaccuracy of any data listed on the website or any damage caused by the use of inaccurate data. It is Sellyourtime.in's policy to correct any inaccuracy reported within 7 days.<br>
•	The opinions and reviews expressed on the site belong to the users and Sellyourtime.in cannot be held liable in any way about the content of the opinions and reviews. The platform allows users to express their views about different schools, teachers and training centers.<br>
•	Information about the service providers posted on the site is obtained from them via a sign up process which authenticates the user by means of email and phone number verification.<br>
•	Sellyourtime.in should not be thought of as the authority and the final guide in your decision making.<br>
•	Sellyourtime.in at its sole discretion may edit, delete or block access to any Content including Member Posted Content, without notice and without liability. We will however make reasonable efforts to inform you of the changes.<br>
•	By uploading the files to support your services and photos to authenticate your profile, you give Sellyourtime.in the right to use the contents on Sellyourtime.in website as well as on any Sellyourtime marketing material.<br>
While using the web site and engaged in any form of communication on any of the forums, you agree not to:<br>
•	Post, publish or transmit any messages that is false, misleading, defamatory, harmful, threatening, abusive, harassing, defamatory, invades another's privacy, offensive, promotes racism, hatred or harm against any individual or group or religion or caste, infringes another's rights including any intellectual property rights or copyright or trademark, violates or encourages any conduct that would violate any applicable law or regulation or would give rise to civil liability.<br>
•	Upload or post otherwise make available any content that you do not have a right to make available, under any law or under contractual or fiduciary relationships.<br>
•	Upload or post or otherwise make available any Content that infringes any patent, trademark, trade secret, copyright or other proprietary rights of any party. You may, however, post excerpts of copyrighted material so long as they adhere to Fair Use guidelines.<br>
•	Collect screen names and email addresses of members for purposes of advertisement, solicitation or spam are prohibited.<br>
•	Attempt to probe, scan, or test the vulnerability of website or breach any security or authentication measures.<br>
•	Access or search the Sites Content or Services with any engine, software, or tool.<br>
•	Send unsolicited email, junk mail, spam, or chain letters, or promotions or advertisements for products or services.<br>
•	Reformat or frame any portion of the web pages that are part of the Sellyourtime.in Site without a written agreement.<br>
•	Create user accounts by automated means or under false or fraudulent pretenses.<br>
•	Post text, messages, graphics or materials that are sales offers, advertisements, or promotions for products or services.<br>
•	Sellyourtime.in reserves the right at any time and from time to time to modify or discontinue, temporarily or permanently, the Services with or without notice.<br><br>
Venue Only
If you enter into correspondence or engage in commercial transactions with third parties in connection with your use of the Sellyourtime Service, such activity is solely between you and the applicable third party. Sellyourtime shall have no liability, obligation or responsibility for any such activity. You hereby release Sellyourtime.in from all claims arising from such activity.<br><br>
Ownership Except for the Content submitted by members or users, the Sellyourtime Service and all aspects thereof, including all copyrights, trademarks, and other intellectual property or proprietary rights therein, is owned by Sellyourtime.in or its licensors. You acknowledge that the Sellyourtime.in and any underlying technology or software used in connection with the Sellyourtime Service contain Sellyourtime's proprietary information. You may not modify, reproduce, distribute, create derivative works of, publicly display or in any way exploit, any of the content, software, and/or materials available on the Sellyourtime.in Site, or Sellyourtime Services in whole or in part except as expressly provided in Sellyourtime's policies and procedures. Except as expressly and unambiguously provided herein, Sellyourtime.in and its suppliers do not grant you any express or implied rights, and all rights in the Sellyourtime.in Service not expressly granted by Sellyourtime.in to you are retained by Sellyourtime.in.

        </div>
		
		
		
		
        </div><!-- end container -->
    </section><!-- end white wrapper -->


	
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
</body>
</html>
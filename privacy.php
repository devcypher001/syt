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
                                               <li><a href="categories/category_listing.php?catid=6">Home and Utility</a></li>
                                                <li><a href="categories/category_listing.php?catid=9" >Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2" >Bussiness Consultants</a></li>
                                                <li><a href="categories/category_listing.php?catid=4">Fashion and Lifestyle</a></li>
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
                        <li><a href="howitworks.php" style="color:#fff;">How It Works</a></li>
                        <?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="dashboard/index.php" style="color:#fff;" ><?php echo $_SESSION['syt_email']; ?></a></li>
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
                <h2>Sell Your Time Privacy Policy </h2>
                <hr>
                
            </div><!-- end general title -->
            
            
        </div><!-- end container -->
    </section><!-- end white wrapper -->

    <section class="my-wrapper" style="background:white;">
        <div class="container">
        <br>
		<div style="font-size: 17px;color:black;text-align:justify;">
		We thank you for having trust in us and our processes. We assure you that we are committed to maintain privacy of our users. That's why we insist upon the highest standards of customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.
        </div>
		<br>
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Note:
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;">
		Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.
By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.
By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use

        </div>
		<br>
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			What information do we collect?
        </div>
		<br>
		<div style="font-size: 17px;color:black;text-align:justify;">
		When you use our Website, we store your browsing information. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.
		<br><br>
		When you use our Website, we store your browsing information. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.<br><br>
i.	Sellyourtime collects your information when you register on the website and when you visit the website pages.<br>
ii.	Personal Information: We collect the following types of personal information in order to provide you with the use and access to the Sellyourtime site, services and tools, and for any additional purposes set out in this Privacy Policy:<br>&nbsp;&nbsp;&nbsp;
•	Name, date of birth, gender and contact information, such as email address, phone number, mobile telephone number, physical address.<br>&nbsp;&nbsp;&nbsp;
•	personal information you provide to us through correspondence, messages, emails, dispute resolution, or shared by you from other social applications, services or websites;<br>&nbsp;&nbsp;&nbsp;
•	additional personal information we ask you to submit to authenticate yourself if we believe you are violating site policies (for example, we may ask you to send us an ID to answer additional questions online to help verify your identity);<br>&nbsp;&nbsp;&nbsp;
•	information from your interaction with our sites, services, content and advertising, including, but not limited to, device ID, device type, geo-location information, computer and connection information, statistics on page views, traffic to and from the sites, ad data and standard web log information.<br>
iii.	Aggregate Information: Sellyourtime collects non-identifying, general, generic and aggregate information to better design our Web site and services.<br>
iv.	Non-Personal Information: Sellyourtime  may collect non-personal information as you use Sellyourtime. When you use the site, Sellyourtime, third-party service providers (e.g. Google Analytics), and partners may receive and record non-personal information from cookies, server logs, and similar technology from your browser or mobile device, including your IP address.<br>
v.	We may combine some Non-Personal Information with the Personal Information we collect. Where we do so, we will treat the combined information as Personal Information if the resulting combination may be used to readily identify or locate you in the same manner as Personal Information alone.
<br><br>
We may automatically track certain information about you based upon your behavior on our Website. We use this information to do internal research on our users' demographics, interests, and behavior to better understand, protect and serve our users. This information is compiled and analyzed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.

If you choose to post reviews and tips about service providers or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law. If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.

        </div>
        <br>
		
		
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Sharing of personal information
        </div><br>
		        <div style="font-size: 17px;color:black;text-align:justify;">
		We will share personal information with companies, organizations or individuals outside of Sellyourtime if we have a good-faith belief that access, use, preservation or disclosure of the information is reasonably necessary to:<br>
a.	meet any applicable law, regulation, legal process or enforceable governmental request.
b.	enforce applicable Terms of Service, including investigation of potential violations.<br>
c.	detect, prevent, or otherwise address fraud, security or technical issues.<br>
d.	protect against harm to the rights, property or safety of Sellyourtime, our users or the public as required or permitted by law.<br>
We may share aggregated, non-personally identifiable information publicly and with our partners – agents or connected sites. For example, we may share information publicly to show trends about the general use of our services. We may also share consolidated information provided by like-minded users without ever taking individual names, email ids or other contact details.
If Sellyourtime is involved in a merger, acquisition or asset sale, we will continue to ensure the confidentiality of any personal information and give affected users notice before personal information is transferred or becomes subject to a different privacy policy.


        </div>
		<br>
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Cookies
        </div><br>
		<div style="font-size: 17px;color:black;text-align:justify;">
		We use data collection devices such as "cookies" on certain pages of the Website to help analyze our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a "cookie". Additionally, you may encounter "cookies" or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties. If you choose to buy on the Website, we collect information about your buying behavior.
		<br>
		If you transact with us, we collect some additional information, such as a billing address, a credit / debit card number and a credit / debit card expiration date and/ or other payment instrument details.
		<br>
		The third party vendors (e.g. Google Analytics) may receive and record non-personal information from cookies, server logs, and similar technology from your browser or mobile device, including your IP address. You may opt out of Google's use of cookies by visiting the Google advertising opt-out page.
		<br>
		If you access our Services with your login credentials from a social networking site (e.g., Facebook or Twitter) or if you otherwise agree to associate your Sellyourtime account with a social networking account, we may receive personal information about you from such social networking site, in accordance with the terms of use and privacy policy of the social networking site. For example, Facebook may share with us your friend list, birthday, information about the interests of you or your friends or other personal information, in order to help us establish your account, tailor services to you and find other current or potential site users that you know. We may add this information to the information we have already collected from you via other aspects of the Site. You are also subject to the social networking site's terms of use and privacy policy. We use the OAuth (open authorisation) protocol to enable us to access this information without collecting your password when you agree allow another application to access your account information.

        </div>
		<br>
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Sharing of personal information
        </div>
		<br>
		 <div style="font-size: 17px;color:black;text-align:justify;">
			We will share personal information with companies, organizations or individuals outside of Sellyourtime if we have a good-faith belief that access, use, preservation or disclosure of the information is reasonably necessary to:<br>
a.	meet any applicable law, regulation, legal process or enforceable governmental request.<br>
b.	enforce applicable Terms of Service, including investigation of potential violations.<br>
c.	detect, prevent, or otherwise address fraud, security or technical issues.<br>
d.	protect against harm to the rights, property or safety of Sellyourtime, our users or the public as required or permitted by law.<br>
We may share aggregated, non-personally identifiable information publicly and with our partners – agents or connected sites. For example, we may share information publicly to show trends about the general use of our services. We may also share consolidated information provided by like-minded users without ever taking individual names, email ids or other contact details.
If Sellyourtime is involved in a merger, acquisition or asset sale, we will continue to ensure the confidentiality of any personal information and give affected users notice before personal information is transferred or becomes subject to a different privacy policy.


        </div>
		<br>
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Accessing and updating your Information
        </div>
      <br>
		<div style="font-size: 17px;color:black;text-align:justify;">
		You can update your information through your account profile settings. If you believe that personal information we hold about you is incorrect, incomplete or inaccurate, then you may request us to amend it.
Additionally, You may request access to any personal information we hold about you at any time by contacting us at privacy@sellyourtime.in . Where we hold information that you are entitled to access, we will try to provide you with suitable means of accessing it (for example, by mailing or emailing it to you). We may charge you a fee to cover our administrative and other reasonable costs in providing the information to you. We will not charge for simply making the request and will not charge for making any corrections to your personal information.
There may be instances where we cannot grant you access to the personal information we hold. For example, we may need to refuse access if granting access would interfere with the privacy of others or if it would result in a breach of confidentiality. If that happens, we will give you written reasons for any refusal.

        </div>
		
		<br>
		
		
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Security Precautions
        </div><br>
		<div style="font-size: 17px;color:black;text-align:justify;">
		Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access. For example, we use McAfee Secure to protect users against identity theft & spyware; etc.

        </div>
		
		<br>
		
		
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Google Analytics
        </div><br>
		<div style="font-size: 17px;color:black;text-align:justify;">
			1.	We have implemented and use Display Advertising through Remarketing with Google Analytics<br>
2.	You can opt-out of Google Analytics for Display Advertising and customize Google Display Network ads using the Ads Preferences Manager.<br>
3.	Third-party vendors, including Google, may show our ads on sites across the Internet.<br>
4.	We and third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookie) and third-party cookies <br>(such as the DoubleClick cookie) together to inform, optimize, and serve ads based on someone's past visits to our website.

        </div>
		
		
		<br>
		
		
		<div style="font-weight: bold;font-size: 21px;text-decoration: underline;color:black;">
			Your Consent
        </div><br>
		<div style="font-size: 17px;color:black;text-align:justify;">
			By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to your consent for sharing your information as per this privacy policy. If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.

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
                    <p>All rights reserved @ 2015 Sell Your Time.</p>
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
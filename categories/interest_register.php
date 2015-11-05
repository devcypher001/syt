<?php
session_start();
include 'connect.php';
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
  <link href="../css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="../style.css" rel="stylesheet">
  
  <!-- Carousel Slider -->
  <link href="../css/owl-carousel.css" rel="stylesheet">
  
  <!-- Flex Slider -->
  <link href="../css/flexslider.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="../css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- SLIDER ROYAL CSS SETTINGS -->
  <link href="../royalslider/royalslider.css" rel="stylesheet">
  <link href="../royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="../rs-plugin/css/settings.css" media="screen" />
        
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

    <header id="header-style-1">
        <div class="container-fluid">
        <div class="row">

            <nav class="navbar yamm navbar-default navbar-fixed-top" style="background:#4753a3;">
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
                   
                    
                </div><!-- end navbar-header -->
                
                <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right" >
                    <ul class="nav navbar-nav">
                      <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Categories <div class="arrow-up"></div></a>
                            <ul class="dropdown-menu" style="font-size:22px;">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=1" class="ch" target="_blank">Trainers and Tutors</a></li>
                                                <li><a href="category_listing.php?catid=3" target="_blank">IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="category_listing.php?catid=6" target="_blank">Home and Utility</a></li>
                                                <li><a href="category_listing.php?catid=9" target="_blank">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=2" target="_blank">Business consultants</a></li>
                                                <li><a href="category_listing.php?catid=4" target="_blank">Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=5" target="_blank">Beauty and Wellness</a></li>
                                                <li><a href="category_listing.php?catid=9" target="_blank">Social Causes</a></li>
                                           </ul> 
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
                        </li><!-- end drop down -->
                        <li><a href="#" style="color:white;" target="_blank">How It Works</a></li>
                        <?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="../dashboard/index.php" style="color:white;" target="_blank"><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="../dashboard/logout.php" style="color:white;" target="_blank">Logout</a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="../login" style="color:white;" target="_blank">Login</a></li>
								 <li ><a href="../register" style="color:white;" target="_blank">Sign Up</a></li>
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
            <div class="general-title" style="margin-top: 37px;
margin-bottom: -28px;">
                <h2>Post Your Interest</h2>
                <hr>
                
            </div><!-- end general title -->
            
            
        </div><!-- end container -->
    </section><!-- end white wrapper -->
	<section style="background-image: url('../img/effect4.jpg');" >
		<div class="overlay">
        	<div class="container" style="height:400px; padding-top: 2%;">
		
				<div class="form-horizontal">
				
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="email" style="color: #fff;">Name :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="name" placeholder="Enter full name">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="email" style="color: #fff;">Select Category :</label>
    <div class="col-sm-4">
    <select name="country" class="form-control" id="category">
    <option disabled="" selected="" value="">Select Category</option>
	<?php
	$query = mysql_query("SELECT * FROM `syt_category` WHERE 1");
	while($r = mysql_fetch_assoc($query))
	{
	?>
			 <option value="<?php echo $r['category'];?>" catid=<?php echo $r['id'];?>><?php echo $r['category'];?></option>
	<?php
	}
	?>
        
     </select>
    </div>
  </div>
  
  <div class="form-group" style="display:none;" id="subcategory">
    <label class="control-label col-sm-2 col-sm-offset-2" for="email" style="color: #fff;">Select Subcategory :</label>
    <div class="col-sm-4">
    <select name="country" class="form-control"  id="subcategory1">
                                                
    </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="pwd" style="color: #fff;">Email :</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="email" placeholder="Enter email id">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="email" style="color: #fff;">Phone Number:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="phone" placeholder="Enter phone number" maxlength="13" value="91">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="email" style="color: #fff;">Post your requirement :</label>
    <div class="col-sm-4">
       <textarea class="form-control" rows="5" id="requirement"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default" id="submit"> <a data-toggle="modal" href="#myModal">Submit</a> </button>
    </div>
  </div>
</div>
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
  
					
	<script>
		function ValidateEmail(email) {
			var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
		}			
					
		$("#phone").keypress(function(e){
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
			{
				return false;
			}
		});
		
			$("#name").keypress(function(e){
			if ( e.which >= 48 && e.which <= 57 )
			{
				return false;
			}
		});
					
		
		$("#category").change(function(){
				
				var s = $("#category option:selected").attr("catid");
				
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
						url:"../register/be_register.php",
						data:"s="+s,
						success:function(display)
						{
							//alert(display)
							$("#subcategory1").html(display);
						}
					});
				}
			});
					
					$(document).ready(function(){
						$("#submit").click(function(){
							var name = $("#name").val();
							var email = $("#email").val();
							var phone = $("#phone").val();
							var requirement = $("#requirement").val();
							var category = $("#category").val();
							var subcategory1 = $("#subcategory1").val();
							
							var dd = "name="+name+"&email="+email+"&phone="+phone+"&requirement="+requirement+"&category="+category+"&subcategory="+subcategory1;
							
							if(name=="" || email=="" || phone=="" || requirement=="")
							{
								alert("Please fill all fields");
							}
							else
							{
								if(ValidateEmail(email))
								{
									$.ajax
									({
										type: "POST",
										url: "be_category_interest.php",
										data: dd,
										cache: false,
										success: function(html)
										{
										
											if(html==1)
											{
												alert("Your requirement has been sent to relevant profiles.Someone available to offer service will contact you soon.")
												window.location="../index.php";
												var name = $("#name").val('');
												var email = $("#email").val('');
												var phone = $("#phone").val('');
												var requirement = $("#requirement").val('');
												
												$.ajax
												({
													type: "POST",
													url: "be_category_interest_mail.php",
													data: dd,
													cache: false,
													success: function(h)
													{
														
													}
												});
											}
											else
											{
												alert("Internal error")
											}
										
										}
									});
								}
								else
								{
									alert("Enter valid email")
								}
								
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
</body>
</html>
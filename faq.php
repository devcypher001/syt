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
                                               <li><a href="categories/category_listing.php?catid=6" >Home and Utility</a></li>
                                                <li><a href="categories/category_listing.php?catid=9" >Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2" >Bussiness Consultants</a></li>
                                                <li><a href="categories/category_listing.php?catid=4" >Fashion and Lifestyle</a></li>
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
                        <li><a href="howitworks.php" style="color:#fff;" >How It Works</a></li>
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
                <h2>Sell Your Time FAQ </h2>
                <hr>
                
            </div><!-- end general title -->
            
            
        </div><!-- end container -->
    </section><!-- end white wrapper -->

    <section class="my-wrapper" style="background:white;">
        <div class="container">
        <br>
		<br>
		<div style="font-weight: bold;font-size: 21px;color: #4753a3;cursor:pointer;" id="q1">
			What is Sellyourtime all about and what does it offer?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a1">
		Whether you are a working professional or a freelancer, your time is worth your skills, knowledge, experience or position in the society.You sell one or all of these to earn a living.Sellyourtime is an online marketplace where you can sell all of the above and everything your time is worth.So if you are a musician,tutor,business consultant,wedding planner or even a homemaker who cooks great food, you can sell your services and earn extra or grow your existing business by having an SYT profile.
You can choose to charge for your services per hour, per day, per project or a fixed price.<br><b>Sellyourtime is India’s first and largest online marketplace for selling and buying  local services.It is an online platform to sell and buy any kind of service as per your requirements,budget and location.</b>
        </div>
		
		
		
		<br>
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q3">
			Who can use Sellyourtime.in?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a3">
		1.Sellers
Almost anyone who has a skill,knowledge and experience to offer a service can be a seller.
Eg.Musician,Fitness consultant,Tutors,Wedding planner,Business consultant,Interior designer, part time sales, baby sitter, yoga teacher, fashion stylist etc
You might be currently offering a service or may start selling your service on SYT to earn beyond just a living and be financially independent.
You can choose your profession from the 450+ listed services or add your own.<br>

2.Buyers
Anyone looking to hire people for their skills, to learn a new subject or any service they might be looking for.
Buyers can choose a service provider as per their requirements,budgets and location.
You can select and contact service providers for all your short term and long term needs.
<br>
3.People keen on Professional Networking
SYT has a unique feature called Sellyourtime club which offers a premium membership for paid networking.You can meet almost anyone by providing details such as; whom do you wish to meet, agenda, time and the price you are willing to pay to meet that person(estimating his time’s worth). SYT team will source a meeting for you if your offer is accepted by the person you wish to meet.
        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q4">
			What is the advantage of using sellyourtime.in?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a4">
		Sellyourtime is India’s first and largest local services marketplace. You can sell or buy any service and have full control over your transaction.
SYT offers 100% filtered and qualified leads to service providers on basis of price,location, availability and experience.
Buyers can find quality service providers as per their requirements and budget.SYT will thus help you to realise what your time is worth and will let you increase the value of your time.
        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q5">
			In which all locations can I use sellyourtime.in?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a5">
		Sellyourtime is currently operating in Delhi, NCR, India and will be soon launched in some of the major cities in India.
However,location for delivery of services can be at client’s site,service provider’s site or online.
        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q6">
			Should I register as a seller or a buyer?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a6">
		You can register as a seller or a buyer,depending on how you wish to use the website.However, you can sell or buy services from your dashboard by registering in any category.
        </div>
		
		
		<br>
		<div style="margin-left: 47%;
font-size: 33px;
color: rgb(21, 150, 5);font-weight: bold;">Sellers</div>
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q7">
			How can I sell my time?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a7">
		Whether you are a professional or a freelancer, your time is worth your skills, knowledge, experience or position in the society.You sell one or all of these to earn a living.Sellyourtime is an online marketplace where you can sell all of the above and everything your time is worth.So if you a musician,tutor,business consultant,wedding planner or even a homemaker who cooks great food, you can sell your services and earn extra or grow your existing business.
You can choose to charge for your services per hour, per day, per project or a fixed price.
Is there a fee or charge to use Sellyourtime.in?

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q8">
			For what all services can I sell my time?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a8">
		There are 8 major categories under which you can register yourself as a seller.<br>
1.Trainers and Tutors<br>
2.Business Consultants<br>
3.IT and Marketing<br>
4.Fashion and Lifestyle<br>
5.Beauty and Wellness<br>
6.Home and Utility<br>
7.Events and Entertainment<br>
8.And everything else<br><br>
  There are are 450+ services listed under above categories and you can sell your services by registering in any of these.If category of your profession is not found, you can register in others and once approved, category will be created for you.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q9">
			How many categories can I register in?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a9">
		You can sign up in one major category and select a sub category.Once you are on your dashboard, you can add categories to your profile and be featured under various categories.
You can add upto a maximum of 3 types of services.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q10">
			What if the category of my profession is not listed on the website?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a10">
		If category of your profession is not found, you can register in others and once approved, new category or sub category will be created for you.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q11">
			How to price my services or charge for my time?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a11">
		You can choose to charge for your services per hour, per day, per project or a fixed price.You can select a range of price that you would like to charge for your services.You will get qualified leads by buyers who would like to avail your services within that price range.
To calculate what you will charge for your services, we recommend that you take all variable factors into account such as how skilled you are as per market,years of experience,availability, how far you are willing to travel etc.Keeping all the factors in mind,charge a competitive price for your services as there might be more people offering similar service.

        </div>
		
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q12">
			What is the advantage of specifying charges/location and availability?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a12">
		Sellyourtime sign up process will need details of your location/charge for services/experience and availability.These will help us get you filtered and qualified leads and increase chances of getting hired.Our matchmaking algorithm is designed to help you waste less time and earn more.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q13">
			How do i get buyers for my services?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a13">
		The moment you sign up with Sellyourtime, your profile is posted on Sellyourtime ‘Sellers wall’.Your profile is also sent to people who have been looking for the kind of services you offer.
You can also increase your chances of getting noticed and hired by prospective buyers by posting your public profile page on your social media profiles.You can invite your friends to like your Sellyourtime page and this will add authenticity to your profile.
Once you have leads converted to customers, you can seek reviews for your good work and this will increase chances of getting more leads and getting hired.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q14">
			How will the buyers contact me?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a14">
		The buyers will be given your contact details once they click  ‘contact profile’ on your public profile page.You can choose to share either your email id or phone no or both.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q15">
			How do i get paid for selling my services?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a15">
		All monetary transactions between you and the buyer of the service will be taken offline.Sellyourtime is only a facilitator to get you best quality business leads.You can negotiate and finalise all payment discussions offline.

        </div>
		
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q16">
			Will my leads be kept confidential?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a16">
		The buyers which have contacted you will feature in your dashboard and will be kept confidential.The buyers however, may choose to view and contact other similar profiles.

        </div>
		
		<br>
		<div style="margin-left: 47%;
font-size: 33px;
color: rgb(21, 150, 5);font-weight: bold;">Buyers</div>
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q17">
			How can i buy time and what does it mean?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a17">
		Whenever you hire a person for his services,you give money and buy somebody’s time.Buying time means hiring people for their services and you can find hundreds of service providers selling their time for their skills.knowledge and experience.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q18">
			What all services can i buy on sellyourtime.in?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a18">
		There are 8 major categories from which you can find and buy services.<br>
1.Trainers and Tutors<br>
2.Business Consultants<br>
3.IT and Marketing<br>
4.Fashion and Lifestyle<br>
5.Beauty and Wellness<br>
6.Home and Utility<br>
7.Events and Entertainment<br>
8.And everything else<br><br>
  There are are 450+ services listed under above categories and you can buy services by choosing service providers from any category.If category of your profession is not found, you can register in others and once approved, category will be created for you.

        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q19">
			What if i do not find a service provider as per my requirements?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a19">
Sellyourtime features hundreds of profiles and you can filter the profiles on various parameters like charges,experience,availability and location.It is likely that you may not find an exact match sometimes.
However, you can <b>Post your requirement</b> with all relevant details and it will be posted on Sellyourtime buyers wall.
An email with your requirements will be sent to all the closest matching profiles and you will be intimated for all service providers willing to fulfill your requirements.
        </div>
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q20">
			How to get best quality service providers?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a20">
We recommend that you <b>Post your requirement</b> with all relevant details and it will be posted on Sellyourtime buyers wall.You must specify the charges you are willing to pay,location where you need the service, desired experience of the service provider and when you need the service.
An email with your requirements will be sent to all the closest matching profiles and you will be intimated for all service providers willing to fulfill your requirements.
        </div>

		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q21">
			On what parameters can i buy the services?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a21">
While posting your requirement or searching on category pages,you must specify the charges you are willing to pay,location where you need the service, desired experience of the service provider and when you need the service.
An email with your requirements will be sent to all the closest matching profiles and you will be intimated for all service providers willing to fulfill your requirements.
        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q22">
			How will the service providers contact me?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a22">
The service provider can contact you through the buyers wall on SYT homepage.Also, when you post your requirement, details of the requirement and contact details are forwarded to all the relevant profiles.
Service providers may contact you through phone or email. 
        </div>
		
		<br>
		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q23">
			If i am not happy with the service provided by a service provider on SYT,what can i do?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a23">
If you are not satisfied with services offered by a service provider, you can write a review.If there is any type of abuse, you can write to us at <a href="mailto:help@sellyourtime.in">help@sellyourtime.in</a> 
        </div>
		
		<br>
			<div style="margin-left: 39%;
font-size: 33px;
color: rgb(21, 150, 5);font-weight: bold;">Sell your time Club</div>
<br>

		
		<div style="font-weight: bold;font-size: 21px;color:#4753a3;cursor:pointer;" id="q24">
			What is SYT club?
        </div>
        <br>
        <div style="font-size: 17px;color:black;text-align:justify;display:none;" id="a24">
SYT has a unique feature called Sellyourtime club which offers a premium membership for paid networking.You can meet almost anyone by providing details such as, whom do you wish to meet, agenda, time and the price you are willing to pay to meet that person(estimating his time’s worth). SYT team will source a meeting for you if your offer is accepted by the person you wish to meet.
SYT Club is continuously adding senior and high profile members which can be contacted once you are a member of this premium club. 
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
  <script type="text/javascript" src="accordian.js"></script>
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
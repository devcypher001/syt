<?php
include '../connect.php';
session_start();
$postid= @$_GET['postid'];

$post_query = mysql_query("SELECT * FROM `syt_post` WHERE `id`='$postid'");
$post = mysql_fetch_array($post_query);

$user_id = $post['userid'];

$postby= mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$user_id'");
$fet_postby = mysql_fetch_array($postby);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>post</title>
  <style>
    body {
		font-family: 'Lato' !important;
		font-weight: 300 !important;
		font-size:14px !important;
		color:#686868;
		line-height:175% !important;		
		background-color:#fff;
		background-repeat:repeat;
	}
	
	.interact
{
display: block;
width: 47%;
height: 550px;
margin: 5% auto;
position: fixed;
top: 13px;
left: 0;
left: 0;
right: 0;
overflow: auto;
border: 1px solid #ccc;
background: #4753a3;
z-index: 1000;
display: none;
border-radius: 2px;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.interact-info
{
	width: 96%;
/* background: #fff; */
margin-left: 2%;
}

.interact-info label
{
	display:block;
	padding:5px;
	margin-top:10px;
	margin-bottom:4px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#fff;
}

.interact-info input[type="text"],textarea
{
	display:block;
	width:100%;
	padding:10px;
	border:1px solid #ccc;
	border-radius:4px;
	margin-top:14px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.interact-info input[type="submit"]
{
	display:block;
	width:60%;
	padding:10px;
	border:1px solid #FD6920;
	background:#FD6920;
	color:#fff;
	border-radius:4px;
	margin:8px auto;
}

#masking
{
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.6);
	z-index: 5;
	width: 100%;
	height: 100%;
}

.close1
{
	float:right;
	color:red;
	position:relative;
	top:10px;
	right:10px;
	cursor:pointer;
}

#send
{
	color: white;
font-size: 20px;
background-color: #4753a3;
padding:5px;
}
  </style>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
<link href="../style.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
<div id="masking"></div>
<div class="interact">
	<div class="close"><i class="fa fa-times"></i></div>
	<iframe width="100%" height="90%" frameBorder="0" src="interact1.php"></iframe>
</div>
<div id="main-wrapper">

 <header id="header-style-1" class="navbar-fixed-top" style="background:#4753a3; padding:0px;">
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
		
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
   
	  
</header>


<div class="page-heading blog-list-heading" style="margin-top:4%;">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1>POSTS</h1>

          

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


<div id="page-content">
    <div class="container">
      <div class="page-content bl-list">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-list blog-post">

              <div class="post-with-image">
               
                <h2 class="title"><?php echo $post['syt_title']; ?></h2>

                <p class="user">
                  <a href="#"><i class="fa fa-user"></i><?php echo $post['date']; ?></a>Posted by<a href="profile.php?id=<?php echo $fet_postby['id'];?>">&nbsp;&nbsp; <?php echo $fet_postby['firstname']." ".$fet_postby['lastname'];?></a>
                 
                </p>
				
				<p class="user">
                  <?php echo $post['syt_desc']; ?>
                 
                </p>

                <div class="post">
                  
				  <div >
					<ul class="list-group" style="text-align:left; font-size:20px;">
                    <li class="list-group-item">
                    <span class="badge">
					<?php 
					echo $post['category'];
					?></span>
                    CATEGORY
                    </li>
					
					<li class="list-group-item">
                    <span class="badge">
					<?php 
					echo $post['subcategory'];
					?></span>
                    SUB-CATEGORY
                    </li>
					
					<li class="list-group-item">
                    <span class="badge">
					<?php 
					echo $post['experience']." years";
					?></span>
                    EXPERIENCE
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo $post['zip'];
					?></span>
                    LOCATION
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo $post['delievery_date'];
					?></span>
                    REQUIREMENT DATE
                    </li>
					
					<li class="list-group-item">
                    <span class="badge"><?php 
						echo "Rs ".$post['price'];
					?></span>
                    CHARGE TO BE PAID
                    </li>
					
					
					
					
                    </ul>
				</div>
				  
                </div>

               


              </div> <!-- end .post-with-image -->
            </div> <!-- end .blog-post -->
			
			<br>
			<div class="btn-group">
             <button type="button" class="btn btn-primary" id="contact_buyer">Contact this buyer</button>
			</div>
			<br>
			<br>
			<div class="form-group" id="gemail" style="display:none">
			  <label for="usr">Email</label>
			  <input type="text" class="form-control" id="email">
			</div>
			
			<div class="form-group" id="gname" style="display:none">
			  <label for="usr">Name</label>
			  <input type="text" class="form-control" id="Name">
			</div>

			<div class="form-group" id="glocation" style="display:none">
			  <label for="usr">Location</label>
			  <input type="text" class="form-control" id="location">
			  <div id="search_result" style="display:none;cursor:pointer;">dsfa</div>
			</div>
			
			<div class="form-group" id="grequirement" style="display:none">
			  <label for="usr">Requirement</label>
			  <textarea class="form-control" id="requirement"></textarea>
			</div>
			
			<div class="col-md-5 danger" id="gsubmit" style="display:none">
			  <input type="submit" class="form-control" id="submit">
			</div>
			

			
          </div> <!-- end .grid-layout -->

          <div class="col-md-4">
            <div class="post-sidebar">

              <div class="latest-post-content">
                <h2>Latest Posts</h2>
				<?php
					$qu = mysql_query("SELECT * FROM `syt_post` WHERE `id` NOT IN ('$postid')");
					if(mysql_num_rows($qu) == 0)
					{
						echo "No Latest Post";
					}
					else
					{
						while($row = mysql_fetch_assoc($qu))
						{
				?>
				
                <div class="latest-post clearfix">
                  <div class="post-image">
                    <img src="img/content/latest_post_1.jpg" alt="">

                    <p><span>09</span>Sep</p>
                  </div>

                  <h4><a href="#"><?php echo $row['syt_title'] ?></a></h4>

                  <p>
				  <?php 
					$expr = strlen($row['syt_desc']);
					if($expr <= 56)
					{
						echo $row['syt_desc'];
					}
					else
					{
						echo substr($row['syt_desc'],0,55)."....";
					}
				  ?></p>

                  <a class="read-more" href=<?php echo "blog-post.php?postid=".$row['id']; ?>><i class="fa fa-angle-right"></i>Read More</a>
                </div> <!-- end .latest-post -->
				
				<?php
						}
					}
				?>
				
              </div> <!-- end .latest-post-content -->

             


            </div> <!-- end .post-sidebar -->
          </div> <!-- end .grid-layout -->

        </div> <!-- end .row -->
      </div> <!-- end .page-content -->
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
                            <input type="text" id="subscribe_email" class="form-control" placeholder="Enter your email address"> 
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
</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>
 <script>
	$(document).ready(function(){
		$("#contact_buyer").click(function(){
		$("#masking").show(); 
		$(".interact").show();
		<?php $_SESSION['postid'] = $postid;?>
		});

		$(".close").click(function(){
		   $("#masking").hide(); 
		   $(".interact").hide();
		});
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
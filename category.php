<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Sellyourtime | categories</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">

  <!-- Flex Slider -->
  <link href="css/flexslider.css" rel="stylesheet">
   
  <!-- Carousel Slider -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->
    <link rel="stylesheet" href="css/freshslider.min.css">
    <style type="text/css">
      .list-group.panel > .list-group-item {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
      }
      .list-group-submenu {
        margin-left:20px;
        max-height: 180px !important;
      }
      .headlist{
      margin-top:70px;
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
                                                <li><a href="categories/category_listing.php?catid=1" class="ch">Trainers and Tutors</a></li>
                                                <li><a href="categories/category_listing.php?catid=3">IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="categories/category_listing.php?catid=6">Home and Utility</a></li>
                                                <li><a href="categories/category_listing.php?catid=9">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="categories/category_listing.php?catid=2">Business consultants </a></li>
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
                        <li><a href="../howitworks.php" style="color:#fff;">How It Works</a></li>
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
    
  <section class="headlist clearfix">
    <div class="container-fluid" style="background:#000;">
    <div class="row" style="padding-top:10px;">
      <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="form-group">
          <input type="text" class="form-control" placehoder="keyword">
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="form-group">
          <select class="form-control">

                    <option>Monday - Friday</option>
                    <option>Monday - Saturday</option>
                    <option>On Weekends</option>
                    <option>All 7 days</option>
                  </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group">
          <input type="text" class="form-control" placehoder="keyword">
        </div>
      </div>
    </div>
    </div>
  </section><!-- end post-wrapper-top -->
    <!--
      Banner
    -->
    <section class="post-wrapper-top ">
    <div class="container-fluid">
      <div class="row" style="margin-left:-29px;margin-top:-3px;">
        <div class="col-md-12 col-sm-12 hidden-xs">
            <img src="https://www.sellyourtime.in/categories/img/banner5.jpg" >
        </div>
      </div>
    </div>
    </section>

    <section class="blog-wrapper">
      <div class="container">
        <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="widget text-widget">
                    <!-- <div id="unranged" style="width: 250px; margin: 20px"></div> -->
                    <!-- <div id="ranged" style="width: 250px; margin: 20px"></div> -->
                    <p style="font-size:16px;">Experience (in years)</p>
                     <div id="unranged-value" style="width: 250px; margin: 20px"></div> 
                     <p style="font-size:16px;">Prices (Rs.)</p>
                    <div id="ranged-value" style="width: 250px; margin: 20px"></div>

                </div><!-- end widget -->

                <div class="widget">
                <div class="form-group">
                  <select class="form-control">
                    <option>Monday - Friday</option>
                    <option>Monday - Saturday</option>
                    <option>On Weekends</option>
                    <option>All 7 days</option>
                  </select>
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-primary btn-block">Submit</button>
                </div>
              </div><!-- end widget -->

                <div class="widget text-widget">
                  <div id="MainMenu">
                    <div class="list-group panel">
                      <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 3</a>
                      <div class="collapse" id="demo3" >
                        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu1" style="overflow-y: scroll; height: 131px !important;">
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 3 c</a>
                          
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 3 c</a>
                          
                          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                        </div>
                        <a href="javascript:;" class="list-group-item">Subitem 2</a>
                        <a href="javascript:;" class="list-group-item">Subitem 3</a>
                      </div>
                      <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 4</a>
                      <div class="collapse" id="demo4">
                        <a href="" class="list-group-item">Subitem 1</a>
                        <a href="" class="list-group-item">Subitem 2</a>
                        <a href="" class="list-group-item">Subitem 3</a>
                      </div>
                    </div>
                  </div>
                </div>

                
        
      </div><!-- end sidebar -->
          <div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="buddypress-top clearfix">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                        <h2>TRAINERS AND TUTORS\ BANK PO EXAM COACHING</mark></h2>
                    </div>
                                    
                    <div class="pull-right col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <select class="custom-select form-control">
                            <option value="menu_order" >Show Everything</option>
                            <option value="date" >Sort by newness</option>
                            <option value="price" >Sort by popular</option>
                            <option value="price-desc" >Sort by active</option> 
                        </select>
                    </div>
        </div>
                          
                <div class="buddypress_content">
                  <div class="buddy_image col-md-2 pull-left">
                      <a href="#"><img class="img-thumbnail" src="https://www.sellyourtime.in/categories/img/content/comment-image-1.jpg" alt="" /></a>
                    </div><!-- end buddy_image -->
                    
                    <div class="buddy_desc col-md-10">
                      <strong><a href="#">Boby ANDERSON</a> </strong>
            <small>Chinese Tutor, Trainers and Tutors</small>
            <p><strong style="color:#FD6920;" >Experience</strong>: 18years
            </p><p>
            <strong style="color:#FD6920;">Charge</strong> : <i class="fa fa-rupee"></i>2000-2500
            </p>
            <p><strong style="color:#FD6920;" >Around</strong>: Rajender Nagar (110060)</p>
            <p><strong style="color:#FD6920;" >Availability</strong>: On Weekends</p>
            <p style="text-align:justify;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing… <a class="readmore" href="#">Read more...</a></p>
            <div class="arrow-left"></div>
                    </div><!-- end buddy_desc -->
                </div><!-- buddypress_content -->

                
                        
                <div class="clearfix"></div>
                <!--
                <div class="load_button">
                  <a href="#" title="" class="btn btn-primary btn-block">Load more post</a>
                </div>
                 -->    
            </div><!-- end content -->
            
      
      </div><!-- end container -->
    </section><!--end white-wrapper -->

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
                        <li><span></span><p>Just setting up my Twitter. #myfirstTweet <a href="https://twitter.com/sellyourtime/status/566206965773107200">about 1 days ago</a></p></li>
                         <li><span></span><p>@sellyourtime goes live to make lives easier for masses!<a href="https://twitter.com/sellyourtime/status/569921085434679298"> about 1 days ago</a></p></li>
          </ul><!-- end twiteer_feed --> 
                </div><!-- end widget -->
            </div><!-- end columns -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                  <div class="title">
                        <h3><div class="club">Sell your time Club </div></h3>
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
  <script src="js/jquery.fitvids.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
 (function($) {
    "use strict";
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
    controlNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  })(jQuery);
  </script>
<script src="js/freshslider.min.js"></script>
<script>
    
    var s2 = $("#unranged-value").freshslider({
        step: 1,
        value:5,
        min: 0,
        max: 20

    });

    var s3 = $("#ranged-value").freshslider({
        range: true,
        step:100,
        value:[400, 60000],
        min: 0,
        max: 100000,
        onchange:function(low, high){
            console.log(low, high);
        }
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
  
</body>
</html>
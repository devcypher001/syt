<?php
session_start();
include 'connect.php';
$id = @$_GET['id'];
$_SESSION['id'] = $id;
$queryid=mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$id'");

$num_row = mysql_num_rows($queryid);

if($num_row == 0)
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

  <title>Company-events</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
  <link href='css/add.css' rel='stylesheet' type='text/css'>


  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
<div id="main-wrapper">
<div id="masking"></div>
<div class="interact">
	<div class="close">Close</div>
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
            <span></span> <!-- for dark-overlay on the bg -->
            <div class="container">

              <div class="logo-image">
                <img src="img/content/company-logo.jpg" alt="">
              </div>

              <h1>
			  <?php 
				$fetch_profile = mysql_fetch_array($queryid);
				echo $fetch_profile['firstname']." ".$fetch_profile['lastname'];
			  ?>
			  </h1>
            </div>
          </div> <!-- END .general-view -->

          <div class="company-map-view">
            <div id="company_map_canvas"></div>
          </div> <!-- END .company-map-view -->

          <div class="company-map-street">
            <div id="company_map_canvas_street"></div>
          </div> <!-- END .company-map-view-street -->

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
        <div class="col-md-9 col-md-push-3">
          <div class="page-content company-profile">

            <div class="tab-content">
              <div class="tab-pane active" id="company-profile">
                <h2>
				<?php 
					echo $fetch_profile['firstname']." ".$fetch_profile['lastname'];
				?>
			  </h2>
                <h5>
                  <a href="#">
				  <?php
					echo $fetch_profile['subcategory'];
				  ?> </a>
                </h5>

                <div class="social-link text-right">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>

                <div class="company-text">
                  <p>
                    <strong><?php echo $fetch_profile['experience_details']; ?></strong>
                  </p>

                </div> <!-- end company-text -->



                <div class="company-service">
                  <h4>Range of Service</h4>

                  <ul class="list-inline">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Directories</a></li>
                    <li><a href="#">Internet</a></li>
                    <li><a href="#">User Experience</a></li>
                  </ul>
                </div> <!-- end company-service -->

                <div class="company-ratings">
                  <h4>New Leads <span>(5 Ratings)</span></h4>

                  <div class="all-rating clearfix">
                    <div class="company-rating-box">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                      <h6>Overall</h6>
                    </div>

                    <div class="company-rating-box">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                      <h6>Quality</h6>
                    </div>

                    <div class="company-rating-box">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                      <h6>Support</h6>
                    </div>

                    <div class="company-rating-box">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                      <h6>Price</h6>
                    </div>

                    <div class="company-rating-box">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                      <h6>Products</h6>
                    </div>
                  </div> <!-- end .all-rating -->


                  <div class="rating-with-details">
					<?php
						$cate = $fetch_profile['category'];
						$subcate = $fetch_profile['subcategory'];
						$sql = mysql_query("SELECT * FROM `syt_post` where `category` like '%$cate%' or `subcategory` like '%subcate'");
						$num_sql = mysql_num_rows($sql);
						
						if($num_sql == 0)
						{
							echo "<div style='font-size:28px'>No lead found</div>";
						}
						else
						{
						while($rww= mysql_fetch_assoc($sql))
						{
					?>
                    <div class="single-content">
                      <div class="company-rating-box">
                        <ul class="list-inline">
                         <a href='blog-post.php?postid=<?php echo $rww['id']; ?>'> <img src="img/content/company-logo.jpg" style="width: 156px;
height: 45px;
margin-top: -19px;"></a>
                        </ul>

                        
                      </div>
					
					
					
                      <div class="rating-details">
                        <div class="meta">
                          <a href="#"><strong><?php 
								$user = $rww['userid'];
								
								$sql_kk= mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$user'");
								
								$usr = mysql_fetch_array($sql_kk);
								
								echo $usr['firstname']." ".$usr['lastname'];

						  ?></strong></a>
							<?php echo  $rww['date'];?>
                        </div>

                        <div class="content">
                          <p><a href='blog-post.php?postid=<?php echo $rww['id']; ?>'><?php echo $rww['syt_title']; ?></a>
                          </p>
                        </div>
                      </div>
					  
					
                    </div> <!-- end .single-content -->
					<?php
						}
						}
					?>
                  </div> <!-- end .rating-with-details -->
                </div> <!-- end .company-rating -->
				
				
				<!-- -->
				
				<div class="company-ratings">
                  <h4>Direct leads from profile page</h4>
					<?php 
						$qwr = mysql_query("SELECT * FROM `syt_lead` WHERE `user_id` = '$id'");
						echo 'mysql_query("SELECT * FROM `syt_lead` WHERE `user_id` = '.$id.'")';
						if(mysql_num_rows($qwr) == 0)
						{
							echo "No external lead";
						}
						else
						{
							while($rwr = mysql_fetch_assoc($qwr))
							{
								echo $rwr['name']." ".$rwr['email']." ".$rwr['description']." ".$rwr['time']."<br>";
							}
						}
					
					?>
                 
                </div> <!-- end .company-rating -->
				
				<!-- -->
				

                <div class="comments-section">
                  <div class="comment-title">
                    <h4>2 Comments</h4>
                  </div>

                  <ul class="comments">
                    <li>

                      <div class="comment">
                        <img src="img/content/comment-image-1.jpg" alt="" class="avatar">

                        <div class="meta">
                          <a href="#"><strong>John Doe</strong></a>
                          -12 sep, 2014 - 9:14 Am -
                          <a href="#" class="reply">Reply</a>
                        </div>

                        <div class="content">
                          <p>Phasellus congue lacus eget neque. Phasellus ornare,
                            ante vitae consectetuer consequat, purus sapien ultricies dolor.</p>
                        </div>

                      </div> <!-- end .comment -->

                      <ul>
                        <li>
                          <div class="comment">
                            <img src="img/content/comment-image-2.jpg" alt="" class="avatar">

                            <div class="meta">
                              <a href="#"><strong>John Doe</strong></a>
                              -12 sep, 2014 - 9:14 Am -
                              <a href="#" class="reply">Reply</a>
                            </div>

                            <div class="content">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Facilis qui aspernatur ad eaque reiciendis ipsum.</p>
                            </div>
                          </div>

                        </li> <!-- end nasted li -->
                      </ul> <!-- end .nasted ul-->
                    </li> <!-- end .main list -->
                  </ul> <!-- end .comments -->

                  <h4>Join Conversation</h4>

                  <form class="comment-form">
                    

                    <textarea placeholder="Your Comment ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Message</button>
                  </form>

                </div> <!-- end .comment-section -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-product">
                <div class="company-product">

                  <h2 class="text-uppercase mb30">Our Products</h2>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Tupe</option>
                      <option value="option3">Name</option>
                      <option value="option4">Type</option>
                    </select>

                  </div>

                  <div class="row">
                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->


                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/company-product.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Product Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .company-product -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-portfolio">

                <div class="company-portfolio">
                  <h2 class="text-uppercase mb30">Our Portfolio</h2>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Tupe</option>
                      <option value="option3">Name</option>
                      <option value="option4">Type</option>
                    </select>

                  </div>

                  <div class="row">
                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Project Name</a></h4>

                        <h5><a href="#">Category</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .company-portfolio -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-events">

                <div class="company-events">

                  <h2 class="text-uppercase mb30">Events</h2>

                  <div class="post-with-image">
                    <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image1.jpg" alt="">
                    </div>

                    <h2 class="title"><a href="blog-post.html">This is Event title</a></h2>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
                      <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
                    </p>

                    <p class="post">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                      suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                      Phasellus pharetra nulla ac diam. Quisque semper.
                    </p>

                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div> <!-- end .post-with-image -->

                  <div class="post-with-image">
                    <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image2.jpg" alt="">
                    </div>

                    <h2 class="title"><a href="#">This is Event title</a></h2>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
                      <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
                    </p>

                    <p class="post">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                      suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                      Phasellus pharetra nulla ac diam. Quisque semper.
                    </p>

                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div> <!-- end .post-with-image -->

                  <div class="post-with-image">
                    <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image3.jpg" alt="">
                    </div>

                    <h2 class="title"><a href="#">This is Event title</a></h2>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
                      <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
                    </p>

                    <p class="post">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                      suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                      Phasellus pharetra nulla ac diam. Quisque semper.
                    </p>

                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div> <!-- end .post-with-image -->




                  <div class="post-with-image">
                    <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image2.jpg" alt="">
                    </div>

                    <h2 class="title"><a href="#">This is Event title</a></h2>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
                      <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
                    </p>

                    <p class="post">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                      suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                      Phasellus pharetra nulla ac diam. Quisque
                    </p>

                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div> <!-- end .post-with-image -->


                  <div class="post-with-image">
                    <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image1.jpg" alt="">
                    </div>

                    <h2 class="title"><a href="#">This is Event title</a></h2>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
                      <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
                    </p>

                    <p class="post">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                      suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                      Phasellus pharetra nulla ac diam. Quisque semper.
                    </p>

                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div> <!-- end .post-with-image -->

                </div> <!-- end .company-events -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-blog">

                <div class="company-blog">

                  <h2 class="text-uppercase mb30">Our Blog</h2>

                  <div class="blog-list">

                    <div class="post-with-image">
                      <div class="date-month">
                        <a href="#">
                          <span class="date">12</span>
                          <span class="month">Sep</span>
                        </a>
                      </div>

                      <div class="post-image">
                        <img src="img/content/blog-list-image1.jpg" alt="">
                      </div>

                      <h2 class="title"><a href="blog-post.html">This is Post Title</a></h2>

                      <p class="user">
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                        <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                        <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
                      </p>

                      <p class="post">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                      </p>

                      <p class="tag">
                        <i class="fa fa-tag"></i>
                        <a href="#">Good,</a>
                        <a href="#">Ui,</a>
                        <a href="#">Experience,</a>
                        <a href="#">Article</a>
                      </p>

                      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .post-with-image -->

                    <div class="post-with-image">
                      <div class="date-month">
                        <a href="#">
                          <span class="date">12</span>
                          <span class="month">Sep</span>
                        </a>
                      </div>

                      <div class="post-image">
                        <img src="img/content/blog-list-image2.jpg" alt="">
                      </div>

                      <h2 class="title"><a href="#">This is Post Title</a></h2>

                      <p class="user">
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                        <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                        <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
                      </p>

                      <p class="post">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                      </p>

                      <p class="tag">
                        <i class="fa fa-tag"></i>
                        <a href="#">Good,</a>
                        <a href="#">Ui,</a>
                        <a href="#">Experience,</a>
                        <a href="#">Article</a>
                      </p>

                      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .post-with-image -->

                    <div class="post-without-image">
                      <div class="date-month">
                        <a href="#">
                          <span class="date">12</span>
                          <span class="month">Sep</span>
                        </a>
                      </div>

                      <h2 class="title"><a href="#">This is Post Title</a></h2>

                      <p class="user">
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                        <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                        <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
                      </p>

                      <p class="post">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                      </p>

                      <p class="tag">
                        <i class="fa fa-tag"></i>
                        <a href="#">Good,</a>
                        <a href="#">Ui,</a>
                        <a href="#">Experience,</a>
                        <a href="#">Article</a>
                      </p>

                      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .post-without-image -->


                    <div class="post-with-image">
                      <div class="date-month">
                        <a href="#">
                          <span class="date">12</span>
                          <span class="month">Sep</span>
                        </a>
                      </div>

                      <div class="post-image">
                        <img src="img/content/blog-list-image3.jpg" alt="">
                      </div>

                      <h2 class="title"><a href="#">This is Post Title</a></h2>

                      <p class="user">
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                        <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                        <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
                      </p>

                      <p class="post">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                      </p>

                      <p class="tag">
                        <i class="fa fa-tag"></i>
                        <a href="#">Good,</a>
                        <a href="#">Ui,</a>
                        <a href="#">Experience,</a>
                        <a href="#">Article</a>
                      </p>

                      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .post-with-image -->

                    <div class="post-without-image">
                      <div class="date-month">
                        <a href="#">
                          <span class="date">12</span>
                          <span class="month">Sep</span>
                        </a>
                      </div>

                      <h2 class="title"><a href="#">This is Post Title</a></h2>

                      <p class="user">
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                        <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                        <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
                      </p>

                      <p class="post">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                      </p>

                      <p class="tag">
                        <i class="fa fa-tag"></i>
                        <a href="#">Good,</a>
                        <a href="#">Ui,</a>
                        <a href="#">Experience,</a>
                        <a href="#">Article</a>
                      </p>

                      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .post-without-image -->

                  </div> <!-- end .blog-list -->

                  <div class="blog-list-pagination">

                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>

                  </div> <!-- end .blog-list-pagination -->
                </div> <!-- end .company-blog -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-contact">
                <div class="company-profile company-contact">

                  <h2>Contact Us</h2>

                  <div class="social-link text-right">
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>

                  <div class="company-text">
                    <p>
                      <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong>
                    </p>

                    <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,
                      sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet,
                      elit magna vulputate arcu, vel tempus metus leo non est.
                      Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                      Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,
                      et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit,
                      urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
                    </p>
                  </div> <!-- end company-text -->


                  <div class="row">
                    <div class="col-md-6">

                      <div class="contact-map-company">
                        <div id="contact_map_canvas_one">

                        </div>
                      </div> <!-- end .map-section -->

                      <h3>Headquarters</h3>

                      <h5>Address Details</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-map-marker"></i>

                        <p>
                          <span>1234 Hyde Street</span>
                          <span>San Francisco</span>
                          <span>CA 94043</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-phone"></i>

                        <p>
                          <span><strong>Phone:</strong> +1 123-456-7890</span>
                          <span><strong>Fax:</strong> +1 123-456-7891</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-envelope-o"></i>

                        <p>
                          <span><strong>E-mail:</strong> example@example.com</span>
                          <span><span><strong>Website:</strong> www.example.com</span></span>
                        </p>
                      </div>

                      <h5>Openig Hours</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-clock-o"></i>

                        <p>
                          <span><strong>Mo-Fri:</strong> 9AM - 5PM</span>
                          <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
                          <span><strong>Sunday:</strong> Closed</span>
                        </p>
                      </div>

                    </div> <!-- end main grid layout -->

                    <div class="col-md-6">
                      <div class="contact-map-company">
                        <div id="contact_map_canvas_two">

                        </div>
                      </div> <!-- end .map-section -->

                      <h3>Retailing Point</h3>

                      <h5>Address Details</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-map-marker"></i>

                        <p>
                          <span>1234 Hyde Street</span>
                          <span>San Francisco</span>
                          <span>CA 94043</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-phone"></i>

                        <p>
                          <span><strong>Phone:</strong> +1 123-456-7890</span>
                          <span><strong>Fax:</strong> +1 123-456-7891</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-envelope-o"></i>

                        <p>
                          <span><strong>E-mail:</strong> example@example.com</span>
                          <span><span><strong>Website:</strong> www.example.com</span></span>
                        </p>
                      </div>

                      <h5>Openig Hours</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-clock-o"></i>

                        <p>
                          <span><strong>Mo-Fri:</strong> 9AM - 5PM</span>
                          <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
                          <span><strong>Sunday:</strong> Closed</span>
                        </p>
                      </div>

                    </div> <!-- end main grid layout -->
                  </div> <!-- end .row -->

                  <h3>Send Us A Message</h3>
                  <form class="comment-form">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" placeholder="Name *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="email" placeholder="Email *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="url" placeholder="Website">
                      </div>
                    </div>

                    <textarea placeholder="Your Comment ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Message</button>
                  </form>

                </div> <!-- end .company-contact -->
              </div> <!-- end .tab-pane -->
            </div> <!-- end .tab-content -->

          </div> <!-- end .page-content -->


        </div> <!-- end .main-grid layout -->

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>
          <div class="page-sidebar company-sidebar">

            <ul class="company-category nav nav-tabs home-tab" role="tablist">
              <li>
                <a href="#company-profile" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i> Profile</a>
              </li>

              <li>
                <a href="#company-product" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i>Service</a>
              </li>

              <li>
                <a href="#company-portfolio" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"></i>Portfolio</a>
              </li>

              <!--<li>
                <a href="#company-events" role="tab" data-toggle="tab"><i class="fa fa-list"></i>Events</a>
              </li>

              <li>
                <a href="#company-blog" role="tab" data-toggle="tab"><i class="fa fa-keyboard-o"></i>blog</a>
              </li>-->

              <li>
                <a href="#company-contact" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Contact</a>
              </li>
            </ul>

            <div class="own-company">
              <a href="#" id="connect_to"><i class="fa fa-circle"></i>Contact to <?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?></a>
            </div>
			
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
			
           
			
            <div class="contact-details">
              <h2>Contact Details</h2>

              <ul class="list-unstyled">
                <li>
                  <strong>Name</strong>
                  <span><?php echo $fetch_profile['firstname']." ".$fetch_profile['lastname']; ?></span>
                </li>

                <li>
                  <strong>Registered</strong>
                  <span><?php echo $fetch_profile['time']?></span>
                </li>

                <li>
                  <strong>Sub-Category</strong>
                  <span><?php echo $fetch_profile['category']; ?></span>
                </li>

                <li>
                  <strong>Category</strong>
                  <span><?php echo $fetch_profile['subcategory']; ?></span>
                </li>
                <li>
                  <strong>Experience</strong>
                  <span><?php echo $fetch_profile['experience']." year"; ?></span>
                </li>

                <li>
                  <strong>Full Address</strong>
                  <span><?php echo $fetch_profile['address']; ?></span>
                </li>

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

            <div class="opening-hours">
              <h2>Working Hours</h2>

              <ul class="list-unstyled">
                <li>
                  <strong>Mo-Fr:</strong>
                  <span>9AM-5PM</span>
                </li>

                <li>
                  <strong>Sa:</strong>
                  <span>10AM-3PM</span>
                </li>

                <li>
                  <strong>Su:</strong>
                  <span>Closed</span>
                </li>
              </ul>
            </div>
			
			 <div class="opening-hours">
              <h2>Related Profile</h2>

              <ul class="list-unstyled">
                <li>
                  <strong><a href="#"><img src="img/content/company-logo.jpg" height="50" width="50"></a></strong>
                  <span><a href="profile.php?id=2">AKSHAT RANA</a></span>
                </li>

                <li>
                  <strong><a href="#"><img src="img/content/company-logo.jpg" height="50" width="50"></a></strong>
                  <span><a href="profile.php?id=4">SANDEEP KUMAR</a></span>
                </li>

                <li>
                  <strong><a href="#"><img src="img/content/company-logo.jpg" height="50" width="50"></a></strong>
                  <span><a href="profile.php?id=6">PRADEEP YADAV</a></span>
                </li>
              </ul>
            </div>

            <div class="square-button">
			
              <a href="#"><img src="img/content/square-button.png" alt=""></a>
              <a href="#"><img src="img/content/square-button.png" alt=""></a>
              <a href="#"><img src="img/content/square-button.png" alt=""></a>
              <a href="#"><img src="img/content/square-button.png" alt=""></a>
            </div> <!-- end .sqare-button -->

          </div> <!-- end .page-sidebar -->
        </div> <!-- end .main-grid layout -->
      </div> <!-- end .row -->

    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


  <footer id="footer">
    <div class="main-footer">

      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6">
            
              

              <div class="footer-logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
                <span></span> <!-- This content for overlay effect -->
              </div>
			  

              <p>India’s first and largest services marketplace.
Sell your time for your skills, knowledge and experience.Start your business or generate qualified leads on SYT.If you are looking for services in your area,find service providers as per your need,budget and schedule.
</p>

             <!-- End .about-globo -->
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6">
            <h3>Latest From Blog</h3>

            <div class="latest-post clearfix">
              <div class="post-image">
                <img src="img/content/latest_post_1.jpg" alt="">

                <p><span>12</span>Sep</p>
              </div>

              <h4><a href="#">Post Title Goes Here</a></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="latest-post clearfix">
              <div class="post-image">
                <img src="img/content/latest_post_2.jpg" alt="">

                <p><span>09</span>Sep</p>
              </div>

              <h4><a href="#">Post Title Goes Here</a></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6 clearfix">
            <div class="popular-categories">
              <h3>Sellyourtime Club</h3>

              <!-- <ul>
                <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce</a></li>
                <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i>Industry</a></li>
                <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public Office</a></li>
                <li><a href="#"><i class="fa fa-building-o"></i>Real Estate</a></li>
              </ul>-->
            </div> <!-- end .popular-categories-->
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6">
            <div class="newsletter">
              <h3>Newsletter</h3>

              <form action="#">
                <input type="Email" placeholder="Email address">
                <button><i class="fa fa-plus"></i></button>
              </form>

              <h3>Keep In Touch</h3>

              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- end .newsletter-->

          </div> <!-- end Grid layout-->
        </div> <!-- end .row -->
      </div> <!-- end .container -->
    </div> <!-- end .main-footer -->

    <div class="copyright">
      <div class="container">
        <p>Copyright 2014 &copy; sellyourtime. All rights reserved. Design by  <a href="#">appslure</a></p>

        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          
          <li><a href="#">Blog</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div> <!-- END .container -->
    </div> <!-- end .copyright-->
  </footer> <!-- end #footer -->

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
  // gmap for street view
  panorama = GMaps.createPanorama({
    el: '#company_map_canvas_street',
    lat : 37.7762546,
    lng : -122.43277669999998,
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

</body>
</html>
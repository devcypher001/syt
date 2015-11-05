<?php
include '../connect.php';
session_start();
$category_id = @$_GET['catid'];

$check_id = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category_id'");

$cc = mysql_fetch_array($check_id);
$rw = $cc['category'];

$num_row = mysql_num_rows($check_id);

if($num_row == 0)
{
	//header('Location:../404.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sellyourtime category</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>
  <style>
  body {
		font-weight: 300 !important;
		font-size:14px !important;
		color:#686868;
		line-height:175% !important;		
		background-color:#fff;
		background-repeat:repeat;
	}
	#footer-style-1
	{
		font-family: 'Lato' !important;
	}
  .search-suggestion
  {
	float:right;
	width:322px;
	min-height:0px;
	position:absolute;
	top:55px;
	background:white;
	display:none;
	right:11.5%;
	overflow:scroll;
  }
  
  .search-suggestion p
  {
	display:block;
	
	margin:0 auto;
	padding:5px 30px;
	text-align:left !important;
	cursor:pointer;
	background:#fff;
	color:#000;
	font-size:16px;
	background-image:url('img/pin_purple.png');
	background-position:left center;
	background-repeat:no-repeat;
  }
  
  .search-suggestion p:hover
  {
	display:block;
	border-bottom:1px solid #000;
	background:#000;
	background-image:url('img/pin_purple.png');
	background-position:left center;
	background-repeat:no-repeat;
	color:#fff;
  }
  .keyword-suggestion
  {
	float: right;
	width: 354px;
	min-height: 0px;
	position: absolute;
	top: 55px;
	background: white;
	display: none;
	right: 62.3%;

  }
  
  .keyword-suggestion p
  {
	display:block;
	
	margin:0 auto;
	padding:5px 30px;
	text-align:left !important;
	cursor:pointer;
	background:#fff;
	color:#000;
	font-size:16px;
	background-position:left center;
	background-repeat:no-repeat;
  }
  
  .keyword-suggestion p:hover
  {
	display:block;
	border-bottom:1px solid #000;
	background:#000;
	background-position:left center;
	background-repeat:no-repeat;
	color:#fff;
  }
  
  input[type='range'] {
		-webkit-appearance: none;
		border-radius: 5px;
		background-color: #c4c4c4;
		height: 10px;
		vertical-align: middle;
	}
	input[type='range']::-moz-range-track {
		-moz-appearance: none;
		border-radius: 5px;
		box-shadow: inset 0 0 5px #333;
		background-color: #999;
		height: 10px;
	}
	input[type='range']::-webkit-slider-thumb {
		-webkit-appearance: none !important;
		border-radius: 3px;
		background-color: #333;
		box-shadow:inset 0 0 10px rgba(000,000,000,0.5);
		border: 1px solid #999;
		height: 20px;
		width: 20px;
	}
	input[type='range']::-moz-range-thumb {
		-moz-appearance: none;
		border-radius: 20px;
		background-color: #FFF;
		box-shadow:inset 0 0 10px rgba(000,000,000,0.5);
		border: 1px solid #999;
		height: 20px;
		width: 20px;
	}

p.selected
		{
			display:block;
			width:280px;
			background:#4cae4c;
			color:white;
			border:1px solid #4cae4c;
			outline:0;
			padding:0;
		}
		
		
  </style>
  <link href="../style.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>
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

						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff;"  id="dropdown12">Categories <div class="arrow-up"></div></a>
							<ul class="dropdown-menu" style="font-size:22px;" id="show_categories">
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
    
      <div class="header-search-bar">
      

        
      </div> <!-- END .header-search-bar -->
		

			
      <!--<div class="map-section">

        <div id="map_canvas"></div>

      </div>-->
</header>
<div class="container-fluid">
<div class="row-fluid">

<div class="col-md-3 col-sm-12">
<input type="text" class="form-control" placeholder="Keywords"  />
</div>

<div class="col-md-4 col-sm-12">
<input type="text" class="form-control" placeholder="Keywords"  />
</div>

<div class="col-md-4 col-sm-12">
<input type="text" class="form-control" placeholder="Keywords"  />
</div>

<div class="col-md-1 col-sm-12">
<input type="text" class="form-control" placeholder="Keywords"  />
</div>


</div>
<div>
</div>
<div class="container-fluid hidden-sm hidden-xs visible-md visible-lg">
<div class="row" style="">
<div style="width:100%;">
			<?php 
				$banner_image = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category_id'");
				
				$image = mysql_fetch_array($banner_image);
				
			?>
				<img src="img/<?php echo $image['images']; ?>" width="100%" height="100%" style="margin-top:4%;">
			</div>
</div>
</div>
	

	  
  <div id="page-content">
    <div class="container">
      <div class="row">

        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details-list view-switch">
              <div class="tab-content">

                <div class="tab-pane" id="antique-all">
                  <h2>ALL CATEGORIES<span class="category-name"><b>\</b>antique</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <!--<button class="grid-view"><i class="fa fa-th"></i></button>-->
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">
                     </div>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                    

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->


                <div class="tab-pane" id="jewelry">

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <!--<button class="grid-view"><i class="fa fa-th"></i></button>-->
                    <button class="list-view active"><i class="fa fa-bars"></i></button>



                  </div> <!-- end .change-view -->

                </div> <!-- end .tabe-pane -->

                <div class="tab-pane active" id="category-book">
                  <div id="category_tree"><h2><?php echo $rw; ?><span class="category-name"><b>\</b><?php $category_name = mysql_fetch_array($check_id);
							echo $category_name['category'];
				  ?></span></h2></div>

                  <div class="change-view">

                    <div class="sort-by">

                      <select class="" id="sortby" style="width: 215px;padding: 8px;" class="selectpicker">
                        <option value="">Sort by</option>
                        <option value="Name">Name</option>
                        <option value="experience">Experience (Highest-Lowest)</option>
						<option value="LH" >Price (Lowest-Highest)</option>
                        <option value="HL">Price (Highest-Lowest)</option>
                      </select>

                     </div>
					 
					 

                    </div> <!-- end .change-view -->

                  <div class="row clearfix" id="result_show">
                     <!--CHANGES DKFKLDJFKLDSFDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
					 
					 <?php
					 //$rw
					$_catid = $category_name['category'];
					$categories_select = mysql_query("SELECT * FROM `syt_registration` WHERE `category` ='$rw' order by `id`");
					
					$num_categories_select = mysql_num_rows($categories_select);
					
					if($num_categories_select == 0)
					{
						echo "<div style='font-size:24px;color:red'>Seller not found...</div>";
					}
					else
					{
						while($rwe = mysql_fetch_assoc($categories_select))
						{
							
					?>
					 
					<div class="col-sm-4 col-xs-6">
			
                      <div class="single-product">
                        <figure>
                          <img src="img/content/comment-image-1.jpg" alt="">

                          <div class="rating">

                            <ul class="list-inline">
                              
                            </ul>


                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="profile.php?id=<?php echo $rwe['id']; ?>"><?php echo $rwe['firstname']." ".$rwe['lastname']; ?></a></h4>

                        <h5><a href="#"><?php echo $rwe['subcategory']; ?></a>, <a href="#"><?php echo $rwe['category']; ?></a></h5>

                        <p>
						<?php
							echo "<span style='color:orange'>Experience</span> : ". $rwe['experience']." Years";
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Charge</span> : <i class='fa fa-inr'></i> ". $rwe['charge'];
						?>
						</p>
						
						
						<p>
						<?php
							echo "<span style='color:orange'>Around</span> : ". $rwe['address']." ".$rwe['zip'];
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Availability</span> : ". $rwe['service_day'];
						?>
						</p>
						
						
						<p>
						<?php
							$expr = strlen($rwe['experience_details']);
							if($expr <= 146)
							{
								echo $rwe['experience_details']." ...<a href='profile.php?id=".$rwe['id']."'>Read more</a>";
							}
							else
							{
								echo substr($rwe['experience_details'],0,130)."...<a href='profile.php?id=".$rwe['id']."'>Read more</a>";
							}
						?>
						</p>

                        

                      </div> <!-- end .single-product -->
                    </div>
                    
					
					<?php 
					}
					}
					?> 
          
					
					
                    <!--<div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>-->

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane" id="antique">
                  <h2>Home and Utility<span class="category-name"><b>\</b>Antique</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <!--<button class="grid-view"><i class="fa fa-th"></i></button>-->
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option3">Name</option>
                        <option value="option4">Type</option>
                      </select>

                     </div>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                    
                    
                   


                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane" id="cars-motorcycles">
                  <h2>E-commerce<span class="category-name"><b>\</b>Cars &amp; Motorcycles</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <!--<button class="grid-view"><i class="fa fa-th"></i></button>-->
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option3">Name</option>
                        <option value="option4">Type</option>
                      </select>

                     </div>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                    

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-8.jpg" alt="">
                          <div class="rating">

                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>
                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>
                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-6.jpg" alt="">
                          <div class="rating">

                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>
                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>
                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-4.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>
                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>
                        <h4><a href="#">Old Bookman's</a></h4>
                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-5.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>
                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>
                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-6.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>
                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-7.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-8.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->


                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-9.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-10.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-11.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-12.jpg" alt="">

                          <div class="rating">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            </ul>

                            <p>Featured</p>

                          </div> <!-- end .rating -->

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->
              </div> <!-- end .tabe-content -->

            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>

          <div class="page-sidebar">

            <div class="location-details">
            
                <div class="select-country">
                  <label style="margin-top: -11px;">Experience (in years)</label>
				  <br>
					<input id="slider1" type="range" min="0" max="20" step="1" />
					<div class="show" style="margin-left: 228px;position: relative;top: -43px;width: 55px;left: 0px;">5 yrs</div>
                </div> <!-- end .select-country -->

            </div> <!-- end .location-details -->    

			<br>
			
             
			<div class="distance-range">
              <p>
                <label for="amount">Price (Rs)</label>
                <input type="text" id="amount" style="width: 125px;">
              </p>

              <div id="slider-range-min"></div>
            </div>  <!-- end #distance-range -->
            <br> 
			
			
			<div class="location-details" style="position: relative;left: -3%;">
            
                <div class="select-country" style="margin-left:1%;">
                  <label style="margin-left: -9%;margin-top: -2%;">Avaliability</label>
				  <br>
				 <select name="country" class="form-control" id="service_day" style="margin-left: 3%;
width: 257px;
height: 36px;">
                                                
                        <option value="Monday-Friday">Monday - Friday</option>
                        <option value="Monday-Saturday">Monday - Saturday</option>
						<option value="">On Weekends</option>
                        <option value="All 7 Days">All 7 Days</option>
                                                
                  </select>
					
                </div> <!-- end .select-country -->

            </div> <!-- end .location-details -->
			
			<div class="location-details">
            
                <div class="select-country" style="margin-left:1%;">
					<input type="submit" id="submit_aval" style="margin-top: 8%;">
                </div> <!-- end .select-country -->

            </div> <!-- end .location-details -->
			
            <!-- Category accordion -->
            

			
			
			<style>
.accordion
{
display: block;
margin: 10px auto;
width: 267px;
overflow-x: hidden;
overflow-y: scroll;
height: 575px;
}

.accordion nav
{
	display:block;
	text-align:left;
	width:100%;
	margin:0;
}


.accordion nav h2
{
	display: block;
	margin: 0px;
	cursor: pointer;
	text-align: left;
	font-size: 17px;
	background: #F8F8F8;
	border-radius: 2px;
	padding: 18px;
	border: 1px solid #D3D3D3;
	color: #333333;
	border-bottom: 0px;
}

.accordion nav h2:hover{
color:#fff;
background-color:#159605;


}


.accordion nav ul, li
{
	list-style-type:none;
	margin:0;
	padding:0;
}
.accordion nav ul
{
	display:none;
}

.accordion nav ul li a
{
	display:block;
	padding:5px;
	margin-top:2px;
	color:#159605;
	text-decoration:none;
}

.accordion h2
{
	display:block;
	margin:3px;
	text-align:center;
	font-size:18px;
	padding:10px;
	color:#000;
}
</style>
<br>
<br>
<div class="accordion">

	<h2 align="center">ALL CATEGORIES</h2>
	<nav>
		<h2><i class="fa fa-star-o"></i> Trainers and Tutors</h2>
		<ul>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd2">Academic&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks2">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 1 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd3">Language Experts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks3">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 2 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd4">Arts and Crafts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks4">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 6 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd5">Sports & Recreation&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks5">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 4 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd6">Performance Arts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks6">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 3 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-shopping-cart"></i> Business Consultants</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 2 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-desktop"></i> IT and Marketing</h2>
		<ul>
			<li><div href="#" style="padding:10px; background:#ccc; margin-bottom:2px;"  id="itd">IT&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="its">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 8 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
			
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd1">Marketing&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks1">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 11 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-gift"></i> Fashion and Lifestyle</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 4 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-female"></i> Beauty and Wellness</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 5 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-cogs"></i> Home and Utility</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 6 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-film"></i> Events & Entertainment</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 7 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-building-o"></i> Other</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 8 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="subcategory_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
</div>
			
			
			

          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
      </div> <!-- end .row -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->



  <!--<div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>

    <div class="registration-details">
      <div class="container">
        <div class="box regular-member">
          <h2><strong>Regular</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

        <div class="alternate">
          <h2>OR</h2>
        </div>

        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

      </div>
     
    </div>

  </div>-->
  <!-- END REGISTER-CONTENT -->

  <!-- OUR PARTNER SLIDER BEGIN -->
    <!--<div class="our-partners">
      <div class="container">
        <h4>Our Partners</h4>

        <div id="partners-slider" class="owl-carousel owl-theme">
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
        </div>
      </div>
    </div>-->
    <!-- END OUR PARTNER SLIDER -->

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
                    	<p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by email. We don't do spam..</p>
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
                    <p>Copyright © 2014 - Designed by Sell Your Time</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                       <li class="active"><a href="../index.php">Home</a></li>
                        <li><a href="../faq.php">FAQ</a></li>
                        <li><a href="../terms.php">Terms of Service</a></li>
                        <li><a href="../privacy.php">Privacy Policy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div> <!-- end #footer -->

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>
<script src="js/zip.js"></script>
<script src="js/accordion.js"></script>
<script src="js/sort.js"></script>
<script src="js/keyword.js"></script>
 <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
	$(document).ready(function(){
	
		$('#slider1').change(function(){ 
			$(".show").html($(this).val()+" yrs").show();
			
			var keyword = $("#keyword").val();
			var category = "<?php echo $sub_sub['sub_subcate']; ?>";
			var experience = $(this).val();
			
			var ajx1 = "keyword="+keyword+"&location="+location+"&experience="+experience+"&category="+category;
			
			var ajx = "category="+category+"&experience="+experience;
			
			
			if(keyword=='' || location=='')
			{
				$.ajax
				({
				type: "POST",
				url: "be_exp.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
				});
			}
			else
			{
				$.ajax
				({
				type: "POST",
				url: "be_exp1.php",
				data: ajx1,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
				});
			}
			
		});
	});
	
	  $( "#slider-range-min" ).slider({
    range: "min",
    values: [30000,70000],
    min: 0,
    max: 100000,
    slide: function( event, ui ) {
      $( "#amount" ).val( "Rs "+ ui.values[0]+" - Rs "+ui.values[1]);
		var s = ui.values[0];
		var s1 = ui.values[1];
		var zip = $("#zip").val();
		var category = "<?php echo $sub_sub['sub_subcate']; ?>";
		
		$.ajax
		({
			type: "POST",
			url: "be_price.php",
			data: "s="+s+"&s1="+s1+"&category="+category+"&zip="+zip,
			cache: false,
			success: function(html)
			{
				$("#result_show").html(html)
			}
		});
    }
  });
  $( "#amount" ).val("Rs " + $( "#slider-range-min" ).slider( "value" ));
</script>

<script>
$(document).ready(function(){

	$("#submit").click(function(){
		
		var location = $("#zip").val();
		var keyword = $("#keyword").val();
		var subcategory = $("#sub_category").val();
		var category = "<?php echo $sub_sub['sub_subcate']; ?>";
		
		var ajx = "location="+location+"&subcategory="+subcategory+"&keyword="+keyword+"&category="+category;
		
		$("#category_tree").html("<h2><?php echo $rw; ?><span class='category-name'><b>\</b>"+subcategory+"</span><span class='comments'></span></h2>");
	
		if(location=="" || subcategory=="")
		{
			alert("Please fill fields")
		}
		else
		{		
			$.ajax
			({
				type: "POST",
				url: "backend/be_search.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
		}
	});
	
	$("#submit1").click(function(){
		
		var location = $("#location").val();
		var keyword = $("#keyword").val();
		var subcategory = $("#sub_category").val();
		
		var ajx = "location="+location+"&subcategory="+subcategory+"&keyword="+keyword;
		
		$("#category_tree").html("<h2>Category<span class='category-name'>\<b>\</b>"+subcategory+"</span><span class='comments'></span></h2>");
		
		if(location=="" || subcategory=="")
		{
			alert("Please fill fields")
		}
		else
		{		
			$.ajax
			({
				type: "POST",
				url: "backend/be_search.php",
				data: ajx,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
		}
	});

});
</script>

<script>

  $("#map_canvas").goMap({

    maptype: 'ROADMAP',
    scrollwheel: false,
    zoom: 6,
    markers: [{
        latitude: 26.9133,
        longitude: 70.9139,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 28.641529,
        longitude: 77.120915,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 26.2215,
        longitude: 78.1780,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 31.1033,
        longitude: 77.1722,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'

      },{
        latitude: 26.5727,
        longitude: 73.8390,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 26.846511,
        longitude: 80.946683,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
	  },{
        latitude: 29.535516,
        longitude: 77.391026,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 30.7900,
        longitude: 76.7800,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 28.0167,
        longitude: 73.3119,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 26.9260,
        longitude: 75.8235,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 28.3640,
        longitude: 79.4150,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 25.6110,
        longitude: 85.1440,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 24.7500,
        longitude: 85.0100,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 26.7588,
        longitude: 83.3697,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 25.1800,
        longitude: 75.8300,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 24.6500,
        longitude: 77.3200,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 25.2820,
        longitude: 82.9563,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      },{
        latitude: 22.7253,
        longitude: 75.8655,
        icon: 'img/content/marker.png',
        html: 'SellUrTime'
      }]
  });


</script>

<script>
$(document).ready(function(){
	$("#submit_aval").click(function(){
	
		
		var service_day = $("#service_day").val();
		var category = "<?php echo $sub_sub['sub_subcate']; ?>";
		
		var jj = "service_day="+service_day+"&category="+category;
		
		$.ajax
			({
				type: "POST",
				url: "backend/be_serviceday.php",
				data: jj,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
	})
})
</script>

<script>
$(document).ready(function(){
$(".accordion nav h2").click(function(){
    if(false == $(this).next().is(":visible"))
	{
        $('.accordion ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});

$("#sortby").change(function(){

	var sort = $("#sortby").val();
	var category = "<?php  echo $rw; ?>";
	
	if(sort == "Name")
	{
	$.ajax
			({
				type: "POST",
				url: "be_sortby.php",
				data: "sort="+sort+"&category="+category,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
	}
	else if(sort == "LH")
	{
		var category = "<?php  echo $rw; ?>";
			
		$.ajax
			({
				type: "POST",
				url: "be_sortby_lh.php",
				data:"&category="+category,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
	}
	else if(sort == "HL")
	{
		var category = "<?php  echo $rw; ?>";
			
		$.ajax
			({
				type: "POST",
				url: "be_sortby_hl.php",
				data:"&category="+category,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
	}
	
	else
	{
	$.ajax
		({
				type: "POST",
				url: "be_sortby1.php",
				data: "sort="+sort+"&category="+category,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html);
				}
			});
	}
})
});
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
					$(document).ready(function(){
						  $("#dropdown12").hover(function(){
							$("#show_categories").show();
							
						  });
							
							$("body").click(function(){
								$("#show_categories").hide();
							})
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
								$("#zip").val(c);
							}
							else
							{
								selected = $('.search-suggestion p').eq(0).addClass('selected').focus();
								var c = $(".search-suggestion p").attr("cc");
								$("#zip").val(c);
							}
						}
						else
						{
							selected = $('.search-suggestion p').eq(0).addClass('selected').focus();
							var c = $(".search-suggestion p").attr("cc");
							$("#zip").val(c);
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
								var c = $(selected).attr("cc");
								$("#zip").val(c);
							}
							else
							{
								selected = $('.search-suggestion p').eq(7).addClass('selected').focus();
								var c = $(selected).attr("cc");
								$("#zip").val(c);
							}
						}
						else
						{
							selected=$('.search_down1 p').eq(7).addClass('selected').focus();
							var c = $(selected).attr("cc");
								$("#zip").val(c);
						}
					}
			});
					</script>

</body>
</html>
<?php
include '../connect.php';
$category_id = @$_GET['catid'];

$check_id = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category_id'");

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
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>


  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
<div id="main-wrapper">

  <header id="header">
    <div class="header-top-bar">
      <div class="container">
        <!-- HEADER-LOGIN -->
		<div class="header-logo text-center">
          <a href="#"><img src="img/logo.png" style="margin-top:-2px;"/></a>
        </div>
        <div class="header-login" style="margin-left: 19%;">

          <a href="#" class="" style="color:white;">CATEGORIES</a>

          <img src="img/drop.png">
          <div style="width: 488px; height: 268px; color: #0F7AC1; font-size: 18px; line-height: 3; 
		               font-weight: normal; background-color:#fff; border-top: 4px solid #0f7ac1;">
            <ul style="display:inline; list-style-type: none;">
                <li style="float:left;">
                <a href="category_listing.php?catid=1" style="color: #0F7AC1;">Trainers and Tutors</a>
                </li>
                <li style="float: right;">
                <a href="category_listing.php?catid=2" style="color: #0F7AC1;">Business Consultants</a>
                </li>
                <li style="float:left;">
                <a href="category_listing.php?catid=3" style="color: #0F7AC1;">IT and Marketing</a>
                </li>
                <li style="float:right;">
                <a href="category_listing.php?catid=4" style="color: #0F7AC1;">Fashion and Lifestyle</a>
                </li>
                <li style="float: right;">
                <a href="category_listing.php?catid=5" style="color: #0F7AC1;">Beauty and Wellness</a>
                </li>
                <li style="float:left;">
                <a href="category_listing.php?catid=6" style="color: #0F7AC1;">Home and Utility</a>
                </li>
               
                <li style="float:left;">
                <a href="category_listing.php?catid=7" style="color: #0F7AC1;">Events & Entertainment</a>
                </li>
                
                <li style="float:right;">
                <a href="category_listing.php?catid=8" style="color: #0F7AC1;">And Everything Else..</a>
                </li>
                
              </ul>
          </div>

        </div> <!-- END .HEADER-LOGIN -->

        <!-- HEADER REGISTER -->
		<!--class use in how it work header-register-->
        <div class="header-register" style="padding-left:3%;">
          <a href="#" class="" style="color:white">HOW IT WORKS</a>

         <!-- <div>
             <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="email" class="form-control" placeholder="Email">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Register">
            </form>
          </div>-->

        </div> <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        
        <!-- END HEADER LOGO -->

        <!-- HEADER-SOCIAL 
        <div class="header-social">
          <a href="#">
            <span><i class="fa fa-share-alt"></i></span>
            <i class="fa fa-chevron-down social-arrow"></i>
          </a>

          <ul class="list-inline">
            <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
         END HEADER-SOCIAL -->

        <!-- HEADER-LANGUAGE 
        <div class="header-language">
          <a href="#">
            <span>EN</span>
            <i class="fa fa-chevron-down"></i>
          </a>

          <ul class="list-unstyled">
            <li class="active"><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#">PT</a></li>
            <li><a href="#">IT</a></li>
          </ul>
        </div> END HEADER-LANGUAGE -->

        <!-- CALL TO ACTION -->
        <div class="header-call-to-action">
          <a href="#" class="btn btn-default"><i class="fa fa-plus"></i>Post requirement</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search map">
      <div class="header-search-bar">
      

          <div class="search-toggle">
            <div class="container">
              <div class="distance-range">
                <p>
                  <label for="amount-search">Distance:</label>
                  <input type="text" id="amount-search">
                </p>

                <div id="slider-range-search"></div>
              </div>  <!-- end #distance-range -->
			
			
			
			
              <div class="distance-range">
                <p>
                  <label for="amount-search">Days published:</label>
                  <input type="text" id="amount-search-day">
                </p>

                <div id="slider-range-search-day"></div>
              </div>  <!-- end #distance-range -->

              <p>Location:</p>
              <div class="select-country">
                <select class="" data-placeholder="-Select Country-" id="location1">
                  <option value="Delhi">Delhi</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Gurgaon">Gurgaon</option>
                </select>
              </div>

              <div class="region">
                <input type="text" placeholder="-Region-">
              </div>

              <div class="address">
                <input type="text" placeholder="-Address-">
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                </select>
              </div>

              <button class="search-btn" type="submit" id="submit1"><i class="fa fa-search"></i></button>

            </div>
          </div>  <!-- END .search-toggle -->


          <div class="container">
            <button class="toggle-btn" type="submit1"><i class="fa fa-chevron-down"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Keywords" id="keyword">
              </div>

              <div class="select-location">
                <select class="" data-placeholder="-Select location-" id="location">
                  <option value="Delhi">Delhi</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Gurgaon">Gurgaon</option>
                  <option value="Chennai">Chennai</option>
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-" id="sub_category">
				<?php
					
					$subcategory = mysql_query("SELECT * FROM `syt_subcategory`");

					$num_row_subcategory = mysql_num_rows($subcategory);
					
					if($num_row_subcategory == 0)
					{
						echo '<option value="option1">No category found..</option>';
					}
					else
					{
						while($row = mysql_fetch_assoc($subcategory))
						{
							echo '<option value="'.$row["subcategory"].'">'.$row["subcategory"].'</option>';
						}
					}
				?>
                 
                  
                </select>
              </div>

              <button class="search-btn" type="submit" id="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        
      </div> <!-- END .header-search-bar -->
		
	<div style="width:100%;">
			
			</div>
			
      <div class="map-section">

        <div id="map_canvas"></div>

      </div>
    </div> <!-- END .SEARCH-MAP -->
	<!--
    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li class="bg-color"><a href="#">Home<i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="home-map-grid.html">Home-map(grid)</a></li>
                <li><a href="home-map-list.html">Home-map(list)</a></li>
                <li><a href="index-2.html">Home slider(view-1)</a></li>
                <li><a href="home-category.html">Home slider(view-2)</a></li>
              </ul>

            </li>

            <li class=""><a href="#">Company<i class="fa fa-angle-down"></i></a>

              <ul>
                <li><a href="company-profile.html">Company(Profile)</a></li>
                <li><a href="company-product.html">Company(Product)</a></li>
                <li><a href="company-portfolio.html">Company(Portfolio)</a></li>
                <li><a href="company-blog.html">Company(Blog)</a></li>
                <li><a href="company-contact.html">Company(contact)</a></li>
              </ul>

            </li>

            <li><a href="sample-page.html">Sample Page</a></li>
            <li><a href="shortcodes.html">Shortcodes</a></li>

            <li class="">
              <a href="#">Blog<i class="fa fa-angle-down"></i></a>

              <ul>
                <li><a href="blog-list.html">Blog list</a></li>
                <li><a href="blog-post.html">Blog-post</a></li>
              </ul>

            </li>

            <li><a href="price-listing.html">Price Listing</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
          </ul>
        </nav>
      </div> 
    </div> -->
  </header> <!-- end #header -->
	
  <div id="page-content">
    <div class="container">
      <div class="row">

        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details-list view-switch">
              <div class="tab-content">

                <div class="tab-pane" id="antique-all">
                  <h2>All Categories<span class="category-name"><b>\</b>antique</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
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


                <div class="tab-pane" id="jewelry">
                  <h2>Advertisement<span class="category-name"><b>\</b>jewelry</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
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

                <div class="tab-pane active" id="category-book">
                  <h2>Category<span class="category-name"><b>\</b>Home and Utility</span><span class="comments">99</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
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

                  <div class="row clearfix" id="result_show">
                     <!--CHANGES DKFKLDJFKLDSFDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
<div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/post-img-1.jpg" alt="">

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

                        <h4><a href="blog-post.php?postid=27">Old Bookman's</a></h4>

                        <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> 
          
          


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

                <div class="tab-pane" id="antique">
                  <h2>Home and Utility<span class="category-name"><b>\</b>Antique</span><span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
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
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
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

              <div class="advertisement">
                <p>Advertisement</p>
                <img src="img/add.jpg" alt="">
              </div>

            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>

          <div class="page-sidebar">

            <div class="location-details">
            
                <div class="select-country">
                  <label>Experience (in year)</label>

                  <select class="experience21">
                    <option value="0-2">0-2</option>
                    <option value="2-5">2-5</option>
                    <option value="6-8">6-8</option>
                    <option value="8-10">8-10</option>
                    <option value="10-12">10-12</option>
                    <option value="12-14">12-14</option>
                    <option value="14-16">14-16</option>
                    <option value="16-18">16-18</option>
                    <option value="18-20">18-20</option>
                    <option value="20+">20+</option>
                  </select>
				  
				  

                </div> <!-- end .select-country -->

                <div class="select-state">
                  <label>State</label>

                  <select class="" data-placeholder="-Select-">
                    <option value="option1">option 1</option>
                    <option value="option2">option 2</option>
                    <option value="option3">option 3</option>
                    <option value="option4">option 4</option>
                  </select>

                </div> <!-- end .select-state -->

                <div class="zip-code">
                  <label>ZIP Code</label>

                  <input type="text" placeholder="Enter">

                </div> <!-- end .zip-code -->
             

            </div> <!-- end .location-details -->

            <div class="distance-range">
              <p>
                <label for="amount">Experience</label>
                <input type="text" id="amount" >
              </p>

              <div id="slider-range-min"></div>
            </div>  <!-- end #distance-range -->

            <!-- Category accordion -->
            <div id="categories">
              <div class="accordion">
                <ul class="nav nav-tabs accordion-tab" role="tablist">
                  <li>
                    <a href="#"><i class="fa fa-star-o"></i>All Categories</a>

                    <div>
                      <a href="#antique-all"  role="tab" data-toggle="tab">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-bullhorn"></i>Trainers and Tutors</a>

                    <div>
                      <a  href="#jewelry" role="tab" data-toggle="tab">Jewelry</a>
                    </div>
                  </li>

                  <li class="active">
                    <a href="#" role="tab" data-toggle="tab"><i class="fa fa-shopping-cart"></i>Business Consultants</a>

                    <div>
                      <a href="#antique" role="tab" data-toggle="tab">Antique</a>
                      <a class="active" href="#category-book" role="tab" data-toggle="tab">Books</a>
                      <a href="#cars-motorcycles" role="tab" data-toggle="tab">Cars &amp; Motorcycles</a>
                      <a href="#">Computer &amp; Tablets</a>
                      <a href="#">Creative &amp; Digitals</a>
                      <a href="#">Fashion</a>
                      <a href="#">Fitness &amp; Sport</a>
                      <a href="#">Furnishing</a>
                      <a href="#">Health &amp; Beauty</a>
                      <a href="#">Hobbies</a>
                      <a href="#">Jewelry</a>
                      <a href="#">Kitchen</a>
                      <a href="#">Leisure</a>
                      <a href="#">Music</a>
                      <a href="#">Ticket</a>
                      <a href="#">Video Game &amp; Console</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-graduation-cap"></i>IT and Marketing</a>

                    <div>
                      <a href="#">Antique</a>
                      <a href="#">Computer &amp; Tablets</a>
                      <a href="#">Creative &amp; Digitals</a>
                      <a href="#">Fashion</a>
                      <a href="#">Fitness &amp; Sport</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-paper-plane-o"></i>Fashion and Lifestyles</a>

                    <div>
                      <a href="#">Fashion</a>

                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-home"></i>Beauty and Wellness</a>

                    <div>
                      <a href="#">Furnishing</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-cogs"></i>Home and Utility</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-book"></i>Events & Entertainment</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-building-o"></i>Real Estate</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-cutlery"></i>Resturants &amp; Pubs</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-angle-right"></i>See More</a>

                    <div class="hide">
                      <a href="#">Antique</a>
                    </div>
                  </li>

                </ul>
              </div> <!-- end .accordion -->
            </div> <!-- end #categories -->


          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
      </div> <!-- end .row -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->


  <div class="classifieds-content">
    <div class="container">
      <div class="heading-section clearfix">
        <h1>Categories</h1>

        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Post Your requirements</a>

       
          <input type="text" placeholder="Search by keywords">

          <button type="submit"><i class="fa fa-search"></i></button>
       
      </div> <!-- END .heading-section -->

      <!-- CLSSIFIEDS-CATEGROY BEGIN -->
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-bullhorn"></i>Trainers and Tutorss <span>(1786)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-home"></i>Beauty and Wellness <span>(754)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>
          </ul> <!-- END MAIN UL -->
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Business Consultants<span>(1987)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-cogs"></i>Home and Utility <span>(1405)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-graduation-cap"></i>IT and Marketing <span>(996)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-book"></i>Events and Entertainment<span>(1256)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-paper-plane-o"></i>Fashion and Lifestyle <span>(2726)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building-o"></i> Everything Else...<span>(1131)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->


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
            <h3>Twitter Feeds</h3>

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
              <h3>Sell your time Club</h3>

              <!--<ul>
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
          <li><a href="#">Contact</a></li>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>

<script>
$(document).ready(function(){
	$("#submit").click(function(){
		
		var location = $("#location").val();
		var keyword = $("#keyword").val();
		var subcategory = $("#sub_category").val();
		
		var ajx = "location="+location+"&subcategory="+subcategory+"&keyword="+keyword;
		
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
  $(document).ready(function(){
	$(".experience21").change(function(){
		
			alert("dfsa")
	});
});
</script>
</body>
</html>

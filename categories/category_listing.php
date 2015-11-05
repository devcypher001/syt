<?php
include '../connect.php';
session_start();
$category_id = @$_GET['catid'];
$location_filled = @$_GET['location_filled'];

$check_id = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category_id'");

$cc = mysql_fetch_array($check_id);
$rw = $cc['category'];

$num_row = mysql_num_rows($check_id);

if($num_row == 0)
{
  //header('Location:../404.php');
}
?>
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
  
   <link href="../css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="../style.css" rel="stylesheet">
  <!-- Flex Slider -->
  <link href="../css/flexslider.css" rel="stylesheet">
   
  <!-- Carousel Slider -->
  <link href="../css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="../css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>  <![endif]-->
    <!--<link rel="stylesheet" href="../css/freshslider.min.css">-->
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
      .arrow-left {
        border-right-color: #DBDBDB !important;
        }
      .buddy_desc{

        border-color: #EAEAEA !important;
        }
      .subheight{
        max-height: 180px !important;
        overflow-y:scroll;
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
 .keyword-suggestion p
  {
  
  width:280px;
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
  
  #errmsg{
    color: red;
  }
  
    </style>
    <link rel="stylesheet" href="../css/jquery.range.css">
</head>
<body>
 
    <header id="header-style-1" style="background:#4753a3;">
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
                                                <li><a href="category_listing.php?catid=2">Business consultants </a></li>
                                                <li><a href="category_listing.php?catid=4">Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catid=5">Beauty and Wellness</a></li>
                                                <li><a href="category_listing.php?catid=9">Social Causes</a></li>
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
                <li><a href="../login" style="color:#fff;" target="_blank">Login</a></li>
                 <li ><a href="../register" style="color:#fff;" target="_blank">Sign Up</a></li>
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
          <input type="text" class="form-control" placeholder="Keywords" id="keyword" >
        </div>
        <div class="keyword-suggestion" style="position:absolute;z-index:1000000;background:#fff;" >
        </div>
        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group">
          <select class="form-control" data-placeholder="-Select Subcategory-" id="sub_category">
        <?php
        
          $subcategory = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = '$category_id' ");
          
          //---------------------------------------
          $sub1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = '$category_id' order by `sub_subcate` asc");
          // $sub_sub1 = mysql_fetch_array($sub1);
          //---------------------------------------
          
          $sub_sub = mysql_fetch_array($subcategory);
          
          $num_row_subcategory = mysql_num_rows($check_id);
        
          if($rw == "Trainers and Tutors")
          {
          
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=1 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
              
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=2 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=3 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=4 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=5 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate'] ;?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=6 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate'] ;?></option>
            <?php
              }
              echo "</optgroup>";
            }

          }
          else if($rw == "IT and Marketing")
          {
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=8 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
            
            $kk = mysql_query("SELECT * FROM `syt_subcategory` WHERE `id`=9 order by `subcategory` asc");
            $tt = mysql_num_rows($kk);
            while($t = mysql_fetch_assoc($kk))
            {
              $ssid=$t['id'];
              $qq = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ssid' order by `sub_subcate` asc");
            ?>
              <optgroup label="<?php echo $t['subcategory']; ?>">
            <?php
              while($t1 = mysql_fetch_assoc($qq))
              {   
            ?>
                <option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
            <?php
              }
              echo "</optgroup>";
            }
          }
          else
          {
            if($num_row_subcategory == 0)
            {
              echo '<option value="option1">No category found..</option>';
            }
            else
            {
              while($row = mysql_fetch_assoc($sub1))
              {
                echo '<option value="'.$row["sub_subcate"].'">'.$row["sub_subcate"].'</option>';
              }
            }
          }
        ?>
                 
                </select>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Location" id="zip">
        </div>
        <div class="form-group search-suggestion" style="position:absolute;z-index:10000;background:#fff;padding-left: 13px;">
        </div>
        
      </div>

      <div class="col-lg-1 col-md-1 col-sm-1">
        <div class="form-group pull-right">
          <button class="search-btn" type="submit" id="submit" style="background-color: #159605; color:#333333;font-size: 16px;border: none;padding: 8px 16px;border-radius: 5px;">
          <i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
    </div>
    <!--
    <div class="container-fluid" style="position:absolute;z-index:1000000;">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="background:#fff;">
        
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-3">
        
        </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-6 col-md-offset-6 col-sm-offset-6" style="background:#fff;">
        
        </div>

      </div>
    </div>-->
  </section><!-- end post-wrapper-top -->
    <!--
      Banner
    -->
    <section class="post-wrapper-top ">
    <div class="container-fluid">
      <div class="row" style="margin-left:-29px;margin-top:-3px;">
      <?php 
        $banner_image = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category_id'");
        
        $image = mysql_fetch_array($banner_image);
        
      ?>
        <div class="col-md-12 col-sm-12 hidden-xs">
            <img src="img/<?php echo $image['images']; ?>" >
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
                    <p style="font-size:16px;font-weight:bold;">Experience (in years)</p>
                     <!--<div id="ranged-value" style="width: 250px; margin: 20px"></div>-->
                     <div class="demo-output" style="padding:6px;">
                      <input class="range-slider" type="hidden" value="2,10"/>
                    </div>
                     <p style="font-size:16px;font-weight:bold;margin-top:25px;">Prices (Rs.)<b id="errmsg" class="pull-right"></b></p>
                     <div class="form-group">
                     <div class="row">
                       <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                         <input type="search" class="form-control"  placeholder="min" id="pmin" maxlength="8">
                       </div>
                       <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
                         <strong>__</strong>
                       </div>
                       <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                         <input type="search" class="form-control" placeholder="max" id="pmax" maxlength="8">
                       </div>

                       <div class="row" style="margin-top:14%;">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="form-group text-center">
                          <button class="btn btn-primary" id="submit_price" style="width: 60%;margin-left: -6%;font-weight:bold;">Filter</button>
                        </div>
                       </div>
                       </div>

                     </div>
                    
                    
                    </div>

                </div><!-- end widget -->

                <div class="widget">
                <div class="form-group">
                <label class="form-label"> Availability</label>
                  <select class="form-control" id="service_day">
                    <option value="Monday-Friday">Monday - Friday</option>
                    <option value="Monday-Saturday">Monday - Saturday</option>
                    <option value="On Weekends">On Weekends</option>
                    <option value="All 7 days">All 7 days</option>
                  </select>
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-primary" style="width: 65%;margin-left: -6%;font-weight:bold;" id="submit_aval">Submit</button>
                </div>
              </div><!-- end widget -->

                <div class="widget text-widget">
                <h2 align="center">ALL CATEGORIES</h2>
                  <div id="MainMenu">
                    <div class="list-group panel">
                      <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-star-o"></i> Trainers and Tutors</a>
                      <div class="collapse " id="demo3" >
                        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Academic&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu1" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                            <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 1 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a class="list-group-item" data-parent="#SubMenu1" href="category_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>

                        <a href="#SubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu2">Language Experts&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu2" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                              <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 2 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a  class="list-group-item" data-parent="#SubMenu2"  href="category_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>
                        <a href="#SubMenu3" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu3">Arts and Crafts&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu3" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                              <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 6 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a  class="list-group-item" data-parent="#SubMenu3"  href="category_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>

                        <a href="#SubMenu4" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu4">Sports & Recreation&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu4" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                              <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 4 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a  class="list-group-item" data-parent="#SubMenu4"  href="category_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>

                        <a href="#SubMenu5" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu5">Performance Arts&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu5" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                              <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 3 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a  class="list-group-item" data-parent="#SubMenu5"  href="category_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>

                      </div>
                      <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-folder-o"></i> Business Consultants</a>
                      <div class="collapse subheight" id="demo4">
                          <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 2 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=2&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
              
                      </div>
                      <a href="#demo5" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-desktop"></i> IT and Marketing</a>
                      <div class="collapse " id="demo5">
                         <a href="#SubMenu7" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu7">IT&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu7" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                            <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 8 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a class="list-group-item" data-parent="#SubMenu7" href="category_listing.php?catid=3&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>
                        <a href="#SubMenu8" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu8">Marketing&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="collapse list-group-submenu" id="SubMenu8" style="overflow-y: scroll; height: 131px !important;">
                          
                          
                            <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 11 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <li><a class="list-group-item" data-parent="#SubMenu8" href="category_listing.php?catid=3&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
                            <?php
                              }
                            ?>
                        </div>

                       
                        
                      </div>
                      <a href="#demo6" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-gift"></i> Fashion and Lifestyle</a>
                      <div class="collapse subheight" id="demo6">
                            <?php 
                              $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 4 order by `sub_subcate` asc");
                              while($k1 = mysql_fetch_assoc($kk))
                              {
                            ?>
                                <a class="list-group-item" href="category_listing.php?catid=4&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                            <?php
                              }
                            ?>
                      </div>
                      <a href="#demo7" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-female"></i> Beauty and Wellness</a>
                      <div class="collapse subheight" id="demo7">
                          <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 5 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=5&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
                      </div>
                      <a href="#demo8" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-cogs"></i> Home and Utility</a>
                      <div class="collapse subheight" id="demo8">
                          <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 6 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=6&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
                      </div>
                      <a href="#demo9" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-film"></i> Events & Entertainment</a>
                      <div class="collapse subheight" id="demo9">
                            <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 7 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=7&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
                      </div>
                      <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-building-o"></i> Other</a>
                      <div class="collapse subheight" id="demo1">
                          <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 8 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=8&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
                      </div>
                      <!-- -->
                      <a href="#demo10" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-group"></i> Social causes</a>
                      <div class="collapse subheight" id="demo10">
                          <?php 
                            $kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 9 order by `sub_subcate` asc");
                            while($k1 = mysql_fetch_assoc($kk))
                            {
                          ?>
                              <a class="list-group-item" href="category_listing.php?catid=9&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a>
                          <?php
                            }
                          ?>
                      </div>
                      <!-- -->
                    </div>
                  </div>
                </div>

                
        
      </div><!-- end sidebar -->
          <div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="buddypress-top clearfix">
                    <div id="category_tree" class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h2><?php echo $rw; ?> <span class="category-name"><b>\</b><?php $category_name = mysql_fetch_array($check_id);
                          echo $category_name['category']." ".@$_GET['sub'];
                      ?></span>
                        </mark></h2>
                    </div>

                    <div class="pull-right col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <select id="sortby" class="custom-select form-control" class="selectpicker">
                            <option value="">Sort by</option>
                        <option value="Name">Name</option>
                        <option value="experience">Experience (Highest-Lowest)</option>
                        <option value="LH" >Price (Lowest-Highest)</option>
                        <option value="HL">Price (Highest-Lowest)</option> 
                        </select>
                    </div>
        </div>
                     <!-- content start-->
                <?php
                $_catid = $category_name['category'];

                $categories_select = mysql_query("SELECT * FROM `syt_registration` WHERE `category` ='$rw' AND `title` ='Seller' order by `id`");
                
                $num_categories_select = mysql_num_rows($categories_select);

                $categories_select1 = mysql_query("SELECT * FROM `syt_add_category` WHERE `category` ='$rw' order by `id`");
                
                $num_categories_select1 = mysql_num_rows($categories_select1); 

                if($num_categories_select == 0 )
                {
                  echo "<p style='margin-left:2%;'><font size='5' style='text-align:justify;'>Looking to buy services under ".$rw."?<br>Please <a href='interest.php'>register</a> your interest.</font></p>";
                }  
                else{
                  while ($rwe = mysql_fetch_assoc($categories_select)) {
                ?>
                <div class="" id="result_show">
                <div class="buddypress_content notfilter">
                  <div class="buddy_image col-md-2 pull-left">
                    <?php
                    $img = $rwe['image'];
                    if($img == '')
                    {
                      
                      echo "<a href='#'><img class='img-thumbnail' src='img/content/comment-image-1.jpg' alt=''/></a>";
                    }
                    else{
                      echo "<a href='#'><img class='img-thumbnail' src='../dashboard/images/".$img."' alt=''/></a>";
                    }
                    ?>
                      
                    </div><!-- end buddy_image -->
                    
                    <div class="buddy_desc col-md-10 ">
                      <strong><a href="profile.php?id=<?php echo $rwe['id']; ?>"><?php echo $rwe['firstname']." ".$rwe['lastname']; ?></a></strong>
                      <small><a href="#"><?php echo $rwe['subcategory']; ?></a>, <a href="#"><?php echo $rwe['category']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $rwe['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $rwe['charge']; ?> &nbsp;&nbsp;<?php if(!empty($rwe['charge_mode'])) { echo $rwe['charge_mode']; } ?> 
                    </p>
                    <p><strong  >Around</strong>: <?php echo $rwe['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $rwe['service_day']; ?> </p>
                    
                  
          
            <p style="text-align:justify;">
            <?php
              $expr = strlen($rwe['experience_details']);
              if($expr <= 146)
              {
                echo $rwe['experience_details']." ...<a class='readmore' href='profile.php?id=".$rwe['id']."'>Read more</a>";
              }
              else
              {
                echo substr($rwe['experience_details'],0,130)."...<a class='readmore' href='profile.php?id=".$rwe['id']."'>Read more</a>";
              }
            ?>
            </p>
            <div class="arrow-left"></div>
                    </div><!-- end buddy_desc -->
                    </div><!--not filter-->
                </div><!-- buddypress_content -->
                <?php 
          }
        }

        if($num_categories_select1 == 0)
          {
            //echo "<p style='margin-left:2%;'><font size='5' style='text-align:justify;'>Looking to buy services under ".$rw."?<br>Please <a href='interest.php'>register</a> your interest.</font></p>";
          }
          else
          {
            while($rwe1 = mysql_fetch_assoc($categories_select1))
            {
              $userid1 = $rwe1['user_id'];
              $select_user = mysql_query("SELECT `id`,`zip`,`firstname`,`lastname`,`title` FROM `syt_registration` WHERE `title` = 'Seller' AND `id`='$userid1'");
              $fetch_select_user = mysql_fetch_array($select_user);
              if($fetch_select_user['title']=="Seller")
              {
        ?>

                  <div class="" id="result_show">
                  <div class="buddypress_content notfilter">
                  <div class="buddy_image col-md-2 pull-left">
                    <?php
                    $img = $rwe1['image'];
                    if($img == '')
                    {
                      
                      echo "<a href='#'><img class='img-thumbnail' src='img/content/comment-image-1.jpg' alt=''/></a>";
                    }
                    else{
                      echo "<a href='#'><img class='img-thumbnail' src='../dashboard/images/".$img."' alt=''/></a>";
                    }
                    ?>
                      
                    </div><!-- end buddy_image -->
                    
                    <div class="buddy_desc col-md-10">
                      <strong><a href="profile.php?id=<?php echo $rwe1['user_id']; ?>"><?php echo $fetch_select_user['firstname']." ".$fetch_select_user['lastname']; ?></a></strong>
                      <small><a href="#"><?php echo $rwe1['subcategory']; ?></a>, <a href="#"><?php echo $rwe1['category']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $rwe1['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $rwe1['charge']; ?>&nbsp;&nbsp;<?php if(!empty($rwe1['charge_mode'])) { echo $rwe1['charge_mode']; } ?>
                    </p>
                    <p><strong  >Around</strong>: <?php echo $fetch_select_user['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $rwe1['service_day']; ?> </p>
                    
                  
          
                    <p style="text-align:justify;">
                    <?php
                      $expr = strlen($rwe1['experience_details']);
                      if($expr <= 146)
                      {
                        echo $rwe1['experience_details']." ...<a class='readmore' href='profile.php?id=".$rwe1['user_id']."'>Read more</a>";
                      }
                      else
                      {
                        echo substr($rwe1['experience_details'],0,130)."...<a class='readmore' href='profile.php?id=".$rwe1['id']."'>Read more</a>";
                      }
                    ?>
                    </p>
                    <div class="arrow-left"></div>
                            </div><!-- end buddy_desc -->
                            </div><!-- end not filter -->
                </div><!-- buddypress_content -->
                  <?php
                      }}
                    }
                    ?> 
        <!-- content end-->
                        
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
                        <a class="twitter-timeline" href="https://twitter.com/sellyourtime" data-widget-id="587909950271176705">Tweets by @sellyourtime</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
  <div class="dmtop" >Scroll to Top</div>
        
  <!-- Main Scripts-->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.range.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/zip.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>
  
  <script src="js/keyword.js"></script>
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
  <script type="text/javascript">
        $(document).ready(function(){
            
            $('.range-slider').jRange({
                from: 0,
                to: 20,
                step: 1,
                scale: [0,5,10,15,20],
                format: '%s',
                width: 300,
                showLabels: true,
                isRange : true,
                onstatechange : function (data) {
                
                  var exp1 = data;

                  var category = "<?php echo $rw; ?>";
                  var ajx = "category="+category+"&exp1="+exp1;
                  
                  $.ajax
                  ({
                    type: "POST",
                    url: "new_exp.php",
                    data: ajx,
                    cache: false,
                    success: function(html)
                    {
                      $("#result_show").html(html);
                      $(".notfilter").css("display","none");
                    }
                  });
                }
            });
        });
    </script>

<script>
    
    $(document).ready(function () {
    //called when key is pressed in textbox
    $("#pmax,#pmin").keypress(function (e) {
       //if the letter is not digit then display error and don't type anything
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          //display error message
          $("#errmsg").html("Digits Only").show().fadeOut("2000");
                 return false;
      }
     });

    $("#submit_price").click(function(){
      var pmax = $("#pmax").val();
      var pmin = $("#pmin").val();
       var category = "<?php echo $rw; ?>";
      var price = "pmax="+pmax+"&pmin="+pmin+"&category="+category;

      if(pmin == ''){
        $("#errmsg").html("Fill Min Price").show().fadeOut(4000);
      }
      else{
        if(pmax == ''){
          $("#errmsg").html("Fill Max Price").show().fadeOut(4000);
        }
        else if(pmin > pmax){
          $("#errmsg").html("Min price greater than Max price").show().fadeOut(4000);
        }
        else if(pmin == pmax){
          $("#errmsg").html("Min price is equal to Max price").show().fadeOut(4000);
        }
        else{
          $.ajax
          ({
            type: "POST",
            url: "new_price.php",
            data: price,
            cache: false,
            success: function(html)
            {
              $("#result_show").html(html);
               $(".notfilter").css("display","none");
            }
          });
        }
      }

    });
  });
</script>
  <!-- have to check -->
<script>
$(document).ready(function(){

  $("#submit").click(function(){
    
    var location = $("#zip").val();
    var keyword = $("#keyword").val();
    var subcategory = $("#sub_category").val();
    
    
    var category = "<?php echo $sub_sub['sub_subcate']; ?>";
    
    var ajx = "location="+location+"&subcategory="+subcategory+"&keyword="+keyword+"&category="+category;
    
    $("#category_tree").html("<h2><?php echo $rw; ?><span class='category-name'><b> /</b>"+subcategory+"</span><span class='comments'></span></h2>");
  
    if(subcategory=="")
    { 
      alert("Please fill fields")
    }
    else
    { 
      
      $.ajax
      ({
        type: "POST",
        url: "backend/be_search1.php",
        data: ajx,
        cache: false,
        success: function(html)
        {
          $("#result_show").html(html);
          $(".notfilter").css("display","none");
        }
      });
     
      
    }
  });
  
  

});
</script>



<script>
$(document).ready(function(){
  $("#submit_aval").click(function(){
  
    
    var service_day = $("#service_day").val();
    var category = "<?php  echo $rw; ?>";
    
    var jj = "service_day="+service_day+"&category="+category;
    
    $.ajax
      ({
        type: "POST",
        url: "backend/be_serviceday1.php",
        data: jj,
        cache: false,
        success: function(html)
        {
          $("#result_show").html(html);
          $(".notfilter").css("display","none");
        }
      });
  
  })
})
</script>

<script>
/*
$("#apply_sort").click(function(){
  
  // alert("DSAF")
  
  

})
});
*/
$(document).ready(function() {
  $("#sortby").change(function(){
    var sort = $("#sortby").val();
    var category = "<?php  echo $rw; ?>";

    if(sort == "Name")
    {
    $.ajax
        ({
          type: "POST",
          url: "new_sortby.php",
          data: "sort="+sort+"&category="+category,
          cache: false,
          success: function(html)
          {
            $("#result_show").html(html);
            $(".notfilter").css("display","none");
          }
        });
    }
    else if(sort == "LH")
    {
      var category = "<?php  echo $rw; ?>";
        
      $.ajax
        ({
          type: "POST",
          url: "new_sortby_lh.php",
          data:"&category="+category,
          cache: false,
          success: function(html)
          {
            $("#result_show").html(html);
            $(".notfilter").css("display","none");
          }
        });
    }
    else if(sort == "HL")
    {
      var category = "<?php  echo $rw; ?>";
        
      $.ajax
        ({
          type: "POST",
          url: "new_sortby_hl.php",
          data:"&category="+category,
          cache: false,
          success: function(html)
          {
            $("#result_show").html(html);
            $(".notfilter").css("display","none");
          }
        });
    }

    else
    {
    $.ajax
      ({
          type: "POST",
          url: "new_sortby1.php",
          data: "sort="+sort+"&category="+category,
          cache: false,
          success: function(html)
          {
            $("#result_show").html(html);
            $(".notfilter").css("display","none");
          }
        });
    }

  });

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
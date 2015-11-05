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
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $rw; ?> | Sellyourtime Seller Category</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>
  <style>
  @media screen and (max-width: 992px) {
.alignment
{
margin-top:32%;
}
.textalign{
margin-left:-4%;
}
}

@media screen and (min-width: 992px) {
.alignment
{
    margin-top: 8%;
}
.textalign{
	margin-left: -9%;
}
}
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
	float: right;
width: 325px;
min-height: 0px;
position: absolute;
top: 55px;
background: white;
display: none;
right: 14.2%;
overflow: scroll;
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
	width: 353px;
	min-height: 0px;
	position: absolute;
	top: 55px;
	background: white;
	display: none;
	right: 65.3%;

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
                                                <li><a href="category_listing.php?catg=Trainers and Tutors&catid=1"  class="ch">Trainers and Tutors</a></li>
                                                <li><a href="category_listing.php?catg=IT and Marketing&catid=3" >IT and Marketing</a></li> 
                                            </ul>
                                            <ul class="col-sm-3">
                                               <li><a href="category_listing.php?catg=Home and Utility&catid=6" >Home and Utility</a></li>
                                                <li><a href="category_listing.php?catg=Events & Entertainment&catid=7">Events and Entertainment</a></li>
                                            </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catg=Business Consultants&catid=2" >Business Consultants</a></li>
                                                <li><a href="category_listing.php?catg=Fashion and Lifestyle&catid=4" >Fashion and Lifestyle</a></li>
                                           </ul>
                                            <ul class="col-sm-3">
                                                <li><a href="category_listing.php?catg=Beauty and Wellness&catid=5" >Beauty and Wellness</a></li>
                                                <li><a href="category_listing.php?catid=9">Social Causes</a></li>
                                           </ul>  
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li><!-- end drop down -->
                        <li><a href="../howitworks.php" style="color:#fff;" >How It Works</a></li>
                        
						<?php
							if(isset($_SESSION['syt_email']))
							{
						?>
								<li><a href="../dashboard/index.php" style="color:#fff;" ><?php echo $_SESSION['syt_email']; ?></a></li>
								<li><a href="../dashboard/logout.php" style="color:#fff;" >Logout</a></li>
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
		
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search map">
      <div class="header-search-bar">
      

          <div class="search-toggle">
            <div class="container">
              
			  
			  <div class="region">
                <select class="" data-placeholder="-Select Subcategory-" id="sub_category">
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

              <div class="address">
                <input type="text" placeholder="Enter Location" id="zip1">
              </div>


			<!-- end #distance-range -->
			      <!-- end #distance-range -->

              <!--<p>Location:</p>
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
              </div>-->

              <button class="search-btn" type="submit" id="submit1"><i class="fa fa-search"></i></button>

            </div>
          </div>  <!-- END .search-toggle -->


          <div class="container">
            <button class="toggle-btn hidden-lg hidden-md hidden-sm" type="submit1"><i class="fa fa-circle-o"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Keywords" id="keyword" >
              </div>
			  
			  <div class="keyword-suggestion">
			  </div>
				
			<div class="category-search">
              <select name="combobox" id="combobox">
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
			  
              <div class="select-location">
                <div class="keywords">
					<input type="text" class="form-control" placeholder="Enter Location" id="zip" style="width: 308%;">
				</div>
			  
              </div>
			  <div class="search-suggestion">
			  </div>

              <button class="search-btn" type="submit" id="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        
      </div> <!-- END .header-search-bar -->
		

			
      <!--<div class="map-section">

        <div id="map_canvas"></div>

      </div>-->
</header>
<div class="container-fluid hidden-sm hidden-xs visible-md visible-lg">
<div class="row" style="margin-top: 6%;">
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

	  <div class="col-md-3  ">
          <!-- <button><i class="fa fa-briefcase"></i></button>-->

          <div class="page-sidebar alignment">

            <div class="location-details">
            
                <div class="select-country">
                  <label style="margin-top:-3%;">Experience (in years)</label>
				  <br>
					<input id="slider1" type="range" min="0" max="20" step="1" />
					<div class="show" style="margin-left: 228px;position: relative;top: -43px;width: 55px;left: 0px;"></div>
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
			
			<!-- -->
			<div class="location-details" style="position: relative;left: -3%;">
            
                <div class="select-country" style="margin-left:1%;">
                  <label class="textalign" style="margin-top: -2%;">Avaliability</label>
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
            
                <div class="select-country" style="margin-left:1%;margin-top: 14%;">
					<input type="submit" id="submit_aval">
                </div> <!-- end .select-country -->

            </div> <!-- end .location-details -->
			
            <!-- Category accordion -->
            

			
			
			<style>
.accordion
{
display: block;
margin: 10px auto;
width: 267;
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
<div class="accordion hidden-sm hidden-xs">

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
					<li><a href="lead_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=1&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-shopping-cart"></i> Business Consultants</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 2 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=2&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
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
					<li><a href="lead_listing.php?catid=3&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=3&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-gift"></i> Fashion and Lifestyle</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 4 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=4&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-female"></i> Beauty and Wellness</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 5 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=5&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-cogs"></i> Home and Utility</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 6 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=6&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-film"></i> Events & Entertainment</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 7 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=7&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-building-o"></i> Other</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 8 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=8&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
</div>
			
			
			

          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
	  
        <div class="col-md-9 ">
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
							echo $category_name['category']." ".@$_GET['sub'];
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
					 
					 <div class="hidden-xs">
					 <a href="#" class="btn btn-default-inverse" style="margin-left:4%;color:#fff;" id="apply_sort">Apply</a>
					 </div>

                    </div> <!-- end .change-view -->

                  <div class="row clearfix" id="result_show">
                     <!--CHANGES DKFKLDJFKLDSFDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
					 
					<?php
						
						$category_id = @$_GET['catid'];

						$category_query = mysql_query("SELECT * FROM `syt_category` WHERE `id` = '$category_id'");
						$fet_category_query = mysql_fetch_array($category_query);

						$fet_cat = $fet_category_query['category'];

						$buylead = mysql_query("SELECT * FROM `syt_post` WHERE `category` = '$fet_cat'");

						$num_buylead = mysql_num_rows($buylead);

						if($num_buylead == 0)
						{
							echo "<p style='margin-left:2%;'><font size='5'>Looking to find business leads under ".$fet_cat."?<br>Please <a href='../register'>signup</a> or <a href='../register'>login</a> with us.</font></p>";
						}
						else
						{
							while($sk = mysql_fetch_assoc($buylead))
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

                        <h4><a href="blog-post.php?postid=<?php echo $sk['id'];?>"><?php echo $sk['syt_title']; ?></a></h4>

                        <h5><a href="#"><?php echo $sk['category']; ?></a>, <a href="#"><?php echo $sk['subcategory']; ?></a></h5>

                        <p>
						<?php
							echo "<span style='color:orange'>Experience</span> : ". $sk['experience']." Years";
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Charge</span> : <i class='fa fa-inr'></i> ". $sk['price'];
						?>
						</p>
						
						
						<p>
						<?php
							echo "<span style='color:orange'>Around</span> : ". $sk['zip'];
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Requirment date</span> : ". $sk['delievery_date'];
						?>
						</p>
						
						
						<p>
						<?php
							$expr = strlen($sk['syt_desc']);
							if($expr <= 146)
							{
								echo $sk['syt_desc']." ...<a href='profile.php?id=".$sk['id']."'>Read more</a>";
							}
							else
							{
								echo substr($sk['syt_desc'],0,130)."...<a href='blog-post.php?postid=".$sk['id']."'>Read more</a>";
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

             

      
              </div> <!-- end .tabe-content -->

            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        
      </div> <!-- end .row -->
      <div class="row"> <!-- .row -->
		<div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
			<div class="accordion">

	<h2 align="center">ALL CATEGORIES</h2>
	<nav>
		<h2><i class="fa fa-star-o"></i> Trainers and Tutors</h2>
		<ul>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd12">Academic&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks12">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 1 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd13">Language Experts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks13">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 2 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd14">Arts and Crafts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks14">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 6 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd15">Sports & Recreation&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks15">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 4 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
				
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd16">Performance Arts&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks16">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 3 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
				</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-briefcase"></i> Business Consultants</h2>
		<ul>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 2 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-desktop"></i> IT and Marketing</h2>
		<ul>
			<li><div href="#" style="padding:10px; background:#ccc; margin-bottom:2px;"  id="itd1">IT&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="its1">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `grand_parent_id` = 8 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
			
			<li><div href="#" style="padding:10px; background:#ccc;" id="mkd11">Marketing&nbsp;<i class="fa fa-sort-down"></i></div></li>
				<div style="margin-left:10px;display:none;"  id="mks11">
					
					<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 11 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
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
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-female"></i> Beauty and Wellness</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 5 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
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
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-film"></i> Events & Entertainment</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 7 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
	
	<nav>
		<h2><i class="fa fa-building-o"></i> Other</h2>
		<ul>
			<div>
			<?php 
				$kk = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id` = 8 order by `sub_subcate` asc");
				while($k1 = mysql_fetch_assoc($kk))
				{
			?>
					<li><a href="lead_listing.php?catid=<?php echo $category_id;?>&sub=<?php echo $k1['sub_subcate']; ?>"><?php echo $k1['sub_subcate']; ?></a></li>
			<?php
				}
			?>
			</div>
		</ul>
	</nav>
</div>
		</div>
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
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div> <!-- end #footer -->

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>
<script src="js/zip.js"></script>
<script src="js/accordion.js"></script>
<script src="js/accordion1.js"></script>
<script src="js/sort.js"></script>
<script src="js/keyword.js"></script>

<script>
	$(document).ready(function(){
	
		$('#slider1').change(function(){ 
			$(".show").html($(this).val()+" yrs").show();
			
			var category = "<?php echo $category_id; ?>";
			var experience = $(this).val();
			
			var aja = "category="+category+"&experience="+experience;
			
			$.ajax
			({
				type: "POST",
				url: "be_exp_buyer.php",
				data: aja,
				cache: false,
				success: function(html)
				{
					$("#result_show").html(html)
				}
			});
			
			
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
		
		var category = "<?php echo $category_id; ?>";
		
		$.ajax
		({
			type: "POST",
			url: "be_price_buyer.php",
			data: "s="+s+"&s1="+s1+"&category="+category,
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
		
		var location1 = $("#zip").val();
		var keyword = $("#keyword").val();
		var subcategory = $("#combobox").val();
		
		
		var category = "<?php echo $_GET['catid']; ?>";
		
		var ajx = "location="+location1+"&subcategory="+subcategory+"&keyword="+keyword+"&category="+category;
		
		$("#category_tree").html("<h2><?php echo $rw; ?><span class='category-name'><b>\</b>"+subcategory+"</span><span class='comments'></span></h2>");
	
		if(subcategory=="")
		{
			alert("Please fill fields")
		}
		else
		{		
			$.ajax
			({
				type: "POST",
				url: "backend/be_search_buyer.php",
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
		
		if(subcategory=="")
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
	$("#submit_aval").click(function(){
	
		
		var service_day = $("#service_day").val();
		var category = "<?php echo $_GET['catid']; ?>";
		
		var jj = "service_day="+service_day+"&category="+category;
		
		$.ajax
			({
				type: "POST",
				url: "backend/be_serviceday_buyer.php",
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

$("#apply_sort").click(function(){

	var sort = $("#sortby").val();
	
	var category = "<?php  echo $rw; ?>";
	
	if(sort == "Name")
	{
	$.ajax
			({
				type: "POST",
				url: "be_sortby_buyer.php",
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
				url: "be_sortby_lh_buyer.php",
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
				url: "be_sortby_hl_buyer.php",
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
				url: "be_sortby1_buyer.php",
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
</html>
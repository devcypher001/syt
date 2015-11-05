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

  <title><?php echo $post['syt_title']; ?> || Sellyourtime</title>
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
button.close {
padding: 0;
cursor: pointer;
background: transparent;
border: 0;
width: 13px;
-webkit-appearance: none;
height: 65px;
}

.modal-header {
padding: 15px;
border-bottom: 1px solid #e5e5e5;
min-height: 16.42857143px;
background: rgb(35, 41, 81);
color: white;
}
.modal-footer {
margin-top: -16px;
padding: 19px 20px 20px;
text-align: right;
border-top: 1px solid #e5e5e5;
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
                  <a href="#"><i class="fa fa-user"></i><?php echo $post['date']; ?></a>Posted by <?php echo $fet_postby['firstname']." ".$fet_postby['lastname'];?>
                 
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
            echo $fet_postby['zip'];
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
            echo str_replace("undefined","",$post['service_mode']);
          ?></span>
                    SERVICE DELIVERY LOCATION
                    </li>

            <?php if(!empty($post['charge_mode'])){ ?>
            <li class="list-group-item">
                    <span class="badge"><?php 
            echo $post['charge_mode'];
          ?></span>
                    CHARGE MODE
                    </li>
            <?php }?>
          
          <?php if(!empty($post['price'])){ ?>
          <li class="list-group-item">
                    <span class="badge"><?php 
            echo "Rs ".$post['price'];
          ?></span>
                    CHARGE TO BE PAID
                    </li>
          <?php }  ?>
          
          
          
                    </ul>
        </div>
          
                </div>

               


              </div> <!-- end .post-with-image -->
            </div> <!-- end .blog-post -->
      
      <br>
      <div class="btn-group col-sm-offset-3 col-sm-10">
             <button type="button" class="btn btn-primary" id="contact_buyer" style="font-size: 21px;
width: 355px;
margin-top: -44px;
background:#159605;
border: none;
" data-toggle="modal" data-target="#exampleModal">Contact this buyer</button>
      </div>
    
    <?php
    if(!empty($_SESSION['syt_id']))
    {
      $session_id = $_SESSION['syt_id'];
      $get_value=mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$session_id'");
      $fetch_get_value=mysql_fetch_array($get_value); 
    }
    
    ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Post a reply</h4>
      </div>
      <div class="modal-body">
        <form>
        <div ><a href="../login/index.php?redirect_to=<?php echo $postid; ?>" target="_blank" style="font-size: 25px;text-decoration: none;">Already have an account?</a></div>
         <div >OR</div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Enter your full name</label>
            <input type="text" id="name" value="<?php if(!empty($_SESSION['syt_id'])){echo $fetch_get_value['firstname']." ".$fetch_get_value['lastname'];}  ?>" class="interact-info-name" placeholder="Enter your full name" style="border: 1px solid rgb(204, 204, 204);">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Enter Email ID</label>
            <input type="text" value="<?php if(!empty($_SESSION['syt_id'])){echo $fetch_get_value['email'];} ?>" class="interact-info-email" placeholder="Enter Email ID" id="email" style="border: 1px solid rgb(204, 204, 204);">
          </div>

          <div class="form-group">
        <label for="message-text" class="control-label">Enter location (Zip/Area)</label>
        <input type="text" value="<?php if(!empty($_SESSION['syt_id'])){echo $fetch_get_value['zip'];} ?>" class="interact-info-phone" placeholder="Enter location (Zip/Area)" maxlength="10" id="location" style="border: 1px solid rgb(204, 204, 204);">
        <div id="search_result" style="
    padding: 5px;
    position: absolute;
    width: 94%;display:none;cursor:pointer;background: white;"></div>
      </div>

           <div class="form-group">
            <label for="message-text" class="control-label">Enter Phone Number</label>
            <input type="text" class="interact-info-phone" value="<?php if(!empty($_SESSION['syt_id'])){echo $fetch_get_value['phone'];} ?>" placeholder="Phone Number" maxlength="10" id="phone" style="border: 1px solid rgb(204, 204, 204);">
          </div>

          <div class="form-group">
            <label for="message-text" class="control-label">Describe your requirement in detail.</label>
            <textarea type="text" class="interact-info-description" placeholder="Describe your requirement in detail." id="description" maxlength="500" ></textarea>
          </div>



        </form>
      </div>
      <div class="modal-footer offset 5">
        <button type="button" class="btn btn-primary" id="submit003" >Send message</button>
      </div>
     <div class="control-label" id="show_result" style="margin-left: 23px;font-size: 21px;"></div>
    </div>
  </div>
</div>

      
          </div> <!-- end .grid-layout -->

          <div class="col-md-4">
            <div class="post-sidebar">

              <div class="latest-post-content">
                <h2>Latest Posts</h2>
        <?php
          $qu = mysql_query("SELECT * FROM `syt_post` WHERE `id` NOT IN ('$postid') limit 0,6");
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
                        <a class="twitter-timeline" href="https://twitter.com/sellyourtime" data-widget-id="587909950271176705">Tweets by @sellyourtime</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
<script src="js/jquery.js"></script>

<script src="js/jquery.ba-outside-events.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>


<script>
function fill_zip(c)
  {
    var zip = $("#location").val(c);
    $("#search_result").hide();
  }
 function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
$(document).ready(function(){
  
  $("#name").keypress(function(e){
      if ( e.which >= 48 && e.which <= 57 )
      {
        return false;
      }
    });
    
  $("#phone").keypress(function(e){
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 43 )
      {
        return false;
      }
    });
  
  $("#submit003").click(function(){
    
    var name = $("#name").val();
    var email = $("#email").val();
    var location = $("#location").val();
    var phone = $("#phone").val();
    var description = $("#description").val();
    
    var user = <?php echo  $postid ; ?>
    
    var aja = "name="+name+"&email="+email+"&description="+description+"&user="+user+"&phone="+phone+"&location="+location;
    
    if(name=="" || email=="" || description=="")
    {
        $("#show_result").html("<font color='red'>Please fill all fields</font>");
    }
    else
    {
      if(ValidateEmail(email))
      {
        $.ajax
      ({
        type:"POST",
        url:"be_post_comment_submit.php",
        data:aja,
        success:function(s)
        {
          alert("Message sent to the buyer.Buyer details have been sent to your registered email id.");

            $.ajax
            ({
              type:"POST",
              url:"be_post_comment_submit_counter.php",
              data:aja,
              success:function(s1)
              {
              //alert(s1)
                var name = $("#name").val('');
                var email = $("#email").val('');
                var location = $("#location").val('');
                var phone = $("#phone").val('');
                var description = $("#description").val('');
              }
            });
        }
      });
      }
      else
      {
        $("#show_result").html("<font color='red'>Please enter valid email.</font>");
      }
      
    }
  });
  
  $("#location").keyup(function(){
    
    var zip = $("#location").val();
    
    $.ajax
    ({
      type:"POST",
      url:"backend/be_zip.php",
      data:"zip="+zip,
      success:function(s)
      {
        $("#search_result").html(s).show();
      }
    });
  })
  
  $(window).load(function(){
    var m = "<?php echo @$_GET['modal']; ?>";
    if(m==1)
    {
      $('#exampleModal').modal('show');
    }
        
    });
  
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
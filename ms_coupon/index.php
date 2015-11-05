<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MARKS & SPENCER</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand" style="padding-top:0px;"><img src="img/logo.png"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#"><b>|</b></a>
                    </li>
                    <li>
                        <a href="#">Customer Service</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container-fluid">

        <div class="row">
            <img src="img/banner.jpg" class="img-responsive" alt="M&S" style="margin-top:-20px;">
            
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4 text-center">
            <p class="intro-text1" style="">THE SALE</p>
           <p class="intro-text2"> UP TO</p>
            <p class="intro-text3">50% OFF*</p>
          
            <hr class="hr1">
            <p class="text1">SELECTED ITEMS</p>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                            <img src="img/line2.png" class="img-responsive">
                        </div>
                    </div>
                    
                    <h2 class="intro-text text-center">Shop for Rs. 5000 and<br>
                        Get an Additional 10% discount!*
                    </h2>
                    <p class=" text-center">Fill in your details to avail now</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                            <img src="img/line.jpg" class="img-responsive text-center">
                        </div>
                    </div>
                    <br>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4">
                    <div  role="form">
                    <p id="errmsg" style="font-size:18px;color:red;"></p>
                      <div class="input-group">
                         <span class="input-group-addon fmadon"><i class="fa fa-user icon-color"></i></span>
                         <input type="text" class="fm form-control" id="name" placeholder="Name">
                      </div>
                      <br>
                      <div class="input-group ">
                         <span class="input-group-addon fmadon"><i class="fa fa-envelope icon-color"></i></span>
                         <input type="email" class="fm form-control" id="email" placeholder="Email Id">
                      </div>
                      <br>
                      <div class="input-group">
                         <span class="input-group-addon fmadon"><i class="fa fa-phone icon-color"></i></span>
                         <input type="text" class="fm form-control" id="phone" maxlength="10" placeholder="Phone No." onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" style="width:50%;">
                      </div>
                      <br>
                      <div class="input-group" id="o">
                         <span class="input-group-addon fmadon"><i class="fa fa-key icon-color"></i></span>
                         <input type="submit" id="otp" class="fm form-control" value="Send OTP" style="width:50%;">
                      </div>
                      <div id="loader"></div>
                      <br>
                      </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                            <img src="img/line2.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

    </div>
    <!-- /.container -->

    <footer >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="text-center center-block">
                        <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                        <a href="#"><i id="social" class="fa fa-instagram fa-3x social-inst"></i></a>
                        <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                        <a href="#"><i id="social" class="fa fa-youtube-play  fa-3x social-yp"></i></a>
                        
                    </div>
                </div>
               
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="text-center center-block">
                        <p class="pull-right">*Terms & Conditions Apply</p>                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    
<script type="text/javascript">
    
    function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

    $(document).ready(function(){
        $("#otp").click(function(){
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var data = "name="+name+"&phone="+phone+"&email="+email;
            var t = validateEmail(email);
            if(t){
                $("#o").hide();
                $("#loader").html("Please Wait While Sending OTP to your Email");
                $.ajax({
                  type: "POST",
                  url: "be_send.php",
                  data: data,
                  success: function(lww)
                  {
                    alert(lww);
                    window.location.href='step2.php?'+data;
                  }
                });
            }
            else
            {
                $("#errmsg").html("Please Enter Valid Email");
            }
            
        });
    });
</script>
</body>

</html>
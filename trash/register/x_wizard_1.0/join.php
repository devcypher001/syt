<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>form</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-base.css" rel="stylesheet" />  
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  
</head>

<body>
<div class="image-container set-full-height" >
    <!--   Creative Tim Branding   -->
    
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <form action="" method="">
                <div class="card wizard-card ct-wizard-orange" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>JOIN WITH SELLYOURTIME</b><br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab">Let's start with the basic information</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> </h4>
                                  <div class="col-sm-1"></div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
                                      </div></div>
									  
									  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
                                      </div>
                                  </div><div class="col-sm-1"></div>
								  
                                  <!--<div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                      </div>
                                  </div>-->
								  
								  <div class="col-sm-10 col-sm-offset-1"><div class="row" style="margin-top:2px;"></div>
								  <label class="radio-inline" style="font-weight:bold;">
                                   <input type="radio" name="optradio" style="margin-top: 4%;">I am an individual.</label>
								  
								  
                                 <label class="radio-inline" style="font-weight:bold;">
                                  <input type="radio" name="optradio" style="margin-top: 4%;">We are company.</label></div>
								  <div class="row" style="margin-top:20%;"></div>
                                   <div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label>Select Category for your profession?</label><br>
											<p style="font-size:13px;">&#8594;Select a category under which your would like to offer your services?If the category is not listed select ‘other’</p>
                                             <select name="country" class="form-control" id="category">
                                                <option disabled="" selected="">- Select Category for your profession? -</option>
                                                <option value="Afghanistan"> Trainers and Tutors</option>
                                                <option value="Albania"> Business Consultants</option>
                                                <option value="Algeria"> IT and Marketing</option>
                                                <option value="American Samoa">Fashion and Lifestyle </option>
                                                <option value="Andorra">Beauty and Wellness</option>
                                                <option value="Angola"> Home and Utility</option>
                                                <option value="Anguilla">Events & Entertainment</option>
                                                
                                                <option value="Other">Other</option>
                                            </select>
                                          </div>
                                  </div>
								  <!--OTHER  SUB Category  DISPLAY NONE-->
								  	  <div class="row" style="margin-top:0;"></div>
                                   <div class="col-sm-10 col-sm-offset-1" id="subcategory" style="display:none;">
                                       <div class="form-group">
                                            <label>The specific service you would like to sell?</label><br>
											<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>
                                             <select name="country" class="form-control"  id="subcategory">
                                                <option disabled="" selected="">- The specific service you would like to sell? -</option>
                                               
                                                <option value="Afghanistan"> Trainers and Tutors</option>
                                                <option value="Albania"> Business Consultants</option>
                                                <option value="Algeria"> IT and Marketing</option>
                                                <option value="American Samoa">Fashion and Lifestyle </option>
                                                <option value="Andorra">Beauty and Wellness</option>
                                                <option value="Angola"> Home and Utility</option>
                                                <option value="Anguilla">Events & Entertainment</option>
                                                
                                                <option value="Other">Other</option>
                                            </select>
										</div></div>
                                        <!--OTHER Category INPUT DISPLAY NONE-->
										
									<div class="row" style="margin-top:3%; "></div>
									
										<div class="form-group col-sm-10 col-sm-offset-1" style="display:none;">
										<label for="exampleInputEmail1">OTHER</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Other Category..."></div>
										<div class="row" style="margin-top:0;"></div>
                                   <div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label> How much experience do you have for providing this service (in year)?</label><br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="margin-left:-2%;">
                                             <select name="country" class="form-control">
                                                
                                               
                                                <option value="Afghanistan">1</option>
                                                <option value="Albania">2</option>
                                                <option value="Algeria">3</option>
                                                <option value="American Samoa">4</option>
                                                <option value="Andorra">5</option>
                                                <option value="Angola">6</option>
                                                <option value="Anguilla">7</option>
												<option value="Anguilla">8</option>
												<option value="Anguilla">9</option>
												<option value="Anguilla">10</option>
                                                <option value="Anguilla">11</option>
												<option value="Anguilla">12</option>
                                                <option value="Other">13</option>
												<option value="Anguilla">14</option>
												<option value="Anguilla">15</option>
												<option value="Anguilla">16</option>
												<option value="Anguilla">17</option>
												<option value="Anguilla">18</option>
												<option value="Anguilla">19</option>
												<option value="Anguilla">20+ </option>
                                            </select></div>
										</div></div>
                                      <!--textarea-->
                                       <div class="row" style="margin-top:10%;"></div>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Describe your experience in detail:</label>
                                            <textarea class="form-control" placeholder="" rows="7"></textarea>
                                          </div>
                                    </div>   
                                  <!--textarea-->
								  <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Upload a file with brief description of your</label>
											<P style="font-size:13px;">&#8594;We receommend uploading a word or pdf file with details of your experience,education, examples of your work and contact details</P>
											<div class="col-sm-6" style="margin-left:-2%;">
                                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Andrew..."></div>
                                          </div>
                                    </div>
									
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Phone Number</label>
											
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                                          </div>
                                    </div>
										
									 <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue">
                                          </div>
                                    </div>	
									
									 <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Zip</label>
                                            <input type="text" class="form-control" placeholder="242">
                                          </div>
                                    </div>
									<div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
									<div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
									
									<div class="row" style="margin-top:52%;"></div>
                                   <div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label> Where would you like to offer your services? </label><br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="margin-left:-2%;">
                                             <select name="country" class="form-control">
                                                
                                               
                                                <option value="Afghanistan">1</option>
                                                <option value="Albania">2</option>
                                                <option value="Algeria">3</option>
                                                <option value="American Samoa">4</option>
                                                <option value="Andorra">5</option>
                                                <option value="Angola">6</option>
                                                <option value="Anguilla">7</option>
												<option value="Anguilla">8</option>
												<option value="Anguilla">9</option>
												<option value="Anguilla">10</option>
                                                <option value="Anguilla">11</option>
												<option value="Anguilla">12</option>
                                                <option value="Other">13</option>
												<option value="Anguilla">14</option>
												<option value="Anguilla">15</option>
												<option value="Anguilla">16</option>
												<option value="Anguilla">17</option>
												<option value="Anguilla">18</option>
												<option value="Anguilla">19</option>
												<option value="Anguilla">20+ </option>
                                            </select></div>
										</div></div>
										
										<div class="row" style="margin-top:11%;"></div>
										<div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label>How much will you charge for offering this service?</label><br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8" style="margin-left:-2%;">
                                             <select name="country" class="form-control" id="price">
                                                
                                               
                                                <option value="">Service charge</option>
                                                <option value="Charge a fixed price">Charge a fixed price</option>
                                                <option value="Charge per hour">Charge per hour</option>
                                                <option value="Charge per day">Charge per day</option>
                                                <option value="Charge per project">Charge per project</option>
                                                
                                            </select></div>
										</div></div>
										
										<div class="row" style="margin-top:11%;"></div>
										<div class="col-sm-6 col-sm-offset-1" style="display:none;" id="fixed_price">
                                         <div class="form-group">
                                            <label>Enter your fixed price</label>
											
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew..." value="INR ">
                                          </div>
										</div>
										
										
										<div class="col-sm-6 col-sm-offset-1" style="display:none;" id="hour_price">
                                         <div class="form-group">
                                            <label>Enter your price per hour</label>
											
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew..." value="INR ">
                                          </div>
										</div>
										
										<div class="col-sm-6 col-sm-offset-1" style="display:none;" id="day_price">
                                         <div class="form-group">
                                            <label>Enter your price per day</label>
											
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew..." value="INR ">
                                          </div>
										</div>
										
										<div class="col-sm-6 col-sm-offset-1" style="display:none;" id="project_price">
                                         <div class="form-group">
                                            <label>Enter your price per project</label>
											
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew..." value="INR ">
                                          </div>
										</div>
										
										<div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                            <label>When can you offer the service?</label><br>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8" style="margin-left:-2%;">
                                             <select name="country" class="form-control">
                                                
                                               
                                                <option value="">Service Day</option>
                                                <option value="Charge a fixed price">Monday - Friday</option>
                                                <option value="Charge a fixed price">Monday - Saturday</option>
                                                <option value="Charge a fixed price">All 7 Days</option>
                                                
                                            </select></div>
										</div></div>
										
                              </div>
                            </div>
                            <!-- DO not Touch -->
                           
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Street Name</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" placeholder="242">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
									
									
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' id="submit"/>
        
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>	
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    
    
     <div class="footer">
     
    </div>
    
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				alert("dsaf")
			});
			
			$("#category").change(function(){
				$("#subcategory").show();
			});
			
			$("#price").change(function(){
				var price = $("#price").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price").show();
					$("#hour_price").hide();
					$("#day_price").hide();
					$("#project_price").hide();
				}
				
				else if(price == "Charge per hour")
				{
					$("#hour_price").show();
					$("#fixed_price").hide();
					$("#day_price").hide();
					$("#project_price").hide();
				}
				
				else if(price == "Charge per day")
				{
					$("#day_price").show();
					$("#hour_price").hide();
					$("#fixed_price").hide();
					$("#project_price").hide();
				}
				
				else if(price == "Charge per project")
				{
					$("#project_price").show();					
					$("#day_price").hide();
					$("#hour_price").hide();
					$("#fixed_price").hide();
				}
			});
		});
	</script>


</div>

</body>
	<script type="text/javascript" src="js/backstretch.js"></script>
	
	<script>
		$.backstretch([
		  "public/images/bg.png",
		  "public/images/login_bg.jpg",
		  "public/images/bg2.jpg",
		  "public/images/bg3.jpg"
		  ], {
			fade: 750,
			duration: 4000
		});
	</script>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="js/wizard.js"></script>
	
</html>
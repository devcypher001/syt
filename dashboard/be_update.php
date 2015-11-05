<?php
session_start();
include 'connect.php';
$uid = $_SESSION['syt_id'];
$pid = $_POST['pid'];

$kk = explode("/",$pid);

$l = $kk[1];
$l1 = $kk[0];

$myquery = mysql_query("SELECT * FROM `syt_add_category` WHERE `subcategory`='$l1' AND `user_id` = '$uid'");

$pk = mysql_fetch_array($myquery);

$slash = strrchr($pk['charge'],"-");

$exp = explode('-',$pk['charge']);

// echo $exp[0]." ".$exp[1];

if($l == "nd")
{
	
?>
	    <div class="portlet-body form">
                        <form action="#" class="form-horizontal">
                          
                              <div class="form-group">
                                <label for="sel1">How much experience do you have to provide this service (in years)?</label>
								<select name="country" class="form-control" id="experience" style="width: 34%;">
                                                
                                                <option value="<?php echo $pk['experience']; ?>"><?php echo $pk['experience']; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="1011">10</option>
                                                <option value="11">11</option>
												<option value="12">12</option>
                                                <option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20+ </option>
                                            </select>
                              </div>
							  <br>
							  <div class="form-group">
                                <label for="sel1">Describe your experience in detail:</label>
								<textarea class="form-control" value="<?php echo $pk['experience_details'];?>" maxlength="300" id="experience_details1" style="height: 162px; width: 603px;"><?php echo $pk['experience_details'];?></textarea>	
                              </div>
                              <br/>
							  <div class="form-group">
                                            <label style="color:#000084;">Upload a file with brief description of your service or work profile</label>
											<P style="font-size:13px;">We recommend uploading a word or pdf file with details of your experience,education, examples of your work and contact details.<span style="font-size:11px;">(You can select multiple files upto of maximum size of 3MB including all files.)</span></P>
											<div class="col-sm-6">
												
												<iframe src="form1.php" scrolling="no" width="250" height="40" frameborder="0" id="upload_frame"></iframe>
												
												<div><a href="../register/uploads/<?php echo $pk['doc']; ?>"><?php echo $pk['doc']; ?></a></div>
											
											</div>
											
                                          </div>
							  <br>
                              <div class="form-group">
                                <label for="sel1">Where would you like to offer your services?</label>
                                
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style=";" id="client_site" value="I will travel to Client Site" > I will travel to client site</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="" id="atmyplace" value="At My Place" > At my place</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" value="Online" style="" id="online" > Online</label>
                              </div>
								
								
								<div class="form-group" id="distance" style="display:none;">
							  <label style="color:#000084;"> Select Distance </label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="">
                                             <select id="distance1">
                                                
                                                <option value="">Select Distance</option>
                                                <option value="1-50">1-50 km</option>
                                                <option value="51-100">51-100 km</option>
                                                <option value="101-150">101-150 km</option>
                                                <option value="151-200">151-200 km</option>
                                                <option value="201-250">201-250 km</option>
                                                <option value="251-300">251-300 km</option>
                                                <option value="300">300+ km</option>
												
                                            </select>
									</div>
								</div>
								<br>
								
								<div class="form-group">
                                            <label style="color:#000084;">How do you wish to charge your service?</label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8">
                                             <select name="country" class="form-control" id="price1">
                                                
                                                <option value="<?php echo $pk['charge_mode'];?>"><?php echo $pk['charge_mode'];?></option>
                                                <option value="Charge a fixed price">Charge a fixed price</option>
                                                <option value="Charge per hour">Charge per hour</option>
                                                <option value="Charge per day">Charge per day</option>
                                                <option value="Charge per project">Charge per project</option>
                                                
                                            </select></div>
								</div>
								<br>
								<?php

									if($slash)
									{
								?>
										<div class="col-sm-10 col-sm-offset-1" id="fixed_price" style="">
										<div class="col-sm-4" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter minimum price</label>
											
                                            <input type="text" class="form-control" id="min_price" value="<?php echo $exp[0]; ?>" placeholder="INR"><span>
                                          </div>
										</div>
										
										
										<div class="col-sm-5" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter maximum price</label>
											
                                            <input type="text" class="form-control" id="max_price" value="<?php echo $exp[1]; ?>" placeholder="INR">
                                          </div>
										</div>
										</div>
								<?php
									}
									else
									{
								?>
										<div class="col-sm-6 col-sm-offset-1" id="fixed_price_done" style="">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter fixed price</label>
											
                                            <input type="text" class="form-control" id="fixed_pro" value="<?php echo $pk['charge']; ?>" placeholder="INR"><span>
                                          </div>
										</div>
								<?php
									}
								?>
								
								
                              <br>
                              <div class="form-group">
                                <label for="sel1">When can you offer the service?</label>
                                 <select name="country" class="form-control" id="service_day"  style="width: 34%;">
                                                
                                                <option value="<?php echo $pk['service_day']; ?>"><?php echo $pk['service_day']; ?></option>
                                                <option value="Monday-Friday">Monday - Friday</option>
                                                <option value="Monday-Saturday">Monday - Saturday</option>
												<option value="On Weekends">On Weekends</option>
                                                <option value="All 7 Days">All 7 Days</option>
                                                
                                 </select>
                              </div>
                              <br>
                              <div class="form-group">
                              <div class="submit-btn">
                                         <div  class="btn green" id="submit_update1" uu="<?php echo $pk['id'];?>">Update</div>
                                       <a href="#" class="btn">Cancel</a>
                               </div>
                               </div>
                        </form>
                     </div>
					 <script>
					 $(document).ready(function(){
						$("#submit_update1").click(function(){
							var experience = $('#experience').val();
							var experience_details1 = $("#experience_details1").val();

							var cite_value = $("#client_site:checked").val();
							var atmyplace = $("#atmyplace:checked").val();
							var online = $("#online:checked").val();
							
							var price1 = $("#price1").val();
							var min_price = $("#min_price").val();
							var max_price = $("#max_price").val();
							var fixed_pro = $("#fixed_pro").val();
							var distance = $("#distance option:selected").val();
							
							var service_day = $("#service_day").val();
							
							var uu = $("#submit_update1").attr("uu");
						
							
							var ajs = "experience="+experience+"&experience_details1="+experience_details1+"&cite_value="+cite_value+"&atmyplace="+atmyplace+"&online="+online+"&price1="+price1+"&min_price="+min_price+"&max_price="+max_price+"&fixed_pro="+fixed_pro+"&service_day="+service_day+"&distance="+distance+"&uu="+uu;
							
							$.ajax
							({
								type:"POST",
								url:"be_category_validate_update.php",
								data:ajs,
								success:function(display)
								{
									if(display == 1)
									{
										alert("Your profile info has been updated.")
									}
								}
							});
							
						});
					 });
					 $("#client_site").click(function(){
						var cite_value = $('#client_site:checked').val()?true:false;
						
						if(cite_value == true)
						{
							$("#distance").show();
						}
						else
						{
							$("#distance").hide();
						}
					});
					
					$("#price1").change(function(){
				var price = $("#price1").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price_done").show();
					$("#fixed_price").hide();
				}
				
				else if(price == "Charge per hour")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per day")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per project")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				else
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
			});
					 </script>

<?php
}
elseif($l == "or")
{
	
	$uy = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$uid' AND `subcategory`='$l1'");
	$uy_ff = mysql_fetch_array($uy);
	
	$slash1=strchr($uy_ff['charge'],'-');
	
	$exp1 = explode('-',$uy_ff['charge']);

	 // echo $exp[0]." ".$exp[1];
?>	
		    <div class="portlet-body form">
                        <form action="#" class="form-horizontal">
                          
                              <div class="form-group">
                                <label for="sel1">How much experience do you have to provide this service (in years)?</label>
								<select name="country" class="form-control" id="experience" style="width: 34%;">
                                                
                                                <option value="<?php echo $uy_ff['experience']; ?>"><?php echo $uy_ff['experience']; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
                                                <option value="11">11</option>
												<option value="12">12</option>
                                                <option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20+ </option>
                                            </select>
                              </div>
							  <br>
							  <div class="form-group">
                                <label for="sel1">Describe your experience in detail:</label>
								<textarea class="form-control" value="<?php echo $pk['experience_details'];?>" maxlength="300" id="experience_details2" style="height: 162px; width: 603px;"><?php echo $uy_ff['experience_details'];?></textarea>	
                              </div>
                              <br/>
							  <div class="form-group">
                                            <label style="color:#000084;">Upload a file with brief description of your service or work profile</label>
											<P style="font-size:13px;">We recommend uploading a word or pdf file with details of your experience,education, examples of your work and contact details.<span style="font-size:11px;">(You can select multiple files upto of maximum size of 3MB including all files.)</span></P>
											
											<div class="col-sm-6">
												
												<iframe src="form2.php" scrolling="no" width="250" height="40" frameborder="0" id="upload_frame"></iframe>
												
												<div><a href="../register/uploads/<?php echo $uy_ff['doc']; ?>"><?php echo $uy_ff['doc']; ?></a></div>
											
											</div>
											
                                          </div>
							  <br>
                              <div class="form-group">
                                <label for="sel1">Where would you like to offer your services?</label>
                                
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style=";" id="client_site" value="I will travel to Client Site" > I will travel to client site</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" style="" id="atmyplace" value="At My Place" > At my place</label>
											
									<label class="radio-inline" style="">
									<input type="checkbox" name="optradio" value="Online" style="" id="online" > Online</label>
                              </div>
								
								
								<div class="form-group" id="distance" style="display:none;">
							  <label style="color:#000084;"> Select Distance </label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-4" style="">
                                             <select id="distance1">
                                                
                                                <option value="">Select Distance</option>
                                                <option value="1-50">1-50 km</option>
                                                <option value="51-100">51-100 km</option>
                                                <option value="101-150">101-150 km</option>
                                                <option value="151-200">151-200 km</option>
                                                <option value="201-250">201-250 km</option>
                                                <option value="251-300">251-300 km</option>
                                                <option value="300">300+ km</option>
												
                                            </select>
									</div>
								</div>
								<br>
								
								<div class="form-group">
                                            <label style="color:#000084;">How do you wish to charge your service?</label>
											<!--<p style="font-size:13px;">&#8594;select a specific sub category.If you would like to sell your time for more than 1 service you can add it to your profile anytime in future</p>-->
											<div class="col-sm-8">
                                             <select name="country" class="form-control" id="price1">
                                                
                                               
                                                <option value="<?php echo $uy_ff['charge_mode'];?>"><?php echo $uy_ff['charge_mode'];?></option>
                                                <option value="Charge a fixed price">Charge a fixed price</option>
                                                <option value="Charge per hour">Charge per hour</option>
                                                <option value="Charge per day">Charge per day</option>
                                                <option value="Charge per project">Charge per project</option>
                                                
                                            </select></div>
								</div>
								<br>
								<?php

									if($slash1)
									{
								?>
										<div class="col-sm-10 col-sm-offset-1" id="fixed_price" style="">
										<div class="col-sm-4" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter minimum price</label>
											
                                            <input type="text" class="form-control" id="min_price" value="<?php echo $exp1[0]; ?>" placeholder="INR"><span>
                                          </div>
										</div>
										
										
										<div class="col-sm-5" id="fixed_price">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter maximum price</label>
											
                                            <input type="text" class="form-control" id="max_price" value="<?php echo $exp1[1]; ?>" placeholder="INR">
                                          </div>
										</div>
										</div>
								<?php
									}
									else
									{
								?>
										<div class="col-sm-6 col-sm-offset-1" id="fixed_price_done" style="">
                                         <div class="form-group" style="">
                                            <label style="color:#000084;">Enter fixed price</label>
											
                                            <input type="text" class="form-control" id="fixed_pro" value="<?php echo $uy_ff['charge']; ?>" placeholder="INR"><span>
											
                                          </div>
										</div>
								<?php
									}
								?>
								<input type="text" class="form-control" id="fixed_price_done" value="" placeholder="INR" style="display:none;"><span>
								
                              <br>
                              <div class="form-group">
                                <label for="sel1">When can you offer the service?</label>
                                 <select name="country" class="form-control" id="service_day2"  style="width: 34%;">
                                                
                                               <option value="<?php echo $uy_ff['service_day']; ?>"><?php echo $uy_ff['service_day']; ?></option>
                                               <option value="Monday-Friday">Monday - Friday</option>
                                               <option value="Monday-Saturday">Monday - Saturday</option>
											   <option value="On Weekends">On Weekends</option>
                                               <option value="All 7 Days">All 7 Days</option>
                                                
                                 </select>
                              </div>
                              <br>
                              <div class="form-group">
                              <div class="submit-btn">
                                       <div  class="btn green" id="submit1" uu="<?php echo $uy_ff['id']; ?>">Update</div>
                                       <a href="#" class="btn">Cancel</a>
                               </div>
                               </div>
                        </form>
                     </div>
                     
					 <script>
					 $(document).ready(function(){
						$("#submit1").click(function(){
							var experience = $('#experience').val();
							var experience_details2 = $("#experience_details2").val();
							
							var cite_value = $("#client_site:checked").val();
							var atmyplace = $("#atmyplace:checked").val();
							var online = $("#online:checked").val();
							
							var price1 = $("#price1").val();
							var min_price = $("#min_price").val();
							var max_price = $("#max_price").val();
							var fixed_pro = $("#fixed_price_done").val();
							var distance = $("#distance option:selected").val();
							
							var service_day = $("#service_day2").val();
							
							var distance = $("#distance1").val();
							
							var uu = $("#submit1").attr("uu");
						
							var ajs = "experience="+experience+"&experience_details2="+experience_details2+"&cite_value="+cite_value+"&atmyplace="+atmyplace+"&online="+online+"&price1="+price1+"&min_price="+min_price+"&max_price="+max_price+"&fixed_pro="+fixed_pro+"&service_day="+service_day+"&distance="+distance+"&uu="+uu+"&distance="+distance;
							
							$.ajax
							({
								type:"POST",
								url:"be_category_validate_update1.php",
								data:ajs,
								success:function(display)
								{
									if(display == 1)
									{
										alert("Your profile info has been updated.")
									}
								}
							});
							
						});
					 });
					 $("#client_site").click(function(){
						var cite_value = $('#client_site:checked').val()?true:false;
						
						if(cite_value == true)
						{
							$("#distance").show();
						}
						else
						{
							$("#distance").hide();
						}
					});
					
					$("#price1").change(function(){
				var price = $("#price1").val();
				
				if(price == "Charge a fixed price")
				{
					$("#fixed_price_done").show();
					$("#fixed_price").hide();
				}
				
				else if(price == "Charge per hour")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per day")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				
				else if(price == "Charge per project")
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
				else
				{
					$("#fixed_price").show();
					$("#fixed_price_done").hide();
				}
			});
					 </script>
                    
					 
<?php
}
?>
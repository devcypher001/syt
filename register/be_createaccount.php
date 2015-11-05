<?php
session_start();
include '../connect.php';

include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

$firstname = @$_POST['firstname'];
$lastname = @$_POST['lastname'];

$individual = $_POST['individual'];
$company = $_POST['company'];

//echo $individual."-".$company;
$category = @$_POST['category'];
$subcategory = @$_POST['subcategory'];
$other = @$_POST['other'];
$experience = @$_POST['experience'];
$detail_experience = @$_POST['detail_experience'];
$phone = @$_POST['phone'];
$address = @$_POST['address'];
$zip = @$_POST['zip'];
$city = @$_POST['city'];
$country = @$_POST['country'];
$distance = @$_POST['distance'];
$service_day = @$_POST['service_day'];
$price = @$_POST['price'];
$fixed_price = $price."=".@$_POST['fixed_price'];
$hour_price = @$_POST['hour_price'];
$day_price = @$_POST['day_price'];
$project_price = @$_POST['project_price'];
$email = @$_POST['email'];
$pass = @$_POST['pass'];
$title = @$_POST['title'];

$dob = @$_POST['dob'];
$dob1 = substr($dob,0,4);
$dob2 = date('Y');
$dob3 = $dob2 - $dob1 >= 15 ? "ok" : "no";

$gender = @$_POST['gender'];

$cite_value = @$_POST['offer_service'];
$atplace = @$_POST['atplace'];
$online = @$_POST['online'];

$min_price = @$_POST['min_price'];
$max_price = @$_POST['max_price'];

$charge = $min_price."-".$max_price;

$offer_service = $cite_value.$atplace.$online;

$ind_comp = ($individual!="undefined") ? $individual : 'ai';
$ind_comp = ($company!="undefined") ? $company : 'ac';

$fixed_price_done = @$_POST['fixed_price_done'];

$charge = ($price == "Charge a fixed price") ? $fixed_price_done : $charge;

$upload = $_SESSION['upload_token'];

// echo "firstname : ".$firstname." | lastname : ".$lastname." | individual : ".$individual." | Company : ".$company." | Category : ".$category." | subcategory : ".$subcategory." | DOB : ".$dob." | Other : ".$other." | experience : ".$experience." | detail_experience : ".$detail_experience." | phone : ".$phone." | address : ".$address." | zip : ".$zip ." | offer_service = ".$offer_service." | fixed_price : ".$fixed_price_done." | min_price - max_price : ".$charge." | price : ".$price;
if($firstname)
{
	if($lastname)
	{
		if($dob=='')
		{
			echo "3";
		}	
		else
		{
			if($dob3 == "ok")
			{
				if($category == "null")
				{
					echo "4";
				}
				else
				{
					if($subcategory == "null")
					{
						echo "5";
					}
					else
					{
						if($experience)
						{
							if(strlen($phone) == 13)
							{
								if($detail_experience)
								{
									if(strlen($zip) > 6)
									{
										if($city)
										{
											if($cite_value=="No" && $atplace=="No" && $online=="No")
											{
												echo "11";
											}
											else
											{
												if($price)
												{
													if($max_price > $min_price || $price == "Charge a fixed price")
													{
														
														if($service_day)
														{
															$insert_query = mysql_query("INSERT INTO `syt_registration`(`id`, `email`, `password`, `firstname`, `lastname`, `individual`, `category`, `subcategory`, `other`, `experience`, `experience_details`, `doc`, `phone`, `address`, `zip`, `city`, `country`, `service_distance`,`charge_mode`, `charge`, `title`, `time`, `service_day`, `gender`, `dob`, `service_mode`, `status`, `charge1`, `charge2`) VALUES ('','$email','$pass','$firstname','$lastname','$ind_comp','$category','$subcategory','$other','$experience','$detail_experience','$upload','$phone','$address','$zip','$city','$country','$distance','$price','$charge','$title',NOW(),'$service_day','$gender','$dob','$offer_service',0,'$min_price','$max_price')");
														
														//$insert_query = mysql_query("INSERT INTO `syt_registration`(`id`, `email`, `password`, `firstname`, `lastname`, `individual`, `category`, `subcategory`,`other`, `experience`, `experience_details`, `doc`, `phone`, `address`, `zip`, `city`, `country`, `service_distance`, `charge`, `title`, `time`, `service_day`, `gender`, `dob`, `service_mode`,`status`) VALUES ('','$email','$pass','$firstname','$lastname','$individual','$category','$subcategory','$other','$experience','$detail_experience','','$phone','$address','$zip','$city','$country','$distance','$fixed_price','$title',NOW(),'$service_day','$gender','$dob','$cite_value',0)");
														
														
															if($insert_query)
															{
																echo "16";
															$mail = new PHPMailer;
															$mail->isSMTP();
															$mail->Host = 'in7.hostgator.in';
															$mail->SMTPAuth = true;
															$mail->Username = 'info@sellyourtime.in';
															$mail->Password = 'selltime86$';
															$mail->SMTPSecure = 'ssl';
															$mail->Port = 465;
															$mail->From = 'info@sellyourtime.in';
															$mail->FromName = 'Sellyourtime';
															$mail->AddAddress($email, "SYT"); //To address who will receive this email

															$mail->WordWrap = 550;
															$mail->isHTML(true);
															$mail->Subject = 'Sellyourtime verify account';
																
																
															$mail->Body .= '<html><body>';
															$mail->Body .= '<table width="100%"; style="background:white;" cellpadding="10">';
															$mail->Body .= "<tr><td><a href='http://sellyourtime.in/'><img src='http://sellyourtime.in/register/images/sellyourtime.jpg' /></a></td></tr>";
															$mail->Body .= "<tr><td colspan=2>Dear $firstname $lastname,<br /><br />You are just one step away from signing up on SYT.All you need to do is verify $email as your Sellyourtime ID.<br>To activate your account,click on the link below and you will be redirect </td></tr>";
															$mail->Body  .= "<tr><td colspan=2 font='color:#999999;'>http://www.sellyourtime.in/register/verify.php?id=".str_rot13($email)."</td></tr>";
															
															$mail->Body  .= "<tr><td colspan=2 font='color:#999999;'>You can login via the chosen email and password OR your chosen social media account.</td></tr>";
															$mail->Body .= "<tr><td colspan=2 font='color:#999999;'><I>Sellyourtime team<br>Sell or Buy any service online. :)</I></td></tr>"; 
															
															$mail->Body .= "<tr><td colspan=2 font='color:#999999;'>Follow us on<br><a href='https://www.facebook.com/sellyourtimeIndia' target='_blank'><img src='http://www.sellyourtime.in/images/1.png'></a><a href='https://twitter.com/sellyourtime' target='_blank'><img src='http://www.sellyourtime.in/images/2.png'></a><a href='https://www.linkedin.com/company/sell-your-time' target='_blank'><img src='http://www.sellyourtime.in/images/3.png'></a> <a href='https://plus.google.com/105810743539585737734/about?hl=en' target='_blank'><img src='http://www.sellyourtime.in/images/31.jpg'></a></td></tr>";
															
															$mail->Body .= "</table>";
															$mail->Body .= "</body></html>";
															
															$mail->Body .= "</table>";
															$mail->Body .= "</body></html>";
															
															
																if($mail->send())
																{
															
																}
																unset($_SESSION['upload_token']);
																
															}
															else
															{
																echo "Internal error";
															}
														}
														else
														{
															echo "15";
														}
													}
													else
													{
														echo "14";
													}
												
												}
												else
												{
													echo "12";
												}
											if($cite_value=="I will travel to Client Site")
											{
												echo "Please select distance";
											}
											/*else
											{
												echo "$offer_service";
											}*/
										}
									
									}
									else
									{
										echo "10";
									}
								}
								else
								{
									echo "9";
								}
							}
							else
							{
								echo "8";
							}
						}
						else
						{
							echo "7";
						}
					}
					else
					{
						echo "6";
					}
				}
			}
			
			}
			else
			{
				echo "20";
			}
		}	
	}
	else
	{
		echo "2";
	}
}
else
{
	echo "1";
}
?>
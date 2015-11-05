<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">
						<?php
							$cc1 = $_SESSION['syt_id'];
								$qwr1 = mysql_query("SELECT * FROM `syt_lead` WHERE `user_id`='$cc1' and `notif`=0 order by `id` desc  LIMIT 0,6");
								
								//---------------------------------------------------------
								$fet = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$cc1'");
										
								$fet_arr = mysql_fetch_array($fet);
								
								$uu_subcategory = $fet_arr['subcategory'];
								$uu_category = $fet_arr['category'];
												
								$qwr2 = mysql_query("SELECT * FROM `syt_post` WHERE (`subcategory` like '$uu_subcategory%' or `category` like '$uu_category%' ) AND `notif`=0 AND `userid` = '$cc1'");
								//-----------------------------------------------------------								
								// mysql_num_rows($qwr2)
								echo (mysql_num_rows($qwr1)+mysql_num_rows($qwr2));
								?>
						</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								
								<p>You have <?php echo (mysql_num_rows($qwr1)+mysql_num_rows($qwr2)); ?> new notifications</p>
							</li>
							
							<?php 
								while($tt = mysql_fetch_assoc($qwr1))
								{
							?>
							<li>
								<a href="leads.php">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<?php
									echo $tt['name']." contacted you.";
								?>
								<span class="time"></span>
								</a>
							</li>
							<?php
								}
							?>
							
							<?php 
								while($tt1 = mysql_fetch_assoc($qwr2))
								{
									$rt = $tt1['userid'];
									$fet1 = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$rt'");
									$fet1_arr = mysql_fetch_array($fet1);
							?>
							<li>
								<a href="leads.php">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<?php
									echo $fet1_arr['firstname']." ".$fet1_arr['lastname']." posted under ".$tt1['subcategory'];
								?>
								<span class="time"></span>
								</a>
							</li>
							<?php
								}
							?>
							
							
						</ul>
					</li>
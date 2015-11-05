<?php
										$conversation = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$userid'  or `destination`='$userid'");

										$fet_conversation = mysql_fetch_array($conversation);
										$hash_id = $fet_conversation['hash'];
										$s = $fet_conversation['source'];


										$qr = mysql_query("SELECT * FROM `syt_conversation` WHERE `source_id`='$userid' or `message_hash`='$hash_id'");

										$conversation1 = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$userid'  or `hash`='$hash_id'");

										$fet_conversation = mysql_fetch_array($conversation1);

										$destination1 = $fet_conversation['destination'];



										$qr1 = mysql_query("SELECT * FROM `syt_conversation` WHERE  `message_hash`='$hash_id' and `notif`=0 order by `id` desc");
											$x = 0;
										while($rr = mysql_fetch_assoc($qr1))
										{
											
											$source_id = $rr['source_id'];
											$hash = $rr['message_hash'];
											
											if($userid != $rr['source_id'])
											{
												// echo $source_id." ".$hash;
												$kk = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$source_id' AND `hash`='$hash'");
												
												// $fet_kk = mysql_fetch_array($kk);
												
												// $dest = $fet_kk['destination'];
												
												// echo $dest;
												
												$ret = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$source_id'");

												$fet_ret = mysql_fetch_array($ret);
								?>
												<li>
													<a href="message_show.php?hash=<?php echo $hash; ?>&source=<?php echo $source_id; ?>&destination=<?php echo $source_id;?>">
													<span class="photo"><img src="images/<?php echo $fet_ret['image'];?>" alt="" /></span>
													<span class="subject">
													<span class="from">
													<?php
														echo $fet_ret['firstname']." ".$fet_ret['lastname'];
													?>
													</span>

													</span>
													<span class="message">
													<?php echo $rr['message'];?>
													</span>
													</a>
												</li>
								<?php
											}

										}


								?>

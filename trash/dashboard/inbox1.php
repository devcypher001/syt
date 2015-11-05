<?php
										$conversation = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$userid'  or `destination`='$userid'");

										$fet_conversation = mysql_fetch_array($conversation);
										$hash_id = $fet_conversation['hash'];
										$s = $fet_conversation['source'];


										$qr = mysql_query("SELECT * FROM `syt_conversation` WHERE `source_id`='$userid' or `message_hash`='$hash_id'");

										$conversation1 = mysql_query("SELECT * FROM `syt_message` WHERE `source`='$userid'  or `hash`='$hash_id'");

										$fet_conversation = mysql_fetch_array($conversation1);

										$destination1 = $fet_conversation['destination'];



										$qr1 = mysql_query("SELECT * FROM `syt_conversation` WHERE  `message_hash`='$hash_id' and `notif`=0");
											$x = 0;
										while($rr = mysql_fetch_assoc($qr1))
										{
											// echo $rr['source_id'] ." ".$rr['message_hash']." ".$rr['message']."<br>";

											if($userid != $rr['source_id'])
											{

												$x++;
											}

										}
										echo "You have ".$x." new messages";

								?>
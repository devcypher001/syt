<?php
include 'connect.php';

$category = @$_POST['category'];
$experience = @$_POST['experience'];

$find_cate = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category'");
$fetch_find_cate = mysql_fetch_array($find_cate);

$category1 = $fetch_find_cate['category'];

$query = mysql_query("SELECT * FROM `syt_registration` WHERE `category`='$category1' and  `experience` <= '$experience' order by `experience` asc");

if(mysql_num_rows($query) == 0)
{
?>
	<p style='margin-left:2%;'><font size="5" style="text-align:justify;">We will find a service provider matching your exact requirements.<br>Please <a href='interest_register.php'>register</a> your interest with us.</font></p>
<?php
}
else
{
	while($rr = mysql_fetch_assoc($query))
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

                        <h4><a href="profile.php?id=<?php echo $rr['id']; ?>"><?php echo $rr['firstname']." ".$rr['lastname']; ?></a></h4>

                        <h5><a href="#"><?php echo $rr['subcategory']; ?></a>, <a href="#"><?php echo $rr['category']; ?></a></h5>

                        <p>
						<?php
							echo "<span style='color:orange'>Experience</span> : ". $rr['experience']." Years";
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Charge</span> : <i class='fa fa-inr'></i> ". $rr['charge'];
						?>
						</p>
						
						
						<p>
						<?php
							echo "<span style='color:orange'>Around</span> : ". $rr['address']." ".$rr['zip'];
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Availability</span> : ". $rr['service_day'];
						?>
						</p>
						
						
						<p>
						<?php
							$expr = strlen($rr['experience_details']);
							if($expr <= 146)
							{
								echo $rr['experience_details']." ...<a href='profile.php?id=".$rr['id']."'>Read more</a>";
							}
							else
							{
								echo substr($rr['experience_details'],0,130)."...<a href='profile.php?id=".$rr['id']."'>Read more</a>";
							}
						?>
						</p>

                        

                      </div> <!-- end .single-product -->
                    </div>
<?php
} }
?>
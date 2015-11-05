<?php
include 'connect.php';
$category = @$_POST['category'];

$query = mysql_query("SELECT * FROM `syt_post` where `category` = '$category' order by `price` desc");

$sql_num_rows = mysql_num_rows($query);
if($sql_num_rows == 0)
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

                        <h4><a href="blog-post.php?postid=<?php echo $rr['id'];?>"><?php echo $rr['syt_title']; ?></a></h4>

                        <h5><a href="#"><?php echo $rr['category']; ?></a>, <a href="#"><?php echo $rr['subcategory']; ?></a></h5>

                        <p>
						<?php
							echo "<span style='color:orange'>Experience</span> : ". $rr['experience']." Years";
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Charge</span> : <i class='fa fa-inr'></i> ". $rr['price'];
						?>
						</p>
						
						
						<p>
						<?php
							echo "<span style='color:orange'>Around</span> : ". $rr['zip'];
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Requirment date</span> : ". $rr['delievery_date'];
						?>
						</p>
						
						
						<p>
						<?php
							$expr = strlen($rr['syt_desc']);
							if($expr <= 146)
							{
								echo $rr['syt_desc']." ...<a href='blog-post.php?postid=".$rr['id']."'>Read more</a>";
							}
							else
							{
								echo substr($rr['syt_desc'],0,130)."...<a href='blog-post.php?postid=".$rr['id']."'>Read more</a>";
							}
						?>
						</p>

                        

                      </div> <!-- end .single-product -->
                    </div>

<?php
	}
}
?>
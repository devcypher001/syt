<?php 
include '../connect.php';
$sort = @$_POST['sort'];

$category = @$_POST['category'];

$sql = mysql_query("SELECT * FROM `syt_post` WHERE `category` = '$category' order by `syt_title` asc");

$sql_num_rows = mysql_num_rows($sql);


if($sql_num_rows == 0)
{
?>
	<p style='margin-left:2%;'><font size="5" style="text-align:justify;">Looking to find business leads under <?php echo $category; ?>.<br>Please <a href='../register'>signup</a> or <a href='../login'>login</a> with us.</font></p>
<?php
}
else
{
	while($sk = mysql_fetch_assoc($sql))
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

                        <h4><a href="blog-post.php?postid=<?php echo $sk['id'];?>"><?php echo $sk['syt_title']; ?></a></h4>

                        <h5><a href="#"><?php echo $sk['category']; ?></a>, <a href="#"><?php echo $sk['subcategory']; ?></a></h5>

                        <p>
						<?php
							echo "<span style='color:orange'>Experience</span> : ". $sk['experience']." Years";
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Charge</span> : <i class='fa fa-inr'></i> ". $sk['price'];
						?>
						</p>
						
						
						<p>
						<?php
							echo "<span style='color:orange'>Around</span> : ". $sk['zip'];
						?>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php
							echo "<span style='color:orange'>Requirment date</span> : ". $sk['delievery_date'];
						?>
						</p>
						
						
						<p>
						<?php
							$expr = strlen($sk['syt_desc']);
							if($expr <= 146)
							{
								echo $sk['syt_desc']." ...<a href='blog-post.php?postid=".$sk['id']."'>Read more</a>";
							}
							else
							{
								echo substr($sk['syt_desc'],0,130)."...<a href='blog-post.php?postid=".$sk['id']."'>Read more</a>";
							}
						?>
						</p>

                        

                      </div> <!-- end .single-product -->
                    </div>
<?php
	}
}
?>
<?php 
include '../connect.php';
$sort = @$_POST['sort'];

$category = @$_POST['category'];

$sql = mysql_query("SELECT * FROM `syt_post` WHERE `category` = '$category' order by `experience` desc");

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
		$id = $sk['userid'];
		$reg = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$id'");
		$rwe = mysql_fetch_array($reg);
?>		
		<div class="buddypress_content" >
            
               <div class="buddy_image col-md-2 pull-left">
                    <?php
                    $img = $rwe['image'];
                    if($img == '')
                    {
                      
                      echo "<a href='#'><img class='img-thumbnail' src='img/content/comment-image-1.jpg' alt=''/></a>";
                    }
                    else{
                      echo "<a href='#'><img class='img-thumbnail' src='../dashboard/images/".$img."' alt=''/></a>";
                    }
                    ?>
                      
                    </div><!-- end buddy_image -->
                    
                    <div class="buddy_desc col-md-10 ">
                      <strong><a href="blog-post.php?postid=<?php echo $sk['id'];?>"><?php echo $sk['syt_title']; ?></a></strong>
                      <small><a href="#"><?php echo $rr['category']; ?></a>, <a href="#"><?php echo $sk['subcategory']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $sk['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $sk['price']; ?>
                    </p>
                    <p><strong  >Around</strong>: <?php echo $sk['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $sk['delievery_date']; ?> </p>
                    
                  
          
            <p style="text-align:justify;">
            <?php
              $expr = strlen($sk['syt_desc']);
              if($expr <= 146)
              {
                echo $sk['syt_desc']." ...<a class='readmore' href='profile.php?id=".$sk['id']."'>Read more</a>";
              }
              else
              {
                echo substr($sk['syt_desc'],0,130)."...<a class='readmore' href='profile.php?id=".$sk['id']."'>Read more</a>";
              }
            ?>
            </p>
            <div class="arrow-left"></div>
            </div><!-- end buddy_desc -->
                    
        </div><!-- buddypress_content -->
		
	
	<?php
	}
}
?>
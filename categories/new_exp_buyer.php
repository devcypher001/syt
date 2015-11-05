<?php
include 'connect.php';

$category = @$_POST['category'];
$exp = @$_POST['exp1'];

$u = explode(",", $exp);

$exp1 = $u[0];
$exp2 = $u[1];

$find_cate = mysql_query("SELECT * FROM `syt_category` WHERE `id`='$category'");
$fetch_find_cate = mysql_fetch_array($find_cate);
$reg = mysql_query("SELECT * FROM `syt_registration` WHERE `id` = '$category_id'");
 $rwe = mysql_fetch_array($reg);
$category1 = $fetch_find_cate['category'];


$query = mysql_query("SELECT * FROM `syt_post` WHERE (`experience` BETWEEN $exp1 AND $exp2) AND 
  `category`='$category' ");

if(mysql_num_rows($query) == 0)
{
  echo "<p style='margin-left:2%;'><font size='5' style='text-align:justify;'>Looking to find business leads under ".$category."?<br>Please <a href='../register'>signup</a> or <a href='../register'>Login</p>";
}
else
{
  while($rr = mysql_fetch_assoc($query))
  {
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
                      <strong><a href="blog-post.php?postid=<?php echo $rr['id'];?>"><?php echo $rr['syt_title']; ?></a></strong>
                      <small><a href="#"><?php echo $rr['category']; ?></a>, <a href="#"><?php echo $rr['subcategory']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $rr['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $rr['price']; ?>
                    </p>
                    <p><strong  >Around</strong>: <?php echo $rr['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $rr['delievery_date']; ?> </p>
                    
                  
          
            <p style="text-align:justify;">
            <?php
              $expr = strlen($rr['syt_desc']);
              if($expr <= 146)
              {
                echo $rr['syt_desc']." ...<a class='readmore' href='profile.php?id=".$rr['id']."'>Read more</a>";
              }
              else
              {
                echo substr($rr['syt_desc'],0,130)."...<a class='readmore' href='profile.php?id=".$rr['id']."'>Read more</a>";
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
<?php 
include '../connect.php';
$service_day = @$_POST['service_day'];

$category = @$_POST['category'];

$sql = mysql_query("SELECT * FROM `syt_registration` WHERE `service_day` like '$service_day' AND `category` like '$category'");

$sql_num_rows = mysql_num_rows($sql);


if($sql_num_rows == 0)
{
?>
	<p style='margin-left:2%;'><font size="5">We will find a service provider matching your exact requirements.<br>Please <a href='interest_register.php'>register</a> your interest with us.</font>
<?php
}
else
{
	while($rr = mysql_fetch_assoc($sql))
	{
?>
		<div class="buddypress_content" >
		<div class="buddy_image col-md-2 pull-left">
                    <?php
                    $img = $rr['image'];
                    if($img == '')
                    {
                      
                      echo "<a href='#'><img class='img-thumbnail' src='img/content/comment-image-1.jpg' alt=''/></a>";
                    }
                    else{
                      echo "<a href='#'><img class='img-thumbnail' src='../dashboard/images/".$img."' alt=''/></a>";
                    }
                    ?>
                      
                    </div><!-- end buddy_image -->
                    
                    <div class="buddy_desc col-md-10">
                      <strong><a href="profile.php?id=<?php echo $rr['id']; ?>"><?php echo $rr['firstname']." ".$rr['lastname']; ?></a></strong>
                      <small><a href="#"><?php echo $rr['subcategory']; ?></a>, <a href="#"><?php echo $rr['category']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $rr['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $rr['charge']; ?>
                    </p>
                    <p><strong  >Around</strong>: <?php echo $rr['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $rr['service_day']; ?> </p>
                    
                  
          
            <p style="text-align:justify;">
            <?php
              $expr = strlen($rr['experience_details']);
              if($expr <= 146)
              {
                echo $rr['experience_details']." ...<a class='readmore' href='profile.php?id=".$rr['id']."'>Read more</a>";
              }
              else
              {
                echo substr($rr['experience_details'],0,130)."...<a class='readmore' href='profile.php?id=".$rr['id']."'>Read more</a>";
              }
            ?>
            </p>
            <div class="arrow-left"></div>
                    </div><!-- end buddy_desc -->
                    </div>	
<?php
	}
}
?>
<?php
include 'connect.php';
$s = $_POST['pmin'];
$s1 = $_POST['pmax'];

$category = $_POST['category'];



$query = mysql_query("SELECT * FROM `syt_registration` where (`category` = '$category') AND ((`charge1` BETWEEN '$s' AND '$s1') OR (`charge2` BETWEEN '$s' AND '$s1'))");
$query_num = mysql_num_rows($query);


//---------------------------------------------------------------------------------------
$query1= mysql_query("SELECT * FROM `syt_add_category` WHERE `category`='$category' AND ((`charge1` BETWEEN '$s' AND '$s1') OR (`charge2` BETWEEN '$s' AND '$s1'))");
//---------------------------------------------------------------------------------------


if($query_num == 0)
{
?>
  <p style='margin-left:2%;'><font size="5">We will find a service provider matching your exact requirements.<br>Please <a href='interest_register.php'>register</a> your interest with us.</font></p>

<?php
}
else
{
  while($rr = mysql_fetch_assoc($query))
  {
?>  <div class="buddypress_content" >
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

  while($rr1 = mysql_fetch_assoc($query1))
  {
    $userid = $rr1['user_id'];
    $db = mysql_query("SELECT * FROM `syt_registration` WHERE `id`='$userid'");
    $fet_db = mysql_fetch_array($db);
?>
    <div class="buddy_image col-md-2 pull-left">
                    <?php
                    $img = $fet_db['image'];
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
                      <strong><a href="profile.php?id=<?php echo $rr['id']; ?>"><?php echo $fet_db['firstname']." ".$fet_db['lastname']; ?></a></strong>
                      <small><a href="#"><?php echo $rr1['subcategory']; ?></a>, <a href="#"><?php echo $rr['category']; ?></a></small>
                    
                    <p><strong  >Experience</strong>: <?php echo $rr1['experience']; ?>years
                    </p><p>
                    <strong >Charge</strong> : <i class="fa fa-rupee"></i> <?php echo $rr1['charge']; ?>
                    </p>
                    <p><strong  >Around</strong>: <?php echo $fet_db['zip']; ?></p>
                    <p><strong  >Availability</strong>: <?php echo $rr1['service_day']; ?> </p>
                    
                  
          
            <p style="text-align:justify;">
            <?php
              $expr = strlen($rr['experience_details']);
              if($expr <= 146)
              {
                echo $rr['experience_details']." ...<a class='readmore' href='profile.php?id=".$fet_db['id']."'>Read more</a>";
              }
              else
              {
                echo substr($rr['experience_details'],0,130)."...<a class='readmore' href='profile.php?id=".$fet_db['id']."'>Read more</a>";
              }
            ?>
            </p>
            <div class="arrow-left"></div>
     
                    </div><!-- end buddy_desc -->
  <?php
  }

?>
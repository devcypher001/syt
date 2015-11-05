<?php
include 'connect.php';

$search = @$_POST['search'];

$qer = mysql_query("SELECT * FROM `syt_location` WHERE `zipcode` like '$search%' or `place` like '$search%' LIMIT 0 ,60");

if(mysql_num_rows($qer) == 0)
{
	echo "<p>No area found</p>";
}
else
	{
		while($row = mysql_fetch_assoc($qer))
		{
?>
			<p onclick="fill_op('<?php echo $row['place']." (".$row['zipcode'].")";?>')" cc="<?php echo $row['place']." (".$row['zipcode'].")"?>"><img src="img/pin.png" width="20" height="20"><?php echo $row['place']." (".$row['zipcode'].")"?></p>
<?php
			
		}
	}
?>
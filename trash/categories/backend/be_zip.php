<?php
	include '../connect.php';
	$zip = @$_POST['zip'];
	if($zip) {
	$z = mysql_query("SELECT * FROM `syt_location` WHERE `zipcode` like '$zip%' or `place` like '$zip%' LIMIT 0 ,50");
	/*echo "Search Result</div>";
	echo "<div class='result-lists'>".mysql_num_rows($z)." result found..</div>";*/
	if(mysql_num_rows($z) == 0)
	{
		echo "<p>No area found</p>";
	}
	else
	{
		while($row = mysql_fetch_assoc($z))
		{
?>
			<p onclick="fill_zip('<?php echo $row['place']." (".$row['zipcode'].")";?>')" cc="<?php echo $row['place']." (".$row['zipcode'].")"?>"><?php echo $row['place']." (".$row['zipcode'].")"?></p>
<?php
			
		}
	}
	}
?>
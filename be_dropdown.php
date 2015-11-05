<?php
	include 'connect.php';
	$zip = @$_POST['zip'];
	if($zip) {
	$z = mysql_query("SELECT * FROM `syt_zip` WHERE `zip` like '$zip%' or `city` like '$zip%' LIMIT 0,10");
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
			<p onclick="fill('<?php echo $row['city']." (".$row['zip'].")";?>')"><?php echo $row['city']." (".$row['zip'].")"?></p>
<?php
			
		}
	}
	}
?>
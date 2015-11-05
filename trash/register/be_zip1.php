<?php
	include '../connect.php';
	$zip = @$_POST['zip'];
	if($zip) {
	$z = mysql_query("SELECT * FROM `syt_city` WHERE `state` like '%$zip' or `state` like '$zip%'");
	/*echo "Search Result</div>";
	echo "<div class='result-lists'>".mysql_num_rows($z)." result found..</div>";*/
	if(mysql_num_rows($z) == 0)
	{
		echo "<p>No state found</p>";
	}
	else
	{
		while($row = mysql_fetch_assoc($z))
		{
?>
			<p onclick="fill('<?php echo $row['state'] ;?>')"><?php echo $row['state']; ?></p>
<?php
			
		}
	}
	}
?>
<?php
session_start();
include 'connect.php';


?>
<table class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th><i class="icon-briefcase"></i> Name</th>
			<th class="hidden-phone"><i class="icon-question-sign"></i> Email</th>
			<th class="hidden-phone"><i class="icon-question-sign"></i> Location</th>
			<th class="hidden-phone"><i class="icon-question-sign"></i> desc</th>
			
																	
		</tr>
	</thead>
	
	<tbody>
																
	<?php
	$cc = @$_POST['cc'];

	$a = mysql_query("SELECT * FROM `syt_seller_reply` WHERE `postid` = '$cc'");
	if(mysql_num_rows($a) == 0)
	{
		echo "No reply ";
	}
	else
	{
	while($rr = mysql_fetch_assoc($a))
	{
																	
	?>
																
		<tr>
			<td><?php echo $rr['name']?></td>
																	
			<td><?php echo $rr['email']; ?></td>
			<td><?php echo $rr['location']; ?></td>
			<td><?php echo $rr['desc']; ?></td>
																	
																	
		</tr>
															
<?php
	}
}
?>
</tbody>
</table>
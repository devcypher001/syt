<option disabled="" selected=""></option>
<?php
include '../connect.php';

$s= @$_POST['s'];
if($s==1)
{
	$q1 = mysql_query("SELECT * FROM `syt_subcategory` WHERE `parent_category` = '$s'");
	while($r1 = mysql_fetch_assoc($q1))
	{
		$pp = $r1['parent_category'];
		$ppid = $r1['id'];
		$qk = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ppid'");
?>
		<optgroup label="<?php echo $r1['subcategory'];?>" style="">
			
			<?php
				while($t1 = mysql_fetch_assoc($qk))
				{		
			?>
					<option value="<?php echo $t1['sub_subcate']; ?>"><?php echo $t1['sub_subcate']; ?></option>
			<?php
				}		
			?>
		</optgroup>
<?php
	}
	
}
else if($s==3)
{
	$q2 = mysql_query("SELECT * FROM `syt_subcategory` WHERE `parent_category` = '$s'");
	while($r2 = mysql_fetch_assoc($q2))
	{
		$pp3 = $r2['parent_category'];
		$ppid3 = $r2['id'];
		$qk3 = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`='$ppid3'");
		
	?>
		<optgroup label="<?php echo $r2['subcategory'];?>" style="">
			
			<?php
				while($t2 = mysql_fetch_assoc($qk3))
				{		
			?>
					<option value="<?php echo $r2['subcategory'];?>"><?php echo $t2['sub_subcate']; ?></option>
			<?php
				}	
			?>
		</optgroup>
	<?php
	}
}
else
{
$q = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `parent_id`  = '$s'");
while($r2 = mysql_fetch_assoc($q)){

?>
	
    <option value="<?php echo $r2['sub_subcate'];?>"><?php echo $r2['sub_subcate'];?></option>
<?php
}
}
?>
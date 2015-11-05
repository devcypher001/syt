<?php
include '../connect.php';

$keyword = urlencode(@$_POST['keyword']);

$sql = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `sub_subcate` like '$keyword%' limit 0,4");

if($keyword == "")
{
	
}
else
{
	if(mysql_num_rows($sql) == 0)
	{
	}
	else
	{
		while($qq = mysql_fetch_assoc($sql))
		{
			$values = $qq['sub_subcate'];
?>
			<p onclick="fill('<?php echo $values;?>')" cc="<?php echo $values;?>"><?php echo $values;?></p>
<?php
			//echo $values
		}
	}
}


?>
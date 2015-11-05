<?php
include ('header.html');
?>
<br><br>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>Sender</th>
    <th>Receiver</th>		
    <th>Message</th>
  </tr>
  <?php
  include '../../connect.php';
  $q = mysql_query("SELECT * FROM `chat_history` WHERE 1");
  while($r = mysql_fetch_assoc($q))
  {
  ?>
  <tr>
    <td><?php echo name($r['sender'])." (".$r['sender'].")"; ?></td>
    <td><?php echo name($r['receiver'])." (".$r['receiver'].")"; ?></td>		
    <td><?php echo $r['message']; ?></td>
  </tr>
  
  <?php
  }
  ?>
 
</table>

</body>
</html>

<?php
function name($id)
{
	$a = mysql_query("SELECT `id`, `email`, `firstname`, `lastname`, `title` FROM `syt_registration` WHERE `id`='$id'");
	$fetch_a = mysql_fetch_array($a);
	
	return $fetch_a['firstname']." ".$fetch_a['lastname'];
}
?>
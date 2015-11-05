<?php 
include '../connect.php';
$name = @$_POST['name'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];

$sel = mysql_query("INSERT INTO `syt_contactus`(`id`, `name`, `email`, `phone`, `time`) VALUES ('','$name','$email','$phone',NOW())");

if($sel)
{
echo 1;
}
else
{

}
?>
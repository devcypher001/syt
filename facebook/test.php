<?php
session_start();
//echo "Testing"."<br>".$_SESSION['fb_first_name']." ".$_SESSION['fb_email']." ".$_SESSION['fb_last_name'];
?>

<input type="text" value="<?php if(!empty($_SESSION['fb_first_name'])){ echo $_SESSION['fb_first_name']; }?>"><br>
<input type="text" value="<?php if(!empty($_SESSION['fb_last_name'])){ echo $_SESSION['fb_last_name']; }?>"><br>
<input type="text" value="<?php if(!empty($_SESSION['fb_email'])){ echo $_SESSION['fb_email']; }?>"><br>
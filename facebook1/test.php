<?php
session_start();

echo $_SESSION['fb_email']." ".$_SESSION['fb_first_name']." ".$_SESSION['fb_last_name'];

?>
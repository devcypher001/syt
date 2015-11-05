<?php
session_start();

echo $_SESSION['syt_email']." ".$_SESSION['syt_name']." ".$_SESSION['syt_id'];
?>
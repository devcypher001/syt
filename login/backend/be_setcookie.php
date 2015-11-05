<?php
session_start();

$email = @$_POST['email'];
$password = str_rot13(@$_POST['password']);

setcookie('cookie_email', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie('cookie_password', $password, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
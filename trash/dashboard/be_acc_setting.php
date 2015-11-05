<?php 
include 'connect.php';
session_start();

$uid = $_SESSION['syt_id'];
$firstname = @$_POST['firstname'];
$lastname = @$_POST['lastname'];
$city = @$_POST['city'];
$zip = @$_POST['zip'];
$country = @$_POST['country'];
$dob = @$_POST['dob'];
$phone = @$_POST['phone'];
$experience = @$_POST['experience'];
$available = @$_POST['available'];
$service_distance = @$_POST['service_distance'];
$charge_mode = @$_POST['charge_mode'];
$charge = @$_POST['charge'];
$about = @$_POST['about'];

$query = mysql_query("UPDATE `syt_registration` SET `id`=[value-1],`email`=[value-2],`password`=[value-3],`firstname`=[value-4],`lastname`=[value-5],`individual`=[value-6],`category`=[value-7],`subcategory`=[value-8],`other`=[value-9],`experience`=[value-10],`experience_details`=[value-11],`doc`=[value-12],`phone`=[value-13],`address`=[value-14],`zip`=[value-15],`city`=[value-16],`country`=[value-17],`service_distance`=[value-18],`charge_mode`=[value-19],`charge`=[value-20],`title`=[value-21],`time`=[value-22],`service_day`=[value-23],`gender`=[value-24],`dob`=[value-25],`service_mode`=[value-26],`status`=[value-27] WHERE `id`= '$uid'");
?>
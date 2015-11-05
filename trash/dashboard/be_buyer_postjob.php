<?php 
session_start();
include 'connect.php';

$category = @$_POST['category'];
$subcategory = @$_POST['subcategory'];
$desc = @$_POST['desc'];
$delivery = @$_POST['delivery'];
$price = @$_POST['price'];
$zip = @$_POST['zip'];
$experience = @$_POST['experience'];

echo 1;
// echo $category." ".$subcategory." ".$desc." ".$delivery." ".$price." ".$zip." ".$experience;
?>
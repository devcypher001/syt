<?php
// Authorisation Detail
$aid = "630991";
$pin = "mark@1";

//Message
$message = "One Time Password for M&S EOSS Offer is 8765456. Please use this password to complete your transaction. For any query Contact Care.India@marksandspencer.com";
$message = urlencode($message);

//mobile no.
$mnumber = "919044824315";
//Prepare Data for Post
$data = "aid=".$aid."&pin=".$pin."&message=".$message."&mnumber=".$mnumber;

//Send data
$ch = curl_init('http://luna.a2wi.co.in:7501/failsafe/HttpLink');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);
?>
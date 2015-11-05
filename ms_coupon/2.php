<?php
$url = 'http://luna.a2wi.co.in:7501/failsafe/HttpLink?aid=630991&pin=mark@1&message=One%20Time%20Password%20for%20M%26S%20EOSS%20Offer%20is%20963125.%20Please%20use%20this%20password%20to%20complete%20your%20transaction.%20For%20any%20query%20contact%20Care.India@marksandspencer.com&mnumber=919044824315';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);

echo "<pre>";
var_dump($data);
echo "</pre>";


echo "<br>";
echo phpinfo();
?>
<?php



$response = file_get_contents("http://luna.a2wi.co.in:7501/failsafe/HttpLink?aid=630991&pin=mark@1&message=One%20Time%20Password%20for%20M%26S%20EOSS%20Offer%20is%20963125.%20Please%20use%20this%20password%20to%20complete%20your%20transaction.%20For%20any%20query%20contact%20Care.India@marksandspencer.com&mnumber=919044824315");
 
echo "<pre>";
print_r($response);
echo "</pre>";

?>
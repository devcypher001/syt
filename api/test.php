<?php


$response = file_get_contents("http://app.airloyal.com/airloyal/earn/callback/sellyourtime?clickMomentId=a45d5d44-941e-46c8-9782-0fa365176a02");
echo $response;

?>
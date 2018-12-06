<?php


$access_token = '7c6FPGLU6nsP3QE5d2s9pgju85poaZND45AMRWi73nijCeQ5OYk8lY6H0e/Jwu5tSw9cS+PbexnZ5nNAVA8ZmjFpnS9+mKrf6tCcOB/0SAySm6KfTXkYkjTg4Kcfl3mckYT0hPn9IYGzQrtcLeFODAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;


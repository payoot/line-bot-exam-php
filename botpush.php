<?php



require "vendor/autoload.php";

$access_token = '7c6FPGLU6nsP3QE5d2s9pgju85poaZND45AMRWi73nijCeQ5OYk8lY6H0e/Jwu5tSw9cS+PbexnZ5nNAVA8ZmjFpnS9+mKrf6tCcOB/0SAySm6KfTXkYkjTg4Kcfl3mckYT0hPn9IYGzQrtcLeFODAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1672ff9ceae711666053c8f367695407';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








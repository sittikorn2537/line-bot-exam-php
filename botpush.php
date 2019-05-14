<?php



require "vendor/autoload.php";

$access_token = 'ztUWHZm0506E1PRjg+1a/rKS1Bw7z8kKu6K76Tesu0Q3bAXKTwvVWwDy7J+PWakdK09K99zFPc7Kpm+zRC6qpYTiBRCfvUxzSGbPcdREkZLHun7+Q6o0sHKFjYY2o3zIbGmA2R18Lfxkp9oQEJN/UAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd40fa914d53691c6677ca90d2944f760';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








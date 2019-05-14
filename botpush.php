<?php



require "vendor/autoload.php";

$access_token = 'CxxKuynmFJ4QEcCoZ5fKv6ewbhA1oMhMt+ADsufaIqEZJtRgPrUmZyue+vV8ouiLK09K99zFPc7Kpm+zRC6qpYTiBRCfvUxzSGbPcdREkZKllowsl8Oxk8BR0vgHeGFFWdx38BLRFTpIEFEzC34vGgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd40fa914d53691c6677ca90d2944f760';

$pushID = 'U4385e178259a84dd936313a07a1d48b8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








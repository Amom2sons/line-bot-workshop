<?php



require "vendor/autoload.php";

$access_token = 'vJIEowPmdyfHgrc5O2TSSloPoXb6aiuyw1xQUBUxGImky2VMCHv/TYPOmdapEuvur85Sh6SSGYGumQxfk1vuSFd4lkYACEDzkI/aqKJQ9Vpu9QehboHvW7JsBGBgKAD1ecCbpLH0AliBEhFnHCY0NAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0bc40aeffb71f2f8314581d2e01ebed5';

$pushID = 'U8a92bfd43082c7ff22087c34228c57cd';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";








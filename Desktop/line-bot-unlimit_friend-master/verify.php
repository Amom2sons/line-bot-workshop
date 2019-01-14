<?php
$access_token = 'xuOp/Aj7Utmjv37trk4qihWI3Qv+zEZLv6kOi7AqXXReaFmg1HZhQXHRcYFnzMw6e6GFMMShBfYZz6vGESgPkaoOWwR9Py5uojc1v0lHTZwhn4O3BkqqPCC0w+3FSwwz3P877e+leOfoj8C2+5nnjAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

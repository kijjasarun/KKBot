<?php
$access_token = 'Qre+q6XDfi7RiHfRNEtprLiH/8PEU+R41AZmwPG9cJ0elJrmP2GgghIoP4fYAsQhpWZtIt4Nep10OjVUqnqpeg29JrkwSzqfl58B/2SZ0Sdf92ZiaVsn+O9kX6YS0XnO7TWWdKGXbhNpeAlREoBssAdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:5kn9i96mdejBDJE';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

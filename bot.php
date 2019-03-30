<?php
$access_token = 'pk42Vq1oXfJcRmu5oIfXDaUQtXWGlbaHFzIZwhpOtS2iOtdWqHjkF49xMYkTMD28Pd9SZ4ssq6CzJHm1+CiLNEaD1TGTUR+cXYhmorpmO1akrJzvT3HpLwamTNtA97bI05NWDPCvoiMjCXWmVBPvSAdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;

?>

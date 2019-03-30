<?php
$access_token = 'rheP69VO/QegnihKdbJ5zdmwNxutb3gbCQ9Mi2AbYRjwzjjp82X4BhS7npIPXYhrPd9SZ4ssq6CzJHm1+CiLNEaD1TGTUR+cXYhmorpmO1bpr095yLnduNosdIOqLw7cgOTQaSKOgwPjTgqlPp1o/gdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/oauth2/v2.1/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;

?>

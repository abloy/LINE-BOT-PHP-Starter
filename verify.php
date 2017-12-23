<?php
$access_token = 'mnaNbFoGAj5Q4BvKFTD9YooIYZi4wFi506VkJ95K8o8x/x5O1ZNOoITjEZBnQTcIvEVOGlGp4TUr22U+0O60a2RDSt1U99GPMV1wjci5PIrrPdrWQWvEPWVFSPbN5dMiw/oIl62f06NYh6krW8cVGwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
<?php
// set API Access Key
$access_key = 'd5693a1739834f429587b1bda3836a60';

// Initialize CURL:
$ch = curl_init('http://api.coinlayer.com/live?access_key='.$access_key);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$arr_result = json_decode($json, true);

echo $json;
<?php
$all = 0;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://115.29.79.91:5000/get_err");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);
$all += len(json_decode($data));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://120.79.76.18:5000/get_err");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$all += len(json_decode($data));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://120.78.156.12:5000/get_err");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$all += len(json_decode($data));

echo $all;
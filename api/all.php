<?php
$all = 0;
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);
$all += len(json_decode($data));

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$all += len(json_decode($data));

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$all += len(json_decode($data));

echo $all;

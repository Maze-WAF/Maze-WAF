<?php
ini_set('display_errors', 0);
$ip = $_GET['ip'];
$m = $_GET['m'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$ip:5000/$m");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); //  PHP 5.6.0 后必须开启
$data = curl_exec($ch);
<?php

$ip = $_SERVER["REMOTE_ADDR"];
//date_default_timezone_set('Asia/Tokyo');
//$access_date = date("Y-m-d_H:i:s"); // 2021-01-12 09:45:31
//$access_date_unix = time(); // UNIX

//var_dump($ip);
//var_dump($access_date);
//var_dump($access_date_unix);

//add_log($ip);
function add_log($ip){
    date_default_timezone_set('Asia/Tokyo');
    $access_date = date("Y-m-d_H:i:s"); // 2021-01-12 09:45:31
    $access_date_unix = time(); // UNIX
    $path = "log/" . substr($access_date, 0, 10) . ".log";
//    $mail = "skmt.3b.kzm.knpch@gmail.com";
//    $currentdate = date("Y-m-d_H:i:s");
    $msg = $access_date_unix . "|" . $access_date . "|" . $ip;
//    error_log($msg . "\n", 1, $mail); // Warning: error_log(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\myapps\IpLogger\index.php on line 20
    error_log($msg . "\n", 3, $path);
}
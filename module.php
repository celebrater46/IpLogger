<?php

$ip = $_SERVER["REMOTE_ADDR"];

function add_log($ip){
    date_default_timezone_set('Asia/Tokyo');
    $access_date = date("Y-m-d_H:i:s"); // 2021-01-12 09:45:31
    $access_date_unix = time(); // UNIX
    $path = "log/" . substr($access_date, 0, 10) . ".log";
    $msg = $access_date_unix . "|" . $access_date . "|" . $ip;
    error_log($msg . "\n", 3, $path);
}
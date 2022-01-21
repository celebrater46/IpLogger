<?php

require_once "module.php";

$ip = $_SERVER["REMOTE_ADDR"];

add_log($ip);

var_dump($ip);
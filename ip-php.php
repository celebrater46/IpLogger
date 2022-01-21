<?php

require_once "module.php";

$ip = $_SERVER['REMOTE_ADDR'];

add_log($ip);

echo "document.write('IP from PHP: " . $ip . "');";
echo "var IP = '" . $ip . "';";
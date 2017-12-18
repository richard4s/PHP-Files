<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
require 'php/block_ip_address.php';

foreach($ip_blocked as $ip) {
	if($ip == $ip_address) {
		die('Your IP address, '.$ip_address.' has been blocked.');
	}
}

?>

<h1>Welcome!</h1>

</body>
</html> 
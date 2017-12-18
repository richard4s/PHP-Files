<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function echo_ip() {
		global $user_ip;
		$string = 'Your IP address is '. $user_ip;
		echo $string;
	}

echo echo_ip();

 ?>

</body>
</html> 
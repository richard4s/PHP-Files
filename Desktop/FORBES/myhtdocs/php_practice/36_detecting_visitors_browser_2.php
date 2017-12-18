<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
$browser = get_browser(null, true);
$browser = strtolower($browser['browser']);

if($browser != 'chrome') {
	echo 'You\'re not using Google Chrome. Please do!';
} else{
	echo 'You\'re using Google Chrome.';
}

?>

</body>
</html> 
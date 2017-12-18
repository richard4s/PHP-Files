<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

	$string = 'This is a string.';

	if(preg_match('/ /', $string)) {
		echo 'Match Found.';
	} else {
		echo 'No match found.';
	}

 ?>


</body>
</html> 
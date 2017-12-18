<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

	$offset = 0;
	$find = 'is';
	$find_length = strlen($find);
	$string = 'This is a string, and it is an example.';

	//The number given is the offset, telling it where to start searching from in the string(Character Array). Arrays start at 0.
	//strpos() returns the position.
	strpos($string, $find, 10);

	while ($string_position = strpos($string, $find, $offset)) {
		echo '<b>'.$find.'</b> found at '. $string_position.'<br />';
		$offset = $string_position + $find_length;
	}

?>
 
</body>
</html> 
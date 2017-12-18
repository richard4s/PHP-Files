<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

	//Usage
	// str_replace(search, replace, subject);
	// str_replace(looking for, replace, string);

	$string = 'This is a string, and is an example.';

	echo $string.'<br />';

	$new_string = str_replace('is', '', $string);

	echo $new_string. '<br />';

	$find = array('is', 'string', 'example');
	$string = 'This is a string, and is an example.';

	$new_string = str_replace($find, '', $string);

	echo $new_string. '<br />';

	$new_find = array('IS', 'STRING', '');
	$completed = str_replace($find, $new_find, $string);

	echo $completed;

?>
 
</body>
</html> 
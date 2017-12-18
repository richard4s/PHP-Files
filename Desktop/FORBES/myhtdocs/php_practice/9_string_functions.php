<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	// $string = 'This is an example string & this is a tutorial..';
	// $count = str_word_count($string, 1, '&.');

	// print_r($count);

	$string = 'abcdefghijklmnop0123456789';
	$string_shuffled = str_shuffle($string);

	// prints just 5 characters
	//$half = substr($string_shuffled, 0, 5);

	$half = substr($string_shuffled, 0, strlen($string) / 2);

	echo $half.'<br />';

	$string = 'This is an example string.';
	$string_reverse = strrev($string);

	echo $string_reverse;

 ?>

</body>
</html> 
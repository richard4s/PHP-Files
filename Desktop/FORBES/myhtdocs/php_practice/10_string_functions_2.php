<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$string_one = 'This is my essay, I\'m going to be talking about php.';
	$string_two = 'This is my essay. I will be talking about the subject php.';

	similar_text($string_one, $string_two, $result);
	echo 'The similarity between is, '. $result. '<br />';

	$someString = 'This is an example string.';
	$str_length = strlen($someString);

	echo $str_length;

 ?>

</body>
</html> 
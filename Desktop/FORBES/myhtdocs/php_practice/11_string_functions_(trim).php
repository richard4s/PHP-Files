<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$string = 'This is an example string';
	$string_trimmed = trim($string);

	//ltrim() to trim the left-hand-side of the string
	//rtrim() to trim the right-hand-side of the string
	echo $string_trimmed. '<br />';

	$string = 'This is a <img src ="image.jpg"> string.';
	$string_slashes = htmlentities(addslashes($string));

	echo $string_slashes. '<br />';
	echo stripslashes($string_slashes);

 ?>

</body>
</html> 
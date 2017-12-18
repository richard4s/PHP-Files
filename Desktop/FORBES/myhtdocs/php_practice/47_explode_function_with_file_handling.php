<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$filename = 'append.txt';
$handle = fopen($filename, 'r');

$datain = fread($handle, filesize($filename));

$names_array = explode(',', $datain);

foreach($names_array as $name) {
	echo $name.'<br>';
}

?>

</body>
</html> 
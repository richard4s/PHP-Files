<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

// $file_org = 'image.jpg';

// $file = rand(1000, 9999).md5($file_org).rand(1000, 9999);
// echo $file;

$filename = 'file.txt';

if(file_exists($filename)) {
	echo 'File already exists.';
} else{
	$handle = fopen($filename, 'w');
	fwrite($handle, 'Nothing');
	fclose($handle);
}

?>

</body>
</html> 
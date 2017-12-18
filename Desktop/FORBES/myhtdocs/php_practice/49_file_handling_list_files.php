<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$directory = 'files';

if($handle = opendir($directory.'/')) {
	echo 'Looking inside \''.$directory.'\':<br />';

	while($file = readdir($handle)) {
		if ($file != '.'  && $file != '..') {
			echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br />';
		}
		
	}
}

?>

</body>
</html> 
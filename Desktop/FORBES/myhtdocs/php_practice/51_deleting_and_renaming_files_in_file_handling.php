<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

//Deleting
$filename = 'filetodelete.txt';

if(@unlink($filename)) {
	echo 'File <strong>'.$filename.'</strong> has been deleted.';
} else {
	echo 'File cannot be deletd.<br /><br />';
}


//Renaming
$filename = 'filetorename.txt';
$rand = rand(10000, 99999);

if (rename($filename, $rand.'.txt')) {
	echo 'File <strong>'.$filename.'</strong> has been removed to <strong>'.$rand.'.txt</strong>';
} else{
	echo 'Error renaming.';
}

?>

</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$day = 'Monday';

	switch($day) {
		case 'Saturday':
		case 'Sunday';
			echo 'It\'s a weekend.';
		break;

		default:
			echo 'Not a weekend.';
		break;
	}
	
 ?>

</body>
</html> 
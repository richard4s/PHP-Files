<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$counter = 1;
	
	while ($counter <= 10){
		echo $counter.' Hello<br />';
		$counter++;
	}
	
	// Infinite loop when value in the while = 1.
	// Nothing happens when value in the while = 0.
	while (0){
		echo 'Another Hello <br />';
	}
	
 ?>

</body>
</html> 
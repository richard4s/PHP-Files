<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$food = array('Healthy'=>
							array('Salad', 'Vegetables', 'Pasta'),
				'Unhealthy'=>
							array('Pizza', 'Ice cream'));

	foreach($food as $element => $inner_array) {
		echo '<b>'.$element.'</b><br />';
		foreach($inner_array as $item) {
			echo $item.'<br />';
		}
	}

 ?>


</body>
</html> 
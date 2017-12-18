<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

// $rand = rand();
// $max = getrandmax();

if (isset($_POST['roll'])) {
	//The function takes the lower(1) and upper limit(6)
	$rand = rand(1, 6);
	echo 'You rolled a '.$rand;
}

?>

<form action="28_random_number_generation.php" method="POST">
	<input type="submit" name="roll" value="Roll dice.">
</form>
 
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	$number = 80;
	$upper = 1000;
	$lower = 500;
	
	if ($number > $lower && $number <= $upper){
		echo 'Ok!';
	}else{
		echo 'Number must be between '.$lower.' and '.$upper;
	}
	
	echo '<br />';
	
	$canbe1 = 2;
	$canbe2 = 4;
	
	if ($number != $canbe1 && $number != $canbe2){
		echo 'Ok.';
	}else{
		echo 'Not Okay!';
	}
	
 ?>

</body>
</html> 
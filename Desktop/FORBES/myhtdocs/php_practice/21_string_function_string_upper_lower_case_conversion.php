<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

	$string = 'I Could Be Any Case.';
	$string_lower = strtolower($string);
	$string_upper = strtoupper($string);

	echo $string_lower. '<br />'.$string_upper. '<br /><br />';

	if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
		$user_name = $_GET['user_name'];
		$user_name_lc = strtolower($user_name);

		if ($user_name_lc == 'alex') {
			echo 'You are the best, '.$user_name;
		}
	}

 ?>

 <form action="" method="GET">
 	Name: <input type="text" name="user_name"><br /><br />
 	<input type="submit" value="Submit">
 </form>

 
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$match = 'pass123';

if(isset($_POST['password'])) {

	$password = htmlentities($_POST['password']);

	if(!empty($password)) {
		if($password == $match) {
			echo 'That is correct.';
		} else{
			echo 'That is incorrect!';
		}
	} else {
		echo 'Please enter a password.';
	}

}

?>

<form action="38_working_with_post_variables.php" method="POST">
	Password:<br />
	<input type="password" name="password"><br />
	<br />
	<input type="submit" value="Submit">
</form>

</body>
</html> 
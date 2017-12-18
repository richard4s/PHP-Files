<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
session_start();

//works with php/sessions_(unset).php and php/unset.php
if(isset($_POST['user']) && isset($_POST['age'])) {
	$user = $_POST['user'];
	$age = $_POST['age'];

	if(!empty($user)) {
		$_SESSION['username'] = $user;
		$_SESSION['age'] = $age;
	} else {
		echo 'Session failed.';
	}
}

?>

<form action="42_unsetting_php_sessions.php" method="POST">
	Username:<br /><input type="text" name="user" placeholder="Username"><br /><br />
	Age:<br /><input type="text" name="age"><br /><br />
	<input type="submit" value="Submit">
</form><br />

<a href="php/set_cookie.php"></a>

</body>
</html> 
<?php
session_start();

echo 'Welcome, '.$_SESSION['username'].'. You are '.$_SESSION['age'];

// if(isset($_SESSION['username'])) {
// 	$username = $_SESSION['username'];
// 	echo 'Welcome, '.$username;
// } else{
// 	echo 'Please Log In.';
// }

?>

<a href="set_cookie.php"></a>
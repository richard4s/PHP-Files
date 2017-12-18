<?php
session_start();

if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	echo 'Welcome, '.$username;
} else{
	echo 'Please Log In.';
}



//$arr = array(1,2,2,3,4);
?>

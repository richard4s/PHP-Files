<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php
	
	@mysql_connect('localhost', 'root', '') or die("Could not connect to database.");
	echo 'Connected!';
	
 ?>

</body>
</html> 
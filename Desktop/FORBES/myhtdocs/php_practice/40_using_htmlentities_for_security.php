<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

if(isset($_GET['day']) && isset($_GET['date']) &&isset($_GET['year'])) {
	$day = htmlentities($_GET['day']);
	$date = htmlentities($_GET['date']);
	$year = htmlentities($_GET['year']);

	if(!empty($day) && !empty($date) && !empty($year)) {
		echo 'It is '.$day. ' '.$date.' '.$year;
	} else{
		echo 'Fill in all fields.';
	}

}

?>

<form action="40_using_htmlentities_for_security.php" method="GET">
	Day: <br /><input type="text" name="day"><br /><br />
	Date: <br /><input type="text" name="date"><br /><br />
	Year:<br /><input type="text" name="year"><br /><br />

	<input type="submit" value="Submit">
</form>

</body>
</html> 
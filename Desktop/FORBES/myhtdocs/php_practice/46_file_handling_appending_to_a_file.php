<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

if(isset($_POST['name'])) {
	$name = $_POST['name'];

	if(!empty($name)) {
		$handle = fopen('append.txt', 'a');
		fwrite($handle, $name."\n");
		fclose($handle);
	} else {
		echo 'Please type a name.';
	}

}

?>

<form action="46_file_handling_appending_to_a_file.php" method="POST">
	Name: <input type="text" name="name" /><br /><br />
	<button type="submit">Submit</button>
</form>

</body>
</html> 
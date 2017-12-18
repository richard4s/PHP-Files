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

		$handle = fopen('new_names.txt', 'a');
		fwrite($handle, $name."\n");
		fclose($handle);

		echo '<b>Current names in file: </b>';

		$count = 1;
		$readin = file('new_names.txt');
		$readin_count = count($readin);

		foreach($readin as $fname) {
			echo trim($fname);
			if($count < $readin_count) {
				echo ', ';
			}
			$count++;
		}

	} else{
		echo 'Please type a name.';
	}
}

?>

<form action="45_file_handling_reading_to_a_file.php" method="POST">
	Name: <input type="text" name="name" /><br /><br />
	<button type="submit">Submit</button>
</form>

</body>
</html> 
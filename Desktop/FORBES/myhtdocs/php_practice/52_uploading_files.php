<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$name = $_FILES['file']['name'];
// $size = $_FILES['file']['size'];
// $type = $_FILES['file']['type'];
echo $tmp_name = $_FILES['file']['tmp_name'];


if(isset($name)) {
	if(!empty($name)) {
		
		$location = 'uploads/';
		if (move_uploaded_file($tmp_name, $location.$name)) {
			echo 'Uploaded!';
		}

	} else {
		echo 'Please choose a file.';
	}
}

?>

<form action="52_uploading_files.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br /><br />
	<input type="submit" value="Submit" >
</form>

</body>
</html> 
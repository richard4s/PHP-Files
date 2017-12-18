<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

	<?php $array1 = array(4, 8, 15, 16, 23, 42) ?>
	<?php echo $array1[1]; ?>
	<?php $array2 = array(6, "fox", "dog", array("x", "y", "z")); ?>
	<?php echo $array2[3][1]; ?>	
	<?php $array2[3] = "cat"; ?>
	<br />
	<?php echo $array2[3]; ?>
	<br />
	<?php $array3 = array("first_name" => "Afolabi", "last_name" => "Oluwo"); ?>
	<?php echo $array3["first_name"]." ".$array3["last_name"]; ?>
	<?php $array3["first_name"] = "Richard"; ?><br />
	<?php echo $array3["first_name"]." ".$array3["last_name"]; ?>
	<br />
	<?php print_r($array2); ?>
	<pre><?php print_r($array2); ?></pre>
	
</body>
</html> 
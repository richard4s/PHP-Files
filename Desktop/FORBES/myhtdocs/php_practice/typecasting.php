<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

	<?php 
		$var1 = "2 brown foxes";
		$var2 = $var1 + 3;
		echo $var2;
	?>
	<br />
	<?php
		echo "2 brown foxes - "; echo gettype($var1); echo "<br />";
		echo "5 - "; echo gettype($var2); echo "<br />";
		settype($var2, "string"); // Setting $var2(5) from an integer to string
		echo gettype($var2); echo "<br />"; // Prints out the string
		$var3 = (int)$var1; //Setting $var1 from a string to integer
		echo gettype($var3); echo "<br />"; // Prints out the integer
		/* //Resetting from variable to string test 
		settype($var3, "string");
		echo gettype($var3);
		*/
	?>
	<br />
	Array: <?php echo is_array($var1); ?><br />
	Boolean: <?php echo is_bool($var1); ?><br />
	Float: <?php echo is_float($var1); ?><br />
	Integer: <?php echo is_int($var1); ?><br />
	Null: <?php echo is_null($var1); ?><br />
	Numeric: <?php echo is_numeric($var1); ?><br />
	String: <?php echo is_string($var1); ?><br /> 

</body>
</html> 
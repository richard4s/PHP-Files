<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

	 <?php
		$max_width = 980;
		define("MAX_WIDTH", 980); 
		echo MAX_WIDTH; echo "<br />";
		
		/* This will give a parse error because it's a constant
		MAX_WIDTH += 1;
		echo MAX_WIDTH;
		*/
		
		$max_width += 1;
		echo $max_width;
	 ?>

</body>
</html> 
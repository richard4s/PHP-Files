<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php 
	$firstString = "The quick brown fox";
	$secondString = " jumped over the lazy dog.";
?>
<?php 
	$thirdString = $firstString;
	$thirdString .= $secondString;
	echo $thirdString;
?>
<br />
	Lowercase: <?php echo strtolower($thirdString); ?><br />
	Uppercase: <?php echo strtoupper($thirdString); ?><br />
	Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
	Uppercase words: <?php echo ucwords($thirdString); ?><br />
	<br />
	Length: <?php echo strlen($thirdString); ?><br />
	Trim: <?php echo $fourthString = $firstString . trim($secondString); ?><br />
	Find: <?php echo strstr($thirdString, "brown"); ?><br />
	Replace: <?php echo str_replace("quick", "super-fast", $thirdString); ?><br />
	<br />
	Repeat: <?php echo str_repeat($thirdString, 2); ?><br />
	Make substring: <?php echo substr($thirdString, 5, 10); //Echoes/Prints from the 5th line to the 10th line?><br /> 
	Find position: <?php echo strpos($thirdString, "brown"); ?><br />
	Find character: <?php echo strchr($thirdString, "z"); ?><br />

</body>
</html> 
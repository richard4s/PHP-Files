<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php $var1 = 3.14; echo $var1; ?><br />
<?php echo 4/3; ?><br />
<br />
Floating point: <?php echo $myFloat = 3.14; ?><br />
Round: <?php echo round($myFloat, 1); ?><br />
Ceiling: <?php echo ceil($myFloat); ?><br />
Floor: <?php echo floor($myFloat); ?><br />
<br />
Absolute value: <?php echo abs(-45); ?><br />
Exponential: <?php echo pow(2, 4); ?><br />
Square root: <?php echo sqrt(49); ?><br />
Modulo: <?php echo fmod(20, 7); ?><br />
Random: <?php echo rand(); ?><br />
Random (min, max): <?php echo rand(1, 10); ?><br /> 

</body>
</html> 
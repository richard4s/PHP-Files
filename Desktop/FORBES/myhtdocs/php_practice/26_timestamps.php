<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$time = time();
$actual_time = date('H:i:s', $time);

$actual_date = date('D M Y', $time);

echo 'The actual TIME is '.$actual_time.'<br />';
echo 'The actual DATE is '.$actual_date;

?>
 
</body>
</html> 
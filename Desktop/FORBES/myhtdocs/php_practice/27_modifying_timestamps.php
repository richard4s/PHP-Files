<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$time = time();
$time_now = date('H:i:s @ D M Y', $time);
//$time_modified = date('H:i:s @ D M Y', $time - 60);
//$time_modified = date('H:i:s @ D M Y', strtotime('+1 month'));
$time_modified = date('H:i:s @ D M Y', strtotime('+1 year  2 weeks 4 days 6 hours'));

echo 'The time now is '.$time_now.'<br />The time modified is ';

echo $time_modified;

?>
 
</body>
</html> 